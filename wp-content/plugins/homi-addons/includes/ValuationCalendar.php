<?php


class ValuationCalendar
{


    private $calendarController;


    /**
     * Initialize the class and its properties
     */
    public function __construct(){

        $this->calendarController = new CalendarController();

    }


    public function display_page(){


        if( isset( $_POST['save_availability'] ) ){
            $this->save_availability();
        }
        ?>

        <h1>Availability for Valuation Requests</h1>

        <div class="flex availability-wrapper">

            <div class="calendar-wrapper">

                <div class="calender"></div>

            </div>

            <div class="time-wrapper">

                <form method="post">

                    <div class="selected-date">
                        <?php echo date('Y-m-d'); ?>
                    </div>

                    <p class="how-to">
                        Select the times you are available for the selected date
                    </p>

                    <div class="timeslots__inner">

                        <?php $this->display_timeslots(); ?>

                    </div>

                    <div class="buttons-wrapper">

                        <button id="select_all" class="button button-primary">
                            Select All
                        </button>

                        <button id="save_availability" type="submit" class="button button-primary" name="save_availability">
                            Save All
                        </button>

                    </div>

                </form>

            </div>

        </div>


        <div class="db-availability">

            <div class="card">

                <h4>
                    Available Date Times:
                </h4>

                <p class="how-to">
                    An overview of the dates and times you are available to receive property valuation requests.
                </p>

                <div class="months-wrapper">

                    <?php $this->display_admin_booked_date_times(); ?>

                </div>

            </div>

        </div>

        <div class="unavailable-total-dates">

        </div>

        <?php

    }

    private function save_availability(){

        unset( $_POST['save_availability'] );

        $sorted_availability = $this->calendarController->sort_date_times( $_POST );

        $months_saved = array_keys( $sorted_availability );

        update_option( 'availability_index', $months_saved );

        foreach( $sorted_availability as $key => $value ){

            update_option( $key, $value );

        }

    }


    public function get_booked_date_times(){

        $availability_index = get_option( 'availability_index' );
        $availability = array();

        if( !empty( $availability_index ) ) {

            foreach ($availability_index as $monthly_availability) {

                $availability[ $monthly_availability ] = get_option( $monthly_availability );

            }

        }

        return $availability;

    }


    private function display_admin_booked_date_times(){

       $this->calendarController->display_date_times( $this->get_booked_date_times(), CalendarController::VALUATION_TIME_INDEX );

    }



    private function display_timeslots(){

        $this->calendarController->display_timeslots( $this->get_booked_date_times(), CalendarController::VALUATION_TIME_INDEX );

    }


    public function display_availability_calendar( $input_name, $extra_class, $options ){

        $calendarController = new CalendarController();
        $booked_date_times  = $this->get_booked_date_times();
        $timestamp          = strtotime(date('Y-m-d') );
        $daysRemaining      =  date('t', $timestamp) -  date('j', $timestamp);
        $carouselItems      = ( isset( $options['items'] ) && !empty( $options['items'] ) ? $options['items'] : 5 );
        ?>

        <div class="valuation-booking-wrapper <?php echo $extra_class; ?>">

            <div class="col s12 booking-header">

                <div class="current-month" data-monthDays="<?php echo $daysRemaining; ?>">

                    <span id="<?php echo date('m'); ?>" class="first-month">
                        <?php echo date('F'); ?>
                    </span>

                    <span id="<?php echo date('m', strtotime( date('Y-m-d') . "+1 month" ) ); ?>" class="second-month hide">
                        <?php echo date("F", strtotime( date('Y-m-d') . "+1 month" ) ); ?>
                    </span>


                </div>

            </div>

            <?php


            try {

                $begin      = new DateTime( date('Y-m-d') );
                $end        = new DateTime( date("Y-m-d", strtotime( date('Y-m-d') . "+1 month" ) ) );
                $interval   = DateInterval::createFromDateString('1 day');
                $period     = new DatePeriod($begin, $interval, $end);

                ?>

                <div class="days-carousel owl-carousel owl-theme col s12" data-carousel-items="<?php echo $carouselItems; ?>">

                    <?php foreach ( $period as $dt ):  ?>

                        <?php   /** @var $dt DateTime */ ?>

                        <div class="date-item <?php echo ( $calendarController->is_day_available( $dt, $booked_date_times ) ? 'available' : 'unavailable' ); ?>"
                            <?php echo ( !$calendarController->is_day_available( $dt, $booked_date_times ) ? 'title="Not Available"' : '' ); ?> >

                            <div class="day-label">
                                <?php echo $dt->format("D"); ?>
                            </div>

                            <label class="day-item checkbox-with-vector <?php echo ( $dt->format("Y-m-d") === date('Y-m-d') ? 'selected' : ''); ?>"
                                   data-date="<?php echo $dt->format("Y-m-d"); ?>">

                                <input type="radio" id="<?php echo $input_name; ?>"
                                       name="<?php echo $input_name; ?>" class="filled-in"
                                       value="<?php echo $dt->format("Y-m-d"); ?>"
                                    <?php echo ( $dt->format("Y-m-d") === date('Y-m-d') ? 'checked' : ''); ?> required>
                                <span><?php echo $dt->format("d"); ?></span>

                            </label>

                        </div>


                    <?php endforeach; ?>

                </div>

                <div class="timeslots__inner">

                    <?php foreach ($period as $dt ):  ?>

                        <?php

                        /** @var $dt DateTime */

                        $daily_times = array();
                        if( isset( $booked_date_times['availability_' . $dt->format('m') . '_'. $dt->format('Y')][$dt->format('d')] ) ){

                            $daily_times = $booked_date_times['availability_' . $dt->format('m') . '_'. $dt->format('Y')][$dt->format('d')];

                        }

                        ?>

                        <div id="<?php echo $dt->format("Y-m-d"); ?>-timeslots" class="timeslots__slots <?php echo ( $dt->format("Y-m-d") !== date('Y-m-d') ? 'hide' : ''); ?>">

                            <?php for ( $x = 0; $x <= 6; $x++ ) { ?>

                                <label class="timeslots__slot checkbox-with-vector <?php echo ( !in_array( $x, $daily_times) ? 'unavailable' : ''); ?> "
                                    <?php echo ( !in_array( $x, $daily_times) ? 'title="'. __('Not Available', Homi_Addons::PLUGIN_NAME ) .'"' : ''); ?>>

                                    <input type="radio" id="<?php echo $dt->format("Y-m-d"); ?>_times" name="<?php echo $dt->format("Y-m-d"); ?>_times" class="filled-in"
                                           value="<?php echo $x; ?>" required >

                                    <span>
                                        <?php echo CalendarController::VALUATION_TIME_INDEX[ $x ]; ?>
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

}
