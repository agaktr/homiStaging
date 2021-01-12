<?php
get_header();

$uploadController = new PropertyUploadController();
$uploadController->access_controller( PropertyUploadController::NEW_PAGE );

?>

<div class="upload-form-new margin-top-50 margin-bottom-50">

    <form method="POST" enctype="multipart/form-data">

        <input type="hidden" name="property_upload_form" value="property_upload_form">
        <input type="hidden" name="<?php echo Homi_Addons_Upload_Request::META_FIELDS_SLUG['status']; ?>" value="draft">

        <?php $uploadController->display_form( array(
            'form_type'         => 'new_upload_request'
        ) ); ?>


    </form>

</div>



<?php
get_footer();
