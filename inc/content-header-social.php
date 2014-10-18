<?php $protocols = array(  'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet', 'skype' ); ?>

<ul class="social-wrap">
	<?php 
		for( $i = 0; $i < 7; $i++ ){
			if( get_option("header_social_link_$i") ) {
				echo '<li><a href="' . esc_url(get_option("header_social_link_$i"), $protocols) . '" target="_blank">
						  <i class="fa ' . get_option("header_social_$i") . '"></i>
					  </a></li>';
			}
		} 
	?>
</ul>