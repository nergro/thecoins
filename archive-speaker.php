<?php
get_header(); ?>

<!-- Query all speakers -->
<div style="padding-top: 75px">
	

<div class="container-fluid single spk">
  <div class="row">
  <div class="col-12 text-center" style="color: #2675b8;"><h1>Meet Our Keynote Speakers from The COINS 2018</h1></div>
</div>
  <div class="row">
    <div class="row col-12">
      
      <hr>
      <?php 
             $homepageEvents = new WP_Query(array(
			  'posts_per_page' => 20,
              'orderby' => 'ID',
              'order' => 'ASC',
              'post_type' => 'speaker'
             ));

             while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xs-12 lala">
            <div class="our-team">
                <a href="<?php echo get_the_permalink(); ?>"><div class="pic">
                    <img alt="<?php echo get_theme_file_uri('img/alternative.jpg');?>" src="<?php 
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'speakimg');
  echo $featured_img_url;
  ?>">
                </div>
                <h3><?php the_title(); ?></h3></a>
                <span class="post"><?php $speakerTitle = get_field('speaker_title'); echo $speakerTitle; ?></span>
                <div class="socia" >
      <!--<a href="https://www.facebook.com/thecoinsconference/"><i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/thecoins_conference/"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/thecoins_conference/"><i class="fab fa-google-plus"></i></a>
      <a href="https://www.linkedin.com/company/the-coins-conference/"><i class="fab fa-linkedin"></i></a>-->
    </div>
            </div>
        </div>
 
 <?php }
         ?>
        
    </div>
    
  </div>
    </div>
</div>
<?php get_footer();
?>