<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	

	<?php wp_head(); ?>
  <?php the_field('header_script'); ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" <?php body_class();?>>
	<header class="site-header">


  <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="mainNav">
    <div class="container-fluid">
        <a class="navbar-brand pr-auto" href="<?php echo get_bloginfo('url') ?>"><img class="imglogo" src="<?php bloginfo('template_url'); ?>/img/logoh.png"  class="d-inline-block align-top" alt=""></a>
        <button class="navbar-toggler mt-1" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column align-items-start ml-lg-2 ml-0" id="navbarCollapse">
            <ul class="navbar-nav mb-auto mt-0 ml-auto">
                <li class="nav-item active">
                    <a class="nav-link py-0" href="<?php echo get_bloginfo('url') ?>" style="color: #2675b8";> Home</a>
                </li>
      <li class="nav-item dropdown">
		  <a class="nav-link py-0 dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #2675b8;">About Us</a>
		  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		    <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/venue" style="color: #2675b8;">Venue</a>
		    <a class="dropdown-item" href="<?php echo get_post_type_archive_link('ambassador')?>" style="color: #2675b8;">Ambassadors</a>
		    <a class="dropdown-item" href="<?php echo get_bloginfo('url') ?>/organizers" style="color: #2675b8;">Organizers</a>
          </div>
      </li>
      <li class="nav-item">
		  <a class="nav-link py-0" href="https://thecoins.eu/registration/" style="color: #2675b8;">Registration</a>
      </li> 
				

	  <li class="nav-item">
        <a class="nav-link py-0" href="https://thecoins.eu/programme/" style="color: #2675b8;">Programme</a> 
      </li>		
      <li class="nav-item">
        <a class="nav-link py-0" href="https://thecoins.eu/speakers/" style="color: #2675b8;">Speakers</a>
      </li>
	 
      <li class="nav-item">
        <a class="nav-link py-0" href="<?php echo get_bloginfo('url') ?>/#contacts" style="color: #2675b8;">Contact Us</a>
      </li>
            </ul>
        </div>
    </div>
</nav>

</header>
