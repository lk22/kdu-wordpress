
	<?php 

	/**
	 * customization registrations
	 */

		/**
		 * register theme customization
		 * @param  [type] $wp_customize [description]
		 * @return [type]               [description]
		 */
		function theme_customize_register( $wp_customize ) {
			// $wp_customize->add_panel();
			// $wp_customize->get_panel();
			// $wp_customize->remove_panel();
		}
		add_action('customize_register', 'theme_customize_register');

		/**
		 * applying a WordPress setting
		 */
		function apply_setting($wp_customize, $setting_id, $settings = array() ){
			$wp_customize->add_setting($setting_id, $settings);
		}

	 ?>