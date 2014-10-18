<?php
	global $post;
	
	/**
	 * Get required post details
	 */
	$post_details = array(
		'width' => get_post_meta($post->ID, '_ebor_post_width', 1),
		'colour' => get_post_meta($post->ID, '_ebor_post_colour', 1),
		'layout' => get_post_meta($post->ID, '_ebor_post_layout', 1)
	);
	
	/**
	 * Check we've collected the meta keys, otherwise make some defaults.
	 */
	if(empty( $post_details['width'] )){
		add_post_meta($post->ID, '_ebor_post_width', 'news-item-one-third');
		$post_details['width'] = 'news-item-one-third';
	}
	
	if(empty( $post_details['colour'] )){
		add_post_meta($post->ID, '_ebor_post_colour', 'white-bg');
		$post_details['colour'] = 'white-bg';
	}
	
	if(empty( $post_details['layout'] )){
		add_post_meta($post->ID, '_ebor_post_layout', 'big-title');
		$post_details['layout'] = 'big-title';
	}
?>

<div class="news-item <?php echo $post_details['width'] . ' ' . $post_details['colour']; ?>">
	
	<?php get_template_part('inc/content-post', $post_details['layout']); ?>
	
</div>