<?php


class RentInteractiveForm
{

    private $valuation_request;

    public function __construct(){

        $this->valuation_request = new Homi_Addons_Rent_Request();

    }


    public function display(){

        ?>

        <div id="rentPropertyValuationForm" class="card row interactive-form">

            <?php $this->preloader(); ?>

            <form action="<?php echo site_url('/register'); ?>"  method="POST" enctype="multipart/form-data">

                <input type="hidden" name="message_language" value="<?php echo ( strpos( $_SERVER['REQUEST_URI'], '/el') !== false ? 'GR' : 'EN' ); ?>">
                <input type="hidden" id="request_id" name="request_id" value="">

                <div class="form-step-wrap col s12">

                    <div class="progress">
                        <div class="progressbar empty"></div>
                        <div id="prog" class="progressbar"></div>
                    </div>

                    <?php $this->contact(); ?>
                    <?php $this->address_info(); ?>
                    <?php $this->calendar(); ?>
                    <?php $this->thank_you(); ?>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </form>

        </div>

        <?php

    }



    private function contact(){

        ?>

        <?php $this->preloader(); ?>

        <div id="stepContact" class="slider-step first-step active-step" data-next-step="stepAddressInfo">

            <div class="steps-title">
                <?php echo __( 'We confirm the appointment by phone. How can we reach you?', Homi_Addons::PLUGIN_NAME ); ?>
            </div>

            <div class="steps-content">

                <div class="flex">

                    <div class="col l8 s12">

                        <div class="input-field col l6 s12">

                            <label for="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_salutation']; ?>">
                                <?php echo __('Salutation', Homi_Addons::PLUGIN_NAME); ?>
                            </label>

                            <select class="" id="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_salutation']; ?>"
                                    name="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_salutation']; ?>" required>
                                <option value="mr"><?php echo __('Mr.', Homi_Addons::PLUGIN_NAME); ?></option>
                                <option value="mrs"><?php echo __('Mrs.', Homi_Addons::PLUGIN_NAME); ?></option>
                            </select>

                        </div>

                        <div class="input-field col l6 s12">

                            <?php

                            $value = '';

                            if( is_user_logged_in() ){

                                $user = wp_get_current_user();
                                $value = $user->first_name . ' ' . $user->last_name;
                            }

                            ?>

                            <label for="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_name']; ?>">
                                <?php echo __('Full Name', Homi_Addons::PLUGIN_NAME); ?>
                            </label>
                            <input type="text" id="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_name']; ?>"
                                   name="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_name']; ?>" value="<?php echo $value; ?>" required>

                        </div>

                        <div class="input-field col l6 s12">

                            <?php

                            $phone = '';

                            if( is_user_logged_in() ){

                                $user = wp_get_current_user();
                                $phone = get_user_meta( $user->ID, 'fave_author_phone', true );
                            }

                            ?>

                            <label for="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_phone']; ?>">
                                <?php echo __('Phone Number', Homi_Addons::PLUGIN_NAME); ?>
                            </label>
                            <input type="number" id="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_phone']; ?>"
                                   name="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_phone']; ?>" onKeyPress="if(this.value.length===10) return false;"
                                   value="<?php echo $phone; ?>" class="phone-field" required>

                            <svg version="1.1" id="wrongInput" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve"><g><path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                            <svg version="1.1" id="validIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7C514.5,101.703,514.499,85.494,504.502,75.496z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                            <div class="wrong-input-message">
                                <?php echo __( 'This is not a valid phone number', Homi_Addons::PLUGIN_NAME ); ?>
                            </div>

                        </div>

                        <div class="input-field col l6 s12">

                            <?php

                            $email = '';

                            if( is_user_logged_in() ){

                                $user = wp_get_current_user();
                                $email = $user->user_email;
                            }

                            ?>

                            <label for="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_email']; ?>">
                                <?php echo __('Email', Homi_Addons::PLUGIN_NAME); ?>
                            </label>
                            <input type="email" id="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_email']; ?>"
                                   name="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['requester_email']; ?>"
                                   value="<?php echo $email; ?>" required>

                        </div>

                        <div class="col s12">

                            <div class="consent-item input-field">

                                <label>
                                    <input type="checkbox" class="filled-in" required />
                                    <span>
                                        <?php echo __( 'I have read and agree with the ', Homi_Addons::PLUGIN_NAME ); ?>
                                        <a href="<?php echo site_url('terms-and-conditions'); ?>" target="_blank">
                                            <?php echo __( 'Terms and Conditions', Homi_Addons::PLUGIN_NAME ); ?>
                                        </a>
                                    </span>
                                </label>

                            </div>

                            <div class="consent-item input-field">

                                <label>
                                    <input type="checkbox" class="filled-in" required />
                                    <span>
                                        <?php echo __( 'I have read and agree with the ', Homi_Addons::PLUGIN_NAME ); ?>
                                        <a href="<?php echo site_url('privacy-policy'); ?>" target="_blank">
                                            <?php echo __( 'Privacy Policy', Homi_Addons::PLUGIN_NAME ); ?>
                                        </a>
                                    </span>
                                </label>

                            </div>

                        </div>

                    </div>

                    <div class="col l4 s12">

                        <div class="side-vector">

                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 511.814 511.814" xml:space="preserve"><g><path style="fill:#E8E8E8;" d="M511.814,108.644v191.003c0,3.617-1.437,7.086-3.995,9.644c-2.558,2.558-6.027,3.995-9.644,3.995H129.818c-7.532,0-13.639-6.106-13.639-13.639V26.786c0-7.532,6.106-13.639,13.639-13.639h368.358c7.532,0,13.639,6.106,13.639,13.639V108.644z"></path><path style="fill:#D5D5D5;" d="M508.407,17.852L327.159,172.627c-7.601,6.418-18.723,6.418-26.324,0L119.587,17.852c2.562-2.984,6.298-4.702,10.231-4.705h368.358C502.109,13.151,505.844,14.869,508.407,17.852z"></path><path style="fill:#DDD;" d="M506.968,310.01c-2.452,2.119-5.587,3.282-8.828,3.275H129.818c-3.24,0.004-6.374-1.158-8.828-3.275L272.11,148.139l28.725,24.488c7.601,6.418,18.723,6.418,26.324,0l28.654-24.488L506.968,310.01z"></path><path style="fill:#1259AF;" d="M111.695,153.859l25.335,38.003c5.048,7.571,3.396,17.754-3.787,23.34l-31.197,24.267c-6.767,5.217-8.71,14.593-4.573,22.069c9.154,16.437,17.814,35.858,60.796,78.848s62.42,51.633,78.857,60.787c7.475,4.145,16.857,2.201,22.069-4.573l24.258-31.188c5.589-7.184,15.776-8.836,23.349-3.787l39.203,26.138l44.138,29.405c7.728,5.129,10.06,15.426,5.297,23.384l-20.904,34.834c-5.544,9.421-14.503,16.344-25.017,19.332c-34.737,9.534-111.351,11.476-234.161-111.351S-5.597,183.944,3.937,149.207c2.986-10.513,9.906-19.472,19.324-25.017l34.816-20.904c7.959-4.758,18.252-2.427,23.384,5.297L111.695,153.859z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                        </div>

                    </div>

                </div>

            </div>

            <div class="steps-buttons-wrapper">

                <button id="createRentValuationRequest" class="btn-next btn-primary disabled">
                    <?php echo __('Next', Homi_Addons::PLUGIN_NAME); ?>
                </button>

            </div>

        </div>
        <?php
    }


