<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://www.apto.gr/
 * @since      1.0.0
 *
 * @package    Homi_Addons
 * @subpackage Homi_Addons/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Homi_Addons
 * @subpackage Homi_Addons/includes
 * @author     APTO OE <apto.gr@gmail.com>
 */
class Homi_Addons {

    const PLUGIN_NAME = 'homi-addons';
    const SELLER_ROLE = 'homi_seller';
    const BUYER_ROLE  = 'houzez_buyer';


	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Homi_Addons_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'HOMI_ADDONS_VERSION' ) ) {
			$this->version = HOMI_ADDONS_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'homi-addons';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Homi_Addons_Loader. Orchestrates the hooks of the plugin.
	 * - Homi_Addons_i18n. Defines internationalization functionality.
	 * - Homi_Addons_Admin. Defines all hooks for the admin area.
	 * - Homi_Addons_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

        /**
         * The class responsible for including the autoload
         */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'vendor/autoload.php';


        $this->loader = new Homi_Addons_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Homi_Addons_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Homi_Addons_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}



	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Homi_Addons_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

		$homiUserFields = new HomiUserFields();
        $this->loader->add_action( 'edit_user_profile', $homiUserFields, 'display_meta_fields_on_profile_screen' );
        $this->loader->add_action( 'show_user_profile', $homiUserFields, 'display_meta_fields_on_profile_screen' );
        $this->loader->add_action( 'personal_options_update', $homiUserFields, 'save_meta_fields_on_profile_screen' );
        $this->loader->add_action( 'edit_user_profile_update', $homiUserFields, 'save_meta_fields_on_profile_screen', 30 , 1 );


        $activeCampaignPages = new ActiveCampaignPages();
        $this->loader->add_action('admin_menu', $activeCampaignPages, 'registerAdminPage');


        $homiEmailTemplatesPages = new HomiEmailPagesTemplates();
        $this->loader->add_action('admin_menu', $homiEmailTemplatesPages, 'registerAdminPage');


        $excelPages = new ExcelPages();
        $this->loader->add_action('admin_menu', $excelPages, 'registerAdminPage');


        $requestsBookings = new RequestsBookings();
        $this->loader->add_action( 'admin_menu', $requestsBookings, 'register_admin_pages' );


        $statsPages = new HomiStatsPages();
        $this->loader->add_action( 'admin_menu', $statsPages, 'registerAdminPage' );


        $homiApi = new HomiApi();
        $this->loader->add_action('rest_api_init', $homiApi, 'register_routes');
        $this->loader->add_filter( 'rest_url_prefix', $homiApi, 'custom_api_slug');


        $gaPages = new GoogleAnalyticsAdminPages();
        $this->loader->add_action( 'admin_menu', $gaPages, 'registerAdminPage' );


        $codeGeneratorPages = new codeGeneratorPages();
        $this->loader->add_action( 'admin_menu', $codeGeneratorPages, 'registerAdminPage' );


        $codeGenerator = new codeGenerator();
        $this->loader->add_action('wp_loaded', $codeGenerator, 'createProperties');


        $xeAutocomplete = new XEAutocomplete();
        $this->loader->add_action( 'wp_ajax_xe_locations', $xeAutocomplete, 'autocomplete_source' );


        $spitogatosAutocomplete = new SpitogatosAutocomplete();
        $this->loader->add_action( 'wp_ajax_spitogatos_locations', $spitogatosAutocomplete, 'autocomplete_source' );

    }



	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

        $this->loader->add_filter( 'body_class', $this, 'plugin_class_to_body_class' );
        $this->loader->add_filter('jpeg_quality', $this, 'high_quality_images', 10, 1 );


		$plugin_public = new Homi_Addons_Public( $this->get_plugin_name(), $this->get_version() );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
        $this->loader->add_filter( 'trp_flags_path', $plugin_public, 'trpc_flags_path', 10, 2 );
