<?php


class RentInterest{

    public $ID;
    public $meta_fields;
    public $user;
    public $areas_of_interest;
    public $area_1;
    public $area_2;
    public $area_3;
    public $min_size;
    public $min_bedrooms;
    public $max_price;
    public $type;
    public $url;
    public $user_url;
    public $date;



    public function __construct( $interest_request_id ){

        $this->ID               = $interest_request_id;
        $this->meta_fields      = Homi_Addons_Interest_Request::META_FIELDS_SLUG;
        $this->user             = get_user_by('ID', get_post_field( 'post_author', $this->ID ) );
        $this->min_size         = get_post_meta( $this->ID,  $this->meta_fields['min_size'], true );
        $this->min_bedrooms     = get_post_meta( $this->ID,  $this->meta_fields['min_bedrooms'], true );
        $this->max_price        = get_post_meta( $this->ID,  $this->meta_fields['max_price'], true );
        $this->type             = get_post_meta( $this->ID,  $this->meta_fields['type'], true );
        $this->url              = get_edit_post_link( $this->ID );
        $this->user_url         = get_edit_user_link( $this->user->ID );
        $this->date             = get_the_date('d/m/Y', $this->ID );
        $this->area_1           = get_post_meta( $this->ID,  $this->meta_fields['area_1'], true );
        $this->area_2           = get_post_meta( $this->ID,  $this->meta_fields['area_2'], true );
        $this->area_3           = get_post_meta( $this->ID,  $this->meta_fields['area_3'], true );

        $this->set_areas_of_interest();

    }


    private function set_areas_of_interest(){

        $areas = array();

        for ($x = 1; $x <= 3; $x++) {

            $area = get_post_meta( $this->ID,  $this->meta_fields['area_'.$x], true );


            if( !empty( $area ) ){

                $areas[] = str_replace( ', Greece', '', $area );

            }

        }

        $this->areas_of_interest = ( count( $areas ) > 1 ? implode(', ', $areas ) : $areas[0] );

    }

}
