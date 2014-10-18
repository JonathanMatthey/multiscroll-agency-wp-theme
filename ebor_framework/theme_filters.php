<?php

/**
 * Ebor Framework
 * Theme Filters
 * @since version 1.0
 * @author TommusRhodus
 */

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 */
function _s_wp_title( $title, $sep ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	// Add the blog name
	$title .= get_bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $sep $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $sep " . sprintf( __( 'Page %s', 'reflex' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', '_s_wp_title', 10, 2 );

if(!( function_exists('ebor_excerpt_more') )){
	function ebor_excerpt_more( $more ) {
		return '...';
	}
}
add_filter('excerpt_more', 'ebor_excerpt_more');

if(!( function_exists('ebor_excerpt_length') )){
	function ebor_excerpt_length( $length ) {
		return 45;
	}
}
add_filter( 'excerpt_length', 'ebor_excerpt_length', 999 );

add_filter('widget_text', 'do_shortcode');

/* This code filters the Categories archive widget to include the post count inside the link */
add_filter('wp_list_categories', 'ebor_cat_count_span');
function ebor_cat_count_span($links) {
	$links = str_replace('</a> (', ' (', $links);
	$links = str_replace(')', ')</a>', $links);
	return $links;
}
/* This code filters the Archive widget to include the post count inside the link */
add_filter('get_archives_link', 'ebor_archive_count_span');
function ebor_archive_count_span($links) {
	$links = str_replace('</a>&nbsp;(', ' (', $links);
	$links = str_replace(')', ')</a>', $links);
	return $links;
}