<?php


class EmailMatchesController {

    public $uploadRequestMatch;

    public function __construct( $uploadRequestID ){

        $this->uploadRequestMatch = new UploadRequestMatch( $uploadRequestID );

    }


    /**
     * This function is responsible for sending a notification email
     * to the users that are matched to the upload request property
     */
    public function sendEmailPerfectMatches(){

        $this->sendEmails( $this->uploadRequestMatch->usersToSendEmail );

    }

    /**
     * This function is responsible for sending a notification email
     * to the users that are matched to the upload request property
     */
    public function sendEmailFilteredMatches(){

        $this->sendEmails( $this->uploadRequestMatch->filteredUsersToSendEmail );

    }


    private function sendEmails( $users ){

        $emailTemplate  = new EmailMatchingTemplate();

        if( is_array( $users ) && !empty( $users )  ){

            foreach( $users as $user_id ){

                $userToEmail = get_user_by('ID', $user_id );

                if( $userToEmail instanceof WP_User && !empty( $userToEmail->user_email ) ){

                    try {

                        $emailMessage   = $emailTemplate->get_template( $this->uploadRequestMatch, $userToEmail );
                        $email_sent = wp_mail( $userToEmail->user_email, 'ΗΟΜΙ - Προτεινόμενο ακίνητο', $emailMessage, EmailActionsConstants::EMAIL_HEADERS );

                        if( $email_sent ){

                            add_post_meta( $this->uploadRequestMatch->ID, Homi_Addons_Upload_Request::META_FIELDS_SLUG['matched_users_emailed'], $userToEmail->ID );

                        }

                    }
                    catch( Exception $e ){}

                }

            }

        }

    }

}
