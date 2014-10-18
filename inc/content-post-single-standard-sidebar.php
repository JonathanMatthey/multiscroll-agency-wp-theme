<div class="col-md-12">
	<div class="row">
	
		<div class="col-md-8 equal-height remove-right">
			<article class="news-post-inner inner-pad col-md-12 black-bg text-left">
				    <h2 class="dark"><?php echo get_post_meta($post->ID, '_ebor_the_subtitle', 1); ?></h2>
				    <p class="white"><?php the_time( get_option('date_format') ); ?> / By <?php the_author_posts_link(); ?></p>
			</article>
			
			<article class="news-post-inner inner-pad col-md-12 white-bg text-left">
				 <?php
				 	the_content(); 
				 	wp_link_pages();
				 ?>
				 <div class="meta tags"><?php the_tags('', ', ', ''); ?></div>
			</article>
		</div>
		
		<?php get_sidebar(); ?>
		
	</div>
</div>