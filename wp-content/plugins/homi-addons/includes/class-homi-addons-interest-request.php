<?php

class Homi_Addons_Interest_Request{

    const POST_TYPE_NAME = 'interest_request';

    const META_FIELDS_SLUG = [
        'requester_first_name'      => self::POST_TYPE_NAME . '_requester_first_name',
        'requester_last_name'       => self::POST_TYPE_NAME . '_requester_last_name',
        'requester_email'           => self::POST_TYPE_NAME . '_requester_email',
        'area_1'                    => self::POST_TYPE_NAME . '_area_1',
        'area_2'                    => self::POST_TYPE_NAME . '_area_2',
        'area_3'                    => self::POST_TYPE_NAME . '_area_3',
        'min_size'                  => self::POST_TYPE_NAME . '_min_size',
        'min_bedrooms'              => self::POST_TYPE_NAME . '_min_bedrooms',
        'max_price'                 => self::POST_TYPE_NAME . '_max_price',
        'type'                      => self::POST_TYPE_NAME . '_type',
    ];

    const AJAX_INSERT_REQUEST = 'ajax_insert_interest_request';
    const AJAX_UPDATE_REQUEST = 'ajax_update_interest_request';

    public function register_post_type() {

        $labels = array(
            'name'               => __( 'Interest Requests', Homi_Addons::PLUGIN_NAME ),
            'singular_name'      => __( 'Interest Request', Homi_Addons::PLUGIN_NAME ),
            'menu_name'          => _x( 'Interest Requests', 'admin menu', Homi_Addons::PLUGIN_NAME ),
            'name_admin_bar'     => _x( 'Interest Request', 'add new on admin bar', Homi_Addons::PLUGIN_NAME ),
            'add_new'            => _x( 'Add New Request', Homi_Addons::PLUGIN_NAME ),
            'add_new_item'       => __( 'Add New Request', Homi_Addons::PLUGIN_NAME ),
            'new_item'           => __( 'New Interest Request', Homi_Addons::PLUGIN_NAME ),
            'edit_item'          => __( 'Edit Interest Request', Homi_Addons::PLUGIN_NAME ),
            'view_item'          => __( 'View Interest Request', Homi_Addons::PLUGIN_NAME ),
            'all_items'          => __( 'All Interest Requests', Homi_Addons::PLUGIN_NAME ),
            'search_items'       => __( 'Search Interest Requests', Homi_Addons::PLUGIN_NAME ),
            'parent_item_colon'  => __( 'Parent Interest Requests:', Homi_Addons::PLUGIN_NAME ),
            'not_found'          => __( 'No Interest Requests found.', Homi_Addons::PLUGIN_NAME ),
            'not_found_in_trash' => __( 'No Interest Requests found in Trash.', Homi_Addons::PLUGIN_NAME )
        );

        $args = array(
            'label'                 => __( 'Interest Requests', Homi_Addons::PLUGIN_NAME ),
            'labels'                => $labels,
            'description'           => '',
            'public'                => false,
            'publicly_queryable'    => false,
            'show_ui'               => true,
            'delete_with_user'      => false,
            'show_in_rest'          => true,
            'rest_base'             => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive'           => true,
            'show_in_menu'          => 'booking-requests',
            'show_in_nav_menus'     => true,
            'exclude_from_search'   => true,
            'capability_type'       => 'post',
            'map_meta_cap'          => true,
            'hierarchical'          => false,
            'query_var'             => true,
            'supports'              => array( 'title', 'author'),
        );

        register_post_type( self::POST_TYPE_NAME, $args );

    }

