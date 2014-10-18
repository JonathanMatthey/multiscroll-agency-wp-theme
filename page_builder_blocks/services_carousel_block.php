<?php

class AQ_Services_Carousel_Block extends AQ_Block {
	
	//set and create block
	function __construct() {
		$block_options = array(
			'name' => 'Services Carousel',
			'size' => 'span12',
			'resizable' => 0,
			'block_description' => 'Add a carousel of<br />testimonials to the page.'
		);
		parent::__construct('aq_services_carousel_block', $block_options);
	}//end construct
	
	function form($instance) {
		$defaults = array();
		$instance = wp_parse_args($instance, $defaults);
	}//end form
	
	function block($instance) {
		$i = 0;
		
		$query_args = array(
			'post_type' => 'service',
			'posts_per_page' => '-1'
		);
		
		/**
		 * Build the query.
		 */
		$portfolio_query = new WP_Query( $query_args );
	?>

		<section class="service-container">
			
				<div id="service-carousel" class="service-carousel owl-carousel">
					
					<?php 
						if ( $portfolio_query->have_posts() ) : while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
						$i++;
					?>
					
					<div class="service-carousel-item text-center <?php echo ( $i % 2 == 0 ) ? 'white-bg' : 'silver-bg'; ?>">
						<a data-service-details-expand="<?php echo $i; ?>" href="#">
							<?php 
								the_post_thumbnail('full');
								the_title('<h5 class="inner-heading"><span class="dark">', '</span></h5>'); 
							?>
						</a>
						<div class="triangle-arrow triangle-arrow-up active-service"></div>
					</div>
					
					<?php 
						endwhile;	
						else : 
							
							/**
							 * Display no posts message if none are found.
							 */
							get_template_part('loop/content','none');
							
						endif;
						wp_reset_query();
					?> 
			
				</div><!-- service-carousel:ends -->
	
				<div id="service-details-wrap" class="black-bg service-details-wrap pad-top pad-bottom">
					<div class="container">
						<div class="row">
							<ul class="service-details-switcher">
								
								<?php 
									$query_args = array(
										'post_type' => 'service',
										'posts_per_page' => '-1'
									);
									
									/**
									 * Build the query.
									 */
									$portfolio_query = new WP_Query( $query_args );
									
									$i = 0;
									if ( $portfolio_query->have_posts() ) : while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
									global $post;
									$i++;
								?>
								
								<li id="service-details-<?php echo $i; ?>"  class="service-details col-md-8 col-md-offset-2">
									<article class="text-center">
										<?php 
											the_title('<h3 class="sub-heading white">', '</h3>'); 
											the_content();
										?>
										
										<?php if( get_post_meta($post->ID, '_ebor_button_url', 1) ) : ?>
										<div class="trigger-button add-top-quarter">
											<a href="<?php echo esc_url( get_post_meta($post->ID, '_ebor_button_url', 1)  ); ?>" class="btn btn-reflex btn-reflex-white" >
												<?php echo get_post_meta($post->ID, '_ebor_button_text', 1); ?>
											</a>
										</div>
										<?php endif; ?>
										
									</article>
								</li>
								
								<?php 
									endwhile;	
									else : 
										
										/**
										 * Display no posts message if none are found.
										 */
										get_template_part('loop/content','none');
										
									endif;
									wp_reset_query();
								?> 
							
							</ul>
						</div>
					</div><!-- container : ends -->
				</div><!-- inner-section : ends -->
		
		</section>
				
	<?php	
	}//end block
	
}//end class