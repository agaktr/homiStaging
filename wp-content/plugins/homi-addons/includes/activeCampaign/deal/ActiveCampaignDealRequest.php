<?php


class ActiveCampaignDealRequest {

    const DEAL_POSTS_SUPPORT = array(
        Homi_Addons_Valuation_Request::POST_TYPE_NAME,
        Homi_Addons_Rent_Request::POST_TYPE_NAME,
        Homi_Addons_Tour_Request::POST_TYPE_NAME
    );


    private $dealApi;
    private $request_id;
    private $request_meta;
    private $request_type;
    private $mappedFields;
    private $stage;
    private $deal_id;
    private $deal_type;
    private $timeIndex;
    public  $isSupported;
    private $acLog;
    private $requesterID;
    private $requesterUser;
    private $formType;
    private $noContactRetry; //How many times did we tried to create a new contact because for some reason it didn't exist


    /**
     * Initialize the class and its properties
     *
     * @param   $request_id int
     * @since    1.0.0
     * @access   public
     */
    public function __construct( $request_id ){

        $client = new Mediatoolkit\ActiveCampaign\Client(
            ActiveCampaignConstants::URL,
            ActiveCampaignConstants::KEY
        );

        $this->dealApi          = new Mediatoolkit\ActiveCampaign\Deals\Deals( $client );
        $this->request_id       = $request_id;
        $this->request_type     = get_post_type( $this->request_id );
        $this->requesterID      = get_post_field( 'post_author', $this->request_id );
        $this->requesterUser    = get_user_by('ID', $this->requesterID );
        $this->deal_id          = false;
        $this->stage            = "2";
        $this->acLog            = new ActiveCampaignLog();
        $this->noContactRetry   = 0;
        $this->setProperties();

    }



    /**
     * Sets the values for the $request_meta the $stage and the $deal_type
     * The values are determined based on the post type of the request
     *
     * @since    1.0.0
     * @access   private
     */
    private function setProperties(){

        $this->isSupported = in_array( $this->request_type, self::DEAL_POSTS_SUPPORT );

        switch( $this->request_type ){

            case Homi_Addons_Valuation_Request::POST_TYPE_NAME:

                $this->request_meta = Homi_Addons_Valuation_Request::META_FIELDS_SLUG;
                $this->mappedFields = ActiveCampaignFieldsConstants::MAPPED_FIELDS_VALUATION;
                $this->timeIndex    = CalendarController::VALUATION_TIME_INDEX;
                $this->deal_type    = "Free Valuation";
                $this->formType     = InteractiveForm::FORM_TYPE_FREE_VALUATIONS;

                break;

            case Homi_Addons_Rent_Request::POST_TYPE_NAME:

                $this->request_meta = Homi_Addons_Rent_Request::META_FIELDS_SLUG;
                $this->mappedFields = ActiveCampaignFieldsConstants::MAPPED_FIELDS_VALUATION;
                $this->timeIndex    = CalendarController::VALUATION_TIME_INDEX;
                $this->deal_type    = "Rent";
                $this->formType     = InteractiveForm::FORM_TYPE_RENT;

                break;

            case Homi_Addons_Tour_Request::POST_TYPE_NAME:

                $this->request_meta = Homi_Addons_Tour_Request::META_FIELDS_SLUG;
                $this->mappedFields = ActiveCampaignFieldsConstants::MAPPED_FIELDS_VIEWINGS;
                $this->timeIndex    = CalendarController::TIMES_INDEX;
                $this->deal_type    = "Viewing";
                $this->formType     = InteractiveForm::FORM_TYPE_VIEWINGS;

                break;

            default:

                $this->request_meta = false;
                $this->mappedFields = false;
                $this->timeIndex    = false;
                $this->deal_type    = "Undefined";

                break;

        }

        if( is_array( $this->request_meta ) ){

            $deal_id        = get_post_meta( $this->request_id, $this->request_meta['ac_deal_id'], true );
            $this->deal_id  = ( empty( $deal_id ) ? false : $deal_id );

        }

    }



