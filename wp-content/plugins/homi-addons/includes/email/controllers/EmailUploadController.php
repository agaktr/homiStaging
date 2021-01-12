<?php


class EmailUploadController
{

    public $uploadRequest;

    public function __construct( $uploadRequestID ){

        $this->uploadRequest = new UploadRequest( $uploadRequestID );

    }

    public function sendEmail(){


        try {

            $uploadTemplate = new EmailUploadRequestSubmitted();
            $emailMessage   = $uploadTemplate->get_template( $this->uploadRequest );
            $land_sent      = wp_mail( $this->uploadRequest->user->user_email, 'Επιτυχής υποβολή των στοχείων ακινήτου', $emailMessage, EmailActionsConstants::EMAIL_HEADERS );

        }
        catch( Exception $e ){}

        try {

            $uploadEmail = new EmailAdminUploadTemplate();
            $emailMessage   =$uploadEmail->get_template( $this->uploadRequest );
            $admin_sent      = wp_mail( 'info@homi.com.gr', 'Notification: New Upload Request', $emailMessage, EmailActionsConstants::EMAIL_HEADERS );

        }
        catch( Exception $e ){}

    }

}
