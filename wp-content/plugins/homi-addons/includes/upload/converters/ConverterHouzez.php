<?php


class ConverterHouzez {

    const CONSTANT_VALUES = array(
        'fave_property_size_prefix'     => 'sqm',
        'fave_property_country'         => 'GR',
        'fave_property_map'             => '1',
        'fave_loggedintoview'           => '0'
    );


    //This array has as a key the taxonomy slug
    //As a value it has an array of the Upload Request property
    //The value the Upload Request property has is the term assigned to the taxonomy
    const MAP_TAXONOMY_VALUES_AS_TERMS = array(
        'property_status'   => 'list_type',
        'property_type'     => 'property_subcategory'
    );


    const MAP_URF_TO_FEATURES = array(
        'alarm'                 => 'alarm',
        'dishwasher'            => 'dishwasher',
        'fireplace'             => 'fireplace',
        'fridge'                => 'fridge',
        'oven'                  => 'oven',
        'satellite'             => 'satellite',
        'stove'                 => 'stove',
        'tv'                    => 'tv',
        'underfloor-heating'    => 'underfloor_heat',
        'washing-machine'       => 'washing_machine',
    );

    const MAP_META = array(
      'fave_property_price'                         => 'price',
      'fave_property_size'                          => 'size',
      'fave_property_bedrooms'                      => 'bedrooms',
      'fave_property_bathrooms'                     => 'bathrooms',
      'fave_property_garage'                        => 'parking',
      'fave_property_year'                          => 'construction_year',
      'fave_property_address'                       => 'address',
      'fave_property_zip'                           => 'postcode',
      'fave_property_map_address'                   => 'full_address',
      'fave_energy_class'                           => 'energy_class',
    );


    const MAP_META_CUSTOM_FIELDS = array(
        'price-sqmf5f6db65d370bf'                     => 'price_sqm',
        'property-categoryf5f6af9d41614b'             => 'property_category',
        'floorf5f6afa90b7fa9'                         => 'floor',
        'heating-typef5f6afd535a105'                  => 'heat',
        'heating-sourcef5f6afd66d0f75'                => 'heat_source',
        'framesf5f6afda07004c'                        => 'frames',
        'floor-typef5f6afde4377bc'                    => 'floor_type',
        'common-chargesf5f6afe4630b6e'                => 'common_charges',
        'estimated-billsf5f6afe537ee82'               => 'estimated_bills',
        'depositf5f6afe805ce7a'                       => 'deposit',
        'lease-durationf5f6afe987c2a8'                => 'lease_duration',
        'available-fromf5f6afeb65e2a6'                => 'date_available_from',
        'living-roomsf5f6afec942a4f'                  => 'living_rooms',
        'kitchensf5f6afed2cd15e'                      => 'kitchens',
        'renovation-yearf5f6afedd47d75'               => 'renovation_year',
        'renovation-detailsf5f6afee6f311f'            => 'renovated_details',
        'balcony-sizef5f6b007f3ab30'                  => 'balcony_size',
        'balconyf5f6b00a89100e'                       => 'balcony',
        'viewf5f6b00ba46eca'                          => 'view',
        'parkingf5f6b0af5c1ab6'                       => 'parking',
        'parking-typef5f6b0b285ebc4'                  => 'parking_type',
        'floor-planf5f6b0b3ac5d00'                    => 'floor_plan',
        'no-airconsf5f6b0b8fb2fcf'                    => 'aircondition_number',
        'date-sale-rentf5f6b0bac416cd'                => 'date_of_sale_rent',
        'highlightsf5f6b0bb97c444'                    => 'property_highlights',
        'neighbourhood-descriptionf5f6b0bc506378'     => 'neighborhood_description',
        'storage-descriptionf5f6b0c134fdf2'           => 'storage_room_description',
        'distance-from-seaf5f6b159430116'             => 'sea_distance',
        'distance-from-metrof5f6b159aebe23'           => 'metro_distance',
        'distance-from-bus-stationf5f6b15af8299c'     => 'bus_distance',
        'extra-property-infof5f6b169d1cf88'           => 'property_extra_info',
        'elevatorf5f6b17a7ed3a0'                      => 'elevator',
        'solar-water-heaterf5f6b196e9fdc4'            => 'solar_water_heater',
        'secured-doorf5f6b19aba577d'                  => 'secured_door',
        'storagef5f6b1a0340fcf'                       => 'storage_room',
        'furnishedf5f6b1a239fc12'                     => 'furnished',
        'air-conditioningf5f6b26eaaa48c'              => 'aircondition',
        'suburbf5f6b74c469c63'                        => 'suburb',
        'energy-classf5f6b75208719b'                  => 'energy_class',
        'awningsf5f6b82eae5347'                       => 'tent',
        'window-screensf5f6b830a90799'                => 'window_screens',
        'double-glazed-windowsf5f6b832b6243e'         => 'double_glazed_windows',
        'pet-friendlyf5f6b849c645c5'                  => 'pet_friendly',
        'renovatedf5f6b84ed0abeb'                     => 'renovated',
        'w-cf5f6b863cb2883'                           => 'wc',
    );



