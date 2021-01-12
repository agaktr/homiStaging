<?php

class Homi_Addons_Upload_Request {

    const POST_TYPE_NAME = 'upload_request';
    const AJAX_GET_ADMIN_MATCHES = 'getAdminMatches';

    const META_FIELDS_SLUG = [
        'status'                        => self::POST_TYPE_NAME . '_status',
        'final_submission'              => self::POST_TYPE_NAME . '_final_submission',
        'homi_property'                 => self::POST_TYPE_NAME . '_homi_property',
        'xe_id'                         => self::POST_TYPE_NAME . '_xe_id',
        'spitogatos_id'                 => self::POST_TYPE_NAME . '_spitogatos_id',
        'spitogatos_broker_id'          => self::POST_TYPE_NAME . '_spitogatos_broker_id',
        'convert_action'                => self::POST_TYPE_NAME . '_convert_action',
        'renew_action'                  => self::POST_TYPE_NAME . '_renew_action',
        'xe_location'                   => self::POST_TYPE_NAME . '_xe_location',
        'spitogatos_location'           => self::POST_TYPE_NAME . '_spitogatos_location',
        'condition'                     => self::POST_TYPE_NAME . '_condition',
        'gallery'                       => self::POST_TYPE_NAME . '_gallery',
        'xe_images'                     => self::POST_TYPE_NAME . '_xe_images',
        'spitogatos_images'             => self::POST_TYPE_NAME . '_spitogatos_images',
        'xe_description'                => self::POST_TYPE_NAME . '_xe_description',
        'spitogatos_description_gr'     => self::POST_TYPE_NAME . '_spitogatos_description_gr',
        'spitogatos_description_en'     => self::POST_TYPE_NAME . '_spitogatos_description_en',
        'list_type'                     => self::POST_TYPE_NAME . '_list_type',
        'address'                       => self::POST_TYPE_NAME . '_address',
        'suburb'                        => self::POST_TYPE_NAME . '_suburb',
        'postcode'                      => self::POST_TYPE_NAME . '_postcode',
        'full_address_gr'               => self::POST_TYPE_NAME . '_full_address_gr',
        'lat'                           => self::POST_TYPE_NAME . '_lat',
        'long'                          => self::POST_TYPE_NAME . '_long',
        'property_category'             => self::POST_TYPE_NAME . '_property_category',
        'property_subcategory'          => self::POST_TYPE_NAME . '_property_subcategory',
        'floor'                         => self::POST_TYPE_NAME . '_floor',
        'size'                          => self::POST_TYPE_NAME . '_size',
        'construction_year'             => self::POST_TYPE_NAME . '_construction_year',
        'price'                         => self::POST_TYPE_NAME . '_price',
        'price_sqm'                     => self::POST_TYPE_NAME . '_price_sqm',
        'common_charges'                => self::POST_TYPE_NAME . '_common_charges',
        'estimated_bills'               => self::POST_TYPE_NAME . '_estimated_bills',
        'deposit'                       => self::POST_TYPE_NAME . '_deposit',
        'lease_duration'                => self::POST_TYPE_NAME . '_lease_duration',
        'date_of_sale_rent'             => self::POST_TYPE_NAME . '_date_of_sale_rent',
        'bedrooms'                      => self::POST_TYPE_NAME . '_bedrooms',
        'bathrooms'                     => self::POST_TYPE_NAME . '_bathrooms',
        'wc'                            => self::POST_TYPE_NAME . '_wc',
        'living_rooms'                  => self::POST_TYPE_NAME . '_living_rooms',
        'kitchens'                      => self::POST_TYPE_NAME . '_kitchens',
        'renovated'                     => self::POST_TYPE_NAME . '_renovated',
        'renovation_year'               => self::POST_TYPE_NAME . '_renovation_year',
        'renovated_details'             => self::POST_TYPE_NAME . '_renovated_details',
        'property_highlights'           => self::POST_TYPE_NAME . '_property_highlights',
        'neighborhood_description'      => self::POST_TYPE_NAME . '_neighborhood_description',
        'floor_plan'                    => self::POST_TYPE_NAME . '_floor_plan',
        'parking'                       => self::POST_TYPE_NAME . '_parking',
        'parking_type'                  => self::POST_TYPE_NAME . '_parking_type',
        'storage_room'                  => self::POST_TYPE_NAME . '_storage_room',
        'storage_room_description'      => self::POST_TYPE_NAME . '_storage_room_description',
        'balcony'                       => self::POST_TYPE_NAME . '_balcony',
        'balcony_size'                  => self::POST_TYPE_NAME . '_balcony_size',
        'view'                          => self::POST_TYPE_NAME . '_view',
        'heat'                          => self::POST_TYPE_NAME . '_heat',
        'heat_source'                   => self::POST_TYPE_NAME . '_heat_source',
        'aircondition'                  => self::POST_TYPE_NAME . '_aircondition',
        'aircondition_number'           => self::POST_TYPE_NAME . '_aircondition_number',
        'energy_class'                  => self::POST_TYPE_NAME . '_energy_class',
        'frames'                        => self::POST_TYPE_NAME . '_frames',
        'floor_type'                    => self::POST_TYPE_NAME . '_floor_type',
        'solar_water_heater'            => self::POST_TYPE_NAME . '_solar_water_heater',
        'underfloor_heat'               => self::POST_TYPE_NAME . '_underfloor_heat',
        'double_glazed_windows'         => self::POST_TYPE_NAME . '_double_glazed_windows',
        'fireplace'                     => self::POST_TYPE_NAME . '_fireplace',
        'secured_door'                  => self::POST_TYPE_NAME . '_secured_door',
        'alarm'                         => self::POST_TYPE_NAME . '_alarm',
        'elevator'                      => self::POST_TYPE_NAME . '_elevator',
        'tent'                          => self::POST_TYPE_NAME . '_tent',
        'window_screens'                => self::POST_TYPE_NAME . '_window_screens',
        'pet_friendly'                  => self::POST_TYPE_NAME . '_pet_friendly',
        'satellite'                     => self::POST_TYPE_NAME . '_satellite',
        'garden'                        => self::POST_TYPE_NAME . '_garden',
        'painted'                       => self::POST_TYPE_NAME . '_painted',
        'bright'                        => self::POST_TYPE_NAME . '_bright',
        'airy'                          => self::POST_TYPE_NAME . '_airy',
        'sea_distance'                  => self::POST_TYPE_NAME . '_sea_distance',
        'metro_distance'                => self::POST_TYPE_NAME . '_metro_distance',
        'bus_distance'                  => self::POST_TYPE_NAME . '_bus_distance',
        'property_extra_info'           => self::POST_TYPE_NAME . '_property_extra_info',
        'furnished'                     => self::POST_TYPE_NAME . '_furnished',
        'equipped'                      => self::POST_TYPE_NAME . '_equipped',
        'stove'                         => self::POST_TYPE_NAME . '_stove',
        'oven'                          => self::POST_TYPE_NAME . '_oven',
        'fridge'                        => self::POST_TYPE_NAME . '_fridge',
        'dishwasher'                    => self::POST_TYPE_NAME . '_dishwasher',
        'washing_machine'               => self::POST_TYPE_NAME . '_washing_machine',
        'tv'                            => self::POST_TYPE_NAME . '_tv',
        'date_available_from'           => self::POST_TYPE_NAME . '_date_available_from',
        'landlord_name'                 => self::POST_TYPE_NAME . '_landlord_name',
        'landlord_last_name'            => self::POST_TYPE_NAME . '_landlord_last_name',
        'landlord_father_name'          => self::POST_TYPE_NAME . '_landlord_father_name',
        'landlord_id_number'            => self::POST_TYPE_NAME . '_landlord_id_number',
        'landlord_id_issue_date'        => self::POST_TYPE_NAME . '_landlord_id_issue_date',
        'landlord_tax_id'               => self::POST_TYPE_NAME . '_landlord_tax_id',
        'landlord_tax_office'           => self::POST_TYPE_NAME . '_landlord_tax_office',
        'landlord_ap'                   => self::POST_TYPE_NAME . '_landlord_ap',
        'landlord_aa'                   => self::POST_TYPE_NAME . '_landlord_aa',
        'landlord_id_copy'              => self::POST_TYPE_NAME . '_landlord_id_copy',
        'email_action'                  => self::POST_TYPE_NAME . '_email_action',
        'matched_users_emailed'         => self::POST_TYPE_NAME . '_matched_users_emailed',
    ];

