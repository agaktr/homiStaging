<?php

get_header();
?>

    <svg class="curved-divider curved-bottom-left" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="590 165.4 1599 265.9" xml:space="preserve" style="position: absolute;top: -100px;z-index: 0;width: 100%;left: 0;">
<g id="Design-1">
    <g id="landing-page-1" transform="translate(-1.000000, -660.000000)">
        <g id="Group-19" transform="translate(1.000000, 660.000000)">
            <path id="Rectangle_3_" fill="#075BC1" d="M2189.1,165.4l0,225.9c-202.1-53.3-468.6-53.3-799.6,0c-330.9,53.3-597.5,53.3-799.6,0V165.4L2189.1,165.4z"></path>
        </g>
    </g>
</g>
</svg>

<section id="homiLogin" class="row no-margin-bottom padding-top-80 padding-bottom-50">

    <div class="col s12 center">

        <?php if( isset( $_GET['login'] ) && $_GET['login'] === 'failed'): ?>

            <div class="login-card failed-login card">
                The credentials you entered are invalid. If you forgot your password click <a href="<?php echo wp_lostpassword_url(); ?>">here</a> to reset it.
            </div>

        <?php endif; ?>

        <?php if( isset( $_GET['password'] ) && $_GET['password'] === 'changed'): ?>

            <div class="login-card failed-login card">

                <span class="lost-password-message-icon success">
                    <i class="fas fa-check"></i>
                </span>

                <?php _e( 'Your password has been changed successfully. Login with your new credentials.', Homi_Addons::PLUGIN_NAME ); ?>

            </div>

        <?php endif; ?>

        <div class="login-card card">

            <div class="brand-logo">

                <?php echo wp_get_attachment_image( 15024, 'medium'); ?>

            </div>

            <h1>
                Sign in to your account
            </h1>

            <p class="account-page-description">
                Welcome back! Login to access all the HOMI features.
            </p>

            <form action="<?php echo site_url( 'wp-login.php' ); ?>"  method="post">

                <?php if( isset( $_GET['redirect_to'] ) ): ?>
                 <input type="hidden" name="redirect_to" value="<?php echo $_GET['redirect_to']; ?>">
                <?php endif; ?>

                <div class="input-field col s12">
                    <label for="user_login">Email Address: </label>
                    <input type="text" name="log" id="user_login" class="validate" value="<?php echo (  isset( $_GET['e'] ) && !empty( $_GET['e'] ) ? base64_decode( $_GET['e'] ) : '' ); ?>" size="40" required>
                </div>

                <div class="input-field col s12">
                    <label for="user_pass">Password</label>
                    <input type="password" name="pwd" id="user_pass" class="validate"  value="" size="40" required>
                </div>

                <div class="input-field col s12 forgetmenot">
                    <label>
                        <input id="rememberme" name="rememberme" type="checkbox"  />
                        <span>
                           Remember me
                        </span>

                    </label>
                </div>

                <div class="input-field col s12 recaptcha-field">
                    <label>
                        <input id="recaptchaCheck" name="recaptchaCheck" type="checkbox" required />
                        <span>
                            <span class="running">Validating you are not a robot</span>
                            <span class="authenticated hide">Not a robot!!!</span>
                            <span class="not-authenticated hide">You are a robot</span>
                        </span>

                    </label>
                </div>

                <div class="col s12 center">
                    <button id="login-btn" type="submit" class="btn-primary apto-blue" name="apto-login" >
                        Login
                    </button>
                </div>

            </form>

            <div class="col s12 login-extra-links">

                <p>

                    Did you

                    <?php global $TRP_LANGUAGE;  ?>

                    <span class="hide">

                        <?php var_dump( $TRP_LANGUAGE); ?>

                    </span>

                    <a class="link-<?php echo $TRP_LANGUAGE; ?>" href="<?php echo ( $TRP_LANGUAGE === 'el' ? 'https://homi.com.gr/el/password-lost/' : site_url( HomiPasswordHandler::PASSWORD_LOST_URL ) ) ; ?>">
                        forget your password?
                    </a>

                </p>

                <p>

                      <span class="hide">

                        <?php var_dump( $TRP_LANGUAGE); ?>

                    </span>

                    Don't have an account?
                    <a class="link-<?php echo $TRP_LANGUAGE; ?>"  href="<?php echo home_url( 'register' ) ; ?>">
                        Register Now
                    </a>
                </p>

            </div>

        </div>

    </div>

</section>

<?php get_footer();


