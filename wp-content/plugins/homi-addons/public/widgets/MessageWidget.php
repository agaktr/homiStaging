<?php


class MessageWidget extends WP_Widget {

    function __construct() {
        parent::__construct(

        // Base ID of your widget
            'apto_message_widget',

            // Widget name will appear in UI
            __('APTO: Send Message Form', Homi_Addons::PLUGIN_NAME ),

            // Widget description
            array( 'description' => __( 'This widget displays a form for sending a message to the seller of a property.', 'wpb_widget_domain' ), )
        );

    }

    // Creating widget front-end
    public function widget( $args, $instance ) {

        $title = apply_filters( 'widget_title', $instance['title'] );

        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];

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

        $fepShortcodes = new Fep_Shortcodes();

        $atts = array(
            'to'		=> '{current-post-author}',
            'subject'	=> get_queried_object_id(),
            'heading'	=> '',
        );

        ?>

        <div id="messageSeller" class="widget-content">

            <div class="homi-message-form">

                <?php  echo $fepShortcodes->new_message_form( $atts ); ?>

            </div>

        </div>

        <?php

    }

}

