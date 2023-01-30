<?php

/**
 * Template part for displaying single posts.
 */

?>

<main id="main" class="site-main blog-main">

    <div class="blog-container">

        <div class="blog-main-container">

            <article class="article-container">

                <?php the_post(); ?>

                <div class="article-header">

                    <!-- Yoast SEO Breadcrumbs implementation -->
                    <?php if (function_exists('yoast_breadcrumb')) yoast_breadcrumb('<div id="breadcrumbs">', '</div>'); ?>

                    <h1 class="article-title"> <?php the_title(); ?> </h1>

                    <div class="article-meta">

                        <img class="article-author-image" src="/test-blog/wp-content/uploads/RM.jpg" />

                        <span class="article-meta-content">

                            <div class="article-author"> <?php the_author(); ?> </div>

                            <div class="article-meta-more">

                                <span class="article-date">تاریخ انتشار: <?php the_date(); ?> </span>

                                <span class="article-study-time"><?php echo do_shortcode('[rt_reading_time label="زمان تقریبی مطالعه:" postfix="دقیقه" postfix_singular="دقیقه"]'); ?></span>

                            </div>

                        </span>

                    </div>

                    <div class="article-thumbnail"> <?php the_post_thumbnail(); ?> </div>

                </div>

                <div class="article-content"> <?php the_content(); ?> </div>

            </article>

        </div> <!-- .blog-main-container -->

        <aside class="blog-sidebar-container">

            <div class="blog-sidebar-section">

                <?php $args = array('posts_per_page' => 5, 'post__not_in' => array(get_the_ID())); ?>

                <?php get_sidebar_newest_articles($args); ?>

            </div>

        </aside> <!-- .blog-sidebar-container -->

    </div> <!-- .blog-container -->

</main> <!-- .blog-main -->