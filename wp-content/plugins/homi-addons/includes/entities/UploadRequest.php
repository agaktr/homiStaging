<?php


class UploadRequest{

    public $ID;
    public $homi_property;
    public $xe_id;
    public $xe_location;
    public $spitogatos_id;
    public $spitogatos_broker_id;
    public $spitogatos_location;
    public $status;
    public $condition;
    public $list_type;
    public $address;
    public $suburb;
    public $postcode;
    public $full_address_gr;
    public $lat;
    public $long;
    public $property_category;
    public $property_subcategory;
    public $floor;
    public $size;
    public $construction_year;
    public $price;
    public $price_sqm;
    public $common_charges;
    public $estimated_bills;
    public $deposit;
    public $lease_duration;
    public $date_of_sale_rent;
    public $bedrooms;
    public $bathrooms;
    public $wc;
    public $living_rooms;
    public $kitchens;
    public $renovated;
    public $renovation_year;
    public $renovated_details;
    public $property_highlights;
    public $neighborhood_description;
    public $floor_plan;
    public $parking;
    public $parking_type;
    public $storage_room;
    public $storage_room_description;
    public $balcony;
    public $balcony_size;
    public $view;
    public $heat;
    public $heat_source;
    public $aircondition;
    public $aircondition_number;
    public $energy_class;
    public $frames;
    public $floor_type;
    public $solar_water_heater;
    public $underfloor_heat;
    public $double_glazed_windows;
    public $fireplace;
    public $secured_door;
    public $alarm;
    public $elevator;
    public $tent;
    public $window_screens;
    public $pet_friendly;
    public $satellite;
    public $garden;
    public $painted;
    public $airy;
    public $bright;
    public $sea_distance;
    public $metro_distance;
    public $bus_distance;
    public $property_extra_info;
    public $furnished;
    public $equipped;
    public $stove;
    public $oven;
    public $fridge;
    public $dishwasher;
    public $washing_machine;
    public $tv;
    public $date_available_from;
    public $landlord_name;
    public $landlord_last_name;
    public $landlord_father_name;
    public $landlord_id_number;
    public $landlord_id_issue_date;
    public $landlord_tax_id;
    public $landlord_tax_office;
    public $landlord_ap;
    public $landlord_aa;
    public $landlord_id_copy;
    public $user_id;
    public $user;
    public $url;
    public $last_modified;
    public $full_address;
    public $content;
    public $gallery;
    public $all_images;
    public $featured_image;
    public $xe_images;
    public $spitogatos_images;
    public $xe_description;
    public $spitogatos_description_gr;
    public $spitogatos_description_en;


    public function __construct( $upload_request_id ){

        $this->ID               = $upload_request_id;
        $this->user_id          = get_post_field( 'post_author', $this->ID );
        $this->user             = get_user_by('ID', $this->user_id);
        $this->url              = home_url( PropertyUploadController::PROPERTY_UPLOAD_PAGE_SLUG . '/' . PropertyUploadController::EDIT_PAGE . '/request/'.  $this->ID );
        $this->last_modified    = get_the_modified_date('d/m/Y', $this->ID );
        $this->content          = get_post_field( 'post_content', $this->ID );
        $this->homi_property    = get_post_meta( $this->ID, Homi_Addons_Upload_Request::META_FIELDS_SLUG['homi_property'], true );
        $this->xe_id            = get_post_meta( $this->ID, Homi_Addons_Upload_Request::META_FIELDS_SLUG['xe_id'], true );
        $this->spitogatos_id    = get_post_meta( $this->ID, Homi_Addons_Upload_Request::META_FIELDS_SLUG['spitogatos_id'], true );
        $this->featured_image   = get_post_thumbnail_id( $this->ID );

        if( empty( $this->homi_property ) ){
            $this->homi_property = false;
        }

        if( empty( $this->xe_id ) ){
            $this->xe_id = false;
        }

        if( empty( $this->spitogatos_id ) ){
            $this->spitogatos_id = false;
        }

        foreach( Homi_Addons_Upload_Request::META_FIELDS_SLUG as $index => $meta_key ){

            if( property_exists( $this, $index )  ){

                $this->$index = get_post_meta( $this->ID, $meta_key, true );

            }

        }

        if( !empty( $this->address ) && !empty( $this->suburb ) && !empty( $this->postcode ) ){
            $this->full_address     = $this->address . ', ' .$this->suburb . ', ' . $this->postcode;
        }
        else {
            $this->full_address = '';
        }

        $this->xe_images            = get_post_meta( $this->ID, Homi_Addons_Upload_Request::META_FIELDS_SLUG['xe_images'] );
        $this->spitogatos_images    = get_post_meta( $this->ID, Homi_Addons_Upload_Request::META_FIELDS_SLUG['spitogatos_images'] );
        $this->gallery              = get_post_meta( $this->ID, Homi_Addons_Upload_Request::META_FIELDS_SLUG['gallery'] );
        $this->all_images           = array_merge( $this->gallery, array( $this->featured_image ) );

    }

}
