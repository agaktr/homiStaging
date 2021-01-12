<?php


class FormStep {

    const HOUSE_ICON                = '<svg id="houseIcon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-100 0 1400 1100" enable-background="new 0 0 1400 1100" xml:space="preserve"><title>clock</title><polyline fill="#999999" stroke="#999999" stroke-miterlimit="10" points="749.8,512.9 749.8,383.4 685,383.4 685,488.6 "/><g><path fill="none" stroke="#F6F6F6" stroke-width="7" stroke-miterlimit="10" d="M706.1,359.1c0-14.6,14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2s14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2c0-14.6,14.6-14.6,14.6-29.2"/></g><polygon fill="#E8E8E8" points="1025.2,846.6 847,773.7 847,966.5 1025.2,966.5 "/><polygon opacity="0.1" fill="#333333"  points="847,784.2 1021.1,958.4 847,958.4 "/><polygon fill="#E8E8E8" points="855.1,982.7 207.2,982.7 207.2,577.7 515,423.9 855.1,577.7 "/><polygon fill="#E8E8E8" points="911.8,602 512.5,421.4 150.5,602 "/><rect x="361.1" y="602" fill="#FFFFFF" width="145.8" height="89.1"/><rect x="555.5" y="602" fill="#FFFFFF" width="145.8" height="89.1"/><rect x="555.5" y="780.2" fill="#FFFFFF" width="145.8" height="89.1"/><rect x="361.1" y="780.2" fill="#1259af" class="fill__primary" width="145.8" height="194.4"/><line fill="none" stroke="#999999" stroke-width="21" stroke-miterlimit="10" x1="855" y1="964.4" x2="1057.5" y2="964.4"/><line fill="none" stroke="#999999" stroke-width="21" stroke-miterlimit="10" x1="174.8" y1="984.7" x2="879.4" y2="984.7"/></svg>';
    const APARTMENT_ICON            = '<svg id="Ebene_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-100 -10 1400 1100" enable-background="new 0 0 1400 1100" xml:space="preserve"><title>clock</title><rect x="728.3" y="503.8" fill="#EEEEEC" width="280.6" height="457"/><rect x="191.1" y="215.2" fill="#EEEEEC" width="537.2" height="769.7"/><line fill="none" stroke="#AAAAAA" stroke-width="21" stroke-miterlimit="10" x1="167" y1="978.8" x2="752.3" y2="978.8"/><rect x="239.2" y="303.3" fill="#FFFFFF" width="256.6" height="104.2"/><rect x="535.9" y="303.3" fill="#FFFFFF" width="144.3" height="104.2"/><rect x="239.2" y="584" fill="#FFFFFF" width="336.7" height="104.2"/><rect x="439.6" y="728.3" fill="#FFFFFF" width="240.5" height="104.2"/><rect x="792.4" y="584" fill="#FFFFFF" width="216.5" height="104.2"/><rect x="792.4" y="728.3" fill="#FFFFFF" width="216.5" height="104.2"/><line fill="none" stroke="#AAAAAA" stroke-width="21" stroke-miterlimit="10" x1="728.3" y1="962.8" x2="1033" y2="962.8"/><polygon opacity="0.1" fill="#333333"  points="1008.9,782.8 732.3,503.8 728.3,503.8 728.3,952.81008.9,952.8 "/><g><rect x="191.1" y="423.6" fill="#1259af" class="fill__primary" width="537.2" height="144.3"/></g><rect x="279.3" y="447.7" fill="#FFFFFF" width="128.3" height="96.2"/><rect x="447.7" y="447.7" fill="#FFFFFF" width="232.5" height="96.2"/></svg>';
    const FLOOR_APARTMENT_ICON      = '<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"><defs><style>.af{fill:rgba(255,255,255,0);}.bf{fill:#eaeae8;}.cf{fill:none;stroke:#9c9b9b;stroke-miterlimit:10;stroke-width:1.421px;}.df{fill:#fff;}.ef{fill:#262626;opacity:0.1;}.ff{fill:#1259af;}</style></defs><g transform="translate(-46 -167)"><rect class="a" width="60" height="60" transform="translate(46 167)"/><g transform="translate(-321.398 166.636)"><rect class="bf" width="18.989" height="30.926" transform="translate(406.382 25.894)"/><rect class="bf" width="36.353" height="52.087" transform="translate(370.029 6.364)"/><line class="cf" x2="39.608" transform="translate(368.398 58.038)"/><rect class="df" width="17.364" height="7.051" transform="translate(373.284 12.326)"/><rect class="df" width="9.765" height="7.051" transform="translate(393.362 12.326)"/><rect class="df" width="22.785" height="7.051" transform="translate(373.284 25.201)"/><rect class="df" width="16.275" height="7.051" transform="translate(386.845 36.092)"/><rect class="df" width="14.651" height="7.051" transform="translate(410.72 31.321)"/><rect class="df" width="14.651" height="7.051" transform="translate(410.72 41.086)"/><line class="cf" x2="20.619" transform="translate(406.382 56.955)"/><path class="ef" d="M425.371,44.774l-18.718-18.88h-.271V56.278h18.989Z"/><rect class="ff" width="36.353" height="9.765" transform="translate(370.026 47.573)"/><rect class="df" width="8.682" height="6.51" transform="translate(375.994 49.204)"/><rect class="df" width="15.734" height="6.51" transform="translate(387.39 49.204)"/></g></g></svg>';
    const BASEMENT_APARTMENT_ICON   = '';
    const STOREY_APARTMENT_ICON     = '<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60.384" viewBox="0 0 60 60.384"><defs><style>.as{fill:rgba(255,255,255,0);}.bs{fill:#eaeae8;}.cs{fill:none;stroke:#9c9b9b;stroke-miterlimit:10;stroke-width:1.421px;}.ds{fill:#fff;}.es{fill:#1259af;}.fs{fill:#262626;opacity:0.1;}</style></defs><g transform="translate(-151 -167)"><rect class="a" width="60" height="60" transform="translate(151 167)" style="fill: transparent;"/><g transform="translate(-299.84 168.636)"><rect class="bs" width="18.989" height="30.926" transform="translate(489.824 25.894)"/><rect class="bs" width="36.353" height="52.087" transform="translate(453.471 6.364)"/><line class="cs" x2="39.608" transform="translate(451.84 58.038)"/><rect class="ds" width="17.364" height="7.051" transform="translate(456.726 12.326)"/><rect class="es" width="36.353" height="9.765" transform="translate(453.467 23.844)"/><rect class="ds" width="9.765" height="7.051" transform="translate(476.804 12.326)"/><rect class="ds" width="22.785" height="7.051" transform="translate(456.726 25.201)"/><rect class="ds" width="16.275" height="7.051" transform="translate(470.287 36.092)"/><rect class="ds" width="14.651" height="7.051" transform="translate(494.162 31.321)"/><rect class="ds" width="14.651" height="7.051" transform="translate(494.162 41.086)"/><line class="cs" x2="20.619" transform="translate(489.824 56.955)"/><path class="fs" d="M508.812,44.774l-18.718-18.88h-.271V56.278h18.989Z"/><rect class="ds" width="8.682" height="6.51" transform="translate(459.436 49.204)"/><rect class="ds" width="15.734" height="6.51" transform="translate(470.832 49.204)"/></g></g></svg>';
    const PENTHOUSE_APARTMENT_ICON  = '<svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"><defs><style scoped>.a{fill:rgba(255,255,255,0);}.b{fill:#eaeae8;}.c{fill:#1259af;}.d{fill:none;stroke:#9c9b9b;stroke-miterlimit:10;stroke-width:1.421px;}.e{fill:#fff;}.f{fill:#262626;opacity:0.1;}</style></defs><g transform="translate(-256 -167)"><rect class="a" width="60" height="60" transform="translate(256 167)"/><g transform="translate(-271.189 167.636)"><rect class="b" width="18.989" height="30.926" transform="translate(565.172 25.894)"/><rect class="b" width="36.353" height="52.087" transform="translate(528.819 6.364)"/><g transform="translate(0 -4.605)"><rect class="c" width="36.353" height="14.37" transform="translate(528.816 10.969)"/></g><line class="d" x2="39.608" transform="translate(527.189 58.038)"/><rect class="e" width="17.364" height="7.051" transform="translate(532.074 12.326)"/><rect class="e" width="9.765" height="7.051" transform="translate(552.153 12.326)"/><rect class="e" width="22.785" height="7.051" transform="translate(532.074 25.201)"/><rect class="e" width="16.275" height="7.051" transform="translate(545.636 36.092)"/><rect class="e" width="14.651" height="7.051" transform="translate(569.51 31.321)"/><rect class="e" width="14.651" height="7.051" transform="translate(569.51 41.086)"/><line class="d" x2="20.619" transform="translate(565.172 56.955)"/><path class="f" d="M584.161,44.774l-18.718-18.88h-.271V56.278h18.989Z"/><rect class="e" width="8.682" height="6.51" transform="translate(534.785 49.204)"/><rect class="e" width="15.734" height="6.51" transform="translate(546.181 49.204)"/></g></g></svg>';
    const LOT_OF_WORK_ICON          = '<svg id="houseIcon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1400 1100"  xml:space="preserve"><style type="text/css" scoped>.st0{fill:#999999;stroke:#999999;stroke-miterlimit:10;}.st1{fill:none;stroke:#F6F6F6;stroke-width:7;stroke-miterlimit:10;}.st2{fill:#E8E8E8;}.st3{opacity:0.1;fill:#333333;}.st4{fill:#FFFFFF;}.st5{fill:none;stroke:#999999;stroke-width:21;stroke-miterlimit:10;}.st6{fill:#1259AF;}</style><title>clock</title><polyline class="st0" points="849.8,512.9 849.8,383.4 785,383.4 785,488.6 "/><g><path class="st1" d="M806.1,359.1c0-14.6,14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2s14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2c0-14.6,14.6-14.6,14.6-29.2"/></g><polygon class="st2" points="1125.2,846.6 947,773.7 947,966.5 1125.2,966.5 "/><polygon class="st3" points="947,784.2 1121.1,958.4 947,958.4 "/><polygon class="st2" points="955.1,982.7 307.2,982.7 307.2,577.7 615,423.9 955.1,577.7 "/><polygon class="st2" points="1011.8,602 612.5,421.4 250.5,602 "/><rect x="461.1" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="780.2" class="st4" width="145.8" height="89.1"/><rect x="461.1" y="780.2" class="st4" width="145.8" height="194.4"/><line class="st5" x1="955" y1="964.4" x2="1157.5" y2="964.4"/><line class="st5" x1="274.8" y1="984.7" x2="979.4" y2="984.7"/><g><path class="st6" d="M286.9,349c3.8,0,7.6-0.6,11.3-1.8l21.6,21.6l23.7-23.7l-21.6-21.6c4.2-13,0.7-27.4-9-37.2c-6.9-6.9-16.1-10.7-25.9-10.7c-5.5,0-10.9,1.2-15.8,3.6c-0.7,0.4-1.3,1-1.4,1.8c-0.1,0.8,0.1,1.6,0.7,2.2l22.8,22.8c1.7,1.7,2.6,3.9,2.6,6.3c0,2.4-0.9,4.6-2.6,6.3c-3.3,3.4-9.2,3.4-12.5,0l-22.8-22.8c-0.6-0.6-1.4-0.8-2.2-0.7c-0.8,0.1-1.5,0.7-1.8,1.4c-6.7,14-3.8,30.8,7.1,41.7C267.9,345.2,277.1,349,286.9,349z"/><path class="st6" d="M402.4,391.1c-3.9,0-7.6,0.6-11.3,1.8l-23.9-23.9l-23.7,23.7l23.9,23.9c-4.2,13-0.7,27.4,9,37.2c6.9,6.9,16.1,10.7,25.9,10.7c5.5,0,10.9-1.2,15.8-3.6c0.7-0.4,1.3-1,1.4-1.8c0.1-0.8-0.1-1.6-0.7-2.2L396.1,434c-1.7-1.7-2.6-3.9-2.6-6.3c0-2.4,0.9-4.6,2.6-6.3c3.4-3.4,9.2-3.4,12.5,0l22.8,22.8c0.6,0.6,1.4,0.8,2.2,0.7c0.8-0.1,1.5-0.7,1.8-1.4c6.7-14,3.8-30.8-7.1-41.7C421.4,394.9,412.2,391.1,402.4,391.1z"/><path class="st6" d="M392.7,337.1c0,0,4,3.5,7.2,1.8c3.7-1.9,14.1,8.4,17.4,10.8c0,0,0,0,0.1,0l-1.8,1.8c-2.4,2.4-2.4,6.2,0,8.6c2.4,2.4,6.2,2.4,8.6,0l14.4-14.3c2.4-2.4,2.4-6.2,0-8.6c-2.4-2.4-6.2-2.4-8.6,0l-2.4,2.4c-2-2.7-5.3-7.4-4.9-8.9c1.8-6.7-12-22.7-12-22.7c-34.1-34.1-57-33.4-67.8-29.6c-4.4,1.5-3.5,2.4,1,3.2c32.9,5.7,37,25.2,31.4,32.7c-2.1,2.9,1,6.4,1,6.4l1.2,1.2l-55.6,55.6c0.8,0.5,1.5,1,2.1,1.6l9.4,9.3c0.6,0.6,1.2,1.4,1.6,2.1l55.6-55.6L392.7,337.1z"/><path class="st6" d="M320.2,382.8c-2.1-2.1-5.5-2.2-7.7-0.3l-61.8,55.4c-2.2,1.9-2.3,5.1-0.3,7.2l16.8,16.8c2.1,2.1,5.3,1.9,7.2-0.3l55.4-61.8c1.9-2.2,1.8-5.7-0.3-7.7L320.2,382.8z"/></g></svg>';
    const SOME_WORK_ICON            = '<svg id="houseIcon" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 1400 1100" xml:space="preserve"><style type="text/css" scoped>.st0{fill:#999999;stroke:#999999;stroke-miterlimit:10;}.st1{fill:none;stroke:#F6F6F6;stroke-width:7;stroke-miterlimit:10;}.st2{fill:#E8E8E8;}.st3{opacity:0.1;fill:#333333;}.st4{fill:#FFFFFF;}.st5{fill:none;stroke:#999999;stroke-width:21;stroke-miterlimit:10;}.st6{fill:#1259AF;}</style><title>clock</title><polyline class="st0" points="849.8,512.9 849.8,383.4 785,383.4 785,488.6 "/><g><path class="st1" d="M806.1,359.1c0-14.6,14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2s14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2c0-14.6,14.6-14.6,14.6-29.2"/></g><polygon class="st2" points="1125.2,846.6 947,773.7 947,966.5 1125.2,966.5 "/><polygon class="st3" points="947,784.2 1121.1,958.4 947,958.4 "/><polygon class="st2" points="955.1,982.7 307.2,982.7 307.2,577.7 615,423.9 955.1,577.7 "/><polygon class="st2" points="1011.8,602 612.5,421.4 250.5,602 "/><rect x="461.1" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="780.2" class="st4" width="145.8" height="89.1"/><rect x="461.1" y="780.2" class="st4" width="145.8" height="194.4"/><line class="st5" x1="955" y1="964.4" x2="1157.5" y2="964.4"/><line class="st5" x1="274.8" y1="984.7" x2="979.4" y2="984.7"/><g><path class="st6" d="M399.4,351c-9.8,7.4-15,18.5-15.1,29.9c0,5-2.4,9.7-6.4,12.7l-96.7,72.7c-7.4,5.5-8.8,16-3.3,23.3s16,8.9,23.3,3.3l96.7-72.7c4-3,9.1-4,14-2.6c10.9,3,23.1,1.1,32.9-6.2c10-7.5,15.2-18.9,15.1-30.5c0-1.9-2.1-2.9-3.6-1.8l-12.9,9.7c-6.2,4.6-14.9,3.4-19.5-2.8l-6-8c-4.6-6.2-3.4-14.9,2.8-19.5l12.9-9.7c1.5-1.1,1.1-3.4-0.7-3.9C421.9,341.7,409.4,343.5,399.4,351z M388.7,400.3c2.1-1.6,5.2-1.2,6.8,1c1.6,2.1,1.2,5.2-1,6.8l-98.6,74.2c-2.1,1.6-5.2,1.2-6.8-1s-1.2-5.2,1-6.8L388.7,400.3z"/></g></svg>';
    const GOOD_CONDITION_ICON       = '<svg id="houseIcon" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 1400 1100" xml:space="preserve"><style type="text/css" scoped>.st0{fill:#999999;stroke:#999999;stroke-miterlimit:10;}.st1{fill:none;stroke:#F6F6F6;stroke-width:7;stroke-miterlimit:10;}.st2{fill:#E8E8E8;}.st3{opacity:0.1;fill:#333333;}.st4{fill:#FFFFFF;}.st5{fill:none;stroke:#999999;stroke-width:21;stroke-miterlimit:10;}.st6{fill:#1259AF;}</style><title>clock</title><polyline class="st0" points="849.8,512.9 849.8,383.4 785,383.4 785,488.6 "/><g><path class="st1" d="M806.1,359.1c0-14.6,14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2s14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2c0-14.6,14.6-14.6,14.6-29.2"/></g><polygon class="st2" points="1125.2,846.6 947,773.7 947,966.5 1125.2,966.5 "/><polygon class="st3" points="947,784.2 1121.1,958.4 947,958.4 "/><polygon class="st2" points="955.1,982.7 307.2,982.7 307.2,577.7 615,423.9 955.1,577.7 "/><polygon class="st2" points="1011.8,602 612.5,421.4 250.5,602 "/><rect x="461.1" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="780.2" class="st4" width="145.8" height="89.1"/><rect x="461.1" y="780.2" class="st4" width="145.8" height="194.4"/><line class="st5" x1="955" y1="964.4" x2="1157.5" y2="964.4"/><line class="st5" x1="274.8" y1="984.7" x2="979.4" y2="984.7"/><g><g><path class="st6" d="M354.2,494.7c-6.2,6.2-16.3,6.2-22.6,0l-35-35c-6.2-6.2-6.2-16.3,0-22.6c6.2-6.2,16.3-6.2,22.6,0L340,458c1.6,1.6,4.1,1.6,5.7,0l56.4-56.4c6.2-6.2,16.3-6.2,22.6,0c3,3,4.7,7.1,4.7,11.3c0,4.2-1.7,8.3-4.7,11.3L354.2,494.7z"/></g></g></svg>';
    const EXCELLENT_CONDITION_ICON  = '<svg id="houseIcon" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 1400 1100" xml:space="preserve"><style type="text/css" scoped>.st0{fill:#999999;stroke:#999999;stroke-miterlimit:10;}.st1{fill:none;stroke:#F6F6F6;stroke-width:7;stroke-miterlimit:10;}.st2{fill:#E8E8E8;}.st3{opacity:0.1;fill:#333333;}.st4{fill:#FFFFFF;}.st5{fill:none;stroke:#999999;stroke-width:21;stroke-miterlimit:10;}.st6{fill:#1259AF;}</style><title>clock</title><polyline class="st0" points="849.8,512.9 849.8,383.4 785,383.4 785,488.6 "/><g><path class="st1" d="M806.1,359.1c0-14.6,14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2s14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2c0-14.6,14.6-14.6,14.6-29.2"/></g><polygon class="st2" points="1125.2,846.6 947,773.7 947,966.5 1125.2,966.5 "/><polygon class="st3" points="947,784.2 1121.1,958.4 947,958.4 "/><polygon class="st2" points="955.1,982.7 307.2,982.7 307.2,577.7 615,423.9 955.1,577.7 "/><polygon class="st2" points="1011.8,602 612.5,421.4 250.5,602 "/><rect x="461.1" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="780.2" class="st4" width="145.8" height="89.1"/><rect x="461.1" y="780.2" class="st4" width="145.8" height="194.4"/><line class="st5" x1="955" y1="964.4" x2="1157.5" y2="964.4"/><line class="st5" x1="274.8" y1="984.7" x2="979.4" y2="984.7"/><g><polygon class="st6" points="283.8,369.5 348.4,449.7 319.1,369.5 "/><polygon class="st6" points="324.8,369.5 356.1,455 387.9,369.5 "/><polygon class="st6" points="363,451.8 429.3,369.5 393.7,369.5 "/><polygon class="st6" points="404,326.3 362.2,326.3 390.9,361.5 "/><polygon class="st6" points="386,364.1 356.5,327.9 327.1,364.1 "/><polygon class="st6" points="350.9,326.3 309,326.3 322,361.8 "/><polygon class="st6" points="304.5,329.7 283,364.1 317.1,364.1 "/><polygon class="st6" points="430.1,364.1 408.5,329.7 395.7,364.1 "/></g></svg>';
    const SALE_ICON                 = '<svg id="houseIcon" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 1400 1100" xml:space="preserve"><style type="text/css" scoped="">.st0{fill:#999999;stroke:#999999;stroke-miterlimit:10;}.st1{fill:none;stroke:#F6F6F6;stroke-width:7;stroke-miterlimit:10;}.st2{fill:#E8E8E8;}.st3{opacity:0.1;fill:#333333;}.st4{fill:#FFFFFF;}.st5{fill:none;stroke:#999999;stroke-width:21;stroke-miterlimit:10;}.st6{fill-rule:evenodd;clip-rule:evenodd;fill:#1259AF;}.st7{fill:#1259AF;}</style><title>clock</title><polyline class="st0" points="849.8,512.9 849.8,383.4 785,383.4 785,488.6 "></polyline><g><path class="st1" d="M806.1,359.1c0-14.6,14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2s14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2c0-14.6,14.6-14.6,14.6-29.2"></path></g><polygon class="st2" points="1125.2,846.6 947,773.7 947,966.5 1125.2,966.5 "></polygon><polygon class="st3" points="947,784.2 1121.1,958.4 947,958.4 "></polygon><polygon class="st2" points="955.1,982.7 307.2,982.7 307.2,577.7 615,423.9 955.1,577.7 "></polygon><polygon class="st2" points="1011.8,602 612.5,421.4 250.5,602 "></polygon><rect x="461.1" y="602" class="st4" width="145.8" height="89.1"></rect><rect x="655.5" y="602" class="st4" width="145.8" height="89.1"></rect><rect x="655.5" y="780.2" class="st4" width="145.8" height="89.1"></rect><rect x="461.1" y="780.2" class="st4" width="145.8" height="194.4"></rect><line class="st5" x1="955" y1="964.4" x2="1157.5" y2="964.4"></line><line class="st5" x1="274.8" y1="984.7" x2="979.4" y2="984.7"></line><g><g><path class="st7" d="M509.3,370.8c-4.1-7.1-13.1-9.5-20.2-5.5c-1.3,0.6-17.8,8.7-31.3,14.4c-1.5,0.6-2.2,2.4-1.6,3.9c0.6,1.5,2.4,2.2,3.9,1.6c14.2-6,31.6-14.5,31.7-14.6c0.1,0,0.1-0.1,0.2-0.1c4.3-2.5,9.7-1,12.2,3.3c2.9,4.9-1.6,10.3-3.8,12.6c-14.8,11.9-55.7,42.5-69.4,42.5c-15.2,0-58-9.1-68.5-11.3v-48.6c20.7-3,31.7,0.8,54.7,8.8c7,2.4,14.9,5.2,24.6,8.3c1.4,0.6,5.4,2.9,3.9,7.9c-0.9,3.1-3.9,6-8.3,5.2c-5.9-1.1-40.4-5.8-41.8-6c-1.6-0.2-3.1,0.9-3.3,2.6c-0.2,1.6,0.9,3.1,2.6,3.3c0.4,0,35.8,4.9,41.5,5.9c0.9,0.2,1.7,0.2,2.6,0.2c6.3,0,11-4.5,12.5-9.6c1.6-5.3-0.1-12.1-7.4-15.2c0,0,0,0,0,0c0,0,0,0,0,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-9.6-3.1-17.6-5.8-24.6-8.3c-23-8-35.1-12.2-56.7-9.2v-2.5c0-1.6-1.3-3-3-3h-8.9v-3c0-1.6-1.3-3-3-3h-36.8c-1.6,0-3,1.3-3,3v65.5c0,1.6,1.3,3,3,3c1.6,0,3-1.3,3-3v-62.5h30.8v71.4h-6v-3c0-1.6-1.3-3-3-3c-1.6,0-3,1.3-3,3v3h-21.9c-1.6,0-3,1.3-3,3s1.3,3,3,3h36.8c1.6,0,3-1.3,3-3v-3.1h8.9c1.6,0,3-1.3,3-3v-2.1c12.5,2.7,53,11.2,68.5,11.2c8.1,0,22.6-7.2,44.1-22.2c15.5-10.8,29.1-21.7,29.2-21.8c0.1-0.1,0.2-0.1,0.2-0.2C510.9,384.1,512.7,376.7,509.3,370.8z M356.5,419.8C356.5,419.8,356.5,419.8,356.5,419.8v2.9h-6v0v-59.4h6L356.5,419.8L356.5,419.8z"></path></g></g></svg>';
    const PURCHASE_ICON             = '<svg id="houseIcon" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 1400 1100" xml:space="preserve"><style type="text/css" scoped>.st0{fill:#999999;stroke:#999999;stroke-miterlimit:10;}.st1{fill:none;stroke:#F6F6F6;stroke-width:7;stroke-miterlimit:10;}.st2{fill:#E8E8E8;}.st3{opacity:0.1;fill:#333333;}.st4{fill:#FFFFFF;}.st5{fill:none;stroke:#999999;stroke-width:21;stroke-miterlimit:10;}.st6{fill-rule:evenodd;clip-rule:evenodd;fill:#1259AF;}</style><title>clock</title><polyline class="st0" points="849.8,512.9 849.8,383.4 785,383.4 785,488.6 "/><g><path class="st1" d="M806.1,359.1c0-14.6,14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2s14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2c0-14.6,14.6-14.6,14.6-29.2"/></g><polygon class="st2" points="1125.2,846.6 947,773.7 947,966.5 1125.2,966.5 "/><polygon class="st3" points="947,784.2 1121.1,958.4 947,958.4 "/><polygon class="st2" points="955.1,982.7 307.2,982.7 307.2,577.7 615,423.9 955.1,577.7 "/><polygon class="st2" points="1011.8,602 612.5,421.4 250.5,602 "/><rect x="461.1" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="780.2" class="st4" width="145.8" height="89.1"/><rect x="461.1" y="780.2" class="st4" width="145.8" height="194.4"/><line class="st5" x1="955" y1="964.4" x2="1157.5" y2="964.4"/><line class="st5" x1="274.8" y1="984.7" x2="979.4" y2="984.7"/><path class="st6" d="M324.7,389.7c-0.6,0.6-1.5,1-2.4,1c-1.1,0-2.2-0.6-2.8-1.4l-10.9-12.9c-1.2-1.5-1-3.7,0.4-4.9c1.5-1.2,3.7-1,4.9,0.4l5.3,6.4c2.1-18,10.2-34.2,22.4-46.3c14.2-14.2,33.7-22.9,55.3-22.9c18.5,0,35.5,6.4,49,17.2c13.7,11,23.6,26.5,27.5,44.2c0.4,1.9-0.8,3.7-2.7,4.1c-1.9,0.4-3.7-0.8-4.1-2.7c-3.5-16.1-12.6-30.2-25-40.2c-12.2-9.8-27.7-15.7-44.6-15.7c-19.7,0-37.5,8-50.4,20.9c-11.2,11.2-18.6,26-20.4,42.5l6.9-5.8c1.5-1.2,3.7-1,4.9,0.4c1.2,1.5,1,3.7-0.4,4.9L324.7,389.7z M372.2,380l-3.8-11.6h18.2c1.9,0,3.5-1.6,3.5-3.5c0-1.9-1.6-3.5-3.5-3.5h-20.4l-3.5-10.7c-0.5-1.5-1.8-2.4-3.3-2.4l-13.1,0c-1.9,0-3.5,1.6-3.5,3.5c0,1.9,1.6,3.5,3.5,3.5h10.6c6.3,19.2,12.5,38.3,18.8,57.5c-2.5,0.5-4.7,1.7-6.4,3.5c-2.3,2.3-3.7,5.5-3.7,9c0,3.5,1.4,6.7,3.7,9c2.3,2.3,5.5,3.7,9,3.7c3.5,0,6.7-1.4,9-3.7c2.3-2.3,3.7-5.5,3.7-9c0-2.1-0.5-4-1.4-5.7h24.2c-0.9,1.7-1.4,3.7-1.4,5.7c0,3.5,1.4,6.7,3.7,9c2.3,2.3,5.5,3.7,9,3.7c3.5,0,6.7-1.4,9-3.7c2.3-2.3,3.7-5.5,3.7-9c0-3.5-1.4-6.7-3.7-9c-2.4-2.4-5.7-3.7-9-3.7h-42.3l-2-6.2l44.3,0c1.5,0,2.8-0.9,3.3-2.4l12.3-37.7c0.2-0.4,0.2-0.8,0.2-1.3c0-1.9-1.6-3.5-3.5-3.5h-23c-1.9,0-3.5,1.6-3.5,3.5c0,1.9,1.6,3.5,3.5,3.5h18.2l-3.8,11.6H372.2z M426.6,387h-52.1l4,12.3h44.1L426.6,387z M400.5,361.4c-1.9,0-3.5,1.6-3.5,3.5c0,1.9,1.6,3.5,3.5,3.5c1.9,0,3.5-1.6,3.5-3.5C404,363,402.5,361.4,400.5,361.4z M425.3,419.4c1.5,0.1,2.8,0.7,3.8,1.7c1,1,1.7,2.5,1.7,4.1c0,1.6-0.6,3-1.7,4.1s-2.5,1.7-4.1,1.7c-1.6,0-3-0.6-4.1-1.7c-1-1-1.7-2.5-1.7-4.1c0-1.6,0.6-3,1.7-4.1c1-1,2.2-1.6,3.7-1.7C424.9,419.4,425.1,419.4,425.3,419.4z M382.2,421.1c1,1,1.7,2.5,1.7,4.1c0,1.6-0.6,3-1.7,4.1c-1,1-2.5,1.7-4.1,1.7c-1.6,0-3-0.6-4.1-1.7c-1-1-1.7-2.5-1.7-4.1c0-1.6,0.6-3,1.7-4.1c1-1,2.5-1.7,4.1-1.7C379.7,419.4,381.1,420.1,382.2,421.1z M460.9,400.8l6.9-5.8c-1.8,16.5-9.3,31.4-20.4,42.5c-12.9,12.9-30.7,20.9-50.4,20.9c-16.9,0-32.4-5.9-44.6-15.7c-12.4-10-21.5-24.1-25-40.2c-0.4-1.9-2.3-3.1-4.1-2.7c-1.9,0.4-3.1,2.3-2.7,4.1c3.9,17.7,13.8,33.2,27.5,44.2c13.4,10.8,30.4,17.2,49,17.2c21.6,0,41.2-8.8,55.3-22.9c12.2-12.2,20.3-28.3,22.4-46.3l5.3,6.4c1.2,1.5,3.4,1.7,4.9,0.4c1.5-1.2,1.7-3.4,0.4-4.9l-10.9-12.9c-0.6-0.9-1.7-1.4-2.8-1.4c-0.9,0-1.8,0.4-2.4,1l-12.9,10.9c-1.5,1.2-1.7,3.4-0.4,4.9C457.2,401.9,459.4,402.1,460.9,400.8z"/></svg>';
    const MISC_ICON                 = '<svg id="houseIcon" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 1400 1100" xml:space="preserve"><style type="text/css" scoped>.st0{fill:#999999;stroke:#999999;stroke-miterlimit:10;}.st1{fill:none;stroke:#F6F6F6;stroke-width:7;stroke-miterlimit:10;}.st2{fill:#E8E8E8;}.st3{opacity:0.1;fill:#333333;}.st4{fill:#FFFFFF;}.st5{fill:none;stroke:#999999;stroke-width:21;stroke-miterlimit:10;}.st6{fill:#1259AF;}</style><title>clock</title><polyline class="st0" points="849.8,512.9 849.8,383.4 785,383.4 785,488.6 "/><g><path class="st1" d="M806.1,359.1c0-14.6,14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2s14.6-14.6,14.6-29.2s-14.6-14.6-14.6-29.2c0-14.6,14.6-14.6,14.6-29.2"/></g><polygon class="st2" points="1125.2,846.6 947,773.7 947,966.5 1125.2,966.5 "/><polygon class="st3" points="947,784.2 1121.1,958.4 947,958.4 "/><polygon class="st2" points="955.1,982.7 307.2,982.7 307.2,577.7 615,423.9 955.1,577.7 "/><polygon class="st2" points="1011.8,602 612.5,421.4 250.5,602 "/><rect x="461.1" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="602" class="st4" width="145.8" height="89.1"/><rect x="655.5" y="780.2" class="st4" width="145.8" height="89.1"/><rect x="461.1" y="780.2" class="st4" width="145.8" height="194.4"/><line class="st5" x1="955" y1="964.4" x2="1157.5" y2="964.4"/><line class="st5" x1="274.8" y1="984.7" x2="979.4" y2="984.7"/><g><g id="keyboard-control"><path class="st6" d="M315.5,370.9c-14,0-25.5,11.5-25.5,25.5s11.5,25.5,25.5,25.5s25.5-11.5,25.5-25.5S329.5,370.9,315.5,370.9z M468.5,370.9c-14,0-25.5,11.5-25.5,25.5s11.5,25.5,25.5,25.5s25.5-11.5,25.5-25.5S482.5,370.9,468.5,370.9z M392,370.9c-14,0-25.5,11.5-25.5,25.5s11.5,25.5,25.5,25.5s25.5-11.5,25.5-25.5S406,370.9,392,370.9z"/></g></g></svg>';



