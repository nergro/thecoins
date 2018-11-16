<?php 
get_header();
?>
  <!-- AOS animations load -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

<!----- Carousel section ----->
<div id="slides" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-caption">
        <h1><?php the_field("title_1"); ?></h1>

        <h3 id="description"><?php the_field("title_2"); ?></h3>
        
		
      <hr class="hrstyle" id="hrstyle">
      <div class="row">
        <div class="col-4 text-right">
      <h4 class="city" id="city" style="text-shadow: 2px 2px 4px #000000;" ><?php the_field("subtitle_1"); ?></h4>
      </div>
      <div class="col-4 ">
        <h4 class="year" id="year" style="text-shadow: 2px 2px 4px #000000;"><?php the_field("subtitle_2"); ?></h4>
      </div>
     <div class="col-4 text-left">
      
		  <a class="btn btn-primary gettickets" href="https://thecoins.eu/registration/" id="tickets" role="button">GET TICKETS</a>
      </div>
    </div>

  
      </div>

    <div class="carousel-item active">
     <img src="http://thecoins.eu/wp-content/uploads/2018/10/1.png" alt="<?php echo $image['alt']; ?>" />
    </div>
    <div class="carousel-item">
      <img src="http://thecoins.eu/wp-content/uploads/2018/10/2.png" alt="<?php echo $image['alt']; ?>" />
    </div>
	  <div class="carousel-item">
      <img src="http://thecoins.eu/wp-content/uploads/2018/11/webpage-cover-photo.png" alt="<?php echo $image['alt']; ?>" />
    </div>
    
  </div>
</div>




<!----- About us section ----->

<div class="container-fluid apie" id="about">
  <div class="row text-center padding">
    <div class="col-12">
    <h1 class="display-4 aboutus"><strong style="color: #2675b8;">About Us</strong></h1>
      </div>
  <hr style="margin-top: 0px;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" 
		 data-aos="zoom-in"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out">
		
		<div id="abouttext">
			<p><?php the_field("about_pirma"); ?></p>
    		<p><?php the_field("about_antra"); ?></p>
		</div>

</div>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
     <!-- Load Facebook SDK for JavaScript -->
 <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your embedded video player code -->
 <div class="video-container" > 
  <div class="fb-video text-center" data-href="https://www.facebook.com/thecoinsconference/videos/471208309949800/" data-show-text="false">
  </div>
</div> 
  </div> 


</div>
</div>


<!----- Numbers count to section ----->

<div id="fh5co-counter" class="fh5co-counters"
	 data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
	 >
		<div class="container">
			<div class="row">
				<?php 
				$pr = get_field("participants");
				$tp = get_field("topics");
				$ss = get_field("sessions");
				$sp = get_field("speakers");
				?>
				<div class="col-6 col-xl-3 col-lg-3 text-center animate-box">
					<span class="fh5co-counter js-counter numscroller" data-min='1' data-max='<?php echo $pr; ?>' data-delay='7' data-increment='7'><?php echo $pr; ?></span>
					<span class="fh5co-counter-label">Participants</span>
				</div>
				<div class="col-6 col-xl-3 col-lg-3 text-center animate-box">
					<span class="fh5co-counter js-counter numscroller" data-min='1' data-max='<?php echo $tp; ?>' data-delay='7' data-increment='7'><?php echo $tp; ?></span>
					<span class="fh5co-counter-label">Topics</span>
				</div>
				<div class="col-6 col-xl-3 col-lg-3 text-center animate-box">
					<span class="fh5co-counter js-counter numscroller" data-min='1' data-max='<?php echo $ss; ?>' data-delay='7' data-increment='7'><?php echo $ss; ?></span>
					<span class="fh5co-counter-label">Sessions</span>
				</div>
				<div class="col-6 col-xl-3 col-lg-3 text-center animate-box">
					<span class="fh5co-counter js-counter numscroller" data-min='1' data-max='<?php echo $sp; ?>' data-delay='7' data-increment='7'><?php echo $sp; ?></span>
					<span class="fh5co-counter-label">Speakers</span>
				</div>
			</div>
		</div>
	</div>

