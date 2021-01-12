<?php


class ctaButtonsShortcodes {


    public function registerShortcodes(){

        add_shortcode('homi-cta-btn', array( $this, 'homiCtaBtn') );

    }


    public function homiCtaBtn( $atts ) {

        $a = shortcode_atts( array(
            'type' => 'landlord-advantage',
        ), $atts );

        $ctaButtonsController = new ctaButtonsController();

        ob_start();

        $ctaButtonsController->displayCTA(  $a['type'] );

        return ob_get_clean();

    }

}