//        $this->loader->add_action( 'wp_footer', $plugin_public, 'active_campaign_script' );


        $questions = new Homi_Addons_Questions();
        $this->loader->add_action( 'init', $questions, 'register_post_type' );


        $valuation_request = new Homi_Addons_Valuation_Request();
        $this->loader->add_action( 'init', $valuation_request, 'register_post_type' );
        $this->loader->add_action( 'rwmb_meta_boxes', $valuation_request, 'add_meta_boxes', 33, 1 );
        $this->loader->add_filter( 'manage_'.Homi_Addons_Valuation_Request::POST_TYPE_NAME.'_posts_columns', $valuation_request, 'posts_columns_id');
        $this->loader->add_action( 'manage_'.Homi_Addons_Valuation_Request::POST_TYPE_NAME.'_posts_custom_column', $valuation_request, 'posts_custom_id_columns', 10, 2);
        $this->loader->add_action( 'wp_ajax_' . Homi_Addons_Valuation_Request::AJAX_INSERT_REQUEST, $valuation_request, 'ajax_insert_request' );
        $this->loader->add_action( 'wp_ajax_nopriv_' .  Homi_Addons_Valuation_Request::AJAX_INSERT_REQUEST, $valuation_request, 'ajax_insert_request' );
        $this->loader->add_action( 'wp_ajax_' . Homi_Addons_Valuation_Request::AJAX_UPDATE_REQUEST, $valuation_request, 'ajax_update_request' );
        $this->loader->add_action( 'wp_ajax_nopriv_' .  Homi_Addons_Valuation_Request::AJAX_UPDATE_REQUEST, $valuation_request, 'ajax_update_request' );
        $this->loader->add_action( 'wp_insert_post', $valuation_request, 'new_valuation_request_callback', 99, 3 );
        $this->loader->add_action( 'save_post_' . Homi_Addons_Valuation_Request::POST_TYPE_NAME , $valuation_request, 'actionController', 99, 3 );


        $valuation_rent_request = new Homi_Addons_Rent_Request();
        $this->loader->add_action( 'init', $valuation_rent_request, 'register_post_type' );
        $this->loader->add_action( 'rwmb_meta_boxes', $valuation_rent_request, 'add_meta_boxes', 33, 1 );
        $this->loader->add_filter( 'manage_'.Homi_Addons_Rent_Request::POST_TYPE_NAME.'_posts_columns', $valuation_rent_request, 'posts_columns_id');
        $this->loader->add_action( 'manage_'.Homi_Addons_Rent_Request::POST_TYPE_NAME.'_posts_custom_column', $valuation_rent_request, 'posts_custom_id_columns', 10, 2);
        $this->loader->add_action( 'wp_ajax_' . Homi_Addons_Rent_Request::AJAX_INSERT_REQUEST, $valuation_rent_request, 'ajax_insert_request' );
        $this->loader->add_action( 'wp_ajax_nopriv_' .  Homi_Addons_Rent_Request::AJAX_INSERT_REQUEST, $valuation_rent_request, 'ajax_insert_request' );
        $this->loader->add_action( 'wp_ajax_' . Homi_Addons_Rent_Request::AJAX_UPDATE_REQUEST, $valuation_rent_request, 'ajax_update_request' );
        $this->loader->add_action( 'wp_ajax_nopriv_' .  Homi_Addons_Rent_Request::AJAX_UPDATE_REQUEST, $valuation_rent_request, 'ajax_update_request' );
        $this->loader->add_action( 'wp_insert_post', $valuation_rent_request, 'new_rent_request_callback', 99, 3 );


        $tour_request = new Homi_Addons_Tour_Request();
        $this->loader->add_action( 'init', $tour_request, 'register_post_type' );
        $this->loader->add_action( 'rwmb_meta_boxes', $tour_request, 'add_meta_boxes', 33, 1 );
        $this->loader->add_filter( 'manage_'.Homi_Addons_Tour_Request::POST_TYPE_NAME.'_posts_columns', $tour_request, 'posts_columns_id');
        $this->loader->add_action( 'manage_'.Homi_Addons_Tour_Request::POST_TYPE_NAME.'_posts_custom_column', $tour_request, 'posts_custom_id_columns', 10, 2);
        $this->loader->add_action( 'wp_ajax_' . Homi_Addons_Tour_Request::AJAX_INSERT_TOUR_REQUEST, $tour_request, 'ajax_insert_tour_request' );
        $this->loader->add_action( 'wp_ajax_nopriv_' .  Homi_Addons_Tour_Request::AJAX_INSERT_TOUR_REQUEST, $tour_request, 'ajax_insert_tour_request' );
        $this->loader->add_action( 'wp_loaded', $tour_request, 'request_action');
        $this->loader->add_action( 'wp_insert_post', $tour_request, 'new_tour_request_callback', 99, 3 );
        $this->loader->add_action( 'save_post_' . Homi_Addons_Tour_Request::POST_TYPE_NAME , $tour_request, 'statusChanged', 99, 3 );


        $rent_interest = new Homi_Addons_Interest_Request();
        $this->loader->add_action( 'init', $rent_interest, 'register_post_type' );
        $this->loader->add_action( 'rwmb_meta_boxes', $rent_interest, 'add_meta_boxes', 33, 1 );
        $this->loader->add_filter( 'manage_'.Homi_Addons_Interest_Request::POST_TYPE_NAME.'_posts_columns', $rent_interest, 'posts_columns_id');
        $this->loader->add_action( 'manage_'.Homi_Addons_Interest_Request::POST_TYPE_NAME.'_posts_custom_column', $rent_interest, 'posts_custom_id_columns', 10, 2);
        $this->loader->add_action( 'wp_ajax_' . Homi_Addons_Interest_Request::AJAX_INSERT_REQUEST, $rent_interest, 'ajax_insert_request' );
        $this->loader->add_action( 'wp_ajax_nopriv_' .  Homi_Addons_Interest_Request::AJAX_INSERT_REQUEST, $rent_interest, 'ajax_insert_request' );
        $this->loader->add_action( 'wp_ajax_' . Homi_Addons_Interest_Request::AJAX_UPDATE_REQUEST, $rent_interest, 'ajax_update_request' );
        $this->loader->add_action( 'wp_ajax_nopriv_' .  Homi_Addons_Interest_Request::AJAX_UPDATE_REQUEST, $rent_interest, 'ajax_update_request' );
        $this->loader->add_action( 'wp_insert_post', $rent_interest, 'new_rent_interest_request_callback', 99, 3 );


        $upload_request = new Homi_Addons_Upload_Request();
        $this->loader->add_action( 'init', $upload_request, 'register_post_type' );
        $this->loader->add_action( 'rwmb_meta_boxes', $upload_request, 'add_meta_boxes', 33, 1 );
        $this->loader->add_action( 'save_post_' . Homi_Addons_Upload_Request::POST_TYPE_NAME , $upload_request, 'actionsController', 99, 3 );
        $this->loader->add_action( 'get_template_part_details', $upload_request,'portfolio_page_template', 99, 2 );
        $this->loader->add_action( 'before_delete_post', $upload_request,'on_delete_upload_request', 99, 1 );
        $this->loader->add_action( 'wp_ajax_' . Homi_Addons_Upload_Request::AJAX_GET_ADMIN_MATCHES, $upload_request, Homi_Addons_Upload_Request::AJAX_GET_ADMIN_MATCHES );

        $homiRequestController = new HomiRequestController();
        $this->loader->add_action( 'after_homi_request_form_submitted', $homiRequestController, 'create_request_deal', 10, 1 );
        $this->loader->add_action( 'after_homi_viewing_status_changed', $homiRequestController, 'update_viewing_deal', 10, 1 );
        $this->loader->add_action( 'before_delete_post', $homiRequestController, 'delete_request_deal', 10, 1 );


        $homiProperty = new HomiProperty();
        $this->loader->add_action( 'rwmb_meta_boxes', $homiProperty, 'add_meta_boxes', 33, 1 );
        $this->loader->add_action( 'wp_insert_post', $homiProperty,'after_creation_handle', 10, 3 );


        $emailReminderController = new EmailReminderController();
        $this->loader->add_action( 'init', $emailReminderController, 'register_scheduled_events');
        $this->loader->add_action( EmailReminderController::CRON_EVENT_SEND_REMINDER_TOMORROW , $emailReminderController, 'schedule_send_tomorrow_reminders');
        $this->loader->add_action( EmailReminderController::CRON_EVENT_SEND_REMINDER_MORNING , $emailReminderController, 'schedule_send_today_reminders');


        $homiApiCron = new HomiApiCronController();
        $this->loader->add_action( 'init', $homiApiCron, 'registerScheduledEvents');

        foreach( HomiApiCronController::CRON_EVENTS as $cron_job => $cronData ){

            $this->loader->add_action( $cron_job , $homiApiCron, $cronData['callback'] );

        }

        $availabilityScheduler = new AvailabilityScheduler();
        $this->loader->add_action('init', $availabilityScheduler, 'register_scheduled_events');
        $this->loader->add_action(AvailabilityScheduler::CRON_EVENT_SET_DEFAULT_AVAILABILITY , $availabilityScheduler, 'set_property_default_availability');



        $pageTemplates = new PageTemplatesHandler();
        $this->loader->add_filter( $pageTemplates->page_filter, $pageTemplates, 'add_new_template' );
        $this->loader->add_filter( 'wp_insert_post_data', $pageTemplates, 'register_project_templates' );
        $this->loader->add_filter( 'template_include', $pageTemplates, 'view_project_template' );



        $messagesController = new MessagesController();
        $this->loader->add_filter( 'walker_nav_menu_start_el', $messagesController,'messages_nav_menu_item',10,2);
        $this->loader->add_action( 'wp_ajax_' . MessagesController::AJAX_LOAD_MESSAGE_WIDGETS, $messagesController, 'ajax_load_message_widgets' );
        $this->loader->add_action( 'wp_ajax_nopriv_' .  MessagesController::AJAX_LOAD_MESSAGE_WIDGETS, $messagesController, 'ajax_load_message_widgets' );
        $this->loader->add_action( 'fep_action_message_after_send', $messagesController, 'after_new_message_callback', 33, 3 );


        $sellerAvailabilityController = new SellerAvailabilityController();
        $this->loader->add_action('wp_loaded', $sellerAvailabilityController, 'property_availability_actions');
        $this->loader->add_action('init', $sellerAvailabilityController, 'wpd_add_my_endpoint');


        $propertyUploaderController = new PropertyUploadController();
        $this->loader->add_action('init', $propertyUploaderController, 'wpd_add_my_endpoint');
        $this->loader->add_action('wp_loaded', $propertyUploaderController, 'save_controller');


        $widgetsHandler = new WidgetsHandler();
        $this->loader->add_action( 'widgets_init', $widgetsHandler, 'register_custom_widgets' );


        $homiRegister = new HomiRegister();
        $this->loader->add_filter( 'register_url', $homiRegister,'change_register_url' );
        $this->loader->add_action( 'wp_loaded', $homiRegister, 'registerNewUser' );
        $this->loader->add_action( 'wp_footer', $homiRegister, 'successful_registration_message' );
        $this->loader->add_action( 'homi_register_login_btns', $homiRegister, 'custom_register_login_buttons' );
        $this->loader->add_action( 'wp_ajax_' . HomiRegister::AJAX_CHECK_EMAIL, $homiRegister, HomiRegister::AJAX_CHECK_EMAIL );
        $this->loader->add_action( 'wp_ajax_nopriv_' .  HomiRegister::AJAX_CHECK_EMAIL, $homiRegister, HomiRegister::AJAX_CHECK_EMAIL );



        $homiLogin = new HomiLoginController();
        $this->loader->add_action( 'wp_ajax_' . HomiLoginController::AJAX_RECAPTCHA_AUTH, $homiLogin, HomiLoginController::AJAX_RECAPTCHA_AUTH );
        $this->loader->add_action( 'wp_ajax_nopriv_' .  HomiLoginController::AJAX_RECAPTCHA_AUTH, $homiLogin, HomiLoginController::AJAX_RECAPTCHA_AUTH );
        $this->loader->add_action( 'after_setup_theme', $homiLogin, 'remove_admin_bar');
        $this->loader->add_action( 'admin_init', $homiLogin, 'restrict_admin', 1 );
        $this->loader->add_filter( 'login_url',  $homiLogin, 'change_login_url', 20, 2 );
        $this->loader->add_filter( 'login_redirect', $homiLogin, 'redirect_after_login', 20, 3 );
        $this->loader->add_filter( 'wp_logout', $homiLogin, 'redirect_after_logout', 20 );
        $this->loader->add_filter( 'authenticate',  $homiLogin, 'login_auth', 31, 3 );
        $this->loader->add_action( 'wp_login_failed',  $homiLogin, 'redirect_after_login_fail');
        $this->loader->add_filter( 'auth_cookie_expiration', $homiLogin, 'extend_login_cookie', 33, 1 );
        add_filter( 'admin_email_check_interval', '__return_zero' );



        $passwordResetHandler = new HomiPasswordHandler();
        $this->loader->add_filter( 'wp_mail_content_type', $passwordResetHandler, 'set_content_type', 10 , 1 );
        $this->loader->add_action( 'login_form_lostpassword', $passwordResetHandler, 'customLostPasswordPage' );
        $this->loader->add_filter( 'retrieve_password_title', $passwordResetHandler, 'resetPasswordEmailSubject', 10, 3 );
        $this->loader->add_filter( 'retrieve_password_message', $passwordResetHandler, 'resetPasswordEmailMessage', 10, 4 );
        $this->loader->add_action( 'login_form_rp', $passwordResetHandler, 'customResetPasswordPage' );
        $this->loader->add_action( 'login_form_resetpass', $passwordResetHandler, 'customResetPasswordPage' );
