<!-- 
	content page templating
 -->
<?php if(page_title() === 'Home'){require('homepage.php');} ?>

<div class="container-fluid page <?php echo page_title(); ?>-content">
	<?php the_content(); ?>
</div>