<?php


class ConverterSpitogatos {

    public $api;
    public $upload_request;
    public $mapper;
    public $data;
    public $images;


    /**
     * Initialize the converter by setting up the:
     *  - Spitogatos API
     *  - Upload Request obj
     *  - Spitogatos Data Mapper
     *
     * @param    int $upload_request_id
     * @since    1.0.0
     * @access   public
     */
    public function __construct( $upload_request_id ){

        $this->api                  = new SpitogatosAPI();
        $this->upload_request       = new UploadRequest( $upload_request_id );
        $this->mapper               = new SpitogatosMapper( $this->upload_request );

    }



    /**
     * This function is responsible for converting a listing to Spitogatos
     *
     * As first step we generate the struct array that has all the listing data
     * Then we send the request to Spitogatos API by passing the listing data
     * After the request is made if it was successful we create the images
     * Last but not least we add the images to the listing created on Spitogatos
     *
     */
    public function convert_spitogatos(){

        try {

            if( empty( $this->upload_request->spitogatos_id ) ){

                $this->newListing();

            }
            else {

                $this->updateListing();

            }

        }
        catch( Exception $e ){

        }


    }


    public function newListing(){

        $this->create_struct();
        $new_listing = $this->api->new_listing( $this->data );

        //Make sure the request was successful by checking if the result has a Listing ID
        if( isset( $new_listing['listingID'] ) ){

            $listing_id = $new_listing['listingID'];

            //Update the info of the conversion to the Upload Request post
            update_post_meta( $this->upload_request->ID, Homi_Addons_Upload_Request::META_FIELDS_SLUG['spitogatos_id'], $new_listing['listingID'] );
            update_post_meta( $this->upload_request->ID, Homi_Addons_Upload_Request::META_FIELDS_SLUG['spitogatos_broker_id'], $new_listing['brokerListingID'] );

            //Create and add the images to spitogatos
            $this->create_images();
            $this->api->add_new_images( $this->images, $listing_id );

        }

    }


    public function updateListing(){

        $this->create_struct();
        $this->api->editListing( $this->upload_request->spitogatos_id, $this->data );

        //Create and update the images to spitogatos
        $this->create_images();
        $this->api->updateImages( $this->images, $this->upload_request->spitogatos_id );

    }



