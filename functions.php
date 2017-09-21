<?php 

/**
 * add various theme support
 */
function add_themes_support() {
	/**
	 * register navigation menus
	 */
		register_nav_menus([
	        'header' => __('Header Menu');
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

/** load resource scripts */
function load_themes_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

// hook the theme support
add_action('after_setup_theme', 'add_themes_support');

// hook up the resource script loading
add_action('wp_enqueue_scripts', 'load_themes_resources');

/**
 * wrapper for loading partials
 */
function load($component) {
	require('components/' . $component . '.php');
}
