<?php

/**
 * Template part for displaying single posts.
 */

?>

<main id="main" class="site-main blog-main">

    <div class="blog-container">

        <div class="blog-main-container">

            <article class="-container">

                <?php the_post(); ?>

                <div class="article-header">

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

                <div class="article-categories">

                    <span>دسته‌بندی‌ها: </span>

                    <?php $categories = get_the_category(); ?>
                    <?php foreach ($categories as $category) : ?>
                        <a class="article-category-item" href="<?php echo get_category_link($category->term_id); ?>"> <?php echo $category->name; ?> </a>
                    <?php endforeach; ?>
                </div>

            </article>

        </div> <!-- .blog-main-container -->

        <aside class="blog-sidebar-container">

            <h2 class="sidebar-title">آخرین مقالات</h2>

            <div class="sidebar-content">

                <?php query_posts(array('posts_per_page' => 5, 'post__not_in' => array(get_the_ID()))); ?>

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