<?php


class ConverterXE {

    const ADD_ENDPOINT      = 'http://import.xe.gr/request/add';
    const DELETE_ENDPOINT   = 'http://import.xe.gr/request/remove';

    const XE_USERNAME       = 'alexandros@homi.com.gr';
    const XE_PASSWORD       = 'XYQbyEMt';
    const XE_AuthToken      = 'DD4A71200C5C11EB80D481D4010155EE';
    const XE_OWNER_ID       = '10019196';
    const XE_MAJOR_PHONE    = '2152151962';
    const XE_schemaVersion  = '1.1';


    private $package_id;
    private $xe_folder;
    private $xe_listing_folder;
    private $xml_filename;
    private $xml_file_path;
    private $zip_filename;
    private $zip_filepath;
    private $image_paths;
    public $upload_request;
    private $mapper;
    private $refID;


    public function __construct( $upload_request_id ){

        $uploads                    = wp_upload_dir();
        $this->xe_folder            = $uploads['basedir'] . '/xe-data/';
        $this->xe_listing_folder    = $this->xe_folder . "$upload_request_id/";

        $this->xml_filename         = "$upload_request_id.xml";
        $this->xml_file_path        = $this->xe_listing_folder . $this->xml_filename;

        $this->zip_filename         = "$upload_request_id.zip";
        $this->zip_filepath         = $this->xe_listing_folder . $this->zip_filename;

        $this->upload_request       = new UploadRequest( $upload_request_id );
        $this->mapper               = new XEMapper( $this->upload_request );

        $this->setup_xe_files();

        $time                       = time();
        $this->package_id           = "HOMI_$upload_request_id"."_$time";
        $this->refID                = 'homi.one/' . $this->upload_request->homi_property;

    }



    /**
     * Checks if the current upload request has an xml file
     * If the file has not been created the code generates an empty new one
     *
     */
    private function setup_xe_files(){

        if( !file_exists( $this->xe_listing_folder ) ){

            mkdir( $this->xe_listing_folder  );
        }

        if( !file_exists( $this->xml_file_path ) ){

            $file = fopen( $this->xml_file_path, "w" );
            fclose( $file );

        }

    }



    /**
     * This function is responsible for converting a listing to xe
     *
     * As first step we generate the xml that has all the listing data
     * Then we create an array with the images paths of the listing
     * After the core files that will be uploaded are setup the final zip file is generated
     * Last but not least we send the actual request
     *
     */
    public function convert_to_xe(){

        if( $this->upload_request->homi_property ){

            try {

                $this->generate_images_paths();
                $this->build_xml();
                $this->generate_zip();
                $result = $this->send_request();

            }
            catch( Exception $e ){

                $result = 'An exception occurred. Speak with giannis';

            }

        }
        else {

            $result = 'You need to convert to HOUZEZ first';

        }

        update_post_meta( $this->upload_request->ID, Homi_Addons_Upload_Request::META_FIELDS_SLUG['xe_id'], $result );

    }


    public function send_request(){

        try {

            $postRequest = array(
                'file'      => file_get_contents( $this->zip_filepath ),
                'username'  => self::XE_USERNAME,
                'password'  => self::XE_PASSWORD,
            );

            $cURLConnection = curl_init(self::ADD_ENDPOINT );
            curl_setopt( $cURLConnection, CURLOPT_POSTFIELDS, $postRequest );
            curl_setopt( $cURLConnection, CURLOPT_RETURNTRANSFER, true );

            $apiResponse = curl_exec( $cURLConnection );
            curl_close( $cURLConnection );

            return ( $apiResponse === 'REQUEST UPLOADED SUCCESSFULLY' ? $this->package_id : $apiResponse );


        }
        catch( Exception $e ){

            return $e->getMessage();

        }


    }


    public function generate_zip(){

        $zip = new ZipArchive();
        $zip->open($this->zip_filepath, ZipArchive::CREATE);
        $zip->addFile($this->xml_file_path, $this->xml_filename );

        if( is_array( $this->image_paths ) && !empty( $this->image_paths ) ){

            foreach( $this->image_paths as $attachment_id => $image_path ){

                try {

                    $path_parts = pathinfo( $image_path );
                    $zip->addFile( $image_path, $attachment_id . '.' . $path_parts['extension']  );

                }
                catch( Exception $e ){

                }

            }

        }

        $zip->close();


    }



    public function delete_xe_listing_files(){

        array_map('unlink', glob("$this->xe_listing_folder/*.*"));
        rmdir( $this->xe_listing_folder );

    }


    /**
     * It creates and array with the images server paths that will be
     * stored in the image_paths property
     *
     */
    public function generate_images_paths(){

        $this->image_paths = array();

        if( is_array( $this->upload_request->xe_images ) && !empty( $this->upload_request->xe_images ) ){

            foreach( $this->upload_request->xe_images as $attachment_id ){

                $image_path = get_attached_file( $attachment_id );

                if( file_exists( $image_path ) ){

                    $this->image_paths[$attachment_id] = $image_path;

                }

            }

        }

    }



