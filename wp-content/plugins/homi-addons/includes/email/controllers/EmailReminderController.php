<?php


class EmailReminderController {

    const CRON_EVENT_SEND_REMINDER_TOMORROW = 'cron_send_reminder_tomorrow';
    const CRON_EVENT_SEND_REMINDER_MORNING = 'cron_send_reminder_morning';


    /**
     * This function is responsible for registering the scheduled
     * cron jobs to the site and set them to run on an hourly recurrence.
     *
     *
     */
    public function register_scheduled_events(){

        if( !wp_next_scheduled(self::CRON_EVENT_SEND_REMINDER_TOMORROW ) ){

            wp_schedule_event ( time(), 'hourly', self::CRON_EVENT_SEND_REMINDER_TOMORROW );

        }

        if( !wp_next_scheduled(self::CRON_EVENT_SEND_REMINDER_MORNING ) ){

            wp_schedule_event ( strtotime("+2 minutes"), 'hourly', self::CRON_EVENT_SEND_REMINDER_MORNING );

        }

    }



    /**
     * This function is a scheduled event that is responsible for
     * sending the reminders emails to the users associated with requests that are
     * booked for tomorrow of today's date
     *
     * It gets the ids of the requests that are booked tomorrow
     * It loops through each request and sends the emails
     * @throws Exception
     */
    public function schedule_send_tomorrow_reminders(){

        //Get current greek time
        $current_time = get_date_from_gmt(date('H:i'),'H:i');

        if( $current_time > '07:59' ) {

            $reminderController = new EmailReminderController();
            $ids = $reminderController->get_requests_tomorrow(true);

            if (is_array($ids) && !empty($ids)) {

                foreach ($ids as $id) {

                    $this->send_reminder_emails_tomorrow($id);

                }

            }

        }

    }



    /**
     * This function is a scheduled event that is responsible for
     * sending the reminders emails to the users associated with requests that are
     * booked for today's date
     *
     * It gets the ids of the requests that are booked today
     * It loops through each request and sends the emails
     * @throws Exception
     */
    public function schedule_send_today_reminders(){

        //Get current greek time
        $current_time = get_date_from_gmt(date('H:i'),'H:i');

        if( $current_time > '07:59' ) {

            $reminderController = new EmailReminderController();
            $ids = $reminderController->get_requests_today(true);

            if (is_array($ids) && !empty($ids)) {

                foreach ($ids as $id) {

                    $this->send_reminder_emails_today($id);

                }

            }

        }

    }



    /**
     * @param $request_id int
     */
    public function send_reminder_emails_tomorrow( $request_id ){

        try{

            $emailAdminController = new EmailAdminController();

            //If it's a viewing
            if( get_post_type( $request_id ) === Homi_Addons_Tour_Request::POST_TYPE_NAME ){

                $viewing = new ViewingRequest( $request_id );

                if( $viewing->reminder_day_sent === false  && $viewing->status === 'confirmed') {

                    //Create the email objects required
                    $emailViewingController = new EmailViewingController();
                    $emailTemplate          = new EmailViewingReminderDay();


                    //build the email information
                    $subject            = $emailViewingController->get_email_subject_text(EmailActionsConstants::VIEWING_ACTIONS['remind_day_request'], $viewing);
                    $email_landlord     = $emailTemplate->get_template(EmailActionsConstants::RECIPIENT_TYPES['landlord'], $viewing, $viewing->landlord->email);
                    $email_viewer       = $emailTemplate->get_template(EmailActionsConstants::RECIPIENT_TYPES['viewer'], $viewing, $viewing->viewer->email);

                    //Send the emails
                    $land_sent          = wp_mail($viewing->landlord->email, $subject, $email_landlord, EmailActionsConstants::EMAIL_HEADERS );
                    $viewer_sent        = wp_mail($viewing->viewer->email, $subject, $email_viewer, EmailActionsConstants::EMAIL_HEADERS );

                    //Update the sent value of the reminder
                    if ($land_sent || $viewer_sent) {

                        update_post_meta($viewing->ID, $viewing->meta_fields['reminder_sent_day'], 'sent');

                    }

                    //Notify the admins
                    $emailAdminController->send_admin_viewing_emails('viewing_reminder_day', $viewing);

                }

            }
            else {

                $valuation = new ValuationRequest( $request_id );

                if( $valuation->reminder_day_sent === false  && $valuation->status === 'confirmed') {

                    //Create the email objects required
                    $emailValuationController   = new EmailValuationController();
                    $emailTemplate              = new EmailValuationReminderDay();


                    //build the email information
                    $subject        = $emailValuationController->get_subject('valuation_reminder_day', $valuation );
                    $email_landlord = $emailTemplate->get_template( $valuation );

                    //Send the emails
                    $land_sent = wp_mail( $valuation->landlord->email, $subject, $email_landlord, EmailActionsConstants::EMAIL_HEADERS  );

                    //Update the sent value of the reminder
                    if ( $land_sent ) {

                        update_post_meta( $valuation->ID, $valuation->meta_fields['reminder_sent_day'], 'sent' );

                    }

                    //Detect valuation request type and Notify the admins
                    $valuation_type = (get_post_type($request_id) === Homi_Addons_Valuation_Request::POST_TYPE_NAME ? 'valuation_' : 'rent_');
                    $emailAdminController->send_admin_valuation_emails($valuation_type . 'reminder_day', $valuation);

                }

            }

        }
        catch( Exception $e ){}


    }



