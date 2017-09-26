<!-- 
	header component
 -->
 <header class="container-fluid component kdu-header transparent" id="header">
 	<div class="logo-wrapper pull-left">
 		<img class="logo img img-responsive" height="175" width="175" src="http://leoknudsen-wordpress.dev/wp-content/uploads/2017/09/logo_256_256_3.png" alt="">
 		<?php 
 			// add custom logo in full size
 			add_logo('custom_logo', 'full');
 		 ?>
 	</div>

 	<div class="navigation-wrapper kdu-navigation pull-right">
 		<?php 
	        add_menu([
	        	'theme_location' => 'header'
	        ]);
 		 ?>
 	</div>
 </header>