    /**
     * This function is responsible for construction the data
     * of the Upload request in a way that will be converted to an XML
     * with the correct XE xml format.
     *
     */
    public function listing_data(){

        $dynamic_metadata = array(
            0 => array(
                'Name'      => 'Geo.areaId',
                'Value'     => $this->upload_request->xe_location,
            ),
            2 => array(
                'Name'      => 'Geo.postcode',
                'Value'     => $this->upload_request->postcode,
            ),
            3 => array(
                'Name'      => 'Item.type',
                'Value'     =>  $this->mapper->map_type(),
            ),
            4 => array(
                'Name'      => 'Item.subtype',
                'Value'     =>  $this->mapper->map_subtype(),
            ),
            5 => array(
                'Name'      => 'Item.area',
                'Value'     => $this->upload_request->size,
            ),
            6 => array(
                'Name'      => 'Item.level',
                'Value'     => $this->mapper->map_floor(),
            ),
            7 => array(
                'Name'      => 'Item.condition',
                'Value'     => $this->mapper->map_condition(),
            ),
            9 => array(
                'Name'      => 'Item.constructionYear',
                'Value'     => $this->upload_request->construction_year,
            ),
            11 => array(
                'Name'      => 'Item.refurbishmentYear',
                'Value'     => $this->upload_request->renovation_year,
            ),
            12 => array(
                'Name'      => 'Item.bedrooms',
                'Value'     => $this->upload_request->bedrooms,
            ),
            13 => array(
                'Name'      => 'Item.hasStorage',
                'Value'     => ( $this->upload_request->storage_room === 'yes' ? 1 : 0),
            ),
            14 => array(
                'Name'      => 'Item.hasAutonomousHeating',
                'Value'     => ( $this->upload_request->heat === 'autonomous' ? 1 : 0),
            ),
            15 => array(
                'Name'      => 'Item.hasSecureDoor',
                'Value'     =>  ( $this->upload_request->secured_door === 'yes' ? 1 : 0),
            ),
            16 => array(
                'Name'      => 'Item.hasParking',
                'Value'     => ( $this->upload_request->parking === 'yes' ? 1 : 0),
            ),
            18 => array(
                'Name'      => 'Item.bathrooms',
                'Value'     => $this->upload_request->bathrooms,
            ),
            19 => array(
                'Name'      => 'Item.hasFireplace',
                'Value'     => ( $this->upload_request->fireplace === 'yes' ? 1 : 0),
            ),
            20 => array(
                'Name'      => 'Item.hasSolarBoiler',
                'Value'     => ( $this->upload_request->solar_water_heater === 'yes' ? 1 : 0),
            ),
            21 => array(
                'Name'      => 'Item.hasTents',
                'Value'     => ( $this->upload_request->tent === 'yes' ? 1 : 0),
            ),
            22 => array(
                'Name'      => 'Item.parkingType',
                'Value'     => $this->mapper->map_parking_type(),
            ),
            23 => array(
                'Name'      => 'Item.hasCentralHeating',
                'Value'     => ( $this->upload_request->heat === 'central' ? 1 : 0),
            ),
            24 => array(
                'Name'      => 'Item.hasAircondition',
                'Value'     => ( $this->upload_request->aircondition === 'yes' ? 1 : 0),
            ),
            25 => array(
                'Name'      => 'Item.withoutElevator',
                'Value'     => ( $this->upload_request->elevator === 'no' ? 1 : 0),
            ),
            26 => array(
                'Name'      => 'Item.hasNaturalGas',
                'Value'     => ( $this->upload_request->heat_source === 'Natural gas' ? 1 : 0),
            ),
            27 => array(
                'Name'      => 'Item.isFurnished',
                'Value'     => ( $this->upload_request->renovated === 'yes' ? 1 : 0),
            ),
//            28 => array(
//                'Name'      => 'Item.availabilityType',
//                'Value'     => $this->mapper->map_availability(),
//            ),
//            29 => array(
//                'Name'      => 'Item.availableFrom',
//                'Value'     => date("d-m-Y", strtotime( $this->upload_request->date_available_from ) ),
//            ),
            31 => array(
                'Name'      => 'Item.wc',
                'Value'     =>  ( !empty( $this->upload_request->wc ) ? $this->upload_request->wc : 0),
            ),
        );

        if( isset( $this->upload_request->energy_class ) &&  !empty( $this->upload_request->energy_class ) && $this->upload_request->energy_class !== 'Not available'){

            $dynamic_metadata[] = array(
                'Name'      => 'Item.energy_class',
                'Value'     =>  $this->mapper->map_energy_class(),
            );

        }

        if( !empty( $this->mapper->map_conditionDetails() ) ){

            $dynamic_metadata[] =  array(
                'Name'      => 'Item.conditionDetails',
                'Value'     => $this->mapper->map_conditionDetails(),
            );

        }

        $refID      = $this->refID;
        $list_type  = $this->mapper->map_list_type();

        $item_key = "Item|type=$list_type|refId=$refID";

        $final_data = array (
            'Package.xeAuthToken'       => self::XE_AuthToken,
            'Package.schemaVersion'     => self::XE_schemaVersion,
            'Package.id'                => $this->package_id,
            'Package.timestamp'         => date('c'),
            'Package.trademark'         => 'HOMI Real Estate',
            'Package.policy'            => 'INCREMENTAL',
            $item_key                   => array (
                'Item.ownerId'              => self::XE_OWNER_ID,
                'Item.majorPhone'           => self::XE_MAJOR_PHONE,
                'Item.internetText'         => $this->upload_request->xe_description,
                'Item.addOnText'            => $this->upload_request->xe_description,
                'Item.bodyText'             => $this->upload_request->xe_description,
                'Transaction.price'         => $this->upload_request->price,
                'Transaction.type'          => $this->mapper->map_transaction_type()
            ),
        );

        foreach( $dynamic_metadata as $data ){

            if( $data['Value'] !== 'N/A' ){
                $final_data[ $item_key ][] = $data;
            }

        }

        if( is_array( $this->image_paths ) && !empty( $this->image_paths ) ){

            $index = 0;

            foreach( $this->image_paths as $attachment_id => $image_path ){

                $index++;

                try {

                    $path_parts = pathinfo( $image_path );

                    $asset = array (
                        'Asset.type'            => 'IMAGE',
                        'Asset.id'              => $attachment_id . '.' . $path_parts['extension'],
                        'Asset.fileType'        => $path_parts['extension'],
                        'Asset.isPrimary'       => ( $index === 1 ? 1 : 0),
                        'Asset.order'           => $index,
                        'Asset.uri'             => $attachment_id . '.' . $path_parts['extension'],
                    );

                    $final_data[ $item_key ]['Asset-'.$index] = $asset;


                }
                catch( Exception $e ){

                }

            }

        }
//
//        print("<pre>".print_r($final_data,true)."</pre>");

        return $final_data;

    }




