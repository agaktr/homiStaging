<?php


class EmailValuationController
{


    public function send_valuation_emails( $valuation_request_id ){


        try {

            $valuation = new ValuationRequest($valuation_request_id);
            $emailTemplate = false;

            $valuation_type = (get_post_type($valuation->ID) === Homi_Addons_Valuation_Request::POST_TYPE_NAME ? 'valuation_' : 'rent_');

            if ($valuation->status === 'pending' && get_post_meta( $valuation->ID, $valuation->meta_fields['requester_mail_sent'], true ) !== 'Yes' ) {

                $emailTemplate = new EmailValuationPending();

            }
            else if ( $valuation->status === 'confirmed' && get_post_meta( $valuation->ID, $valuation->meta_fields['confirmed_mail_sent'], true ) !== 'Yes' ) {

                $emailTemplate = new EmailValuationConfirmed();

            }


            if ( $emailTemplate !== false ) {

                $type           = (get_post_type($valuation->ID) === Homi_Addons_Valuation_Request::POST_TYPE_NAME ? EmailActionsConstants::VALUATION_TYPES['property_valuation'] : EmailActionsConstants::VALUATION_TYPES['rent_valuation']);
                $subject        = $this->get_subject($valuation_type . $valuation->status, $valuation);
                $email_landlord = $emailTemplate->get_template($type, $valuation);

                $land_sent  = wp_mail( $valuation->landlord->email, $subject, $email_landlord, EmailActionsConstants::EMAIL_HEADERS );
                $sent_field = ( $valuation->status === 'confirmed' ? $valuation->meta_fields['confirmed_mail_sent'] : $valuation->meta_fields['requester_mail_sent'] );

                update_post_meta( $valuation->ID, $sent_field, ( $land_sent ? 'Yes' : 'No') );

                $emailAdminController = new EmailAdminController();
                $emailAdminController->send_admin_valuation_emails( $valuation_type. $valuation->status, $valuation );

            }

        }
        catch( Exception $e ){}

    }


    /**
     * @param $action string
     * @param $valuation ValuationRequest
     * @return string
     */
    public function get_subject( $action, $valuation ){

        $subject = '';

        $date = $valuation->date;
        $time = $valuation->time;

        switch( $action ){

            case 'valuation_pending':

                $subject = "Αίτημα συνάντησης για δωρεάν εκτίμηση - $time $date";
                break;

            case 'valuation_confirmed':

                $subject = "Επιβεβαίωση συνάντησης για δωρεάν εκτίμηση - $time $date";
                break;

            case 'valuation_reminder_day':
            case 'rent_reminder_day':

                $subject = "Το ραντεβού μας αύριο";
                break;


            case 'valuation_reminder_morning':
            case 'rent_reminder_morning':

                $subject = "Το ραντεβού μας σήμερα";
                break;

            case 'rent_pending':

                $subject = "Αίτημα συνάντησης για δωρεάν εκτίμηση ενοικίασης  - $time $date";
                break;

            case 'rent_confirmed':

                $subject = "Επιβεβαίωση συνάντησης για δωρεάν εκτίμηση ενοικίασης - $time $date";
                break;

        }


        return $subject;

    }

}
