<?php


class CalendarController
{

    //Times index for Property Schedule Tour
    const TIMES_INDEX = array(
        '09:00',
        '10:00',
        '11:00',
        '12:00',
        '13:00',
        '14:00',
        '15:00',
        '16:00',
        '17:00',
        '18:00',
        '19:00',
        '20:00',
        '21:00',
    );


    //Times index for Property Free Valuation
    const VALUATION_TIME_INDEX = array(
        '09:00',
        '11:00',
        '13:00',
        '15:00',
        '17:00',
        '19:00',
        '21:00',
    );


    /**
     * Gets the Date Data and returns is as an stdClass
     * @param $date
     * @return stdClass
     */
    private function extract_key_data( $date ){

        $result         = new stdClass();
        $date           = str_replace( '_times', '', $date );
        $date_parts     = explode( '-', $date );

        $result->year   = $date_parts[0];
        $result->month  = $date_parts[1];
        $result->day    = $date_parts[2];

        return $result;

    }



    /**
     * Sorts the user selected date times in the correct format to be saved
     *
     * @param $form_date_times
     * @return array
     */
    public function sort_date_times( $form_date_times ){

        $sorted_availability = $monthly_availability = array();

        foreach( $form_date_times as $date => $times ){

            $date_data = $this->extract_key_data( $date );

            if( $date >= date('Y-m-d') ) {

                $monthly_key = 'availability_' . $date_data->month . '_' . $date_data->year;
                $monthly_availability[ $monthly_key ][ $date_data->day ] = $times;

            }

        }

        ksort( $monthly_availability );

        foreach( $monthly_availability as $month => $day ){

            ksort( $day );
            $sorted_availability[ $month ] = $day;

        }

        return $sorted_availability;

    }



    /**
     * Checks if the date_to_check is available
     *
     * @param $date_to_check DateTime
     * @param $available_date_times array
     * @return bool
     */
    public function is_day_available( $date_to_check, $available_date_times ){

        $year   = $date_to_check->format('Y');
        $month  = $date_to_check->format('m');
        $day    = $date_to_check->format('d');

        return isset( $available_date_times[ 'availability_' . $month . '_'. $year ][ $day ] );

    }



    /**
     * Checks if the $time_to_check of the date_to_check is booked
     * based on the booked date times array passed
     *
     * @param $date_to_check string
     * @param $time_to_check int
     * @param $booked_date_times array
     * @return bool
     */
    public function is_time_booked( $date_to_check, $time_to_check,  $booked_date_times ){

        try {

            $date_to_check  = new DateTime( date( $date_to_check ) );
            $year           = $date_to_check->format('Y');
            $month          = $date_to_check->format('m');
            $day            = $date_to_check->format('d');

            if (!empty($booked_date_times)) {

                if (isset($booked_date_times['tour_bookings_' . $month . '_' . $year][$day])) {

                    if (in_array($time_to_check, $booked_date_times['tour_bookings_' . $month . '_' . $year][$day])) {

                        return true;

                    }

                }

            }

        }
        catch (Exception $e) {

        }

        return false;

    }



    /**
     * Displays all the available date times the property for a scheduled tour
     *
     * @param $date_times array
     * @param $times_index_values array
     * @param $booked_date_times array
     */
    public function display_date_times( $date_times, $times_index_values, $booked_date_times = array() ){

        foreach( $date_times as $month => $monthly_availability ){

            try {
                $parts = explode('_', $month);
                $year = $parts[2];
                $month = $parts[1];

                if( is_numeric( $year ) && is_numeric( $month ) ) {

                    $dateObj = DateTime::createFromFormat('!m', $month);

                    ?>

                    <div class="monthly-availability" data-date="<?php echo "$year-$month"; ?>">

                        <div class="month-date">

                            <?php echo $dateObj->format('F') . ' ' . $year, ':'; ?>

                        </div>

                        <div class="days-wrapper">

                            <?php foreach ($monthly_availability as $day => $times): ?>

                                <div class="day-item" data-date="<?php echo "$year-$month-$day"; ?>">

                                    <div class="day-name">

                                        <?php echo $day; ?>

                                    </div>

                                    <div class="day-times">

                                        <?php foreach ($times as $time_index): ?>

                                            <?php

                                            $booked_class = (!empty($booked_date_times) && $this->is_time_booked("$year-$month-$day", $time_index, $booked_date_times) ? 'booked' : '');
                                            $booked_title = (!empty($booked_date_times) && $this->is_time_booked("$year-$month-$day", $time_index, $booked_date_times) ? 'title="Booked for Tour"' : '');

                                            ?>

                                            <span class="timeslots__slot <?php echo $booked_class; ?>"
                                                  data-item="<?php echo $times_index_values[$time_index]; ?>" <?php echo $booked_title; ?>>

                                        <?php echo $times_index_values[$time_index]; ?>

                                    </span>

                                        <?php endforeach; ?>
                                    </div>

                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                    <?php

                }

            }
            catch( Exception $e ){

            }


        }

    }



