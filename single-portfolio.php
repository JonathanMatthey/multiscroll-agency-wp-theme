<?php 
	get_header();
	the_post();
	
	$content = (!( 'on' == get_post_meta($post->ID, '_ebor_disable_footer', 1) )) ? 'content' : false;
	$client = get_post_meta( $post->ID, '_ebor_the_client_url', true );
	
	ebor_reflex_page_header( get_the_title(), get_post_meta($post->ID, '_ebor_the_subtitle', 1), get_post_meta($post->ID, '_ebor_header_background', 1) );
?>

<!-- start content, closing div missing on purpose (called in footer) -->
<div id="content">

	<section class="single-project-container">
		<div class="row">
			<article class="col-md-8 col-md-offset-2 single-project-content silver-bg text-left">
				<div class="row">
					<article class="single-project-content-inner col-md-12 white-bg text-left">
		
						<?php
							get_template_part('inc/content','portfolio-slider');
							get_template_part('inc/content','portfolio-images');
							get_template_part('inc/content','portfolio-video');
						?>
						
						<div id="portfolio-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php
								the_content();
								wp_link_pages();
							?>
							<?php if( $client ) : ?>
								<div class="trigger-button add-top-quarter">
									<a class="btn btn-reflex btn-reflex-dark" href="<?php echo esc_url($client); ?>" target="_blank"><?php echo $client; ?></a>
								</div>
							<?php endif; ?>
						</div>
		
					</article>
				</div>
			</article>
		</div>
	</section>

<?php get_footer( $content );