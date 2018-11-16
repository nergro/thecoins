<?php 
get_header(); 

 while(have_posts()) {
 	the_post(); ?>

      <h1 class="page-title"><?php the_title()?></h1>


 		<div class="generic-content">
 			<?php the_content();?>
 		</div>
 	</div>

 <?php }
get_footer();
?>