    /**
     * @param $meta_boxes
     *
     * @return array
     */
    public function add_meta_boxes( $meta_boxes )
    {

        $meta_boxes[] = array(
            'id' => self::POST_TYPE_NAME . '_information',
            'title' => esc_html__('Interest Request Information', Homi_Addons::PLUGIN_NAME),
            'post_types' => array(self::POST_TYPE_NAME),
            'context' => 'normal',
            'priority' => 'default',
            'autosave' => 'false',
            'fields' => array(
                array(
                    'id' => self::META_FIELDS_SLUG['requester_first_name'],
                    'name' => esc_html__('Requester First Name', Homi_Addons::PLUGIN_NAME),
                    'type' => 'text',
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['requester_last_name'],
                    'name' => esc_html__('Requester Last Name', Homi_Addons::PLUGIN_NAME),
                    'type' => 'text',
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['requester_email'],
                    'name' => esc_html__('Requester Email', Homi_Addons::PLUGIN_NAME),
                    'type' => 'text',
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['area_1'],
                    'name' => esc_html__('Area of Interest 1', Homi_Addons::PLUGIN_NAME),
                    'type' => 'text',
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['area_2'],
                    'name' => esc_html__('Area of Interest 2', Homi_Addons::PLUGIN_NAME),
                    'type' => 'text',
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['area_3'],
                    'name' => esc_html__('Area of Interest 3', Homi_Addons::PLUGIN_NAME),
                    'type' => 'text',
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['min_size'],
                    'name' => esc_html__('Minimum Size sqm', Homi_Addons::PLUGIN_NAME),
                    'type' => 'number',
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['min_bedrooms'],
                    'name' => esc_html__('Minimum bedrooms', Homi_Addons::PLUGIN_NAME),
                    'type' => 'number',
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['max_price'],
                    'name' => esc_html__('Max Price', Homi_Addons::PLUGIN_NAME),
                    'type' => 'number',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['type'],
                    'name' => esc_html__( 'Interest Type', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'select',
                    'options'  => array(
                        'buy'       => 'Buy',
                        'rent'      => 'Rent',
                    ),
                ),
            ),
        );

        return $meta_boxes;

    }


    public function posts_columns_id($defaults){

        unset( $defaults['author'] );
        unset( $defaults['date'] );
        unset( $defaults['search_exclude'] );

        $defaults['type']               = __('Interest Type');
        $defaults['areas_of_interest']  = __('Areas of Interest');
        $defaults['min_size']           = __('Min. Size');
        $defaults['min_bedrooms']       = __('Min. Bedrooms');
        $defaults['max_price']          = __('Max. Price');
        $defaults['user']               = __('Requester');
        $defaults['date']               = __('Date');


        return $defaults;

    }


    public function posts_custom_id_columns($column_name, $id){

        $interestRequest = new RentInterest($id);

        if( property_exists( $interestRequest, $column_name ) && !empty( $interestRequest->$column_name ) ){

            if( $column_name === 'user' ){

               ?>

                <a href="<?php echo get_edit_user_link( $interestRequest->user->ID ); ?>" target="_blank">
                    <?php echo $interestRequest->user->first_name . ' ' . $interestRequest->user->last_name; ?>
                    <br><?php echo $interestRequest->user->user_email; ?>
                </a>

                <?php

            }
            else {

                echo $interestRequest->$column_name;

                if( $column_name === 'max_price'){

                    echo '€';

                }
                else if( $column_name === 'min_size'){
                    echo 'sqm';
                }

            }

        }
        else {
            echo '-';
        }
    }


    public function ajax_insert_request(){

        $result = array();
        $params = array();
        $meta_input = array();
        parse_str( $_POST['data'], $params );
        $timestamp = time();

        $requester_email    = $params[ self::META_FIELDS_SLUG['requester_email'] ];
        $abandoned_req_id   = $this->has_abandoned_request_last_hour( $requester_email );

        $result['requester_existing'] = (email_exists($params[self::META_FIELDS_SLUG['requester_email']]) ? 'yes' : 'no');

        if( !$abandoned_req_id && !empty( $requester_email ) ) {

            foreach (self::META_FIELDS_SLUG as $meta_key) {

                if (isset($params[$meta_key]) && !empty($params[$meta_key])) {

                    $meta_input[$meta_key] = sanitize_text_field($params[$meta_key]);

                }

            }

            $request = array(
                'post_title'    => "ABANDONED RENT_INTEREST-$timestamp",
                'post_status'   => 'publish',
                'post_type'     => self::POST_TYPE_NAME,
                'post_author'   => 1,
                'meta_input'    => $meta_input,
            );

            $new_request = wp_insert_post($request, true);

            if (!$new_request instanceof WP_Error) {

                $formActions = new InteractiveFormActions();

                $result['status'] = 'success';
                $result['request_id'] = $new_request;
                $result['ac_contact_id'] = $formActions->create_abandoned_contact($params);

            } else {

                $result['status'] = 'error';
                $result['message'] = $new_request->get_error_message();

            }

        }
        else {
            $result['status']       = 'success';
            $result['request_id']   = $abandoned_req_id;
        }

        wp_send_json( $result );
        wp_die();

    }


    public function ajax_update_request(){

        $result     = array();
        $params     = array();
        $meta_input = array();
        parse_str( $_POST['data'], $params );
        $timestamp = time();


        $formActions    = new InteractiveFormActions();
        $user_id        = $formActions->force_register_requester( $params );
        $result['userid']  = $user_id;
        $user_id        = ( $user_id === false ? 1 : $user_id );

        foreach( self::META_FIELDS_SLUG as $meta_key ){

            if( isset( $params[ $meta_key ] ) && !empty( $params[ $meta_key ] ) ){

                $meta_input[ $meta_key ] = sanitize_text_field( $params[ $meta_key ] );

            }

        }

        $request = array(
            'post_title'    => "RENT_INTEREST-$timestamp",
            'post_status'   => 'publish',
            'post_type'     => self::POST_TYPE_NAME,
            'post_author'   => $user_id,
            'meta_input'    => $meta_input,
        );

        if( isset( $params['request_id'] ) ){

            $request['ID']  = $params['request_id'];
            $new_request    = wp_update_post( $request, true );

        }
        else {

            $new_request = wp_insert_post( $request, true );

        }

        if( !$new_request instanceof WP_Error ){

            //Run code after the request has been created completely with all the info
            do_action( 'after_homi_request_form_submitted', $new_request );

            $full_name          = $params[ self::META_FIELDS_SLUG['requester_first_name'] ] . ' '. $params[ self::META_FIELDS_SLUG['requester_last_name'] ];
            $result['status']   = 'success';


            if ( $params['message_language'] === 'GR' ) {

                $result['message']  = __(
                    "Αγαπητή/έ $full_name,
                    <br><br>Έχεις καταχωρήσει ένα νέο αίτημα ενδιαφέροντος ενικοίασης ακινήτου.
                    <br><br>Θα σε ενημερώσουμε όταν καταχωρηθεί κάποια αγγελία η οποία πληρεί τις προτιμήσεις σου.
                    <br><br>Με εκτίμηση,
                    <br><br>Η ομάδα ΗΟΜΙ",
                    Homi_Addons::PLUGIN_NAME
                );

            }
            else {

                $result['message']  = __(
                    "Dear User,
                    <br><br>Thank you for your submission. 
                    <br><br>HOMI will inform you via email if we receive a property that meets your requirements. 
                    <br><br>Regards,
                    <br><br>Team HOMI",
                    Homi_Addons::PLUGIN_NAME
                );

            }

        }
        else {

            $result['status']   = 'error';
            $result['message']  = $new_request->get_error_message();

        }

        wp_send_json( $result );
        wp_die();

    }


    /**
     * This functions handles the email being sent to
     * the admin, buyer and seller of a tour request
     *
     * @param $post_id int
     * @param $post WP_Post
     * @param $update bool
     */
    public function new_rent_interest_request_callback( $post_id, $post, $update ){

        if ( ( $post->post_type ===  self::POST_TYPE_NAME ) && ( $update === true )  && ( strpos( get_the_title( $post_id ), 'ABANDONED') === false )  && ( get_post_status( $post_id ) === 'publish') ){

            $emailController = new EmailInterestController();
            $emailController->send_new_rent_interest_email( $post_id );

        }

    }


    public function has_abandoned_request_last_hour( $email ){

        $args = array(
            'post_type' => self::POST_TYPE_NAME,
            'posts_per_page'=> -1,
            's'             => 'ABANDONED',
            'date_query' => [
                [
                    'after'     => '1 hour ago',
                    'inclusive' => true,
                ],
            ],
            'meta_query' => array(
                'key'     => self::META_FIELDS_SLUG['requester_email'],
                'value'   => $email,
                'compare' => '='
            )
        );

        $query = new WP_Query( $args );

        if( $query->have_posts() ){

            while ( $query->have_posts() ) {
                $query->the_post();
                return get_the_ID();
            }

        }

        return false;

    }


    public function get_non_abandoned_interest_requests(){

        $ids = array();

        $args = array(
            'post_type' => self::POST_TYPE_NAME,
            'posts_per_page'=> -1,
        );

        $query = new WP_Query( $args );

        if( $query->have_posts() ){

            while ( $query->have_posts() ) {
                $query->the_post();

                if (strpos( get_the_title(), 'ABANDONED') === false) {

                    $ids[] = new RentInterest( get_the_ID() );

                }

            }

        }

        return $ids;

    }

}
