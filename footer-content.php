<?php
	if( 'no' == get_option('disable_footer', 'no') )
		get_template_part('inc/content','footer');
?>

</div><!-- end content -->
</div><!-- end wrap -->
</section><!-- end mast-wrap -->


<?php
	if( get_option('footer_button_url') )
		get_template_part('inc/content','footer-button');

	wp_footer();
?>

</body>
</html>