<?php

/**
 * Template part for displaying archive posts.
 */

?>

<main id="main" class="site-main blog-main">

    <div class="blog-container">

        <div class="blog-main-container">

            <h2 class="blog-section-title"> آرشیو مقالات </h2>

            <?php query_posts(array('cat' => get_query_var('cat'), 'posts_per_page' => '10')); ?>

            <?php while (have_posts()) : the_post(); ?>

                <article class="blog-article-container">

                    <a class="blog-article-item" href="<?php the_permalink(); ?>">

                        <div class="blog-article-content-wrap">

                            <h3 class="blog-article-title"> <?php the_title(); ?> </h3>

                            <div class="blog-article-content"> اپل امروز در تاریخ ۲۸ دی ماه ۱۴۰۱ از سری لپتاپ‌های مک بوک جدید که از آخرین نسل چیپ‌ست‌های طراحی‌شده توسط این شرکت بهره می‌برند رونمایی کرد. چیپ‌ست‌های ...</div>

                            <div class="blog-article-meta-content">

                                <span class="blog-article-author"> <?php the_author(); ?> </span>

                                <span class="blog-article-date"> <?php the_date(); ?> </span>

                            </div>

                        </div>

                        <div class="blog-article-image"> <?php the_post_thumbnail(); ?> </div>

                    </a>

                </article>

            <?php endwhile; ?>

        </div> <!-- .blog-main-container -->

        <aside class="blog-sidebar-container">

            <?php get_sidebar(); ?>

        </aside> <!-- .blog-sidebar-container -->

    </div> <!-- .blog-container -->

</main> <!-- .blog-main -->