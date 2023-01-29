<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_custom_style('404');

get_header();

get_custom_content('404');

get_footer();

?>