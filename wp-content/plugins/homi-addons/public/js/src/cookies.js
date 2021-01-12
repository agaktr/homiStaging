(function ($) {
    'use strict';

    $(document).ready(function(){

        var app = {};
        app.cookie = {
            /* set cookies */
            setCookie: function(name, value, exp, inMinutes) {
                exp = exp == null? 7 : exp;
                var exdate = new Date();
                if(inMinutes != null && inMinutes === true){
                    exdate.setMinutes(exdate.getMinutes() + exp);
                } else {
                    exdate.setDate(exdate.getDate() + exp);
                }
                var cookieValue = escape(value) + ((exp == null) ? "" : "; expires="+exdate.toUTCString());
                document.cookie = name + "=" + cookieValue;
            },

            /* retrieve the value of a cookie */
            getCookie: function(name) {
                var i,x,y,ARRcookies = document.cookie.split(";");
                for (i=0;i<ARRcookies.length;i++){
                    x = ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
                    y = ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
                    x = x.replace(/^\s+|\s+$/g,"");
                    if (x===name){
                        return unescape(y);
                    }
                }
                return null;
            },

            /* delete cookies (set expiration time in the past) */
            deleleCookie: function() {
                this.setCookie(name, '', -365);
            }
        };



        // var json_str = app.cookie.getCookie('homi_visited_pages');
        // var $visited_pages;
        //
        // if( json_str === null || json_str.length === 0 ){
        //
        //     $visited_pages = [];
        //
        // }
        // else {
        //     $visited_pages = JSON.parse(json_str);
        // }
        //
        // if( $visited_pages.length > 4 ){
        //     $visited_pages.pop();
        // }
        //
        // $visited_pages.unshift( window.location.href );
        //
        // app.cookie.setCookie('homi_visited_pages', JSON.stringify( $visited_pages ), 1440 );
        // console.log($visited_pages);


    });

})( jQuery );
