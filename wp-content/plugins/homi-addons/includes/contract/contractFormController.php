<?php


class contractFormController {


    public function formController(){

       if ( isset( $_POST['contract_builder']) ){

           try {

               //Create the basic contact info
               $contact = array(
                   "email" => $_POST['ac_email'],
                   "first_name" => $_POST['ac_first_name'],
                   "last_name" => $_POST['ac_last_name'],
               );

               if( isset( $_POST['ac_phone'] ) && !empty( $_POST['ac_phone'] ) ){
                   $contact['phone'] = $_POST['ac_phone'];
               }

               $acController = new ActiveCampaignController();
               $contact_id = $acController->sync_contact( $contact, 12, false);

               if ( is_numeric( $contact_id ) ) {

                   echo $contact_id;

                   wp_redirect( home_url('contract') . '?subscribed=yes' );
                   exit();

               }
               else {
                   wp_redirect( home_url('contract') . '?subscribed=failed' );
                   exit();
               }


           }
           catch( Exception $e ){

               wp_redirect( home_url('contract') . '?subscribed=failed' );
               exit();

           }


       }


    }

}
