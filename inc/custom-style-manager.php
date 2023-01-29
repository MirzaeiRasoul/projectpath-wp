<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function enqueue_custom_style($style_name)
{
    if ($style_name) {
        wp_enqueue_style(
            $style_name . '-style',
            get_stylesheet_directory_uri() . '/assets/css/' . $style_name . '.css',
            array(),
            wp_get_theme()->get('Version') // This only works if you have Version defined in the style header.
        );
    }
}

function get_custom_style($style_name)
{
    // We add the action with 10 execution priority and 1 argument
    add_action('wp_enqueue_scripts', 'enqueue_custom_style', 10, 1);

    // Then we do the action
    do_action('wp_enqueue_scripts', 'template');

    switch ($style_name) {

        case '404':
            do_action('wp_enqueue_scripts', $style_name);
            break;

        case 'blog':
            do_action('wp_enqueue_scripts', $style_name);
            break;

    }

}