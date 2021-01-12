<?php


class PropertyUploadController{

    const PROPERTY_UPLOAD_PAGE_SLUG = 'property-upload';

    const EDIT_PAGE     = 'edit';
    const NEW_PAGE      = 'new';
    const ARCHIVE_PAGE  = 'archive';

    public $upload_request;

    /**
     * Initialize the class and its properties
     */
    public function __construct(){

        $this->upload_request = new Homi_Addons_Upload_Request();

    }



    /**
     * Create a rewrite rule for pages to recognise calendar as query var
     * The calendar query var will be used to create the pages for property availability on the front end
     */
    public function wpd_add_my_endpoint(){
        add_rewrite_endpoint( 'request', EP_PAGES );
    }



    /**
     * This code is responsible for checking if the user can access the Upload Property pages
     *
     * @param $property_upload_page
     */
    public function access_controller( $property_upload_page ){

        if( ! is_user_logged_in() ){

            wp_redirect( home_url('login'). "/?redirect_to=".home_url( self::PROPERTY_UPLOAD_PAGE_SLUG ) );

        }

        if( !current_user_can('administrator')) {

            $user = wp_get_current_user();

            switch( $property_upload_page ){

                case self::ARCHIVE_PAGE:

                    $count = $this->get_user_requests_count();

                    if( $count === 0 ){

                        wp_redirect( home_url( self::PROPERTY_UPLOAD_PAGE_SLUG . '/' . self::NEW_PAGE ) );

                    }

                    if( $count === 1 ){

                        $user_requests = $this->get_user_requests();
                        $post_id = $user_requests[0];

                        if( $this->upload_request->get_status( $post_id ) === 'draft' ){

                            wp_redirect( home_url( self::PROPERTY_UPLOAD_PAGE_SLUG . '/' . self::EDIT_PAGE . '/request/' . $post_id ) );

                        }

                    }

                    break;

                case self::NEW_PAGE:

                    //On new page check if user has a draft

                    break;


                case self::EDIT_PAGE:

                    $post_id  = get_query_var('request');


                    if( empty( $post_id ) ){

                        wp_redirect( home_url( self::PROPERTY_UPLOAD_PAGE_SLUG ) );

                    }

                    $post_author_id = intval( get_post_field( 'post_author', $post_id ) );


                    if( $post_author_id !== $user->ID ){

                        wp_redirect( home_url( self::PROPERTY_UPLOAD_PAGE_SLUG ) );

                    }

                    break;

            }

        }

    }

    public function get_user_requests(){

        $user = wp_get_current_user();

        return $this->upload_request->get_requests_ids_by_user_args( $user->ID );

    }


    public function get_user_requests_count(){

        $user = wp_get_current_user();

        $requests = $this->upload_request->get_requests_ids_by_user_args( $user->ID );

        return ( empty( $requests ) ? 0 : count( $requests ) );

    }