    const LANDLORD_FIELDS = array(
        array(
            'name'          => 'First Name',
            'id'            => self::META_FIELDS_SLUG['landlord_name'],
            'type'          => 'text',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Last Name',
            'id'            => self::META_FIELDS_SLUG['landlord_last_name'],
            'type'          => 'text',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Father\'s Name',
            'id'            => self::META_FIELDS_SLUG['landlord_father_name'],
            'type'          => 'text',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'ID Number',
            'id'            => self::META_FIELDS_SLUG['landlord_id_number'],
            'type'          => 'text',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'ID Issue Date',
            'id'            => self::META_FIELDS_SLUG['landlord_id_issue_date'],
            'type'          => 'text',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Tax ID',
            'id'            => self::META_FIELDS_SLUG['landlord_tax_id'],
            'type'          => 'text',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Tax Office',
            'id'            => self::META_FIELDS_SLUG['landlord_tax_office'],
            'type'          => 'text',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'ID Copy',
            'id'            => self::META_FIELDS_SLUG['landlord_id_copy'],
            'type'          => 'image',
        ),
    );

    const PEA_FIELDS = array(
        array(
            'name'          => 'AA',
            'id'            => self::META_FIELDS_SLUG['landlord_aa'],
            'type'          => 'text',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'AP',
            'id'            => self::META_FIELDS_SLUG['landlord_ap'],
            'type'          => 'text',
            'homi_class'    => 'col l6 m6 s12',
        ),
    );

    const PRIMARY_INFO_FIELDS = array(
        array(
            'name'          => 'Property Category',
            'id'            => self::META_FIELDS_SLUG['property_category'],
            'type'          => 'radio',
            'options'       => array(
                'residence'     => 'Residence',
                'professional'  => 'Professional',
                'land'          => 'Land',
                'other'         => 'Other',
            ),
            'inline'        => true,
            'homi_class'    => 'col s12',
        ),
        array(
            'name'          => 'Property Sub category',
            'id'            => self::META_FIELDS_SLUG['property_subcategory'],
            'type'          => 'radio',
            'options'       => array(
                'apartment'                 => 'Apartment',
                'building'                  => 'Building',
                'maisonette'                => 'Maisonette',
                'detached_house'            => 'Detached House',
                'studio'                    => 'Studio',
                'whole_floor_apartment'     => 'Whole Floor Apartment',
                'loft'                      => 'Loft',
                'penthouse'                 => 'Penthouse',
            ),
            'inline'        => true,
            'homi_class'    => 'col s12',
        ),
        array(
            'name'          => 'Address',
            'id'            => self::META_FIELDS_SLUG['address'],
            'type'          => 'text',
            'homi_class'    => 'col l4 m6 s12',
            'input_class'   => 'validate-address',
        ),
        array(
            'name'          => 'Suburb',
            'id'            => self::META_FIELDS_SLUG['suburb'],
            'type'          => 'text',
            'homi_class'    => 'col l4 m6 s12',
            'input_class'   => 'validate-suburb',
        ),
        array(
            'name'          => 'Postcode',
            'id'            => self::META_FIELDS_SLUG['postcode'],
            'type'          => 'text',
            'homi_class'    => 'col l4 m6 s12',
            'input_class'   => 'validate-postcode',
        ),
        array(
            'name'          => 'Full Address in Greek',
            'id'            => self::META_FIELDS_SLUG['full_address_gr'],
            'type'          => 'text',
            'homi_class'    => 'hide',
        ),
        array(
            'name'          => 'Latitude',
            'id'            => self::META_FIELDS_SLUG['lat'],
            'type'          => 'text',
            'homi_class'    => 'hide',
            'input_class'   => 'validate-lat',
        ),
        array(
            'name'          => 'Longitude',
            'id'            => self::META_FIELDS_SLUG['long'],
            'type'          => 'text',
            'homi_class'    => 'hide',
            'input_class'   => 'validate-long',
        ),
        array(
            'name'          => 'Size (sqm)',
            'id'            => self::META_FIELDS_SLUG['size'],
            'type'          => 'number',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Construction Year',
            'id'            => self::META_FIELDS_SLUG['construction_year'],
            'type'          => 'number',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Floor',
            'id'            => self::META_FIELDS_SLUG['floor'],
            'type'          => 'radio',
            'options'       => array(
                'basement'                  => 'Basement',
                'Semi-basement'             => 'Semi-basement',
                'Ground floor'              => 'Ground floor',
                'Raised ground floor'       => 'Raised ground floor',
                '1st'                       => '1st',
                '2nd'                       => '2nd',
                '3rd'                       => '3rd',
                '4th'                       => '4th',
                '5th'                       => '5th',
                '6th'                       => '6th',
                '7th'                       => '7th',
                '8th_and_above'             => '8th and above',
            ),
            'inline'        => true,
            'homi_class'    => 'col s12',
        ),
    );

