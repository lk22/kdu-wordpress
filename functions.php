<?php 

/**
 * add various theme support
 */
function add_themes_support() {
	/**
	 * register navigation menus
	 */
		register_nav_menus([
	        'header' => __('Header Menu')
	    ]);
	/**
	 * register post formats
	 */
		add_theme_support('post-formats', [
		    'aside',
		    'gallery',
		    'link',
		    'image',
		    'quote',
		    'status',
		    'video',
		    'audio',
		    'chat'
      	]);	
	/**
	 * register support for post thumbnails
	 */
	add_theme_support('post-thumbnails');
}

/**
 * apply support for custom logo
 */
function apply_custom_logo_support(){
	// apply default logo configurations
	$defaults = [
		'height' => 100,
		'width' => 250,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array( 'site-title', 'site-description' )
	];

	add_theme_support('custom-logo', $defaults);
}
// apply action for custom logo
add_action('after_setup_theme', 'apply_custom_logo_support');

/**
 * if custom logo function exists call the function
 */
if( function_exists('get_custom_logo') ) {
	the_custom_logo();
}

/**
 * printing out custom logo
 * @param  [type] $id  [description]
 * @param  [type] $src [description]
 * @return [type]      [description]
 */
function add_logo($id, $src) {
	$custom_logo_id = get_theme_mod($id);
	$logo = wp_get_attachment_image_src($custom_logo_id, $src);

	echo (has_custom_logo()) ? '<a href="' . home_url() . '"><img src="' . esc_url($logo[0]) . '"></a>' : '<a href="' . home_url() . '"><h1 class="navbar-brand">' . get_bloginfo('name') . '</h1></a>';
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

/**
 * get title name of the page
 *
 * @return void
 */
function page_title(){
      global $post;
      return $post->post_title;
}

/**
 * dumping debugging data to screen
 * */
function debug($data){
      echo "<pre>";
      var_dump($data);
      echo "</pre>";
}

function add_menu($nav = ['theme_location' => 'primary']) {
	wp_nav_menu($nav);
}


/**
 * customization registrations
 */

	/**
	 * register theme customization
	 * @param  [type] $wp_customize [description]
	 * @return [type]               [description]
	 */
	function theme_customize_register( $wp_customize ) {
		$wp_customize->add_panel();
		$wp_customize->get_panel();
		$wp_customize->remove_panel();
	}
	add_action('customize_register', 'theme_customize_register');

	/**
	 * applying a WordPress setting
	 */
	function apply_setting($wp_customize, $setting_id, $settings = array() ){
		$wp_customize->add_setting($setting_id, $settings);
	}

