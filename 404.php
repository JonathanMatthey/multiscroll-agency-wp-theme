<?php
	/**
	 * This is the 404 error template for the theme.
	 * 
	 * @author TommusRhodus
	 * @since v1.0.0
	 */
	get_header();
?>

<section class="container page-head contact-head">
	<div class="row">
		<article class="col-md-12 text-center">
			<div class="inner-pad trans-dark-low">
				<h1 class="black"><span class="color-bg"><?php _e("That's strange!", 'reflex'); ?></span></h1>
			</div>
		</article>
	</div>
</section>

<div id="content">
    
	<section class="container error-content-container text-center">
		<div class="row">
		
			<article class="error-content-inner equal-height inner-pad col-md-6 black-bg text-left">
				<div class="valign">
					<h2 class="dark"><?php _e('404', 'reflex'); ?></h2>
				</div>
			</article>
			
			<article class="error-content-inner equal-height inner-pad col-md-6 white-bg text-left">
				<div class="valign">
					<h3 class="sub-heading"><?php _e('The page you are looking for is not found here.', 'reflex'); ?></h3>
					<a href="<?php echo home_url(); ?>"><?php _e('Go to Homepage', 'reflex'); ?></a>
				</div>
			</article>
			
		</div>
	</section>
	
<?php get_footer('content');