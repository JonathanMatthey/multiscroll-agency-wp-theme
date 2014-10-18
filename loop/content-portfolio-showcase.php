<?php  
	global $post;
	
	$url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
	if(empty( $url[0] ))
		return false;
?>

<div class="ms-section bg-cover" style="background-image: url(<?php echo $url[0]; ?>);">
	<div class="ms-overlay">
		<a href="<?php the_permalink(); ?>" class="valign">
			<?php the_title('<h1 class="black">', '</h1>'); ?>
			<h3 class="white"><span class="black-bg"><?php echo ebor_the_simple_terms(); ?></span></h3>
		</a>
	</div>
</div>