    public function send_reminder_emails_today( $request_id ){

        try{

            $emailAdminController = new EmailAdminController();

            //If it's a viewing
            if( get_post_type( $request_id ) === Homi_Addons_Tour_Request::POST_TYPE_NAME ){

                $viewing = new ViewingRequest( $request_id );

                if( $viewing->reminder_morning_sent === false && $viewing->status === 'confirmed') {

                    //Create the email objects required
                    $emailViewingController = new EmailViewingController();
                    $emailTemplate          = new EmailViewingReminderMorning();

                    //build the email information
                    $subject            = $emailViewingController->get_email_subject_text(EmailActionsConstants::VIEWING_ACTIONS['remind_morning_request'], $viewing);
                    $email_landlord     = $emailTemplate->get_template(EmailActionsConstants::RECIPIENT_TYPES['landlord'], $viewing, $viewing->landlord->email);
                    $email_viewer       = $emailTemplate->get_template(EmailActionsConstants::RECIPIENT_TYPES['viewer'], $viewing, $viewing->viewer->email);

                    //Send the emails
                    $land_sent          = wp_mail($viewing->landlord->email, $subject, $email_landlord, EmailActionsConstants::EMAIL_HEADERS );
                    $viewer_sent        = wp_mail($viewing->viewer->email, $subject, $email_viewer, EmailActionsConstants::EMAIL_HEADERS );

                    //Update the sent value of the reminder
                    if ($land_sent || $viewer_sent) {

                        update_post_meta($viewing->ID, $viewing->meta_fields['reminder_sent_morning'], 'sent');

                    }

                    //Notify the admins
                    $emailAdminController->send_admin_viewing_emails('viewing_reminder_morning', $viewing);

                }

            }
            else {

                $valuation = new ValuationRequest( $request_id );

                if( $valuation->reminder_morning_sent === false && $valuation->status === 'confirmed' ) {

                    //Create the email objects required
                    $emailValuationController = new EmailValuationController();
                    $emailTemplate = new EmailValuationReminderMorning();

                    //build the email information
                    $subject = $emailValuationController->get_subject('valuation_reminder_morning', $valuation);
                    $email_landlord = $emailTemplate->get_template($valuation);

                    //Send the emails
                    $land_sent = wp_mail($valuation->landlord->email, $subject, $email_landlord, EmailActionsConstants::EMAIL_HEADERS );

                    //Update the sent value of the reminder
                    if ($land_sent) {

                        update_post_meta($valuation->ID, $valuation->meta_fields['reminder_sent_morning'], 'sent');

                    }

                    //Detect valuation request type and Notify the admins
                    $valuation_type = (get_post_type($request_id) === Homi_Addons_Valuation_Request::POST_TYPE_NAME ? 'valuation_' : 'rent_');
                    $emailAdminController->send_admin_valuation_emails($valuation_type . 'reminder_morning', $valuation);

                }

            }

        }
        catch( Exception $e ){}

    }



    /**
     * Returns an array with ids of requests that are booked for tomorrow
     *
     * @param $reminder_not_sent bool Whether to fetch requests that we have not send an reminder
     * @return array
     */
    public function get_requests_tomorrow($reminder_not_sent ){

        return $this->get_requests_reminder( 'tomorrow', $reminder_not_sent );

    }



