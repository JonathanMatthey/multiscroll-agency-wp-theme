<?php
	/**
	 * The archives template for the Reflex Theme
	 */
	get_header();
	$term = get_queried_object();
	
	echo ebor_reflex_page_header( get_option('blog_title','Latest News'), $term->name, get_option('blog_header_image') );
?>

<!-- start content, closing div missing on purpose (called in footer) -->
<div id="content">

<?php 
	get_template_part('loop/loop', 'index');
	
	/**
	 * Post pagination, use ebor_pagination() first and fall back to default
	 */
	echo function_exists('ebor_pagination') ? ebor_pagination() : posts_nav_link();
	
	get_footer('content');