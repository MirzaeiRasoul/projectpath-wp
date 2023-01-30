<?php

/**
 * Template part for displaying search page.
 */

?>

<main id="main" class="site-main blog-main">

    <div class="blog-container">

        <div class="blog-main-container">

            <div class="blog-main-section">

                <h1 class="blog-section-title"> نتایج جستجو برای '<?php the_search_query(); ?>' </h1>

                <span> <?php echo $wp_query->found_posts; ?> مقاله یافت شد.</span>

                <?php $args = array('post_type' => 'post', 'posts_per_page' => '10', 's' => get_search_query()); ?>

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