    private function address_info(){

        ?>
        <div id="stepAddressInfo" class="slider-step step" data-next-step="stepCalendar" data-back-to="stepContact">

            <div class="steps-title">
                <?php echo __( 'Please enter the address of your property', Homi_Addons::PLUGIN_NAME ); ?>
            </div>

            <div class="steps-content">

                <div class="flex">

                    <div class="col l6 s12">

                        <div class="address-inputs gmap-autofill-wrapper flex">

                            <div class="input-field col l6 s12">

                                <label for="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['post_code']; ?>">
                                    <?php echo __( 'Post Code', Homi_Addons::PLUGIN_NAME ); ?>
                                </label>
                                <input type="number" id="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['post_code']; ?>"
                                       name="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['post_code']; ?>" class="postcode-field" onKeyPress="if(this.value.length===5) return false;" required>

                                <svg version="1.1" id="wrongInput" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve"><g><path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                <svg version="1.1" id="validIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7C514.5,101.703,514.499,85.494,504.502,75.496z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                                <div class="wrong-input-message">
                                    <?php echo __( 'This is not a valid postcode', Homi_Addons::PLUGIN_NAME ); ?>
                                </div>

                            </div>

                            <div class="input-field col l6 s12">

                                <label for="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['suburb']; ?>">
                                    <?php echo __( 'Suburb', Homi_Addons::PLUGIN_NAME ); ?>
                                </label>
                                <input type="text" id="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['suburb']; ?>"
                                       name="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['suburb']; ?>" class="suburb-field"  required>

                            </div>

                            <div class="input-field col l6 s12">

                                <label for="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['street_name']; ?>">
                                    <?php echo __( 'Street Name', Homi_Addons::PLUGIN_NAME ); ?>
                                </label>
                                <input type="text" id="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['street_name']; ?>"
                                       name="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['street_name']; ?>"  class="street-name-field"  required>

                            </div>

                            <div class="input-field col l6 s12">

                                <label for="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['street_number']; ?>">
                                    <?php echo __( 'Street Number', Homi_Addons::PLUGIN_NAME ); ?>
                                </label>
                                <input type="text" id="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['street_number']; ?>"
                                       name="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['street_number']; ?>"  class="street-number-field"  required>

                            </div>

                            <input type="hidden" id="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['long']; ?>"
                                   name="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['long']; ?>" class="street-long-field">

                            <input type="hidden" id="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['lat']; ?>"
                                   name="<?php echo Homi_Addons_Rent_Request::META_FIELDS_SLUG['lat']; ?>" class="street-lat-field">

                            <div class="consent-item input-field col s12 hide">

                                <label class="simple-radio">
                                    <input type="radio" name="valuation_request_map" class="filled-in" value="0" checked />
                                    <span>
                                        <?php echo __( 'Google Maps matches up with my address.', Homi_Addons::PLUGIN_NAME ); ?>
                                    </span>
                                </label>

                                <label class="simple-radio">
                                    <input type="radio" name="valuation_request_map" class="filled-in" value="1" />
                                    <span>
                                        <?php echo __( 'Google Maps does not match up with my address.', Homi_Addons::PLUGIN_NAME ); ?>
                                    </span>
                                </label>

                            </div>

                        </div>

                    </div>

                    <div class="col l6 s12">

                        <div class="maps-wrapper">
                            <div id="map"></div>
                        </div>

                    </div>

                </div>


            </div>

            <div class="steps-buttons-wrapper">

                <button class="btn-back btn-primary">
                    <i class="fa fa-chevron-left"></i>
                    <?php echo __('Back', Homi_Addons::PLUGIN_NAME); ?>
                </button>

                <button class="btn-next btn-primary disabled">
                    <?php echo __('Continue', Homi_Addons::PLUGIN_NAME); ?>
                    <i class="fa fa-chevron-right"></i>
                </button>

            </div>

        </div>
        <?php
    }