    /**
     * Creates the 'struct' array that will be used to
     * make a post request to the Spitogatos API
     *
     * The struct array contains all the listing data which is consisted by:
     *
     *  -    'location'                  => $location_array,
     *  -    'propertyDetails'           => $propertyDetails,
     *  -    'listingDetails'            => $listingDetails,
     *  -    'detailedCharacteristics'   => $detailedCharacteristics,
     *
     * @since    1.0.0
     * @access   private
     */
    private function create_struct(){

        $streetAddress = array(
            'en' => $this->upload_request->full_address
        );

        if( !empty( $this->upload_request->full_address_gr ) ){
            $streetAddress['gr'] = $this->upload_request->full_address_gr;
        }

        $location_array = array(
            'geographyId'       => $this->upload_request->spitogatos_location,
            'displayAddress'    => 'yes',
            'geocodeType'       => 'exact',
            'latitude'          => floatval( $this->upload_request->lat ),
            'longitude'         => floatval( $this->upload_request->long ),
            'streetAddress'     => $streetAddress,
            'zip'               => $this->upload_request->postcode
        );

        $propertyDetails = array(
            'category'          => $this->mapper->map_category(),
            'fullBathrooms'     => $this->upload_request->bathrooms,
            'halfBathrooms'     => ( !empty( $this->upload_request->wc ) ? $this->upload_request->wc : 0 ),
            'livingArea'        => $this->upload_request->size,
            'propertyType'      => $this->mapper->map_property_type(),
            'rooms'             => $this->upload_request->bedrooms,
            'yearBuilt'         => $this->upload_request->construction_year,
        );


        $listingDetails = array(
            'brokerListingID'       => 'homi.one '. $this->upload_request->homi_property,
            'currency'              => 'EUR',
            'dateAvailable'         => date("d/m/Y", strtotime( $this->upload_request->date_available_from ) ),
            'description'           => array( 'gr' => $this->upload_request->spitogatos_description_gr, 'en' => $this->upload_request->spitogatos_description_en ),
            'exchangeScheme'        => 'no',
            'listingType'           => $this->mapper->listing_type(),
            'price'                 => $this->upload_request->price,
            'published'             => ( $this->upload_request->status === 'publish' ? 'yes' : 'no'),
            'publishedTSM'          => ( $this->upload_request->status === 'publish' ? 'yes' : 'no'),
            'employeeLastName'      => 'Saisanas',
            'employeeFirstName'     => 'Alexandros',
            'employeePhoneNumber'   => '2152151962',
            'employeeEmail'         => 'alexandros@homi.com.gr',
            'publishedBrokerSite'   => 'yes',
        );


        $detailedCharacteristics = array(
            'airConditioning'       => ( !empty( $this->upload_request->aircondition ) ? strtolower( $this->upload_request->aircondition ) : 'no'),
            'alarm'                 => ( !empty( $this->upload_request->alarm ) ? strtolower( $this->upload_request->alarm ) : 'no'),
            'cableReady'            => 'no',
            'corner'                => 'no',
            'balcony'               => ( !empty( $this->upload_request->balcony ) ? strtolower( $this->upload_request->balcony ) : 'no'),
            'elevator'              => ( !empty( $this->upload_request->elevator ) ? strtolower( $this->upload_request->elevator ) : 'no'),
            'facade'                => 'no',
            'fireplace'             => ( !empty( $this->upload_request->fireplace ) ? strtolower( $this->upload_request->fireplace ) : 'no'),
            'floorNumber'           => $this->mapper->map_floor(),
            'freightElevator'       => 'no',
            'furnished'             => ( !empty( $this->upload_request->furnished ) ? strtolower( $this->upload_request->furnished ) : 'no'),
            'furredCeiling'         => 'no',
            'garage'                => ( !empty( $this->upload_request->parking ) ? strtolower( $this->upload_request->parking ) : 'no'),
            'heatingController'     => $this->mapper->map_heating(),
            'heatingMedium'         => $this->mapper->map_heating_medium(),
            'penthouse'             => ( $this->upload_request->property_category === 'penthouse' ? 'yes' : 'no' ),
            'petsAllowed'           => ( !empty( $this->upload_request->pet_friendly ) ? strtolower( $this->upload_request->pet_friendly ) : 'no'),
            'satelliteReceiver'     => ( !empty( $this->upload_request->satellite ) ? strtolower( $this->upload_request->satellite ) : 'no'),
            'secureDoor'            => ( !empty( $this->upload_request->secured_door ) ? strtolower( $this->upload_request->secured_door ) : 'no'),
            'solarWaterHeating'     => ( !empty( $this->upload_request->solar_water_heater ) ? strtolower( $this->upload_request->solar_water_heater ) : 'no'),
            'storageSpace'          => ( !empty( $this->upload_request->storage_room ) ? strtolower( $this->upload_request->storage_room ) : 'no'),
            'heatingUnderFloor'     => ( !empty( $this->upload_request->underfloor_heat ) ? strtolower( $this->upload_request->underfloor_heat ) : 'no'),
            'energyClass'           => $this->mapper->map_energy_class(),
            'noAgentFee'            => 'yes',
            'renovationYear'        => ( $this->upload_request->renovated ? $this->upload_request->renovation_year : '' ),
            'livingRooms'           => $this->upload_request->living_rooms,
            'kitchens'              => $this->upload_request->kitchens,
            'balconyArea'           => $this->upload_request->balcony_size,
            'distanceSea'           => $this->upload_request->sea_distance,
            'commonExpenses'        => $this->upload_request->common_charges,
            'joinery'               => $this->mapper->map_frames(),
            'floorType'             => $this->mapper->map_floor_type(),
            'renovated'             => ( !empty( $this->upload_request->renovated ) ? strtolower( $this->upload_request->renovated ) : 'no'),
            'pestNet'               => ( !empty( $this->upload_request->window_screens ) ? strtolower( $this->upload_request->window_screens ): 'no'),
            'awning'                => ( !empty( $this->upload_request->tent ) ? strtolower( $this->upload_request->tent ): 'no'),
            'doubleGlass'           => ( !empty( $this->upload_request->double_glazed_windows ) ? strtolower( $this->upload_request->double_glazed_windows ): 'no'),
            'accessibleForDisabled' => 'no',
            'nightPower'            => 'no',
            'painted'               => ( !empty( $this->upload_request->painted ) ? strtolower( $this->upload_request->painted ): 'no'),
            'garden'                => ( !empty( $this->upload_request->garden ) ? strtolower( $this->upload_request->garden ): 'no'),
            'bright'                => ( !empty( $this->upload_request->bright ) ? strtolower( $this->upload_request->bright ): 'no'),
            'airy'                  => ( !empty( $this->upload_request->airy ) ? strtolower( $this->upload_request->airy ): 'no'),
        );

        $this->data = array(
            'location'                  => $location_array,
            'propertyDetails'           => $propertyDetails,
            'listingDetails'            => $listingDetails,
            'detailedCharacteristics'   => $detailedCharacteristics,
        );

//        print("<pre>".print_r( $this->data,true)."</pre>");

    }



    /**
     * This function is responsible for creating the array of images
     * that will be added to the listing on Spitogatos
     *
     * It loops through the spitogatos images property of the upload request object
     * And replaces the attachment ids with the url of the images
     *
     * @since    1.0.0
     * @access   private
     */
    private function create_images(){

        if( is_array( $this->upload_request->spitogatos_images ) && !empty( $this->upload_request->spitogatos_images ) ){

            $this->images = array_map(
                function( $attachment_id ){
                    return wp_get_attachment_image_url( $attachment_id, 'full');
                },
                $this->upload_request->spitogatos_images
            );

        }

    }

}
