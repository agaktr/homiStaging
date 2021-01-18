<?php


namespace Homi\Service\User;


use Homi\Service\PostType\PropertyObjectPost;

class UserFields {

    /**
     * Post Type Meta Fields slugs
     * @var array
     */
    const META_FIELDS_SLUG = [
        'selected_property_object_id'               => 'user_selected_property_object',
    ];

    public function registerUserFields( $meta_boxes ) {


        $meta_boxes[] = array(
            'title' => 'Property object',
            'type'  => 'user',
            'fields' => array(
                array(
                    'name'              => 'Selected Property Object',
                    'id'                => self::META_FIELDS_SLUG['selected_property_object'],
                    'desc'              => 'The latest property object selected by the user.',
                    'type'              => 'post',
                    'post_type'         => PropertyObjectPost::POST_TYPE_NAME,
                    'field_type'        => 'select',
                    'placeholder'       => 'Select a property object',
                ),
            ),
        );

        return $meta_boxes;

    }

}
