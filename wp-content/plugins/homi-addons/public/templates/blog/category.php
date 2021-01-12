<?php
get_header();

$category                   = get_queried_object();
$blogController             = new BlogController();


?>

<section id="blogPage" class="section-detail-content">

    <?php $blogController->get_blog_header(); ?>

    <div class="container">

        <div class="row">

            <div class="col s12">

                <h2 class="blog-title">
                    <?php echo $category->name; ?>
                </h2>

                <div class="homi-articles-wrapper flex full-width margin-top-30">

                    <?php

                        $articles = $blogController->get_posts_by_category( $category->slug, -1 );

                        foreach( $articles as $article ){


                            $blogController->display_article( $article );

                        }

                    ?>

                </div>

            </div>

            <?php //houzez_pagination( $wp_query->max_num_pages ); ?>

        </div>

    </div>

</section>

<?php

get_footer();
