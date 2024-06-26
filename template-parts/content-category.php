<?php

/**
 * Template part for displaying a category page.
 */

?>

<main id="main" class="site-main blog-main">

    <div class="blog-container">

        <div class="blog-main-container">

            <div class="blog-main-section">

                <h1 class="blog-section-title"> مقالات <?php single_cat_title(); ?> </h1>

                <?php $args = array('cat' => get_query_var('cat'), 'posts_per_page' => '10'); ?>

                <?php get_main_articles($args) ?>

            </div>

        </div> <!-- .blog-main-container -->

        <aside class="blog-sidebar-container">

            <div class="blog-sidebar-section">

                <?php $args = array('posts_per_page' => 5); ?>

                <?php get_sidebar_newest_articles($args); ?>

            </div>

        </aside> <!-- .blog-sidebar-container -->

    </div> <!-- .blog-container -->

</main> <!-- .blog-main -->