<!----- Clock ----->
<div id="laikasliko"> 
<div class="container" 
	 data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out">
	<div class="col-12 text-center" style="color: #ffffff;"><h1><strong>Time until event starts</strong></h1></div>

	<div class="row">
		<div class="col-12" style="color: #ffffff">
	
			<?php $date = get_field("data"); ?>
			<?php echo do_shortcode('[easy_countdowner name="demo_countdowner" theme="default" animation="smooth" end_date="'. $date .'" end_time="00:00:00" day_label="Days" hour_label="Hours" minute_label="Minutes" second_label="Seconds" day_color="#ffffff" hour_color="#ffffff" minute_color="#ffffff" second_color="#ffffff" circle_bg_color="#ffffff"]'); ?>
		</div>
	</div>
</div>
</div> 




<!----- Speakers ----->

<div class="container-fluid spk" id="speakers" 
	 data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out">
	<div class="col-12 text-center"><h1><img class="mr-2"id="apple" src="<?php bloginfo('template_url'); ?>/img/coinslogo.png"><strong style="color: #2675b8;">Speakers From The COINS 2018</strong></h1></div>
	<div class="row">
		<div class="col-1">
		</div>
		<div class="col-10">
			<hr id="speakerhr">
		</div>
		<div class="col-1">
		</div>
	</div>
  

  <div class="row">
    <div class="row col-12">

      <hr>
		<!----- Max 4 speakers ----->

      <?php	
             $homepageEvents = new WP_Query(array(
              'posts_per_page' => 6,
              'orderby' => 'ID',
              'order' => 'DESC',
              'post_type' => 'speaker'
             ));

             while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12 front_speaker_card">
            <div class="our-team">
                <a href="<?php echo get_the_permalink(); ?>"><div class="pic">
                    <img src="<?php 
  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'speakimg');
  echo $featured_img_url;
  ?>">
                </div>
                <h3><?php the_title(); ?></h3></a>
                <span class="post"><?php $speakerTitle = get_field('speaker_title'); echo $speakerTitle; ?></span>

                <div class="socia" >
      <?php $fblength = get_field('facebook'); if (strlen($fblength) > 0 ) { ?>
      <a href="https://<?php echo get_field('facebook'); ?>"><i class="fab fa-facebook"></i></a>
    <?php } ?>

    <?php $twitlength = get_field('twitter'); if (strlen($twitlength) > 0 ) { ?>
      <a href="https://<?php echo get_field('twitter'); ?>"><i class="fab fa-twitter"></i></a>
      <?php } ?>

      <?php $googlelength = get_field('google_plus'); if (strlen($googlelength) > 0 ) { ?>
      <a href="https://<?php echo get_field('google_plus'); ?>"><i class="fab fa-google-plus"></i></a>
      <?php } ?>

      <?php $linkedlength = get_field('linkedin'); if (strlen($linkedlength) > 0 ) { ?>
      <a href="https://<?php echo get_field('linkedin'); ?>"><i class="fab fa-linkedin"></i></a>
      <?php } ?>

      <?php $instalength = get_field('instagram'); if (strlen($instalength) > 0 ) { ?>
       <a href="https://<?php echo get_field('instagram'); ?>"><i class="fab fa-instagram"></i></a>
       <?php } ?>
    </div>
            </div>
        </div>
 
 <?php }
         ?>
         <div class="col-12 text-center">
           <a href="<?php echo get_post_type_archive_link('speaker')?>" class="btn btn-outline-dark btn-lg"><strong style="color: #2675b8;">All Speakers</strong></a>
         </div>
    </div>
    
  </div>
    </div>

<!----- Latest news section ----->
<?php 
        $homepagePosts = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'news'
        )); 
			 $n = 0;
while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); 
           $n = $n + 1;
}?>

<div class="container" 
	 data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out">
	<?php if ($n > 0) { ?>
	<div class="text-center mt-4"><h1><strong style="color: #2675b8;">Latest News</strong></h1></div>
<?php }	?>
	<div class="row">
		
		<div class="col-12">
			
      <!----- Max 3 news ----->
      
<?php
        while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
                       
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-3 text-right">
                        <a href="<?php the_permalink(); ?>"><i class="fas fa-angle-double-right" style="font-size: 2em;"></i></a>
                      </div>
                      <div class="col-9 text-left">
                        <h3><?php the_title();?></h3>
						  <p>
							  <?php echo wp_trim_words( get_the_content(), $num_words = 10); ?>
						  </p>
                        <p><?php echo get_field('news_description'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline-success">Read more</a>
                      </div>
                    </div>
                    <hr>
                  </div>

                  <?php } wp_reset_postdata(); //reset wp to default after query
         ?>
    </div>
	</div>
</div>

