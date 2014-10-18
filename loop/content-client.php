<?php $url = get_post_meta( $post->ID, '_ebor_client_url', true ); ?>

<article class="col-md-3 text-center client-logo no-gutter">
	<div class="client-logo-inner">
		<?php 
			if( $url )
				echo '<a href="'.esc_url( $url ).'" target="_blank">';
					
					the_post_thumbnail('full', array('class' => 'img-responsive'));
			
			if( $url ) 
				echo '</a>'; 
		?>
	</div>
</article>