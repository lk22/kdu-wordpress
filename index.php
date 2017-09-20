<?php 

/**
 * get wordpress header
 */
get_header();

	/**
	 * check if we have any posts
	 */
	if(have_posts()) {

		/**
		 * as long we have any post 
		 */
		while (have_posts()) {
			// fetch the post
			the_post();

			// get the content template part
			get_template_part('content', get_post_format());
		}
	}

/**
 * get wordpress footer
 */
get_footer();

 ?>