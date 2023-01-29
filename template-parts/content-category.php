<?php

/**
 * Template part for displaying a category page.
 */

?>

<main id="main" class="site-main blog-main">

    <div class="blog-container">

        <div class="blog-main-container">

            <h2 class="blog-section-title"> دسته‌بندی‌: <?php single_cat_title(); ?> </h2>

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

            <h2 class="sidebar-title">آخرین مقالات</h2>

            <div class="sidebar-content">

                <?php query_posts(array('posts_per_page' => 5)); ?>

                <?php while (have_posts()) : the_post(); ?>

                    <a class="sidebar-item" href="<?php the_permalink(); ?>">

                        <div class="sidebar-item-thumbnail"> <?php the_post_thumbnail(); ?> </div>

                        <div class="sidebar-item-content">

                            <h3 class="sidebar-item-title"> <?php the_title(); ?> </h3>

                            <div class="sidebar-item-meta">

                                <span class="sidebar-item-date"> <?php the_date(); ?> </span>

                                <span class="sidebar-item-views"> <?php the_views(); ?> </span>

                            </div>

                        </div>

                    </a>

                <?php endwhile; ?>

            </div>

        </aside> <!-- .blog-sidebar-container -->

    </div> <!-- .blog-container -->

</main> <!-- .blog-main -->