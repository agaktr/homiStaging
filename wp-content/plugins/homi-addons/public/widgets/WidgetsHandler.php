<?php


class WidgetsHandler
{


    function register_custom_widgets() {
        register_widget( 'ScheduleTourWidget' );
        register_widget( 'MessageWidget' );
        register_widget( 'ValuationPromoBox' );
        register_widget( 'SellPropertyPromo' );
    }

}
