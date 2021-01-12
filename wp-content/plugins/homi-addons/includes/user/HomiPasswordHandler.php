<?php


class HomiPasswordHandler{

    /**
     * Code reference:
     * https://code.tutsplus.com/tutorials/build-a-custom-wordpress-user-flow-part-3-password-reset--cms-23811
     */

    const PASSWORD_LOST_URL     = 'password-lost';
    const PASSWORD_RESET_URL    = 'password-reset';
    const PASSWORD_LOGIN_URL    = 'login';

    public function set_content_type( $content_type ) {
        return 'text/html';
    }


    /**
     * Filters the default wordpress password change/lost url
     * with out custom page for lost password
     *
     * @param $lostpassword_url string The URL for retrieving a lost password.
     * @param $redirect string The path to redirect to.
     * @return string
     */
    public function change_lostpassword_url( $lostpassword_url, $redirect  ){

        return site_url( self::PASSWORD_LOST_URL );

    }


    /**
     * Set the custom template for password lost
     * Redirects the user to the custom "Forgot your password?" page instead of
     * wp-login.php?action=lostpassword.
     * In order for this code to work you have to create a page on
     * the wordpress site with the name set in the PASSWORD_LOST_URL constant
     *
     * @return void
     */
    public function customLostPasswordPage() {

        if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) {

            if ( is_user_logged_in() ) {

                wp_redirect( home_url() );
                exit;

            }

            wp_redirect( home_url( self::PASSWORD_LOST_URL ) );
            exit;

        }
        //Handles the Lost Password after the form submit
        else if ( 'POST' === $_SERVER['REQUEST_METHOD'] ) {

            $errors = retrieve_password();

            if ( is_wp_error( $errors ) ) {

                // Errors found
                $redirect_url = home_url( self::PASSWORD_LOST_URL . '/?errors='.join( ',', $errors->get_error_codes() ) );

            }
            else {

                // Email sent
                $redirect_url = home_url( self::PASSWORD_LOST_URL . '/?checkemail=confirm' );
            }

            wp_redirect( $redirect_url );
            exit;

        }

    }



    /**
     * Gets the error message based on the error code param
     *
     * @param $error_code string
     *
     * @return string
     */
    public function get_error_message( $error_code ){

        switch( $error_code ){

            case 'empty_username':
                return __( 'You need to enter your email address to continue.', 'personalize-login' );

            case 'invalid_email':
            case 'invalidcombo':
                return __( 'There is no user registered with the email address you entered. Make sure the email address you entered is correct.', 'personalize-login' );

            case 'expiredkey':
            case 'invalidkey':
                return __( 'The password reset link you used is not valid anymore. Please fill in your email on the form below to send you a new email with the instructions to reset your password.', 'personalize-login' );

            case 'password_reset_mismatch':
                return __( "The two passwords you entered don't match.", 'personalize-login' );

            case 'password_reset_empty':
                return __( "Sorry, we don't accept empty passwords.", 'personalize-login' );

        }

        return '';

    }


    /**
     * Checks whether the user was just registered on the site.
     * This function detects if the register date of the user is within 10 min
     *
     * @param WP_User $user WP_User object.
     *
     * @return bool
     */
    private function user_just_registered( $user ){

        if ( round(( time() - strtotime( $user->user_registered ) ) / 60,2 ) < 10 ){

            return true;

        }

        return false;

    }



    /**
     * Filters the subject of the password reset email.
     * Hooked on 'retrieve_password_title' filter.
     *
     * Reference: https://developer.wordpress.org/reference/hooks/retrieve_password_title/
     *
     * @param string  $title        The default email subject.
     * @param string  $user_login   The username for the user.
     * @param WP_User $user         WP_User object.
     *
     * @return string   The mail message to send.
     */
    public function resetPasswordEmailSubject( $title, $user_login, $user ) {

        if ( $this->user_just_registered( $user ) ){

            //Create password
            $title = "HOMI: Νέο Όνομα χρήστη";

        }
        else {

            $title = "HOMI: Αλλαγή κωδικού";

        }

        return $title;

    }




    /**
     * Returns the message body for the password reset mail.
     * Called through the retrieve_password_message filter.
     *
     * @param string  $message      Default mail message.
     * @param string  $key          The activation key.
     * @param string  $user_login   The username for the user.
     * @param WP_User $user         WP_User object.
     *
     * @return string   The mail message to send.
     */
    public function resetPasswordEmailMessage( $message, $key, $user_login, $user ) {

        $password_change_url = home_url( "wp-login.php?action=rp&key=$key&lang=el&login=" . rawurlencode( $user_login ), 'login' );

        if ( $this->user_just_registered( $user ) ){

            $templateHandler = new HomiNewUserTemplate();
            $msg = $templateHandler->get_template( $user, $password_change_url );

        }
        else {

            $templateHandler = new HomiPasswordChangeTemplate();
            $msg = $templateHandler->get_template( $user, $password_change_url );

        }


        return $msg;

    }



    /**
     * Set the custom template for password reset
     * In order for this code to work you have to create a page on
     * the wordpress site with the name set in the PASSWORD_RESET_URL constant
     *
     * @return void
     */
    public function customResetPasswordPage(){

        global $TRP_LANGUAGE;

        if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) {

            // Verify key / login combo
            $user = check_password_reset_key( $_REQUEST['key'], $_REQUEST['login'] );

            if ( ! $user || is_wp_error( $user ) ) {

                $redirect_url = ( !empty( $TRP_LANGUAGE ) && $TRP_LANGUAGE !== 'en'?  home_url( 'el/' . self::PASSWORD_LOST_URL ) : home_url( self::PASSWORD_LOST_URL ) );
                $redirect_url = ( $user && $user->get_error_code() === 'expired_key' ? add_query_arg( 'errors', 'expiredkey', $redirect_url ) : add_query_arg( 'errors', 'invalidkey', $redirect_url ) );


            }
            else {

                $redirect_url = ( !empty( $TRP_LANGUAGE ) && $TRP_LANGUAGE !== 'en'?  home_url( 'el/' . self::PASSWORD_RESET_URL ) : home_url( self::PASSWORD_RESET_URL ) );
                $redirect_url = add_query_arg( 'login', esc_attr( $_REQUEST['login'] ), $redirect_url );
                $redirect_url = add_query_arg( 'key', esc_attr( $_REQUEST['key'] ), $redirect_url );
                $redirect_url = add_query_arg( 'lang', esc_attr( $_REQUEST['lang'] ), $redirect_url );

            }

            wp_redirect( $redirect_url );
            exit;

        }
        else if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {

            $rp_key = $_REQUEST['rp_key'];
            $rp_login = $_REQUEST['rp_login'];

            $user = check_password_reset_key( $rp_key, $rp_login );

            if ( ! $user || is_wp_error( $user ) ) {

                // If the reset key sent to the email is invalid or has expired
                // then redirect user to the Password Lost page and display a message

                $redirect_url = ( !empty( $TRP_LANGUAGE ) && $TRP_LANGUAGE !== 'en'?  home_url( 'el/' . self::PASSWORD_LOST_URL ) : home_url( self::PASSWORD_LOST_URL ) );
                $redirect_url = ( $user && $user->get_error_code() === 'expired_key' ? add_query_arg( 'error', 'expiredkey', $redirect_url ) : add_query_arg( 'error', 'invalidkey', $redirect_url ) );

                wp_redirect( $redirect_url );
                exit;

            }

            if ( isset( $_POST['pass1'] ) && !empty( $_POST['pass1'] ) ) {

                if ( $_POST['pass1'] != $_POST['pass2'] ) {

                    // If Passwords don't match redirect user to reset password page and display the error message
                    $redirect_url = ( !empty( $TRP_LANGUAGE ) && $TRP_LANGUAGE !== 'en'?  home_url( 'el/' . self::PASSWORD_RESET_URL ) : home_url( self::PASSWORD_RESET_URL ) );
                    $redirect_url = add_query_arg( 'key', $rp_key, $redirect_url );
                    $redirect_url = add_query_arg( 'login', $rp_login, $redirect_url );
                    $redirect_url = add_query_arg( 'error', 'password_reset_mismatch', $redirect_url );

                    wp_redirect( $redirect_url );
                    exit;

                }


                //If passwords are same and not empty do the password reset
                //Send a confirmation email to the user and redirect the user to the login page
                //The password=changed param is added to the Login url to display the message

                reset_password( $user, $_POST['pass1'] );

                $emailUserController = new EmailUserController();
                $emailUserController->send_successful_pass_reset_email( $user );

                $redirect_url = ( !empty( $TRP_LANGUAGE ) && $TRP_LANGUAGE !== 'en'?  home_url( 'el/' . self::PASSWORD_LOGIN_URL ) : home_url( self::PASSWORD_LOGIN_URL ) );
                $redirect_url = add_query_arg( 'password', 'changed', $redirect_url );
                $redirect_url = add_query_arg( 'e', base64_encode( $user->user_email ) , $redirect_url );

                wp_redirect( $redirect_url );

            }
            else {

                //If Password is empty redirect user to reset password page and display the error message
                $redirect_url = home_url( self::PASSWORD_RESET_URL );
                $redirect_url = add_query_arg( 'key', $rp_key, $redirect_url );
                $redirect_url = add_query_arg( 'login', $rp_login, $redirect_url );
                $redirect_url = add_query_arg( 'error', 'password_reset_empty', $redirect_url );

                wp_redirect( $redirect_url );
                exit;

            }

            exit;
        }

    }



    public function displayMessages( $attributes ){


        if ( count( $attributes['errors'] ) > 0 ) : ?>

            <?php foreach ( $attributes['errors'] as $error ) : ?>

                <div class="card lost-password-message">

                    <div class="lost-password-message-icon error left">
                        <i class="fas fa-exclamation"></i>
                    </div>

                    <?php echo $error; ?>

                </div>

            <?php endforeach; ?>

        <?php endif; ?>

        <?php if ( $attributes['lost_password_sent'] ) : ?>

            <div class="card lost-password-message">

                <div class="lost-password-message-icon success left">
                    <i class="fas fa-check"></i>
                </div>

                <?php _e( 'An email has been sent to the email address you provided to reset your password.', Homi_Addons::PLUGIN_NAME ); ?>
            </div>

        <?php endif; ?>

        <?php
    }


    public function passwordResetForm( $attributes ){

        global $TRP_LANGUAGE;
        ?>

        <svg class="curved-divider curved-bottom-left" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="590 165.4 1599 265.9" xml:space="preserve">
        <g id="Design-1">
            <g id="landing-page-1" transform="translate(-1.000000, -660.000000)">
                <g id="Group-19" transform="translate(1.000000, 660.000000)">
                    <path id="Rectangle_3_" fill="#075BC1" d="M2189.1,165.4l0,225.9c-202.1-53.3-468.6-53.3-799.6,0c-330.9,53.3-597.5,53.3-799.6,0V165.4L2189.1,165.4z"></path>
                </g>
            </g>
        </g>
        </svg>


        <section id="pageHeader" class="row no-margin-bottom padding-top-80 padding-bottom-50">

            <div class="container">

                <div class="col s12">

                    <?php $this->displayMessagesReset( $attributes ); ?>

                    <div class="login-card card center padding-bottom-50 padding-top-30 <?php echo( isset( $attributes['password_changed'] ) ? 'password-changed' : '' ); ?>">

                        <div class="brand-logo">

                            <?php echo wp_get_attachment_image( 16981, 'medium'); ?>

                        </div>

                        <div id="password-reset-form" class="widecolumn">

                            <h1><?php _e( 'Create a New Password', Homi_Addons::PLUGIN_NAME ); ?></h1>

                            <p class="account-page-description">
                                <?php
                                _e(
                                    "Create a strong password for your account. Your new password should be at least six characters long. 
                                    To make it stronger, you can use upper and lower case letters, numbers, and symbols like ! \" ? $ % ^ & ).",
                                    Homi_Addons::PLUGIN_NAME
                                );
                                ?>
                            </p>

                            <form name="resetpassform" id="resetpassform" action="<?php echo site_url( 'wp-login.php?action=resetpass' ); ?>" method="post" autocomplete="off">

                                <input type="hidden" id="user_login" name="rp_login" value="<?php echo esc_attr( $attributes['login'] ); ?>" autocomplete="off" />
                                <input type="hidden" name="rp_key" value="<?php echo esc_attr( $attributes['key'] ); ?>" />

                                <div class="col s12">

                                    <div class="input-field">

                                        <label for="pass1">
                                            <?php echo ( $TRP_LANGUAGE === 'el' ? 'Νέος Κωδικός' : 'New Password'); ?>
                                        </label>
                                        <input type="password" name="pass1" id="pass1" class="input" size="20" required value="" autocomplete="new-password" />

                                    </div>

                                </div>

                                <div class="col s12">

                                    <div class="input-field">

                                        <label for="pass2">
                                            <?php echo ( $TRP_LANGUAGE === 'el' ? 'Επανάληψη Νέου Κωδικού' : 'Repeat New Password'); ?>
                                        </label>
                                        <input type="password" name="pass2" id="pass2" class="input" size="20" required value="" autocomplete="off" />

                                    </div>

                                </div>

                                <div class="col s12 reset-button-wrapper disabled">
                                    <button id="resetpass-button" type="submit" name="submit" class="lostpassword-button btn-primary with-icon apto-blue disabled">
                                        <?php _e( 'Create new Password', Homi_Addons::PLUGIN_NAME ); ?>
                                    </button>
                                </div>

                            </form>

                        </div>

                        <div class="clearfix"></div>

                    </div>

                </div>

            </div>

        </section>


        <?php

    }


    public function displayMessagesReset( $attributes ){


        if ( isset( $attributes['errors'] ) && count( $attributes['errors'] ) > 0 ) : ?>

            <?php foreach ( $attributes['errors'] as $error ) : ?>
                <div class="card lost-password-message">

                    <div class="lost-password-message-icon error left">
                        <i class="fas fa-exclamation"></i>
                    </div>

                    <?php echo $error; ?>

                </div>
            <?php endforeach; ?>

        <?php endif; ?>

        <?php if( isset( $attributes['password_changed'] ) ): ?>

            <div class="card lost-password-message">

                <div class="lost-password-message-icon success left">
                    <i class="fas fa-check"></i>
                </div>

                <?php _e( 'Your password has been reset. Login with your new credentials.', Homi_Addons::PLUGIN_NAME ); ?>

            </div>

        <?php endif; ?>

        <?php
    }



}
