<?php

/**
 * Template part for displaying blog index page.
 */

?>

<main id="main" class="site-main blog-main">

    <div class="blog-gallery">

        <?php get_hero_gallery(); ?>

    </div> <!-- .blog-gallery -->

    <div class="blog-container">

        <div class="blog-main-container">

            <div class="blog-main-section">

                <h2 class="blog-section-title">تازه‌ترین مقالات</h2>

                <?php $args = array('post_type' => 'post', 'posts_per_page' => '10', 'offset' => '4'); ?>

                <?php get_main_articles($args) ?>

                <div class="blog-show-more">

                    <a href="/projectpath/blog/archive/">مشاهده همه مقالات</a>

                </div>

            </div>

        </div> <!-- .blog-main-container -->

        <aside class="blog-sidebar-container">

            <div class="blog-sidebar-section">

                <?php get_sidebar_most_viewed_articles(); ?>

            </div>

        </aside> <!-- .blog-sidebar-container -->

    </div> <!-- .blog-container -->

</main> <!-- .blog-main -->