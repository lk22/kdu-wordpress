<!-- 
	header component
 -->
 <header class="container-fluid component kdu-header transparent" id="header">
 	<div class="logo-wrapper pull-left">
 		<img class="logo img img-responsive" src="http://leoknudsen-wordpress.dev/wp-content/uploads/2017/09/logo_256_256.jpg" alt="">
 	</div>

 	<div class="navigation-wrapper kdu-navigation pull-right">
 		<?php 
			wp_nav_menu([
	            'theme_location' => 'header'
	        ]);
 		 ?>
 	</div>
 </header>