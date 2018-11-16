<?php 
get_header(); ?>

<!----- Jumbotron with image and title ----->
<div class="container-fluid single">
	<div class="row">
		<div class="col-12 jumbotron" style="background-image: url(<?php echo get_theme_file_uri('img/library-hero.jpg');?>">
           <h1><?php the_title()?></h1> 
           <p><?php $speakerTitle = get_field('speaker_title'); echo $speakerTitle; ?></p> 
       </div>
	</div>
</div>

<!----- Single ambassador - left side image, right - content ----->
<div class="container-fluid">
	<div class="row">
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 singlespeakerimg">
			<img src="<?php 
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'speakimg');
  echo $featured_img_url;
  ?>">
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
			<h1 class="text-center"><?php the_title()?></h1>
			<p class="text-center"><?php $speakerTitle = get_field('speaker_title'); echo $speakerTitle; ?></p> 
			<p>
				<?php 
				$my_postid = get_the_ID();
				$content_post = get_post($my_postid);
				$content = $content_post->post_content;
				echo $content;
				?>
			</p>
		</div>
	</div>
</div>




<?php get_footer(); 
?>