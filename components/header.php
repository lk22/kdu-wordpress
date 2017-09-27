<!-- 
	header component
 -->
 <header class="container-fluid component kdu-header transparent" id="header">
 	<div class="logo-wrapper pull-left">
 		<?php 
 			// add custom logo in full size
 			// add_logo('custom_logo', 'full');
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