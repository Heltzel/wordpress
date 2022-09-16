<?php

/**
 * Bootstraps the theme
 * 
 * @package My Theme
 */

namespace mytheme\Inc;

use mytheme\Inc\Traits\Singleton;

class Mytheme_theme
{
	use Singleton;

	protected function __construct()
	{ // load classes
		Assets::get_instance();
		$this->setup_hooks();
	}
	protected function setup_hooks()
	{ // Actions
		add_action('after_setup_theme', [$this, 'setup_theme']);
	}

	public function setup_theme()
	{
		add_theme_support('title-tag');
	}
}
