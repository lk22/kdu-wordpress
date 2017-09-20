<?php 

/**
 * add various theme support
 */
function add_themes_support() {
	/**
	 * register navigation menus
	 */
		register_nav_menus([
	        'primary' => __('Primary Menu')
	    ]);
	/**
	 * register post formats
	 */
		add_theme_support('post-formats', [
		    'aside',
		    'gallery',
		    'link'
      	]);	
	/**
	 * register support for post thumbnails
	 */
	add_theme_support('post-thumbnails');
}

// hook the theme support
add_action('after_setup_theme', 'add_themes_support');

 ?>