<article class="news-post-inner inner-pad col-md-6 black-bg text-left equal-height">
	<div class="valign">
	    <h2 class="dark"><?php echo get_post_meta($post->ID, '_ebor_the_subtitle', 1); ?></h2>
	    <p class="white"><?php the_time( get_option('date_format') ); ?> / By <?php the_author_posts_link(); ?></p>
	</div>
</article>

<article class="news-post-inner inner-pad col-md-6 white-bg text-left equal-height">
	<div class="valign">
		<div id="<?php the_ID(); ?>" <?php post_class(); ?>>
			 <?php 
			 	the_content(); 
			 	wp_link_pages();
			 ?>
		 </div>
		 <div class="meta tags"><?php the_tags('', ', ', ''); ?></div>
	</div>
</article>