<?php
	/**
	 * The main blog template for the Reflex Theme
	 */
	get_header();
	$term = get_queried_object();
	
	echo ebor_reflex_page_header( get_option('blog_title','Latest News'), __('Posts By: ','reflex') . get_query_var('author_name'), get_option('blog_header_image') );
?>

<!-- start content, closing div missing on purpose (called in footer) -->
<div id="content">

<?php 
	get_template_part('loop/loop', 'index');
	
	get_footer('content');