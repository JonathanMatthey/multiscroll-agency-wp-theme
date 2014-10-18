<?php 
	if ( get_post_meta( $post->ID, "_ebor_the_video_1", true ) )
		echo '<figure class="fitvids">' . wp_oembed_get( esc_url( get_post_meta( $post->ID, "_ebor_the_video_1", true ) ) ) . '</figure><div class="add-top-half"></div>';