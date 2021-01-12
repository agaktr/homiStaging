<?php


class ActiveCampaignAPI{


    /**
     * Define the constants for the endpoints
     * in regards to active campaign
     */
    const DEALS_RENTALS_ENDPOINT            = 'deals/rentals';
    const DEALS_FREE_VALUATIONS_ENDPOINT    = 'deals/free-valuations';
    const DEALS_FACEBOOK_ENDPOINT           = 'deals/facebook';


    /**
     * Returns the active campaign deals for Rentals
     * Rental Deals Pipeline is defined in "ActiveCampaignConstants" class
     *
     * @return WP_REST_Response
     */
    public function get_active_campaign_deals_rentals(){

        $actual_deals = $this->get_deals(ActiveCampaignConstants::PIPELINE_RENTALS );
        return new WP_REST_Response( $actual_deals, 200 );
    }



    /**
     * Returns the active campaign deals for Free Valuations
     * Free Valuations Deals Pipeline is defined in "ActiveCampaignConstants" class
     *
     * @return WP_REST_Response
     */
    public function get_active_campaign_deals_free_valuations(){

        $actual_deals = $this->get_deals(ActiveCampaignConstants::PIPELINE_FREE_VALUATIONS );
        return new WP_REST_Response( $actual_deals, 200 );
    }



    /**
     * Returns the active campaign deals for Facebook/Messenger
     * Facebook/Messenger Deals Pipeline is defined in "ActiveCampaignConstants" class
     *
     * @return WP_REST_Response
     */
    public function get_active_campaign_deals_facebook(){

        $actual_deals = $this->get_deals(ActiveCampaignConstants::PIPELINE_FACEBOOK );
        return new WP_REST_Response( $actual_deals, 200 );

    }



    /**
     * Returns the raw data of the deals for the pipeline id defined
     * The raw data is return in a json format as a WP_Rest_Response object
     *
     * @param $pipeline_id int
     *
     * @return array
     */
    public function get_deals( $pipeline_id ){


        $fields_to_divide = array( 4, 6, 7,8,9,18);
        $stages = $this->get_stages_data();
        $actual_deals = array();
        $parsed = 0;
        $limit = 100;

        $client = new Mediatoolkit\ActiveCampaign\Client(
            ActiveCampaignConstants::URL,
            ActiveCampaignConstants::KEY
        );

        $dealApi  = new Mediatoolkit\ActiveCampaign\Deals\Deals( $client );

        $deals = $dealApi->listAllDealsByGroup( $pipeline_id, $parsed );
        $deals = json_decode( $deals, true );
        $actual_deals = array_merge( $actual_deals, $deals['deals'] );
        $total = $deals['meta']['total'];
        $parsed += $limit;


        if( $total > $parsed ){

            try {

                while( $total > $parsed ){

                    $deals = $dealApi->listAllDealsByGroup( $pipeline_id, $parsed );
                    $deals = json_decode( $deals, true );
                    $actual_deals = array_merge( $actual_deals, $deals['deals'] );
                    $total = $deals['meta']['total'];
                    $parsed += $limit;

                }

            }
            catch( Exception $e ){

            }

        }

        $customFields = json_decode( $dealApi->listAllCustomFields(
            array(
                'limit' => 100
            )
        ), true );
        $customFields = $customFields['dealCustomFieldMeta'];

        $custom_fields_name = array();
        $custom_fields_ids = array();
        foreach( $customFields as $customField ){
            $custom_fields_name[ $customField['id'] ] = $customField['fieldLabel'];
            $custom_fields_ids[ $customField['fieldLabel'] ] = '';
        }

//        $actual_deals = array_slice($actual_deals, 0, 20);
//        return new WP_REST_Response( $actual_deals, 200 );

        foreach( $actual_deals as $index => $deal ){


            try {

                $response = $dealApi->listAllCustomFieldValues( array(
                    'filters' => array(
                        'dealId' => $deal['id']
                    ),
                    'limit' => 1
                ));

                $fields = json_decode( $response, true );
                $dealFields = ( isset( $fields['dealCustomFieldData'] ) ? $fields['dealCustomFieldData'] : array() );

                $current_ids = $custom_fields_ids;
                foreach( $dealFields as $field ){

                    $field_name = $custom_fields_name[ $field['customFieldId'] ];

                    if( in_array( intval( $field['customFieldId'] ), $fields_to_divide ) ){
                        $current_ids[ $field_name ] = intval( $field['fieldValue'] );
                    }
                    else {
                        $current_ids[ $field_name ] = $field['fieldValue'];
                    }


                }

                $actual_deals[ $index ] = array_merge( $deal, $current_ids );

            }
            catch ( Exception $e ){

                var_dump( $e );

            }

            if( isset( $stages[ $deal['stage'] ] ) ){

                $actual_deals[ $index ]['stage_title'] = $stages[ $deal['stage'] ];

            }

            unset( $actual_deals[ $index ]['links'] );
            unset( $actual_deals[ $index ]['nextdealid'] );

        }

        return $actual_deals;

    }



    /**
     * Returns the active campaign stages as an array
     * The stages data is being used in the get_deals() function
     * in order to be included in the deals raw data when requested
     *
     * @return array
     */
    public function get_stages_data(){

        $stages_data = array();
        $client = new Mediatoolkit\ActiveCampaign\Client(
            ActiveCampaignConstants::URL,
            ActiveCampaignConstants::KEY
        );

        $dealApi    = new Mediatoolkit\ActiveCampaign\Deals\Deals( $client );
        $list       = $dealApi->listAllStages(array('limit' => 100));
        $list       = json_decode( $list, true );
        $stages     = $list['dealStages'];

        foreach( $stages as $stage ){

            if( !empty( $stage['id'] ) ){

                $stages_data[ $stage['id'] ] = $stage['title'];

            }

        }

        return $stages_data;

    }

}
