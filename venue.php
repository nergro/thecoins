<?php /* Template Name: Venue */ 
get_header(); ?>

<!----- Jumbotron with image ----->
<div class="container-fluid single">
	<div class="row">
		<div class="col-12 jumbotron" style="background-image: url(http://thecoins.eu/wp-content/uploads/2018/10/news.png)">
       </div>
	</div>
</div>

<!----- Content and image at the end ----->
<div class="container">
	<div class="col-12 text-center" style="color: #2675b8;"><h1><?php the_title(); ?></h1></div>
	<div class="col-12">
		<p>
			<?php 
				$my_postid = get_the_ID();//This is page id or post id
				$content_post = get_post($my_postid);
				$content = $content_post->post_content;
				echo $content;
				?>
		</p>
	</div>
	<div class="row">
		<div class="col-12 text-center">
			<img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>">
		</div>
	</div>
</div>




<?php get_footer(); 
?>