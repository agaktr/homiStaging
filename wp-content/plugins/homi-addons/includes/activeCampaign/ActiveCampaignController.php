<?php

/**
 * The class responsible for handling the contacts between Active Campaign and the HOMI website
 *
 * - Creates new Contacts
 * - Updates existing Contacts
 * - Subscribes and unsubscribes contracts to/from lists
 *
 */
class ActiveCampaignController{


    /**
     * Creates a contact on active campaign for a new user on HOMI website
     * The contact info is constructed from the form user information such as:
     * - email
     * - first name
     * - last name
     *
     * Based on the form type that the user is about to submit we get the list that
     * the new contact will be subscribed to.
     *
     * Because this function runs when the user completes the first step of a form then the initial list
     * that the contact is subscribed to is the according abandoned list.
     *
     * Returns the contact id if a contact has been created successfully otherwise false is returned/
     *
     * @param $email string
     * @param $first_name string
     * @param $last_name string
     * @param $form_type string
     * @param $form_data array
     *
     * @return int|string|bool
     */
    public function add_form_new_user_contact( $email, $first_name, $last_name, $form_type, $form_data ){

        try {

            //Create the basic contact info
            $contact = array(
                "email" => $email,
                "first_name" => $first_name,
                "last_name" => $last_name,
            );

            //get the list id base on the form type
            $list_to_subscribe = $this->get_list_id_by_form_type($form_type, true);
            $contact_id = $this->sync_contact($contact, $list_to_subscribe, false);
            $this->sync_contact_fields($contact_id, $form_data, null);

            if ( is_numeric( $contact_id ) ) {

                return $contact_id;

            }

            return false;

        }
        catch( Exception $e ){

            return false;

        }

    }



    /**
     * Updates contact on active campaign for an existing user on HOMI website
     * This function runs when a user has completed an interactive form and
     * a contact has already been created on Active Campaign.
     *
     * it's purpose is to add the phone number of the user and unsubscribe the contact
     * from the according abandoned list and subscribe the contact to the according completed list
     *
     * Returns true if the update was successful, false otherwise
     *
     * @param $user WP_User
     * @param $contact_id int|string
     * @param $form_type string
     * @param $form_data array
     *
     * @return int|string|bool
     */
    public function update_contact( $user, $contact_id, $form_type, $form_data  ){

        if( $user instanceof WP_User ) {

            try {

                //Create the basic contact info
                $contact = array(
                    "id"            => $contact_id,
                    "email"         => $user->user_email,
                    "first_name"    => $user->first_name,
                    "last_name"     => $user->last_name,
                );

                $phone = get_user_meta( $user->ID, 'fave_author_mobile', true );

                if( !empty( $phone ) ) {

                    $contact['phone'] = $phone;

                }

                //get the list id base on the form type
                $list_to_subscribe      = $this->get_list_id_by_form_type( $form_type, false );
                $list_to_unsubscribe    = $this->get_list_id_by_form_type( $form_type, true );
                $contact_id             = $this->sync_contact( $contact, $list_to_subscribe, $list_to_unsubscribe );
                $this->sync_contact_fields( $contact_id,  $form_data, $user );

                if ( is_numeric( $contact_id ) ) {

                    return true;

                }


            }
            catch( Exception $e ){}

        }

        return false;

    }



    /**
     * Creates a new contact for an existing user on HOMI site
     * The new contact that will be created is added to a list
     * based on which interactive form was submitted
     *
     * @param $user WP_User
     * @param $form_type string
     * @param $form_data array
     *
     * @return bool
     */
    public function add_form_user_contact( $user, $form_type, $form_data ){

        if( $user instanceof WP_User ) {

            try {

                //Create the basic contact info
                $contact = array(
                    "email"         => $user->user_email,
                    "first_name"    => $user->first_name,
                    "last_name"     => $user->last_name,
                );

                $phone = get_user_meta( $user->ID, 'fave_author_mobile', true );

                if( !empty( $phone ) ){

                    $contact["phone"] = $phone;

                }

                //get the list id for a non abandoned form based on the form type
                $list_to_subscribe  = $this->get_list_id_by_form_type( $form_type, false );
                $contact_id         = $this->sync_contact( $contact, $list_to_subscribe, false );

                if( !empty( $form_data ) ){
                    $this->sync_contact_fields( $contact_id,  $form_data, $user );
                }

                $acLog = new ActiveCampaignLog();

                if ( is_numeric( $contact_id ) ) {

                    $acLog->createUserLog( $user->ID, "Contact Successfully created on Active Campaign" );

                    //Get the contact ID and add it to wp user meta
                    add_user_meta( $user->ID, 'ac_contact_id', $contact_id );

                    return true;

                }
                else {

                    $acLog->createUserLog( $user->ID, "Failed to create contact on Active Campaign | " );

                }

            }
            catch( Exception $e ){}

        }

        return false;

    }



