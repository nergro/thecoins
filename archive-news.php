<?php 
get_header();  ?>

<!-- Jumbotron with image -->
<div class="container-fluid single">
	<div class="row">
		<div class="col-12 jumbotron" style="background-image: url(http://thecoins.eu/wp-content/uploads/2018/10/news.png)">
       </div>
	</div>
</div>

<!-- Query all news -->
<div class="container-fluid spk" id="speakers">
  <div class="row">
  <div class="col-12 text-center" style="color: #2675b8;"><h1>News archive</h1></div>
</div>
  <div class="row">   
      <hr>
      <?php 
             $homepageEvents = new WP_Query(array(
              'post_type' => 'news'
             ));

             while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>

        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
            <div class="our-team">
                <div class="container-fluid">
                    <div class="row">
                      <div class="col-3 text-right">
                        <a href="<?php the_permalink(); ?>"><i class="fas fa-angle-double-right" style="font-size: 2em;"></i></a>
                      </div>
                      <div class="col-9 text-left">
                        <h3><?php the_title();?></h3>
						   <p>
							  <?php echo wp_trim_words( get_the_content(), $num_words = 25); ?>
						  </p>
                        <p><?php echo get_field('news_description'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline-success">Read more</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
 
 <?php }
         ?>
    
    </div>
</div>
 
<?php get_footer();
?>