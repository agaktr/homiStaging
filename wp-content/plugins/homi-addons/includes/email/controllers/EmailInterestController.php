<?php


class EmailInterestController
{

    public function send_new_rent_interest_email( $request_id ){

        try {

            $rentInterest           = new RentInterest( $request_id );
            $emailInterestTemplate  = new EmailInterestCreated();
            $subject                = 'Nέο αίτημα εκδήλωσης ενδιαφέροντος ακινήτου';
            $message                = $emailInterestTemplate->get_template( $rentInterest );
            $email_sent             = wp_mail( $rentInterest->user->user_email, $subject, $message, EmailActionsConstants::EMAIL_HEADERS );

            $emailAdminController = new EmailAdminController();
            $emailAdminController->send_admin_interest_emails( 'interest_created', $rentInterest );

        }
        catch( Exception $e ){}

    }

}
