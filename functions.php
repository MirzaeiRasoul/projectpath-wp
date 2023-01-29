<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

function load_child_main_styles()
{
	wp_enqueue_style(
		'child-style',
		get_stylesheet_directory_uri() . '/assets/css/main.css',
		array(),
		wp_get_theme()->get('Version') // This only works if you have Version defined in the style header.
	);
}

add_action('wp_enqueue_scripts', 'load_child_main_styles');

function current_persian_year_func()
{
	$pd = bn_parsidate::getInstance();
	$thisyear = $pd->persian_date('Y', current_time('timestamp'));
	return $thisyear;
}

add_shortcode('current_persian_year', 'current_persian_year_func');

/**
 * Include Manager Files
 */
require_once get_stylesheet_directory() . '/inc/custom-content-manager.php';
require_once get_stylesheet_directory() . '/inc/custom-style-manager.php';