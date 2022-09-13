<?php

/**
 * Theme Functions.
 *
 * @package My Theme
 */

function myTheme_enqueue_scripts()
{
	wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
	wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', true);
	// gives you the possibilty to execute it condtionally
	wp_enqueue_style('style-css');
	wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'myTheme_enqueue_scripts');
