<?php 
	/**
	 * Make sure we can access post data easily.
	 */
	global $post;
	
	/**
	 * Setup variables needed for the gallery
	 */
	$attachments = get_post_meta( $post->ID, '_ebor_portfolio_images', true );
	
	if( empty( $attachments ) )
		return false;
?>

<div class="single-project-blocks-wrap">

	<div class="row">
		<?php
			$i = 0;
			foreach( $attachments as $ID ) :
				$attachment = get_post($ID);
				$i++;
				
				$url = wp_get_attachment_image_src( $attachment->ID, 'full' );
		?>
		
			<article class="col-md-6 single-project-block">
				<div class="color-bg">
					<a class="venobox" data-gall="portfolio-gallery" href="<?php echo $url[0]; ?>">
						<?php echo wp_get_attachment_image( $attachment->ID, 'large', false, array('class' => 'img-responsive') ); ?>
						<div class="zoom-icon-wrap"></div>    
					</a>
				</div>
			</article>
		
		<?php 
			if( $i % 2 == 0 )
				echo '</div><div class="row add-top-quarter">';
				
			endforeach; 
		?></div>

</div>

<div class="add-top-half"></div>