(function ($) {
    'use strict';

    $(document).ready(function(){

        var $repeatPassword     = $("#repeat_password"),
            $btnCreateAccount   = $("#createAccountBtn"),
            $registerInputs     = $("#step-register input");


        function check_register_consent(){

            if ($('#step-register input:checked').length === $registerInputs.length) {

                $btnCreateAccount.removeClass('disabled');

            }
            else {

                $btnCreateAccount.addClass('disabled');

            }

        }

        $repeatPassword.on('change', function(){

            var password 		= $("#user_pass").val();
            var confirmPassword = $repeatPassword.val();

            if ( password !== confirmPassword ) {

                $repeatPassword.val('');

                setTimeout( function(){ $repeatPassword.focus(); }, 200);

            }

        });


        $btnCreateAccount.on("click", function(e){

            e.preventDefault();
            $('form').submit();

        });


        $('.register-overlay').on('click', function(){

            document.cookie = 'new_user_message=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
            $('.register-overlay').remove();

        });

        if( $('#registerModal').length > 0 ){
            document.cookie = 'new_user_message=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }


        check_register_consent();

        $registerInputs.on('change', function(){

            check_register_consent();

        });

    });


}(jQuery));