<!----- Moments section ----->
<div class="container" data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out">
	<div class="col-12 text-center mt-4 mb-2"><h1><strong style="color: #2675b8;">Moments from The Coins 2018</strong></h1></div>
	<div class="row">
		<div class="col-12 col-md-6 col-lg-6 col-xl-6">
			<img class="img-fluid" src="http://thecoins.eu/wp-content/uploads/2018/11/DSC04403.jpg" alt="<?php echo $image['alt']; ?>">
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-6">
			<img class="img-fluid" src="http://thecoins.eu/wp-content/uploads/2018/11/DSC03793.jpg" alt="<?php echo $image['alt']; ?>">
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-6">
			<img class="img-fluid" src="http://thecoins.eu/wp-content/uploads/2018/11/aaa.jpg" alt="<?php echo $image['alt']; ?>">
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-6">
			<img class="img-fluid" src="<?php $image = get_field('forth_moment'); echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
		</div>
	</div>
</div>





<!----- Sponsors section ----->
<div class="container-fluid" id="sponsors" 
	 data-aos="fade-up"
    data-aos-offset="200"
    data-aos-delay="50"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out">
  <div class="col-12 text-center">
    <h1 id="sptitle"><strong style="color: #2675b8;">Sponsors & Partners</strong></h1> <!--Gold sponsors-->
  </div>
<div class="container sponslogo">
    <div class="row text-center">
        <?php	
             $homepageEvents = new WP_Query(array(
              'orderby' => 'ID',
              'order' => 'ASC',
              'post_type' => 'gold'
             ));

		$gnum = 0;
             while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); 
				$gnum = $gnum + 1;
		 }
         ?>		
	<?php	if ($gnum == 1) {	
	while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>	
        <div class="col-12"><a class="alogo" href="<?php the_field("sponsor_link");?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></div>
		 <?php } 		
		} ?>
		
	<?php	if ($gnum == 2) {
	while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>	
        <div class="col-6"><a class="alogo" href="<?php the_field("sponsor_link");?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></div>
		 <?php } 	
		} ?>
		
	<?php	if ($gnum > 2) {
	while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>	
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 "><a class="alogo" href="<?php the_field("sponsor_link");?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></div>	
		 <?php } 		
		} ?>
    </div>
</div>
  <!--<div class="col-12 text-center">
    <h1 id="sptitle"><strong style="color: #2675b8;">Silver sponsors</strong></h1>
  </div>
  <div class="container sponslogo">
    <div class="row text-center">
        <?php	
             $homepageEvents = new WP_Query(array(
              'orderby' => 'ID',
              'order' => 'ASC',
              'post_type' => 'silver'
             ));

		$snum = 0;
             while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); 
				$snum = $snum + 1;
		 }
         ?>		
	<?php	if ($snum == 1) {	
	while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>	
        <div class="col-12"><a class="alogo" href="<?php the_field("sponsor_link");?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></div>
		 <?php } 		
		} ?>
		
	<?php	if ($snum == 2) {
	while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>	
        <div class="col-6"><a class="alogo" href="<?php the_field("sponsor_link");?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></div>
		 <?php } 	
		} ?>
		
	<?php	if ($snum > 2) {
	while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>	
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 "><a class="alogo" href="<?php the_field("sponsor_link");?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></div>	
		 <?php } 		
		} ?>
    </div>
</div>
  <div class="col-12 text-center" id="partners">
    <h1 id="sptitle"><strong style="color: #2675b8;">Partners</strong></h1>
  </div>
  <div class="container sponslogo">
    <div class="row text-center">
		<?php	
             $homepageEvents = new WP_Query(array(
              'orderby' => 'ID',
              'order' => 'ASC',
              'post_type' => 'partner'
             ));

		$pnum = 0;
             while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); 
				$pnum = $pnum + 1;
		 }
         ?>		
	<?php	if ($pnum == 1) {	
	while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>	
        <div class="col-12"><a class="alogo" href="<?php the_field("sponsor_link");?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></div>
		 <?php } 		
		} ?>
		
	<?php	if ($pnum == 2) {
	while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>	
        <div class="col-6"><a class="alogo" href="<?php the_field("sponsor_link");?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></div>
		 <?php } 	
		} ?>
		
	<?php	if ($pnum > 2) {
	while ($homepageEvents->have_posts()) {
               $homepageEvents->the_post(); ?>	
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-3 "><a class="alogo" href="<?php the_field("sponsor_link");?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a></div>	
		 <?php } 		
		} ?>
           
    </div>
</div>
</div> -->




<?php get_footer();
?>