<?php

/**
 * Theme Functions.
 *
 * @package My Theme
 */
if (!defined('MYTHEME_DIR_PATH')) {
	define('MYTHEME_DIR_PATH', untrailingslashit(get_template_directory()));
}
require_once MYTHEME_DIR_PATH . '/inc/helpers/autoloader.php';

function mytheme_get_theme_instance()
{
	\mytheme\Inc\Mytheme_theme::get_instance();
}
mytheme_get_theme_instance();


function myTheme_enqueue_scripts()
{
	wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

	wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);
	wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', [], false, true);

	// gives you the possibilty to execute it condtionally
	wp_enqueue_style('style-css');
	wp_enqueue_style('bootstrap-css');

	wp_enqueue_script('main-js');
	wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'myTheme_enqueue_scripts');
