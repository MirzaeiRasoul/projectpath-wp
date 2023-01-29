<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_custom_style('blog');

get_header(); ?>

<h1 class="search-title">
	<?php echo $wp_query->found_posts; ?>
	<?php _e('Search Results Found For', 'locale'); ?>: "
	<?php the_search_query(); ?>"
</h1>

<?php get_footer(); ?>