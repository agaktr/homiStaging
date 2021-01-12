<?php


class ACViewingsDealFieldsMapper {

    private $request_id;
    private $property;
    private $user;
    public  $isViewingRequest;


    /**
     * Initialize the class and its properties
     *
     * @param   $request_id int
     * @since    1.0.0
     * @access   public
     */
    public function __construct( $request_id ){

        $this->request_id = $request_id;
        $this->setProperties();

    }


    private function setProperties(){

        $this->isViewingRequest         = get_post_type( $this->request_id ) === Homi_Addons_Tour_Request::POST_TYPE_NAME;
        $this->property                 = false;
        $this->user                     = false;

        if( $this->isViewingRequest ){

            $property_id        = get_post_meta( $this->request_id, Homi_Addons_Tour_Request::META_FIELDS_SLUG['property'], true );
            $property           = get_post( intval( $property_id ) );
            $user_id            = get_post_meta( $this->request_id, Homi_Addons_Tour_Request::META_FIELDS_SLUG['property_seller'], true );
            $user               = get_user_by( 'ID', $user_id );

            $this->property     = ( $property instanceof WP_Post ? $property : false );
            $this->user         = ( $user instanceof WP_User ? $user : false );

        }

    }


    /**
     * property/post_title
     * property/get_the_permalink
     * user/user_email
     * @param $field_name
     * @return int|mixed
     */
    public function map_field( $field_name ){

        $parts      = explode( '/', $field_name );
        $obj        = $parts[0];
        $field      = $parts[1];

        try {

            if ( $obj === 'property' ) {

                //Check if the field is a WP_User property
                if ( property_exists( $this->property, $field ) ) {

                    return $this->property->$field;

                }
                else if ( function_exists( $field ) ) {

                    return $field( $this->property->ID );

                }
                else {

                    return get_post_meta( $this->property->ID, $field, true );

                }

            }
            else if ( $obj === 'user' ) {

                if ($this->user instanceof WP_User) {

                    //Check if the field is a WP_User property
                    if ( property_exists( $this->user, $field ) || isset( $this->user->$field ) ) {

                        return $this->user->$field;

                    }
                    else {

                        //Check if the field is a user meta
                        return get_user_meta( $this->user->ID, $field, true );

                    }

                }

            }

        }
        catch( Exception $e ){}

        return false;

    }

}
