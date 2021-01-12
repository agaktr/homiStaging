<?php


class AvailabilityScheduler
{

    const CRON_EVENT_SET_DEFAULT_AVAILABILITY = 'cron_set_default_availability';



    /**
     * This function is responsible for registering the scheduled
     * cron jobs to the site and set them to run on an hourly recurrence.
     *
     */
    public function register_scheduled_events(){

        if( !wp_next_scheduled(self::CRON_EVENT_SET_DEFAULT_AVAILABILITY ) ){

            wp_schedule_event ( time(), 'hourly', self::CRON_EVENT_SET_DEFAULT_AVAILABILITY );

        }

    }

    public function set_property_default_availability(){

        $args = array(
            'post_type'     => 'property',
            'post_status'   => 'publish',
            'posts_per_page' => -1,
        );


        $query = new WP_Query( $args );
        if ( $query->have_posts() ){

            $availabilityController = new SellerAvailabilityController();

            while ( $query->have_posts() ) {

                $query->the_post();

                if (strpos( get_the_title(), 'RENTED') === false) {

                    $availabilityController->set_the_14th_day_available( get_the_ID() );
                }


            }


        }

    }

}
