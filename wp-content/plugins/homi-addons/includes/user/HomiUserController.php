<?php


class HomiUserController{

    public function force_login_user( $user_id, $redirect_url ){

        wp_set_current_user( $user_id );
        wp_set_auth_cookie( $user_id );
        $user = get_user_by( 'id', $user_id );
        do_action( 'wp_login', $user->user_login, $user );

        if( class_exists('WpFastestCache') ){

            $cache = new WpFastestCache();
            $cache->deleteCache( true );

        }

        wp_redirect( $redirect_url );
        exit;

    }


    public function build_username( $email ){

        $parts      = explode("@", $email);
        $username   = $parts[0];
        $counter    = 1;

        while(  username_exists( $username ) !== false ){

            $username = $username.$counter;
            $counter++;

        }

        return $username;

    }

}
