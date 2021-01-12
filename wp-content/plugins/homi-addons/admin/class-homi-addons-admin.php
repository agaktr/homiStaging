<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.apto.gr/
 * @since      1.0.0
 *
 * @package    Homi_Addons
 * @subpackage Homi_Addons/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Homi_Addons
 * @subpackage Homi_Addons/admin
 * @author     APTO OE <apto.gr@gmail.com>
 */
class Homi_Addons_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/homi-addons-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( 'pignose-calendar', plugin_dir_url( __FILE__ ) . 'js/pignose.calendar.full.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/homi-addons-admin.js', array( 'jquery', 'pignose-calendar' ), $this->version, false );

        wp_localize_script( $this->plugin_name, 'AdminAjaxHandler', [
            'ajax_url'                              => admin_url( 'admin-ajax.php' ),
            'security'                              => wp_create_nonce( $this->plugin_name ),
            'ajax_matches'                          => Homi_Addons_Upload_Request::AJAX_GET_ADMIN_MATCHES,
        ] );

	}

}
