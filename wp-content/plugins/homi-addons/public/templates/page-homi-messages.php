<?php
get_header();

$messagesController = new MessagesController();
$conversation_id    = ( isset( $_GET['fep_id'] ) ? $_GET['fep_id'] : false );

$message = array();

$message['message_title'] = 'Programmatically send message';
$message['message_content'] = 'Message sent programmatically';
$message['mgs_status'] = 'publish';
$message['mgs_parent'] = 0;
$message['message_to_id'] = MessagesController::HOMI_TEAM_USER_ID;

//$test = fep_send_message( $message );
//var_dump( $test );
?>




<section id="homiMessages" class="row homi-row">

    <div class="container">

        <div class="col l9 s12">

            <?php echo do_shortcode('[front-end-pm]'); ?>

        </div>

        <div class="col l3 s12">

            <div class="messages-sidebar-widgets">

                <?php if( isset( $_GET['fep_id'] ) ): ?>

                <?php echo $messagesController->display_messages_sidebar_widgets( $conversation_id ); ?>

                <?php endif; ?>

            </div>

        </div>

    </div>

</section>


<?php
get_footer();
