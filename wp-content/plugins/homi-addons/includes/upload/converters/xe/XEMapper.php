<?php


class XEMapper {

    const LISTING_TYPES = array(
        'residence'     => 're_residence',
        'professional'  => 're_prof',
        'land'          => 're_land',
        'other'         => 'Other',
    );

    const RESIDENCE_TYPES = array(
        'apartment'                 => 'APARTMENT',
        'building'                  => 'BUILDING',
        'detached_house'            => 'HOUSE',
        'studio'                    => 'APARTMENT',
        'loft'                      => 'LOFT',
        'whole_floor_apartment'     => 'APARTMENT',
        'penthouse'                 => 'APARTMENT',
        'maisonette'                => 'SPLIT_LEVEL',
    );

    const RESIDENCE_SUBTYPES = array(
        'studio'            => 'SINGLEROOM',
        'loft'              => 'FLOORFLAT',
        'penthouse'         => 'PENTHOUSE',
    );

    const FLOOR_TYPE = array(
        'Ground floor'          => 'L0',
        '1st'                   => 'L1',
        '2nd'                   => 'L2',
        '3rd'                   => 'L3',
        '4th'                   => 'L4',
        '5th'                   => 'L5',
        '6th'                   => 'L6',
        '7th'                   => 'L7',
        '8th_and_above'         => 'L8',
        'Raised ground floor'   => 'LHH',
        'basement'              => 'S1',
        'Semi-basement'         => 'SH',
    );


    const CONDITION_TYPES = array(
        'not_selected'          => 'USED',
        'other'                 => 'USED',
        'newbuilt'              => 'NEWBUILT',
        'under_construction'    => 'UNDER_CONSTRUCTION',
        'unfinished'            => 'UNFINISHED',
        'good'                  => 'USED',
        'need_repair'           => 'USED',
        'perfect'               => 'USED',
        'refurbished'           => 'USED',
    );

    const CONDITION_DETAILS = array(
        'good'                  => 'GOOD',
        'need_repair'           => 'NEEDS_REPAIR',
        'perfect'               => 'PERFECT',
        'refurbished'           => 'REFURBISHED',
    );

    const PARKING_TYPES = array(
        'pilot'             => 'PILOTIS',
        'uncovered'         => 'OPEN',
        'basement'          => 'YPOGEIO',
        'Closed Parking'    => 'CLOSED',
    );


    const TRANSACTION_FREQUENCY = array(
        'sale'  => 'ONCE',
        'rent'  => 'MONTHLY',
    );


    const TRANSACTION_TYPE = array(
        'sale'  => 'SELL.NORMAL',
        'rent'  => 'LET.NORMAL',
    );

    const ENERGY_CLASS = array(
        'a_plus'        => 'A_PLUS',
        'a'             => 'A',
        'b_plus'        => 'B_PLUS',
        'b'             => 'B',
        'c'             => 'C',
        'd'             => 'D',
        'e'             => 'E',
        'f'             => 'Z',
        'g'             => 'H',
        'Not available' => 'NOT_APPLICABLE',
    );


    /**
     * @var $upload_request UploadRequest
     */
    private $upload_request;

    public function __construct( $upload_request ){

        $this->upload_request = $upload_request;

    }

    public function map_list_type(){

        $mapping = self::LISTING_TYPES;
        return ( isset( $mapping[ $this->upload_request->property_category ] ) ?  $mapping[ $this->upload_request->property_category ] : 'N/A' );

    }

    public function map_transaction_type(){

        $mapping = self::TRANSACTION_TYPE;
        return ( isset( $mapping[ $this->upload_request->list_type ]  ) ? $mapping[ $this->upload_request->list_type ] : 'N/A' );

    }

    public function map_transaction_frequency(){

        $mapping = self::TRANSACTION_FREQUENCY;
        return ( isset( $mapping[ $this->upload_request->list_type ]  ) ? $mapping[ $this->upload_request->list_type ] : 'N/A' );

    }


    public function map_type(){

        $mapping = self::RESIDENCE_TYPES;
        return ( isset( $mapping[ $this->upload_request->property_subcategory ] ) ?  $mapping[ $this->upload_request->property_subcategory ] : 'N/A' );

    }


    public function map_subtype(){

        $mapping = self::RESIDENCE_SUBTYPES;
        return ( isset( $mapping[ $this->upload_request->property_subcategory ]  ) ? $mapping[ $this->upload_request->property_subcategory ] : 'N/A' );

    }

    public function map_floor(){

        $mapping = self::FLOOR_TYPE;
        return ( isset( $mapping[ $this->upload_request->floor ]  ) ? $mapping[ $this->upload_request->floor ] : 'N/A' );

    }

    public function map_condition(){

        $mapping = self::CONDITION_TYPES;
        return ( isset( $mapping[ $this->upload_request->condition ]  ) ? $mapping[ $this->upload_request->condition ] : 'USED' );

    }


    public function map_conditionDetails(){

        $mapping = self::CONDITION_DETAILS;
        return ( isset( $mapping[ $this->upload_request->condition ]  ) ? $mapping[ $this->upload_request->condition ] : null );

    }

    public function map_parking_type(){

        $mapping = self::PARKING_TYPES;
        return ( isset( $mapping[ $this->upload_request->parking_type ]  ) ? $mapping[ $this->upload_request->parking_type ] : 'N/A' );

    }

    public function map_availability(){

        return ( $this->upload_request->date_available_from > date('Y-m-d') ? 'OCCUPATED' : 'AVAILABLE');

    }

    public function map_energy_class(){

        $mapping = self::ENERGY_CLASS;
        return ( isset( $mapping[ $this->upload_request->energy_class ]  ) ? $mapping[ $this->upload_request->energy_class ] : 'N/A' );

    }



}