    /**
     * @param $uploadRequest UploadRequest
     *
     * @return void
     */
    public function create_houzez_property_by_request( $uploadRequest ){

        $meta_input = array();

        foreach( self::MAP_META as $meta_key => $object_property ){

            if(  property_exists( $uploadRequest, $object_property ) ){

                $meta_input[ $meta_key ] = $uploadRequest->$object_property;

            }

        }

        foreach( self::MAP_META_CUSTOM_FIELDS as $meta_key => $object_property ){

            if(  property_exists( $uploadRequest, $object_property ) ){

                $meta_input[ 'fave_'.$meta_key ] = ucfirst( $uploadRequest->$object_property );

                if( $meta_key === 'floor-typef5f6afde4377bc' ){

                    $mappedFloorTypes = array(
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
                        'wood_mosaic'   => 'Wood and mosaic',
                        'industrial'    => 'Industrial surface',
                    );

                    $meta_input[ 'fave_'.$meta_key ] = $mappedFloorTypes[ $uploadRequest->$object_property ];
                }

            }

        }

        foreach( self::CONSTANT_VALUES as $meta_key => $value ){

            $meta_input[ $meta_key ] = $value;

        }

       if( empty( $uploadRequest->price_sqm ) && !empty( $uploadRequest->price ) &&  !empty( $uploadRequest->size ) && $uploadRequest->size !== 0 ){

           $price_sqm = $uploadRequest->price / $uploadRequest->size;

           $meta_input[ Homi_Addons_Upload_Request::META_FIELDS_SLUG['price_sqm'] ] = round( $price_sqm, 2);
       }

        $title      = "Property by request #" . $uploadRequest->ID;
        $user_id    = get_post_field( 'post_author', $uploadRequest->ID );

        $request = array(
            'post_title'    => $title,
            'post_status'   => $uploadRequest->status,
            'post_content'  => $uploadRequest->content,
            'post_type'     => 'property',
            'post_author'   => $user_id,
            'meta_input'    => $meta_input,
        );

        if( $uploadRequest->homi_property ){

            $request['ID'] = intval( $uploadRequest->homi_property );
            wp_update_post($request);
            $this->add_property_terms( $uploadRequest->homi_property, $uploadRequest );
            $this->sync_photos( $uploadRequest->homi_property, $uploadRequest );

        }
        else {

            $new_property_id = wp_insert_post( $request, true );

            if( !$new_property_id instanceof WP_Error ){

                update_post_meta( $uploadRequest->ID, Homi_Addons_Upload_Request::META_FIELDS_SLUG['homi_property'], $new_property_id );
                $this->add_property_terms( $new_property_id, $uploadRequest );
                $this->sync_photos( $new_property_id, $uploadRequest );


            }

        }

    }



    /**
     * This function is responsible for mapping the URF fields to properties terms
     *
     * @param $property_id int
     * @param $uploadRequest UploadRequest
     *
     * @return void
     */
    public function add_property_terms( $property_id, $uploadRequest ){

        foreach( self::MAP_TAXONOMY_VALUES_AS_TERMS as $taxonomy => $object_property ){

            if(  property_exists( $uploadRequest, $object_property )  ){

                $value = str_replace('_', '-', $uploadRequest->$object_property );

                $term_to_add = get_term_by('slug', $value, $taxonomy );

                if( $term_to_add instanceof WP_Term ){

                    wp_set_post_terms( $property_id, array( $term_to_add->term_id ), $taxonomy );

                }

            }

        }

        foreach( self::MAP_URF_TO_FEATURES as $term => $object_property ){

            if(  property_exists( $uploadRequest, $object_property )  ){

               if( $uploadRequest->$object_property === 'yes' ){

                   $term_to_add = get_term_by('slug', $term, 'property_feature' );

                   if( $term_to_add instanceof WP_Term ){

                       wp_set_post_terms( $property_id, array( $term_to_add->term_id ), 'property_feature', true );

                   }

               }

            }

        }

    }



    /**
     * This function is responsible for converting the featured image
     * and the gallery images from upload request to HOUZEZ property
     *
     * @param $property_id int
     * @param $uploadRequest UploadRequest
     *
     * @return void
     */
    private function sync_photos( $property_id, $uploadRequest  ){

        $featured_image = get_post_thumbnail_id( $uploadRequest->ID );

        if( !empty( $featured_image ) ){
            update_post_meta( $property_id, '_thumbnail_id', $featured_image);
        }


        if( is_array( $uploadRequest->gallery  ) && !empty( $uploadRequest->gallery  ) ){

            foreach( $uploadRequest->gallery as $gallery_image ) {
                // This method uses `add_post_meta()` instead of `update_post_meta()`
                add_post_meta( $property_id, 'fave_property_images', $gallery_image );
            }

        }

    }

}
