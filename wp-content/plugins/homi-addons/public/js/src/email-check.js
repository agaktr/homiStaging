/*  global AjaxHandler */
(function ($) {
    'use strict';

    $(document).ready(function(){

        var $checkEmail         = $(".check_email"),
            $email_available 	= $("#email_available"),
            $email_messages     = $(".email-message"),
            $email_valid        = $(".email-message.valid"),
            $email_invalid      = $(".email-message.invalid");

        $checkEmail.on('change', function(){

            jQuery.ajax({
                url: AjaxHandler.ajax_url,
                type: 'POST',
                data: {
                    action: AjaxHandler.ajax_check_email,
                    email: $checkEmail.val()
                },
                success: function (response) {

                    console.log( response );

                    $email_available.prop('checked', response.available );
                    $email_messages.addClass('hide');

                    if( response.available === true ){

                        $email_valid.removeClass('hide');

                    }
                    else {

                        $email_invalid.removeClass('hide');

                    }

                }

            });//end ajax

        });//end change event

    });//end doc ready

})( jQuery );

