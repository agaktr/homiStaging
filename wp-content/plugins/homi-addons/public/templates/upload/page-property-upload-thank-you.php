<?php
get_header();

?>

<div class="homi-upload-thank-you row no-margin-bottom center">

    <div class="container">

        <div class="col s12">

            <div id="thankYouBox" class="card display-inline-block margin-top-50 margin-bottom-30">

                <div class="icon">
                    <?php echo wp_get_attachment_image( 22315, 'thumbnail' ); ?>
                </div>

                <h1>
                    Thank you for uploading your property
                </h1>

                <p>
                    Your property has been submitted successfully.
                    <br>You can view your uploaded property by clicking on the button below.
                </p>

                <a href="<?php echo home_url( PropertyUploadController::PROPERTY_UPLOAD_PAGE_SLUG . '/' . PropertyUploadController::EDIT_PAGE . '/request/'. $_GET['request'] ); ?>" class="homi-btn">
                    Edit Property
                </a>

            </div>


        </div>

    </div>

</div>

<?php

get_footer();
