<?php 
	$url = get_post_meta( $post->ID, '_ebor_client_url', true ); 
	$sub = get_post_meta( $post->ID, '_ebor_the_subtitle', true ); 
?>

<div class="awards-item text-center white-bg">
	<?php 
		if( $url )
			echo '<a class="text-center" href="'.esc_url( $url ).'" target="_blank">';
				
				the_post_thumbnail('full', array('class' => 'img-responsive'));
		
		if( $url ) 
			echo '</a>'; 
			
		the_title('<h3>', '</h3>');
		
		if( $sub )
			echo '<h1><span>'. $sub .'</span></h1>';
	?>
</div>