    /**
     * @var $requestMeta array
     */
    private $requestMeta;

    /**
     * FormStep constructor.
     *
     * @param $requestMeta array
     *
     */
    public function __construct( $requestMeta ){

        $this->requestMeta      = $requestMeta;

    }

    public function contact(){

        ?>

        <div class="flex">

            <div class="col l8 s12">

                <div class="input-field col l6 s12">

                    <?php

                    $value = '';

                    if( is_user_logged_in() ){

                        $user = wp_get_current_user();
                        $value = $user->first_name;
                    }

                    ?>

                    <label for="<?php echo $this->requestMeta['requester_first_name']; ?>">
                        <?php echo __('First Name', Homi_Addons::PLUGIN_NAME); ?>
                    </label>
                    <input type="text" id="<?php echo $this->requestMeta['requester_first_name']; ?>"
                           name="<?php echo $this->requestMeta['requester_first_name']; ?>" value="<?php echo $value; ?>" required>

                </div>
                <div class="input-field col l6 s12">

                    <?php

                    $value = '';

                    if( is_user_logged_in() ){

                        $user = wp_get_current_user();
                        $value = $user->last_name;
                    }

                    ?>

                    <label for="<?php echo $this->requestMeta['requester_last_name']; ?>">
                        <?php echo __('Last Name', Homi_Addons::PLUGIN_NAME); ?>
                    </label>
                    <input type="text" id="<?php echo $this->requestMeta['requester_last_name']; ?>"
                           name="<?php echo $this->requestMeta['requester_last_name']; ?>" value="<?php echo $value; ?>" required>

                </div>

                <div class="input-field col s12">

                    <?php

                    $email = '';

                    if( is_user_logged_in() ){

                        $user = wp_get_current_user();
                        $email = $user->user_email;
                    }

                    ?>

                    <label for="<?php echo $this->requestMeta['requester_email']; ?>">
                        <?php echo __('Email', Homi_Addons::PLUGIN_NAME); ?>
                    </label>
                    <input type="email" id="<?php echo $this->requestMeta['requester_email']; ?>"
                           name="<?php echo $this->requestMeta['requester_email']; ?>"
                           value="<?php echo $email; ?>" required>

                </div>

                <div class="col s12">

                    <div class="consent-item input-field">

                        <label>
                            <input name="tcs_consent" type="checkbox" class="filled-in" required />
                            <span>
                                <?php echo __( 'I have read and agree with the ', Homi_Addons::PLUGIN_NAME ); ?>
                                <a href="<?php echo site_url('terms'); ?>" target="_blank">
                                    <?php echo __( 'Terms and Conditions', Homi_Addons::PLUGIN_NAME ); ?>
                                </a>
                            </span>
                        </label>

                    </div>

                    <div class="consent-item input-field">

                        <label>
                            <input name="privacy_consent" type="checkbox" class="filled-in" required />
                            <span>
                                <?php echo __( 'I have read and agree with the ', Homi_Addons::PLUGIN_NAME ); ?>
                                <a href="<?php echo site_url('privacy-policy'); ?>" target="_blank">
                                    <?php echo __( 'Privacy Policy', Homi_Addons::PLUGIN_NAME ); ?>
                                </a>
                            </span>
                        </label>

                    </div>

                    <div class="consent-item input-field">

                        <label>
                            <input name="marketing_consent" type="checkbox" class="filled-in" />
                            <span>
                                Yes, I’d like to receive helpful resources like guides and blogs to help me with my property.
                            </span>
                        </label>

                    </div>

                </div>

            </div>

            <div class="col l4 s12">

                <div class="side-vector">

                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 300"  xml:space="preserve"><g><path style="fill:#1259AF;" d="M143.5,154c19.1,0,23.7-15.6,23.7-28.7s-10.6-23.7-23.7-23.7s-23.7,10.6-23.7,23.7C119.8,138.4,126.1,154,143.5,154z"/><path style="fill:#1259AF;" d="M146.8,157.3h-3.3h-3.3c-13,0-32.5,11.9-32.5,26.6s-4.4,26.6,8.6,26.6h27.2h27.2c13,0,8.6-11.9,8.6-26.6S159.8,157.3,146.8,157.3z"/><path style="fill:#E8E8E8;" d="M150,0C67.2,0,0,67.2,0,150s67.2,150,150,150c82.8,0,150-67.2,150-150C300,67.2,232.8,0,150,0z M210.9,217.1v10.4c0,5.7-4.6,10.4-10.4,10.4h-10.4h-57.3H96.8c-11.5,0-20.7-9.3-20.7-20.7V86.6c0-11.5,9.3-20.7,20.7-20.7h36.1h57.3h10.4c5.7,0,10.4,4.6,10.4,10.4v10.4h0L210.9,217.1L210.9,217.1z M231.7,86.6v130.5v10.4c0,5.7-4.6,10.4-10.4,10.4h-2.8c1.8-3.1,2.8-6.6,2.8-10.4v-10.4V86.6V76.2c0-3.8-1-7.3-2.8-10.4h2.8c5.7,0,10.4,4.6,10.4,10.4V86.6z"/></g><path style="fill:#1259AF;" d="M247.9,147.6H284v96.5h-36.1V147.6z"/><path style="fill:#1259AF;" d="M270.9,115c-0.9-1.9-2.8-3-4.9-3c-2.1,0-4,1.2-4.9,3l-11,21.6h31.8L270.9,115z"/><path style="fill:#1259AF;" d="M247.9,269.1c0,8.1,6.6,14.6,14.8,14.6h6.5c8.1,0,14.8-6.6,14.8-14.6v-14h-36.1V269.1z"/><path style="fill:#D5D5D5;" d="M77.2,28.3l-7.9,5.4c-2.1-1.6-5.1-5.2-11.3-7.4L54.5,25V14H43.9v11l-3.5,1.2c-6.2,2.2-9.4,5.9-11.3,7.4l-7.9-5.4l-5.3,9.1l8,5.4c-0.5,2.9-1.1,5.3-1.1,8.2c0,2.9,0.6,5.3,1.1,8.2l-8,5.4l5.3,9.1l7.9-5.4c2.1,1.6,5.2,5.2,11.3,7.4l3.5,1.2v11h10.6V77l3.5-1.2c6.2-2.2,9.4-5.9,11.3-7.4l7.9,5.4l5.3-9.1l-8-5.4c0.5-2.9,1.1-5.3,1.1-8.2s-0.6-5.3-1.1-8.2l8-5.4L77.2,28.3z M49.2,66.9c-8.7,0-15.9-7.1-15.9-15.9s7.1-15.9,15.9-15.9S65,42.3,65,51S57.9,66.9,49.2,66.9z"/></svg>

                </div>

            </div>

        </div>
        <?php
    }


