<?php

/**
 * Created by PhpStorm.
 * User: John
 * Date: 23/7/2019
 * Time: 9:18 μμ
 */
class Homi_Addons_Questions
{

    const POST_TYPE_NAME = 'question';


    public function register_post_type()
    {

        $labels = array(
            'name'              => __('Questions', Homi_Addons::PLUGIN_NAME),
            'singular_name'     => __('Question', Homi_Addons::PLUGIN_NAME),
            'menu_name'         => _x('Questions', 'admin menu', Homi_Addons::PLUGIN_NAME),
            'name_admin_bar'    => _x('Questions', 'add new on admin bar', Homi_Addons::PLUGIN_NAME),
            'add_new'           => _x('Add New', 'book', Homi_Addons::PLUGIN_NAME),
            'add_new_item'      => __('Add New Question', Homi_Addons::PLUGIN_NAME),
            'new_item'          => __('New Question', Homi_Addons::PLUGIN_NAME),
            'edit_item'         => __('Edit Question', Homi_Addons::PLUGIN_NAME),
            'view_item'         => __('View Question', Homi_Addons::PLUGIN_NAME),
            'all_items'         => __('All Questions', Homi_Addons::PLUGIN_NAME),
            'search_items'      => __('Search Questions', Homi_Addons::PLUGIN_NAME),
            'parent_item_colon' => __('Parent Questions:', Homi_Addons::PLUGIN_NAME),
            'not_found'         => __('No Questions found.', Homi_Addons::PLUGIN_NAME),
            'not_found_in_trash'=> __('No Questions found in Trash.', Homi_Addons::PLUGIN_NAME)
        );

        $args = array(
            'label'                 => __('Questions', Homi_Addons::PLUGIN_NAME),
            'labels'                => $labels,
            'description'           => '',
            'menu_icon'             => 'dashicons-editor-help',
            'public'                => false,
            'publicly_queryable'    => false,
            'show_ui'               => true,
            'delete_with_user'      => false,
            'show_in_rest'          => true,
            'rest_base'             => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive'           => true,
            'show_in_menu'          => true,
            'show_in_nav_menus'     => true,
            'exclude_from_search'   => false,
            'capability_type'       => 'post',
            'map_meta_cap'          => true,
            'hierarchical'          => false,
            'rewrite'               => array('slug' => 'questions', 'with_front' => false),
            'query_var'             => true,
            'supports'              => array('title', 'editor'),
        );

        register_post_type(self::POST_TYPE_NAME, $args);

    }


    /**
     * @return WP_Query
     */
    public function getQuestions(){

        return new WP_Query(array(
            'posts_per_page'    => -1,
            'post_type'         => self::POST_TYPE_NAME,
            'order'             => 'ASC',
        ));

    }

}
