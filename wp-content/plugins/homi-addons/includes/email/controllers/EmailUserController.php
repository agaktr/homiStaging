<?php


class EmailUserController
{


    public function send_new_account_email( $user_id ){

        try{

            $user = get_user_by('ID', $user_id );

            if( $user instanceof WP_User ){

                $adminTemplate = new EmailRegisterSuccess();
                $template = $adminTemplate->get_template(  $user );

                wp_mail( $user->user_email, 'Δημιουργία νέου λογαριασμού', $template, EmailActionsConstants::EMAIL_HEADERS  );

            }

        }
        catch( Exception $e ){}

    }


    public function send_successful_pass_reset_email( $user ){

        try{

            $adminTemplate = new EmailPasswordChanged();
            $template = $adminTemplate->get_template(  $user );

            wp_mail( $user->user_email, 'O κωδικός πρόσβασης έχει αλλαχθέι', $template, EmailActionsConstants::EMAIL_HEADERS  );

        }
        catch( Exception $e ){}

    }

}
