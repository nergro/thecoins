<?php 
get_header(); ?>

<!-- Jumbotron with image -->
<div class="container-fluid single">
	<div class="row">
		<div class="col-12 jumbotron" style="background-image: url(http://thecoins.eu/wp-content/uploads/2018/10/news.png)">
       </div>
	</div>
</div>

<!-- Query all ambassadors -->
<div class="container-fluid">
	<div class="col-12 text-center" style="color: #2675b8;"><h1>Ambassadors</h1></div>
	<div class="row">
		<?php 
             $homepageEvents = new WP_Query(array(
              'orderby' => 'ID',
              'order' => 'ASC',
              'post_type' => 'ambassador'
             ));

             while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>

		<div class="row col-12">
			
			
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 singlespeakerimg">
			<img id="ambaimg" src="<?php 
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'speakimg');
  echo $featured_img_url;
  ?>">
		</div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
			<h1 class="text-center mb-3"><?php the_title()?></h1>
			<p class="text-center"><?php $speakerTitle = get_field('speaker_title'); echo $speakerTitle; ?></p> 
			<p><?php the_field("pirma_pastraipa"); ?></p>
			<p><?php the_field("antra_pastraipa"); ?></p>
			<p><?php the_field("trecia_pastraipa"); ?></p>
		</div>
		</div>
		 <?php }
         ?>
	</div>
</div>




<?php get_footer(); 
?>