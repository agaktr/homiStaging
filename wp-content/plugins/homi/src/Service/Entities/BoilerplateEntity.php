<?php

namespace Homi\Service\Entities;

use Homi\Service\PostType\BoilerplatePost;
use Homi\Traits\Core\PostEntity;

class BoilerplateEntity {

    use PostEntity;

    public $episodes;

    public function __construct( $id ) {

        $this->ID         = $id;
        $this->post       = get_post( $this->ID );
        $this->metaSlugs  = BoilerplatePost::META_FIELDS_SLUG;
        $this->postMeta   = get_post_meta( $this->ID );
        $this->setProperties();

    }

}