    /**
     * Returns an array with ids of requests that are booked for today
     *
     * @param $reminder_not_sent bool Whether to fetch requests that we have not send an reminder
     * @return array
     */
    public function get_requests_today( $reminder_not_sent ){

        return $this->get_requests_reminder( 'today', $reminder_not_sent );

    }



    /**
     * Builds and runs the WP_Queries needed to fetch requests of type:
     * Homi_Addons_Tour_Request, Homi_Addons_Rent_Request, Homi_Addons_Valuation_Request
     *
     * @param $when string Date Index of when the requests to fetch are booked
     * @param $reminder_not_sent bool Whether to fetch requests that we have not send an reminder
     * @return array
     */
    private function get_requests_reminder( $when, $reminder_not_sent ){

        if( $when === 'tomorrow' ){

            $datetime = new DateTime();
            $datetime->modify('+1 day');
            $date                       = $datetime->format('Y-m-d');
            $reminder_sent_meta_index   = 'reminder_sent_day';

        }
        else {

            $date                       = date('Y-m-d');
            $reminder_sent_meta_index   = 'reminder_sent_morning';

        }

        $ids = array();

        $meta_viewing   = Homi_Addons_Tour_Request::META_FIELDS_SLUG;
        $meta_rent      = Homi_Addons_Rent_Request::META_FIELDS_SLUG;
        $meta_valuation = Homi_Addons_Valuation_Request::META_FIELDS_SLUG;

        $ids = $this->get_ids( $ids, $this->build_query_args( $reminder_not_sent, $date,Homi_Addons_Tour_Request::POST_TYPE_NAME, $meta_viewing['tour_date'], $meta_viewing['request_status'] , $meta_viewing[$reminder_sent_meta_index] ) );
        $ids = $this->get_ids( $ids, $this->build_query_args( $reminder_not_sent, $date,Homi_Addons_Rent_Request::POST_TYPE_NAME, $meta_rent['valuation_day'], $meta_rent['request_status'], $meta_rent[$reminder_sent_meta_index] ) );
        $ids = $this->get_ids( $ids, $this->build_query_args( $reminder_not_sent, $date,Homi_Addons_Valuation_Request::POST_TYPE_NAME, $meta_valuation['valuation_day'], $meta_valuation['request_status'] , $meta_valuation[$reminder_sent_meta_index] ) );

        return $ids;

    }



    /**
     * Creates an array with the args that will be used for the WP_Query
     *
     *
     * @param $reminder_not_sent bool
     * @param $date string
     * @param $post_type string
     * @param $date_meta_key string
     * @param $status_meta_key string
     * @param $reminder_sent_meta_key string
     * @return array
     */
    private function build_query_args( $reminder_not_sent, $date, $post_type, $date_meta_key, $status_meta_key, $reminder_sent_meta_key ) {

        $args =  array(
            'post_type'         => $post_type,
            'orderby'           => 'meta_value',
            'meta_key'          => $date_meta_key,
            'order'             => 'ASC',
            'posts_per_page'    => '-1',
            'meta_query'        => array(
                'relation'  => 'AND',
                array(
                    'key'       => $date_meta_key,
                    'value'     => $date,
                    'compare'   => '=',
                    'type'      => 'DATE'
                ),
                array(
                    'key'       => $status_meta_key,
                    'compare'   => 'EXISTS',
                ),
                array(
                    'key'       => $status_meta_key,
                    'value'     => 'confirmed',
                    'compare'   => '=',
                )
            ),
        );

        if( $reminder_not_sent ){

            $args['meta_query'][] = array(
                'relation'  => 'OR',
                array(
                    'key'       => $reminder_sent_meta_key,
                    'value'     => 'not_sent',
                    'compare'   => '=',
                ),
                array(
                    'key'       => $reminder_sent_meta_key,
                    'compare'   => 'NOT EXISTS',
                ),
            );
        }

        return $args;

    }



    /**
     * Creates a WP_Query based on the args
     * and adds the IDS of the posts to the IDs array
     *
     * @param $ids array
     * @param $args array
     * @return array
     */
    private function get_ids( $ids, $args ){

        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) {

            while ( $the_query->have_posts() ) {

                $the_query->the_post();
                $ids[] = get_the_ID();

            }

        }

        wp_reset_postdata();

        return $ids;

    }


}
