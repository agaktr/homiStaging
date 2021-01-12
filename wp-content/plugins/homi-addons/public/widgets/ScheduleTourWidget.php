<?php


class ScheduleTourWidget  extends WP_Widget {

    private $viewings;
    private $viewingsMeta;

    function __construct() {
        parent::__construct(

            // Base ID of your widget
            'apto_schedule_tour',

            // Widget name will appear in UI
            __('APTO: Schedule Tour Widget', 'wpb_widget_domain'),

            // Widget description
            array( 'description' => __( 'This widget displays a form for scheduling a viewing for a property.', 'wpb_widget_domain' ), )
        );

        $this->viewings         = new Homi_Addons_Tour_Request();
        $this->viewingsMeta     = Homi_Addons_Tour_Request::META_FIELDS_SLUG;

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

        $post_id        = false;
        $seller_id      = false;
        $queried_object = get_queried_object();
        $tourRequests   = new Homi_Addons_Tour_Request();

        if ( $queried_object ) {

            $post_id    = $queried_object->ID;
            $seller_id  = get_post_field( 'post_author', $post_id );

        }


        ?>

        <div class="schedule_tour interactive-form no-tracking">

            <?php $this->preloader(); ?>

            <?php if( $this->can_schedule_tour() ): ?>

                <?php if( $this->has_pending_tour_request( $post_id ) ): ?>

                    <div class="already-schedule">

                        <?php echo __( 'There\'s already a pending tour request for this property. Therefore you cannot schedule another tour for this property before the seller confirms or rejects your current request.', Homi_Addons::PLUGIN_NAME ); ?>

                    </div>

                <?php elseif( $this->has_confirmed_tour_request( $post_id ) ): ?>

                    <div class="already-schedule">

                        <?php echo __( 'Your tour request for this property has been confirmed.', Homi_Addons::PLUGIN_NAME ); ?>

                    </div>

                <?php endif; ?>

                <div class="schedule-steps <?php echo( $this->has_pending_tour_request( $post_id ) ? 'already-schedule' : '' ); ?>">

                    <form action="<?php echo site_url( '/' . InteractiveFormActions::AFTER_SCHEDULE_TOUR_REQUEST_URL ); ?>" method="POST" enctype="multipart/form-data">

                        <input type="hidden" name="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['property']; ?>" value="<?php echo $post_id; ?>">
                        <input type="hidden" name="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['request_status']; ?>" value="pending">
                        <input type="hidden" name="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['property_seller']; ?>" value="<?php echo $seller_id; ?>">
                        <input type="hidden" id="request_id" name="request_id" value="">
                        <input type="hidden" id="interactive-form-request" name="interactive-form-request" value="<?php echo InteractiveForm::FORM_TYPE_VIEWINGS; ?>">
                        <input type="hidden" id="new-user-id" name="new-user-id" value="">

                        <?php $this->calendar( $post_id ); ?>
                        <?php $this->contact(); ?>
                        <?php $this->thank_you(); ?>

                    </form>

                </div>

            <?php else: ?>

                <div class="schedule-message no-logged-in">
                    You have to login as a buyer in order to Schedule a viewing for <?php echo get_the_title( $post_id ); ?>.
                </div>

                <?php $this->display_availability_calendar( $post_id, Homi_Addons_Tour_Request::META_FIELDS_SLUG['tour_date'], 'disabled', array('items' => 5 )  ); ?>


            <?php endif; ?>

            <div class="clearfix"></div>

        </div>

        <?php if( !$this->can_schedule_tour() ): ?>

            <div class="steps-buttons-wrapper">

                <a id="loginBtn" href="<?php echo site_url('register'); ?>" class="btn-next btn-primary">
                    <?php echo __( 'Book a viewing by logging in', Homi_Addons::PLUGIN_NAME ); ?>
                </a>

            </div>

        <?php endif; ?>

        <?php

    }


