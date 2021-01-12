<?php


class InteractiveForm {

    const FORM_TYPE_RENT            = 'rent';
    const FORM_TYPE_FREE_VALUATIONS = 'valuation';
    const FORM_TYPE_VIEWINGS        = 'schedule_tour_request';
    const FORM_TYPE_RENT_INTEREST   = 'rent_interest';

    /**
     * @var $formID string
     * @var $requestMeta array
     * @var $steps array
     * @var $type string
     */
    private $formID;
    private $requestMeta;
    private $steps;
    private $type;

    /**
     * InteractiveForm constructor.
     *
     * @param $formID string
     * @param $requestMeta array
     * @param $steps array
     * @param $type string
     *
     */
    public function __construct( $formID, $requestMeta, $steps, $type ){

        $this->formID           = $formID;
        $this->requestMeta      = $requestMeta;
        $this->steps            = $steps;
        $this->type             = $type;

    }


    public function display_form(){

        $formName = '';

        switch ( $this->type ){

            case self::FORM_TYPE_RENT :

                $formName = 'Rent Property Form';

                break;

            case self::FORM_TYPE_FREE_VALUATIONS :

                $formName = 'Property Valuation Form';

                break;

            case self::FORM_TYPE_RENT_INTEREST :

                $formName = 'Rent Interest Form';

                break;

        }

        ?>

        <div id="<?php echo $this->formID; ?>" class="card row interactive-form" data-form-name="<?php echo $formName; ?>">

            <?php $this->preloader(); ?>

            <form action="<?php echo site_url( '/' . InteractiveFormActions::AFTER_VALUATION_REQUEST_URL ); ?>"  method="POST" enctype="multipart/form-data">

                <input type="hidden" name="message_language" value="<?php echo ( strpos( $_SERVER['REQUEST_URI'], '/el') !== false ? 'GR' : 'EN' ); ?>">
                <input type="hidden" id="request_id" name="request_id" value="">
                <input type="hidden" id="requester_existing" name="requester_existing" value="">
                <input type="hidden" id="interactive-form-request" name="interactive-form-request" value="<?php echo $this->type; ?>">
                <input type="hidden" id="new-user-id" name="new-user-id" value="">
                <input type="hidden" id="ac_contact_id" name="ac_contact_id" value="">

                <div class="form-step-wrap col s12">

                    <div class="progress">
                        <div class="progressbar empty"></div>
                        <div id="prog" class="progressbar"></div>
                    </div>

                    <?php $this->display_steps(); ?>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </form>

        </div>

        <?php

    }


    private function display_steps(){

        $formStep = new FormStep( $this->requestMeta );

        foreach( $this->steps as $index => $step ){

            if( isset( $step['step_id'] ) && isset( $step['callback'] ) && method_exists( $formStep, $step['callback'] ) ){

                $callback = $step['callback'];
                $dataBack = ( $index !== 0 && isset( $this->steps[ $index - 1 ]['step_id'] ) ? 'data-back-to="'.$this->steps[ $index - 1 ]['step_id'].'"' : '' );
                $dataNext = ( isset( $this->steps[ $index + 1 ]['step_id'] ) ? 'data-next-step="'.$this->steps[ $index + 1 ]['step_id'].'"' : '' );
                $dataStepName = 'data-step-name="'.$step['step_name'].'"';
                ?>

            <div id="<?php echo $step['step_id']; ?>" class="slider-step step <?php echo ( $index === 0 ? 'first-step active-step' : ''); ?>" <?php echo $dataNext; ?> <?php echo $dataBack; ?> <?php echo $dataStepName; ?>>

                <?php if( isset( $step['step_title'] ) ): ?>

                    <div class="steps-title">

                        <?php if( is_array( $step['step_title'] ) ): ?>

                            <span class="house-title">
                                 <?php echo $step['step_title']['house']; ?>
                            </span>

                            <span class="apartment-title">
                                 <?php echo $step['step_title']['apartment']; ?>
                            </span>

                        <?php else: ?>

                            <?php echo $step['step_title']; ?>

                        <?php endif; ?>

                    </div>

                <?php endif; ?>

                <div class="steps-content">

                    <?php $formStep->$callback(); ?>

                </div>

                <div class="steps-buttons-wrapper">

                    <?php if( $index !== 0 ): ?>

                        <button class="btn-back btn-primary">
                            <i class="fa fa-chevron-left"></i>
                            <?php echo __('Back', Homi_Addons::PLUGIN_NAME); ?>
                        </button>

                    <?php endif; ?>

                    <?php if( isset( $this->steps[ $index + 1 ]['step_id'] ) ): ?>

                        <button <?php echo ( isset( $step['next_btn_id'] ) && !empty( $step['next_btn_id'] ) ? 'id="'.$step['next_btn_id'].'"' : '' ); ?> class="btn-next btn-primary disabled">
                            <?php echo ( isset( $step['next_btn_txt'] ) && !empty( $step['next_btn_txt'] ) ? $step['next_btn_txt'] : __('Continue', Homi_Addons::PLUGIN_NAME) ); ?>
                            <i class="fa fa-chevron-right"></i>
                        </button>

                    <?php endif; ?>

                </div>

            </div>

            <?php
            }

        }

    }


    private function preloader(){
        ?>

        <div class="preloader-wrapper hide">

            <div class="preloader">

                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve">
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
