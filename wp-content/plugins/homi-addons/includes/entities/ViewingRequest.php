<?php


class ViewingRequest
{

    public $ID;
    public $date;
    public $time;
    public $status;
    public $meta_fields;
    public $viewer;
    public $landlord;
    public $property_id;
    public $property_title;
    public $property_address;
    public $property_link;
    public $reminder_day_sent;
    public $reminder_morning_sent;


    public function __construct( $viewing_request_id ){

        $this->ID               = $viewing_request_id;
        $this->meta_fields      = Homi_Addons_Tour_Request::META_FIELDS_SLUG;
        $this->status           = get_post_meta($this->ID,  $this->meta_fields['request_status'], true );
        $date                   = get_post_meta( $this->ID, $this->meta_fields['tour_date'], true );
        $time                   = get_post_meta( $this->ID, $this->meta_fields['tour_time'], true );
        $timeIndex              = CalendarController::TIMES_INDEX;
        $property_id            = get_post_meta( $this->ID,  $this->meta_fields['property'], true );
        $this->date             = ( !empty( $date ) ? date('d/m/Y', strtotime( $date ) ) : '');
        $this->time             = $timeIndex[ $time ];
        $this->property_id      = ( !empty( $property_id ) ? $property_id : '');
        $this->property_title   = get_the_title( $this->property_id );
        $this->property_link    = get_the_permalink( $this->property_id );
        $this->property_address = get_post_meta( $this->property_id, 'fave_property_map_address', true );
        $this->viewer           = new Viewer( $this->ID );
        $this->landlord         = new Landlord( get_post_field( 'post_author', $this->property_id ) );
        $reminder_day_sent      = get_post_meta($this->ID,  $this->meta_fields['reminder_sent_day'], true );
        $reminder_morning_sent  = get_post_meta($this->ID,  $this->meta_fields['reminder_sent_morning'], true );

        $this->reminder_day_sent        = ( empty( $reminder_day_sent ) || $reminder_day_sent === 'not_sent' ? false : true );
        $this->reminder_morning_sent    = ( empty( $reminder_morning_sent ) || $reminder_morning_sent === 'not_sent' ? false : true );

    }

}
