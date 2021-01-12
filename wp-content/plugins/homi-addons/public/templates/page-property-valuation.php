<?php
get_header();

$formID     = 'propertyValuation';
$metaFields = Homi_Addons_Valuation_Request::META_FIELDS_SLUG;
$steps      = array(
    array(
        'step_id'       => 'stepContact',
        'callback'      => 'contact',
        'step_name'     => 'Contact',
        'step_title'    => __( 'Fill in your information', Homi_Addons::PLUGIN_NAME ),
        'next_btn_id'   => 'createValuationRequest',
    ),
    array(
        'step_id'       => 'stepPropertyType',
        'callback'      => 'property_type',
        'step_name'     => 'Property Type',
        'step_title'    => __( 'Select your property type', Homi_Addons::PLUGIN_NAME ),
    ),
    array(
        'step_id'       => 'stepAddressInfo',
        'callback'      => 'address_info',
        'step_name'     => 'Property Map',
        'step_title'    => __( 'Please enter the address of your property', Homi_Addons::PLUGIN_NAME ),
    ),
//    array(
//        'step_id'       => 'stepApartmentType',
//        'callback'      => 'apartment_type',
//    'step_name'     => 'Apartment Type',
//        'step_title'    => __( 'Please choose your type of apartment', Homi_Addons::PLUGIN_NAME ),
//    ),
    array(
        'step_id'       => 'stepApartmentFloor',
        'callback'      => 'apartment_floor',
        'step_name'     => 'Apartment Floor',
        'step_title'    => __( 'Which floor is the apartment on?', Homi_Addons::PLUGIN_NAME ),
    ),
    array(
        'step_id'       => 'stepSize',
        'callback'      => 'size',
        'step_name'     => 'Property Size',
        'step_title'    => array(
            'house'         => __( 'How big is the living space of the house?', Homi_Addons::PLUGIN_NAME ),
            'apartment'     => __( 'How big is the living space of the apartment?', Homi_Addons::PLUGIN_NAME ),
        )
    ),
    array(
        'step_id'       => 'stepBedrooms',
        'callback'      => 'bedrooms',
        'step_name'     => 'Bedrooms',
        'step_title'    => array(
            'house'         => __( 'How many bedrooms does the house have?', Homi_Addons::PLUGIN_NAME ),
            'apartment'     => __( 'How many bedrooms does the apartment have?', Homi_Addons::PLUGIN_NAME ),
        )
    ),
    array(
        'step_id'       => 'stepBathrooms',
        'callback'      => 'bathrooms',
        'step_name'     => 'Bathrooms',
        'step_title'    => array(
            'house'         => __( 'How many bathrooms does the house have?', Homi_Addons::PLUGIN_NAME ),
            'apartment'     => __( 'How many bathrooms does the apartment have?', Homi_Addons::PLUGIN_NAME ),
        )
    ),
    array(
        'step_id'       => 'stepYear',
        'callback'      => 'construction_year',
        'step_name'     => 'Construction Year',
        'step_title'    => __( 'When was the house building constructed?', Homi_Addons::PLUGIN_NAME ),
    ),
    array(
        'step_id'       => 'stepCondition',
        'callback'      => 'condition',
        'step_name'     => 'Property Condition',
        'step_title'    => array(
            'house'         => __( 'Please select the condition of the house', Homi_Addons::PLUGIN_NAME ),
            'apartment'     => __( 'Please select the condition of the apartment', Homi_Addons::PLUGIN_NAME ),
        )
    ),
    array(
        'step_id'       => 'stepValuationReason',
        'callback'      => 'valuation_reason',
        'step_name'     => 'Valuation Reason',
        'step_title'    => __( 'What do you need the valuation for?', Homi_Addons::PLUGIN_NAME ),
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
        'next_btn_id'   => 'updateValuationRequest',
        'next_btn_txt'  => __('Submit Valuation Request', Homi_Addons::PLUGIN_NAME),
    ),
    array(
        'step_id'       => 'stepThankYou',
        'callback'      => 'thank_you',
        'step_name'     => 'Thank You',
        'step_title'    => __( 'Thank you for your interest in HOMI', Homi_Addons::PLUGIN_NAME ),
    ),
);

$interactiveForm = new InteractiveForm( $formID, $metaFields, $steps, InteractiveForm::FORM_TYPE_FREE_VALUATIONS );
?>

<section id="propertyValuationPageIntro" class="row homi-row">

    <div class="container">

        <div class="flex">

            <div class="col s12">

                <div class="intro-text">

                    <h1>
                        Get your free property valuation now
                    </h1>

                    <p>
                        Have you ever wondered how much your home is worth? Want to know what you could sell for in the current market? Book a free no-obligation appointment at a time that suits you and a HOMI expert will meet you at your property.
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
                            Sell your property faster
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
