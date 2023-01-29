<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/404.css" type="text/css" media="screen" /> -->
<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

function load_custom_css()
{
	echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/assets/css/404.css">';
}

add_action('wp_head', 'load_custom_css');

query_posts(array('post_type' => 'post', 'posts_per_page' => '4'));

get_header(); ?>

<div id="primary" <?php astra_primary_class(); ?>>

	<?php astra_primary_content_top(); ?>

	<main id="main" class="site-main blog-main">

		<div class="blog-gallery">

			<?php $ind = 1; ?>

			<?php while (have_posts()) : the_post(); ?>

				<a class="gallery-post-<?php echo $ind; ?>" href="<?php the_permalink(); ?>">

					<div class="gallery-post-container" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

						<h2 class="gallery-post-content"> <?php the_title(); ?> </h2>

					</div>

				</a>

				<?php $ind++; ?>

			<?php endwhile; ?>

		</div> <!-- .gallery -->

		<div class="blog-container">

			<div class="blog-main-container">

				<h2 class="blog-section-title">آخرین مقالات</h2>

				<?php query_posts(array('post_type' => 'post', 'posts_per_page' => '10', 'offset' => '0')); ?>

				<?php while (have_posts()) : the_post(); ?>

					<article class="blog-article-container">

						<a class="blog-article-item" href="<?php the_permalink(); ?>">

							<div class="blog-article-content-wrap">

								<h3 class="blog-article-title"> <?php the_title(); ?> </h3>

								<div class="blog-article-content"> اپل امروز در تاریخ ۲۸ دی ماه ۱۴۰۱ از سری لپتاپ‌های مک بوک جدید که از آخرین نسل چیپ‌ست‌های طراحی‌شده توسط این شرکت بهره می‌برند رونمایی کرد. چیپ‌ست‌های M2 Pro و M2 Max دارای یک CPU و GPU قدرتمندتر، تا ۹۶ گیگابایت ... </div>

							</div>

							<div class="blog-article-image"> <?php the_post_thumbnail(); ?> </div>

						</a>

					</article>

				<?php endwhile; ?>

			</div> <!-- .blog-main-container -->

			<aside class="blog-sidebar-container">

			</aside> <!-- .blog-sidebar-content -->

		</div> <!-- .blog-container -->

	</main> <!-- .site-main -->

	<?php astra_primary_content_bottom(); ?>

</div> <!-- #primary -->

<?php get_footer(); ?>