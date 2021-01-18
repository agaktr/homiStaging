<?php

namespace Homi\Traits;

use Homi\Controller\Admin\AdminController;
use Homi\Controller\Front\PublicController;
use Homi\Includes\PageTemplates;
use Homi\Includes\Shortcodes;
use Homi\Includes\Widgets;
use Homi\Includes\Settings;
use Homi\Includes\AdminMenuPages;
use Homi\Includes\CronJobs;
use Homi\Service\Navigation\NavigationMenu;
use Homi\Service\PostType\BoilerplatePost;
use Homi\Service\PostType\PropertyObjectPost;
use Homi\Service\PostType\ViewingPost;
use Homi\Service\User\UserCapabilities;
use Homi\Service\User\UserFields;
use Homi\Service\User\UserRoles;

Trait Hooks {


	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function defineAdminHooks() {

        /**
         * AdminController
         *
         * Functions Hooked:
         * @see AdminMenuPages::enqueueStyles()
         * @see AdminMenuPages::enqueueScripts()
         */
        $adminController = new AdminController( $this->getPluginName(), $this->getPluginDirUrl() );
        $this->loader->addAction( 'admin_enqueue_scripts', $adminController, 'enqueueStyles' );
        $this->loader->addAction( 'admin_enqueue_scripts', $adminController, 'enqueueScripts' );



        /**
         * AdminMenuPages
         *
         * Functions Hooked:
         * @see AdminMenuPages::registerAdminPages()
         */
        $adminPages = new AdminMenuPages( $this->getPluginDirPath() );
        $this->loader->addAction( 'admin_menu', $adminPages, 'registerAdminPages' );



        /**
         * Settings
         *
         * Functions Hooked:
         * @see Settings::init()
         * @see Settings::addSettingsMenu()
         * @see Settings::addSettingsLink()
         */
        $settings = new Settings( $this->getPluginName() );
        $this->loader->addAction( 'admin_init', $settings, 'init' );
        $this->loader->addAction( 'admin_menu', $settings, 'addSettingsMenu' );
        $this->loader->addFilter( 'plugin_action_links' , $settings, 'addSettingsLink', 10, 4 );



        /**
         * Cron Jobs
         *
         * Functions Hooked:
         * @see CronJobs::registerScheduledEvents()
         */
        $cronJobs = new CronJobs( $this->loader );
        $this->loader->addAction( 'init', $cronJobs, 'registerScheduledEvents');
        $cronJobs->addCallbackHooks();

        /**
         * User Roles
         *
         * Functions Hooked:
         * @see UserRoles::registerUserRoles()
         */
        $userRoles = new UserRoles();
        $this->loader->addAction( 'init', $userRoles, 'registerUserRoles');



        /**
         * User Capabilities
         *
         * Functions Hooked:
         * @see UserCapabilities::registerUserCapabilities()
         */
        $userCapabilities = new UserCapabilities();
        $this->loader->addAction( 'init', $userCapabilities, 'registerUserCapabilities');



        /**
         * User Capabilities
         *
         * Functions Hooked:
         * @see NavigationMenu::registerNavMenus()
         */
        $navigation = new NavigationMenu();
        $this->loader->addAction( 'after_setup_theme', $navigation, 'registerNavMenus');


	}


	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function definePublicHooks() {

        /**
         * PublicController
         *
         * Functions Hooked:
         * @see PublicController::enqueueStyles()
         * @see PublicController::enqueueScripts()
         * @see PublicController::pluginNameBodyClass()
         */
        $publicController = new PublicController( $this->getPluginName(), $this->getPluginDirUrl() );
        $this->loader->addAction( 'wp_enqueue_scripts', $publicController, 'enqueueStyles' );
        $this->loader->addAction( 'wp_enqueue_scripts', $publicController, 'enqueueScripts' );
        $this->loader->addFilter( 'body_class', $publicController, 'pluginNameBodyClass' );



        /**
         * PageTemplates
         *
         * Functions Hooked:
         * @see PageTemplates::addNewTemplate()
         * @see PageTemplates::registerTemplates()
         * @see PageTemplates::includeTemplates()
         */
        $pageTemplates = new PageTemplates( $this->getPluginDirPath() );
        $this->loader->addFilter( $pageTemplates->getPageTemplatesFilter(), $pageTemplates, 'addNewTemplate' );
        $this->loader->addFilter( 'wp_insert_post_data', $pageTemplates, 'registerTemplates' );
        $this->loader->addFilter( 'template_include', $pageTemplates, 'includeTemplates' );


        /**
         * Shortcodes
         *
         * Functions Hooked:
         * @see Shortcodes::registerShortcodes()
         */
        $shortcodes = new Shortcodes( $this->getPluginDirPath() );
        $this->loader->addAction( 'init', $shortcodes, 'registerShortcodes' );


        /**
         * Widgets
         *
         * Functions Hooked:
         * @see Widgets::registerWidgets()
         */
        $widgets = new Widgets( $this->getPluginDirPath() );
        $this->loader->addAction( 'widgets_init', $widgets, 'registerWidgets' );


        /**
         * Property Object Post hooks
         *
         * Functions Hooked:
         * @see PropertyObjectPost::registerPostType()
         * @see PropertyObjectPost::addMetaBoxes()
         * @see PropertyObjectPost::customPostTypeTemplateSingle()
         * @see PropertyObjectPost::customPostTypeTemplateArchive()
         */
        $propertyObjectPost = new PropertyObjectPost( $this->getPluginName(), $this->getPluginDirPath() );
        $this->loader->addAction( 'init', $propertyObjectPost, 'registerPostType' );
        $this->loader->addAction( 'rwmb_meta_boxes', $propertyObjectPost, 'addMetaBoxes', 33, 1 );
        $this->loader->addFilter( 'single_template', $propertyObjectPost,'customPostTypeTemplateSingle', 10, 1 );
        $this->loader->addFilter( 'archive_template', $propertyObjectPost,'customPostTypeTemplateArchive' );



        /**
         * Viewing Request Post hooks
         *
         * Functions Hooked:
         * @see ViewingPost::registerPostType()
         * @see ViewingPost::addMetaBoxes()
         * @see ViewingPost::customPostTypeTemplateSingle()
         * @see ViewingPost::customPostTypeTemplateArchive()
         */
        $viewingPost = new ViewingPost( $this->getPluginName(), $this->getPluginDirPath() );
        $this->loader->addAction( 'init', $viewingPost, 'registerPostType' );
        $this->loader->addAction( 'rwmb_meta_boxes', $viewingPost, 'addMetaBoxes', 33, 1 );
        $this->loader->addFilter( 'single_template', $viewingPost,'customPostTypeTemplateSingle', 10, 1 );
        $this->loader->addFilter( 'archive_template', $viewingPost,'customPostTypeTemplateArchive' );


        /**
         * User Fields
         *
         * Functions Hooked:
         * @see UserFields::registerUserFields()
         */
        $userFields = new UserFields();
        $this->loader->addAction( 'rwmb_meta_boxes', $userFields, 'registerUserFields', 44, 1 );

	}

}
