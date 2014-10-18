<?php 
	/**
	 * Make sure we can access post data easily.
	 */
	global $post;
	
	/**
	 * Setup variables needed for the gallery
	 */
	$attachments = get_post_meta( $post->ID, '_ebor_portfolio_slider', true );
	
	if( empty( $attachments ) )
		return false;
?>

<div class="owl-carousel" id="portfolio-carousel">
		<?php
			foreach( $attachments as $ID ){
				$attachment = get_post($ID);
				echo '<div class="item">' . wp_get_attachment_image( $attachment->ID, 'full' ) . '</div>';
			}
		?>
</div>

<div class="add-top-half"></div>