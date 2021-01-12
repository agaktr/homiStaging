<?php
get_header();

$current_page = get_queried_object();
?>
<div id="page-<?php the_ID(); ?>" class="row e-book-page-template">

    <div class="flex full-width">

            <div class="col l9 s12">

                <div class="ebook-page-content-wrapper">

                    <h1>
                        <?php the_title(); ?>
                    </h1>

                    <div class="ebook-page-content">

                        <?php echo apply_filters('the_content', $current_page->post_content); ?>

                    </div>

                </div>

            </div>

            <div class="col l3 s12">

                <div class="ebook-cover">

                    <?php echo get_the_post_thumbnail( get_the_ID(), 'original'); ?>

                </div>

            </div>

    </div>

</div>



<?php
get_footer();
