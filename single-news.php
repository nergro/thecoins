<?php 
get_header();  ?>
<!----- Jumbotron with image ----->
<div class="container-fluid single">
	<div class="row">
		<div class="col-12 jumbotron" style="background-image: url(http://thecoins.eu/wp-content/uploads/2018/10/news.png)">
       </div>
	</div>
</div>

<!----- News content ----->
<div class="container-fluid">
	<div class="row">
		<div class="col-12 text-center"><h1><?php the_title(); ?></h1></div>
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
		<div class="col-12 text-center">
            <a href="<?php echo get_post_type_archive_link('news')?>" class="btn btn-outline-primary btn-lg"><strong>View all News</strong></a>
        </div>
	</div>
</div>
 
<?php get_footer();
?>
