<?php
	/*
	Template Name: Under Construction
	*/
	get_header();
	the_post();
	
	$content = (!( 'on' == get_post_meta($post->ID, '_ebor_disable_footer', 1) )) ? 'content' : false;
	
	echo ebor_reflex_page_header( get_the_title(), get_post_meta($post->ID, '_ebor_the_subtitle', 1), get_post_meta($post->ID, '_ebor_header_background', 1) );
?>

<!-- start content, closing div missing on purpose (called in footer) -->
<div id="content">
    
<section class="container error-content-container text-center">
	<div class="row">
		<article class="error-content-inner inner-pad col-md-6 black-bg text-left">
			<div class="valign">
				<h2 class="dark"><?php _e('Coming Soon','reflex'); ?></h2>
				<p class="white"><?php _e('Under Construction','reflex'); ?></p>
			</div>
		</article>
		<article class="error-content-inner inner-pad col-md-6 white-bg text-left">
			<div class="valign">
				<h3 class="sub-heading"><?php _e('The page you are looking for is under construction.','reflex'); ?></h3>
			</div>
		</article>
	</div>
</section>

<?php get_footer( $content );