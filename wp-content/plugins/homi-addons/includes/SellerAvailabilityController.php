<?php


class SellerAvailabilityController {

    const PROPERTY_AVAILABILITY_PAGE_SLUG = 'property-availability';

    private $calendarController;


    /**
     * Initialize the class and its properties
     */
    public function __construct(){

        $this->calendarController = new CalendarController();

    }



    /**
     * Create a rewrite rule for pages to recognise calendar as query var
     * The calendar query var will be used to create the pages for property availability on the front end
     */
    public function wpd_add_my_endpoint(){
        add_rewrite_endpoint( 'calendar', EP_PAGES );
    }



    /**
     * After saving or deleting the calendar of a property redirect to prevent the form from being resubmitted
     * @param $post_id int
     */
    private function redirect_after_availability_action( $post_id ){

        wp_redirect( site_url( self::PROPERTY_AVAILABILITY_PAGE_SLUG . '/calendar/' .$post_id ) );
        exit();

    }



    /**
     * Handles the save and delete actions for property/seller availability
     * This code runs before headers are sent
     */
    public function property_availability_actions(){

        if( isset( $_POST['property_id'] ) ) {

            $post_id = $_POST['property_id'];

            if ( isset( $_POST['save_availability'] ) ) {

                $this->save_availability( $post_id );
                $this->redirect_after_availability_action( $post_id );

            }
            else if ( isset( $_POST['delete_availability'] ) ) {

                $this->delete_calendar( $post_id );
                $this->redirect_after_availability_action( $post_id );

            }

        }

    }



    /**
     * Saves the Property Calendar
     * @param $post_id int
     */
    public function save_availability( $post_id ){

        unset( $_POST['save_availability'] );
        unset( $_POST['property_id'] );
        unset( $_POST['delete_availability'] );

        $sorted_availability    = $this->calendarController->sort_date_times( $_POST );
        $months_saved           = array_keys( $sorted_availability );

        update_post_meta( $post_id, 'availability_index', $months_saved );

        foreach( $sorted_availability as $key => $value ){

            update_post_meta( $post_id, $key, $value );

        }

    }



    /**
     * Deletes the Property Calendar
     * @param $post_id int
     */
    public function delete_calendar( $post_id ){

        $availability_index = get_post_meta( $post_id, 'availability_index', true );

        delete_post_meta( $post_id, 'availability_index' );

        if( !empty( $availability_index ) ) {

            foreach  ($availability_index as $monthly_availability ) {

                delete_post_meta( $post_id,  $monthly_availability );

            }

        }

    }



    /**
     * Checks if the property's availability calendar has been set
     *
     * @param $property_id int
     * @return bool
     */
    public function has_availability_set( $property_id ){

        return ! empty( get_post_meta( $property_id, 'availability_index', true ) );

    }



    /**
     * Get the dates and times the property is available
     * @param $post_id
     * @return array
     */
    public function get_available_date_times( $post_id ){

        $availability_index = get_post_meta( $post_id, 'availability_index', true );
        $availability       = array();

        if( ! empty( $availability_index ) ) {

            foreach ($availability_index as $monthly_availability) {

                $availability[ $monthly_availability ] = get_post_meta( $post_id,  $monthly_availability, true );

            }

        }

        return $availability;

    }



    /**
     * Get the dates and times the property is booked
     * @param $post_id
     * @return array
     */
    public function get_bookings_index( $post_id ){

        $bookings_index = get_post_meta( $post_id, 'bookings_index', true );
        return( ! empty( $bookings_index ) ?  $bookings_index : array() );

    }



    /**
     * Get the dates and times the property is booked
     * @param $post_id
     * @return array
     */
    public function get_booked_date_times( $post_id ){

        $bookings_index = $this->get_bookings_index( $post_id );
        $booking_dates  = array();

        if( ! empty( $bookings_index ) ) {

            foreach ( $bookings_index as $monthly_bookings) {

                if( !empty( get_post_meta( $post_id,  $monthly_bookings, true ) ) ){

                    $booking_dates[ $monthly_bookings ] = get_post_meta( $post_id,  $monthly_bookings, true );

                }

            }

        }

        return $booking_dates;

    }



    /**
     * Displays all the available date times the property for a scheduled tour
     * @param $post_id
     */
    public function display_available_date_times( $post_id ){


        $this->calendarController->display_date_times( $this->get_available_date_times( $post_id ), CalendarController::TIMES_INDEX,  $this->get_booked_date_times( $post_id ) );

    }



    /**
     * Displays all the timeslots for the dates that the seller has set an availability
     * @param $post_id
     */
    public function display_timeslots( $post_id ){

        $this->calendarController->display_timeslots( $this->get_available_date_times( $post_id ), CalendarController::TIMES_INDEX, $this->get_booked_date_times( $post_id )  );

    }



