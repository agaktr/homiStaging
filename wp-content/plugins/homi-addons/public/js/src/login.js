/*  global AjaxLoginController */
(function( $ ) {

    $(document).ready(function(){

        var $recaptchaCheckbox  = $('#recaptchaCheck'),
            $recaptchaField     = $('.recaptcha-field');


        if ( "grecaptcha" in window && $recaptchaField.length > 0 ) {

            grecaptcha.ready(function() {

                grecaptcha.execute( AjaxLoginController.recaptcha_site_key, {action: 'homepage'}).then(function( token ) {

                    jQuery.ajax({
                        url: AjaxLoginController.ajax_url,
                        type: 'POST',
                        data: {
                            action: AjaxLoginController.authenticate_recaptcha,
                            token: token
                        },
                        success: function (response) {

                            // console.log(response);
                            $recaptchaField.find('.running').addClass('hide');

                            if ( response.auth === true ) {

                                $recaptchaField.find('.authenticated').removeClass('hide');
                                $recaptchaCheckbox.prop('checked', true );

                            }
                            else {
                                $recaptchaField.find('.not-authenticated').removeClass('hide');
                                $recaptchaCheckbox.prop('checked', false );
                            }

                        },
                        beforeSend: function () {


                        },
                        fail: function () {


                        }
                    });  // End ajax call

                }); // End recaptcha execute

            }); // End recaptcha ready

        }// Endif recaptcha obj exists


    }); // End document ready

})( jQuery );
