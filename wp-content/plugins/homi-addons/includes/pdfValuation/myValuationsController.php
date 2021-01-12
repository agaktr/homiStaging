<?php


class myValuationsController {

    const MY_VALUATIONS_PAGE = 'my-valuations';


    /**
     * @var $user WP_User|bool
     */
    public $isLoggedIn;
    public $user;
    public $pdfValuation;
    public $nonAbandonedRequest;

    public function __construct(){

        $this->isLoggedIn           = is_user_logged_in();
        $this->user                 = ( $this->isLoggedIn ? wp_get_current_user() : false );
        $this->pdfValuation         = $this->getPDFValuation();
        $this->nonAbandonedRequest  = $this->getNonAbandonedRequest();
    }


    /**
     * Checks if the user visiting the 'my-valuations' page can access it.
     * We check if the user is logged in otherwise we check if the user has not
     * submitted any free valuation request and we redirect the user accordingly
     */
    public function accessController(){

        if( ! $this->isLoggedIn ){

            wp_redirect( home_url('login'). "/?redirect_to=".home_url( self::MY_VALUATIONS_PAGE ) );

        }
        else if(  !current_user_can('administrator') && ! $this->pdfValuation && !$this->nonAbandonedRequest ){

            wp_redirect( home_url('property-valuation') );

        }

    }



    /**
     * Fetches the free valuation request of the user
     * that has a PDF report for it
     */
    private function getPDFValuation(){

        if( $this->isLoggedIn ) {

            $args = array(
                'author'            =>  $this->user->ID,
                'post_type'         => Homi_Addons_Valuation_Request::POST_TYPE_NAME,
                'posts_per_page'    => 1,
                'meta_query'        => array(
                    array(
                        'key'       => Homi_Addons_Valuation_Request::META_FIELDS_SLUG['pdf'],
                        'value'     => '',
                        'compare'   => '!='
                    ),
                )
            );

            $query = new WP_Query($args);

            if ( $query->have_posts() ) {

                while ($query->have_posts()) {

                    $query->the_post();

                    return get_the_ID();

                }

                wp_reset_query();

            }

        }

        return false;

    }


    /**
     * Fetches a non abandoned free valuation request of the user
     */
    private function getNonAbandonedRequest(){

        if( $this->isLoggedIn ) {

            $args = array(
                'author'            => $this->user->ID,
                'post_type'         => Homi_Addons_Valuation_Request::POST_TYPE_NAME,
                'posts_per_page'    => 1,
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {

                while ( $query->have_posts() ) {

                    $query->the_post();

                    if ( strpos( get_the_title(), 'ABANDONED') !== false ) {

                        return get_the_ID();

                    }

                }

                wp_reset_query();

            }

        }

        return false;

    }

}
