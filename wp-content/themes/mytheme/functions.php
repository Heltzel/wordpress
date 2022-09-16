<?php

/**
 * Theme Functions.
 *
 * @package My Theme
 */
if (!defined('MYTHEME_DIR_PATH')) {
	define('MYTHEME_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('MYTHEME_DIR_URI')) {
	define('MYTHEME_DIR_URI', untrailingslashit(get_template_directory_uri()));
}
require_once MYTHEME_DIR_PATH . '/inc/helpers/autoloader.php';

function mytheme_get_theme_instance()
{
	\mytheme\Inc\Mytheme_theme::get_instance();
}
mytheme_get_theme_instance();


// function myTheme_enqueue_scripts()
// {
// 	// gives you the possibilty to execute it condtionally
// }

// add_action('wp_enqueue_scripts', 'myTheme_enqueue_scripts');