    public function calendar( $post_id ){

        ?>

        <div id="stepCalendar" class="slider-step first-step step active-step" data-next-step="contactInfo">

            <div class="step-content">

                <div class="schedule-message">
                    Select your preferred date and time to schedule a viewing for the property.
                </div>

                <?php $extra_class = ( !$this->can_schedule_tour() ? 'disabled' : ''); ?>
                <?php $this->display_availability_calendar( $post_id, Homi_Addons_Tour_Request::META_FIELDS_SLUG['tour_date'], $extra_class, array('items' => 5 )  ); ?>

                <div class="steps-buttons-wrapper">
                    <button class="btn-next btn-success btn-primary disabled">
                        <?php echo __('Continue', Homi_Addons::PLUGIN_NAME); ?>
                        <i class="fa fa-chevron-right"></i>
                    </button>
                </div>

            </div>

        </div>

        <?php

    }


    private function can_schedule_tour(){

        return true;
//        if( !is_user_logged_in() ){
//            return false;
//        }
//
//        if( current_user_can('administrator') ){
//            return true;
//        }
//
//        $user = wp_get_current_user();
//
//        if ( in_array( Homi_Addons::BUYER_ROLE, (array) $user->roles ) || in_array( Homi_Addons::SELLER_ROLE, (array) $user->roles ) ) {
//
//            return true;
//
//        }
//        else {
//
//            return false;
//
//        }

    }

    private function contact(){

        $current_user = wp_get_current_user();

        ?>

        <div id="contactInfo" class="slider-step step" data-next-step="stepThankYou" data-back-to="stepCalendar">

            <div class="step-content">

                <div class="viewing-selected-datetime center">

                    <p>
                        You are about to book a viewing for:
                    </p>

                    <div class="viewing-selected-date">

                    </div>

                    <div class="viewing-selected-time">

                    </div>

                </div>

                <div class="schedule-message">
                    <?php echo __( 'Confirm your contact information in order to schedule a viewing for the property.', Homi_Addons::PLUGIN_NAME ); ?>
                </div>

                <div class="input-field col s12">

                    <label for="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_first_name']; ?>">
                        <?php echo __('First Name', Homi_Addons::PLUGIN_NAME); ?>
                    </label>
                    <input type="text" id="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_first_name']; ?>"
                           name="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_first_name']; ?>"
                           value="<?php echo $current_user->last_name; ?>" required>

                </div>
                <div class="input-field col s12">

                    <label for="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_last_name']; ?>">
                        <?php echo __('Last Name', Homi_Addons::PLUGIN_NAME); ?>
                    </label>
                    <input type="text" id="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_last_name']; ?>"
                           name="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_last_name']; ?>"
                           value="<?php echo $current_user->last_name; ?>" required>

                </div>

                <div class="input-field col s12">

                    <?php $phone = get_user_meta( $current_user->ID, 'fave_author_phone', true ); ?>

                    <label for="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_phone']; ?>">
                        <?php echo __('Phone Number', Homi_Addons::PLUGIN_NAME); ?>
                    </label>
                    <input type="number" id="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_phone']; ?>"
                           name="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_phone']; ?>"
                           value="<?php echo $phone; ?>"
                           onKeyPress="if(this.value.length===10) return false;" required>

                    <span class="phone-code">+30</span>

                    <svg version="1.1" id="wrongInput" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.971 47.971"  xml:space="preserve"><g><path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    <svg version="1.1" id="validIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><g><g><path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7C514.5,101.703,514.499,85.494,504.502,75.496z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                    <div class="wrong-input-message">
                        <?php echo __( 'This is not a valid phone number', Homi_Addons::PLUGIN_NAME ); ?>
                    </div>

                </div>

                <div class="input-field col s12">

                    <label for="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_email']; ?>">
                        <?php echo __('Email', Homi_Addons::PLUGIN_NAME); ?>
                    </label>
                    <input type="email" id="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_email']; ?>"
                           name="<?php echo Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_email']; ?>"
                           value="<?php echo $current_user->user_email; ?>"
                           required>

                </div>

                <?php if ( !is_user_logged_in() ): ?>

                <div class="consent-item input-field col s12">

                    <label>
                        <input name="tcs_consent" type="checkbox" class="filled-in" required />
                        <span>
                                <?php echo __( 'I have read and agree with the ', Homi_Addons::PLUGIN_NAME ); ?>
                                <a href="<?php echo site_url('terms'); ?>" target="_blank">
                                    <?php echo __( 'Terms and Conditions', Homi_Addons::PLUGIN_NAME ); ?>
                                </a>
                            </span>
                    </label>

                </div>

                <div class="consent-item input-field col s12">

                    <label>
                        <input name="privacy_consent" type="checkbox" class="filled-in" required />
                        <span>
                                <?php echo __( 'I have read and agree with the ', Homi_Addons::PLUGIN_NAME ); ?>
                                <a href="<?php echo site_url('privacy-policy'); ?>" target="_blank">
                                    <?php echo __( 'Privacy Policy', Homi_Addons::PLUGIN_NAME ); ?>
                                </a>
                            </span>
                    </label>

                </div>

                <?php endif; ?>

                <div class="consent-item input-field col s12">

                    <label>
                        <input name="marketing_consent" type="checkbox" class="filled-in" />
                        <span>
                                Yes, I’d like to receive helpful resources like guides and blogs to help me with my property.
                            </span>
                    </label>

                </div>


                <div class="steps-buttons-wrapper">

                    <button class="btn-back btn-primary">
                        <?php echo __('Back', Homi_Addons::PLUGIN_NAME); ?>
                    </button>

                    <button id="scheduleTourBtn"  class="btn-next btn-submit btn-primary disabled">
                        <?php echo __('Schedule Viewing', Homi_Addons::PLUGIN_NAME); ?>
                    </button>

                </div>

            </div>

        </div>

        <?php

    }


