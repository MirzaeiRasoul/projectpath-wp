<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_custom_style('blog');

get_header();

get_custom_content('category');

get_footer();

?>