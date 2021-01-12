<?php

get_header();

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$wp_query = new WP_Query( array(
    'posts_per_page'    => 5,
    'paged'             => $paged
));

$sticky_sidebar = houzez_option('sticky_sidebar');
$blogController = new BlogController();

?>

    <section id="blogPage" class="section-detail-content">

        <?php $blogController->get_blog_header(); ?>

        <div class="container">

            <div class="row">

                <div class="col s12">

                    <h1 class="blog-title">
                        Buying
                    </h1>

                    <div class="homi-articles-wrapper flex full-width margin-top-30">

                        <?php

                            $articles = $blogController->get_posts_by_category('buying');

                            foreach( $articles as $article ){


                                $blogController->display_article($article);

                            }

                        ?>

                    </div>

                    <div class="blog-button-wrapper center">

                        <a href="<?php echo home_url('blog/category/buying'); ?>" class="btn-primary">
                            Read More
                        </a>

                    </div>

                </div>

                <div class="col s12">

                    <h1 class="blog-title margin-top-50">
                        Selling
                    </h1>

                    <div class="homi-articles-wrapper flex full-width margin-top-30">

                        <?php

                            $articles = $blogController->get_posts_by_category('selling');

                            foreach( $articles as $article ){


                                $blogController->display_article($article);

                            }

                        ?>

                    </div>

                    <div class="blog-button-wrapper center">

                        <a href="<?php echo home_url('blog/category/selling'); ?>" class="btn-primary">
                            Read More
                        </a>

                    </div>


                </div>

                <div class="col s12">

                    <h1 class="blog-title margin-top-50">
                        Renting
                    </h1>

                    <div class="homi-articles-wrapper flex full-width margin-top-30">

                        <?php

                            $articles = $blogController->get_posts_by_category('rent');

                            foreach( $articles as $article ){


                                $blogController->display_article($article);

                            }

                        ?>

                    </div>

                    <div class="blog-button-wrapper center">

                        <a href="<?php echo home_url('blog/category/rent'); ?>" class="btn-primary">
                            Read More
                        </a>

                    </div>

                </div>

                <?php //houzez_pagination( $wp_query->max_num_pages ); ?>

            </div>

        </div>

    </section>

<?php

get_footer();
