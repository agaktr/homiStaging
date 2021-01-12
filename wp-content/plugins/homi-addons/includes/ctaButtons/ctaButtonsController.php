<?php


class ctaButtonsController {

    const AJAX_ADD_CTA_CONTACT = 'ajax_add_cta_contact';



    public function displayCTA( $type ){

      $ctaButtonsForm = new ctaButtonsForm( $type );

        ?>

            <div class="homi-cta-block">

                <div class="flex full-width flex-center">

                    <div class="col l4 s12">
                        <?php echo $ctaButtonsForm->image; ?>
                    </div>

                    <div class="col l8 s12">

                        <div class="col s12">

                            <div class="success-message cta-message hide">
                                You have successfully subscribed.
                            </div>

                            <div class="error-message cta-message hide">
                                An error occurred. Please try again.
                            </div>

                        </div>

                        <div class="col s12">
                            <h3>
                                <?php echo $ctaButtonsForm->title; ?>
                            </h3>
                        </div>

                        <form data-type="<?php echo $type; ?>" method="post">

                            <?php $ctaButtonsForm->defaultFormFields(); ?>
                            <?php $ctaButtonsForm->extraFields(); ?>

                            <input type="hidden" id="form_type" name="form_type" value="<?php echo $type; ?>">

                            <div class="col s12">
                                <button id="submitCTA" type="submit" class="homi-btn submit-cta">
                                    <?php echo $ctaButtonsForm->btnText; ?>
                                </button>
                            </div>


                        </form>

                    </div>

                </div>




                <div class="clearfix"></div>

            </div>

        <?php

    }


    public function ajax_add_cta_contact(){

        $result = array();
        $params = array();
        parse_str( $_POST['data'], $params );

        $result['ac_contact'] = false;

        try {

            //Create the basic contact info
            $contact = array(
                "email" => $params['ac_email'],
                "first_name" => $params['ac_first_name'],
                "last_name" => $params['ac_last_name'],
            );

            if( isset( $params['ac_phone'] ) && !empty( $params['ac_phone'] ) ){
                $contact['phone'] = $params['ac_phone'];
            }

            $acController = new ActiveCampaignController();
            $contact_id = $acController->sync_contact( $contact, 13, false);

            $result['ac_contact'] = $contact_id;

            if( is_numeric( $contact_id ) ){

                $acController->tag_contact( $contact_id, $params['ac_tag'] );

                if( isset( $params['intention_tag'] )&& !empty( $params['intention_tag'] )  ){

                    $acController->tag_contact( $contact_id, intval( $params['intention_tag'] ) );

                }

                if( isset( $params['existing_property_url'] )&& !empty( $params['existing_property_url'] )  ){

                    $acContact  = new Mediatoolkit\ActiveCampaign\Contacts\Contacts( new Mediatoolkit\ActiveCampaign\Client( ActiveCampaignConstants::URL, ActiveCampaignConstants::KEY ) );
                    $acContact->createCustomFieldValue( $contact_id, '78', $params['existing_property_url'] );

                }

            }

        }
        catch( Exception $e ){

        }

        wp_send_json( $result );
        wp_die();

    }

}
