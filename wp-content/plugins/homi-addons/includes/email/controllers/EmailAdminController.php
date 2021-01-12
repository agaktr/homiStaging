<?php


class EmailAdminController
{


    /**
     * @param $action_type
     * @param $viewing ViewingRequest
     * @return bool
     */
    public function send_admin_viewing_emails( $action_type, $viewing ){

        $actions = EmailActionsConstants::EMAIL_ACTIONS;

        if( isset( $actions[ $action_type ] ) ){

            try{

                $subject        = $this->get_subject( $action_type, $viewing );
                $adminTemplate  = new EmailAdminTemplate();
                $email_body     = $adminTemplate->get_template( $action_type, $viewing);

                return wp_mail( EmailActionsConstants::ADMIN_EMAILS , $subject, $email_body, EmailActionsConstants::EMAIL_HEADERS );

            }
            catch( Exception $e ){

                return false;

            }

        }

        return false;

    }


    /**
     * @param $action_type
     * @param $valuation ValuationRequest
     * @return bool
     */
    public function send_admin_valuation_emails( $action_type, $valuation ){

        $actions = EmailActionsConstants::EMAIL_ACTIONS;

        if( isset( $actions[ $action_type ] ) ){

            try{

                $subject        = $this->get_subject( $action_type, $valuation );
                $adminTemplate  = new EmailAdminTemplate();
                $email_body     = $adminTemplate->get_template( $action_type, $valuation );

                return wp_mail( EmailActionsConstants::ADMIN_EMAILS , $subject, $email_body, EmailActionsConstants::EMAIL_HEADERS );

            }
            catch( Exception $e ){

                return false;

            }

        }

        return false;

    }


    /**
     * @param $action_type
     * @param $rentInterest RentInterest
     * @return bool
     */
    public function send_admin_interest_emails( $action_type, $rentInterest ){

        $actions = EmailActionsConstants::EMAIL_ACTIONS;

        if( isset( $actions[ $action_type ] ) ){

            try{

                $subject        = $this->get_subject( $action_type, $rentInterest );
                $adminTemplate  = new EmailAdminInterestTemplate();
                $email_body     = $adminTemplate->get_template( $action_type, $rentInterest );

                return wp_mail( EmailActionsConstants::ADMIN_EMAILS , $subject, $email_body, EmailActionsConstants::EMAIL_HEADERS );

            }
            catch( Exception $e ){

                return false;

            }

        }

        return false;

    }


    /**
     * @param $action_type string
     * @param $request ViewingRequest | ValuationRequest | RentInterest
     * @return string
     */
    private function get_subject( $action_type, $request  ){

        $subject    = EmailActionsConstants::EMAIL_ACTIONS[ $action_type ];

        if( ! $request instanceof RentInterest ){

            $date       = $request->date;
            $time       = $request->time;
            $subject   .= " | $date | $time";

        }

        return $subject;

    }

}
