<?php

use Zend\XmlRpc\Client;
use Zend\XmlRpc\Client\Exception\FaultException;

class SpitogatosAPI {

    const SERVER_URL    = 'http://webservices.spitogatos.gr/listingSync/v1_0';
    const APP_KEY       = 'zvv5k7HmQmObBkvbitLF7YlE2';
    const BROKER_ID     = 14245;
    const USERNAME      = 'homi';
    const PASSWORD      = 'spitiXWRISmesiti';

    const ENDPOINT_NEW_LISTING          = 'sync.newListing';
    const ENDPOINT_NEW_IMAGE            = 'sync.addImage';
    const ENDPOINT_DELETE_LISTING       = 'sync.deleteListing';
    const ENDPOINT_SEARCH_LISTINGS      = 'sync.searchListings';
    const ENDPOINT_GET_LISTING          = 'sync.getListing';
    const ENDPOINT_RENEW_LISTING        = 'sync.renewListing';
    const ENDPOINT_EDIT_LISTING         = 'sync.editListing';
    const ENDPOINT_GET_IMAGE_LIST       = 'sync.getImageList';
    const ENDPOINT_DELETE_IMAGE         = 'sync.deleteImage';

    public $client;


    /**
     * Initialize the class by setting up the
     * XmlRpc Client of Zend Framework
     *
     * @since    1.0.0
     * @access   public
     */
    public function __construct(){

        $this->client  = new Client(self::SERVER_URL );

    }


    /**
     * Responsible for making the new listing request
     * to the Spitogatos API
     *
     * @param array $data
     * @return Exception|mixed|FaultException
     * @since    1.0.0
     * @access   public
     */
    public function new_listing( $data ){

        try {

            return $this->client->call( self::ENDPOINT_NEW_LISTING, array(
                self::APP_KEY,
                self::BROKER_ID,
                self::USERNAME,
                self::PASSWORD,
                $data,
                true
            ) );

        }
        catch ( FaultException $e ){

            return $e->getMessage();

        }


    }



    /**
     * This function is responsible for adding the images of the listing through the API
     *
     * Doc of sync.addImage:
     *
     * Can add an image to an existing property listing, or can add an image and a
     * description for each broker’s available languages, or only the struct of descriptions for the specific
     * image. Each property listing is currently allowed to have 25 images, each occupying a so called
     * “image slot”. Those slots are sequentially numbered as 1,2,3,4,5,6,7,8,9, 10, …, 25. The image
     * slot number in combination with the listing ID uniquely identifies a specific image. Each method
     * call can also optionally hold a struct with descriptions in all broker’s available languages. On
     * success, the function will return the number of the image slot used for storing the image. On error,
     * it will return a fault with an error message.
     *
     * @param   array $images
     * @param   int $listing_id
     * @since    1.0.0
     * @access   public
     */
    public function add_new_images( $images, $listing_id ){

        if( !empty( $listing_id ) && !empty( $images ) && is_array( $images ) ) {

            foreach ( $images as $index => $image ) {

                $slot = $index + 1;

                try {

                    $response = $this->client->call(self::ENDPOINT_NEW_IMAGE, array(
                        self::APP_KEY,
                        self::USERNAME,
                        self::PASSWORD,
                        intval( $listing_id ),
                        $slot,
                        $image
                    )
                );

//                var_dump( $response );

            }
            catch ( FaultException $e ) {

//                   var_dump( $e );

                }

            }

        }


    }



    /**
     * This function is responsible for deleting a listing through the API
     *
     * Doc of sync.deleteListing:
     *
     * Deletes a specific property listing referenced by its unique identifier
     * (usually a six or seven-digit number at this time). On success, it returns a boolean true
     * value. On error, it will return a fault with an error message.
     *
     * @param   int $listing_id
     * @since    1.0.0
     * @access   public
     */
    public function delete_listing( $listing_id ){

        if( !empty( $listing_id ) ) {

            try {

                $this->client->call(self::ENDPOINT_NEW_IMAGE, array(
                        self::APP_KEY,
                        self::USERNAME,
                        self::PASSWORD,
                        intval( $listing_id ),
                    )
                );

            }
            catch ( FaultException $e ) {

            }

        }

    }



    /**
     * This function is responsible for renewing a listing through the API
     *
     * Doc of sync.renewListing:
     *
     * sync.renewListing can be used in order to renew a specific listing. It is much faster than the
     * editListing function and it should be used when no actual change in the details of the listing occurred.
     * It works similarly with the renew function supported through Guru: the listing is renewed only
     * after 8 hours from the previous renewal (i.e. there is no point in calling the function more than 3 times per day for the same listing).
     *
     * On success returns true, in any other case a descriptive error message is returned.
     *
     * @param   int $listing_id
     * @since    1.0.0
     * @access   public
     */
    public function renewListing( $listing_id ){

        if( !empty( $listing_id ) ) {

            try {

                $this->client->call(self::ENDPOINT_RENEW_LISTING, array(
                        self::APP_KEY,
                        self::USERNAME,
                        self::PASSWORD,
                        intval( $listing_id ),
                    )
                );

            }
            catch ( FaultException $e ) {

            }

        }

    }