    private function thank_you(){

        $this->preloader();
        ?>

        <div id="stepThankYou" class="slider-step" data-back-to="stepContact">

            <div class="steps-content">

                <div class="row">

                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve">
                        <g>
                            <polygon id="polygon1" style="fill:#1259AF;"  points="29.6,119 29.6,278 73.3,278 73.3,141.8 160.7,80.8 255,142.6 255,278 298.7,278 298.7,119 159.9,28.1"/>
                            <polygon id="polygon2" style="fill:#1259AF;" points="195.6,278 195.6,160.9 125.7,160.9 125.7,278 68.6,315 139.9,315 	"/>
                        </g>
                    </svg>

                    <div class="steps-title">
                        <?php echo __( 'Thank you for your interest in HOMI', Homi_Addons::PLUGIN_NAME ); ?>
                    </div>

                    <div class="col s12">

                        <div class="thank-you-message">

                        </div>

                    </div>

                </div>

            </div>

            <div class="steps-buttons-wrapper hide">

                <button class="btn-back btn-primary">
                    <i class="fa fa-chevron-left"></i>
                    <?php echo __('Back', Homi_Addons::PLUGIN_NAME); ?>
                </button>

            </div>

        </div>

        <?php
    }



    private function preloader(){
        ?>

        <div class="preloader-wrapper hide">

            <div class="preloader">

                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve">
                    <g>
                        <polygon id="polygon1" style="fill:#1259AF;"  points="29.6,119 29.6,278 73.3,278 73.3,141.8 160.7,80.8 255,142.6 255,278 298.7,278 298.7,119 159.9,28.1"/>
                        <polygon id="polygon2" style="fill:#1259AF;" points="195.6,278 195.6,160.9 125.7,160.9 125.7,278 68.6,315 139.9,315 	"/>
                    </g>
                </svg>

                <div class="preloader-text">
                    <?php echo __( 'Please wait while we are processing your information. You will also notify you via email for the process.', Homi_Addons::PLUGIN_NAME ); ?>
                </div>

            </div>

        </div>

        <?php
    }


