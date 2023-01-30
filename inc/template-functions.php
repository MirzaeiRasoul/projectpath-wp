<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function get_hero_gallery()
{ ?>
    <?php $ind = 1; ?>

    <?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '4')); ?>

    <?php while ($query->have_posts()) : $query->the_post(); ?>

        <a class="gallery-post-<?php echo $ind; ?>" href="<?php the_permalink(); ?>">

            <div class="gallery-post-container" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

                <h2 class="gallery-post-content"> <?php the_title(); ?> </h2>

            </div>

        </a>

        <?php $ind++; ?>

    <?php endwhile; ?>

<?php
}

function get_main_articles($args, $has_pagination = false)
{
    $query = new WP_Query($args); ?>

    <?php if ($query->have_posts()) : ?>

        <?php while ($query->have_posts()) : $query->the_post(); ?>

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

        <?php if ($has_pagination) get_pagination($query->max_num_pages); ?>

    <?php else : ?>

        <p> مقاله‌ مرتبط یافت نشد. </p>

        <?php if (is_search()) get_search_form(); ?>

    <?php endif; ?>

<?php
}

function get_sidebar_newest_articles($args)
{ ?>
    <h2 class="sidebar-title">آخرین مقالات</h2>

    <div class="sidebar-content">

        <?php $query = new WP_Query($args); ?>

        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <a class="sidebar-item" href="<?php the_permalink(); ?>">

                <div class="sidebar-item-thumbnail"> <?php the_post_thumbnail(); ?> </div>

                <div class="sidebar-item-content">

                    <h3 class="sidebar-item-title"> <?php the_title(); ?> </h3>

                    <div class="sidebar-item-meta">

                        <span class="sidebar-item-date"> <?php the_date(); ?> </span>

                        <span class="sidebar-item-views"> <?php if (function_exists('the_views')) the_views(); ?> </span>

                    </div>

                </div>

            </a>

        <?php endwhile; ?>

    </div>

<?php
}

function get_sidebar_most_viewed_articles($post_count = 5)
{ ?>
    <h2 class="sidebar-title">پربازدیدترین</h2>

    <div class="sidebar-content">

        <?php if (function_exists('get_most_viewed')) get_most_viewed('post', $post_count); ?>

    </div>

<?php
}

// function get_sidebar_editors_suggestions_articles($args)
// {
// }

function get_pagination($max_num_pages)
{ ?>
    <div class="blog-pagination">

        <?php
        echo paginate_links(array(
            'total'     => $max_num_pages,
            'current'   => max(1, get_query_var('paged')),
            'prev_text' => '< قبلی',
            'next_text' => 'بعدی >',
            // 'prev_text'  => __('«'),
            // 'next_text'  => __('»'),
        ));
        wp_reset_postdata();
        ?>

    </div>

<?php
}