    /**
     * Checks for a post if the $time_to_check of the date_to_check is booked
     *
     * @param $date string
     * @param $time_index int
     * @param $post_id int
     * @return bool
     */
    public function is_date_time_booked( $date, $time_index,  $post_id ){

       return $this->calendarController->is_time_booked( $date, $time_index, $this->get_booked_date_times( $post_id ) );

    }



    /**
     * Saves the Booked Date time for a post
     * @param $date string
     * @param $time_index int
     * @param $post_id int
     */
    public function save_booked_date_time( $date, $time_index,  $post_id ){

        $bookings_index = $this->get_bookings_index( $post_id );
        $booked_dates   = $this->get_booked_date_times( $post_id );

        try{

            $dateTime   = new DateTime( date( $date ) );
            $year       = $dateTime->format('Y');
            $month      = $dateTime->format('m');
            $day        = $dateTime->format('d');

            $booked_date_index = 'tour_bookings_' . $month . '_'. $year;

            if( ! in_array( $booked_date_index, $bookings_index ) ){

                $bookings_index[] = $booked_date_index;
                update_post_meta( $post_id, 'bookings_index', $bookings_index );

            }

            if( ! in_array( $time_index, $booked_dates[ $booked_date_index ][ $day ] ) ){

                $booked_dates[ $booked_date_index ][ $day ][] = $time_index;

            }

            foreach( $bookings_index as $key => $meta_key ){

                update_post_meta( $post_id, $meta_key, $booked_dates[ $meta_key ] );

            }


        }
        catch (Exception $e) {

            echo "There was an error saving the Request Status.";

        }

    }

    public function user_can_set_availability( &$post_id = false ){

        if( !is_user_logged_in() ){
            return false;
        }

        $user = wp_get_current_user();

        if( in_array( 'administrator', (array) $user->roles ) ){

            return true;

        }


        if (  !in_array( Homi_Addons::SELLER_ROLE , (array) $user->roles ) ) {

            return false;

        }
        else if( $post_id && intval( get_post_field( 'post_author', $post_id ) ) !== $user->ID ){
            return false;
        }

        return true;

    }





    public function build_availability_index_from_scratch(){

        $new_availability_index = array();
        $months = array();

        $months[] = date('m_Y');
        $months[] = date("m_Y", strtotime( date('Y-m-d') . "+15 day" ) );

        $months = array_unique( $months );

        foreach( $months as $month ){

            $new_availability_index[] = 'availability_'. $month ;

        }

        return $new_availability_index;

    }



    public function build_availability_times_from_scratch(){

        $new_available_times = array();

        $begin      = new DateTime(  date('Y-m-d') );
        $end        = new DateTime( date("Y-m-d", strtotime( date('Y-m-d') . "+15 day" ) ) );
        $interval   = DateInterval::createFromDateString('1 day');
        $period     = new DatePeriod($begin, $interval, $end);

        foreach ( $period as $dt ){

            $new_available_times[ 'availability_' . $dt->format("m_Y") ][$dt->format("d")] = array_keys( CalendarController::TIMES_INDEX );

        }

        return $new_available_times;

    }



    public function save_new_property_default_calendar( $property_id ){

        try {

            $new_index = $this->build_availability_index_from_scratch();

            update_post_meta( $property_id, 'availability_index', $new_index );

            $new_available_times = $this->build_availability_times_from_scratch();

            foreach( $new_available_times as $availability_index => $dates_available ){
                update_post_meta( $property_id, $availability_index, $dates_available );
            }

            return true;

        }
        catch( Exception $e ){

            return false;

        }

    }



    public function set_the_14th_day_available( $property_id ){

        try {

            $day_to_set = new DateTime( date("Y-m-d", strtotime( date('Y-m-d') . "+15 day" ) ) );
            $availability_index = get_post_meta( $property_id, 'availability_index', true );

            echo $day_to_set->format('d-m-Y');

            if( !in_array( 'availability_' . $day_to_set->format('m_Y'), $availability_index ) ){
                $availability_index[] = 'availability_' . $day_to_set->format('m_Y');
            }

            $times_index    = $this->get_available_date_times($property_id);
            if( ! isset( $times_index[ 'availability_' . $day_to_set->format('m_Y') ][$day_to_set->format('d')] ) ){
                $times_index[ 'availability_' . $day_to_set->format('m_Y') ][$day_to_set->format('d')] = array_keys( CalendarController::TIMES_INDEX );
            }

            foreach( $times_index as $availability_index => $dates_available ){
                update_post_meta( $property_id, $availability_index, $dates_available );
            }

        }
        catch( Exception $e ){

        }

    }

}
