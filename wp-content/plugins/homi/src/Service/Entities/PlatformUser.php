<?php


namespace Homi\Service\Entities;

use Homi\Service\User\UserFields;
use WP_Query;
use WP_User;

class PlatformUser extends WP_User  {

    public $selected_property_object_id;
    public $selectedPropertyObject;
    public $propertyObjects;


    /**
     * Construct the class
     *
     * @param int $id
     * @param string $name
     * @param string $site_id
     */
    public function __construct( $id = 0, $name = '', $site_id = '' ) {
        parent::__construct( $id, $name, $site_id );

        $this->setProperties();
        $this->setPropertiesObjects();
        $this->setUserPropertyObjects();

    }

    public function setProperties(){

        $metaSlugs = UserFields::META_FIELDS_SLUG;

        foreach ( $metaSlugs as $property => $metaKey ){

            if( property_exists( $this, $property ) ){

                $value = rwmb_meta( $metaKey, array( 'object_type' => 'user' ), $this->ID );

                if ( @unserialize( $value ) !== false ){

                    $this->$property = unserialize( $value );

                }
                else {

                    $this->$property = $value;

                }

            }

        }

    }

    public function setPropertiesObjects(){

        $this->selectedPropertyObject  = ( !empty( $this->selected_property_object_id ) ? new PropertyObject( $this->selected_property_object_id )  : false );

    }


    public function setUserPropertyObjects(){

        //TODO: WP Query to fetch property objects of user

    }

}