    /**
     * Creates a deal on the Active Campaign for the request created on HOMI site
     *
     * @since    1.0.0
     * @access   public
     */
    public function create_deal_from_request(){

        if( $this->isSupported && $this->deal_id === false ) {

            try {

                $contact_id = $this->get_contact_id();

                if ( !empty( $contact_id ) ) {

                    $deal = array(
                        "contact"       => intval( $contact_id ),
                        "description"   => "This deal was created programmatically through the API",
                        "currency"      => "eur",
                        "group"         => "1",
                        "owner"         => "4",
                        "percent"       => null,
                        "stage"         => $this->stage,
                        "status"        => 0,
                        "title"         => $this->get_deal_title(),
                        "value"         => 10000
                    );

                    $deal_created = $this->dealApi->create( $deal );
                    $deal_created = json_decode( $deal_created, true );

                    if ( isset( $deal_created['deal']['id'] ) ) {

                        $this->acLog->createLog( $this->request_id, $this->request_type, array(
                            'action'    => "Create Deal",
                            'status'    => "Success",
                            'response'  => "A new deal for the request has been created successfully.",
                        ));

                        $this->deal_id  = intval( $deal_created['deal']['id'] );
                        $fields_created = $this->add_deal_custom_fields();

                        if ( $fields_created === true ) {

                            $this->acLog->createLog( $this->request_id, $this->request_type, array(
                                'action'    => "Create Deal fields",
                                'status'    => "Successful Fields Creation",
                                'response'  => "Custom Fields for the deal have been created",
                            ));

                        }
                        else {

                            $this->acLog->createLog( $this->request_id, $this->request_type, array(
                                'action'    => "Create Deal fields",
                                'status'    => "Fields Creation Failed",
                                'response'  => $fields_created,
                            ));

                        }

                    }
                    else {

                        $this->acLog->createLog( $this->request_id, $this->request_type, array(
                            'action'    => "Create new Deal",
                            'status'    => "Deal Creation Failed",
                            'response'  => $deal_created,
                        ));

                    }

                }
                else {

                    $this->acLog->createLog( $this->request_id, $this->request_type, array(
                        'action'    => "Create new Deal",
                        'status'    => "No Contact",
                        'response'  => "Request user is not a contact in Active Campaign",
                    ));

                    //Try to create the contact now
                    $acContractController = new ActiveCampaignController();
                    $acContractController->add_form_user_contact( $this->requesterUser, $this->formType, array() );

                    //If the contact was created successfully call the function again
                    if( !empty( $this->get_contact_id() ) ){

                        $this->acLog->createLog( $this->request_id, $this->request_type, array(
                            'action'    => "Create new Contact",
                            'status'    => "Success",
                            'response'  => "Successfully created a contact for an existing user.",
                        ));

                        $this->create_deal_from_request();

                    }
                    else {

                        $this->acLog->createLog( $this->request_id, $this->request_type, array(
                            'action'    => "Create new Contact",
                            'status'    => "Failed",
                            'response'  => "Tried to create a new contact but failed.",
                        ));

                    }

                }

            }
            catch ( Exception $e ) {

                $this->acLog->createLog( $this->request_id, $this->request_type, array(
                    'action'    => "Create new Deal",
                    'status'    => "API Exception",
                    'response'  => $e->getMessage(),
                ));

            }

            update_post_meta( $this->request_id, $this->request_meta['ac_deal_id'], $this->deal_id );

        }
        else {

            $this->acLog->createLog( $this->request_id, $this->request_type, array(
                'action'    => "Create new Deal",
                'status'    => "Not Processed",
                'response'  => ( !$this->isSupported ? 'Not supported Request type' : 'Deal has already been created' ),
            ));

        }

    }



    /**
     * Creates the custom fields values for the deal created
     *
     * @since    1.0.0
     * @access   private
     */
    private function add_deal_custom_fields(){

        $fields_created = false;

        if( is_array( $this->request_meta ) && is_array( $this->mappedFields ) && $this->deal_id ){

            $acAdvancedMapper = new ACViewingsDealFieldsMapper( $this->request_id );

            foreach( $this->mappedFields as $homi_request_key => $ac_field_id ){

                try {

                    if ( isset( $this->request_meta[ $homi_request_key ] ) ) {

                        $field_value = get_post_meta( $this->request_id, $this->request_meta[ $homi_request_key ], true );

                        if ( $homi_request_key === 'valuation_time' || $homi_request_key === 'tour_time' ) {

                            if( is_array( $this->timeIndex ) && isset( $this->timeIndex[ $field_value ] ) ){

                                $field_value = $this->timeIndex[ $field_value ];

                            }

                        }

                        if ( !empty( $field_value ) ) {

                            $this->dealApi->createCustomFieldValue( $this->deal_id, $ac_field_id, $field_value );
                            $fields_created = true;

                        }

                    }
                    else if( $acAdvancedMapper->isViewingRequest ) {

                        $field_value = $acAdvancedMapper->map_field( $homi_request_key );

                        if ( !empty( $field_value ) && $field_value ) {

                            $this->dealApi->createCustomFieldValue( $this->deal_id, $ac_field_id, $field_value );
                            $fields_created = true;

                        }

                    }

                }
                catch( Exception $e ){

                    $fields_created = $e->getMessage();

                }

            }

            try {
                //For the deal form type
                $this->dealApi->createCustomFieldValue( $this->deal_id, ActiveCampaignFieldsConstants::DEAL_TYPE_ID , $this->deal_type );
            }
            catch( Exception $e ){
                $fields_created = $e->getMessage();
            }

        }

        return $fields_created;

    }



