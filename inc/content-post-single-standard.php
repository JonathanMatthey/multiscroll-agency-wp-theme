<?php 
	global $post;
	
	$subtitle = get_post_meta($post->ID, '_ebor_the_subtitle', 1);
	
	if( $subtitle ) :
?>
	<article class="news-post-inner inner-pad col-md-12 black-bg text-left">
		    <h2 class="dark"><?php echo $subtitle; ?></h2>
		    <p class="white"><?php the_time( get_option('date_format') ); ?> / By <?php the_author_posts_link(); ?></p>
	</article>
<?php 
	endif; 
?>

<article class="news-post-inner inner-pad col-md-12 white-bg text-left">
	 <?php
	 	the_content(); 
	 	wp_link_pages();
	 ?>
	 <div class="meta tags"><?php the_tags('', ', ', ''); ?></div>
</article>