//        $this->loader->add_filter( 'lostpassword_url',  $passwordResetHandler, 'change_lostpassword_url', 10, 2 );



        $interactiveFormActions = new InteractiveFormActions();
        $this->loader->add_action( 'wp_loaded', $interactiveFormActions, 'new_user_request_submitted' );
        $this->loader->add_action( 'wp_loaded', $interactiveFormActions, 'change_user_pass' );
        $this->loader->add_action( 'init', $interactiveFormActions, 'wpd_add_my_endpoint');



        $homiTranslate = new HomiTranslateController();
        $this->loader->add_filter( 'trp_force_custom_links', $homiTranslate, 'trpc_ignore_url', 10, 4 );
        $this->loader->add_filter( 'trp_no_translate_selectors', $homiTranslate, 'trpc_no_stranslate_selectors', 10, 2);



        $blog = new BlogController();
        $this->loader->add_filter( 'category_template', $blog, 'custom_category_template', 10, 1 );
        $this->loader->add_filter( 'tag_template', $blog, 'custom_tag_template', 10, 1 );
        $this->loader->add_filter( 'single_template', $blog,'custom_post_template' );


        $contractForm = new contractFormController();
        $this->loader->add_action('wp_loaded', $contractForm, 'formController');

        $justReviewsShortcodes = new justReviewsShortcodes();
        $this->loader->add_action( 'init', $justReviewsShortcodes, 'registerShortcodes' );

        $ctaShortcodes = new ctaButtonsShortcodes();
        $this->loader->add_action( 'init', $ctaShortcodes, 'registerShortcodes' );

        $ctaButtonsController = new ctaButtonsController();
        $this->loader->add_action( 'wp_ajax_' . ctaButtonsController::AJAX_ADD_CTA_CONTACT, $ctaButtonsController, 'ajax_add_cta_contact' );
        $this->loader->add_action( 'wp_ajax_nopriv_' .  ctaButtonsController::AJAX_ADD_CTA_CONTACT, $ctaButtonsController, 'ajax_add_cta_contact' );

    }

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Homi_Addons_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}


    /**
     * Adds classes to the body regarding the plugin
     *
     * @since     1.0.0
     * @param     $classes array
     * @return    array
     */
    public function plugin_class_to_body_class( $classes ) {

        $classes[] = 'homi-addons-plugin';

        if( is_user_logged_in() ){

            $user = wp_get_current_user();

            if ( in_array( self::BUYER_ROLE, (array) $user->roles )) {

                $classes[] = 'homi-user-buyer';

            }
            else if( in_array( self::SELLER_ROLE , (array) $user->roles ) ) {

                $classes[] = 'homi-user-seller';

            }
            else if( in_array( 'administrator', (array) $user->roles ) ) {

                $classes[] = 'homi-user-administrator';

            }

        }

        return $classes;

    }


    public function high_quality_images( $arg ){

        return 100;

    }

}