    /**
     * Displays all the timeslots for the dates that the seller has set an availability
     *
     * @param $date_times array
     * @param $times_index_values array
     * @param $booked_date_times array
     */
    public function display_timeslots( $date_times, $times_index_values, $booked_date_times = array()  ){

        foreach( $date_times as $month => $monthly_availability ) {

            $parts      = explode( '_', $month );
            $year       = $parts[2];
            $month      = $parts[1];

            ?>

            <?php foreach( $monthly_availability as $day => $times ): ?>

                <?php $slots_date = "$year-$month-$day"; ?>

                <?php if( ( $slots_date !== date('Y-m-d' ) && !is_admin() ) || is_admin() ): ?>

                <div id="<?php echo $slots_date; ?>-timeslots" data-date="<?php echo $slots_date; ?>" class="timeslots__slots
                <?php echo (
                        ( $slots_date !== date('Y-m-d', time() + 86400) && !is_admin() )
                        ||
                        ( is_admin() && $slots_date !== date('Y-m-d' ) )
                            ? 'hide' : '' );
                ?>">

                    <?php for ($x = 0; $x <= ( count( $times_index_values ) - 1 ); $x++) { ?>

                        <?php

                            $booked_class = ( !empty( $booked_date_times ) && $this->is_time_booked( "$year-$month-$day", $x, $booked_date_times ) ? 'booked' : '');
                            $booked_title = ( !empty( $booked_date_times ) && $this->is_time_booked( "$year-$month-$day", $x, $booked_date_times ) ? 'title="Booked for Tour"' : '');

                        ?>

                        <?php if( !empty( $booked_date_times ) && $this->is_time_booked( "$year-$month-$day", $x, $booked_date_times ) ): ?>

                            <div class="timeslots__slot <?php echo ( is_array( $times ) && in_array( $x, $times) ? 'selected' : ''); ?> <?php echo $booked_class; ?>" <?php echo $booked_title; ?>>

                                <input type="checkbox" id="<?php echo $slots_date; ?>_times[]" name="<?php echo $slots_date; ?>_times[]" class="filled-in" value="<?php echo $x; ?>" <?php echo ( is_array( $times ) && in_array( $x, $times) ? 'checked' : ''); ?>>

                                <span>
                                    <?php echo $times_index_values[ $x ]; ?>
                                </span>

                            </div>

                        <?php else: ?>

                        <label class="timeslots__slot <?php echo ( is_array( $times ) && in_array( $x, $times) ? 'selected' : ''); ?>" >

                            <input type="checkbox" id="<?php echo $slots_date; ?>_times[]" name="<?php echo $slots_date; ?>_times[]" class="filled-in" value="<?php echo $x; ?>" <?php echo ( is_array( $times ) && in_array( $x, $times) ? 'checked' : ''); ?>>

                            <span>
                                <?php echo $times_index_values[ $x ]; ?>
                            </span>

                        </label>

                        <?php endif; ?>

                    <?php } ?>

                </div>

                <?php endif; ?>

            <?php endforeach; ?>

            <?php
        }

        $tomorrow_time = time() + 86400;
        $tomorrow = date('Y-m-d', time() + 86400 );
        //Display Today's Timeslots if they are not set
        if( !isset( $date_times['availability_' . date('m', $tomorrow_time ) . '_'. date('Y', $tomorrow_time )][date('d', $tomorrow_time)] ) ): ?>

            <div id="<?php echo $tomorrow; ?>-timeslots" data-date="<?php echo $tomorrow; ?>"  class="timeslots__slots">

                <?php foreach( $times_index_values as $index => $time ): ?>

                    <label class="timeslots__slot">

                        <input type="checkbox" id="<?php echo $tomorrow; ?>_times[]" name="<?php echo $tomorrow; ?>_times[]" class="filled-in" value="<?php echo $index; ?>">

                        <span>
                            <?php echo $time; ?>
                        </span>

                    </label>

                <?php endforeach; ?>

            </div>

        <?php endif;

    }

}