    private function calendar(){

        $availabilityCalendar = new ValuationCalendar();
        ?>

        <div id="stepCalendar" class="slider-step step" data-next-step="stepThankYou" data-back-to="stepAddressInfo">

            <div class="steps-title">
                <?php echo __( 'Please choose your desired appointment time for the free valuation of your property', Homi_Addons::PLUGIN_NAME ); ?>
            </div>

            <div class="steps-content">

                <div class="flex">

                    <div class="col l8 s12">

                        <?php $availabilityCalendar->display_availability_calendar( Homi_Addons_Rent_Request::META_FIELDS_SLUG['valuation_day'], '', array('items' => 7 ) ); ?>

                    </div>

                    <div class="col l4 s12">

                        <div class="agent-box">

                            <div class="agent-avatar">

                                <img alt="Alexandros Saisanas Homi Agent" src="https://homi.com.gr/wp-content/uploads/2019/12/Alexandros-Saisanas-Homi-Agent.jpeg">

                                <div class="featured-icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>

                            </div>

                            <div class="agent-name">
                                Alexandros Saisanas
                            </div>

                            <div class="your-agent-postcode">
                                <?php echo __( 'Your property expert in ', Homi_Addons::PLUGIN_NAME ); ?>
                                <span class="postcode-var">
                                    11142
                                </span>
                            </div>

                            <div class="agent-description">

                                Alexandros is excited to assist you with the valuation of your property.

                            </div>

                            <div class="agent-footer hide">

                                <div class="properties-sold">

                                    <svg version="1.1" id="homiSmallIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve">
                                        <g>
                                            <polygon id="polygon1" style="fill:#1259AF;"  points="29.6,119 29.6,278 73.3,278 73.3,141.8 160.7,80.8 255,142.6 255,278 298.7,278 298.7,119 159.9,28.1"/>
                                            <polygon id="polygon2" style="fill:#1259AF;" points="195.6,278 195.6,160.9 125.7,160.9 125.7,278 68.6,315 139.9,315 	"/>
                                        </g>
                                    </svg>

                                    <span class="num-of-properties">666</span>
                                    <?php echo __( 'Properties sold', Homi_Addons::PLUGIN_NAME ); ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="steps-buttons-wrapper">

                <button class="btn-back btn-primary">
                    <i class="fa fa-chevron-left"></i>
                    <?php echo __('Back', Homi_Addons::PLUGIN_NAME); ?>
                </button>

                <button id="updateRentRequest" class="btn-next btn-submit  btn-primary">
                    <?php echo __('Submit Valuation Request', Homi_Addons::PLUGIN_NAME); ?>
                    <i class="fa fa-chevron-right"></i>
                </button>

            </div>

        </div>
        <?php
    }