    /**
     * Returns the contact id of the user of the request that we will create the deal for
     *
     * @since    1.0.0
     * @access   private
     */
    private function get_contact_id(){

        return get_user_meta( get_post_field( 'post_author', $this->request_id ), 'ac_contact_id', true );

    }



    /**
     * Constructs the deal title that will be saved on Active Campaign
     * the title is built from the address of the property of the request
     *
     * @since    1.0.0
     * @access   private
     */
    private function get_deal_title(){

        if( $this->deal_type !== 'Viewing' ){

            $suburb         = get_post_meta( $this->request_id, $this->request_meta['suburb'], true );
            $street_name    = get_post_meta( $this->request_id, $this->request_meta['street_name'], true );
            $street_number  = get_post_meta( $this->request_id, $this->request_meta['street_number'], true );
            $post_code      = get_post_meta( $this->request_id, $this->request_meta['post_code'], true );
            $title          = "$street_name $street_number, $suburb, $post_code";

        }
        else {

            $title = "Viewing - ". $this->request_id;

        }

        return $title;

    }



    /**
     * Updates the field "Viewing Status" of the deal
     * It runs when the homi viewing request status is changed
     *
     * @since    1.0.0
     * @access   public
     */
    public function update_deal_viewing_status(){

        if( $this->deal_id !== false && $this->isSupported ){

            $field_value = get_post_meta( $this->request_id, $this->request_meta[ 'request_status' ], true );

            if( !empty( $field_value ) ){

                try {

                    $this->dealApi->createCustomFieldValue( $this->deal_id, ActiveCampaignFieldsConstants::DEAL_VIEWING_STATUS_ID , $field_value );

                    $this->acLog->createLog( $this->request_id, $this->request_type, array(
                        'action'    => "Update Deal Status",
                        'status'    => "Success",
                        'response'  => "The deal status has been changed successfully.",
                    ));

                }
                catch( Exception $e ){

                    $this->acLog->createLog( $this->request_id, $this->request_type, array(
                        'action'    => "Update Deal Status",
                        'status'    => "API Error - " . $e->getCode(),
                        'response'  => $e->getMessage(),
                    ));

                }

            }
            else {

                $this->acLog->createLog( $this->request_id, $this->request_type, array(
                    'action'    => "Update Deal Status",
                    'status'    => "No Request Status",
                    'response'  => "The HOMI request does not have a status set.",
                ));

            }

        }
        else {

            $this->acLog->createLog( $this->request_id, $this->request_type, array(
                'action'    => "Update Deal Status",
                'status'    => "Not Processed",
                'response'  => ( !$this->isSupported ? 'Not supported Request type' : 'Deal has not been created or does not exist' ),
            ));

        }

    }


    public function updateValuationUploaded(){

        if( $this->deal_id !== false && $this->isSupported ){

            $field_value = get_post_meta( $this->request_id, $this->request_meta[ 'pdf' ], true );

            if( !empty( $field_value ) ){

                try {

                    $this->dealApi->createCustomFieldValue( $this->deal_id, ActiveCampaignFieldsConstants::DEAL_VALUATION_UPLOADED , 'Yes' );

                    $this->acLog->createLog( $this->request_id, $this->request_type, array(
                        'action'    => "Update deal Field",
                        'status'    => "Success",
                        'response'  => "The deal field 'DEAL_VALUATION_UPLOADED' has been updated successfully.",
                    ));

                }
                catch( Exception $e ){

                    $this->acLog->createLog( $this->request_id, $this->request_type, array(
                        'action'    => "Update Deal Field",
                        'status'    => "API Error - " . $e->getCode(),
                        'response'  => $e->getMessage(),
                    ));

                }

            }
            else {

                $this->acLog->createLog( $this->request_id, $this->request_type, array(
                    'action'    => "Update Deal Field",
                    'status'    => "No PDF Uploaded",
                    'response'  => "The HOMI valuation request does not have a pdf uploaded.",
                ));

            }

        }
        else {

            $this->acLog->createLog( $this->request_id, $this->request_type, array(
                'action'    => "Update Deal Field",
                'status'    => "Not Processed",
                'response'  => ( !$this->isSupported ? 'Not supported Request type' : 'Deal has not been created or does not exist' ),
            ));

        }

    }


    /**
     * Deletes the deal on the Active Campaign for the request on HOMI site
     *
     * @since    1.0.0
     * @access   public
     */
    public function delete_request_deal(){

        if( $this->deal_id !== false && $this->isSupported ){

            try {
                $this->dealApi->delete( $this->deal_id );
            }
            catch( Exception $e ){}

        }

    }


}
