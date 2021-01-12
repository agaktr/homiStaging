<?php

class EmailViewingController{


    public function send_viewing_emails( $viewing_request_id ){

        try {

            $viewing = new ViewingRequest($viewing_request_id);

            switch ($viewing->status) {

                case 'pending':
                    $emailTemplate = new EmailViewingPending();
                    $subject = $this->get_email_subject_text(EmailActionsConstants::VIEWING_ACTIONS['submit_request'], $viewing);
                    break;

                case 'confirmed':
                    $emailTemplate = new EmailViewingConfirmed();
                    $subject = $this->get_email_subject_text(EmailActionsConstants::VIEWING_ACTIONS['confirm_request'], $viewing);
                    break;

                case 'rejected':
                    $emailTemplate = new EmailViewingRejected();
                    $subject = $this->get_email_subject_text(EmailActionsConstants::VIEWING_ACTIONS['reject_request'], $viewing);
                    break;

                case 'canceled_seller':
                case 'canceled_buyer':
                    $emailTemplate = new EmailViewingCanceled();
                    $subject = $this->get_email_subject_text(EmailActionsConstants::VIEWING_ACTIONS['cancel_request'], $viewing);
                    break;

            }


            if (!empty($subject) && !empty($emailTemplate)) {

                $email_landlord = $emailTemplate->get_template(EmailActionsConstants::RECIPIENT_TYPES['landlord'], $viewing, $viewing->landlord->email);
                $email_viewer = $emailTemplate->get_template(EmailActionsConstants::RECIPIENT_TYPES['viewer'], $viewing, $viewing->viewer->email);

                $land_sent      = wp_mail($viewing->landlord->email, $subject, $email_landlord, EmailActionsConstants::EMAIL_HEADERS );
                $viewer_sent    = wp_mail($viewing->viewer->email, $subject, $email_viewer, EmailActionsConstants::EMAIL_HEADERS );

                update_post_meta($viewing->ID, Homi_Addons_Tour_Request::META_FIELDS_SLUG['seller_mail_sent'], ($land_sent ? 'Yes' : 'No'));
                update_post_meta($viewing->ID, Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_mail_sent'], ($viewer_sent ? 'Yes' : 'No'));


            }

            $emailAdminController = new EmailAdminController();
            $emailAdminController->send_admin_viewing_emails( 'viewing_'. $viewing->status, $viewing );

        }
        catch( Exception $e ){}

    }



    /**
     * @param $action_type int
     * @param $viewing ViewingRequest
     * @return string
     */
    public function get_email_subject_text( $action_type, $viewing ){

        $time = $viewing->time;
        $date = $viewing->date;

        $subject = '';

        switch( $action_type ){

            case 1:

                $subject = "Αίτημα επίσκεψης ακινήτου - $time $date";

                break;

            case 2:

                $subject = "Επιβεβαίωση επίσκεψης ακινήτου – $time $date";

                break;

            case 3:

                $subject = "Απόρριψη επίσκεψης ακινήτου – $time $date";

                break;

            case 4:

                $subject = "Ακύρωση επίσκεψης ακινήτου – $time $date";

                break;

            case 5:

                $subject = "Το ραντεβού σου αύριο - $time $date";

                break;

            case 6:

                $subject = "Το ραντεβού σου σήμερα - $time $date";

                break;

        }

        return $subject;

    }


}