    public function address_info(){

        ?>
        <div class="flex">

            <div class="col l6 s12">

                <div class="address-inputs gmap-autofill-wrapper flex">

                    <div class="input-field col s12">

                        <label for="full-address">
                            <?php echo __( 'Full Address', Homi_Addons::PLUGIN_NAME ); ?>
                        </label>

                        <input type="text" id="full-address" name="full_address" class="full-address-field"  required>

                        <div class="wrong-input-message">
                            <?php echo __( 'You need to include the street number.', Homi_Addons::PLUGIN_NAME ); ?>
                        </div>

                    </div>

                    <div class="input-field col l6 s12 hide">

                        <label for="<?php echo $this->requestMeta['post_code']; ?>">
                            <?php echo __( 'Post Code', Homi_Addons::PLUGIN_NAME ); ?>
                        </label>

                        <input type="number" id="<?php echo $this->requestMeta['post_code']; ?>" name="<?php echo $this->requestMeta['post_code']; ?>" class="postcode-field" onKeyPress="if(this.value.length===5) return false;" required>

                        <svg id="wrongInput" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve"><g><path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                        <svg id="validIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7C514.5,101.703,514.499,85.494,504.502,75.496z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                        <div class="wrong-input-message">
                            <?php echo __( 'This is not a valid postcode', Homi_Addons::PLUGIN_NAME ); ?>
                        </div>

                    </div>

                    <div class="input-field col l6 s12 hide">

                        <label for="<?php echo $this->requestMeta['suburb']; ?>">
                            <?php echo __( 'Suburb', Homi_Addons::PLUGIN_NAME ); ?>
                        </label>

                        <input type="text" id="<?php echo $this->requestMeta['suburb']; ?>" name="<?php echo $this->requestMeta['suburb']; ?>" class="suburb-field"  required>

                    </div>

                    <div class="input-field col l6 s12 disabled">

                        <label for="<?php echo $this->requestMeta['street_name']; ?>">
                            <?php echo __( 'Street Name', Homi_Addons::PLUGIN_NAME ); ?>
                        </label>

                        <input type="text" id="<?php echo $this->requestMeta['street_name']; ?>" name="<?php echo $this->requestMeta['street_name']; ?>"  class="street-name-field"  required>

                    </div>

                    <div class="input-field col l6 s12 disabled">

                        <label for="<?php echo $this->requestMeta['street_number']; ?>">
                            <?php echo __( 'Street Number', Homi_Addons::PLUGIN_NAME ); ?>
                        </label>

                        <input type="text" id="<?php echo $this->requestMeta['street_number']; ?>" name="<?php echo $this->requestMeta['street_number']; ?>"  class="street-number-field"  required>

                    </div>

                    <input type="hidden" id="<?php echo $this->requestMeta['long']; ?>" name="<?php echo $this->requestMeta['long']; ?>" class="street-long-field">

                    <input type="hidden" id="<?php echo $this->requestMeta['lat']; ?>" name="<?php echo $this->requestMeta['lat']; ?>" class="street-lat-field">

                    <div class="consent-item input-field col s12 hide">

                        <label class="simple-radio">
                            <input type="radio" name="valuation_request_map" class="filled-in" value="0" checked />
                            <span>
                                <?php echo __( 'Google Maps matches up with my address.', Homi_Addons::PLUGIN_NAME ); ?>
                            </span>
                        </label>

                        <label class="simple-radio">
                            <input type="radio" name="valuation_request_map" class="filled-in" value="1" />
                            <span>
                                <?php echo __( 'Google Maps does not match up with my address.', Homi_Addons::PLUGIN_NAME ); ?>
                            </span>
                        </label>

                    </div>

                </div>

            </div>

            <div class="col l6 s12">

                <div class="maps-wrapper">
                    <div id="map"></div>
                </div>

            </div>

        </div>
        <?php
    }


