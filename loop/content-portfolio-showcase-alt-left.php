<?php  
	global $post;
	
	$url = get_post_meta($post->ID, '_ebor_showcase_left',1);
	if(empty( $url ))
		return false;
		
	$subtitle = get_post_meta($post->ID, '_ebor_the_subtitle', 1);
?>

<div class="ms-section bg-cover showcase-alt-left" style="background-image: url(<?php echo $url; ?>);">
	<div class="ms-static-title text-left">
		<a href="<?php the_permalink(); ?>" class="valign">
			<?php 
				the_title('<h1 class="white">', '</h1>'); 
				if( $subtitle )
					echo '<h3 class="black"><span class="white-bg">'. $subtitle .'</span></h3>';
			?>
		</a>
	</div>
</div>