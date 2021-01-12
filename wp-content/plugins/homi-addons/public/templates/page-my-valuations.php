<?php
get_header();

//check access here
$myValuationsController = new myValuationsController();
$myValuationsController->accessController();

//get user valuation request here
$requestID  = ( $myValuationsController->pdfValuation ? $myValuationsController->pdfValuation : $myValuationsController->nonAbandonedRequest );
$request    = new ValuationRequest( $requestID );

?>

    <section id="myValuations" class="row homi-row padding-top-50">

        <div class="container">

            <div class="col s12">

                <h1>
                    My Valuations
                </h1>

                <p>
                    You can find below the valuations of your requests.
                </p>

                <div class="valuation-block display-inline-block full-width overflow-hidden bg-white margin-top-30">

                    <div class="flex full-width">

                        <div class="col l4 m4 s12 valuation-info-wrapper no-padding">

                            <h2>
                                <?php echo get_the_title( $request->ID ); ?>
                            </h2>

                            <div class="valuationPDFInfo flex full-width flex-center">

                                <div class="icon display-inline-block">

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="512" height="512"><g id="Calendar"><path d="M57,8H52V6a4,4,0,0,0-8,0V8H36V6a4,4,0,0,0-8,0V8H20V6a4,4,0,0,0-8,0V8H7a5,5,0,0,0-5,5V53a5,5,0,0,0,5,5H35a1,1,0,0,0,0-2H7a3.009,3.009,0,0,1-3-3V22H60V39a1,1,0,0,0,2,0V13A5,5,0,0,0,57,8ZM46,6a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0ZM30,6a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0ZM14,6a2,2,0,0,1,4,0v6a2,2,0,0,1-4,0ZM60,20H4V13a3.009,3.009,0,0,1,3-3h5v2a4,4,0,0,0,8,0V10h8v2a4,4,0,0,0,8,0V10h8v2a4,4,0,0,0,8,0V10h5a3.009,3.009,0,0,1,3,3Z"/><path d="M30,29a2,2,0,0,0-2-2H24a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V29h4v3Z"/><path d="M18,29a2,2,0,0,0-2-2H12a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V29h4v3Z"/><path d="M52,34a2,2,0,0,0,2-2V29a2,2,0,0,0-2-2H48a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2Zm-4-5h4v3H48Z"/><path d="M30,38a2,2,0,0,0-2-2H24a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V38h4v3Z"/><path d="M18,38a2,2,0,0,0-2-2H12a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2Zm-6,3V38h4v3Z"/><path d="M28,45H24a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2V47A2,2,0,0,0,28,45Zm-4,5V47h4v3Z"/><path d="M36,34h4a2,2,0,0,0,2-2V29a2,2,0,0,0-2-2H36a2,2,0,0,0-2,2v3A2,2,0,0,0,36,34Zm0-5h4v3H36Z"/><path d="M34,41a2,2,0,0,0,2,2,1,1,0,0,0,0-2V38h4a1,1,0,0,0,0-2H36a2,2,0,0,0-2,2Z"/><path d="M16,45H12a2,2,0,0,0-2,2v3a2,2,0,0,0,2,2h4a2,2,0,0,0,2-2V47A2,2,0,0,0,16,45Zm-4,5V47h4v3Z"/><path d="M49,36A13,13,0,1,0,62,49,13.015,13.015,0,0,0,49,36Zm0,24A11,11,0,1,1,60,49,11.013,11.013,0,0,1,49,60Z"/><path d="M54.778,44.808,47,52.586,43.465,49.05a1,1,0,0,0-1.414,1.414l4.242,4.243a1,1,0,0,0,1.414,0l8.485-8.485a1,1,0,0,0-1.414-1.414Z"/></g></svg>

                                </div>

                                <div class="info display-inline-block">

                                    <div class="info-label">
                                        Request Submitted:
                                    </div>

                                    <div class="info-value">

                                        <?php echo get_the_date( 'd/m/Y',  $request->ID ); ?>

                                    </div>

                                </div>

                            </div>

                            <div class="valuationPDFInfo flex full-width flex-center">

                                <div class="icon display-inline-block">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 128 128"><g><path d="M70,107.251h-2.75a1.75,1.75,0,0,0,0,3.5H70a1.75,1.75,0,0,0,0-3.5Z"/><path d="M127.42,68.362,74.1,20.437,85.011,10.63a1.751,1.751,0,0,0,.155-2.445L78.635.609a1.745,1.745,0,0,0-1.214-.6A1.708,1.708,0,0,0,76.14.45L64,11.361,51.86.45A1.721,1.721,0,0,0,50.579.006a1.747,1.747,0,0,0-1.214.6L42.833,8.185a1.752,1.752,0,0,0,.156,2.445L53.9,20.438.58,68.362a1.753,1.753,0,0,0-.58,1.3V83.109a1.75,1.75,0,0,0,2.92,1.3l8.892-7.992v49.833a1.75,1.75,0,0,0,1.75,1.75H114.437a1.749,1.749,0,0,0,1.75-1.75V76.419l8.893,7.992a1.75,1.75,0,0,0,2.92-1.3V69.664A1.753,1.753,0,0,0,127.42,68.362ZM27.577,62.25l6.119-5.5H94.3l6.119,5.5Zm62.832-9H37.591L64,29.514ZM46.6,9.173l4.245-4.925,10.533,9.467-4.863,4.37ZM3.5,70.444l73.65-66.2L81.4,9.173,3.5,79.184Zm11.812,2.829,8.371-7.523h1.754V124.5H15.312ZM28.937,65.75H99.062V124.5H85.373V99.75A16.769,16.769,0,0,0,68.623,83H59.377a16.77,16.77,0,0,0-16.75,16.75V124.5H28.937ZM53.127,124.5V99.75a6.257,6.257,0,0,1,6.25-6.25h9.246a6.257,6.257,0,0,1,6.25,6.25V124.5Zm25.246,0V99.75A9.761,9.761,0,0,0,68.623,90H59.377a9.761,9.761,0,0,0-9.75,9.75V124.5h-3.5V99.75A13.265,13.265,0,0,1,59.377,86.5h9.246a13.265,13.265,0,0,1,13.25,13.25V124.5Zm34.314,0H102.562V65.75h1.755l8.37,7.523ZM124.5,79.184,66.618,27.16l4.863-4.37L124.5,70.444Z"/></g></svg>

                                </div>

                                <div class="info display-inline-block">

                                    <div class="info-label">
                                        In regards to property:
                                    </div>

                                    <div class="info-value">

                                        <?php echo $request->property_address; ?>

                                    </div>

                                </div>

                            </div>

                            <div class="valuationPDFInfo flex full-width flex-center">

                                <div class="icon display-inline-block">

                                    <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><g><g><path d="m180.508 422.307h105v30h-105z"/><path d="m120.508 422.307h30v30h-30z"/></g><path d="m450.492 0h-388.984v512h275.716l113.269-125.154v-386.846m-29.944 30.234v335.823h-105.041v116.254l-224 .064v-452.141zm-18.803 365.823-56.239 62.264v-62.264z"/></g><g><path d="m380.337 179.637c0-52.289-42.541-94.83-94.83-94.83h-15v112.553h109.268c.001 0 .562-16.796.562-17.723zm-79.829-12.277v-50.802c24.623 5.855 43.852 25.795 48.664 50.802z"/><path d="m299.751 316.557c19.834-19.822 30.757-46.191 30.757-74.25v-15h-90v-90h-15c-28.06 0-54.429 10.923-74.244 30.75-19.833 19.822-30.756 46.191-30.756 74.25 0 57.897 47.103 105 105 105 28.058 0 54.428-10.923 74.243-30.75zm-149.243-74.25c0-20.042 7.8-38.875 21.97-53.037 10.554-10.561 23.711-17.584 38.03-20.473v88.51h88.51c-2.89 14.319-9.914 27.477-20.48 38.037-14.155 14.163-32.988 21.963-53.03 21.963-41.355 0-75-33.645-75-75z"/></g></g></svg>

                                </div>

                                <div class="info display-inline-block">

                                    <div class="info-label">
                                        Valuation Completed:
                                    </div>

                                    <div class="info-value">

                                        <?php echo ( !empty( $request->valuation_date ) ?  date('d/m/Y', strtotime( $request->valuation_date ) ) : 'Not available yet'); ?>

                                    </div>

                                </div>

                            </div>

                            <div class="valuationPDFInfo flex full-width flex-center">

                                <div class="icon display-inline-block">

                                    <svg  id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="432.763px" height="432.762px" viewBox="0 0 432.763 432.762" xml:space="preserve"><g><path d="M374.363,342.635c-25.563,26.889-58.292,41.7-92.16,41.7c-55.509,0-103.572-38.981-126.192-95.329h154.186c13.37,0,24.21-10.84,24.21-24.21s-10.84-24.21-24.21-24.21H143.708c-0.952-7.915-1.472-15.989-1.472-24.211c0-9.274,0.653-18.365,1.871-27.237h166.09c13.37,0,24.21-10.84,24.21-24.21s-10.84-24.211-24.21-24.211H157.299c23.105-54.698,70.4-92.302,124.904-92.302c33.868,0,66.597,14.812,92.16,41.698c9.203,9.685,24.518,10.083,34.224,0.872c9.693-9.215,10.077-24.539,0.875-34.229C374.671,20.156,329.478,0,282.209,0c-80.712,0-149.705,58.62-176.478,140.724H40.854c-13.37,0-24.21,10.84-24.21,24.21s10.84,24.21,24.21,24.21h54.503c-0.981,8.934-1.542,18.007-1.542,27.237c0,8.192,0.428,16.255,1.211,24.211H40.854c-13.37,0-24.21,10.84-24.21,24.21s10.84,24.21,24.21,24.21h63.916c26.043,83.691,95.733,143.75,177.433,143.75c47.274,0,92.456-20.161,127.247-56.755c9.208-9.693,8.83-25.015-0.869-34.229C398.894,332.563,383.566,332.948,374.363,342.635z"/></g></svg>

                                </div>

                                <div class="info display-inline-block">

                                    <div class="info-label">
                                        Our Valuation:
                                    </div>

                                    <div class="info-value">

                                        <?php echo ( !empty(  $request->price ) ?  $request->price : 'Not available yet'); ?>

                                    </div>

                                </div>

                            </div>


                            <div class="agent">

                                <div class="flex flex-center">

                                    <?php echo wp_get_attachment_image( 20879 ); ?>

                                    <div class="agent-info display-inline-block">

                                        <h4>
                                            Alexandros Saisanas
                                        </h4>

                                        <div class="agent-role">
                                            Local Agent | Athens
                                        </div>

                                    </div>

                                </div>


                                <div class="agent-contact">

                                    <a href="tel:2152151962">
                                        215 21 51 962
                                    </a>

                                    <a href="mailto:alexandros@homi.com.gr">
                                        alexandros@homi.com.gr
                                    </a>

                                </div>

                            </div>

                            <?php if( $request->pdf ): ?>

                                <a href="<?php echo wp_get_attachment_url( $request->pdf ); ?>" class="download-btn" download>
                                    Download Free Valuation Report
                                </a>

                            <?php else: ?>

                                <div class="not-completed-report">
                                    Your free valuation report has not been completed yet.
                                </div>

                            <?php endif; ?>

                        </div>

                        <div class="col l8 m4 s12 no-padding-left no-padding-right hide-on-small-and-down">

                            <div class="valuationPDF valuationPDF <?php echo ( empty( $request->pdf ) ?' flex flex-center flex-dir-col flex-just-center' : '' ); ?>">

                                <?php if( $request->pdf ): ?>

                                    <iframe src="<?php echo wp_get_attachment_url( $request->pdf ); ?>" width="100%" height="500"></iframe>

                                <?php else: ?>

                                    <h3 class="center">
                                        Your free valuation report will appear here when it's completed.
                                        We will notify you via email when your report is available.
                                    </h3>

                                <?php endif; ?>
                                <div class="clearfix"></div>

                            </div>

                            <div class="clearfix"></div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

<?php

get_footer();
