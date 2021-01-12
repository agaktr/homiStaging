<?php


class ActiveCampaignFieldsConstants {


    //array with HOMI fields mapped to Active Campaign Deal's custom fields
    //the array has the valuation/rent request key name and the name of the custom field as a value
    const MAPPED_FIELDS_VALUATION = array(
        'property_type'             => 19,
        'post_code'                 => 4,
        'suburb'                    => 2,
        'street_name'               => 17,
        'street_number'             => 18,
        'long'                      => 26,
        'lat'                       => 27,
        'apartment_type'            => 23,
        'floor'                     => 7,
        'size'                      => 6,
        'bedrooms'                  => 8,
        'bathrooms'                 => 9,
        'construction_year'         => 10,
        'condition'                 => 24,
        'valuation_reason'          => 25,
        'valuation_day'             => 15,
        'valuation_time'            => 16,
        'pdf'                       => 75,
    );


    const MAPPED_FIELDS_VIEWINGS = array(
        'tour_date'                             => 15,
        'tour_time'                             => 16,
        'request_status'                        => 29,
        'requester_first_name'                  => 37,
        'requester_last_name'                   => 38,
        'requester_phone'                       => 39,
        'requester_email'                       => 40,
        'user/first_name'                       => 30,
        'user/last_name'                        => 31,
        'user/fave_author_mobile'               => 32,
        'user/user_email'                       => 33,
        'property/get_the_permalink'            => 34,
        'property/post_title'                   => 35,
        'property/fave_property_map_address'    => 36,
    );

    const DEAL_TYPE_ID              = 28;
    const DEAL_VIEWING_STATUS_ID    = 29;
    const DEAL_VALUATION_UPLOADED   = 75;

}
