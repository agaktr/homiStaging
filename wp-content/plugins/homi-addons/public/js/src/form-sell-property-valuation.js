/*  global AjaxHandler */
(function ($) {
    'use strict';

    $(document).ready(function(){

        function get_property_type() {

            return $('input[name="valuation_request_property_type"]:checked').val();

        }

        function property_type_handle() {

            var $addressStep 	= $('#stepAddressInfo');
            var $stepSize 		= $('#stepSize');
            var $houseTitle 	= $('.house-title');
            var $apartmentTitle = $('.apartment-title');

            if (get_property_type() === 'house') {

                $houseTitle.removeClass('hide');
                $apartmentTitle.addClass('hide');

                $addressStep.attr('data-next-step', 'stepSize');
                $stepSize.attr('data-back-to', 'stepAddressInfo');

                $('#stepApartmentFloor').addClass('inactive-step');

            }
            else {

                $apartmentTitle.removeClass('hide');
                $houseTitle.addClass('hide');

                $addressStep.attr('data-next-step', 'stepApartmentFloor');
                $stepSize.attr('data-back-to', 'stepApartmentFloor');
                $('#stepApartmentFloor').removeClass('inactive-step');

            }

        }

        var $valuationForm          = $('#propertyValuation'),
            $createRequest          = $('#createValuationRequest'),
            $updateRequest          = $('#updateValuationRequest'),
            $request_id             = $('#request_id'),
            $requester_existing     = $('#requester_existing'),
            $newUserID              = $('#new-user-id'),
            $acContactID            = $('#ac_contact_id'),
            $form                   = $("form");

        if( $valuationForm.length > 0 ) {

            property_type_handle();

            $('input[name="valuation_request_apartment_type"]').on('change', function () {

                var $apartment_type = $('input[name="valuation_request_apartment_type"]:checked').val();
                var $floor_input = $('#valuation_request_floor');
                var $floor_range = $('#stepApartmentFloor .range');
                var $range_label = $('#stepApartmentFloor .ui-slider-handle.ui-state-default.ui-corner-all');
                var $floor_default;

                if ($apartment_type === 'basement_apartment') {

                    $floor_default = -1;

                }
                else if ($apartment_type === 'ground_floor') {

                    $floor_default = 0;

                }
                else {

                    $floor_default = 2;

                }

                $floor_input.val($floor_default);
                $floor_range.slider("value", $floor_default);
                $range_label.attr('data-value', $floor_default);

            });

            $('input[name="valuation_request_property_type"]').on('change', function () {

                property_type_handle();

            });

            $createRequest.on( 'click', function(){

                jQuery.ajax({
                    url: AjaxHandler.ajax_url,
                    type: 'POST',
                    data: {
                        action: AjaxHandler.ajax_insert_request,
                        data: $("form").serialize()
                    },
                    success: function (response) {

                        if( response.status === 'success' ){

                            console.log( response );
                            $request_id.val( response.request_id );
                            $requester_existing.val( response.requester_existing );
                            $acContactID.val( response.ac_contact_id );

                        }
                        else {
                            console.log( response );
                        }



                    }
                });


            });

            $updateRequest.on( "click", function (e) {

                e.preventDefault();
                e.stopPropagation();
                var $preloader = $('.preloader-wrapper');
                var $that = $(this);


                jQuery.ajax({
                    url: AjaxHandler.ajax_url,
                    type: 'POST',
                    data: {
                        action: AjaxHandler.ajax_update_request,
                        data: $form.serialize()
                    },
                    success: function (response) {

                        console.log(response);

                        if (response.status === 'success') {

                            if( $requester_existing.val() === 'yes' ){

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

            });

        }//Endif Free Valuation form

    });


}(jQuery));
