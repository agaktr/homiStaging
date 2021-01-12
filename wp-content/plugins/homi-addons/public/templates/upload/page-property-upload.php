<?php
get_header();

$uploadRequestHomi = new Homi_Addons_Upload_Request();
$uploadController = new PropertyUploadController();
$uploadController->access_controller( PropertyUploadController::ARCHIVE_PAGE );

$requests = $uploadRequestHomi->get_requests_ids_by_user_args( wp_get_current_user()->ID );


?>

<div class="upload-requests-page margin-top-50 margin-bottom-50">

    <h1>
        Upload Requests
    </h1>

    <div class="upload-requests-items flex row col s12">

        <div class="col">

            <div id="newUploadRequestItem" class="upload-request-item card">

                <a href="<?php echo home_url( PropertyUploadController::PROPERTY_UPLOAD_PAGE_SLUG . '/' . PropertyUploadController::NEW_PAGE  ); ?>">

                    <div class="icon">
                        <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512 512" xml:space="preserve">
                        <g>
                            <circle style="fill:#0b4d9d;" cx="256" cy="256" r="236.17"/>
                            <path style="fill:#0b4d9d;" d="M256,512C114.853,512,0,397.167,0,256C0,114.853,114.853,0,256,0c141.167,0,256,114.853,256,256
                                C512,397.167,397.167,512,256,512z M256,39.659C136.705,39.659,39.659,136.705,39.659,256S136.705,472.341,256,472.341
                                S472.341,375.275,472.341,256C472.341,136.705,375.295,39.659,256,39.659z"/>
                        </g>
                            <g>
                                <path style="fill:#FFFFFF;" d="M256,373.193c-10.946,0-19.83-8.864-19.83-19.83V155.067c0-10.946,8.884-19.83,19.83-19.83
                                c10.946,0,19.83,8.884,19.83,19.83v198.296C275.83,364.329,266.946,373.193,256,373.193z"/>
                                <path style="fill:#FFFFFF;" d="M355.148,274.045H156.852c-10.946,0-19.83-8.884-19.83-19.83c0-10.946,8.884-19.83,19.83-19.83
                                h198.296c10.966,0,19.83,8.884,19.83,19.83C374.978,265.161,366.114,274.045,355.148,274.045z"/>
                            </g>
                        </svg>

                    </div>

                    <h3>
                        Create a new property upload request
                    </h3>

                </a>

            </div>

        </div>

        <?php foreach( $requests as $request ): $request_obj = new UploadRequest( $request ) ?>

            <div class="col">

                <div class="upload-request-item card relative">

                    <div class="status <?php echo $request_obj->status; ?> absolute top-0 right-0">
                        <?php echo $request_obj->status; ?>
                    </div>

                    <div class="icon">
                        <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 324 343" xml:space="preserve">
                            <g>
                                <polygon id="polygon1" style="fill:#1259AF;"  points="29.6,119 29.6,278 73.3,278 73.3,141.8 160.7,80.8 255,142.6 255,278 298.7,278 298.7,119 159.9,28.1"/>
                                <polygon id="polygon2" style="fill:#1259AF;" points="195.6,278 195.6,160.9 125.7,160.9 125.7,278 68.6,315 139.9,315 	"/>
                            </g>
                        </svg>
                    </div>

                    <h3>
                        #Request <?php echo $request; ?>
                    </h3>

                    <div class="last-modified">
                        Last modified: <?php echo $request_obj->last_modified; ?>
                    </div>

                    <div class="last-modified">
                        <i class="fa fa-map-marker"></i> <?php echo ( !empty( $request_obj->full_address )  ? $request_obj->full_address : 'N/A' ) ; ?>
                    </div>

                    <?php  if( current_user_can('administrator')) : ?>

                        <div class="last-modified">
                            <i class="fa fa-user"></i>  <?php echo $request_obj->user->first_name . ' ' . $request_obj->user->last_name ; ?>
                        </div>

                    <?php endif; ?>

                    <a href="<?php echo $request_obj->url; ?>">
                        Edit
                    </a>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</div>

<?php

get_footer();