    private function thank_you(){

        ?>

        <div id="stepThankYou" class="slider-step" data-back-to="stepContact">

            <div class="steps-title">
                <?php echo __( 'Thank you for your interest in HOMI', Homi_Addons::PLUGIN_NAME ); ?>
            </div>

            <div class="steps-content">

                <div class="col l7 s12">

                    <div class="thank-you-message">

                    </div>

                </div>

                <div class="col l5 s12 hide-on-med-and-down">

                    <div class="side-vector">

                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve"><style type="text/css" scoped>.ht0{fill:#1259AF;}.ht1{fill:#034382; stroke: none;}.ht2{fill:#FFFFFF;}</style><g><polygon class="ht0" points="29.6,119 29.6,278 73.3,278 73.3,141.8 160.7,80.8 255,142.6 255,278 298.7,278 298.7,119 159.9,28.1 "/><polygon class="ht0" points="195.6,278 195.6,160.9 125.7,160.9 125.7,278 68.6,315 139.9,315 "/></g><circle class="ht0" cx="271" cy="46.2" r="32"/><path class="ht1" d="M262.8,60.6l16.5,16.5C292.9,73.5,303,61,303,46.2c0-0.3,0-0.6,0-0.9l-12.9-11.9L262.8,60.6z"/><g><path class="ht2" d="M271.8,53.4c1.4,1.4,1.4,3.8,0,5.2l-2.9,2.9c-1.4,1.4-3.8,1.4-5.2,0l-12.8-12.9c-1.4-1.4-1.4-3.8,0-5.2l2.9-2.9c1.4-1.4,3.8-1.4,5.2,0L271.8,53.4z"/><path class="ht2" d="M283,31.1c1.4-1.4,3.8-1.4,5.2,0l2.9,2.9c1.4,1.4,1.4,3.8,0,5.2L269,61.3c-1.4,1.4-3.8,1.4-5.2,0l-2.9-2.9c-1.4-1.4-1.4-3.8,0-5.2L283,31.1z"/></g></svg>

                    </div>

                </div>

            </div>

            <div class="steps-buttons-wrapper hide">

                <button class="btn-back btn-primary">
                    <i class="fa fa-chevron-left"></i>
                    <?php echo __('Back', Homi_Addons::PLUGIN_NAME); ?>
                </button>

            </div>

        </div>

        <?php
    }


    private function preloader(){
        ?>

        <div class="preloader-wrapper hide">

            <div class="preloader">

                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve">
                    <g>
                        <polygon id="polygon1" style="fill:#1259AF;"  points="29.6,119 29.6,278 73.3,278 73.3,141.8 160.7,80.8 255,142.6 255,278 298.7,278 298.7,119 159.9,28.1"/>
                        <polygon id="polygon2" style="fill:#1259AF;" points="195.6,278 195.6,160.9 125.7,160.9 125.7,278 68.6,315 139.9,315 	"/>
                    </g>
                </svg>

                <div class="preloader-text">
                    <?php echo __( 'Please wait while we are processing your information', Homi_Addons::PLUGIN_NAME ); ?>
                </div>

            </div>

        </div>

        <?php
    }

}
