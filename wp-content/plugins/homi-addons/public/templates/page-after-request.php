<?php
get_header();
global $wp;
$firstName      = '';
$request_id     = get_query_var('request');

if( is_user_logged_in() ){

    $user               = wp_get_current_user();
    $post_author_id     = get_post_field( 'post_author', $request_id );

    if( $post_author_id !== $user->ID && !current_user_can('administrator') ){
        wp_redirect( home_url() );
        exit;
    }

    $firstName  = $user->first_name;
}
else {

    wp_redirect( home_url('login') . '?redirect_to=' . urlencode(home_url() . $_SERVER['REQUEST_URI'] ) );
    exit;

}


$homiValuationRequest   = new HomiValuationRequest( $request_id );

?>

<section id="afterRequestPage" class="row padding-top-50">

    <div class="col <?php echo ( get_post_type( $request_id ) === Homi_Addons_Interest_Request::POST_TYPE_NAME ? '' : 'l7'); ?> s12 with-line">

        <div class="homi-request-message margin-bottom-30">

            <div class="flex flex-center">

                <div class="side-vector">

                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve"><style type="text/css" scoped="">.ht0{fill:#1259AF;}.ht1{fill:#034382; stroke: none;}.ht2{fill:#FFFFFF;}</style><g><polygon class="ht0" points="29.6,119 29.6,278 73.3,278 73.3,141.8 160.7,80.8 255,142.6 255,278 298.7,278 298.7,119 159.9,28.1 "></polygon><polygon class="ht0" points="195.6,278 195.6,160.9 125.7,160.9 125.7,278 68.6,315 139.9,315 "></polygon></g><circle class="ht0" cx="271" cy="46.2" r="32"></circle><path class="ht1" d="M262.8,60.6l16.5,16.5C292.9,73.5,303,61,303,46.2c0-0.3,0-0.6,0-0.9l-12.9-11.9L262.8,60.6z"></path><g><path class="ht2" d="M271.8,53.4c1.4,1.4,1.4,3.8,0,5.2l-2.9,2.9c-1.4,1.4-3.8,1.4-5.2,0l-12.8-12.9c-1.4-1.4-1.4-3.8,0-5.2l2.9-2.9c1.4-1.4,3.8-1.4,5.2,0L271.8,53.4z"></path><path class="ht2" d="M283,31.1c1.4-1.4,3.8-1.4,5.2,0l2.9,2.9c1.4,1.4,1.4,3.8,0,5.2L269,61.3c-1.4,1.4-3.8,1.4-5.2,0l-2.9-2.9c-1.4-1.4-1.4-3.8,0-5.2L283,31.1z"></path></g></svg>

                </div>

                <div class="thank-you-message">

                    <?php if( get_post_type( $request_id ) === Homi_Addons_Interest_Request::POST_TYPE_NAME ): ?>

                        <h3>Your Preferences have been submitted</h3>

                        <p>
                            Thank you for your interest in HOMI and for your submission.<br>
                            HOMI will inform you via email if we receive a property that meets your requirements.
                        </p>

                    <?php else: ?>

                        <h3>Your Request has been submitted</h3>

                        <p>
                            Thank you for your interest in HOMI and for your request for a free property valuation.
                            <br>We will contact you shortly to confirm your free valuation.
                        </p>

                    <?php endif; ?>


                </div>

            </div>

            <?php if( $homiValuationRequest->get_request_date() &&  $homiValuationRequest->get_request_time() ): ?>

                <div class="flex flex-center request-info">

                    <svg height="480pt" viewBox="0 -8 480 480" width="480pt" xmlns="http://www.w3.org/2000/svg"><title>Appointment Date Time</title><path d="m344 192c-75.109375 0-136 60.890625-136 136s60.890625 136 136 136 136-60.890625 136-136c-.082031-75.074219-60.925781-135.917969-136-136zm0 256c-66.273438 0-120-53.726562-120-120s53.726562-120 120-120 120 53.726562 120 120c-.074219 66.242188-53.757812 119.925781-120 120zm0 0"></path><path d="m352 305.472656v-49.472656h-16v49.472656c-6.777344 2.417969-12.109375 7.75-14.527344 14.527344h-33.472656v16h33.472656c3.699219 10.53125 14.1875 17.109375 25.28125 15.855469 11.09375-1.257813 19.84375-10.007813 21.101563-21.101563 1.253906-11.09375-5.324219-21.582031-15.855469-25.28125zm-8 30.527344c-4.417969 0-8-3.582031-8-8s3.582031-8 8-8 8 3.582031 8 8-3.582031 8-8 8zm0 0"></path><path d="m240 320h16v16h-16zm0 0"></path><path d="m336 416h16v16h-16zm0 0"></path><path d="m432 320h16v16h-16zm0 0"></path><path d="m336 224h16v16h-16zm0 0"></path><path d="m16 344v-232h368v72h16v-112c-.027344-22.082031-17.917969-39.972656-40-40h-56v-8c0-13.253906-10.746094-24-24-24s-24 10.746094-24 24v8h-112v-8c0-13.253906-10.746094-24-24-24s-24 10.746094-24 24v8h-56c-22.082031.027344-39.9726562 17.917969-40 40v272c.0273438 22.082031 17.917969 39.972656 40 40h160v-16h-160c-13.253906 0-24-10.746094-24-24zm256-320c0-4.417969 3.582031-8 8-8s8 3.582031 8 8v32c0 4.417969-3.582031 8-8 8s-8-3.582031-8-8zm-160 0c0-4.417969 3.582031-8 8-8s8 3.582031 8 8v32c0 4.417969-3.582031 8-8 8s-8-3.582031-8-8zm-72 24h56v8c0 13.253906 10.746094 24 24 24s24-10.746094 24-24v-8h112v8c0 13.253906 10.746094 24 24 24s24-10.746094 24-24v-8h56c13.253906 0 24 10.746094 24 24v24h-368v-24c0-13.253906 10.746094-24 24-24zm0 0"></path><path d="m112 176c0-8.835938-7.164062-16-16-16h-32c-8.835938 0-16 7.164062-16 16v32c0 8.835938 7.164062 16 16 16h32c8.835938 0 16-7.164062 16-16zm-48 32v-32h32v32zm0 0"></path><path d="m192 176c0-8.835938-7.164062-16-16-16h-32c-8.835938 0-16 7.164062-16 16v32c0 8.835938 7.164062 16 16 16h32c8.835938 0 16-7.164062 16-16zm-48 32v-32h32v32zm0 0"></path><path d="m272 200v-24c0-8.835938-7.164062-16-16-16h-32c-8.835938 0-16 7.164062-16 16v32c0 8.835938 7.164062 16 16 16h16v-16h-16v-32h32v24zm0 0"></path><path d="m96 256h-32c-8.835938 0-16 7.164062-16 16v32c0 8.835938 7.164062 16 16 16h32c8.835938 0 16-7.164062 16-16v-32c0-8.835938-7.164062-16-16-16zm-32 48v-32h32v32zm0 0"></path><path d="m176 256h-32c-8.835938 0-16 7.164062-16 16v32c0 8.835938 7.164062 16 16 16h32c8.835938 0 16-7.164062 16-16v-32c0-8.835938-7.164062-16-16-16zm-32 48v-32h32v32zm0 0"></path><path d="m352 184v-8c0-8.835938-7.164062-16-16-16h-32c-8.835938 0-16 7.164062-16 16v8h16v-8h32v8zm0 0"></path></svg>

                    <span class="request-label date">
                        <?php echo $homiValuationRequest->get_request_date(); ?>
                    </span>

                    <span class="request-label time">
                        <?php echo $homiValuationRequest->get_request_time(); ?>
                    </span>

                </div>

            <?php endif; ?>

        </div>

        <?php if( ! isset( $_GET['pass']) ): ?>

            <div class="card homi-panel">

                <div class="homi-panel--heading flex flex-center">

                    <div class="heading--icon">
                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
                        <circle style="fill:#1259AF;" cx="256" cy="256" r="252.1"/>
                            <path style="fill:#0B5299;" d="M467.1,118.5L244.2,349.3l0.4,24.8h10.2l241.4-194.6C489.2,157.9,479.3,137.1,467.1,118.5z"/>
                            <path style="fill:#F2F1EF;" d="M503.3,107.5l-44.5-44.1c-5.9-5.9-15.8-5.9-22.1,0L246.5,259.9l-82.3-81.1c-5.9-5.9-15.8-5.9-22.1,0
                        l-39.4,39c-5.9,5.9-5.9,15.8,0,21.7l131.5,130.4c3.5,3.5,8.3,4.7,13,4.3c4.7,0.4,9.5-0.8,13-4.3l243-240.2
                        C509.2,123.3,509.2,113.4,503.3,107.5z"/>
                            <path style="fill:#E6E5E3;" d="M260.3,369.8l243-240.2c5.9-5.9,5.9-15.8,0-21.7l-7.1-6.7l-249.3,245L109.1,211.9l-5.9,5.9
                        c-5.9,5.9-5.9,15.8,0,21.7l131.5,130.4c3.5,3.5,8.3,4.7,13,4.3C252.1,374.5,256.8,373.4,260.3,369.8z"/>
                    </svg>

                    </div>

                    <h3>
                        Your account has been created
                    </h3>

                </div>

                <div class="homi-panel--content">

                    <div class="col s12">

                        <p>
                            <span>Welcome to HOMI</span> <span><?php echo $firstName; ?></span>. Please create a strong password so that you can login to HOMI with your email and your new password.
                        </p>

                    </div>

                    <form action="<?php echo site_url( $wp->request ); ?>" method="POST">

                        <!-- The text and password here are to prevent FF from auto filling my login credentials because it ignores autocomplete="off"-->
                        <input type="text" style="display:none">
                        <input type="password" style="display:none">
                        <input type="hidden" name="change_user_pass_action" value="change">
                        <input type="hidden" name="change_user_pass_after_form" value="after_valuation">
                        <input type="hidden" name="request_id" value="<?php echo $request_id; ?>">

                        <div class="input-field col l6 s12">

                            <label for="user_pass">
                                <?php echo __('Set new password', Homi_Addons::PLUGIN_NAME); ?>
                            </label>
                            <input type="password" id="user_pass" name="user_pass" value="" autocomplete="off" required>

                        </div>

                        <div class="input-field col l6 s12">

                            <label for="repeat_password">
                                <?php echo __('Repeat password', Homi_Addons::PLUGIN_NAME); ?>
                            </label>
                            <input type="password" id="repeat_password" name="repeat_password" value="" autocomplete="off" required>

                        </div>

                        <div class="col s12 margin-top-30">

                            <button id="createPassword" class="btn-next btn-primary disabled">
                                Save Password
                                <i class="fa fa-chevron-right"></i>
                            </button>

                        </div>

                    </form>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        <?php else: ?>

            <div class="homi-request-message margin-top-30">

                <div class="flex flex-center">

                    <div class="side-vector">

                        <svg id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 397.9 295.3" xml:space="preserve"><g><g><g><polygon style="fill:#0A58A5;" points="222,240.1 144,240.1 137.7,284.9 228.3,284.9 "/><polygon style="fill:#C7C7C7;" points="222,240.1 144,240.1 141.3,263.2 224.8,263.2 "/></g><path style="fill:#F2F2F2;" d="M118,290L118,290c0-4.1,3.3-7.5,7.5-7.5h115.2c4.1,0,7.5,3.3,7.5,7.5l0,0H118z"/></g><g><path style="fill:#0A58A5;" d="M340.7,30.9H25.4c-4,0-7.3,3.3-7.3,7.3v200.5c0,4,3.3,7.3,7.3,7.3h315.3c4,0,7.3-3.3,7.3-7.3V38.2C348,34.2,344.7,30.9,340.7,30.9z"/><g><defs><rect id="SVGID_1_" x="35.2" y="48.1" width="295.6" height="180.7"/></defs><use xlink:href="#SVGID_1_" style="overflow:visible;fill:#DFF6FD;"/><clipPath id="SVGID_2_"><use xlink:href="#SVGID_1_" style="overflow:visible;"/></clipPath><g style="opacity:6.000000e-02;clip-path:url(#SVGID_2_);"><rect x="119.8" y="-40.6" transform="matrix(0.8082 0.5889 -0.5889 0.8082 107.9219 -76.0003)" style="fill:#FFFFFF;" width="101.7" height="336.6"/><rect x="215" y="3.8" transform="matrix(0.8082 0.5889 -0.5889 0.8082 145.5545 -102.7262)" style="fill:#FFFFFF;" width="31" height="336.6"/></g></g><path style="opacity:0.46;fill:#808080;" d="M185.7,39.1c0,1.5-1.2,2.6-2.6,2.6c-1.5,0-2.6-1.2-2.6-2.6c0-1.5,1.2-2.6,2.6-2.6C184.5,36.5,185.7,37.7,185.7,39.1z"/></g></g><g><g><g><defs><rect id="SVGID_3_" x="32.5" y="6.3" width="315.7" height="231.9"/></defs><clipPath id="SVGID_4_"><use xlink:href="#SVGID_3_" style="overflow:visible;"/></clipPath><path style="opacity:0.38;clip-path:url(#SVGID_4_);fill:#99E6FC;" d="M346.3,186.5h-68.6l-52.2,22.9l12.5-22.9H82.6c-6.7,0-12.2-5.4-12.2-12.2V44.3c0-6.7,5.4-12.2,12.2-12.2h263.7c6.7,0,12.2,5.4,12.2,12.2v130.1C358.5,181.1,353,186.5,346.3,186.5z"/></g><path style="fill:#1259AF;" d="M364.9,166.7H282l-56.5,42.7l7.6-42.7H101.2c-6.7,0-12.2-5.4-12.2-12.2V24.4c0-6.7,5.4-12.2,12.2-12.2h263.7c6.7,0,12.2,5.4,12.2,12.2v130.1C377.1,161.2,371.7,166.7,364.9,166.7z"/><g><path style="fill:#F5F5EB;" d="M392.6,18.3c-1.3,0-2.3-1-2.3-2.3c0-1.3,1-2.3,2.3-2.3"/></g><g><g><rect x="169.5" y="71.3" style="fill:#D4D4D9;" width="5.3" height="2.6"/><rect x="167.7" y="73.6" style="fill:#FEFEFF;" width="8.8" height="2.5"/><path style="fill:#FEFEFF;" d="M167.7,71.4h8.8v-5.7c0-14.1-11.4-25.5-25.5-25.5c-14.1,0-25.5,11.4-25.5,25.5v20h8.8v-20c0-9.2,7.5-16.7,16.7-16.7c9.2,0,16.7,7.5,16.7,16.7V71.4z"/></g><path style="fill:#99E6FC;" d="M151,132.6L151,132.6c-15.9,0-28.9-12.9-28.9-28.9V86.2c0-1.7,1.3-3,3-3h51.7c1.7,0,3,1.3,3,3v17.5C179.9,119.6,166.9,132.6,151,132.6z"/><path style="fill:#1259AF;" d="M157.2,101.3c0-3.4-2.8-6.2-6.2-6.2c-3.4,0-6.2,2.8-6.2,6.2c0,2.3,1.3,4.4,3.2,5.4v7.3c0,1.7,1.3,3,3,3c1.7,0,3-1.3,3-3v-7.3C155.9,105.6,157.2,103.6,157.2,101.3z"/><g><defs><path id="SVGID_5_" d="M179.9,85.5v18.2c0,15.9-12.9,28.9-28.9,28.9h0c-15.9,0-28.9-12.9-28.9-28.9V85.5c0-1.3,1-2.3,2.3-2.3h1.1V65.7c0-14.6,12.4-26.4,27.2-25.4c13.1,0.9,24.1,11.8,23.7,26.3v4.8h-8.8v-5.7c0-9.2-7.5-16.7-16.7-16.7c-9.2,0-16.7,7.5-16.7,16.7v17.5h32.4h1.1h8.8h1.1C178.8,83.2,179.9,84.3,179.9,85.5z M167.7,76.2h8.8v-2.6h-8.8V76.2z"/></defs><clipPath id="SVGID_6_"><use xlink:href="#SVGID_5_" style="overflow:visible;"/></clipPath><rect x="151" y="83.2" style="opacity:0.1;clip-path:url(#SVGID_6_);fill:#E70013;" width="28.9" height="49.3"/></g></g><path style="fill:#E8E8E8;" d="M317.8,117H229c-13.7,0-24.9-11.4-24.9-25.4v-0.5c0-14,11.1-25.4,24.9-25.4h88.8c13.7,0,24.9,11.4,24.9,25.4v0.5C342.7,105.6,331.6,117,317.8,117z"/><path style="fill:#FFFFFF;" d="M318.6,117h-86c-13.3,0-24.1-10.3-24.1-23.1v-0.5c0-12.7,10.8-23.1,24.1-23.1h86c13.3,0,24.1,10.3,24.1,23.1v0.5C342.7,106.6,331.9,117,318.6,117z"/><g><g><path style="fill:#1259AF;" d="M235,79.4h6.1l-0.9,8.9l7.4-5l3,5.5l-7.9,3.5l7.9,3.5l-3,5.5l-7.4-5l0.9,8.9H235l0.9-8.9l-7.4,5l-3-5.5l7.9-3.5l-7.9-3.5l3-5.5l7.4,5L235,79.4z"/><path style="fill:#1259AF;" d="M272.3,79.4h6.1l-0.9,8.9l7.4-5l3,5.5l-7.9,3.5l7.9,3.5l-3,5.5l-7.4-5l0.9,8.9h-6.1l0.9-8.9l-7.4,5l-3-5.5l7.9-3.5l-7.9-3.5l3-5.5l7.4,5L272.3,79.4z"/><path style="fill:#1259AF;" d="M309.6,79.4h6.1l-0.9,8.9l7.4-5l3,5.5l-7.9,3.5l7.9,3.5l-3,5.5l-7.4-5l0.9,8.9h-6.1l0.9-8.9l-7.4,5l-3-5.5l7.9-3.5l-7.9-3.5l3-5.5l7.4,5L309.6,79.4z"/></g></g></g></g><g><polygon style="fill:#1259AF;" points="47.2,186.4 47.2,214.1 54.8,214.1 54.8,190.4 70,179.7 86.5,190.5 86.5,214.1 94.1,214.1 94.1,186.4 69.9,170.5 "/><polygon style="fill:#1259AF;" points="76.1,214.1 76.1,193.7 63.9,193.7 63.9,214.1 54,220.5 66.4,220.5 "/></g></svg>

                    </div>

                    <div class="thank-you-message">

                        <h3>Password successfully changed</h3>

                        <p>
                            You have setup your password. You can use your email and your new password in the future, to login to the HOMI website, by using the link below.
                        </p>

                        <a href="<?php echo wp_login_url(); ?>">
                            Login Page
                        </a>

                    </div>

                </div>

            </div>

        <?php endif; ?>

        <div class="homi-request-message margin-top-30">

            <div class="flex flex-center">

                <div class="side-vector">

                    <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><path style="fill:#1259AF;" d="M462.2,113.3c13.6,0,24.6,11,24.6,24.6v322.3H25.2V137.9c0-13.6,11-24.6,24.6-24.6L462.2,113.3z"/><path style="fill:#1259AF;" d="M119.1,113.3H49.8c-13.6,0-24.6,11-24.6,24.6v322.3h69.3V137.9C94.5,124.3,105.5,113.3,119.1,113.3L119.1,113.3z"/><path style="fill:#3C87D0;" d="M82.4,113.3h347.2v262H82.4V113.3z"/><path style="fill:#DFF6FD;" d="M455.8,148.3v261.5c0,2.2-1.8,4-4,4H60.2c-2.2,0-4-1.8-4-4V148.3c0-2.2,1.8-4,4-4h391.6C454,144.3,455.8,146.1,455.8,148.3L455.8,148.3z"/><path style="fill:#C8EFFE;" d="M94.5,144.3H60.2c-2.2,0-4,1.8-4,4v261.5c0,2.2,1.8,4,4,4h34.3V144.3z"/><g><path style="fill:#0854A0;" d="M484.2,483.6H27.8C12.5,483.6,0,471.1,0,455.8v-6.5c0-2.5,2-4.6,4.6-4.6h502.9c2.5,0,4.6,2,4.6,4.6v6.5C512,471.1,499.6,483.6,484.2,483.6z"/><path style="fill:#0854A0;" d="M90.3,455.8v-6.5c0-2.5,2-4.6,4.6-4.6H4.6c-2.5,0-4.6,2-4.6,4.6v6.5c0,15.4,12.5,27.8,27.8,27.8h90.3C102.8,483.6,90.3,471.1,90.3,455.8z"/><path style="fill:#99E6FC;" d="M82.4,144.3h347.2v269.5H82.4V144.3z"/><path style="fill:#DFF6FD;" d="M408.9,413.8V98.7c0-7.2-5.9-13.1-13.1-13.1H116.2c-7.2,0-13.1,5.9-13.1,13.1v315.1L408.9,413.8L408.9,413.8z"/><path style="fill:#C8EFFE;" d="M203.3,170.2h17.9l12.3,12.3c6,6,14,9.3,22.5,9.3s16.5-3.3,22.5-9.3l12.3-12.3h17.9c28.3,0,51.3-23,51.3-51.3V85.6H152.1v33.3C152.1,147.2,175.1,170.2,203.3,170.2L203.3,170.2z"/><circle style="fill:#C8EFFE;" cx="190.5" cy="244.9" r="49.2"/><g><path style="fill:#C8EFFE;" d="M367.1,252.7h-92.2c-4.3,0-7.7-3.5-7.7-7.7s3.5-7.7,7.7-7.7h92.2c4.3,0,7.7,3.5,7.7,7.7S371.4,252.7,367.1,252.7z"/></g><g><path style="fill:#C8EFFE;" d="M172.7,347.9h-12c-4.3,0-7.7-3.5-7.7-7.7s3.5-7.7,7.7-7.7h12c4.3,0,7.7,3.5,7.7,7.7S177,347.9,172.7,347.9z"/></g><g><path style="fill:#C8EFFE;" d="M352.3,347.9h-12c-4.3,0-7.7-3.5-7.7-7.7s3.5-7.7,7.7-7.7h12c4.3,0,7.7,3.5,7.7,7.7S356.6,347.9,352.3,347.9z"/></g><g><path style="fill:#C8EFFE;" d="M311.1,347.9H200.5c-4.3,0-7.7-3.5-7.7-7.7s3.5-7.7,7.7-7.7h110.6c4.3,0,7.7,3.5,7.7,7.7S315.4,347.9,311.1,347.9z"/></g></g><path style="fill:#C8EFFE;" d="M367.1,413.8v-32.6c0-3.3-2.7-5.9-5.9-5.9H150.8c-3.3,0-5.9,2.7-5.9,5.9v32.6H367.1z"/></g><g><polygon style="fill:#1259AF;" points="188.9,84.9 188.9,173.8 213.3,173.8 213.3,97.6 262.2,63.6 314.9,98.1 314.9,173.8 339.3,173.8 339.3,84.9 261.7,34.1 "/><polygon style="fill:#1259AF;" points="281.7,173.8 281.7,108.3 242.6,108.3 242.6,173.8 210.7,194.4 250.5,194.4 "/></g></svg>

                </div>

                <div class="thank-you-message">

                    <h3>Useful Resources</h3>

                    <p>
                       The HOMI blog is constantly updated with articles, tips and case studies that will help you sell your property faster.
                    </p>

                    <a href="<?php echo site_url('blog'); ?>">
                        Visit our Blog
                    </a>

                </div>

            </div>

        </div>

    </div>

    <?php if ( get_post_type( $request_id ) !== Homi_Addons_Interest_Request::POST_TYPE_NAME ): ?>

    <div class="col l5 s12">

        <div class="card pricing-col seller-col">

            <div class="price-text">
                Engagement fee of €100 – That’s all
            </div>

            <div class="pricing-desc">
                This small fee shows us that you are just as committed as we are to sell your property.
            </div>

            <div class="included">

                <div class="included-label">
                    What’s included
                </div>

                <ul class="pricing-list">
                    <li>
                        Professional photos
                    </li>
                    <li>
                        Floorplan
                    </li>
                    <li>
                        360° virtual tour
                    </li>
                    <li>
                        A walk-through video of the property
                    </li>
                    <li>
                        Marketing on domestic and international listing portals
                    </li>
                    <li>
                        Viewings on your schedule
                    </li>
                    <li>
                        Negotiation support
                    </li>
                    <li>
                        View and accept offers via HOMI Platform
                    </li>
                    <li>
                        Documentation support
                    </li>

                </ul>

            </div>

            <div class="additional-pricing-info">

                <div class="included-label">
                    Optional Services:
                </div>

                <ul class="pricing-list">
                    <li>
                        Accompanied viewings - <span class="underlined">€500</span>
                        if you don’t have the time to conduct viewings yourself or need a helping hand

                    </li>
                    <li>
                        3D CAD floorplan – <span class="underlined">€500</span>
                        to make your listing stand out, attract additional interest and impress potential buyers

                    </li>
                </ul>

            </div>

            <a href="https://homi.com.gr/property-valuation" class="homi-btn blue-btn price-link">
                Book a free valuation now
            </a>

        </div>

    </div>

    <?php endif; ?>

</section>

<?php

get_footer();
