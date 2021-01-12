<?php


class RequestsBookings
{

    public function register_admin_pages(){

        add_menu_page(
            'HOMI Requests',
            'HOMI Requests',
            'manage_options',
            'booking-requests',
            array( $this, 'display'),
            'dashicons-calendar',
            6
        );


        $valuationCalendar = new ValuationCalendar();
        add_submenu_page(
            'booking-requests',
            'Availability',
            'Availability',
            'manage_options',
            'availability_calendar',
            array( $valuationCalendar, 'display_page' )
        );


    }


    public function display(){

        echo 'Requestsss';

    }

}
