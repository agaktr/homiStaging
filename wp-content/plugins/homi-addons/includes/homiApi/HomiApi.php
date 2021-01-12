<?php

/**
 * This class extends the WP_REST_Controller
 * and creates Rest Route Endpoints for the HOMI API
 *
 * The HOMI API uses Basic Authentication by using the credentials of
 * a HOMI user that has the capability defined in the constant below
 *
 * @see https://developer.wordpress.org/rest-api/extending-the-rest-api/adding-custom-endpoints/#examples
 */
class HomiApi extends WP_REST_Controller {


    /**
     * Define the API Version and the User capability needed to access
     * the data from the API
     */
    const VERSION   = 'v1';
    const CAPABILITY = 'manage_options';



    /**
     * Filters the REST URL prefix.
     * Changes the default 'wp-json' prefix with 'api'
     *
     * @see https://developer.wordpress.org/reference/hooks/rest_url_prefix/
     * @return string
     *
     */
    public function custom_api_slug(){
        return 'api';
    }



    /**
     * Register the routes for the objects of the controller.
     *
     * The endpoints are accessible from:
     * https://homi.com.gr/api/v1/endpoint_name
     */
    public function register_routes() {

        // Initialize the 3rd Party APIs
        $activeCampaign     = new ActiveCampaignAPI();
        $googleAnalytics    = new GoogleAnalyticsAPI();


        /**
         * Endpoint:
         *
         * https://homi.com.gr/api/v1/deals/rentals
         *
         */
        register_rest_route( self::VERSION, '/' . ActiveCampaignAPI::DEALS_RENTALS_ENDPOINT , array(
            'methods'               => 'GET',
            'callback'              => array( $activeCampaign, 'get_active_campaign_deals_rentals'),
//            'permission_callback'   => array( $this, 'authenticate_user'),
        ) );


        /**
         * Endpoint:
         *
         * https://homi.com.gr/api/v1/deals/facebook
         *
         */
        register_rest_route( self::VERSION, '/' . ActiveCampaignAPI::DEALS_FACEBOOK_ENDPOINT , array(
            'methods'               => 'GET',
            'callback'              => array( $activeCampaign, 'get_active_campaign_deals_facebook'),
            'permission_callback'   => array( $this, 'authenticate_user'),
        ) );


        /**
         * Endpoint:
         *
         * https://homi.com.gr/api/v1/deals/free-valuations
         *
         */
        register_rest_route( self::VERSION, '/' . ActiveCampaignAPI::DEALS_FREE_VALUATIONS_ENDPOINT , array(
            'methods'               => 'GET',
            'callback'              => array( $activeCampaign, 'get_active_campaign_deals_free_valuations'),
            'permission_callback'   => array( $this, 'authenticate_user'),
        ) );


        /**
         * Endpoints:
         *
         * https://homi.com.gr/api/v1/ga/events/daily/valuation
         * https://homi.com.gr/api/v1/ga/events/daily/rent
         * https://homi.com.gr/api/v1/ga/events/daily/interest
         *
         */
        register_rest_route( self::VERSION, '/' . GoogleAnalyticsAPI::DAILY_EVENTS , array(
            'methods'               => 'GET',
            'callback'              => array( $googleAnalytics, 'get_daily_events'),
            'permission_callback'   => array( $this, 'authenticate_user'),
        ) );


        /**
         * Endpoints:
         *
         * https://homi.com.gr/api/v1/ga/events/metrics/valuation
         * https://homi.com.gr/api/v1/ga/events/metrics/rent
         * https://homi.com.gr/api/v1/ga/events/metrics/interest
         *
         */
        register_rest_route( self::VERSION, '/' . GoogleAnalyticsAPI::EVENT_METRICS , array(
            'methods'               => 'GET',
            'callback'              => array( $googleAnalytics, 'get_events_metrics'),
            'permission_callback'   => array( $this, 'authenticate_user'),
        ) );


        /**
         * Endpoint:
         *
         * https://homi.com.gr/api/v1/ga/pages/metrics
         *
         */
        register_rest_route( self::VERSION, '/' . GoogleAnalyticsAPI::PAGE_METRICS , array(
            'methods'               => 'GET',
            'callback'              => array( $googleAnalytics, 'get_pages_metrics'),
            'permission_callback'   => array( $this, 'authenticate_user'),
        ) );

    }



    /**
     * The function responsible for running basic Authentication
     * when API requests are made on HOMI website
     *
     * @return bool
     *
     */
    public function authenticate_user(){

        list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':' , base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));

        if( $_SERVER['PHP_AUTH_USER'] && $_SERVER['PHP_AUTH_PW'] ){

            $auth =  wp_authenticate( $_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'] );

            if( $auth instanceof WP_User ){

                if( user_can( $auth->ID, self::CAPABILITY ) ){

                    return true;

                }

            }

        }

        return false;

    }

    public function test(){

        $data = array(
            'data' => array(
                array(
                    'page' => '/test'
                ),
                array(
                    'page' => '/giannis'
                ),
            )
        );

        return new WP_REST_Response( $data, 200 );

    }

}
