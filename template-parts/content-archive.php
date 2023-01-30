<?php

/**
 * Template part for displaying archive posts.
 */

?>

<main id="main" class="site-main blog-main">

    <div class="blog-container">

        <div class="blog-main-container">

            <div class="blog-main-section">

                <h1 class="blog-section-title"> همه مقالات </h1>

                <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1; ?>

                <?php $args = array('post_type' => 'post', 'posts_per_page' => 2, 'paged' => $paged); ?>

                <?php get_main_articles($args, true) ?>

            </div>

        </div> <!-- .blog-main-container -->

        <aside class="blog-sidebar-container">

            <?php get_sidebar(); ?>

        </aside> <!-- .blog-sidebar-container -->

    </div> <!-- .blog-container -->

</main> <!-- .blog-main -->