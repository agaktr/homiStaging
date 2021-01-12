/*  global AjaxHandler */
(function ($) {
    'use strict';

    $(document).ready(function(){

        var $areasValidate      = $('.validate-suburb, .validate-address, .validate-postcode'),
            $changeTrigger      = $('#changeTrigger'),
            $geocoder;

        if( $areasValidate.length > 0 ) {

            $areasValidate.each( function(){

                var $currentField = $(this);
                var $types = 'address';

                if( $currentField.attr('data-types') ){
                    $types = $currentField.attr('data-types');
                }
                console.log( $types );

                var autocomplete = new google.maps.places.Autocomplete( $(this).get(0), { types: [$types] } );

                autocomplete.setComponentRestrictions( {'country': ['gr'] } )
                autocomplete.setFields( ['address_components', 'geometry', 'name'] );

                autocomplete.addListener('place_changed', function() {

                    var place = autocomplete.getPlace();
                    if (!place.geometry) {
                        // User entered the name of a Place that was not suggested and
                        // pressed the Enter key, or the Place Details request failed.
                        window.alert("No details available for input: '" + place.name + "'");
                        return;
                    }

                    console.log( place.address_components );
                    console.log( place.geometry );
                    console.log( place.geometry.location.lat() );
                    console.log( place.geometry.location.lng() );

                    $('.validate-lat').val( place.geometry.location.lat() );
                    $('.validate-long').val( place.geometry.location.lng() );

                    if ( place.address_components ) {

                        var suburb      = [],
                            address     = [],
                            postcode    = [];

                        var arrayLength = place.address_components.length;

                        for ( var i = 0; i < arrayLength; i++) {

                            if( place.address_components[i]
                                && place.address_components[i].short_name
                                && place.address_components[i].types.includes("administrative_area_level_3") === false
                                && place.address_components[i].types.includes("country") === false
                                && place.address_components[i].types.includes("route") === false
                                && place.address_components[i].types.includes("street_number") === false
                                && place.address_components[i].types.includes("postal_code") === false
                            ){

                                suburb.push( place.address_components[i].short_name );

                            }


                            if( place.address_components[i]
                                && place.address_components[i].short_name
                                && ( place.address_components[i].types.includes("route") === true || place.address_components[i].types.includes("street_number") === true )
                            ){

                                address.push( place.address_components[i].short_name );

                            }

                            if( place.address_components[i]
                                && place.address_components[i].short_name
                                && place.address_components[i].types.includes("postal_code") === true
                            ){

                                postcode.push( place.address_components[i].short_name );

                            }

                        }

                        console.log( suburb );
                        console.log( address );
                        console.log( postcode );

                        if( $currentField.hasClass('validate-this-only') ){

                            if( $currentField.hasClass('validate-suburb') ){
                                $currentField.val( suburb.join(', ') );
                            }
                            else if( $currentField.hasClass('validate-address') ){
                                $currentField.val( address.reverse().join(' ') );
                            }
                            else if( $currentField.hasClass('validate-postcode') ){
                                $currentField.val( postcode.join(', ') );
                            }

                        }
                        else {

                            $('.validate-suburb').val( suburb.join(', ') );
                            $('.validate-address').val( address.reverse().join(' ') );
                            $('.validate-postcode').val( postcode.join(', ') );

                        }

                    }


                });

            });

        }

    }); //End Document ready


}(jQuery));
