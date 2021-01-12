<?php
get_header();

$formID     = 'rentPropertyValuationForm';
$metaFields = Homi_Addons_Rent_Request::META_FIELDS_SLUG;
$steps      = array(
    array(
        'step_id'       => 'stepContact',
        'callback'      => 'contact',
        'step_name'     => 'Contact',
        'step_title'    => __( 'Fill in your details', Homi_Addons::PLUGIN_NAME ),
        'next_btn_id'   => 'createRentValuationRequest',
    ),
    array(
        'step_id'       => 'stepAddressInfo',
        'callback'      => 'address_info',
        'step_name'     => 'Property Map',
        'step_title'    => __( 'Please enter the address of your property', Homi_Addons::PLUGIN_NAME ),
    ),
    array(
        'step_id'       => 'stepCalendar',
        'callback'      => 'calendar',
        'step_name'     => 'Calendar',
        'step_title'    => __( 'Please choose your desired appointment time for the free valuation of your property', Homi_Addons::PLUGIN_NAME ),
    ),
    array(
        'step_id'       => 'stepPhone',
        'callback'      => 'phone',
        'step_name'     => 'Phone Number',
        'step_title'    => __( 'We confirm the appointment by phone. How can we reach you?', Homi_Addons::PLUGIN_NAME ),
    ),
    array(
        'step_id'       => 'stepPackage',
        'callback'      => 'package_type',
        'step_name'     => 'Package',
        'step_title'    => __( 'Select your package', Homi_Addons::PLUGIN_NAME ),
        'next_btn_id'   => 'updateRentRequest',
        'next_btn_txt'  => __('Submit Valuation Request', Homi_Addons::PLUGIN_NAME),
    ),
    array(
        'step_id'       => 'stepThankYou',
        'callback'      => 'thank_you',
        'step_name'     => 'Thank You',
        'step_title'    => __( 'Thank you for your interest in HOMI', Homi_Addons::PLUGIN_NAME ),
    ),
);

$interactiveForm = new InteractiveForm( $formID, $metaFields, $steps, InteractiveForm::FORM_TYPE_RENT );
?>

    <section id="propertyValuationPageIntro" class="row homi-row">

        <div class="container">

            <div class="flex">

                <div class="col s12">

                    <div class="intro-text">

                        <h1>
                            Rent your property with HOMI
                        </h1>

                        <p>
                            Do you want to find great tenants without spending a fortune on real estate fees? HOMI provides you the service you deserve to rent your property quickly and start earning cash right away.
                        </p>

                        <p>
                            Book an appointment at a time that suits you and a HOMI expert will meet you at your property.
                        </p>

                    </div>

                </div>

                <div class="col s12">

                    <div class="valuation-form-wrapper">

                        <?php $interactiveForm->display_form(); ?>

                    </div>
                </div>

                <div class="valuation-icons ">

                    <div class="col">

                        <div class="flex flex-center flex-just-center valuation-item-icon">

                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>atom/icon/ic_checkmark_validation</title> <desc>Created with Sketch.</desc> <defs/> <g id="Assets" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="atom/icon/ic_checkmark_validation" stroke-width="2.3" stroke="#1895FF"> <polyline id="ic_checkmark_validation" points="19.9958367 7 9.55583708 17.4399996 4 11.8841625"/> </g> </g></svg>

                            <div class="text">
                                Get more offers
                            </div>

                        </div>

                    </div>

                    <div class="col">

                        <div class="flex flex-center flex-just-center valuation-item-icon">

                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>atom/icon/ic_checkmark_validation</title> <desc>Created with Sketch.</desc> <defs/> <g id="Assets" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="atom/icon/ic_checkmark_validation" stroke-width="2.3" stroke="#1895FF"> <polyline id="ic_checkmark_validation" points="19.9958367 7 9.55583708 17.4399996 4 11.8841625"/> </g> </g></svg>

                            <div class="text">
                                Rent your property faster
                            </div>

                        </div>

                    </div>

                    <div class="col">

                        <div class="flex flex-center flex-just-center valuation-item-icon">

                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>atom/icon/ic_checkmark_validation</title> <desc>Created with Sketch.</desc> <defs/> <g id="Assets" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="atom/icon/ic_checkmark_validation" stroke-width="2.3" stroke="#1895FF"> <polyline id="ic_checkmark_validation" points="19.9958367 7 9.55583708 17.4399996 4 11.8841625"/> </g> </g></svg>

                            <div class="text">
                                Get your money sooner
                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>

        <div class="clearfix"></div>

    </section>


<?php

get_footer();
