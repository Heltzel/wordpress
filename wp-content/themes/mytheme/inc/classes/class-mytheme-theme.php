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
	{
		$this->set_hooks();
	}
	protected function set_hooks()
	{
	}
}
