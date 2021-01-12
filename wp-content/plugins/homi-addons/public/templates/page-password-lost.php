<?php
get_header();

global $TRP_LANGUAGE;
$passwordResetHandler = new HomiPasswordHandler();

// Check if the user just requested a new password
$attributes['lost_password_sent'] = isset( $_REQUEST['checkemail'] ) && $_REQUEST['checkemail'] == 'confirm';

$attributes['errors'] = array();

if ( isset( $_REQUEST['errors'] ) ) {

    $error_codes = explode( ',', $_REQUEST['errors'] );



    foreach ( $error_codes as $error_code ) {

        $attributes['errors'] []= $passwordResetHandler->get_error_message( $error_code );

    }

}

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

                <?php $passwordResetHandler->displayMessages( $attributes ); ?>

                <div class="login-card card center padding-bottom-50 padding-top-30 <?php echo ( isset( $_GET['checkemail'] ) &&  $_GET['checkemail'] === 'confirm'  ? 'password-email-sent': ''); ?>">

                    <div class="brand-logo">

                        <?php echo wp_get_attachment_image( 16981, 'medium'); ?>

                    </div>

                    <div id="password-lost-form" class="widecolumn">

                        <h1><?php _e( 'Forgot Your Password?', Homi_Addons::PLUGIN_NAME ); ?></h1>

                        <p class="account-page-description">
                            <?php
                            _e(
                                "Locked out? Enter your email address and we'll send instructions to reset your password and get you back on track.",
                                Homi_Addons::PLUGIN_NAME
                            );
                            ?>
                        </p>

                        <form id="lostpasswordform" action="https://homi.com.gr/wp-login.php/?action=lostpassword" method="post" class="col s12">

                            <input type="hidden" name="current_lang" value="<?php echo $TRP_LANGUAGE; ?>">

                            <div class="col s12">

                                <div class="input-field">

                                    <label for="user_login">Your email</label>
                                    <input type="text" name="user_login" id="user_login" placeholder="<?php _e( 'Email address', Homi_Addons::PLUGIN_NAME ); ?>">

                                </div>

                            </div>

                            <div class="col s12">

                                <button type="submit" name="submit"  class="lostpassword-button btn-primary with-icon apto-orange">
                                    Send me instructions
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

get_footer();
