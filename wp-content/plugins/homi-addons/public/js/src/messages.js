/*  global AjaxHandler */
(function ($) {
    'use strict';

    $(document).ready(function(){

        $('.fep-message-head').on('click', function(){

            var $that 				= $(this);
            var $message_id 		= $that.attr('data-fep_id');
            var $widgets_wrapper 	= $('.messages-sidebar-widgets');

            // alert( $message_id );

            jQuery.ajax({
                url: AjaxHandler.ajax_url,
                type: 'POST',
                data: {
                    action: AjaxHandler.ajax_load_message_widgets,
                    message_id: $message_id
                },
                success: function (response) {

                    $widgets_wrapper.removeClass('loading');
                    $widgets_wrapper.empty().append( response );

                },
                beforeSend: function () {

                    $widgets_wrapper.addClass('loading');

                },
                fail: function () {

                    $widgets_wrapper.removeClass('loading');

                }
            });

        });


        $('.add-file-trigger').on('click', function(e){
            e.preventDefault();
            e.stopPropagation();
            $('.file-message-wrapper ').toggleClass('open');
        });

    });


}(jQuery));
