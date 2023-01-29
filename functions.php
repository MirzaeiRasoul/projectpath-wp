<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Load child theme main CSS file
 */
function load_child_main_style()
{
	wp_enqueue_style(
		'child-main-style',
		get_stylesheet_directory_uri() . '/assets/css/main.css',
		array(),
		wp_get_theme()->get('Version') // This only works if you have Version defined in the style header.
	);
}
add_action('wp_enqueue_scripts', 'load_child_main_style');

/**
 * Shortcode for get current persian year using Parsi Date plugin
 */
function current_persian_year_func()
{
	$pd = bn_parsidate::getInstance();
	$thisyear = $pd->persian_date('Y', current_time('timestamp'));
	return $thisyear;
}
add_shortcode('current_persian_year', 'current_persian_year_func');

/**
 * Remove pages from search results
 */
function remove_pages_from_search()
{
	global $wp_post_types;
	$wp_post_types['page']->exclude_from_search = true;
}
add_action('init', 'remove_pages_from_search');

/**
 * Change search page slug.
 */
function wpb_change_search_url()
{
	if (is_search() && !empty($_GET['s'])) {
		wp_redirect(home_url("/search/") . urlencode(get_query_var('s')));
		exit();
	}
}
add_action('template_redirect', 'wpb_change_search_url');

/**
 * Include manager files
 */
require_once get_stylesheet_directory() . '/inc/custom-content-manager.php';
require_once get_stylesheet_directory() . '/inc/custom-style-manager.php';