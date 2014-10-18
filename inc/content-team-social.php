<?php 
	global $post;
	
	$protocols = array(  'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet', 'skype' );

	$icons = array(
     	get_post_meta( $post->ID, '_ebor_team_social_icon_1', true ), 
     	get_post_meta( $post->ID, '_ebor_team_social_icon_2', true ),
     	get_post_meta( $post->ID, '_ebor_team_social_icon_3', true ), 
     	get_post_meta( $post->ID, '_ebor_team_social_icon_4', true )
 	);
 	
 	$urls = array(
		esc_url(get_post_meta( $post->ID, '_ebor_team_social_icon_1_url', true ), $protocols), 
		esc_url(get_post_meta( $post->ID, '_ebor_team_social_icon_2_url', true ), $protocols),
		esc_url(get_post_meta( $post->ID, '_ebor_team_social_icon_3_url', true ), $protocols), 
		esc_url(get_post_meta( $post->ID, '_ebor_team_social_icon_4_url', true ), $protocols)
	);
	
	$urls = array_filter(array_map(NULL, $urls)); 
?>
  
<div class="team-social">
   <?php foreach ($urls as $index => $url ) : ?>
   	   <span><a href="<?php echo $url; ?>" target="_blank"><i class="fa <?php echo $icons[$index]; ?>"></i></a></span>
   <?php endforeach; ?>
</div>