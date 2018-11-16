<?php 
get_header(); ?>

<!----- Jumbotron with image ----->
<div class="container-fluid single">
	<div class="row">
		<div class="col-12 jumbotron" style="background-image: url(<?php echo get_theme_file_uri('img/library-hero.jpg');?>">
       </div>
	</div>
</div>

<!----- Page title and content ----->
<div class="container">
	<div class="col-12 text-center" style="color: #2675b8;"><h1><?php the_title(); ?></h1></div>
	<div class="row">
		<div class="col-12">
			<p><?php $my_postid = get_the_ID();
				$content_post = get_post($my_postid);
				$content = $content_post->post_content;
				echo $content; ?></p>
		</div>
	</div>
</div>



<?php get_footer();
?>