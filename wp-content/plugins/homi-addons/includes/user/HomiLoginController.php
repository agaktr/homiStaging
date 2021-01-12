<?php


class HomiLoginController{


    const RECAPTCHA_SITE_KEY        = '6LfUSfQUAAAAACTf2BtPwJWMW3f9Zzg5BVH4gCDo';
    const RECAPTCHA_SECRET_KEY      = '6LfUSfQUAAAAAFTh_Ob9zboNnhBuIKczizTD7GID';
    const RECAPTCHA_VERIFY_URL      = 'https://www.google.com/recaptcha/api/siteverify';
    const AJAX_RECAPTCHA_AUTH       = 'ajax_authenticate_recaptcha';



    /**
     * Filters the duration of the authentication cookie expiration period.
     *
     * @see https://developer.wordpress.org/reference/hooks/auth_cookie_expiration/
     * @param int $expire The login URL. Not HTML-encoded.
     *
     * @return int
     */
    public function extend_login_cookie( $expire ){

        return 2592000; // 30 days in seconds (Adjust to your needs)

    }


    /**
     * Filters the login URL and replaces the default one with a custom login page.
     * The custom login page is being displayed from the page with name 'login'
     *
     * @param string $login_url The login URL. Not HTML-encoded.
     * @param string $redirect The path to redirect to on login, if supplied.
     *
     * @return string
     */
    public function change_login_url( $login_url, $redirect ) {

        $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $custom_login_url = (strpos( $actual_link, 'el') !== false ? 'el/login' : 'login' );

        return str_replace("wp-login.php", $custom_login_url ,$login_url);

    }



    /**
     * Redirects the user to the homepage after a logout
     *
     * @return void
     */
    public function redirect_after_logout(){

        wp_redirect( home_url() );
        exit();

    }



    /**
     * Filters the wp_authenticate and adds custom errors
     * if there's an empty username or password
     *
     * @param $user null|WP_User|WP_Error
     * @param $username string 	Username or email address.
     * @param $password string User password
     * @return mixed
     */
    public function login_auth( $user, $username, $password ) {

        if ( is_wp_error( $user ) && isset( $_SERVER[ 'HTTP_REFERER' ] ) && !strpos( $_SERVER[ 'HTTP_REFERER' ], 'wp-admin' ) && !strpos( $_SERVER[ 'HTTP_REFERER' ], 'wp-login.php' ) ) {

            $referrer = $_SERVER[ 'HTTP_REFERER' ];

            foreach ( $user->errors as $key => $error ) {

                if ( in_array( $key, array( 'empty_password', 'empty_username') ) ) {

                    unset( $user->errors[ $key ] );
                    $user->errors[ 'custom_'.$key ] = $error;

                }

            }

        }

        return $user;

    }



    /**
     * Redirect after a user login has failed.
     * The function redirects the user to the login page and
     * appends a fail notice
     *
     * @param string $username Username entered.
     *
     * @return void
     */
    public function redirect_after_login_fail( $username ) {

        if( isset( $_SERVER['HTTP_REFERER'] ) ){

            $referrer = $_SERVER['HTTP_REFERER'];

            if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {

                if( isset( $_POST['redirect_to'] ) && !empty( $_POST['redirect_to'] ) ){
                    $redirect_url = site_url( 'login' ) . "/?login=failed&redirect_to=".$_POST['redirect_to'];
                }
                else {
                    $redirect_url = site_url( 'login' ) . "/?login=failed";
                }

                wp_redirect( $redirect_url );
                exit;
            }

        }

        wp_redirect( site_url( 'login' ) );
        exit;

    }



    /**
     * Redirect user after successful login.
     *
     * @param string $redirect_to URL to redirect to.
     * @param string $request URL the user is coming from.
     * @param object $user Logged user's data.
     *
     * @return string
     */
    public function redirect_after_login( $redirect_to, $request, $user ){

        if ( ( $user instanceof WP_User && is_array( $user->roles ) ) && ( in_array( Homi_Addons::BUYER_ROLE, (array) $user->roles ) || in_array( Homi_Addons::SELLER_ROLE , (array) $user->roles ) ) ) {

            $redirect_to = site_url();

        }

        if( isset( $_SERVER['HTTP_REFERER'] ) ) {

            $parts = parse_url($_SERVER['HTTP_REFERER']);

            if( isset( $parts['query'] ) ){

                parse_str($parts['query'], $query);

                if (isset($query['redirect_to'])) {

                    $redirect_to = $query['redirect_to'];

                }

            }

        }

        if( class_exists('WpFastestCache') ){

            $cache = new WpFastestCache();
            $cache->deleteCache( true );

        }

        if ( $user instanceof WP_User && current_user_can('administrator')  ) {

            $redirect_to = home_url('wp-admin');

        }

        return $redirect_to;

    }



    /**
     * Restricts access to the Admin Dashboard for Buyers and Sellers
     * HOMI User roles are defined in Homi_Addons class
     * If a user is a seller or buyer and tries to access the dashboard
     * then is redirected to the homepage
     *
     * Hooked on action: 'admin_init'
     *
     */
    public function restrict_admin(){

        if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
            return;
        }

        if( is_user_logged_in() ){

            $user = wp_get_current_user();

            if ( in_array( Homi_Addons::BUYER_ROLE, (array) $user->roles ) || in_array( Homi_Addons::SELLER_ROLE , (array) $user->roles ) ) {

                wp_redirect( home_url() );
                exit;

            }

        }

    }



    /**
     * Hides the admin bar from buyers and sellers
     * HOMI User roles are defined in Homi_Addons class
     *
     * Hooked on action: 'after_setup_theme'
     *
     */
    public function remove_admin_bar() {

        if( is_user_logged_in() ){

            $user = wp_get_current_user();

            if ( in_array( Homi_Addons::BUYER_ROLE, (array) $user->roles ) || in_array( Homi_Addons::SELLER_ROLE , (array) $user->roles ) ) {

                show_admin_bar(false);

            }

        }


    }



    /**
     * AJAX Callback function to make a POST request
     * to authenticate the client token and verify the google recaptcha
     *
     */
    public function ajax_authenticate_recaptcha(){

        $result = array();
        $token = $_POST['token'];

        //get verified response data
        $data = array( 'secret' => self::RECAPTCHA_SECRET_KEY, 'response' => $token );

        $ch = curl_init( self::RECAPTCHA_VERIFY_URL );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $data ) );
        $verifyResponse = curl_exec($ch);
        curl_close($ch);

        $responseData       = json_decode( $verifyResponse, true );
        $result['auth']     = $responseData['success'];

        wp_send_json( $result );
        wp_die();

    }

}
