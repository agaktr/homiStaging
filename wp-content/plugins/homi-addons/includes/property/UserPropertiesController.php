<?php


class UserPropertiesController{

    public $isLoggedIn;
    public $user;
    public $userProperties;

    public function __construct(){

        $this->isLoggedIn       = is_user_logged_in();
        $this->user             = false;
        $this->userProperties   = false;

        if( $this->isLoggedIn ){

            $this->user = wp_get_current_user();
            $this->userProperties = $this->getUserProperties();
        }

    }

    public function accessController(){

        if(  $this->isLoggedIn ){

            if( $this->userProperties === false && !current_user_can('administrator') ){

                wp_redirect(home_url('property-upload') );
                exit;

            }

        }
        else {

            wp_redirect(home_url('login') . '?redirect_to=' . urlencode(home_url() . $_SERVER['REQUEST_URI']));
            exit;

        }

    }


    public function getUserProperties(){

        $args = array(
            'post_type'         => 'property',
            'posts_per_page'    => -1,
            'posts_status'      => 'publish',
            'author'            => $this->user->ID,
        );

        $query = new WP_Query( $args );

        if( $query->have_posts() ){

            $ids = array();

            while ( $query->have_posts() ) {

                $query->the_post();

                if( get_post_status() !== 'private' ){
                    $ids[] = get_the_ID();
                }

            }

            return ( empty( $ids ) ? false : $ids );

        }

        return false;

    }

}
