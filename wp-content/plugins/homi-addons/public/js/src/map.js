/*  global AjaxHandler */
(function ($) {
    'use strict';

    $(document).ready(function(){

        var $user_zip_code      = $('.postcode-field'),
            $suburbField        = $('.suburb-field'),
            $streetNameField    = $('.street-name-field'),
            $streetNumberField  = $('.street-number-field'),
            $address_inputs     = $('.address-inputs input'),
            $latField           = $('.street-lat-field'),
            $longField          = $('.street-long-field'),
            $postcodeDisplay    = $('.postcode-var'),
            $consent_item       = $('.address-inputs .consent-item'),
            $map,
            $geocoder,
            $marker,
            $athens = {lat: 37.990832, lng: 23.70332};

        //Disable the ENTER key because it has a bug with the next and previous step
        $(document).keypress(
            function(event){
                if (event.which === '13') {
                    event.preventDefault();
                }
            });


        //Function to check if the string is numeric.
        // Used to check if the first component of the street address is the street number indeed
        function isNumeric(value) {
            return /^-?\d+$/.test(value);
        }

        function initMap() {

            //Setup the Maps Geocoder
            $geocoder = new google.maps.Geocoder();

            //Setup Maps Display
            $map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                minZoom: 7,
                maxZoom: 18,
                disableDefaultUI: true,
                center: $athens
            });

            //Set the Athens Marker on map
            $marker = new google.maps.Marker({
                position: $athens,
                map: $map
            });

        }

        function SetMarker(position, zoom) {

            //Remove previous Marker.
            if ($marker != null) {
                $marker.setMap(null);
            }

            //Set Marker on Map.
            $marker = new google.maps.Marker({
                position: position,
                map: $map
            });


            var bounds = new google.maps.LatLngBounds();
            bounds.extend(new google.maps.LatLng(position));
            $map.fitBounds(bounds);
            $map.panToBounds(bounds);
            $map.setZoom(zoom);

        }

        function codeAddress(address) {

            $geocoder.geocode({'address': address}, function (results, status) {

                var latLng = {lat: results[0].geometry.location.lat(), lng: results[0].geometry.location.lng()};

                if (status === 'OK') {

                    SetMarker(latLng, 16);

                    $latField.val( results[0].geometry.location.lat() );
                    $longField.val( results[0].geometry.location.lng() );

                    if ( typeof (results[0].address_components[5].long_name) !== "undefined" && results[0].address_components[5].long_name !== null ) {

                        var $google_maps_zip_code = parseInt( results[0].address_components[5].long_name.replace(/\s/g, ''));

                        if ( $google_maps_zip_code !== $user_zip_code.val() ) {

                            $user_zip_code.val( $google_maps_zip_code );
                            $user_zip_code.closest('.input-field').find('#wrongInput').addClass('hide');

                        }

                    }

                }
                else {

                    alert('Could not find you address on map for the following reason: ' + status);
                    return false;

                }

            });

        }

        function confirmAddressCheck(){

            var $filled = true;

            $address_inputs.filter('[required]').each(function () {

                if ($(this).val() === '') {
                    $filled = false;
                }

            });

            console.log( $filled );

            if ($filled) {

                var $address = $streetNameField.val() + ' ' + $streetNumberField.val() + ' ' + $suburbField.val();
                codeAddress($address);

                $consent_item.removeClass('hide');

            }
            else {

                $consent_item.addClass('hide');
                $consent_item.find('input').removeAttr('checked');

            }

        }

        if( $('.gmap-autofill-wrapper ').length > 0 ) {

            //Initialize map on page load
            initMap();

            //Check on page load
            confirmAddressCheck();

        }

        //When a new suburb is filled
        $suburbField.on('change', function () {

            $postcodeDisplay.text( $(this).val() );

        });


        //When any address input is changed
        $address_inputs.on('change', function () {

            confirmAddressCheck();

        });



        $('.full-address-field').each( function(){

            console.log('autocomplete init');

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

                var lat = place.geometry.location.lat();
                var lng = place.geometry.location.lng();

                console.log( place.address_components );
                console.log( place.geometry );
                console.log( lat );
                console.log( lng );

                $('#valuation_request_lat').val( lat );
                $('#valuation_request_long').val( lng );

                var latLng = {lat: lat, lng: lng };
                SetMarker(latLng, 14);
                console.log('change marker');

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

                    $suburbField.val( suburb.join(', ') );
                    $user_zip_code.val( parseInt( postcode.join(', ').replace(' ', '') ) );

                    if( isNumeric( address[0] ) ){

                        $streetNameField.val( address[1] );
                        $streetNumberField.val( address[0] );

                        $currentField.closest('.input-field').removeClass('invalid').addClass('valid');

                    }
                    else {
                        $streetNameField.val( address[0] );
                        $streetNumberField.val();
                        $currentField.closest('.input-field').removeClass('valid').addClass('invalid');
                    }


                    $address_inputs.trigger('change');

                }

            });

        });

    }); //End Document ready


}(jQuery));
