<?php


class ValuationPromoBox extends WP_Widget {

    function __construct() {

        parent::__construct(

        // Base ID of your widget
            'apto_valuation_promo_widget',

            // Widget name will appear in UI
            __('APTO: Valuation Promo Box', Homi_Addons::PLUGIN_NAME ),

            // Widget description
            array( 'description' => __( 'This widget displays a box that links to the free valuation page.', 'wpb_widget_domain' ), )
        );

    }

    // Creating widget front-end
    public function widget( $args, $instance ) {

        $title = apply_filters( 'widget_title', $instance['title'] );

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];

        $this->display_widget_content();

        echo $args['after_widget'];

    }


    // Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'wpb_widget_domain' );
        }

        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }




    public function display_widget_content(){

        ?>

        <img src="https://homi.com.gr/wp-content/uploads/2020/02/HOMI-realeastate-company-logo.png" alt="HOMI logo">

        <h3>
            Get your <span>FREE</span>
            <br>property valuation
        </h3>

        <p>
            Discover how much your property is worth so that you can get more offers, sell your property faster and get your money sooner.
        </p>

        <a href="https://homi.com.gr/property-valuation/" class="homi-btn">
            FREE VALUATION
        </a>

        <?php

    }

}