    private function display_availability_calendar(  $post_id, $input_name, $extra_class, $options ){

        $sellerAvailabilityController   = new SellerAvailabilityController();
        $calendarController             = new CalendarController();
        $timestamp                      = strtotime( date('Y-m-d') );
        $daysRemaining                  = date('t', $timestamp ) -  date('j', $timestamp );
        $booked_date_times              = $sellerAvailabilityController->get_available_date_times( $post_id );
        $carouselItems                  = ( isset( $options['items'] ) && !empty( $options['items'] ) ? $options['items'] : 5 );
        ?>

        <div class="valuation-booking-wrapper <?php echo $extra_class; ?>">

            <div class="col s12 booking-header">

                <div class="current-month" data-monthDays="<?php echo $daysRemaining; ?>">

                    <?php if( $daysRemaining !== 0 ): ?>

                        <span id="<?php echo date('m'); ?>" class="first-month">
                            <?php echo date('F'); ?>
                        </span>

                    <?php endif; ?>

                    <span id="<?php echo date('m', strtotime( date('Y-m-01') . "+1 month" ) ); ?>" class="second-month <?php echo ( $daysRemaining !== 0 ? 'hide' : ''); ?>">
                        <?php echo date("F", strtotime( date('Y-m-01') . "+1 month" ) ); ?>
                    </span>

                </div>

            </div>

            <?php

            try {

                $begin      = new DateTime(  date('Y-m-d') );
                $end        = new DateTime( date("Y-m-d", strtotime( date('Y-m-d') . "+15 day" ) ) );
                $interval   = DateInterval::createFromDateString('1 day');
                $period     = new DatePeriod($begin, $interval, $end);

                $datetime = new DateTime('tomorrow');
                $tomorrow = $datetime->format('Y-m-d');

                $default_date_to_select = $tomorrow;
                ?>

                <div class="days-carousel owl-carousel owl-theme col s12"  data-carousel-items="<?php echo $carouselItems; ?>">

                    <?php foreach ( $period as $dt ):  ?>

                        <?php   /** @var $dt DateTime */ ?>

                        <div class="date-item
                            <?php echo ( $calendarController->is_day_available( $dt, $booked_date_times ) && $dt->format("Y-m-d") !== date('Y-m-d')  ? 'available' : 'unavailable' ); ?>"
                            <?php echo ( !$calendarController->is_day_available( $dt, $booked_date_times ) && $dt->format("Y-m-d") !== date('Y-m-d') ? 'title="Not Available"' : '' ); ?> >

                            <div class="day-label">
                                <?php echo $dt->format("D"); ?>
                            </div>

                            <label class="day-item checkbox-with-vector <?php echo ( $dt->format("Y-m-d") === $default_date_to_select ? 'selected' : ''); ?>"
                                   data-date="<?php echo $dt->format("Y-m-d"); ?>" data-date-formatted="<?php echo $dt->format("d/m/Y"); ?>">

                                <input type="radio" id="<?php echo $input_name; ?>" name="<?php echo $input_name; ?>" class="filled-in" value="<?php echo $dt->format("Y-m-d"); ?>"
                                    <?php echo ( $dt->format("Y-m-d") === $default_date_to_select ? 'checked' : ''); ?> required>

                                <span>
                                    <?php echo $dt->format("d"); ?>
                                </span>

                            </label>

                        </div>


                    <?php endforeach; ?>

                </div>

                <div class="timeslots__inner">

                    <?php foreach ( $period as $dt ):  ?>

                        <?php

                        /** @var $dt DateTime */

                        $daily_times = array();
                        if( isset( $booked_date_times['availability_' . $dt->format('m') . '_'. $dt->format('Y')][$dt->format('d')] ) ){

                            $daily_times = $booked_date_times['availability_' . $dt->format('m') . '_'. $dt->format('Y')][$dt->format('d')];

                        }

                        //Function to check if time is booked
                        //|| $sellerAvailabilityController->is_date_time_booked( $dt->format("Y-m-d"),$x, $post_id )
                        ?>

                        <div id="<?php echo $dt->format("Y-m-d"); ?>-timeslots" class="timeslots__slots <?php echo ( $dt->format("Y-m-d") !== $default_date_to_select ? 'hide' : ''); ?>">

                            <?php for ( $x = 0; $x <= ( count( CalendarController::TIMES_INDEX ) - 1 ); $x++ ) { ?>

                                <label class="timeslots__slot checkbox-with-vector <?php echo ( is_array( $daily_times ) && !in_array( $x, $daily_times)  ? 'unavailable' : ''); ?> "
                                    <?php echo ( is_array( $daily_times ) && !in_array( $x, $daily_times)  ? 'title="'. __('Not Available', Homi_Addons::PLUGIN_NAME ) .'"' : ''); ?> >

                                    <input type="radio" id="<?php echo $dt->format("Y-m-d"); ?>_times" name="<?php echo $dt->format("Y-m-d"); ?>_times" class="filled-in"
                                           value="<?php echo $x; ?>" data-time="<?php echo CalendarController::TIMES_INDEX[ $x ]; ?>" required >

                                    <span>
                                        <?php echo CalendarController::TIMES_INDEX[ $x ]; ?>
                                    </span>

                                </label>

                            <?php } ?>

                        </div>

                    <?php endforeach; ?>

                </div>

                <div class="legend col s12">

                    <div class="legend-item unavailable">
                        <?php echo __('Unavailable', Homi_Addons::PLUGIN_NAME ); ?>
                    </div>

                    <div class="legend-item available">
                        <?php echo __('Available', Homi_Addons::PLUGIN_NAME ); ?>
                    </div>

                </div>

                <?php

            } catch (Exception $e) {

            }

            ?>

        </div>

        <?php

    }


