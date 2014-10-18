<?php 
	/**
	 * The single post template for the Reflex theme.
	 */
	get_header();
	the_post();
	
	$content = (!( 'on' == get_post_meta($post->ID, '_ebor_disable_footer', 1) )) ? 'content' : false;
	
	ebor_reflex_page_header( get_the_title(), get_post_meta( $post->ID, '_ebor_the_job_title', true ), get_post_meta($post->ID, '_ebor_header_background', 1) );
?>

<!-- start content, closing div missing on purpose (called in footer) -->
<div id="content">
    
	<section class="container news-post-container text-center">
		<div class="row">
		
			<article class="news-post-inner inner-pad col-md-6 black-bg text-left">
				    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
			</article>
			
			<article class="news-post-inner inner-pad col-md-6 white-bg text-left">
				 <?php
				 	the_content(); 
				 	wp_link_pages();
				 ?>
			</article>
			
		</div>
	</section>
	
<?php get_footer( $content );