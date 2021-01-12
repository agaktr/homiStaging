<?php


class ValuationRequest
{

    public $ID;
    public $date;
    public $time;
    public $status;
    public $meta_fields;
    public $landlord;
    public $property_suburb;
    public $property_street;
    public $property_number;
    public $property_post_code;
    public $property_address;
    public $reminder_day_sent;
    public $reminder_morning_sent;
    public $pdf;
    public $valuation_date;
    public $price;

    public function __construct( $valuation_id ){

        $this->ID                   = $valuation_id;
        $this->meta_fields          = ( get_post_type( $this->ID ) === Homi_Addons_Valuation_Request::POST_TYPE_NAME ? Homi_Addons_Valuation_Request::META_FIELDS_SLUG : Homi_Addons_Rent_Request::META_FIELDS_SLUG );
        $status                     = get_post_meta( $this->ID, $this->meta_fields['request_status'], true );
        $this->status               = ( !empty( $status ) ? $status : 'pending' );
        $this->landlord             = new Landlord( get_post_field( 'post_author', $this->ID ) );
        $this->date                 = date('d/m/Y', strtotime( get_post_meta( $this->ID, $this->meta_fields['valuation_day'], true ) ) );
        $time                       = get_post_meta( $this->ID, $this->meta_fields['valuation_time'], true );
        $timeIndex                  = CalendarController::VALUATION_TIME_INDEX;
        $this->time                 = $timeIndex[ $time ];
        $this->property_suburb      = get_post_meta( $this->ID, $this->meta_fields['suburb'], true );
        $this->property_street      = get_post_meta( $this->ID, $this->meta_fields['street_name'], true );
        $this->property_number      = get_post_meta( $this->ID, $this->meta_fields['street_number'], true );
        $this->property_post_code   = get_post_meta( $this->ID, $this->meta_fields['post_code'], true );
        $this->pdf                  = get_post_meta( $this->ID, $this->meta_fields['pdf'], true );
        $this->valuation_date       = get_post_meta( $this->ID, $this->meta_fields['valuation_date'], true );
        $this->price                = get_post_meta( $this->ID, $this->meta_fields['price'], true );
        $this->property_address     = $this->property_street . ' ' . $this->property_number . ', '. $this->property_suburb . ' ' . $this->property_post_code;

        $reminder_day_sent      = get_post_meta($this->ID,  $this->meta_fields['reminder_sent_day'], true );
        $reminder_morning_sent  = get_post_meta($this->ID,  $this->meta_fields['reminder_sent_morning'], true );

        $this->reminder_day_sent        = ( empty( $reminder_day_sent ) || $reminder_day_sent === 'not_sent' ? false : true );
        $this->reminder_morning_sent    = ( empty( $reminder_morning_sent ) || $reminder_morning_sent === 'not_sent' ? false : true );

    }


}
