<?php 
	global $post;
	
	$url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
	if(empty( $url[0] ))
		return false;
		
	$destination = get_post_meta( $post->ID, "_ebor_post_destination", true );
?>

<div class="works-item works-item-one-third <?php echo ( 'lightbox' == $destination || 'lightbox-gallery' == $destination || 'video' == $destination ) ? 'zoom' : 'info'; ?> <?php echo ebor_the_isotope_terms(); ?>">
	
	<?php the_post_thumbnail('masonry', array('class' => 'img-responsive')); ?>
	
	<?php
		if( 'lightbox' == $destination ){
			echo '<a class="venobox" data-gall="portfolio-gallery" href="'. $url[0] .'">';
		} elseif( 'lightbox-gallery' == $destination ){
			echo '<a class="venobox" data-gall="portfolio-gallery-'. get_the_ID() .'" href="'. $url[0] .'">';
		} elseif( 'video' == $destination  ) {
			echo '<a class="venobox" data-type="vimeo" href="'. get_post_meta( $post->ID, "_ebor_the_video_1", true ) .'">';
		} else {
			echo '<a href="'. get_permalink() .'">';
		}
	?>
		<div class="works-item-inner valign">
			<?php the_title('<h3 class="black">', '</h3>'); ?>
			<p class="white"><span class="black-bg"><?php echo ebor_the_simple_terms(); ?></span></p>
		</div>
	</a>
	
	<?php 
		if( 'lightbox-gallery' == $destination ){
			$attachments = get_post_meta( $post->ID, '_ebor_portfolio_images', true );
			if( is_array($attachments) ){
				foreach( $attachments as $ID ){
					$attachment = get_post($ID);
					$url = wp_get_attachment_image_src( $attachment->ID, 'full' );
					echo '<a style="display: none;" class="venobox" data-gall="portfolio-gallery-'. get_the_ID() .'" href="'. $url[0] .'"></a>';
				}
			}		
		}
	?>
	
</div>