<?php
	if( get_option('slideout_shortcode') )
		echo do_shortcode( get_option('slideout_shortcode') ); 
?>

<footer class="container master-footer">
	<div class="row">
		
		<?php
			if( is_active_sidebar('footer1') && !( is_active_sidebar('footer2') ) && !( is_active_sidebar('footer3') ) && !( is_active_sidebar('footer4') ) ){
				echo '<div class="col-md-12 footer-column white-bg"><div class="valign">';
				dynamic_sidebar('footer1');
				echo '</div></div>';
			}
				
			if( is_active_sidebar('footer2') && !( is_active_sidebar('footer3') ) && !( is_active_sidebar('footer4') ) ){
				echo '<div class="col-md-6 footer-column white-bg"><div class="valign">';
					dynamic_sidebar('footer1');
				echo '</div></div><div class="col-md-6 footer-column black-bg"><div class="valign">';
					dynamic_sidebar('footer2');
				echo '</div></div><div class="clear"></div>';
			}
				
			if( is_active_sidebar('footer3') && !( is_active_sidebar('footer4') ) ){
				echo '<div class="col-md-4 footer-column white-bg"><div class="valign">';
					dynamic_sidebar('footer1');
				echo '</div></div><div class="col-md-4 footer-column black-bg"><div class="valign">';
					dynamic_sidebar('footer2');
				echo '</div></div><div class="col-md-4 footer-column white-bg"><div class="valign">';
					dynamic_sidebar('footer3');
				echo '</div></div><div class="clear"></div>';
			}
			
			if( ( is_active_sidebar('footer4') ) ){
				echo '<div class="col-md-3 footer-column white-bg"><div class="valign">';
					dynamic_sidebar('footer1');
				echo '</div></div><div class="col-md-3 footer-column black-bg"><div class="valign">';
					dynamic_sidebar('footer2');
				echo '</div></div><div class="col-md-3 footer-column white-bg"><div class="valign">';
					dynamic_sidebar('footer3');
				echo '</div></div><div class="col-md-3 footer-column black-bg"><div class="valign">';
					dynamic_sidebar('footer4');
				echo '</div></div><div class="clear"></div>';
			}
		?>

	</div>
</footer>