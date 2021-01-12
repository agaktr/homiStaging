(function ($) {
    'use strict';

    $(document).ready(function(){

        if( $(window).width() > 990 ) {

            $('.calendar-select-col, .calendar-overview-col').theiaStickySidebar({
                // Settings
                additionalMarginTop: 100
            });

        }

        var $user_properties = $('.user-properties.owl-carousel');
        if( $user_properties.length > 0 ) {

            $user_properties.owlCarousel({
                dots: false,
                nav: true,
                navSpeed: 250,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            });

        }


        $('#confirm_request, #reject_request').on('click', function(e){

            e.preventDefault();

            var $request_action = $('#request_action');

            $('#request_post_id').val( $(this).closest('.card.request-item').attr( 'data-request-id' ) );

            if( $(this).attr('id') === 'confirm_request' ){

                $request_action.val('confirm');

            }
            else {

                $request_action.val('reject');

            }

            $('#requestForm').submit();

        });

    });

}(jQuery));
