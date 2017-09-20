<?php 

/** get header */
get_header();

/**
 * check if page have posts
 */
if(have_posts()) {

	/**
	 * as long page have any posts
	 */
	while(have_posts()){

		// get the post
		the_post();

		// load the content file 
		get_template_part('content', get_post_format());
	}
}

/** get wordpress footer */
get_footer();




 ?>