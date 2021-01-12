<?php


class InteractiveFormActions{

    const AFTER_VALUATION_REQUEST_URL       = 'request-submitted';
    const AFTER_SCHEDULE_TOUR_REQUEST_URL   = 'property-tour-scheduled';


    /**
     * Create a rewrite rule for pages to recognise calendar as query var
     * The calendar query var will be used to create the pages for property availability on the front end
     */
    public function wpd_add_my_endpoint(){
        add_rewrite_endpoint( 'request', EP_PAGES );
    }



    public function new_user_request_submitted(){

        if( isset( $_POST['interactive-form-request'] ) && isset( $_POST['new-user-id'] ) && !empty( $_POST['new-user-id'] ) ){

            $user_id    = intval( $_POST['new-user-id'] );

            $homiUserController = new HomiUserController();
            $homiUserController->force_login_user( $user_id, $this->get_redirect_url( $_POST ) );

        }

    }


    /**
     * Creates a contact on active campaign for the user that has abandoned the interactive form
     * Practically every user that fills the first step of the form is considered that abandons the form
     * until the form is completely submitted
     *
     * @param $form_data
     *
     * @return int|string|bool
     */
    public function create_abandoned_contact( $form_data ){

        if( isset( $form_data['interactive-form-request'] ) ) {

            $type = $form_data['interactive-form-request'];

            switch( $type ){

                case InteractiveForm::FORM_TYPE_RENT :

                    $first_name = $form_data[Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_first_name']];
                    $last_name  = $form_data[Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_last_name']];
                    $email      = $form_data[Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_email']];

                    break;

                case InteractiveForm::FORM_TYPE_FREE_VALUATIONS :

                    $first_name = $form_data[Homi_Addons_Valuation_Request::META_FIELDS_SLUG['requester_first_name']];
                    $last_name  = $form_data[Homi_Addons_Valuation_Request::META_FIELDS_SLUG['requester_last_name']];
                    $email      = $form_data[Homi_Addons_Valuation_Request::META_FIELDS_SLUG['requester_email']];

                    break;

                case InteractiveForm::FORM_TYPE_RENT_INTEREST :

                    $first_name = $form_data[Homi_Addons_Interest_Request::META_FIELDS_SLUG['requester_first_name']];
                    $last_name  = $form_data[Homi_Addons_Interest_Request::META_FIELDS_SLUG['requester_last_name']];
                    $email      = $form_data[Homi_Addons_Interest_Request::META_FIELDS_SLUG['requester_email']];

                    break;

            }


            if( $type !== InteractiveForm::FORM_TYPE_RENT_INTEREST ) {

                if( !empty( $email ) &&  !empty( $first_name ) &&  !empty( $last_name ) ){

                    $acController = new ActiveCampaignController();
                    return $acController->add_form_new_user_contact( $email, $first_name, $last_name, $type, $form_data );

                }

            }

        }

        return false;

    }



    /**
     * This function is triggered when the user completes an interactive form
     * It gets the form data along with the user data and creates a new user on HOMI
     * In addition it checks if a contact has been created for the current user on Active campaign
     * If the contact has not been created yet it does at this step, otherwise the final user info is
     * updated for the contact on active campaign
     *
     * @param $form_data
     *
     * @return int|string|bool
     */
    public function force_register_requester( $form_data ){

        if( isset( $form_data['interactive-form-request'] ) ){

            $type = $form_data['interactive-form-request'];

            switch( $type ){

                case InteractiveForm::FORM_TYPE_VIEWINGS:

                    $first_name = $form_data[ Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_first_name'] ];
                    $last_name  = $form_data[ Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_last_name'] ];
                    $email      = $form_data[ Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_email'] ];
                    $phone      = $form_data[ Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_phone'] ];
                    $role       = Homi_Addons::BUYER_ROLE;
                    $pass       = '!HomiBuyer!';

                    break;

                case InteractiveForm::FORM_TYPE_RENT:

                    $first_name = $form_data[ Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_first_name'] ];
                    $last_name  = $form_data[ Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_last_name'] ];
                    $email      = $form_data[ Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_email'] ];
                    $phone      = $form_data[ Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_phone'] ];
                    $role       = Homi_Addons::SELLER_ROLE;
                    $pass       = '!HomiSeller!';

                    break;

                case InteractiveForm::FORM_TYPE_RENT_INTEREST :

                    $first_name = $form_data[ Homi_Addons_Interest_Request::META_FIELDS_SLUG['requester_first_name'] ];
                    $last_name  = $form_data[ Homi_Addons_Interest_Request::META_FIELDS_SLUG['requester_last_name'] ];
                    $email      = $form_data[ Homi_Addons_Interest_Request::META_FIELDS_SLUG['requester_email'] ];
                    $phone      = '';
                    $role       = Homi_Addons::BUYER_ROLE;
                    $pass       = '!HomiRenter!';

                    break;

                default:

                    $first_name = $form_data[ Homi_Addons_Valuation_Request::META_FIELDS_SLUG['requester_first_name'] ];
                    $last_name  = $form_data[ Homi_Addons_Valuation_Request::META_FIELDS_SLUG['requester_last_name'] ];
                    $email      = $form_data[ Homi_Addons_Valuation_Request::META_FIELDS_SLUG['requester_email'] ];
                    $phone      = $form_data[ Homi_Addons_Valuation_Request::META_FIELDS_SLUG['requester_phone'] ];
                    $role       = Homi_Addons::SELLER_ROLE;
                    $pass       = '!HomiSeller!';

                    break;
            }

            if( email_exists( $email ) === false ) {

                $userController             = new HomiUserController();
                $user_args['user_login']    = $userController->build_username($email);
                $user_args['first_name']    = $first_name;
                $user_args['last_name']     = $last_name;
                $user_args['user_email']    = $email;
                $user_args['user_pass']     = $pass;
                $user_args['role']          = $role;

                $user_id = wp_insert_user( $user_args );

                if ( !$user_id instanceof WP_Error ) {

                    if( !empty( $phone ) ){

                        add_user_meta( $user_id, 'fave_author_mobile', $phone );

                    }


                    $acController = new ActiveCampaignController();
                    $createdUser  = get_user_by('ID', $user_id );

                    if( $type !== InteractiveForm::FORM_TYPE_RENT_INTEREST ) {

                        //Check if an active campaign contact is created and if not create it otherwise update the phone
                        if (!isset($form_data['ac_contact_id']) || empty($form_data['ac_contact_id']) || $form_data['ac_contact_id'] === 'false') {

                            //Create a contact on Active Campaign for the new user
                            $acController->add_form_user_contact($createdUser, $type, $form_data);

                        }
                        else {

                            //Add the Active Campaign contact id to the user because up to that point the user was not created
                            add_user_meta($user_id, 'ac_contact_id', $form_data['ac_contact_id']);

                            //Update the Contact info of the user on Active Campaign
                            $acController->update_contact($createdUser, $form_data['ac_contact_id'], $type, $form_data);

                        }

                    }

                    //Send confirmation email to the user for the creation of new account
                    $emailUserController = new EmailUserController();
                    $emailUserController->send_new_account_email( $user_id );

                    return $user_id;

                }

            }
            else {

                $user = get_user_by('email', $email );

                if( $user instanceof WP_User ){

                    return $user->ID;

                }

            }

        }

        return false;

    }




    public function change_user_pass(){

        if( isset( $_POST['change_user_pass_action'] ) ) {

            if ( is_user_logged_in() ) {

                $user = wp_get_current_user();
                $user_id = $user->ID;

                if (isset($_POST['user_pass']) && !empty($_POST['user_pass'])) {

                    wp_set_password( $_POST['user_pass'], $user_id );

                    $homiUserController = new HomiUserController();
                    $homiUserController->force_login_user( $user_id, $this->changed_pass_redirect_url( $_POST ) );

                }

            }

        }

    }


    private function get_redirect_url( $form_data ){

        $request_id = ( isset( $form_data['request_id'] ) && !empty( $form_data['request_id'] ) ? $form_data['request_id'] : '' );

        switch( $form_data['interactive-form-request'] ){

            case 'schedule_tour_request':

                $redirect =  site_url( self::AFTER_SCHEDULE_TOUR_REQUEST_URL . '/request/'. $request_id );
                break;

            default:

                $redirect =  site_url( self::AFTER_VALUATION_REQUEST_URL . '/request/'. $request_id );
                break;
        }


        return $redirect;

    }


    private function changed_pass_redirect_url( $form_data ){

        $request_id = ( isset( $form_data['request_id'] ) && !empty( $form_data['request_id'] ) ? $form_data['request_id'] : '' );

        if( isset( $form_data['change_user_pass_after_form'] ) && $form_data['change_user_pass_after_form'] === 'after_valuation'){

            return site_url( self::AFTER_VALUATION_REQUEST_URL . '/request/'. $request_id . '/?pass=changed' );

        }
        else {

            return site_url( self::AFTER_SCHEDULE_TOUR_REQUEST_URL . '/request/'. $request_id . '/?pass=changed' );

        }

    }

}
