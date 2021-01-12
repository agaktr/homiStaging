<?php

get_header();

$current_page = get_queried_object();
?>


<section id="homiPolicyPage" class="row homi-row">

    <div class="container">

        <div class="col s12">

            <div class="card policy-content">

                <?php echo apply_filters('the_content', $current_page->post_content); ?>

            </div>

        </div>

    </div>

</section>

<?php
get_footer();