    /**
     * This function is responsible for constructing the xml file
     * that will be uploaded on XE based on the data that is defined
     * in the class property.
     *
     * The constructed xml file is saved at the 'xml_file_path' location
     *
     */
    public function build_xml(){

        $data   = $this->listing_data();
        $xml    = new SimpleXMLElement( '<?xml version="1.0" encoding="UTF-8"?><AddItemsRequest xsi:noNamespaceSchemaLocation="xe_BUrequest.xsd" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns="http://www.xe.gr" /> ');

        $this->array_to_xml( $xml, $data );


        $dom = dom_import_simplexml($xml)->ownerDocument;
        $dom->formatOutput = true;


        $dom->loadXML($xml->asXML());
        $saved_bytes = $dom->save( $this->xml_file_path );

//        $result = $saved_bytes > 0;


    }



    /**
     * Populates an XML $object (SimpleXMLElement)
     * with the data of an array passed in the $data variable
     *
     * @param SimpleXMLElement $object
     * @param array $data
     */
    private function array_to_xml(SimpleXMLElement $object, array $data ){

        $nslist = $object->getDocNamespaces();

        foreach ($data as $key => $value) {
            $nspace = null;
            $keyparts = explode(":",$key,2);
            if ( count($keyparts)==2)
                $nspace = $nslist[$keyparts[0]];

            if (is_array($value)) {
                $key = is_numeric($key) ? "Field" : $key;


                if (strpos( $key, 'Asset') !== false) {

                    $key = 'Asset';

                }

                $key_parts = array();
                if ( strpos( $key, '|' ) !== false) {

                    $key_parts = explode('|', $key );
                    $key = array_shift($key_parts );
                }

                $new_object = $object->addChild($key,null,$nspace);

                if( !empty( $key_parts ) ){

                    foreach( $key_parts as $attribute ){

                        $attribute_parts = explode('=', $attribute );
                        $new_object->addAttribute( $attribute_parts[0], $attribute_parts[1] );

                    }

                }

                $this->array_to_xml($new_object, $value);
            }
            else {

                $key = is_numeric($key) ? "Field" : $key;

                $key_parts = array();
                if ( strpos( $key, '|' ) !== false) {

                    $key_parts      = explode('|', $key );
                    $key            = array_shift($key_parts );
                }

                $object->addChild( $key, $value,$nspace );

                if( !empty( $key_parts ) ){

                    foreach( $key_parts as $attribute ){

                        $attribute_parts = explode('=', $attribute );
                        $object->addAttribute( $attribute_parts[0], $attribute_parts[1] );

                    }

                }

            }
        }
    }


}
