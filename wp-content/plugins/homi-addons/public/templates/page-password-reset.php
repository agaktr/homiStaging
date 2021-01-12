<?php


get_header();

$passwordResetHandler = new HomiPasswordHandler();

if ( ( isset( $_REQUEST['login'] ) && isset( $_REQUEST['key'] ) ) ) {

    $attributes['login'] = $_REQUEST['login'];
    $attributes['key'] = $_REQUEST['key'];

    // Error messages
    $errors = array();

    if ( isset( $_REQUEST['error'] ) ) {

        $error_codes = explode( ',', $_REQUEST['error'] );

        foreach ( $error_codes as $code ) {
            $errors []= $passwordResetHandler->get_error_message( $code );
        }
    }

    $attributes['errors'] = $errors;

    $passwordResetHandler->passwordResetForm( $attributes );

}
else if( isset( $_REQUEST['password'] ) && $_REQUEST['password'] === 'changed' ){

    $attributes['password_changed'] = true;
    $passwordResetHandler->passwordResetForm( $attributes );

}
else {

    echo __( 'Invalid password reset link.', Homi_Addons::PLUGIN_NAME );

}

get_footer();
