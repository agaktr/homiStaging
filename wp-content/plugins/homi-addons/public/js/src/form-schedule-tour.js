/*  global AjaxHandler */
(function ($) {
    'use strict';

    $(document).ready(function(){

        var $scheduleBtn        = $('#scheduleTourBtn'),
            $newUserID          = $('#new-user-id'),
            $requestID          = $('#request_id'),
            $form               = $("form"),
            $datetimeInputs     = $('.days-carousel input, .timeslots__inner input'),
            $userDisplayDate    = $('.viewing-selected-date'),
            $userDisplayTime    = $('.viewing-selected-time'),
            $preloader          = $('.preloader-wrapper'),
            $preloaderText      = $('.preloader-text'),
            $that               = $scheduleBtn;


        function changeLoadingMessage( $message ){

            $preloaderText.html( $message );

        }

        function showLastStep( $message ){

            var nextStep = $("#" + $that.parents(".slider-step").data("nextStep"));
            $that.parents(".slider-step").attr("data-anim", "hide-to--left");
            nextStep.attr("data-anim", "show-from--right");
            $('.slider-step.active-step').removeClass('active-step');
            nextStep.addClass('active-step');

            $preloader.addClass('hide');
            $scheduleBtn.removeClass('disabled');

            $('.thank-you-message').html( $message );

        }


        function sendRequest( $step ){

            jQuery.ajax({
                url: AjaxHandler.ajax_url,
                type: 'POST',
                data: {
                    action: AjaxHandler.ajax_insert_tour_request,
                    step: $step,
                    data: $form.serialize()
                },
                success: function (response) {

                    console.log(response);

                    switch( response.status ) {

                        case 'newViewingRequest':

                            changeLoadingMessage( 'Setting up your account information.' );
                            sendRequest( response.step );

                            break;

                        case 'existingViewingRequest':

                            showLastStep( response.message );

                            break;


                        case 'userLoggedIn':

                            changeLoadingMessage( 'Processing your viewing request.' );
                            sendRequest( response.step );

                            break;


                        case 'userNotLoggedIn':

                            changeLoadingMessage( 'Processing your viewing request.' );
                            sendRequest( response.step );

                            break;

                        case 'newViewingRequestCreated':

                            //Change the loading Message
                            changeLoadingMessage( 'Your viewing request was submitted. We are notifying the landlord.' );

                            //Update the viewing request ID and User ID
                            $requestID.val( response.requestid );
                            $newUserID.val( response.userid );

                            sendRequest( response.step );

                            break;

                        case 'newViewingRequestFailed':

                            showLastStep( response.message );

                            break;

                        case 'landlordNotified':

                            if( $newUserID.val() ){

                                $form.submit();

                            }
                            else {

                                showLastStep( response.message );

                            }

                            break;

                        case 'landlordNotNotified':

                            showLastStep( response.message );

                            break;

                    }

                },
                beforeSend: function () {

                    $scheduleBtn.addClass('disabled');
                    $preloader.removeClass('hide');

                },
                fail: function () {

                    alert('The server failed to respond. Please refresh the page and try again. If the error persists please contact us.');
                    $scheduleBtn.removeClass('disabled');
                    $preloader.addClass('hide');

                }
            });

        }


        if( $('.schedule_tour').length > 0 ){

            $datetimeInputs.on('change', function(){

                var $selected_date = $('.day-item.selected').attr('data-date-formatted');
                var $selected_time = $('.timeslots__slot input:checked').attr('data-time');

                // console.log( $selected_date );
                // console.log( $selected_time );

                $userDisplayDate.empty().text( $selected_date );
                $userDisplayTime.empty().text( $selected_time );

            });

            $scheduleBtn.on('click', function(e){

                if( !$(this).hasClass('disabled') ) {

                    e.stopPropagation();
                    e.preventDefault();
                    $that = $(this);

                    sendRequest(0);

                }

            });



        }//If on schedule tour

    });


}(jQuery));
