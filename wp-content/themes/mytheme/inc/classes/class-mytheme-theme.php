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
		add_theme_support('custom-logo', [
			'height' => 720,
			'width'  => 720,
			'flex-height' => true,
			'flex-widtht' => true,
			'header-text' => ['site-title', 'site-description']
		]);
	}
}
