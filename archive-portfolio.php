<?php 
	/**
	 * This is the layout for the split scroll portfolio type
	 * It doesn't support a footer as the screen is locked to the split scroll
	 */
	get_header(); 
	
	echo ebor_reflex_page_header( get_option('blog_title','Latest News'), false, get_option('blog_header_image'), true );
?>

<!-- start content, closing div missing on purpose (called in footer) -->
<div id="content">

<?php 
	get_template_part('loop/loop', 'portfolio-masonry');
	
	get_footer('content');