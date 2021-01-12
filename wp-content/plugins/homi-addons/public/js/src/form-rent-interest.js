/*  global AjaxHandler */
(function ($) {
    'use strict';

    //Your Jquery Code here
    $(document).ready(function(){

        var $rentInterestForm       = $('#rentInterestForm'),
            $btnCreate              = $('#createRentInterestRequest'),
            $btnUpdate              = $('#updateRentInterestRequest'),
            $request_id             = $('#request_id'),
            $requester_existing     = $('#requester_existing'),
            $newUserID              = $('#new-user-id'),
            $acContactID            = $('#ac_contact_id'),
            $form                   = $("form");

        if( $rentInterestForm.length > 0 ) {

            // console.log('rent interest form');

            $btnCreate.on( 'click', function(){

                // console.log('will create a rent interest abandoned request');

                jQuery.ajax({
                    url: AjaxHandler.ajax_url,
                    type: 'POST',
                    data: {
                        action: AjaxHandler.ajax_rent_interest_insert_request,
                        data: $("form").serialize()
                    },
                    success: function (response) {

                        console.log(response);

                        if( response.status === 'success' ){

                            $request_id.val( response.request_id );
                            $requester_existing.val( response.requester_existing );
                            $acContactID.val( response.ac_contact_id );

                        }
                        else {
                            console.log( response );
                        }


                    }

                });//end ajax

            });//End click event

            $btnUpdate.on("click", function (e) {

                e.preventDefault();
                e.stopPropagation();
                var $preloader = $('.preloader-wrapper');
                var $that = $(this);


                jQuery.ajax({
                    url: AjaxHandler.ajax_url,
                    type: 'POST',
                    data: {
                        action: AjaxHandler.ajax_rent_interest_update_request,
                        data:  $form.serialize()
                    },
                    success: function (response) {

                        console.log(response);

                        if (response.status === 'success') {

                            if( $requester_existing.val() === 'yes' || $('body').hasClass('logged-in') ){

                                var nextStep = $("#" + $that.parents(".slider-step").data("nextStep"));
                                $that.parents(".slider-step").attr("data-anim", "hide-to--left");
                                nextStep.attr("data-anim", "show-from--right");
                                $('.slider-step.active-step').removeClass('active-step');
                                nextStep.addClass('active-step');

                                $('.thank-you-message').html(response.message);
                                $preloader.addClass('hide');

                            }
                            else {

                                $newUserID.val( response.userid );
                                $form.submit();

                            }

                        }
                        else {
                            $preloader.addClass('hide');
                            alert('An error occurred please try again');
                        }

                    },
                    beforeSend: function () {

                        $preloader.removeClass('hide');

                    },
                    fail: function () {

                        $preloader.addClass('hide');

                    }
                });

            });//End click event


        }//Endif Free Valuation form

    });

}(jQuery));
