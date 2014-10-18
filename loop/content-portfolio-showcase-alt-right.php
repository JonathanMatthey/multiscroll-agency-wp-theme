<?php  
	global $post;
	
	$url = get_post_meta($post->ID, '_ebor_showcase_right',1);
	if(empty( $url ))
		return false;
?>

<div class="ms-section bg-cover showcase-alt-right" style="background-image: url(<?php echo $url; ?>);"></div>