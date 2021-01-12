<?php
/**
 * The Template for displaying all single posts
 * @since Houzez 1.0
 */

get_header();
$sticky_sidebar = houzez_option('sticky_sidebar');
$blog_author_box = houzez_option('blog_author_box');
$blogController             = new BlogController();
?>

    <section class="section-detail-content homi-single-article">

        <?php $blogController->get_blog_header(); ?>

        <div class="row">

           <div class="container">

               <div class="col s12 container-contentbar no-padding">

                   <div class="article-main">

                       <?php
                       // Start the Loop.
                       while ( have_posts() ) : the_post(); ?>

                           <article class="blog-article">

                               <div class="page-title">
                                   <h1><?php the_title(); ?></h1>
                                   <?php get_template_part( 'single-post/post-meta' ); ?>

                                   <?php if( !empty( get_the_excerpt() ) ): ?>

                                       <div class="article-excerpt">
                                           <?php echo get_the_excerpt(); ?>
                                       </div>

                                    <?php endif; ?>

                               </div>

                               <?php echo get_the_post_thumbnail( get_the_ID(), ( !wp_is_mobile() ? 'full' : 'medium_large') ); ?>

                               <div class="article-detail">
                                   <?php the_content(); ?>

                                   <?php
                                   $args = array(
                                       'before'           => '<div class="pagination-main"><ul class="pagination">' . esc_html__('Pages:','houzez'),
                                       'after'            => '</ul></div>',
                                       'link_before'      => '<span>',
                                       'link_after'       => '</span>',
                                       'next_or_number'   => 'next',
                                       'nextpagelink'     => '<span aria-hidden="true"><i class="fa fa-angle-right"></i></span>',
                                       'previouspagelink' => '<span aria-hidden="true"><i class="fa fa-angle-left"></i></span>',
                                       'pagelink'         => '%',
                                       'echo'             => 1
                                   );
                                   wp_link_pages( $args );
                                   ?>
                               </div>
                               <?php get_template_part( 'single-post/tags' ); ?>
                           </article>

                           <?php get_template_part( 'single-post/post-nav' ); ?>

                           <?php
                           if( $blog_author_box != 0 ) {
                               get_template_part('single-post/author');
                           }?>

                           <?php
                           global $post, $related_posts;
                           $categories = get_the_category( $post->ID );
                           if ($categories):
                               $cat_ids = array();
                               foreach($categories as $individual_cat) $cat_ids[] = $individual_cat->term_id;
                               $args=array(
                                   'category__in' => $cat_ids,
                                   'post__not_in' => array( $post->ID ),
                                   'posts_per_page' => '3'
                               );
                               $related_posts = get_posts( $args );
                           endif;

                           if( $related_posts ) {
                               ?>
                               <div class="blog-section">
                                   <h3 class="blog-section-title"><?php esc_html_e( 'More from HOMI', 'houzez' ); ?></h3>

                                   <div class="col s12">

                                       <div class="homi-articles-wrapper flex full-width">
                                           <?php foreach( $related_posts as $post ): setup_postdata( $post ); ?>

                                               <?php $blogController->display_article( get_the_ID() ); ?>

                                           <?php endforeach; ?>
                                       </div>

                                   </div>

                               </div>
                           <?php } ?>
                           <?php wp_reset_postdata(); ?>

                            <div class="col s12">

                                <?php

                                   // If comments are open or we have at least one comment, load up the comment template.
                                   if ( comments_open() || get_comments_number() ) {
                                       comments_template();
                                   }

                               ?>

                            </div>
                      <?php
                       endwhile;
                       ?>

                   </div>
               </div>

           </div>

        </div>

    </section>

<?php
get_footer();
