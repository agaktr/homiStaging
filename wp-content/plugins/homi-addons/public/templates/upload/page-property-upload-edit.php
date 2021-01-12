<?php
get_header();

$uploadController = new PropertyUploadController();
$uploadController->access_controller( PropertyUploadController::EDIT_PAGE );

$post_id = get_query_var('request');

$uploadRequest = new UploadRequest( $post_id );

?>

    <div class="upload-form-new margin-top-50 margin-bottom-50">

        <div class="col s12 center">

            <div class="upload-form-logo">
                <?php echo wp_get_attachment_image(16986); ?>
            </div>

            <h1>
                Landlord upload property request form
            </h1>

        </div>

        <form method="POST" enctype="multipart/form-data">

            <input type="hidden" name="property_upload_form" value="property_upload_form">
            <input type="hidden" name="<?php echo Homi_Addons_Upload_Request::META_FIELDS_SLUG['status']; ?>" value="<?php echo $uploadRequest->status; ?>">
            <input type="hidden" name="request_id" value="<?php echo $post_id; ?>">
            <input type="hidden" name="user_id" value="<?php echo $uploadRequest->user_id; ?>">

            <?php $uploadController->display_form( array(
                    'form_type'         => 'edit_upload_request',
                    'upload_request'    => $uploadRequest
            ) ); ?>

        </form>

    </div>



<?php


get_footer();
