<?php
	get_header();
	?>
	<div class="content">
	<?php
		 if ( have_posts() ) : ?>
		 <?php while ( have_posts() ) : the_post(); ?>    
		 
			 <h1><?php the_title();?></h1><br>
			 <p><?php the_content();?></p>
		 
	 
		 <?php endwhile; ?>
	 <?php endif; ?>
	
	?>
	</div>

	<div class="sidebar">
		<?php get_sidebar( )?>
	</div>


<?php get_footer();?>
