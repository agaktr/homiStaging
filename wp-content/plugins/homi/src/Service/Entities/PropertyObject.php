<?php


namespace Homi\Service\Entities;

use Homi\Service\PostType\PropertyObjectPost;
use Homi\Traits\Core\PostEntity;

class PropertyObject {

    use PostEntity;

    public function __construct( $id ) {

        $this->ID         = $id;
        $this->post       = get_post( $this->ID );
        $this->metaSlugs  = PropertyObjectPost::META_FIELDS_SLUG;
        $this->postMeta   = get_post_meta( $this->ID );
        $this->setProperties();

    }

}
