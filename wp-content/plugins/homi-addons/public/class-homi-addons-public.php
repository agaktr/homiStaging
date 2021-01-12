<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.apto.gr/
 * @since      1.0.0
 *
 * @package    Homi_Addons
 * @subpackage Homi_Addons/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Homi_Addons
 * @subpackage Homi_Addons/public
 * @author     APTO OE <apto.gr@gmail.com>
 */
class Homi_Addons_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Homi_Addons_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Homi_Addons_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( 'jquery-ui-slider');
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/public.min.css', array(), $this->version, 'all' );

        if ( is_single() && 'post' == get_post_type() ) {
            wp_enqueue_style( 'justreview', 'https://justreview.co/widget/justreview.css', array(), $this->version, 'all' );
        }

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Homi_Addons_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Homi_Addons_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

        $dependencies = array( 'jquery', 'jquery-ui-slider' );

		$google_maps_key = 'AIzaSyBksJMvDOWXDwNC5O1w8FzIX0eQGX6zQmE';

        wp_enqueue_script( 'jquery-ui-slider' );

        // Property Valuation Form
        // Rent Form
        if( is_page(14934) || is_page(16078 ) ){
//            wp_enqueue_script( 'form-map', "https://maps.googleapis.com/maps/api/js?key=$google_maps_key&callback=initMap", array( 'jquery' ), $this->version, true );
            wp_enqueue_script( 'form-map', "https://maps.googleapis.com/maps/api/js?key=$google_maps_key&libraries=places", array( 'jquery' ), $this->version, true );
            $dependencies[] = 'form-map';
        }

        // Interest Form,
        // Property Upload Edit
        // Property Upload New
        if( is_page(18131 )  || is_page(19776 )  || is_page(19774 )  ){
            wp_enqueue_script( 'form-map', "https://maps.googleapis.com/maps/api/js?key=$google_maps_key&libraries=places", array( 'jquery' ), $this->version, true );
            $dependencies[] = 'form-map';
        }

        if( is_page(16561) || is_page(16944) ){

            $recaptchaKey = HomiLoginController::RECAPTCHA_SITE_KEY;
            wp_enqueue_script( 'grecaptcha', "https://www.google.com/recaptcha/api.js?render=$recaptchaKey", null, $this->version, true );

            wp_localize_script( 'grecaptcha', 'AjaxLoginController', [
                'ajax_url'                  => admin_url( 'admin-ajax.php' ),
                'security'                  => wp_create_nonce( $this->plugin_name ),
                'recaptcha_site_key'        => HomiLoginController::RECAPTCHA_SITE_KEY,
                'authenticate_recaptcha'    => HomiLoginController::AJAX_RECAPTCHA_AUTH,
            ] );

            $dependencies[] = 'grecaptcha';
        }

        wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/public.min.js', $dependencies, $this->version, true );

        wp_localize_script( $this->plugin_name, 'AjaxHandler', [
            'ajax_url'                              => admin_url( 'admin-ajax.php' ),
            'security'                              => wp_create_nonce( $this->plugin_name ),
            'ajax_insert_request'                   => Homi_Addons_Valuation_Request::AJAX_INSERT_REQUEST,
            'ajax_update_request'                   => Homi_Addons_Valuation_Request::AJAX_UPDATE_REQUEST,
            'ajax_rent_insert_request'              => Homi_Addons_Rent_Request::AJAX_INSERT_REQUEST,
            'ajax_rent_update_request'              => Homi_Addons_Rent_Request::AJAX_UPDATE_REQUEST,
            'ajax_rent_interest_insert_request'     => Homi_Addons_Interest_Request::AJAX_INSERT_REQUEST,
            'ajax_rent_interest_update_request'     => Homi_Addons_Interest_Request::AJAX_UPDATE_REQUEST,
            'ajax_insert_tour_request'              => Homi_Addons_Tour_Request::AJAX_INSERT_TOUR_REQUEST,
            'ajax_load_message_widgets'             => MessagesController::AJAX_LOAD_MESSAGE_WIDGETS,
            'ajax_check_email'                      => HomiRegister::AJAX_CHECK_EMAIL,
            'ajax_add_cta_contact'                  => ctaButtonsController::AJAX_ADD_CTA_CONTACT,
        ] );

        if ( is_single() && 'post' == get_post_type() ) {
            wp_enqueue_script( 'justreview', 'https://justreview.co/widget/justreview.js', array(), $this->version, 'all' );
        }

	}

	public function trpc_flags_path( $original_flags_path,  $language_code ){

        // only change the folder path for the following languages:
        $languages_with_custom_flags = array( 'en_US' );

        if ( in_array( $language_code, $languages_with_custom_flags ) ) {
            return  plugin_dir_url( __FILE__ ) . 'flags/' ;
        }else{
            return $original_flags_path;
        }
    }


    public function active_campaign_script(){

	    ?>

        <script type="text/javascript">
            (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
            vgo('setAccount', '610500256');
            vgo('setTrackByDefault', true);
            vgo('process');
        </script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156601739-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-156601739-1');
        </script>


        <?php

    }
}
