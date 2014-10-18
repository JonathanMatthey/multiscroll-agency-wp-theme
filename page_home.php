<?php 
	/*
	Template Name: Homepage
	*/
	get_header();
	the_post();
	
	$content = (!( 'on' == get_post_meta($post->ID, '_ebor_disable_footer', 1) )) ? 'content' : false;
?>
	
<!-- start content, closing div missing on purpose (called in footer) -->
<div id="content">
		
<?php the_content(); ?>

<div class="clearfix"></div>

<?php get_footer( $content );