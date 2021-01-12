(function ($) {
    'use strict';

    $(document).ready(function(){

        var $stepsForm          = $('.interactive-form'),
            $slider_step        = $('.slider-step'),
            $preloader          = $('.interactive-form > .preloader-wrapper'),
            $formInputs         = $slider_step.find('input'),
            $btnNext            = $stepsForm.find(".btn-next:not(.btn-submit)"),
            $btnBack            = $stepsForm.find(".btn-back");

        function ga_send_form_event(){

            if( ! $stepsForm.hasClass('no-tracking') ) {

                if ("ga" in window) {

                    if ( typeof ga === 'function' && typeof ga.getAll !== 'undefined' ){

                        var $activeStep = $stepsForm.find('.active-step');
                        var clientId = ga.getAll()[0].get('clientId');

                        ga('create', 'UA-156601739-1', {
                            'clientId': clientId
                        });

                        ga('set', 'transport', 'beacon');

                        ga('send', 'event', {
                            'eventCategory': $stepsForm.attr('data-form-name'), //required
                            'eventAction': 'Step Abandoned', //required
                            'eventLabel': $stepsForm.attr('data-form-name') + ' / ' + $activeStep.attr('data-step-name'),
                            'eventValue': 1,
                            'transport': 'beacon',
                            'hitCallback': function () {
                                // alert('Are you sure you want to leave?');
                                console.log('Interactive form tracked');
                                return null;
                                // console.log($stepsForm.attr('data-form-name'));
                                // console.log($activeStep.attr('data-step-name'));
                            },
                            'hitCallbackFail': function () {
                                console.log("Unable to send Google Analytics data");
                                return null;
                            }
                        });

                    }

                }
            }

        }

        function progressBarController() {

            var $active_step 	= $('.active-step');
            var $index 			= $(".slider-step:not(.inactive-step)").index($active_step);
            var $progressBar 	= $('#prog');
            var $steps 			= $('.slider-step:not(.inactive-step)').length - 2;

            $progressBar.width($index * (100 / $steps) + '%');

            $('html, body').animate({
                scrollTop: parseInt( $(".interactive-form").offset().top ) - 60
            }, 300);

        }

        function checkRequired( $step ){

            var $filled         = true,
                $checked        = true,
                $radio_selected = true,
                $fields 		= $step.find("select, textarea, input").filter('[required]:visible').serializeArray(),
                $radio  		= $step.find('input[type="radio"]'),
                $checkboxes  	= $step.find('input[type="checkbox"]').filter('[required]:visible');

            var $day_selected, $time_selected;

            if ($fields.length > 0) {

                $.each($fields, function (i, field) {

                    var stepInput = $('input[name='+field.name+']');
                    if (!field.value || ( typeof stepInput[0] !== 'undefined' && !stepInput[0].checkValidity() ) ) {
                        $filled = false;
                    }

                });

            }

            if( $checkboxes.length > 0 ){

                if ($step.find('input[type="checkbox"]:checked').filter('[required]:visible').length !== $checkboxes.length) {

                    $checked = false;

                }

            }


            if( $radio.length > 0 ){

                if ($step.find('input[type="radio"]:checked').length === 0 ) {

                    $radio_selected = false;

                }

            }

            if( $step.find('input[name="tour_request_tour_date"]').length > 0 ){

                // console.log('theres a calendar on that step');
                $day_selected = $step.find('input[name="tour_request_tour_date"]:checked').length > 0;

                $time_selected = $step.find('.timeslots__slot input[type="radio"]:checked').length > 0;

                return $day_selected && $time_selected;

            }
            else if( $step.attr('id') === 'stepCalendar' ){

                $day_selected = $step.find('.day-item input:checked').length > 0;
                $time_selected = $step.find('.timeslots__slot input:checked').length > 0;

                return $day_selected && $time_selected;

            }
            else {

                return $filled && $checked && $radio_selected;

            }

        }

        function changeStepsHeight(){

            if ( $(window).width() > 990) {

                var maxHeight = -1;

                $slider_step.each(function () {

                    if ($(this).height() > maxHeight) {
                        maxHeight = $(this).height();
                    }

                });

                $('.form-step-wrap').height(maxHeight);

                maxHeight = -1;

                var $stepsContent = $('.steps-content');

                $stepsContent.each(function () {

                    if ($(this).height() > maxHeight) {
                        maxHeight = $(this).height();
                    }

                });

                $stepsContent.height(maxHeight);

            }

        }

        function checkAllSteps(){

            $slider_step.each(function () {

                var $step = $(this);
                var $nextBtn = $step.find('.btn-next');

                if ( checkRequired($step) ) {

                    $nextBtn.removeClass('disabled');

                } else {

                    $nextBtn.addClass('disabled');

                }

            });

        }


        if( $stepsForm.length > 0 ){

            $( window ).on( 'load resize', function() {
                changeStepsHeight();
                checkAllSteps();
                $preloader.remove();
            });

            console.log('checking ga');

            if( ! $stepsForm.hasClass('no-tracking') ) {

                if ("ga" in window) {

                    if ( typeof ga === 'function' && typeof ga.getAll !== 'undefined' ){

                        console.log('ga is loaded.');


                        window.addEventListener("beforeunload", function (e) {

                            ga_send_form_event();

                        });

                    }
                    else {
                        console.log('ga was not loaded. Maybe blocked in private browsing');
                    }

                }
                else {
                    console.log('ga not in widnow :/');
                    return null;
                }


            }


            $formInputs.on('change keyup', function () {

                var $step = $(this).closest('.slider-step');
                var $nextBtn = $step.find('.btn-next');

                if ( checkRequired( $step ) ) {

                    $nextBtn.removeClass('disabled');

                }
                else {

                    $nextBtn.addClass('disabled');

                }

            });

            $btnNext.on("click", function (e) {


                e.preventDefault();

                if (checkRequired($(this).closest(".slider-step")) === true) {

                    var nextStepID = $(this).closest(".slider-step").attr("data-next-step");
                    var nextStep = $("#" + nextStepID );
                    $(this).closest(".slider-step").attr("data-anim", "hide-to--left");
                    nextStep.attr("data-anim", "show-from--right");
                    $('.slider-step.active-step').removeClass('active-step');
                    nextStep.addClass('active-step');

                    $stepsForm.removeClass('active-step-'+ $(this).closest('.slider-step').attr('id')).addClass('active-step-' + nextStepID );

                    progressBarController();

                    console.log('Next step: '+ nextStep.attr('id'));

                }

            });

            $btnBack.on("click", function (e) {
                e.preventDefault();

                var backStepID = $(this).closest(".slider-step").attr("data-back-to");
                var backTo = $("#" + backStepID );
                $(this).closest(".slider-step").attr("data-anim", "hide-to--right");
                backTo.attr("data-anim", "show-from--left");
                $('.slider-step.active-step').removeClass('active-step');
                backTo.addClass('active-step');

                $stepsForm.removeClass('active-step-'+ $(this).closest('.slider-step').attr('id') ).addClass('active-step-' + backStepID );

                progressBarController();

            });

        }


    });


}(jQuery));
