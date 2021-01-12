/*  global AjaxHandler */
(function( $ ) {

    $(document).ready(function(){


        var $lost_pass_form = $('#lostpasswordform');

        if( $lost_pass_form.length > 0 ){

            $lost_pass_form.attr('action', $lost_pass_form.attr('data-trp-original-action') );

        }

        $('.timeslots__slot.checkbox-with-vector.unavailable').on('click', function (e) {
            e.stopPropagation();
            e.preventDefault();
        });



        $('.date-item:not(.unavailable) .day-item.checkbox-with-vector').on('click', function () {

            var $date = $(this).attr('data-date');
            var $timeslots = $('#' + $date + '-timeslots');
            var $activeSlots = $('.timeslots__slots:not(.hide)');

            $activeSlots.find('input:checked').removeAttr('checked');
            $activeSlots.addClass('hide');
            $timeslots.removeClass('hide');

        });


        //Check phone number
        $('.phone-field').on('keyup', function () {

            if (this.value.length > 1) {

                if ($(this).val().charAt(0) !== '2' && $(this).val().charAt(0) !== '6') {
                    $(this).closest('.input-field').addClass('invalid');
                } else if ($(this).val().charAt(0) === '6' && $(this).val().charAt(1) !== '9') {
                    $(this).closest('.input-field').addClass('invalid');
                } else if (this.value.length === 10) {
                    $(this).closest('.input-field').removeClass('invalid').addClass('valid');
                } else {
                    $(this).closest('.input-field').removeClass('invalid');
                }

            }

        });


        var $radioBox = $('.checkbox-with-vector input');

        function radioHandler() {

            $radioBox.each(function () {

                if ($(this).is(':checked')) {

                    $(this).closest('.checkbox-boxes').find('.checkbox-with-vector.selected').removeClass('selected');
                    $(this).closest('.checkbox-with-vector').addClass('selected');

                } else {
                    $(this).closest('.checkbox-with-vector').removeClass('selected');
                }
            });
        }

        radioHandler();

        $radioBox.on('change', function () {

            radioHandler();

        });


        var $days_carousel = $('.days-carousel');

        if( $days_carousel.length > 0 ) {

            var $items          =  parseInt( $days_carousel.attr('data-carousel-items') ),
                $current_month  = $('.current-month');

            $days_carousel.owlCarousel({
                dots: false,
                nav: true,
                slideBy: 7,
                navSpeed: 250,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    0: {
                        items: 5
                    },
                    600: {
                        items: $items
                    },
                    1000: {
                        items: $items
                    }
                }
            });


            if( $current_month.length > 0 ) {

                var $fMonth = $('.first-month'),
                    $sMonth = $('.second-month'),
                    $mDays 	= parseInt( $current_month.attr('data-monthDays') );

                $days_carousel.on('changed.owl.carousel', function (elem) {

                    if ( elem.property.value >= $mDays ) {

                        $fMonth.addClass('hide');
                        $sMonth.removeClass('hide');

                    }
                    else {

                        $fMonth.removeClass('hide');
                        $sMonth.addClass('hide');

                    }

                });

            }

        }


        var $rangeWrapper = $('.range-wrapper');

        if( $rangeWrapper.length > 0 ) {

            $rangeWrapper.each(function () {

                var $range = $(this).find('.range');
                var $range_value = $(this).find('.range-value');
                var $symbol = '';

                if (typeof $range.data('symbol') !== 'undefined') {
                    $symbol = $range.data('symbol');
                } else {
                    $symbol = '';
                }

                $range.slider({
                    range: "min",
                    value: $range.data('value'),
                    min: $range.data('min'),
                    max: $range.data('max'),
                    slide: function (event, ui) {
                        $range_value.val(ui.value);
                        $(this).closest('.range-wrapper').find('.ui-slider-handle.ui-state-default.ui-corner-all').attr('data-value', ui.value + $symbol);
                    }
                });

                var $handler = $(this).closest('.range-wrapper').find('.ui-slider-handle.ui-state-default.ui-corner-all');

                $handler.attr('data-value', $range.slider("value") + $symbol);
                $range_value.val($range.slider("value"));

                $range_value.on('change, keyup', function () {

                    if ($value === '') {
                        $(this).val(0);
                    }
                    var $value = $(this).val();

                    $range.slider("value", $value);
                    $(this).closest('.range-wrapper').find('.ui-slider-handle.ui-state-default.ui-corner-all').attr('data-value', $value + $symbol);

                });

            });

        }

        var $blogMenu = $('.desktop-blog-menu');
        $('.mobile-blog-trigger').on('click', function(){
            $blogMenu.toggleClass('active');
        });


        $('.upload-request-submit').on('click', function(e){
            e.preventDefault();

            if ($('#submission_consent').is(':checked')) {

                var $form = $('form');
                $form.append('<input type="hidden" name="final_submission" value="yes">');
                $form.submit();

            }
            else {
                $('.consent-notice').removeClass('hide');
            }

        });

        $('.theia-content, .theia-sidebar').theiaStickySidebar({
            // Settings
            additionalMarginTop: 80
        });

    });

})( jQuery );
