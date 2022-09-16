<?php

/**
 * Enqueue Theme Assets
 * 
 * @package My Theme
 */

namespace mytheme\Inc;

use mytheme\Inc\Traits\Singleton;

class Assets
{
	use Singleton;

	protected function __construct()
	{ // load classes
		$this->setup_hooks();
	}
	protected function setup_hooks()
	{
		/**
		 * Actions		
		 */
		// add_action('wp_enqueue_scripts', 'myTheme_enqueue_scripts');
		add_action('wp_enqueue_scripts', [$this, 'register_styles']);
		add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
	}

	public function register_styles()
	{
		// Register Styles
		wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(MYTHEME_DIR_PATH . '/style.css'), 'all');
		wp_register_style('bootstrap-css', MYTHEME_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
		// Enqueue styles
		wp_enqueue_style('style-css');
		wp_enqueue_style('bootstrap-css');
	}

	public function register_scripts()
	{
		// Register Scripts
		wp_register_script('main-js', MYTHEME_DIR_URI . '/assets/js/main.js', [], filemtime(MYTHEME_DIR_PATH . '/assets/js/main.js'), true);
		wp_register_script('bootstrap-js', MYTHEME_DIR_URI . '/assets/src/library/js/bootstrap.min.js', [], false, true);
		// Enqueue  Scripts
		wp_enqueue_script('main-js');
		wp_enqueue_script('bootstrap-js');
	}
}
