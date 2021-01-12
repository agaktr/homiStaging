<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 01/04/16
 * Time: 5:11 PM
 */
$terms_conditions = houzez_option('login_terms_condition');
$facebook_login = houzez_option('facebook_login');
$yahoo_login = houzez_option('yahoo_login');
$google_login = houzez_option('google_login');
$enable_password = houzez_option('enable_password');
$user_show_roles = houzez_option('user_show_roles');
$show_hide_roles = houzez_option('show_hide_roles');

$forms_terms = houzez_option('agent_forms_terms');
$forms_terms_text = houzez_option('agent_forms_terms_text');

$allowed_html_array = array(
    'a' => array(
        'href' => array(),
        'title' => array()
    )
);
?>
<div class="tab-content">
    <div class="tab-pane fade in active">
        <div id="houzez_messages" class="houzez_messages message"></div>
        <form>
            <div class="form-group field-group">
                <div class="input-user input-icon">
                    <input id="login_username" name="username" placeholder="<?php esc_html_e('Username or Email','houzez'); ?>" type="text" />
                </div>
                <div class="input-pass input-icon">
                    <input id="password" name="password" placeholder="<?php esc_html_e('Password','houzez'); ?>" type="password" />
                </div>
            </div>

            <?php get_template_part('template-parts/google', 'reCaptcha'); ?>

            <div class="forget-block clearfix">
                <div class="form-group pull-left">
                    <div class="checkbox">
                        <label>
                            <input name="remember" id="remember" type="checkbox">
                            <?php esc_html_e( 'Remember me', 'houzez' ); ?>
                        </label>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#pop-reset-pass"><?php esc_html_e( 'Lost your password?', 'houzez' ); ?></a>
                </div>
            </div>

            <?php wp_nonce_field( 'houzez_login_nonce', 'houzez_login_security' ); ?>
            <input type="hidden" name="action" id="login_action" value="houzez_login">
            <button type="submit" class="fave-login-button btn btn-primary btn-block"><?php esc_html_e('Login','houzez');?></button>
        </form>
        <?php if( $facebook_login != 'no' || $google_login != 'no' || $yahoo_login != 'no' ) { ?>
            <hr>
            <?php if( $facebook_login != 'no' ) { ?>
                <button class="facebook-login btn btn-social btn-bg-facebook btn-block"><i class="fa fa-facebook"></i> <?php esc_html_e( 'login with facebook', 'houzez' ); ?></button>
            <?php } ?>
            <?php if( $yahoo_login != 'no' ) { ?>
                <button class="yahoo-login btn btn-social btn-bg-yahoo btn-block"><i class="fa fa-yahoo"></i> <?php esc_html_e( 'login with yahoo', 'houzez' ); ?></button>
            <?php } ?>
            <?php if( $google_login != 'no' ) { ?>
                <button class="google-login btn btn-social btn-bg-google-plus btn-block"><i class="fa fa-google-plus"></i> <?php esc_html_e( 'login with google', 'houzez' ); ?></button>
            <?php } ?>
        <?php } ?>
    </div>

    <div class="tab-pane fade">
        
		<a href="<?php echo wp_registration_url(); ?>">
		
			Register
		
		</a>
		
    </div>

</div>