    const EQUIPMENT_FIELDS = array(
        array(
            'name'          => 'Furnished',
            'id'            => self::META_FIELDS_SLUG['furnished'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Equipped',
            'id'            => self::META_FIELDS_SLUG['equipped'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'hide',
        ),
        array(
            'name'          => 'Air-conditioning',
            'id'            => self::META_FIELDS_SLUG['aircondition'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Number of Air conditioners',
            'id'            => self::META_FIELDS_SLUG['aircondition_number'],
            'type'          => 'number',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Stove',
            'id'            => self::META_FIELDS_SLUG['stove'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Oven',
            'id'            => self::META_FIELDS_SLUG['oven'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Fridge',
            'id'            => self::META_FIELDS_SLUG['fridge'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Dishwasher',
            'id'            => self::META_FIELDS_SLUG['dishwasher'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Washing Machine',
            'id'            => self::META_FIELDS_SLUG['washing_machine'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'TV',
            'id'            => self::META_FIELDS_SLUG['tv'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l4 m6 s12',
        ),
    );

    const EXTRA_INFO_FIELDS = array(
        array(
            'name'          => 'Listing Type',
            'id'            => self::META_FIELDS_SLUG['list_type'],
            'type'          => 'radio',
            'options'       => array(
                'sale'  => 'Sale',
                'rent'  => 'Rent',
            ),
            'inline'        => true,
            'homi_class'    => 'col l6 s12',
        ),
        array(
            'name'          => 'Asking Price',
            'id'            => self::META_FIELDS_SLUG['price'],
            'type'          => 'number',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Price per Sqm',
            'id'            => self::META_FIELDS_SLUG['price_sqm'],
            'type'          => 'text',
            'homi_class'    => 'col l6 m6 s12 hide',
        ),
        array(
            'name'          => 'Common charges',
            'id'            => self::META_FIELDS_SLUG['common_charges'],
            'type'          => 'number',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Estimated bills',
            'id'            => self::META_FIELDS_SLUG['estimated_bills'],
            'type'          => 'number',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Deposit (months rent)',
            'id'            => self::META_FIELDS_SLUG['deposit'],
            'type'          => 'number',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Lease Duration in months',
            'id'            => self::META_FIELDS_SLUG['lease_duration'],
            'type'          => 'number',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Desired date of Sale/Rent',
            'id'            => self::META_FIELDS_SLUG['date_of_sale_rent'],
            'type'          => 'date',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Available From',
            'id'            => self::META_FIELDS_SLUG['date_available_from'],
            'type'          => 'date',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Bedrooms',
            'id'            => self::META_FIELDS_SLUG['bedrooms'],
            'type'          => 'number',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Bathrooms',
            'id'            => self::META_FIELDS_SLUG['bathrooms'],
            'type'          => 'number',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'W/C',
            'id'            => self::META_FIELDS_SLUG['wc'],
            'type'          => 'number',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Living Rooms',
            'id'            => self::META_FIELDS_SLUG['living_rooms'],
            'type'          => 'number',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Kitchens',
            'id'            => self::META_FIELDS_SLUG['kitchens'],
            'type'          => 'number',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Property Highlights',
            'id'            => self::META_FIELDS_SLUG['property_highlights'],
            'type'          => 'text',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Renovated',
            'id'            => self::META_FIELDS_SLUG['renovated'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Renovation Year',
            'id'            => self::META_FIELDS_SLUG['renovation_year'],
            'type'          => 'number',
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Renovation details',
            'id'            => self::META_FIELDS_SLUG['renovated_details'],
            'type'          => 'text',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Neighborhood Description',
            'id'            => self::META_FIELDS_SLUG['neighborhood_description'],
            'type'          => 'text',
            'homi_class'    => 'col l12 m6 s12',
        ),
        array(
            'name'          => 'Do you have a floor plan?',
            'id'            => self::META_FIELDS_SLUG['floor_plan'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Parking',
            'id'            => self::META_FIELDS_SLUG['parking'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Parking Type',
            'id'            => self::META_FIELDS_SLUG['parking_type'],
            'type'          => 'radio',
            'options'       => array(
                'pilot'             => 'Pilot',
                'uncovered'         => 'Uncovered',
                'basement'          => 'Basement',
                'Closed Parking'    => 'Closed Parking',
            ),
            'inline'        => true,
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Storage Room',
            'id'            => self::META_FIELDS_SLUG['storage_room'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Storage Description',
            'id'            => self::META_FIELDS_SLUG['storage_room_description'],
            'type'          => 'text',
            'homi_class'    => 'col l9 m6 s12',
        ),
        array(
            'name'          => 'Balcony',
            'id'            => self::META_FIELDS_SLUG['balcony'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Balcony Size (sqm)',
            'id'            => self::META_FIELDS_SLUG['balcony_size'],
            'type'          => 'number',
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'View',
            'id'            => self::META_FIELDS_SLUG['view'],
            'type'          => 'text',
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Heating Type',
            'id'            => self::META_FIELDS_SLUG['heat'],
            'type'          => 'radio',
            'options'       => array(
                'autonomous'        => 'Autonomous',
                'central'           => 'Central',
                'without_heating'   => 'Without heating',
            ),
            'inline'        => true,
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Heating Source',
            'id'            => self::META_FIELDS_SLUG['heat_source'],
            'type'          => 'radio',
            'options'       => array(
                'fuel'              => 'Fuel',
                'Natural gas'       => 'Natural gas',
                'aircondition'      => 'Air Conditioning Units',
                'other'             => 'Other',
            ),
            'inline'        => true,
            'homi_class'    => 'col l6 m6 s12',
        ),
        array(
            'name'          => 'Energy Class',
            'id'            => self::META_FIELDS_SLUG['energy_class'],
            'type'          => 'radio',
            'options'       => array(
                'a_plus'        => 'A+',
                'a'             => 'A',
                'b_plus'        => 'B+',
                'b'             => 'B',
                'c'             => 'C',
                'd'             => 'D',
                'e'             => 'E',
                'f'             => 'F',
                'g'             => 'G',
                'Not available' => 'Not available',
            ),
            'inline'        => true,
            'homi_class'    => 'col s12',
        ),
        array(
            'name'          => 'Frames',
            'id'            => self::META_FIELDS_SLUG['frames'],
            'type'          => 'radio',
            'options'       => array(
                'wooden'        => 'Wooden',
                'aluminium'     => 'Aluminium',
                'synthetic'     => 'Synthetic',
            ),
            'inline'        => true,
            'homi_class'    => 'col s12',
        ),
        array(
            'name'          => 'Floor Type',
            'id'            => self::META_FIELDS_SLUG['floor_type'],
            'type'          => 'radio',
            'options'       => array(
                'marble'        => 'Marble',
                'wood'          => 'Wood',
                'stone'         => 'Stone',
                'tile'          => 'Tile',
                'mosaic'        => 'Mosaic',
                'wood_marble'   => 'Wood and marble',
                'marble_tile'   => 'Marble and tile',
                'wood_stone'    => 'Wood and stone',
                'stone_marble'  => 'Stone and marble',
                'wood_tile'     => 'Wood and tile',
                'wood_mosaic'   => 'Wood and Mosaic',
                'industrial'    => 'Industrial Surface',
            ),
            'inline'        => true,
            'homi_class'    => 'col s12',
        ),
        array(
            'name'          => 'Solar Water Heater',
            'id'            => self::META_FIELDS_SLUG['solar_water_heater'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Underfloor Heat',
            'id'            => self::META_FIELDS_SLUG['underfloor_heat'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Double-Glazed Windows',
            'id'            => self::META_FIELDS_SLUG['double_glazed_windows'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Fireplace',
            'id'            => self::META_FIELDS_SLUG['fireplace'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Secured Door',
            'id'            => self::META_FIELDS_SLUG['secured_door'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Alarm',
            'id'            => self::META_FIELDS_SLUG['alarm'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Elevator',
            'id'            => self::META_FIELDS_SLUG['elevator'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Awnings',
            'id'            => self::META_FIELDS_SLUG['tent'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Window Screens',
            'id'            => self::META_FIELDS_SLUG['window_screens'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Pet Friendly',
            'id'            => self::META_FIELDS_SLUG['pet_friendly'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Satellite',
            'id'            => self::META_FIELDS_SLUG['satellite'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'col l3 m6 s12',
        ),
        array(
            'name'          => 'Garden',
            'id'            => self::META_FIELDS_SLUG['garden'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'hide',
        ),
        array(
            'name'          => 'Painted',
            'id'            => self::META_FIELDS_SLUG['painted'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'hide',
        ),
        array(
            'name'          => 'Airy',
            'id'            => self::META_FIELDS_SLUG['airy'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'hide',
        ),
        array(
            'name'          => 'Bright',
            'id'            => self::META_FIELDS_SLUG['bright'],
            'type'          => 'radio',
            'options'       => array(
                'yes'           => 'Yes',
                'no'            => 'No',
            ),
            'std'           => 'no',
            'inline'        => true,
            'homi_class'    => 'hide',
        ),
        array(
            'name'          => 'Distance from Sea',
            'id'            => self::META_FIELDS_SLUG['sea_distance'],
            'type'          => 'text',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Distance from Metro',
            'id'            => self::META_FIELDS_SLUG['metro_distance'],
            'type'          => 'text',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Distance from Bus Station',
            'id'            => self::META_FIELDS_SLUG['bus_distance'],
            'type'          => 'text',
            'homi_class'    => 'col l4 m6 s12',
        ),
        array(
            'name'          => 'Property Extra Info',
            'id'            => self::META_FIELDS_SLUG['property_extra_info'],
            'type'          => 'text',
            'homi_class'    => 'col s12',
        ),
    );


    public function register_post_type() {

        $labels = array(
            'name'               => __( 'Upload Requests', Homi_Addons::PLUGIN_NAME ),
            'singular_name'      => __( 'Upload Request', Homi_Addons::PLUGIN_NAME ),
            'menu_name'          => _x( 'Upload Requests', 'admin menu', Homi_Addons::PLUGIN_NAME ),
            'name_admin_bar'     => _x( 'Upload Request', 'add new on admin bar', Homi_Addons::PLUGIN_NAME ),
            'add_new'            => _x( 'Add New Request', Homi_Addons::PLUGIN_NAME ),
            'add_new_item'       => __( 'Add New Request', Homi_Addons::PLUGIN_NAME ),
            'new_item'           => __( 'New Upload Request', Homi_Addons::PLUGIN_NAME ),
            'edit_item'          => __( 'Edit Upload Request', Homi_Addons::PLUGIN_NAME ),
            'view_item'          => __( 'View Upload Request', Homi_Addons::PLUGIN_NAME ),
            'all_items'          => __( 'All Upload Requests', Homi_Addons::PLUGIN_NAME ),
            'search_items'       => __( 'Search Upload Requests', Homi_Addons::PLUGIN_NAME ),
            'parent_item_colon'  => __( 'Parent Upload Requests:', Homi_Addons::PLUGIN_NAME ),
            'not_found'          => __( 'No Upload Requests found.', Homi_Addons::PLUGIN_NAME ),
            'not_found_in_trash' => __( 'No Upload Requests found in Trash.', Homi_Addons::PLUGIN_NAME )
        );

        $args = array(
            'label'                 => __( 'Upload Requests', Homi_Addons::PLUGIN_NAME ),
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
            'supports'              => array( 'title', 'author', 'editor', 'thumbnail'),
        );

        register_post_type( self::POST_TYPE_NAME, $args );

    }


    /**
     * @param $meta_boxes
     *
     * @return array
     */
    public function add_meta_boxes( $meta_boxes ){

        $meta_boxes[] = array(
            'id' => self::POST_TYPE_NAME . '_request',
            'title' => esc_html__('Request Information', Homi_Addons::PLUGIN_NAME),
            'post_types' => array(self::POST_TYPE_NAME),
            'context' => 'normal',
            'priority' => 'default',
            'autosave' => 'false',
            'fields' => array(
                array(
                    'id' => self::META_FIELDS_SLUG['status'],
                    'name' => 'Status',
                    'type' => 'select',
                    'options'  => array(
                        'draft'             => 'Draft / Offline',
                        'publish'           => 'Published',
                    ),
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['final_submission'],
                    'name' => 'Has the user submitted the final version?',
                    'type' => 'select',
                    'options'  => array(
                        'no'          => 'No',
                        'yes'         => 'Yes',
                    ),
                ),
                array(
                    'id'            => self::META_FIELDS_SLUG['homi_property'],
                    'name'          => 'HOMI Property',
                    'type'          => 'post',
                    'post_type'     => 'property',
                    'query_args'    => array(
                        'post_status' => 'any'
                    )
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['xe_id'],
                    'name' => 'XE ID',
                    'type' => 'text',
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['xe_location'],
                    'name' => 'XE Location',
                    'type' => 'autocomplete',
                    'options' => admin_url( 'admin-ajax.php?action=xe_locations' ),
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['spitogatos_id'],
                    'name' => 'Spitogatos Listing ID',
                    'type' => 'text',
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['spitogatos_broker_id'],
                    'name' => 'Spitogatos Broker Listing ID',
                    'type' => 'text',
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['spitogatos_location'],
                    'name' => 'Spitogatos Location',
                    'type' => 'autocomplete',
                    'options' => admin_url( 'admin-ajax.php?action=spitogatos_locations' ),
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['condition'],
                    'name' => 'Condition',
                    'type' => 'select',
                    'options'         => array(
                        'not_selected'          => 'Not Selected',
                        'other'                 => 'Other Condition',
                        'newbuilt'              => 'New Building',
                        'under_construction'    => 'Under Construction',
                        'unfinished'            => 'Unfinished',
                        'good'                  => 'Good',
                        'need_repair'           => 'Needs Repair',
                        'perfect'               => 'Perfect',
                        'refurbished'           => 'Refurbished',
                    ),
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['convert_action'],
                    'name' => 'Convert Action',
                    'desc' => 'This action is responsible for creating the listing on a platform or updating it if it already exists. You can select to bulk create or update the upload request to all platforms.',
                    'type' => 'select',
                    'options'         => array(
                        'none'                  => 'No Action',
                        'convert_all'           => 'Convert to All Platforms',
                        'convert_houzez'        => 'Convert to Houzez',
                        'convert_xe'            => 'Convert to XE',
                        'convert_spitogatos'    => 'Convert to Spitogatos',
                    ),
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['renew_action'],
                    'name' => 'Renew Listing',
                    'desc' => 'This action is responsible for only renewing the listing on the selected platform. It does not update any information on the platforms. If you want to update the information of a listing
                    use the convert action above.',
                    'type' => 'select',
                    'options'         => array(
                        'none'                  => 'No Action',
                        'renew_all'             => 'Renew to All Platforms',
                        'renew_xe'              => 'Renew to XE',
                        'renew_spitogatos'      => 'Renew to Spitogatos',
                    ),
                ),
                array(
                    'id' => self::META_FIELDS_SLUG['email_action'],
                    'name' => 'Email Action',
                    'desc' => 'Select what type of email you want to send by updating the current upload request. You can use this action to send emails to notify the perfect matches users about the current property',
                    'type' => 'select',
                    'options'         => array(
                        'none'                      => 'No Action',
                        'email_perfect_matches'     => 'Send email to perfect matches',
                        'email_filtered_matches'    => 'Send email to filtered matches',
                    ),
                ),
            )
        );

        $meta_boxes[] = array(
            'id' => self::POST_TYPE_NAME . '_gallery',
            'title' => esc_html__('Property Gallery', Homi_Addons::PLUGIN_NAME),
            'post_types' => array(self::POST_TYPE_NAME),
            'context' => 'normal',
            'priority' => 'default',
            'autosave' => 'false',
            'fields' => array(
                array(
                    'id'               => self::META_FIELDS_SLUG['gallery'],
                    'name'             => 'HOMI Gallery',
                    'type'             => 'image_advanced',
                    'force_delete'     => false,
                    'max_file_uploads' => 50,
                    'max_status'       => 'false',
                    'image_size'       => 'thumbnail',
                ),
                array(
                    'id'               => self::META_FIELDS_SLUG['xe_images'],
                    'name'             => 'XE Gallery',
                    'desc'             => 'The order of the images are the same order as the one that XE will detect. The first image of the gallery will be the primary one on XE',
                    'type'             => 'image_advanced',
                    'force_delete'     => false,
                    'max_file_uploads' => 10,
                    'max_status'       => 'false',
                    'image_size'       => 'thumbnail',
                ),
                array(
                    'id'               => self::META_FIELDS_SLUG['spitogatos_images'],
                    'name'             => 'Spitogatos Gallery',
                    'desc'             => 'The order of the images are the same order as the one that Spitogatos detect. The first image of the gallery will be the primary one on Spitogatos',
                    'type'             => 'image_advanced',
                    'force_delete'     => false,
                    'max_file_uploads' => 25,
                    'max_status'       => 'false',
                    'image_size'       => 'thumbnail',
                ),

            )
        );


        $meta_boxes[] = array(
            'id' => self::POST_TYPE_NAME . '_descriptions',
            'title' => esc_html__('Property Descriptions', Homi_Addons::PLUGIN_NAME),
            'post_types' => array(self::POST_TYPE_NAME),
            'context' => 'normal',
            'priority' => 'default',
            'autosave' => 'false',
            'fields' => array(
                array(
                    'name'    => 'XE Description',
                    'id'      => self::META_FIELDS_SLUG['xe_description'],
                    'type'    => 'wysiwyg',
                    'raw'     => false,
                    'options' => array(
                        'textarea_rows' => 4,
                        'teeny'         => true,
                    ),
                ),
                array(
                    'name'    => 'Spitogatos Description (GR)',
                    'id'      => self::META_FIELDS_SLUG['spitogatos_description_gr'],
                    'type'    => 'wysiwyg',
                    'raw'     => false,
                    'options' => array(
                        'textarea_rows' => 4,
                        'teeny'         => true,
                    ),
                ),
                array(
                    'name'    => 'Spitogatos Description (EN)',
                    'id'      => self::META_FIELDS_SLUG['spitogatos_description_en'],
                    'type'    => 'wysiwyg',
                    'raw'     => false,
                    'options' => array(
                        'textarea_rows' => 4,
                        'teeny'         => true,
                    ),
                ),
            )
        );

        $meta_boxes[] = array(
            'id'            => self::POST_TYPE_NAME . '_landlord',
            'title'         => esc_html__('Landlord Information', Homi_Addons::PLUGIN_NAME),
            'post_types'    => array(self::POST_TYPE_NAME),
            'context'       => 'normal',
            'priority'      => 'default',
            'autosave'      => 'false',
            'fields'        => self::LANDLORD_FIELDS
        );

        $meta_boxes[] = array(
            'id'            => self::POST_TYPE_NAME . '_pea',
            'title'         => esc_html__('Energy Certificate Information', Homi_Addons::PLUGIN_NAME),
            'post_types'    => array(self::POST_TYPE_NAME),
            'context'       => 'normal',
            'priority'      => 'default',
            'autosave'      => 'false',
            'fields'        => self::PEA_FIELDS
        );

        $meta_boxes[] = array(
            'id'            => self::POST_TYPE_NAME . '_property_primary_info',
            'title'         => esc_html__('Property primary Information', Homi_Addons::PLUGIN_NAME),
            'post_types'    => array(self::POST_TYPE_NAME),
            'context'       => 'normal',
            'priority'      => 'default',
            'autosave'      => 'false',
            'fields'        => self::PRIMARY_INFO_FIELDS
        );

        $meta_boxes[] = array(
            'id'            => self::POST_TYPE_NAME . '_equipment_info',
            'title'         => esc_html__('Equipment Information', Homi_Addons::PLUGIN_NAME),
            'post_types'    => array(self::POST_TYPE_NAME),
            'context'       => 'normal',
            'priority'      => 'default',
            'autosave'      => 'false',
            'fields'        => self::EQUIPMENT_FIELDS
        );

        $meta_boxes[] = array(
            'id'            => self::POST_TYPE_NAME . '_property_extra_info',
            'title'         => esc_html__('Additional Information', Homi_Addons::PLUGIN_NAME),
            'post_types'    => array(self::POST_TYPE_NAME),
            'context'       => 'normal',
            'priority'      => 'default',
            'autosave'      => 'false',
            'fields'        => self::EXTRA_INFO_FIELDS
        );


        $meta_boxes[] = array(
            'id'            => self::POST_TYPE_NAME . '_matches_notify',
            'title'         => esc_html__('Users that have been notified about their matches', Homi_Addons::PLUGIN_NAME),
            'post_types'    => array(self::POST_TYPE_NAME),
            'context'       => 'normal',
            'priority'      => 'default',
            'autosave'      => 'false',
            'fields'        => array(
                array(
                    'name'          => 'Selected users were matched to this property and have already been notified',
                    'id'            => self::META_FIELDS_SLUG['matched_users_emailed'],
                    'type'          => 'user',
                    'multiple'      => true,
                    'ajax'          => true, // THIS
                    'field_type'    => 'select_advanced',
                ),
            )
        );
        $meta_boxes[] = array(
            'id'            => self::POST_TYPE_NAME . '_matches_filters',
            'title'         => esc_html__('Matches filters - Used to filter matches in order to send emails to non perfect matches', Homi_Addons::PLUGIN_NAME),
            'post_types'    => array(self::POST_TYPE_NAME),
            'context'       => 'normal',
            'priority'      => 'default',
            'autosave'      => 'false',
            'fields'        => array(
                array(
                    'name'          => 'Alternative Location Name',
                    'id'            => 'upload_request_alternative_location_name',
                    'type'          => 'text',
                ),
                array(
                    'name'          => 'Enable Price Filter',
                    'id'            => 'upload_request_enable_price_filter',
                    'type'          => 'select',
                    'options'       => array(
                        '0'          => 'No',
                        '1'         => 'Yes',
                    ),
                ),
                array(
                    'name'          => 'Price Margin (%)',
                    'id'            => 'upload_request_price_margin',
                    'type'          => 'number',
                ),
                array(
                    'name'          => 'Enable Size Filter',
                    'id'            => 'upload_request_enable_size_filter',
                    'type'          => 'select',
                    'options'       => array(
                        '0'          => 'No',
                        '1'         => 'Yes',
                    ),
                ),
                array(
                    'name'          => 'Size Margin (%)',
                    'id'            => 'upload_request_size_margin',
                    'type'          => 'number',
                ),
                array(
                    'name'          => 'Include interests with no price set',
                    'id'            => 'upload_request_include_no_price',
                    'type'          => 'select',
                    'options'       => array(
                        '0'          => 'No',
                        '1'         => 'Yes',
                    ),
                ),
                array(
                    'name'          => 'Include interests with no size set',
                    'id'            => 'upload_request_include_no_size',
                    'type'          => 'select',
                    'options'       => array(
                        '0'          => 'No',
                        '1'         => 'Yes',
                    ),
                ),
            )
        );

        $meta_boxes[] = array(
            'id'            => self::POST_TYPE_NAME . '_matches',
            'title'         => esc_html__('Matches', Homi_Addons::PLUGIN_NAME),
            'post_types'    => array(self::POST_TYPE_NAME),
            'context'       => 'normal',
            'priority'      => 'default',
            'autosave'      => 'false',
            'fields'        => array(
               array(
                   'type'          => 'custom_html',
                   'callback'  => array( $this, 'requestMatches' ),
               ),
            )
        );



        return $meta_boxes;

    }



    /**
     * The controller function that handles the following actions taken:
     *
     *  - Convert Action: Converts the upload request to Houzez, XE and Spitogatos
     *  - Renew Action: Renews the upload request according listing of XE and Spitogatos
     *
     * @param $post_ID
     * @param $post
     * @param $update
     */
    public function actionsController( $post_ID, $post, $update ){

        if( $update ){

           $this->convertController( $post_ID );
           $this->renewController( $post_ID );
           $this->emailController( $post_ID );

        }

    }



    /**
     * This function is responsible for converting an Upload Request to the following:
     *
     * - Houzez Property
     * - XE Listing
     * - Spitogatos Listing
     *
     * The according functions of each converter check if the listing is a new one or an existing
     * and they handle independently the Create New or Update functionalities
     *
     * @param $post_ID int
     */
    private function convertController( $post_ID ){

        $convert_action = get_post_meta( $post_ID, self::META_FIELDS_SLUG['convert_action'], true );

        switch( $convert_action ){

            case 'convert_houzez':

                $uploadRequest   = new UploadRequest( $post_ID );
                $houzezConverter = new ConverterHouzez();
                $houzezConverter->create_houzez_property_by_request( $uploadRequest );
                update_post_meta( $post_ID, self::META_FIELDS_SLUG['convert_action'], 'none');

                break;

            case 'convert_xe':

                $xeConverter = new ConverterXE( $post_ID );
                $xeConverter->convert_to_xe();
                update_post_meta( $post_ID, self::META_FIELDS_SLUG['convert_action'], 'none' );

                break;


            case 'convert_spitogatos':

                $sgConverter    = new ConverterSpitogatos( $post_ID );
                $sgConverter->convert_spitogatos();
                update_post_meta( $post_ID, self::META_FIELDS_SLUG['convert_action'], 'none' );

                break;

            case 'convert_all':

                $uploadRequest   = new UploadRequest( $post_ID );
                $houzezConverter = new ConverterHouzez();
                $houzezConverter->create_houzez_property_by_request( $uploadRequest );

                $xeConverter    = new ConverterXE( $post_ID );
                $xeConverter->convert_to_xe();

                $sgConverter    = new ConverterSpitogatos( $post_ID );
                $sgConverter->convert_spitogatos();

                update_post_meta( $post_ID, self::META_FIELDS_SLUG['convert_action'], 'none' );

                break;

        }

    }


    /**
     * This function is responsible for renewing an Upload Request Listing to the platforms:
     * - XE Listing
     * - Spitogatos Listing
     *
     * This does not actually updates the data of the listing. Only renews it.
     *
     * @param $post_ID int
     */
    private function renewController( $post_ID ){

        $renewAction = get_post_meta( $post_ID, self::META_FIELDS_SLUG['renew_action'], true );

        switch( $renewAction ){

            case 'renew_xe':

                $xeConverter    = new ConverterXE( $post_ID );
                $xeConverter->convert_to_xe();
                update_post_meta( $post_ID, self::META_FIELDS_SLUG['renew_action'], 'none' );

                break;


            case 'renew_spitogatos':

                $sgConverter    = new ConverterSpitogatos( $post_ID );
                $sgConverter->api->renewListing( $sgConverter->upload_request->spitogatos_id );
                update_post_meta( $post_ID, self::META_FIELDS_SLUG['renew_action'], 'none' );

                break;

            case 'renew_all':

                $xeConverter    = new ConverterXE( $post_ID );
                $xeConverter->convert_to_xe();

                $sgConverter    = new ConverterSpitogatos( $post_ID );
                $sgConverter->api->renewListing( $sgConverter->upload_request->spitogatos_id );

                update_post_meta( $post_ID, self::META_FIELDS_SLUG['renew_action'], 'none' );

                break;

        }

    }



    /**
     * This function is responsible for sending an email to the perfect matches
     * of the current Upload Request
     *
     * @param $post_ID int
     */
    private function emailController( $post_ID ){

        $emailAction = get_post_meta( $post_ID, self::META_FIELDS_SLUG['email_action'], true );

        switch( $emailAction ){

            case 'email_perfect_matches':

                $emailMatches = new EmailMatchesController( $post_ID );
                $emailMatches->sendEmailPerfectMatches();

                update_post_meta( $post_ID, self::META_FIELDS_SLUG['email_action'], 'none' );

                break;

            case 'email_filtered_matches':

                $emailMatches = new EmailMatchesController( $post_ID );
                $emailMatches->sendEmailFilteredMatches();

                update_post_meta( $post_ID, self::META_FIELDS_SLUG['email_action'], 'none' );

                break;

            default:

                update_post_meta( $post_ID, self::META_FIELDS_SLUG['email_action'], 'none' );

                break;


        }

    }



    /**
     * It creates and array with the images server paths that will be
     * stored in the image_paths property
     *
     * @param $postid int
     *
     */
    public function on_delete_upload_request( $postid ){

        if( get_post_type( $postid ) === self::POST_TYPE_NAME ){

            try {

                $uploadRequest = new UploadRequest($postid);

                if (!empty($uploadRequest->xe_id)) {

                    $xeConverter = new ConverterXE($postid);
                    $xeConverter->delete_xe_listing_files();

                }

                if (!empty($uploadRequest->spitogatos_id)) {

                    $spitogatosAPI = new SpitogatosAPI();
                    $spitogatosAPI->delete_listing($uploadRequest->spitogatos_id);

                }

                if (!empty($uploadRequest->homi_property)) {

                    wp_delete_post($uploadRequest->homi_property, true);

                }

            }
            catch ( Exception $e ){}

        }

    }


    public function get_requests_ids_by_user_args( $user_id ){

        $ids = array();

        $args = array(
            'post_type'         => self::POST_TYPE_NAME,
            'posts_per_page'    => -1,
        );

        $user = get_user_by('ID', $user_id );

        if( !in_array('administrator',  $user->roles) ){
            $args['author'] = $user_id;
        }

        $query = new WP_Query( $args );

        if( $query->have_posts() ){

            while ( $query->have_posts() ) {
                $query->the_post();
                $ids[] = get_the_ID();
            }

        }

        return $ids;

    }

    public function get_status( $post_id ){

        $meta = get_post_meta( $post_id, self::META_FIELDS_SLUG['status'], true );

        return ( empty( $meta ) ? 'draft' : $meta );

    }


    public function custom_fields_front_template( $slug, $name ){

        if( current_user_can('administrator') ) {

            var_dump( $slug );
            var_dump( $name );

        }

    }


    public function requestMatches(){

        ?>

            <div class="admin-matches">

                <div class="form-wrapper">

                    <input type="hidden" name="upload_request_id" value="<?php echo $_GET['post']; ?>">

                    <div class="input-field">
                        <label for="location2">Location alternative Name</label>
                        <input type="text" id="location2" name="location2" value="">
                    </div>

                    <div class="input-field">
                        <label for="enable_price_filter">Enable Price Filter</label>
                        <select id="enable_price_filter" name="enable_price_filter">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label for="price_percentage">Price margin (%)</label>
                        <input type="number" id="price_percentage" name="price_percentage" value="15">
                    </div>

                    <div class="input-field">
                        <label for="enable_size_filter">Enable Size Filter</label>
                        <select id="enable_size_filter" name="enable_size_filter">

                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>


                    <div class="input-field">
                        <label for="size_percentage">Size margin (%)</label>
                        <input type="number" id="size_percentage" name="size_percentage" value="15">
                    </div>

                    <div class="input-field">
                        <label for="include_empty_prices">Include interests with no price set</label>
                        <select id="include_empty_prices" name="include_empty_prices">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>

                    <div class="input-field">
                        <label for="include_empty_sizes">Include interests with no size set</label>
                        <select id="include_empty_sizes" name="include_empty_sizes">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>


                    <button>
                        Search for matches
                    </button>

                </div>

                <div class="results">

                    <?php

                        if( isset( $_GET['post'] ) ){
                            $matching = new PropertyMatching();
                            $matching->getPropertyMatches( $_GET['post'], false, false );

                        }

                    ?>

                </div>

            </div>


        <?php
    }


    public function getAdminMatches(){

        $result     = array();
        $params     = array();

        parse_str( $_POST['data'], $params );

        $price_filter = boolval( $params['enable_price_filter'] );
        $size_filter = boolval( $params['enable_size_filter'] );
        $price_percentage = ( isset( $params['price_percentage'] ) && !empty( $params['price_percentage'] ) ? $params['price_percentage'] : 15);
        $size_percentage = ( isset( $params['size_percentage'] ) && !empty( $params['size_percentage'] ) ? $params['size_percentage'] : 15);
        $include_empty_prices = boolval( $params['include_empty_prices'] );
        $include_empty_sizes = boolval( $params['include_empty_sizes'] );
        $location2 = $params['location2'];

        if( isset( $params['upload_request_id'] ) && !empty( $params['upload_request_id'] ) ){

            $result['status'] = 'success';

            $matching = new PropertyMatching();

            ob_start();

            $matching->getPropertyMatches(
                intval( $params['upload_request_id'] ),
                $price_filter,
                $size_filter,
                $price_percentage,
                $size_percentage,
                $include_empty_prices,
                $include_empty_sizes,
                $location2
            );

            $result['html'] = ob_get_clean();

        }
        else {
            $result['status'] = 'failed';
        }


        wp_send_json( $result );
        wp_die();

    }

}