    private function has_confirmed_tour_request( $property_id ){

        if( is_user_logged_in() ) {

            $current_user   = wp_get_current_user();
            $user_id        = $current_user->ID;
            $args           = $this->viewings->get_buyer_requests( $user_id );

            $args['meta_query'] = array(
                'relation' => 'AND',
                array(
                    'key'       => $this->viewingsMeta['request_status'],
                    'value'     => 'confirmed',
                    'compare'   => '=',
                ),
                array(
                    'key'       => $this->viewingsMeta['tour_date'],
                    'value'     => date('Y-m-d'),
                    'compare'   => '>',
                ),
                array(
                    'key'       => $this->viewingsMeta['property'],
                    'value'     => $property_id,
                    'compare'   => '=',
                ),
            );

            $requests_query = new WP_Query($args);
            return $requests_query->found_posts > 0;

        }

        return false;

    }

    public function has_pending_tour_request( $property_id ){

        if( is_user_logged_in() ) {

            $current_user   = wp_get_current_user();
            $user_id        = $current_user->ID;
            $args           = $this->viewings->get_buyer_requests( $user_id );

            $args['meta_query'] = array(
                'relation' => 'AND',
                array(
                    'key'       => $this->viewingsMeta['request_status'],
                    'value'     => 'pending',
                    'compare'   => '=',
                ),
                array(
                    'key'       => $this->viewingsMeta['property'],
                    'value'     => $property_id,
                    'compare'   => '=',
                ),
                array(
                    'key'       => $this->viewingsMeta['tour_date'],
                    'value'     => date('Y-m-d'),
                    'compare'   => '>=',
                ),
            );

            $requests_query = new WP_Query( $args );
            return $requests_query->found_posts > 0;

        }

        return false;


    }

}
