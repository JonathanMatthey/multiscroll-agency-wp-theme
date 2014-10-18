<?php
	/**
	 * The main blog template for the Reflex Theme
	 */
	get_header();
	
	global $wp_query;
	$total_results = $wp_query->found_posts;
	( $total_results == '1' ) ? $items = __(' Item','reflex') : $items = __(' Items','reflex'); 
	
	echo ebor_reflex_page_header( __('Your Search For: ','reflex') . get_search_query(), __( 'Returned: ', 'reflex' ) . $total_results . $items, get_option('blog_header_image') );
?>

<!-- start content, closing div missing on purpose (called in footer) -->
<div id="content">

<?php 
	get_template_part('loop/loop', 'index');
	
	get_footer('content');