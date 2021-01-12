/*  global AjaxHandler */
(function ($) {
    'use strict';

    $(document).ready(function(){

        var $ctaBlock = $('.homi-cta-block');

        if( $ctaBlock.length > 0 ){

            $ctaBlock.each(function(){

                var $currentCta         = $(this);
                var $ctaBtn             = $(this).find('.submit-cta');
                var $ctaIntentionTags   = $(this).find('#intentionTags input');
                var $existingUrlField   = $currentCta.find('#existingUrl');

                $ctaBtn.on('click', function(e){

                    e.preventDefault();

                    var $block = $(this).closest('.homi-cta-block');
                    var $form = $block.find('form');

                    jQuery.ajax({
                        url: AjaxHandler.ajax_url,
                        type: 'POST',
                        data: {
                            action: AjaxHandler.ajax_add_cta_contact,
                            data:  $form.serialize()
                        },
                        success: function (response) {
 
                            console.log(response);

                            $block.removeClass('loading');
                            if( response.ac_contact ){

                                $block.find('.success-message').removeClass('hide');

                            }
                            else {
                                $block.find('.error-message').removeClass('hide');
                            }


                        },
                        beforeSend: function () {

                            $block.addClass('loading');

                        },
                        fail: function () {

                            $block.removeClass('loading');
                        }
                    });


                });

                $ctaIntentionTags.on('change', function(){

                    if( $(this).val() === '65' ){
                        $existingUrlField.removeClass('hide');
                        $existingUrlField.find('input').prop('required',true);
                    }
                    else {
                        $existingUrlField.addClass('hide');
                        $existingUrlField.find('input').prop('required',false);
                    }

                });

            });


        }

    });

})( jQuery );