    public function property_type(){
        ?>


        <div class="flex checkbox-boxes">

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::HOUSE_ICON; ?>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['property_type']; ?>"
                       name="<?php echo $this->requestMeta['property_type']; ?>" class="filled-in" value="house" required>
                <span><?php echo __( 'House', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::APARTMENT_ICON; ?>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['property_type']; ?>"
                       name="<?php echo $this->requestMeta['property_type']; ?>" class="filled-in" value="apartment" required>
                <span><?php echo __( 'Apartment', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

        </div>

        <?php
    }


    public function apartment_type(){

        ?>

        <div class="flex checkbox-boxes">

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::FLOOR_APARTMENT_ICON; ?>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['apartment_type']; ?>"
                       name="<?php echo $this->requestMeta['apartment_type']; ?>" class="filled-in" value="basement_apartment" required>
                <span><?php echo __( 'Basement Apartment', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::FLOOR_APARTMENT_ICON; ?>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['apartment_type']; ?>"
                       name="<?php echo $this->requestMeta['apartment_type']; ?>" class="filled-in" value="ground_floor" required>
                <span><?php echo __( 'Ground Floor Apartment', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::STOREY_APARTMENT_ICON; ?>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['apartment_type']; ?>"
                       name="<?php echo $this->requestMeta['apartment_type']; ?>" class="filled-in" value="storey_apartment" required>
                <span><?php echo __( 'Storey Apartment', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::PENTHOUSE_APARTMENT_ICON; ?>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['apartment_type']; ?>"
                       name="<?php echo $this->requestMeta['apartment_type']; ?>" class="filled-in" value="penthouse_apartment" required>
                <span><?php echo __( 'Penthouse Apartment', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

        </div>


        <?php
    }


    public function apartment_floor(){

        ?>
        <div class="flex">

            <div class="col l8 s12">

                <div class="range-wrapper">

                    <div class="input-field col s12">
                        <div class="range" data-min="-1" data-max="10" data-value="1" ></div>
                        <div class="range-labels">

                            <div class="min-label">
                                -1
                            </div>

                            <div class="max-label">
                                >10
                            </div>
                        </div>
                    </div>

                    <div class="input-field col s12">

                        <label for="<?php echo $this->requestMeta['floor']; ?>">
                            <?php echo __( 'Or type', Homi_Addons::PLUGIN_NAME ); ?>
                        </label>
                        <input type="number" id="<?php echo $this->requestMeta['floor']; ?>"
                               name="<?php echo $this->requestMeta['floor']; ?>" class="range-value" required>

                    </div>

                </div>

            </div>

            <div class="col l4 s12">

                <div class="side-vector">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60.384" viewBox="0 0 60 60.384"><defs><style>.as{fill:rgba(255,255,255,0);}.bs{fill:#eaeae8;}.cs{fill:none;stroke:#9c9b9b;stroke-miterlimit:10;stroke-width:1.421px;}.ds{fill:#fff;}.es{fill:#1259af;}.fs{fill:#262626;opacity:0.1;}</style></defs><g transform="translate(-151 -167)"><rect class="a" width="60" height="60" transform="translate(151 167)"></rect><g transform="translate(-299.84 168.636)"><rect class="bs" width="18.989" height="30.926" transform="translate(489.824 25.894)"></rect><rect class="bs" width="36.353" height="52.087" transform="translate(453.471 6.364)"></rect><line class="cs" x2="39.608" transform="translate(451.84 58.038)"></line><rect class="ds" width="17.364" height="7.051" transform="translate(456.726 12.326)"></rect><rect class="es" width="36.353" height="9.765" transform="translate(453.467 23.844)"></rect><rect class="ds" width="9.765" height="7.051" transform="translate(476.804 12.326)"></rect><rect class="ds" width="22.785" height="7.051" transform="translate(456.726 25.201)"></rect><rect class="ds" width="16.275" height="7.051" transform="translate(470.287 36.092)"></rect><rect class="ds" width="14.651" height="7.051" transform="translate(494.162 31.321)"></rect><rect class="ds" width="14.651" height="7.051" transform="translate(494.162 41.086)"></rect><line class="cs" x2="20.619" transform="translate(489.824 56.955)"></line><path class="fs" d="M508.812,44.774l-18.718-18.88h-.271V56.278h18.989Z"></path><rect class="ds" width="8.682" height="6.51" transform="translate(459.436 49.204)"></rect><rect class="ds" width="15.734" height="6.51" transform="translate(470.832 49.204)"></rect></g></g></svg>
                </div>


            </div>

        </div>
        <?php
    }


    public function size(){

        ?>

        <div class="flex">

            <div class="col l8 s12">

                <div class="range-wrapper">

                    <div class="input-field col s12">
                        <div class="range" data-min="20" data-max="150" data-value="50" data-symbol="m²"></div>
                        <div class="range-labels">

                            <div class="min-label">
                                < 20m²
                            </div>

                            <div class="max-label">
                                > 150m²
                            </div>
                        </div>
                    </div>

                    <div class="input-field col s12">

                        <label for="<?php echo $this->requestMeta['size']; ?>">
                            <?php echo __( 'Or type', Homi_Addons::PLUGIN_NAME ); ?>
                        </label>
                        <div class="input-with-label">

                            <input type="number" id="<?php echo $this->requestMeta['size']; ?>"
                                   name="<?php echo $this->requestMeta['size']; ?>" class="range-value" required>
                            <span class="small-label">m²</span>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col l4 s12">

                <div class="side-vector">

                    <svg id="Ebene_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="-100 0 1400 1100" enable-background="new 0 0 1400 1100" xml:space="preserve"><title>clock</title><rect x="451" y="331.9" fill="#DADADA" stroke="#DADADA" stroke-miterlimit="10" width="442.2" height="415.5"/><rect x="605.7" y="747.4" fill="#EEEEEC" width="93.1" height="17.8"/><g><polyline fill="none" stroke="#1259af" class="line__primary" stroke-width="21" stroke-miterlimit="10" points="425.1,391.9 425.1,305.2 618.6,305.2"/><line fill="none" stroke="#1259af" class="line__primary" stroke-width="21" stroke-miterlimit="10" x1="425.1" y1="597.6" x2="425.1" y2="466.4"/><polyline fill="none" stroke="#1259af" class="line__primary" stroke-width="21" stroke-miterlimit="10" points="464.8,772.5 425.1,772.5 425.1,667.2"/><polyline fill="none" stroke="#1259af" class="line__primary" stroke-width="21" stroke-miterlimit="10" points="525.5,772.5 578.9,772.5 578.9,791.1611.3,791.1 700.4,791.1 723.9,791.1 723.9,772.5 819.5,772.5 "/><polyline fill="none" stroke="#1259af" class="line__primary" stroke-width="21" stroke-miterlimit="10" points="919.9,667.2 919.9,772.5 885.1,772.5"/><line fill="none" stroke="#1259af" class="line__primary" stroke-width="21" stroke-miterlimit="10" x1="919.9" y1="466.4" x2="919.9" y2="597.6"/><polyline fill="none" stroke="#1259af" class="line__primary" stroke-width="21" stroke-miterlimit="10" points="684.2,305.2 789.5,305.2 864,305.2919.9,305.2 919.9,391.9 "/></g><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="335.2" y1="996.8" x2="335.2" y2="923.9"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="559.5" y1="996.8" x2="559.5" y2="923.9"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="537.6" y1="996.8" x2="537.6" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="515" y1="996.8" x2="515" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="469.6" y1="996.8" x2="469.6" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="447.7" y1="996.8" x2="447.7" y2="936.1"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="425.1" y1="996.8" x2="425.1" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="492.3" y1="996.8" x2="492.3" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="402.4" y1="996.8" x2="402.4" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="379.7" y1="996.8" x2="379.7" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="357.9" y1="996.8" x2="357.9" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="559.5" y1="996.8" x2="559.5" y2="923.9"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="784.6" y1="996.8" x2="784.6" y2="923.9"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="762" y1="996.8" x2="762" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="740.1" y1="996.8" x2="740.1" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="694.8" y1="996.8" x2="694.8" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="672.1" y1="996.8" x2="672.1" y2="936.1"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="650.2" y1="996.8" x2="650.2" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="717.4" y1="996.8" x2="717.4" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="627.5" y1="996.8" x2="627.5" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="604.9" y1="996.8" x2="604.9" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="582.2" y1="996.8" x2="582.2" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="784.6" y1="996.8" x2="784.6" y2="923.9"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="784.6" y1="996.8" x2="784.6" y2="923.9"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="784.6" y1="996.8" x2="784.6" y2="923.9"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="1009.8" y1="996.8" x2="1009.8" y2="923.9"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="987.1" y1="996.8" x2="987.1" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="964.4" y1="996.8" x2="964.4" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="919.9" y1="996.8" x2="919.9" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="897.2" y1="996.8" x2="897.2" y2="936.1"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="874.5" y1="996.8" x2="874.5" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="941.8" y1="996.8" x2="941.8" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="851.9" y1="996.8" x2="851.9" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="830" y1="996.8" x2="830" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="807.3" y1="996.8" x2="807.3" y2="956.3"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="1009.8" y1="996.8" x2="1009.8" y2="923.9"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="653.5" x2="263.1" y2="653.5"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="653.5" x2="263.1" y2="653.5"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="877.8" x2="263.1" y2="877.8"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="855.1" x2="230.7" y2="855.1"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="833.2" x2="230.7" y2="833.2"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="787.9" x2="230.7" y2="787.9"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="765.2" x2="251" y2="765.2"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="743.3" x2="230.7" y2="743.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="810.6" x2="230.7" y2="810.6"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="720.7" x2="230.7" y2="720.7"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="698" x2="230.7" y2="698"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="675.3" x2="230.7" y2="675.3"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="428.3" x2="263.1" y2="428.3"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="428.3" x2="263.1" y2="428.3"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="653.5" x2="263.1" y2="653.5"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="630.8" x2="230.7" y2="630.8"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="608.1" x2="230.7" y2="608.1"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="563.6" x2="230.7" y2="563.6"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="540.9" x2="251" y2="540.9"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="518.2" x2="230.7" y2="518.2"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="585.4" x2="230.7" y2="585.4"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="495.5" x2="230.7" y2="495.5"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="473.7" x2="230.7" y2="473.7"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="451" x2="230.7" y2="451"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="203.2" x2="263.1" y2="203.2"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="203.2" x2="263.1" y2="203.2"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="428.3" x2="263.1" y2="428.3"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="405.6" x2="230.7" y2="405.6"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="383" x2="230.7" y2="383"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="338.4" x2="230.7" y2="338.4"/><line fill="none" stroke="#DADADA" stroke-width="15" stroke-miterlimit="10" x1="190.2" y1="315.7" x2="251" y2="315.7"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="293.1" x2="230.7" y2="293.1"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="361.1" x2="230.7" y2="361.1"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="271.2" x2="230.7" y2="271.2"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="248.5" x2="230.7" y2="248.5"/><line fill="none" stroke="#DADADA" stroke-width="8" stroke-miterlimit="10" x1="190.2" y1="225.8" x2="230.7" y2="225.8"/></svg>

                </div>


            </div>

        </div>
        <?php
    }


    public function bedrooms(){

        ?>
        <div class="flex">

            <div class="col l8 s12">

                <div class="range-wrapper">

                    <div class="input-field col s12">
                        <div class="range" data-min="1" data-max="4" data-value="2" ></div>
                        <div class="range-labels">

                            <div class="min-label">
                                <1
                            </div>

                            <div class="max-label">
                                >4
                            </div>
                        </div>
                    </div>

                    <div class="input-field col s12">

                        <label for="<?php echo $this->requestMeta['bedrooms']; ?>">
                            <?php echo __( 'Or type', Homi_Addons::PLUGIN_NAME ); ?>
                        </label>
                        <input type="number" id="<?php echo $this->requestMeta['bedrooms']; ?>"
                               name="<?php echo $this->requestMeta['bedrooms']; ?>" class="range-value" required>

                    </div>

                </div>

            </div>

            <div class="col l4 s12">

                <div class="side-vector">

                    <svg height="512pt" viewBox="0 -46 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m482 45v150c0 8.398438-6.597656 15-15 15h-422c-8.402344 0-15-6.601562-15-15v-150c0-24.902344 20.097656-45 45-45h362c24.902344 0 45 20.097656 45 45zm0 0" fill="#68544f" style="fill: #dadada;"></path><path d="m467 210h-211v-210h181c24.902344 0 45 20.097656 45 45v150c0 8.398438-6.597656 15-15 15zm0 0" fill="#53433f" style="fill: #dadada;"></path><path d="m196 210h-61c-24.8125 0-45-20.1875-45-45v-30c0-24.8125 20.1875-45 45-45h61c24.8125 0 45 20.1875 45 45v30c0 24.8125-20.1875 45-45 45zm0 0" fill="#ede9e8" style="fill: #fff;"></path><path d="m377 210h-61c-24.8125 0-45-20.1875-45-45v-30c0-24.8125 20.1875-45 45-45h61c24.8125 0 45 20.1875 45 45v30c0 24.8125-20.1875 45-45 45zm0 0" fill="#dfd7d5" style="fill: #fff;"></path><path d="m512 300v105c0 8.398438-6.597656 15-15 15h-30c-8.402344 0-15-6.601562-15-15v-45h-392v45c0 8.398438-6.597656 15-15 15h-30c-8.402344 0-15-6.601562-15-15v-105l47.402344-30h427.097656zm0 0" fill="#53433f" style="fill: #dadada;"></path><path d="m512 300v105c0 8.398438-6.597656 15-15 15h-30c-8.402344 0-15-6.601562-15-15v-45h-196v-90h218.5zm0 0" fill="#3e322e" style="fill: #dadada;"></path><path d="m512 225v75h-512v-75c0-24.902344 20.097656-45 45-45h422c24.902344 0 45 20.097656 45 45zm0 0" fill="#ff7816" style="fill: #1259af;"></path><path d="m512 225v75h-256v-120h211c24.902344 0 45 20.097656 45 45zm0 0" fill="#ff4b00" style="fill: #1259af;"></path></svg>

                </div>

            </div>

        </div>
        <?php
    }


    public function bathrooms(){

        ?>
        <div class="flex">

            <div class="col l8 s12">

                <div class="range-wrapper">

                    <div class="input-field col s12">
                        <div class="range" data-min="1" data-max="4" data-value="2" ></div>
                        <div class="range-labels">

                            <div class="min-label">
                                <1
                            </div>

                            <div class="max-label">
                                >4
                            </div>
                        </div>
                    </div>

                    <div class="input-field col s12">

                        <label for="<?php echo $this->requestMeta['bathrooms']; ?>">
                            <?php echo __( 'Or type', Homi_Addons::PLUGIN_NAME ); ?>
                        </label>
                        <input type="number" id="<?php echo $this->requestMeta['bathrooms']; ?>"
                               name="<?php echo $this->requestMeta['bathrooms']; ?>" class="range-value" required>

                    </div>

                </div>

            </div>

            <div class="col l4 s12">

                <div class="side-vector">

                    <svg height="512" viewBox="0 0 192 192" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m140 0a52.059 52.059 0 0 0 -51.874 48.563 56.156 56.156 0 0 0 -45.785 39.437h107.318a56.155 56.155 0 0 0 -45.494-39.394 36 36 0 0 1 71.835 3.394v140h16v-140a52.059 52.059 0 0 0 -52-52z" style="fill: #dadada;"></path><path d="m32 96h128v16h-128z" style="fill: #eae3e3;"></path><circle cx="96" cy="176" r="8" style="fill: #1259af;"></circle><circle cx="96" cy="152" r="8" style="fill: #1259af;"></circle><circle cx="128" cy="176" r="8" style="fill: #1259af;"></circle><circle cx="128" cy="152" r="8" style="fill: #1259af;"></circle><circle cx="64" cy="176" r="8" style="fill: #1259af;"></circle><circle cx="64" cy="152" r="8" style="fill: #1259af;"></circle><circle cx="96" cy="128" r="8" style="fill: #1259af;"></circle><circle cx="128" cy="128" r="8" style="fill: #1259af;"></circle><circle cx="64" cy="128" r="8" style="fill: #1259af;"></circle></svg>

                </div>

            </div>

        </div>
        <?php
    }


    public function construction_year(){

        ?>
        <div class="flex">

            <div class="col l8 s12">

                <div class="range-wrapper">

                    <div class="input-field col s12">
                        <div class="range" data-min="1950" data-max="2019" data-value="1985" ></div>
                        <div class="range-labels">

                            <div class="min-label">
                                <1950
                            </div>

                            <div class="max-label">
                                >2019
                            </div>
                        </div>
                    </div>

                    <div class="input-field col s12">

                        <label for="<?php echo $this->requestMeta['construction_year']; ?>">
                            <?php echo __( 'Or type', Homi_Addons::PLUGIN_NAME ); ?>
                        </label>
                        <input type="number" id="<?php echo $this->requestMeta['construction_year']; ?>"
                               name="<?php echo $this->requestMeta['construction_year']; ?>" class="range-value" required>

                    </div>

                </div>

            </div>

            <div class="col l4 s12">

                <div class="side-vector">

                    <svg id="Ebene_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="-100 0 1400 1100" enable-background="new 0 0 1400 1100" xml:space="preserve"><title>clock</title><rect x="501.8" y="583.6" fill="#E4E3E2" width="167.4" height="276.5"/><rect x="188.9" y="416.3" fill="#E4E3E2" width="312.9" height="458.4"/><line fill="none" stroke="#AAAAAA" stroke-width="21" stroke-miterlimit="10" x1="167.1" y1="873" x2="516.3" y2="873"/><rect x="210.7" y="467.2" fill="#FFFFFF" width="160.1" height="65.5"/><rect x="385.3" y="467.2" fill="#FFFFFF" width="94.6" height="65.5"/><rect x="239.8" y="554.5" fill="#FFFFFF" width="72.8" height="58.2"/><rect x="334.4" y="554.5" fill="#FFFFFF" width="145.5" height="58.2"/><rect x="210.7" y="634.6" fill="#FFFFFF" width="203.7" height="65.5"/><rect x="334.4" y="721.9" fill="#FFFFFF" width="145.5" height="65.5"/><rect x="545.4" y="634.6" fill="#FFFFFF" width="123.7" height="65.5"/><rect x="545.4" y="721.9" fill="#FFFFFF" width="123.7" height="65.5"/><line fill="none" x1="654.6" y1="743.7" x2="654.6" y2="845.6"/><line fill="none" stroke="#AAAAAA" stroke-width="21" stroke-miterlimit="10" x1="501.8" y1="862.8" x2="683.7" y2="862.8"/><polygon opacity="0.1" fill="#555555" stroke="#555555" stroke-miterlimit="10"  points="669.1,750.3507.6,583.6 501.8,583.6 501.8,852.9 669.1,852.9 "/><path fill="#1259af" class="fill__primary" d="M1032.9,395.4c0-8-6.5-14.6-14.6-14.6h-50.9c-8,0-14.6,6.5-14.6,14.6v50.9c0,8,6.5,14.6,14.6,14.6h50.9c8,0,14.6-6.5,14.6-14.6V395.4z"/><polyline fill="none" stroke="#1259af" class="line__primary" stroke-width="7" stroke-miterlimit="10" points="643.7,406.4 905.6,311.8 1000.2,384.5 "/><polyline fill="#1259af" class="fill__primary" points="960.2,395.4 592.7,395.4 534.5,439.1 960.2,439.1 "/><polyline fill="none" stroke="#1259af" class="line__primary" stroke-width="7" stroke-linejoin="bevel" stroke-miterlimit="10" points="832.8,415.8905.6,311.8 905.6,417.3 "/><rect x="829.2" y="439.1" fill="#1259af" class="fill__primary" width="72.8" height="451.1"/><polyline fill="none" stroke="#FFFFFF" stroke-width="7" stroke-miterlimit="10" points="894.7,442.7 840.1,501 894.7,559.2840.1,610.1 894.7,661 "/><polyline fill="none" stroke="#FFFFFF" stroke-width="7" stroke-miterlimit="10" points="894.7,661 840.1,719.2 894.7,777.4840.1,828.4 894.7,879.3 "/><line fill="none" stroke="#1259af" class="line__primary" stroke-width="21" stroke-miterlimit="10" x1="931.1" y1="886.6" x2="800.1" y2="886.6"/><polyline fill="none" stroke="#1259af" class="line__primary" stroke-width="7" stroke-miterlimit="10" points="694.6,435.5 658.2,530.1 621.8,428.2 "/><circle fill="#1259af" class="fill__primary" cx="661.8" cy="548.2" r="18.2"/><g><path fill="#1259af" class="fill__primary" d="M666.2,570.1c0,0-0.7,0-1.5,0c-1.5,0-2.2,0-3.6,0c-2.9,0.7-8,2.2-12.4,5.8s-8.7,9.5-9.5,17.5c0,0.7,0,2.2,0,2.9s0,2.2,0,2.9c0,1.5,0.7,3.6,1.5,5.8c1.5,3.6,3.6,8,5.8,10.9c5.8,6.5,14.6,10.2,23.3,9.5c8,0,16-4.4,21.1-9.5s7.3-10.9,8.7-14.6c0.7-2.2,0.7-3.6,0.7-5.1s0-1.5,0-1.5s0,0.7,0,1.5c0,1.5,0,2.9,0,5.1c-0.7,4.4-2.2,10.2-7.3,16c-4.4,5.8-12.4,10.9-22.6,12.4c-11.6,2.2-23.3-1.5-30.6-8.7c-3.6-3.6-7.3-8-9.5-13.1c-0.7-2.2-1.5-5.1-2.2-8c0-1.5,0-2.2-0.7-3.6c0-1.5,0-2.9,0-4.4c0-10.2,5.1-19.6,11.6-25.5c5.8-5.8,13.1-8.7,18.2-10.2c2.9-0.7,5.1-0.7,5.8-0.7c1.5,0,1.5,0,1.5,0L666.2,570.1z"/></g></svg>

                </div>

            </div>

        </div>
        <?php
    }


    public function condition(){

        ?>

        <div class="flex checkbox-boxes">

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::LOT_OF_WORK_ICON; ?>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['condition']; ?>"
                       name="<?php echo $this->requestMeta['condition']; ?>" class="filled-in" value="bad" required>
                <span><?php echo __( 'Needs a lot of work', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::SOME_WORK_ICON; ?>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['condition']; ?>"
                       name="<?php echo $this->requestMeta['condition']; ?>" class="filled-in" value="regular" required>
                <span><?php echo __( 'Needs some work', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::GOOD_CONDITION_ICON; ?>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['condition']; ?>"
                       name="<?php echo $this->requestMeta['condition']; ?>" class="filled-in" value="good" required>
                <span><?php echo __( 'In good condition', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::EXCELLENT_CONDITION_ICON; ?>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['condition']; ?>"
                       name="<?php echo $this->requestMeta['condition']; ?>" class="filled-in" value="very_good" required>
                <span><?php echo __( 'Everything is brand new', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

        </div>

        <?php
    }


    public function valuation_reason(){

        ?>

        <div class="flex checkbox-boxes">

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::SALE_ICON; ?>
                </div>


                <input type="radio" id="<?php echo $this->requestMeta['valuation_reason']; ?>"
                       name="<?php echo $this->requestMeta['valuation_reason']; ?>" class="filled-in" value="sale" required>
                <span><?php echo __( 'Sale', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::PURCHASE_ICON; ?>
                </div>


                <input type="radio" id="<?php echo $this->requestMeta['valuation_reason']; ?>"
                       name="<?php echo $this->requestMeta['valuation_reason']; ?>" class="filled-in" value="purchase" required>
                <span><?php echo __( 'Purchase', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

            <label class="checkbox-with-vector">

                <div class="vector">
                    <?php echo self::MISC_ICON; ?>
                </div>


                <input type="radio" id="<?php echo $this->requestMeta['valuation_reason']; ?>"
                       name="<?php echo $this->requestMeta['valuation_reason']; ?>" class="filled-in" value="miscellaneous" required>
                <span><?php echo __( 'Miscellaneous', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

        </div>


        <?php
    }


    public function calendar(){

        $availabilityCalendar = new ValuationCalendar();
        ?>

        <div class="flex">

            <div class="col l8 s12">

                <?php $availabilityCalendar->display_availability_calendar( $this->requestMeta['valuation_day'], '', array('items' => 7 ) ); ?>

            </div>

            <div class="col l4 s12">

                <div class="agent-box">

                    <div class="agent-avatar">

                        <img alt="Alexandros Saisanas Homi Agent" src="https://homi.com.gr/wp-content/uploads/2019/12/Alexandros-Saisanas-Homi-Agent.jpeg">

                        <div class="featured-icon">
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>

                    </div>

                    <div class="agent-name">
                        Alexandros Saisanas
                    </div>

                    <div class="your-agent-postcode">
                        <?php echo __( 'Your property expert in ', Homi_Addons::PLUGIN_NAME ); ?>
                        <span class="postcode-var">
                            11142
                        </span>
                    </div>

                    <div class="agent-description">

                        Alexandros is excited to assist you with the valuation of your property.

                    </div>

                    <div class="agent-footer hide">

                        <div class="properties-sold">

                            <svg id="homiSmallIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve">
                                <g>
                                    <polygon id="polygon1" style="fill:#1259AF;"  points="29.6,119 29.6,278 73.3,278 73.3,141.8 160.7,80.8 255,142.6 255,278 298.7,278 298.7,119 159.9,28.1"/>
                                    <polygon id="polygon2" style="fill:#1259AF;" points="195.6,278 195.6,160.9 125.7,160.9 125.7,278 68.6,315 139.9,315 	"/>
                                </g>
                            </svg>

                            <span class="num-of-properties">666</span>
                            <?php echo __( 'Properties sold', Homi_Addons::PLUGIN_NAME ); ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        <?php
    }

    public function phone(){

        ?>

        <div class="flex">

            <div class="col l8 s12">

                <div class="input-field col s12">

                    <?php

                    $phone = '';

                    if( is_user_logged_in() ){

                        $user = wp_get_current_user();
                        $phone = get_user_meta( $user->ID, 'fave_author_phone', true );
                    }

                    ?>

                    <label for="<?php echo $this->requestMeta['requester_phone']; ?>">
                        <?php echo __('Phone Number', Homi_Addons::PLUGIN_NAME); ?>
                    </label>
                    <input type="number" id="<?php echo $this->requestMeta['requester_phone']; ?>"
                           name="<?php echo $this->requestMeta['requester_phone']; ?>" onKeyPress="if(this.value.length===10) return false;"
                           value="<?php echo $phone; ?>" class="phone-field" required>

                    <svg id="wrongInput" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve"><g><path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    <svg id="validIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7C514.5,101.703,514.499,85.494,504.502,75.496z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                    <div class="wrong-input-message">
                        <?php echo __( 'This is not a valid phone number', Homi_Addons::PLUGIN_NAME ); ?>
                    </div>

                </div>


            </div>

            <div class="col l4 s12">

                <div class="side-vector">

                    <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 511.814 511.814" xml:space="preserve"><g><path style="fill:#E8E8E8;" d="M511.814,108.644v191.003c0,3.617-1.437,7.086-3.995,9.644c-2.558,2.558-6.027,3.995-9.644,3.995H129.818c-7.532,0-13.639-6.106-13.639-13.639V26.786c0-7.532,6.106-13.639,13.639-13.639h368.358c7.532,0,13.639,6.106,13.639,13.639V108.644z"></path><path style="fill:#D5D5D5;" d="M508.407,17.852L327.159,172.627c-7.601,6.418-18.723,6.418-26.324,0L119.587,17.852c2.562-2.984,6.298-4.702,10.231-4.705h368.358C502.109,13.151,505.844,14.869,508.407,17.852z"></path><path style="fill:#DDD;" d="M506.968,310.01c-2.452,2.119-5.587,3.282-8.828,3.275H129.818c-3.24,0.004-6.374-1.158-8.828-3.275L272.11,148.139l28.725,24.488c7.601,6.418,18.723,6.418,26.324,0l28.654-24.488L506.968,310.01z"></path><path style="fill:#1259AF;" d="M111.695,153.859l25.335,38.003c5.048,7.571,3.396,17.754-3.787,23.34l-31.197,24.267c-6.767,5.217-8.71,14.593-4.573,22.069c9.154,16.437,17.814,35.858,60.796,78.848s62.42,51.633,78.857,60.787c7.475,4.145,16.857,2.201,22.069-4.573l24.258-31.188c5.589-7.184,15.776-8.836,23.349-3.787l39.203,26.138l44.138,29.405c7.728,5.129,10.06,15.426,5.297,23.384l-20.904,34.834c-5.544,9.421-14.503,16.344-25.017,19.332c-34.737,9.534-111.351,11.476-234.161-111.351S-5.597,183.944,3.937,149.207c2.986-10.513,9.906-19.472,19.324-25.017l34.816-20.904c7.959-4.758,18.252-2.427,23.384,5.297L111.695,153.859z"></path></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                </div>

            </div>

        </div>

        <?php

    }

    public function thank_you(){

        ?>

        <div class="preloader-wrapper hide">

            <div class="preloader">

                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve">
                    <g>
                        <polygon id="polygon1" style="fill:#1259AF;"  points="29.6,119 29.6,278 73.3,278 73.3,141.8 160.7,80.8 255,142.6 255,278 298.7,278 298.7,119 159.9,28.1"/>
                        <polygon id="polygon2" style="fill:#1259AF;" points="195.6,278 195.6,160.9 125.7,160.9 125.7,278 68.6,315 139.9,315 	"/>
                    </g>
                </svg>

                <div class="preloader-text">
                    <?php echo __( 'Please wait while we are processing your information', Homi_Addons::PLUGIN_NAME ); ?>
                </div>

            </div>

        </div>

        <div class="col l7 s12">

            <div class="thank-you-message">

            </div>

        </div>

        <div class="col l5 s12 hide-on-med-and-down">

            <div class="side-vector">

                <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve"><style type="text/css" scoped>.ht0{fill:#1259AF;}.ht1{fill:#034382; stroke: none;}.ht2{fill:#FFFFFF;}</style><g><polygon class="ht0" points="29.6,119 29.6,278 73.3,278 73.3,141.8 160.7,80.8 255,142.6 255,278 298.7,278 298.7,119 159.9,28.1 "/><polygon class="ht0" points="195.6,278 195.6,160.9 125.7,160.9 125.7,278 68.6,315 139.9,315 "/></g><circle class="ht0" cx="271" cy="46.2" r="32"/><path class="ht1" d="M262.8,60.6l16.5,16.5C292.9,73.5,303,61,303,46.2c0-0.3,0-0.6,0-0.9l-12.9-11.9L262.8,60.6z"/><g><path class="ht2" d="M271.8,53.4c1.4,1.4,1.4,3.8,0,5.2l-2.9,2.9c-1.4,1.4-3.8,1.4-5.2,0l-12.8-12.9c-1.4-1.4-1.4-3.8,0-5.2l2.9-2.9c1.4-1.4,3.8-1.4,5.2,0L271.8,53.4z"/><path class="ht2" d="M283,31.1c1.4-1.4,3.8-1.4,5.2,0l2.9,2.9c1.4,1.4,1.4,3.8,0,5.2L269,61.3c-1.4,1.4-3.8,1.4-5.2,0l-2.9-2.9c-1.4-1.4-1.4-3.8,0-5.2L283,31.1z"/></g></svg>

            </div>

        </div>

        <?php

    }


    public function package_type(){

        ?>

        <div class="flex checkbox-boxes">

            <label class="checkbox-with-vector <?php echo ( isset( $_GET['service'] ) && $_GET['service'] === 'premium' ? 'selected' : ''); ?>">

                <div class="vector">
                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve"><polygon style="fill:#E1ECFD;" points="50.6,223 50.6,382 94.3,382 94.3,245.8 181.7,184.8 276,246.6 276,382 319.7,382 319.7,223 180.9,132.1 "/><polygon style="fill:#E1ECFD;" points="216.6,382 216.6,264.9 146.7,264.9 146.7,382 89.6,419 160.9,419 "/><g><path style="fill:#1259AF;" d="M428.6,111c-1.1-2-3.2-3.2-5.5-3.2H314.9c-2.3,0-4.4,1.2-5.5,3.2l-7.7,13.4c-0.9,1.5-0.4,3.4,1.1,4.3c1.5,0.9,3.4,0.4,4.3-1.1l5.9-10.3l22.6,39.1h-45.1l9.5-16.5c0.9-1.5,0.4-3.4-1.1-4.3c-1.5-0.9-3.4-0.4-4.3,1.1l-11.5,20c-1.1,1.9-0.9,4.3,0.6,5.9l81.4,91.2c1,1.1,2.3,1.7,3.8,1.7h0c1.4,0,2.8-0.6,3.8-1.7l81.6-91.2 M375.6,156.2h-29.1l22.6-39.1l22.6,39.1h-0.3c-1.7,0-3.1,1.4-3.1,3.1c0,1.7,1.4,3.1,3.1,3.1h1.5l-23.9,81l-23.7-81h30.4c1.7,0,3.1-1.4,3.1-3.1C378.7,157.6,377.3,156.2,375.6,156.2L375.6,156.2z M397,153.1L374.4,114h45.1L397,153.1z M399.3,162.5h46.6l-69.5,77.7L399.3,162.5z M447.5,156.2h-45.1l22.6-39.1L447.5,156.2z M318.5,114h45.1L341,153.1L318.5,114z M338.7,162.5l22.8,77.7l-69.4-77.7L338.7,162.5z"/><path style="fill:#1259AF;" d="M444.6,243.8c-0.1-0.1-0.3-0.2-0.5-0.3c-2-0.9-3.8-1.9-5.4-3.1c-1.4-1-3.4-0.7-4.4,0.7c-1,1.4-0.7,3.4,0.7,4.4c1,0.7,2,1.3,3,1.9c-6.7,3.9-11.4,9.4-13.7,16.2c-2.3-6.8-7-12.3-13.7-16.2c6.7-3.9,11.4-9.4,13.7-16.2c0,0.1,0.1,0.2,0.1,0.3c0.6,1.6,2.3,2.5,4,1.9c1.6-0.6,2.5-2.3,1.9-4c-0.2-0.7-0.4-1.4-0.6-2.1l-1.3-5.3c-0.5-1.9-2.1-3.2-4.1-3.2c-1.9,0-3.6,1.3-4.1,3.2l-1.3,5.3c-2.2,9-9.1,13.8-14.4,16.1c-0.2,0.1-0.3,0.2-0.5,0.3c-1.2,0.8-2,2.2-2,3.7s0.7,2.9,2,3.7c0.1,0.1,0.3,0.2,0.5,0.3c5.4,2.4,12.2,7.1,14.4,16.1l1.3,5.3c0.5,1.9,2.1,3.2,4.1,3.2s3.6-1.3,4.1-3.2l1.3-5.3c2.2-9,9.1-13.8,14.4-16.1c0.2-0.1,0.3-0.2,0.5-0.3c1.2-0.8,2-2.2,2-3.7S445.8,244.6,444.6,243.8L444.6,243.8z"/><path style="fill:#1259AF;" d="M459.4,106.1c-0.1-0.1-0.3-0.2-0.5-0.3c-3.5-1.5-5.6-3.9-6.4-7.1l-0.7-2.7v0c-0.4-1.6-1.9-2.8-3.6-2.8c0,0,0,0,0,0c-1.7,0-3.2,1.1-3.6,2.8l-0.7,2.7c-0.8,3.2-2.9,5.6-6.4,7.1c-0.2,0.1-0.3,0.2-0.5,0.3c-1.1,0.7-1.7,1.9-1.7,3.1c0,1.3,0.6,2.4,1.7,3.1c0.1,0.1,0.3,0.2,0.5,0.3c3.5,1.5,5.6,3.9,6.4,7.1l0.7,2.7c0.4,1.6,1.9,2.8,3.6,2.8h0c1.7,0,3.2-1.1,3.6-2.8l0.7-2.7c0.8-3.2,2.9-5.6,6.4-7.1c0.2-0.1,0.3-0.2,0.5-0.3c1.1-0.7,1.7-1.9,1.7-3.1C461.1,108,460.5,106.8,459.4,106.1L459.4,106.1z M448.4,113.8c-1-1.7-2.4-3.2-4.1-4.5c1.7-1.3,3.1-2.8,4.1-4.5c1,1.7,2.4,3.2,4.1,4.5C450.8,110.5,449.4,112,448.4,113.8z"/><path style="fill:#1259AF;" d="M290.6,99.2l0.9,3.8c0.4,1.8,2,3,3.8,3c1.8,0,3.4-1.2,3.8-3l0.9-3.8c1.5-6.2,6.2-9.4,9.9-11.1c0.2-0.1,0.3-0.2,0.5-0.3c1.1-0.8,1.8-2,1.8-3.4c0-1.4-0.7-2.6-1.8-3.4c-0.1-0.1-0.3-0.2-0.5-0.3c-3.7-1.6-8.4-4.9-9.9-11.1l-0.9-3.8c-0.4-1.8-2-3-3.8-3c-1.8,0-3.4,1.2-3.8,3l-0.9,3.8c-1.5,6.2-6.2,9.4-9.9,11.1c-0.2,0.1-0.3,0.2-0.5,0.3c-1.1,0.8-1.8,2-1.8,3.4c0,1.4,0.7,2.6,1.8,3.4c0.1,0.1,0.3,0.2,0.5,0.3C284.4,89.8,289.1,93,290.6,99.2z M295.3,75.2c1.7,3.8,4.5,6.9,8.2,9.3c-3.7,2.4-6.5,5.6-8.2,9.3c-1.7-3.8-4.5-6.9-8.2-9.3C290.8,82.1,293.6,78.9,295.3,75.2z"/></g></svg>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['package']; ?>"
                       name="<?php echo $this->requestMeta['package']; ?>" class="filled-in" value="premium"  <?php echo ( isset( $_GET['service'] ) && $_GET['service'] === 'premium' ? 'checked' : ''); ?> required>
                <span><?php echo __( 'Premium', Homi_Addons::PLUGIN_NAME ); ?></span>
                <span class="price"><?php echo __( '1/2 month rent', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

            <label class="checkbox-with-vector <?php echo ( isset( $_GET['service'] ) && $_GET['service'] === 'basic' ? 'selected' : ''); ?>">

                <div class="vector">
                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve"><polygon style="fill:#E1ECFD;" points="95.6,224 95.6,383 139.3,383 139.3,246.8 226.7,185.8 321,247.6 321,383 364.7,383 364.7,224 225.9,133.1 "/><polygon style="fill:#E1ECFD;" points="261.6,383 261.6,265.9 191.7,265.9 191.7,383 134.6,420 205.9,420 "/><g><path style="fill:#1259AF;" d="M457.6,293.8c-0.1-0.1-0.3-0.2-0.5-0.3c-2-0.9-3.8-1.9-5.4-3.1c-1.4-1-3.4-0.7-4.4,0.7c-1,1.4-0.7,3.4,0.7,4.4c1,0.7,2,1.3,3,1.9c-6.7,3.9-11.4,9.4-13.7,16.2c-2.3-6.8-7-12.3-13.7-16.2c6.7-3.9,11.4-9.4,13.7-16.2c0,0.1,0.1,0.2,0.1,0.3c0.6,1.6,2.3,2.5,4,1.9c1.6-0.6,2.5-2.3,1.9-4c-0.2-0.7-0.4-1.4-0.6-2.1l-1.3-5.3c-0.5-1.9-2.1-3.2-4.1-3.2c-1.9,0-3.6,1.3-4.1,3.2l-1.3,5.3c-2.2,9-9.1,13.8-14.4,16.1c-0.2,0.1-0.3,0.2-0.5,0.3c-1.2,0.8-2,2.2-2,3.7s0.7,2.9,2,3.7c0.1,0.1,0.3,0.2,0.5,0.3c5.4,2.4,12.2,7.1,14.4,16.1l1.3,5.3c0.5,1.9,2.1,3.2,4.1,3.2s3.6-1.3,4.1-3.2l1.3-5.3c2.2-9,9.1-13.8,14.4-16.1c0.2-0.1,0.3-0.2,0.5-0.3c1.2-0.8,2-2.2,2-3.7S458.8,294.6,457.6,293.8L457.6,293.8z"/><path style="fill:#1259AF;" d="M404.4,180.1c-0.1-0.1-0.3-0.2-0.5-0.3c-3.5-1.5-5.6-3.9-6.4-7.1l-0.7-2.7v0c-0.4-1.6-1.9-2.8-3.6-2.8c0,0,0,0,0,0c-1.7,0-3.2,1.1-3.6,2.8l-0.7,2.7c-0.8,3.2-2.9,5.6-6.4,7.1c-0.2,0.1-0.3,0.2-0.5,0.3c-1.1,0.7-1.7,1.9-1.7,3.1c0,1.3,0.6,2.4,1.7,3.1c0.1,0.1,0.3,0.2,0.5,0.3c3.5,1.5,5.6,3.9,6.4,7.1l0.7,2.7c0.4,1.6,1.9,2.8,3.6,2.8h0c1.7,0,3.2-1.1,3.6-2.8l0.7-2.7c0.8-3.2,2.9-5.6,6.4-7.1c0.2-0.1,0.3-0.2,0.5-0.3c1.1-0.7,1.7-1.9,1.7-3.1C406.1,182,405.5,180.8,404.4,180.1L404.4,180.1z M393.4,187.8c-1-1.7-2.4-3.2-4.1-4.5c1.7-1.3,3.1-2.8,4.1-4.5c1,1.7,2.4,3.2,4.1,4.5C395.8,184.5,394.4,186,393.4,187.8z"/><path style="fill:#1259AF;" d="M303.6,149.2l0.9,3.8c0.4,1.8,2,3,3.8,3c1.8,0,3.4-1.2,3.8-3l0.9-3.8c1.5-6.2,6.2-9.4,9.9-11.1c0.2-0.1,0.3-0.2,0.5-0.3c1.1-0.8,1.8-2,1.8-3.4c0-1.4-0.7-2.6-1.8-3.4c-0.1-0.1-0.3-0.2-0.5-0.3c-3.7-1.6-8.4-4.9-9.9-11.1l-0.9-3.8c-0.4-1.8-2-3-3.8-3c-1.8,0-3.4,1.2-3.8,3l-0.9,3.8c-1.5,6.2-6.2,9.4-9.9,11.1c-0.2,0.1-0.3,0.2-0.5,0.3c-1.1,0.8-1.8,2-1.8,3.4c0,1.4,0.7,2.6,1.8,3.4c0.1,0.1,0.3,0.2,0.5,0.3C297.4,139.8,302.1,143,303.6,149.2z M308.3,125.2c1.7,3.8,4.5,6.9,8.2,9.3c-3.7,2.4-6.5,5.6-8.2,9.3c-1.7-3.8-4.5-6.9-8.2-9.3C303.8,132.1,306.6,128.9,308.3,125.2z"/></g></svg>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['package']; ?>"
                       name="<?php echo $this->requestMeta['package']; ?>" class="filled-in" value="basic" <?php echo ( isset( $_GET['service'] ) && $_GET['service'] === 'basic' ? 'checked' : ''); ?> required>
                <span><?php echo __( 'Basic', Homi_Addons::PLUGIN_NAME ); ?></span>
                <span class="price"><?php echo __( '1 month rent', Homi_Addons::PLUGIN_NAME ); ?></span>

            </label>

            <label class="checkbox-with-vector">

                <div class="vector">
                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve"><polygon style="fill:#E1ECFD;" points="50.6,223 50.6,382 94.3,382 94.3,245.8 181.7,184.8 276,246.6 276,382 319.7,382 319.7,223 180.9,132.1 "/><polygon style="fill:#E1ECFD;" points="216.6,382 216.6,264.9 146.7,264.9 146.7,382 89.6,419 160.9,419 "/><g><g><g><circle style="fill:#1259AF;" cx="375.5" cy="174.8" r="8.6"/><path style="fill:#1259AF;" d="M375.5,44c-48.9,0-88.5,39.6-88.5,88.5c0,48.9,39.6,88.5,88.5,88.5c48.9,0,88.5-39.6,88.5-88.5C464,83.6,424.4,44,375.5,44z M375.5,207.2c-41.3,0-74.7-33.4-74.7-74.7c0-41.3,33.4-74.7,74.7-74.7c41.3,0,74.7,33.4,74.7,74.7C450.2,173.8,416.8,207.2,375.5,207.2z"/><path style="fill:#1259AF;" d="M375.5,88.4c-15.2,0-27.7,12.4-27.7,27.7c0,3.8,3.1,6.9,6.9,6.9s6.9-3.1,6.9-6.9c0-7.6,6.2-13.8,13.8-13.8s13.8,6.2,13.8,13.8s-6.2,13.8-13.8,13.8c-3.8,0-6.9,3.1-6.9,6.9v17.3c0,3.8,3.1,6.9,6.9,6.9s6.9-3.1,6.9-6.9v-11.2c11.9-3.1,20.7-13.9,20.7-26.8C403.2,100.8,390.7,88.4,375.5,88.4z"/></g></g></g></svg>
                </div>

                <input type="radio" id="<?php echo $this->requestMeta['package']; ?>"
                       name="<?php echo $this->requestMeta['package']; ?>" class="filled-in" value="not_sure" required>
                <span><?php echo __( 'I don\'t know', Homi_Addons::PLUGIN_NAME ); ?></span>
                <span class="price opacity-0 no-opacity">.</span>

            </label>

            <p class="payment-notice">
                *Payment is made after tenant signs contract
            </p>

        </div>

        <?php
    }



    public function areas_of_interest(){

        ?>

        <div class="flex">

            <div class="col s12">

                <input id="changeTrigger" type="hidden">

                <div class="area-field flex flex-center full-width">

                    <div class="input-field col s12">

                        <label for="<?php echo $this->requestMeta['area_1']; ?>">
                            <?php echo __('Area 1', Homi_Addons::PLUGIN_NAME); ?>
                        </label>
                        <input class="validate-suburb validate-this-only" data-types="(regions)"
                               placeholder="<?php echo ( strpos( $_SERVER['REQUEST_URI'], '/el') !== false ? 'Πληκτρολογήστε μια περιοχή ενδιαφέροντος' : 'Enter an area of interest' ); ?>"
                               type="text" id="<?php echo $this->requestMeta['area_1']; ?>" name="<?php echo $this->requestMeta['area_1']; ?>" value="" required>

                    </div>

                </div>

                <div class="area-field flex flex-center full-width">

                    <div class="input-field col s12">

                        <label for="<?php echo $this->requestMeta['area_2']; ?>">
                            <?php echo __('Area 2 (Optional)', Homi_Addons::PLUGIN_NAME); ?>
                        </label>
                        <input class="validate-suburb validate-this-only" data-types="(regions)"
                               placeholder="<?php echo ( strpos( $_SERVER['REQUEST_URI'], '/el') !== false ? 'Πληκτρολογήστε μια περιοχή ενδιαφέροντος' : 'Enter an area of interest' ); ?>"
                               type="text" id="<?php echo $this->requestMeta['area_2']; ?>" name="<?php echo $this->requestMeta['area_2']; ?>" value="">

                    </div>

                </div>

                <div class="area-field flex flex-center full-width">

                    <div class="input-field col s12">

                        <label for="<?php echo $this->requestMeta['area_3']; ?>">
                            <?php echo __('Area 3 (Optional)', Homi_Addons::PLUGIN_NAME); ?>
                        </label>
                        <input class="validate-suburb validate-this-only" data-types="(regions)"
                               placeholder="<?php echo ( strpos( $_SERVER['REQUEST_URI'], '/el') !== false ? 'Πληκτρολογήστε μια περιοχή ενδιαφέροντος' : 'Enter an area of interest' ); ?>"
                               type="text" id="<?php echo $this->requestMeta['area_3']; ?>" name="<?php echo $this->requestMeta['area_3']; ?>" value="">

                    </div>

                </div>

            </div>

        </div>
        <?php
    }


    public function preferences(){

        ?>

        <div class="flex">

            <div class="col s12">

                <div class="input-field col l6 s12">


                    <label for="<?php echo $this->requestMeta['min_size']; ?>">
                        <?php echo __('Minimum size (sqm)', Homi_Addons::PLUGIN_NAME); ?>
                    </label>
                    <input type="number" id="<?php echo $this->requestMeta['min_size']; ?>" name="<?php echo $this->requestMeta['min_size']; ?>" value="" required>

                </div>

                <div class="input-field col l6 s12">


                    <label for="<?php echo $this->requestMeta['min_bedrooms']; ?>">
                        <?php echo __('Minimum bedrooms', Homi_Addons::PLUGIN_NAME); ?>
                    </label>
                    <input type="number" id="<?php echo $this->requestMeta['min_bedrooms']; ?>" name="<?php echo $this->requestMeta['min_bedrooms']; ?>" value="" required>

                </div>

                <div class="input-field col l6 s12">


                    <label for="<?php echo $this->requestMeta['max_price']; ?>">
                        <?php echo __('Maximum price (€)', Homi_Addons::PLUGIN_NAME); ?>
                    </label>
                    <input type="number" id="<?php echo $this->requestMeta['max_price']; ?>" name="<?php echo $this->requestMeta['max_price']; ?>" value="" required>

                </div>


                <div class="input-field col l6 s12">

                    <label for="<?php echo $this->requestMeta['type']; ?>">
                        <?php echo __('I am looking to', Homi_Addons::PLUGIN_NAME); ?>
                    </label>

                    <select class="" id="<?php echo $this->requestMeta['type']; ?>" name="<?php echo $this->requestMeta['type']; ?>" required>
                        <option value="rent" selected>Rent</option>
                        <option value="buy">Buy</option>
                    </select>

                </div>




            </div>

        </div>
        <?php
    }

}