    /**
     * This function is responsible for editing the data of a listing through the API
     *
     * Doc of sync.editListing:
     *
     * sync.editListing updates an existing property listing of a designated broker. Optionally,
     * will publish the new Listing after making the update. On success, it returns a boolean
     * true value or published info about the edited listing. On error, it will return a fault with a
     * descriptive error message. Note that the listing category can not change for existing listings.
     *
     * In those cases we recommend deleting and re-uploading the listing.
     *
     * @param int $listing_id
     * @param array $data
     * @return array|string
     * @since    1.0.0
     * @access   public
     */
    public function editListing( $listing_id, $data ){

        if( !empty( $listing_id ) ) {

            try {

                return $this->client->call(self::ENDPOINT_EDIT_LISTING, array(
                        self::APP_KEY,
                        self::USERNAME,
                        self::PASSWORD,
                        intval( $listing_id ),
                        $data
                    )
                );

            }
            catch ( FaultException $e ) {

                return $e->getMessage();

            }

        }

        return false;

    }


    public function updateImages( $images, $listingID ){

        //get spitogatos images
        //delete the images
        //add the new images
        $sgImages = $this->getImageList( $listingID );
        if( is_array( $sgImages ) && !empty( $sgImages ) ){

            foreach( $sgImages as $slot => $image ){

                $result = $this->deleteImage( $listingID, $slot );

            }

        }

        $this->add_new_images( $images, $listingID );

    }



    /**
     * This function is responsible for a list of Images from the API
     *
     * Doc of sync.getImageList:
     *
     * sync.getImageList returns information about the images uploaded for a specific property
     * listing. On success, it returns a data structure with one entry per image slot, each
     * containing the unique image id of the image on Spitogatos.gr, a url to this image and an
     * array of descriptions of the image in all available languages. Empty slots will not be
     * returned. The url of an image can change without notice while the image id remains
     * stable until deleted or overwritten. On error, it will return a fault with an error message.
     *
     * @param int $listingID
     * @return array|string
     * @since    1.0.0
     * @access   public
     */
    public function getImageList( $listingID ){

        //get spitogatos images
        //delete the images
        //add the new images
        if( !empty( $listingID ) ) {

            try {

                return $this->client->call(self::ENDPOINT_GET_IMAGE_LIST, array(
                        self::APP_KEY,
                        self::USERNAME,
                        self::PASSWORD,
                        intval( $listingID ),
                    )
                );

            }
            catch ( FaultException $e ) {

//                echo $e->getMessage();

            }

        }

        return false;

    }


    /**
     * This function is responsible for deleting an Image of a Listing from the API
     *
     * Doc of sync.deleteImage:
     *
     * sync.deleteImage deletes an image of an existing property listing. On success, it returns
     * a boolean true value. On error, it will return a fault with an error message
     *
     * @param int $listingID
     * @param int $slot
     * @return array|string
     * @since    1.0.0
     * @access   public
     */
    public function deleteImage( $listingID, $slot ){

        if( !empty( $listingID ) && !empty( $slot ) ) {

            try {

                return $this->client->call(self::ENDPOINT_DELETE_IMAGE, array(
                        self::APP_KEY,
                        self::USERNAME,
                        self::PASSWORD,
                        intval( $listingID ),
                        intval( $slot )
                    )
                );

            }
            catch ( FaultException $e ) {

//                echo $e->getMessage();

            }

        }

        return false;

    }





    /**
     * This function is responsible for deleting a listing through the API
     *
     * Doc of sync.deleteListing:
     *
     * Deletes a specific property listing referenced by its unique identifier
     * (usually a six or seven-digit number at this time). On success, it returns a boolean true
     * value. On error, it will return a fault with an error message.
     *
     * @param   array $search_params
     * @since    1.0.0
     * @access   public
     */
    public function search_listings( $search_params ){

        try {

            return $this->client->call(self::ENDPOINT_SEARCH_LISTINGS, array(
                    self::APP_KEY,
                    self::USERNAME,
                    self::PASSWORD,
                    $search_params,
                )
            );

        }
        catch ( FaultException $e ) {

        }

    }


    public function get_listing_info( $listing_id ){

        try {

            return $this->client->call(self::ENDPOINT_GET_LISTING, array(
                    self::APP_KEY,
                    self::USERNAME,
                    self::PASSWORD,
                    $listing_id,
                )
            );

        }
        catch ( FaultException $e ) {

        }

    }

}
