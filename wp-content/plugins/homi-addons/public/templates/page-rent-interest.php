<?php

get_header();

$formID     = 'rentInterestForm';
$metaFields = Homi_Addons_Interest_Request::META_FIELDS_SLUG;
$steps      = array(
array(
'step_id'       => 'stepContact',
'callback'      => 'contact',
'step_name'     => 'Contact',
'step_title'    => __( 'Fill in your details', Homi_Addons::PLUGIN_NAME ),
'next_btn_id'   => 'createRentInterestRequest',
),
array(
'step_id'       => 'stepAreas',
'callback'      => 'areas_of_interest',
'step_name'     => 'Areas of Interest',
'step_title'    => __( 'Please enter the areas of interest', Homi_Addons::PLUGIN_NAME ),
),
array(
'step_id'       => 'stepPreferences',
'callback'      => 'preferences',
'step_name'     => 'Preferences',
'step_title'    => __( 'Fill in your preferences', Homi_Addons::PLUGIN_NAME ),
'next_btn_id'   => 'updateRentInterestRequest',
'next_btn_txt'  => __('Submit', Homi_Addons::PLUGIN_NAME),
),
array(
'step_id'       => 'stepThankYou',
'callback'      => 'thank_you',
'step_name'     => 'Thank You',
'step_title'    => __( 'Thank you for your interest in HOMI', Homi_Addons::PLUGIN_NAME ),
),
);

$interactiveForm = new InteractiveForm( $formID, $metaFields, $steps, InteractiveForm::FORM_TYPE_RENT_INTEREST );
?>

<section id="propertyValuationPageIntro" class="row homi-row">

    <div class="container">

        <div class="flex">

            <div class="col s12">

                <div class="intro-text">

                    <h1>
                        Your preferences
                    </h1>

                    <p>
                        Let us know the type of property you are looking for. HOMI will inform you via email if we receive a property that meets your requirements.
                    </p>


                </div>

            </div>

            <div class="col s12">

                <div class="valuation-form-wrapper">

                    <?php $interactiveForm->display_form(); ?>

                </div>
            </div>

        </div>

    </div>

    <div class="clearfix"></div>

</section>


<?php

get_footer();
