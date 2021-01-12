<?php


class BlogController{

    public function custom_post_template( $single_template ){

        global $post;

        if ( $post->post_type === 'post' ) {

            $single_template = plugin_dir_path( dirname( __DIR__ ) ) . "public/templates/blog/article.php";

        }

        return $single_template;

    }


    public function custom_category_template( $template ){

        $template =  plugin_dir_path( dirname( __DIR__ ) ) . 'public/templates/blog/category.php';

        return $template;


    }


    public function custom_tag_template( $template ){

        $template =  plugin_dir_path( dirname( __DIR__ ) ) . 'public/templates/blog/tag.php';

        return $template;


    }


    public function get_blog_header(){

        ?>

        <div class="blog-header margin-bottom-50">

            <div class="container">

                <div class="mobile-blog-trigger">
                    Blog <i class="fas fa-chevron-down"></i>
                </div>

                <ul class="desktop-blog-menu">
                    <li class="blog-label">
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('blog/category/buying'); ?>">
                            Buying
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('blog/category/selling'); ?>">
                            Selling
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('blog/category/rent'); ?>">
                            Renting
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('blog/category/landlord'); ?>">
                            Landlord
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('blog/category/other'); ?>">
                            Other
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('blog/category/guides'); ?>">
                            Guides
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo home_url('blog/category/tips-advice'); ?>">
                            Tips and Tricks
                        </a>
                    </li>
                </ul>

            </div>

        </div>

        <?php

    }

    public function get_posts_by_category( $category_slug, $number = 3 ){

        $ids = array();

        global $post;
        $args = array( 'numberposts' => $number, 'category_name' => $category_slug );
        $posts = get_posts( $args );
        foreach( $posts as $post ){

            setup_postdata($post);

            $ids[] = get_the_ID();

        }

        return $ids;

    }


    public function display_article( $article_id ){


        if( !wp_is_mobile() ):

        ?>

        <div class="col l4 s12">

            <div class="homi-article-item">

                <a href="<?php echo get_the_permalink( $article_id ); ?>">

                    <div class="article-image">

                        <?php echo get_the_post_thumbnail( $article_id, 'medium_large'); ?>

                    </div>

                    <div class="article-content">

                        <div class="article-meta">

                            <div class="date">

                                <i class="fa fa-calendar"></i>
                                <?php echo get_the_date('j F Y', $article_id ); ?>

                            </div>

                            <div class="category">

                                <i class="fa fa-bookmark-o"></i>
                                <?php

                                    $categories =  get_the_category( $article_id );
                                    echo $categories[0]->name;

                                ?>

                            </div>

                        </div>

                        <h3>
                            <?php echo get_the_title( $article_id ); ?>
                        </h3>

                        <?php

                            $post_author_id = get_post_field( 'post_author', $article_id );
                            $article_author = get_user_by('ID', $post_author_id );
                        ?>

                        <div class="author">

                            <?php echo get_avatar( $article_author->ID ); ?>

                            <div class="author-name author-name display-inline-block">

                                <?php echo $article_author->first_name . ' ' . $article_author->last_name; ?>

                            </div>


                        </div>

                    </div>

                </a>

            </div>

        </div>

        <?php

        else :

                ?>

            <div class="col s12">

                <div class="homi-article-item mobile-item">

                    <a href="<?php echo get_the_permalink( $article_id ); ?>" class="flex flex-center">

                        <div class="article-content">

                            <h3>
                                <?php echo get_the_title( $article_id ); ?>
                            </h3>

                            <div class="article-meta">

                                <div class="date">

                                    <i class="fa fa-calendar"></i>
                                    <?php echo get_the_date('j F Y', $article_id ); ?>

                                </div>

                                <div class="category">

                                    <i class="fa fa-bookmark-o"></i>
                                    <?php

                                    $categories =  get_the_category( $article_id );
                                    echo $categories[0]->name;

                                    ?>

                                </div>

                            </div>

                        </div>

                        <div class="article-image">

                            <?php echo get_the_post_thumbnail( $article_id, 'thumbnail'); ?>

                        </div>

                    </a>

                </div>

            </div>

                <?php

        endif;

    }


    public function get_reading_time( $post_id ) {

        $content        = get_post_field( 'post_content', $post_id );
        $excerpt        = get_post_field( 'post_excerpt', $post_id );
        $word_count     = count( explode( ' ', strip_tags( $content ) ) ) + count( explode( ' ', strip_tags( $excerpt ) ) );
        $readingtime    = ceil($word_count / 200);


        if ($readingtime == 1) {
            $timer = " minute";
        }
        else {
            $timer = " minutes";
        }

        return $readingtime . $timer;
    }

}
