<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 23/11/2019
 * Time: 6:25 μμ
 */

class MessagesController
{

    const HOMI_TEAM_USER_ID = 126329866;
    const AJAX_LOAD_MESSAGE_WIDGETS = 'ajax_load_message_widgets';

    public function messages_nav_menu_item( $item_output, $item ) {

        //   var_dump($item_output, $item);
        if ('Messages' == $item->title) {

            return '<a class="messages-count" href="'. fep_query_url( 'messagebox' ) .'">Messages<span class="fep_unread_message_count new-messages-'.fep_get_new_message_number().'"></span></a>';

        }

        return $item_output;

    }



    public function get_participants_seller_id( $property_id ){

        return intval( get_post_field( 'post_author', $property_id ) );

    }


    public function get_participants_buyer_id( $participants, $property_id ){

        foreach( $participants as $participant ){

           if( intval( $participant ) !== self::HOMI_TEAM_USER_ID && intval( $participant ) !== $this->get_participants_seller_id( $property_id ) ){

               return $participant;

           }

        }

        return false;

    }


    public function get_participants_admin_id(){

        return self::HOMI_TEAM_USER_ID;

    }

    public function display_messages_sidebar_widgets( $conversation_id ){

        $current_message    = fep_get_message( $conversation_id );
        $participants       = fep_get_participants( $conversation_id );
        $property_id        = $current_message->mgs_title;
        $admin              = get_user_by( 'ID', $this->get_participants_admin_id() );
        $buyer              = get_user_by( 'ID', $this->get_participants_buyer_id(  $participants, $property_id ) );
        $seller             = get_user_by( 'ID', $this->get_participants_seller_id( $property_id ) );
        $current_user       = wp_get_current_user();

        ob_start();
        ?>

        <div class="card messages-sidebar-widget widget-property-info">

            <div class="property-image">

                <?php echo get_the_post_thumbnail( $property_id, 'full' ); ?>

                <div class="property-price">
                    €
                    <?php echo get_post_meta( $property_id, 'fave_property_price', true ); ?>
                </div>
            </div>

            <div class="widget-content">

                <div class="property-title">
                    <?php echo get_the_title( $property_id ); ?>
                </div>

                <div class="property-address">
                    <?php echo get_post_meta( $property_id, 'fave_property_address', true ); ?>
                </div>

                <a href="<?php echo get_the_permalink( $property_id ); ?>" class="fep-button view-property-link">
                    <?php echo __('View Property', Homi_Addons::PLUGIN_NAME ); ?>
                </a>

            </div>

            <div class="clearfix"></div>

        </div>

        <?php if( $current_user->ID !== $seller->ID ): ?>

            <div class="card messages-sidebar-widget widget-seller-info">

                <div class="author-wrapper">

                    <div class="author-avatar">
                        <?php echo get_avatar( $seller->ID, 'thumbnail' ); ?>
                    </div>

                    <div class="author-info">

                        <div class="author-name">
                            <?php echo $seller->first_name . ' ' . $seller->last_name; ?>
                        </div>

                        <div class="author-role">
                            <?php echo __('Seller of the Property', Homi_Addons::PLUGIN_NAME ); ?>
                        </div>

                    </div>

                </div>

                <div class="clearfix"></div>

            </div>

        <?php endif; ?>

        <?php if( $current_user->ID !== $buyer->ID ): ?>

            <div class="card messages-sidebar-widget widget-buyer-info">

                <div class="author-wrapper">

                    <div class="author-avatar">
                        <?php echo get_avatar( $buyer->ID, 'thumbnail' ); ?>
                    </div>

                    <div class="author-info">

                        <div class="author-name">
                            <?php echo $buyer->first_name . ' ' . $buyer->last_name; ?>
                        </div>

                        <div class="author-role">
                            <?php echo __('Potential Buyer', Homi_Addons::PLUGIN_NAME ); ?>
                        </div>

                    </div>

                </div>

                <div class="clearfix"></div>

            </div>

        <?php endif; ?>

        <?php if( $current_user->ID !== $admin->ID ): ?>

            <div class="card messages-sidebar-widget widget-buyer-info">

                <div class="author-wrapper">

                    <div class="author-avatar">
                        <?php echo get_avatar( $admin->ID, 'thumbnail' ); ?>
                    </div>

                    <div class="author-info">

                        <div class="author-name">
                            <?php echo $admin->first_name . ' ' . $admin->last_name; ?>
                        </div>

                        <div class="author-role">
                            <?php echo __('Platform Administrator', Homi_Addons::PLUGIN_NAME ); ?>
                        </div>

                    </div>




                </div>

                <div class="clearfix"></div>

            </div>

        <?php endif; ?>

        <?php

        return ob_get_clean();

    }


    public function ajax_load_message_widgets(){

        $message_id = $_POST['message_id'];

        $result = $this->display_messages_sidebar_widgets( $message_id );

        wp_send_json( $result );
        wp_die();

    }


    public function get_property_by_message_title( $msg_title ){

        if( is_numeric( $msg_title ) ){

            $property_id = $msg_title;
            ?>
            <a href="<?php echo get_the_permalink( $property_id ); ?>">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve"><style type="text/css" scoped="">.ht0{fill:#1259AF;}.ht1{fill:#034382; stroke: none;}.ht2{fill:#FFFFFF;}</style><g><polygon class="ht0" points="29.6,119 29.6,278 73.3,278 73.3,141.8 160.7,80.8 255,142.6 255,278 298.7,278 298.7,119 159.9,28.1 "></polygon><polygon class="ht0" points="195.6,278 195.6,160.9 125.7,160.9 125.7,278 68.6,315 139.9,315 "></polygon></g></svg>
                <?php echo __('Property', Homi_Addons::PLUGIN_NAME ); ?>: <?php echo $property_id; ?>
            </a>
            <?php
        }


    }



    public function after_new_message_callback( $message_id, $message, $new_message ){

        $email_message = '
            A new message has been sent on HOMI website.
            <br>
            <br>
            Click <a href="https://homi.com.gr/messages/?fepaction=viewmessage&fep_id='. $message_id .'&feppage=1&fep-filter=show-all">here</a> to view the message.
        ';

        wp_mail('appointments@homi.com.gr', 'Notification: New message on website', $email_message, EmailActionsConstants::EMAIL_HEADERS );

    }



}