    public function display_form( $options ){

        $sections = array(
          array(
                'title'             => 'Landlord Information',
                'fields'            => Homi_Addons_Upload_Request::LANDLORD_FIELDS
          ),
//          array(
//                'title'             => 'Energy Certificate Information',
//                'fields'            => Homi_Addons_Upload_Request::PEA_FIELDS
//          ),
          array(
                'title'             => 'Primary Information',
                'fields'            => Homi_Addons_Upload_Request::PRIMARY_INFO_FIELDS
          ),
          array(
                'title'             => 'Equipment Information',
                'fields'            => Homi_Addons_Upload_Request::EQUIPMENT_FIELDS
          ),
          array(
                'title'             => 'Additional Information',
                'fields'            => Homi_Addons_Upload_Request::EXTRA_INFO_FIELDS
          ),
        );

        $counter = 0;

        foreach ( $sections as $section ): $counter++; ?>

        <section class="row bg-white card margin-bottom-50">

            <div class="col s12">

                <h2 class="flex flex-center">
                    <span class="counter"><?php echo $counter; ?></span>
                    <?php echo $section['title']; ?>
                </h2>

            </div>

            <?php $this->display_form_fields( $section['fields'], $options ); ?>

            <div class="col s12">

                <button type="submit" name="upload_request_action" value="<?php echo $options['form_type']; ?>" class="btn-primary left">
                    Save
                </button>

                <p class="notice">
                    You can temporarily save the filled data and come back to re edit the information of you property.
                </p>

            </div>

        </section>

        <?php endforeach; ?>

        <section class="row bg-white card margin-bottom-50">

            <div class="col s12">

                <h2 class="flex flex-center">
                    <span class="counter"><?php echo $counter + 1; ?></span>
                    Submit the final form request
                </h2>

            </div>

            <div class="col s12">

                <p>
                    If you have filled all the information and you want to submit the property upload request click on the button below.
                    <br>You can click on the save button on each section to re edit the upload request form until everything is filled.
                </p>

                <div class="consent-item input-field" style="margin-bottom: 15px;">

                    <label>
                        <input id="submission_consent" type="checkbox" class="filled-in" />
                        <span>
                            I ensure the information entered is valid and does not need any further change.
                        </span>
                    </label>

                </div>

                <strong class="consent-notice hide">
                    You need to consent that the information is correct.
                </strong>

                <button type="submit" name="upload_request_action" value="final_submission" class="btn-primary upload-request-submit">
                    Final Submission
                </button>

            </div>

        </section>

        <?php

    }


    public function display_form_fields( $fields, $options ){

        foreach( $fields as $field ){

            switch( $field['type'] ){

                case 'radio':

                    $this->radio_field( $field, $options );

                    break;

                case 'image':



                    break;

                default:

                    $this->input_field( $field, $options );

            }

        }

    }

    private function radio_field( $field, $options ){

        $request_value = '';

        if( isset( $options['upload_request'] ) ){
            $keys_index         = array_flip( Homi_Addons_Upload_Request::META_FIELDS_SLUG );
            $uploadRequest      = $options['upload_request'];
            $property           = $keys_index[ $field['id'] ];
            $request_value      = $uploadRequest->$property;
        }

        ?>

        <div class="<?php echo $field['homi_class']; ?>">

            <div class="upload-field-wrapper">

                <label>
                    <?php echo $field['name']; ?>
                </label>

                <div class="radio-inline display-block">

                    <?php foreach( $field['options'] as $value => $label ): ?>

                        <label>
                            <input name="<?php echo $field['id']; ?>" type="radio" value="<?php echo $value; ?>" <?php echo ( $request_value === $value ? 'checked' : ''); ?>
                            class="<?php echo (isset( $field['input_class'] ) ? $field['input_class'] : ''); ?>" />
                            <span><?php echo $label; ?></span>
                        </label>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

        <?php

    }


    private function input_field( $field, $options ){

        $request_value = '';

        if( isset( $options['upload_request'] ) ){
            $keys_index         = array_flip( Homi_Addons_Upload_Request::META_FIELDS_SLUG );
            $uploadRequest      = $options['upload_request'];
            $property           = $keys_index[ $field['id'] ];
            $request_value      = $uploadRequest->$property;
        }

        ?>

        <div class="<?php echo $field['homi_class']; ?>">

            <div class="upload-field-wrapper">

                <div class="input-field">
                    <label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label>
                    <input name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" type="<?php echo $field['type']; ?>"
                           <?php echo ( $field['type'] === 'date' ? 'data-date-format="d/m/Y"' : '' ); ?>
                           value="<?php echo $request_value; ?>" class="<?php echo (isset( $field['input_class'] ) ? $field['input_class'] : ''); ?>" >
                </div>

            </div>

        </div>

        <?php

    }


    public function save_controller(){

        if( isset( $_POST['property_upload_form'] ) ){

            if( isset( $_POST['request_id'] ) && !empty( $_POST['request_id'] ) ){

                $this->save_edit_upload_request( $_POST );

            }
            else {

                $this->save_new_upload_request( $_POST );

            }

        }

    }


