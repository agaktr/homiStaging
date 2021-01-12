<?php


class HomiTranslateController
{

    public function trpc_ignore_url( $translated_url, $url, $language, $a_href ){

        $link_to_ignore = 'https://homi.com.gr/wp-login.php';
        if ( strpos( $url, $link_to_ignore) !== false ){
            return $url;
        }

        $link_to_ignore = 'https://homi.com.gr/wp-admin';
        if ( strpos( $url, $link_to_ignore) !== false ){
            return $url;
        }

        $link_to_ignore = 'https://homi.com.gr/#TRPLINKPROCESSED';
        if ( strpos( $url, $link_to_ignore) !== false ){
            return $url;
        }

        $link_to_ignore = 'https://homi.com.gr/wp-login.php?action=resetpass';
        if ( strpos( $url, $link_to_ignore) !== false ){
            return $url;
        }
        $link_to_ignore = 'https://homi.com.gr/el/wp-login.php/?action=resetpass';
        if ( strpos( $url, $link_to_ignore) !== false ){
            return $url;
        }

        return $translated_url;

    }


    public function trpc_no_stranslate_selectors($selectors_array, $language){
        $selectors_array[] = '#resetpassform';
        return $selectors_array;
    }

}
