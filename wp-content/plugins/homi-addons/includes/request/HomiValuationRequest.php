<?php

/**
 * This class is responsible for the information of a free valuation or rent request
 * The information is being displayed on the page after a successful form submission
 */
class HomiValuationRequest{

    public $ID;

    public function __construct( $request_id ){

        $this->ID = intval( $request_id );

    }

    private function get_request_type(){

        return get_post_type( $this->ID );

    }


    private function get_request_meta_slugs(){

        return ( $this->get_request_type() === Homi_Addons_Valuation_Request::POST_TYPE_NAME ? Homi_Addons_Valuation_Request::META_FIELDS_SLUG : Homi_Addons_Rent_Request::META_FIELDS_SLUG );

    }

    public function get_request_date(){

        $request_meta = $this->get_request_meta_slugs();

        return ( isset( $request_meta['valuation_day'] ) ? date('d M Y', strtotime( get_post_meta(  $this->ID, $request_meta['valuation_day'], true ) ) ) : false );

    }


    public function get_request_time(){

        $request_meta = $this->get_request_meta_slugs();

        $time_index = CalendarController::VALUATION_TIME_INDEX;

        if( isset( $request_meta['valuation_time'] ) && isset( $time_index[ get_post_meta(  $this->ID, $request_meta['valuation_time'], true ) ] )  ){

            return $time_index[ get_post_meta(  $this->ID, $request_meta['valuation_time'], true ) ];

        }
        else {
            return false;
        }

    }



}
