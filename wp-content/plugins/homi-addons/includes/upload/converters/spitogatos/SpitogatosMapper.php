<?php


class SpitogatosMapper{


    const LISTING_TYPE = array(
        'sale'  => 'for sale',
        'rent'  => 'for rent',
    );


    //residential, commercial, land, other
    const CATEGORY = array(
        'residence'     => 'residential',
        'professional'  => 'commercial',
        'land'          => 'land',
        'other'         => 'other',
    );


    const PROPERTY_TYPE = array(
       'residence' => array(
           'apartment'              => 'apartment',
           'building'               => 'building',
           'maisonette'             => 'maisonette',
           'detached_house'         => 'detached',
           'studio'                 => 'studio',
           'loft'                   => 'loft',
           'whole_floor_apartment'  => 'apartment',
           'penthouse'              => 'apartment',
           'default'                => 'other residential'
       ),
       'professional' => array(
           'default'           => 'other residential'
       ),
       'land' => array(
           'default'           => 'plot'
       ),
       'other' => array(
           'default'           => 'other'
       ),
    );

    CONST FLOOR = array(
        'Ground floor'          => 'ground floor',
        '1st'                   => '1',
        '2nd'                   => '2',
        '3rd'                   => '3',
        '4th'                   => '4',
        '5th'                   => '5',
        '6th'                   => '6',
        '7th'                   => '7',
        '8th_and_above'         => '8',
        'Raised ground floor'   => 'semi ground floor',
        'basement'              => 'basement',
        'Semi-basement'         => 'semi basement',
    );


    const HEATING_TYPE = array(
        'autonomous'        => 'autonomous',
        'central'           => 'central',
        'without_heating'   => 'none',
    );

    const HEATING_MEDIUM = array(
        'fuel'              => 'petrol',
        'Natural gas'       => 'natural gas',
        'aircondition'      => ' ',
        'other'             => ' ',
    );

    const ENERGY_CLASS = array(
        'a_plus'        => 'ap',
        'a'             => 'a',
        'b_plus'        => 'bp',
        'b'             => 'b',
        'c'             => 'c',
        'd'             => 'd',
        'e'             => 'e',
        'f'             => 'f',
        'g'             => 'g',
        'Not available' => '',
    );

    const FRAMES = array(
        'wooden'        => 'wooden',
        'aluminium'     => 'aluminium',
        'synthetic'     => 'synthetic',
    );


    const FLOOR_TYPE = array(
        'marble'        => 'marble',
        'wood'          => 'wood',
        'stone'         => 'stone',
        'tile'          => 'ceramic tiles',
        'mosaic'        => 'mosaic tiles',
        'wood_marble'   => 'wood and marble',
        'marble_tile'   => 'marble and tile',
        'wood_stone'    => 'wood and stone',
        'stone_marble'  => 'stone and marble',
        'wood_tile'     => 'wood and tile',
        'industrial'    => 'industrial',
    );


    /**
     * @var $upload_request UploadRequest
     */
    private $upload_request;

    public function __construct( $upload_request ){

        $this->upload_request = $upload_request;

    }


    public function map_category(){

        $mapping = self::CATEGORY;
        return ( isset( $mapping[ $this->upload_request->property_category ] ) ?  $mapping[ $this->upload_request->property_category ] : 'other' );

    }

    public function map_property_type(){

        $mapping = self::PROPERTY_TYPE;

        if( isset( $mapping[ $this->upload_request->property_category ][ $this->upload_request->property_subcategory ] ) ){

            return $mapping[ $this->upload_request->property_category ][ $this->upload_request->property_subcategory ];

        }
        else if( isset( $mapping[ $this->upload_request->property_category ]['default'] ) ){

            return $mapping[ $this->upload_request->property_category ]['default'];

        }
        else {

            return 'other';

        }

    }

    public function listing_type(){

        $mapping = self::LISTING_TYPE;
        return ( isset( $mapping[ $this->upload_request->list_type ]  ) ? $mapping[ $this->upload_request->list_type ] : 'for sale' );

    }


    public function map_floor(){

        $mapping = self::FLOOR;
        return ( isset( $mapping[ $this->upload_request->floor ] ) ?  $mapping[ $this->upload_request->floor ] : '1' );

    }


    public function map_heating(){

        $mapping = self::HEATING_TYPE;
        return ( isset( $mapping[ $this->upload_request->heat ] ) ?  $mapping[ $this->upload_request->heat ] : 'none' );

    }

    public function map_heating_medium(){

        $mapping = self::HEATING_MEDIUM;
        return ( isset( $mapping[ $this->upload_request->heat_source ] ) ?  $mapping[ $this->upload_request->heat_source ] : ' ' );

    }

    public function map_energy_class(){

        $mapping = self::ENERGY_CLASS;
        return ( isset( $mapping[ $this->upload_request->energy_class ] ) ?  $mapping[ $this->upload_request->energy_class ] : ' ' );

    }

    public function map_frames(){

        $mapping = self::FRAMES;
        return ( isset( $mapping[ $this->upload_request->frames ] ) ?  $mapping[ $this->upload_request->frames ] : ' ' );

    }

    public function map_floor_type(){

        $mapping = self::FLOOR_TYPE;
        return ( isset( $mapping[ $this->upload_request->floor_type ] ) ?  $mapping[ $this->upload_request->floor_type ] : ' ' );

    }

}