    private function mapMeta( $data ){

        $meta_input     = array();

        foreach( Homi_Addons_Upload_Request::META_FIELDS_SLUG as $meta_key ){

            if( isset( $data[ $meta_key ] ) && !empty( $data[ $meta_key ] ) ){

                $meta_input[ $meta_key ] = $data[ $meta_key ];

            }

        }

        $meta = Homi_Addons_Upload_Request::META_FIELDS_SLUG;

        if( !empty( $data[ $meta['price'] ] ) &&  !empty( $data[ $meta['size'] ] ) && intval( $data[ $meta['size'] ] ) !== 0 ){

            $price_sqm = intval( $data[ $meta['price'] ] ) / intval( $data[ $meta['size'] ] );

            $meta_input[ $meta['price_sqm'] ] = round( $price_sqm, 2);
        }

        if( isset( $_POST['final_submission'] ) ){
            $meta_input[ $meta['final_submission'] ] = 'yes';
        }

        $meta_input[ $meta['condition'] ] = 'other';

        return $meta_input;

    }


    private function save_new_upload_request( $data ){

        $meta_input     = $this->mapMeta( $data );
        $user           = wp_get_current_user();
        $user_id        = $user->ID;


        if( !empty( $data['upload_request_property_category'] ) && !empty( $data['upload_request_list_type'] ) && !empty( $data['upload_request_suburb'] )  ){

            $title = $data['upload_request_property_category'] . ' for ' . $data['upload_request_list_type'] . ' in '. $data['upload_request_suburb'];

        }
        else {

            $title = 'Draft request by ' . $user->first_name . ' ' . $user->last_name;

        }


        $request = array(
            'post_title'    => $title,
            'post_status'   => 'publish',
            'post_type'     => Homi_Addons_Upload_Request::POST_TYPE_NAME,
            'post_author'   => $user_id,
            'meta_input'    => $meta_input,
        );

        $new_request = wp_insert_post( $request, true );

        if( !$new_request instanceof WP_Error ){

            $emailUpload = new EmailUploadController( $new_request );
            $emailUpload->sendEmail();

            if( isset( $_POST['final_submission'] ) ){

                $url = home_url( 'property-upload/thank-you/' . '?request='. $new_request );

            }
            else {

                $url = home_url( self::PROPERTY_UPLOAD_PAGE_SLUG . '/' . self::EDIT_PAGE . '/request/'. $new_request );

            }

            wp_redirect( $url );
            exit();

        }

    }


    private function save_edit_upload_request( $data ){

        $meta_input     = $this->mapMeta( $data );
        $user_id        = $data['user_id'];
        $user           = get_user_by('ID', $user_id );

        if( !empty( $data['upload_request_property_category'] ) && !empty( $data['upload_request_list_type'] ) && !empty( $data['upload_request_suburb'] )  ){

            $title = $data['upload_request_property_category'] . ' for ' . $data['upload_request_list_type'] . ' in '. $data['upload_request_suburb'];

        }
        else {
            $title = 'Draft request by ' . $user->first_name . ' ' . $user->last_name;
        }


        $request = array(
            'ID'            => $data['request_id'],
            'post_title'    => $title,
            'post_status'   => 'publish',
            'post_type'     => Homi_Addons_Upload_Request::POST_TYPE_NAME,
            'post_author'   => $user_id,
            'meta_input'    => $meta_input,
        );

        wp_update_post( $request, true );

        $emailUpload = new EmailUploadController( $data['request_id'] );
        $emailUpload->sendEmail();

        if( isset( $_POST['final_submission'] ) ){

            $url = home_url( 'property-upload/thank-you/' . '?request='. $data['request_id'] );

        }
        else {

            $url = home_url( self::PROPERTY_UPLOAD_PAGE_SLUG . '/' . self::EDIT_PAGE . '/request/'. $data['request_id'] );

        }

        wp_redirect( $url );
        exit();

    }


}
