/*  global AjaxHandler */
(function ($) {
    'use strict';

    $(document).ready(function(){

        var $repeatPassword = $("#repeat_password"),
            password 		= $("#user_pass").val(),
            confirmPassword = $repeatPassword.val(),
            createPass      = $('#createPassword');

        var $resetPassForm      = $('#resetpassform'),
            $resetPass1         = $('#pass1'),
            $resetPass2         = $('#pass2'),
            $resetBtnWrapper    = $('.reset-button-wrapper'),
            $resetBtn           = $('#resetpass-button');

        function checkPasswordMatch() {

            if ( password !== confirmPassword ) {

                $repeatPassword.val('');
                alert('Passwords do not match.');
                createPass.addClass('disabled');
                setTimeout( function(){ $repeatPassword.focus(); }, 200);


            }
            else {
                createPass.removeClass('disabled');
            }


        }

        $repeatPassword.on('change', function(){
            checkPasswordMatch();
        });


        function checkPasswordResetMatch(e) {

            if ( $resetPass1.val() !== $resetPass2.val() ) {

                $resetBtnWrapper.addClass('disabled');
                $resetBtn.addClass('disabled');

                if( e.type === 'change' ){

                    $resetPass2.val('');
                    alert('Passwords do not match.');
                    setTimeout( function(){ $resetPass2.focus(); }, 200);

                }

            }
            else {

                console.log('should remove disabled')
                $resetBtnWrapper.removeClass('disabled');
                $resetBtn.removeClass('disabled');

            }


        }

        $resetPass2.on('change keyup', function(e){
            checkPasswordResetMatch(e);
        });


        if( $resetPassForm.length > 0 ){

            console.log('should change action');
            $resetPassForm.attr( 'action', $resetPassForm.attr('data-trp-original-action') );

        }


});

})( jQuery );

