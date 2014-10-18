<?php 
	/*
	Template Name: Page Builder Full Width
	*/
	get_header();
	the_post();
	
	$content = (!( 'on' == get_post_meta($post->ID, '_ebor_disable_footer', 1) )) ? 'content' : false;
	
	echo ebor_reflex_page_header( get_the_title(), get_post_meta($post->ID, '_ebor_the_subtitle', 1), get_post_meta($post->ID, '_ebor_header_background', 1) );
?>

<!-- start content, closing div missing on purpose (called in footer) -->
<div id="content">

<?php the_content(); ?>
<div class="clearfix"></div>

<?php get_footer( $content );