    /**
     * Returns the Active Campaign list id based on the interactive form type
     * and if the user has abandoned the list or completed it
     *
     * @param $form_type string
     * @param $abandoned_form bool
     * @return bool|int
     */
    private function get_list_id_by_form_type( $form_type, $abandoned_form ){

        switch( $form_type ) {

            case InteractiveForm::FORM_TYPE_RENT:

                $list_id = ( $abandoned_form ? ActiveCampaignConstants::LIST_RENTALS_DROPPED : ActiveCampaignConstants::LIST_RENTALS );
                break;

            case InteractiveForm::FORM_TYPE_FREE_VALUATIONS:

                $list_id = ( $abandoned_form ? ActiveCampaignConstants::LIST_FREE_VALUATIONS_DROPPED : ActiveCampaignConstants::LIST_FREE_VALUATIONS );
                break;

            case InteractiveForm::FORM_TYPE_VIEWINGS:

                $list_id = ActiveCampaignConstants::LIST_VIEWINGS;
                break;

            default:

                $list_id = false;
                break;

        }

        return $list_id;

    }



    /**
     * This function is responsible for creating or updating a contact on Active Campaign
     * The information of the contact is created or updated based on the contact_info array
     *
     * It also handles the lists that the contact is subscribed or unsubscribed to
     *
     * @param $contact_info array
     * @param $list_to_subscribe bool|int
     * @param $list_to_unsubscribe bool|int
     *
     * @return bool|int
     */
    public function sync_contact( $contact_info, $list_to_subscribe, $list_to_unsubscribe ){

        $client = new Mediatoolkit\ActiveCampaign\Client(
            ActiveCampaignConstants::URL,
            ActiveCampaignConstants::KEY
        );

        $acContact          = new Mediatoolkit\ActiveCampaign\Contacts\Contacts( $client );
        $result             = $acContact->sync( $contact_info );
        $syncedContact      = json_decode( $result, true );

        if( is_array( $syncedContact ) && isset( $syncedContact['contact']['id'] ) ){

            $contact_id =  intval( $syncedContact['contact']['id'] );

            if( $list_to_unsubscribe ){

                $this->unsubscribe_contact_from_list( $contact_id, $list_to_unsubscribe );

            }

            if( $list_to_subscribe ){

                $this->subscribe_contact_to_list( $contact_id, $list_to_subscribe );

            }

            return $contact_id;

        }

        return $result;

    }



    /**
     * Subscribes the contact to the list
     *
     * @param $contact_id int
     * @param $list_id int
     *
     * @return void
     */
    private function subscribe_contact_to_list( $contact_id, $list_id ){

        $this->update_contact_list( $contact_id, $list_id, 1 );

    }



    /**
     * Subscribes the contact from the list
     *
     * @param $contact_id int
     * @param $list_id int
     *
     * @return void
     */
    private function unsubscribe_contact_from_list( $contact_id, $list_id ){

        $this->update_contact_list( $contact_id, $list_id, 2 );

    }


    public function tag_contact( $contact_id, $tag_id ){

        try {

            $acContact = new Mediatoolkit\ActiveCampaign\Contacts\Contacts( new Mediatoolkit\ActiveCampaign\Client( ActiveCampaignConstants::URL, ActiveCampaignConstants::KEY ) );

            $acContact->tag( $contact_id, $tag_id );

        }
        catch( Exception $e ){}
    }


    /**
     * Updates the status of the list for a given contact
     * Practically it subscribes or unsubscribe a contact to/from a list
     *
     * Available Statuses:
     * - 1 Active List (Subscribed)
     * - 2 Inactive List (Unsubscribed)
     *
     * @param $contact_id int
     * @param $list_id int
     * @param $status int
     *
     * @return void
     */
    private function update_contact_list( $contact_id, $list_id, $status ){

        try {

            $acContact = new Mediatoolkit\ActiveCampaign\Contacts\Contacts( new Mediatoolkit\ActiveCampaign\Client( ActiveCampaignConstants::URL, ActiveCampaignConstants::KEY ) );

            $acContact->updateListStatus(
                array(
                    "list" => $list_id,
                    "contact" => $contact_id,
                    "status" => $status
                )
            );

        }
        catch( Exception $e ){}

    }



    /**
     * Adds the custom fields values to the contact on AC
     *
     * @param $ac_contact_id int
     * @param $form_data array
     * @param $user WP_User|mixed
     *
     * @return void
     */
    private function sync_contact_fields( $ac_contact_id, $form_data, $user ){

        $contact_fields = ActiveCampaignContactFieldsConstants::MAPPED_FIELDS;
        $user_fields    = HomiUserFields::USER_META;
        $acContact      = new Mediatoolkit\ActiveCampaign\Contacts\Contacts( new Mediatoolkit\ActiveCampaign\Client( ActiveCampaignConstants::URL, ActiveCampaignConstants::KEY ) );

        foreach( $contact_fields as $field_name => $field_id ){

            $parts      = explode( '/', $field_name );
            $obj        = $parts[0];
            $field      = $parts[1];

            try {

                $field_value = false;

                if ( $obj === 'form' ) {

                    if( isset( $form_data[$field]) ){

                        $field_value = date('d/m/Y');

                        if( isset( $user_fields[ $field ] ) && $user instanceof WP_User ){

                            add_user_meta( $user->ID, $field, $field_value );

                        }

                    }

                }
                else if ( $obj === 'user' ) {

                    if ( $user instanceof WP_User) {

                        //Check if the field is a WP_User property
                        if ( property_exists( $user, $field ) || isset( $user->$field ) ) {

                            $field_value = date('d/m/Y', strtotime( $user->$field ) );

                        }

                    }

                }

                if( $field_value !== false ){

                    $acContact->createCustomFieldValue( $ac_contact_id, $field_id, $field_value );

                }

            }
            catch( Exception $e ){}

        }


    }

}
