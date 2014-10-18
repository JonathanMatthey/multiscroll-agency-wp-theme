<?php

class AQ_Portfolio_Block extends AQ_Block {
	
	//set and create block
	function __construct() {
		$block_options = array(
			'name' => 'Portfolio',
			'size' => 'span12',
			'resizable' => 0,
			'block_description' => 'Add your portfolio items<br />straight to the page.'
		);
		parent::__construct('aq_portfolio_block', $block_options);
	}//end construct
	
	function form($instance) {
		$defaults = array(
			'type' => 'grid',
			'pppage' => '999',
			'filter' => 'all'
		);
		
		$instance = wp_parse_args($instance, $defaults);
		extract($instance);
		
		$args = array(
			'orderby'                  => 'name',
			'hide_empty'               => 0,
			'hierarchical'             => 1,
			'taxonomy'                 => 'portfolio-category'
		); 
			
		$filter_options = get_categories( $args );
		
		$portfolio_types = array(
			'showcase' => 'Showcase Portfolio (Split Scroll)',
			'showcase-alt' => 'Showcase Portfolio (Split Scroll)(Alternate Layout)',
			'featured' => 'Featured Showcase (Loads 1st Post Only, use with category selector)',
			'masonry' => 'Masonry Portfolio',
			'grid' => 'Grid Portfolio'
		);
	?>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('type') ?>">
				Portfolio Style
				<?php echo aq_field_select('type', $block_id, $portfolio_types, $type) ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('pppage') ?>">
				Load how many items? 999 for all. <code>Note: The Portfolio is not Paged</code>
				<?php echo aq_field_input('pppage', $block_id, $pppage, $size = 'full', $type = 'number') ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('filter') ?>">
				Show a specific portfolio category?
				<?php echo ebor_portfolio_field_select('filter', $block_id, $filter_options, $filter) ?>
			</label>
		</p>
		
	<?php
	}//end form
	
	function block($instance) {
		extract($instance);
		
		$query_args = array(
			'post_type' => 'portfolio',
			'posts_per_page' => $pppage
		);
		
		if (!( $filter == 'all' )) {
			if( function_exists( 'icl_object_id' ) ){
				$filter = (int)icl_object_id( $filter, 'portfolio-category', true);
			}
			$query_args['tax_query'] = array(
				array(
					'taxonomy' => 'portfolio-category',
					'field' => 'id',
					'terms' => $filter
				)
			);
		}
		
		if( 'featured' == $type )
			$query_args['posts_per_page'] = '1';
		
		/**
		 * Build the query.
		 */
		$portfolio_query = new WP_Query( $query_args );
		
		/**
		 * Build filters.
		 */
		if( $filter == 'all' ){
			$cats = get_categories('taxonomy=portfolio-category');
		} else {
			$cats = get_categories('taxonomy=portfolio-category&exclude='. $filter .'&child_of='. $filter);
		}
		
		if( 'grid' == $type ) :
	?>
		
			<div id="works-container" class="works-container white-bg container clearfix">
			
				<?php 
					if ( $portfolio_query->have_posts() ) : while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
			
						/**
						 * Get blog posts by blog layout.
						 */
						get_template_part('loop/content', 'portfolio-grid');
					
					endwhile;	
					else : 
						
						/**
						 * Display no posts message if none are found.
						 */
						get_template_part('loop/content','none');
						
					endif;
					wp_reset_query();
				?> 
			
			</div>
			
	<?php
		elseif( 'masonry' == $type ) :
	?>
		
			<div id="works-container" class="works-container white-bg container clearfix">
			
				<?php 
					if ( $portfolio_query->have_posts() ) : while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
			
						/**
						 * Get blog posts by blog layout.
						 */
						get_template_part('loop/content', 'portfolio-masonry');
					
					endwhile;	
					else : 
						
						/**
						 * Display no posts message if none are found.
						 */
						get_template_part('loop/content','none');
						
					endif;
					wp_reset_query();
				?> 
			
			</div>
			
	<?php
		elseif( 'showcase' == $type ) :
			$before = '<div class="ms-left">';
			$before_right = '<div class="ms-right">';
			$after = '</div>';
			$i = 0;
	?>
		
			<div class="container fullwidth-forced">
				<div id="myContainer">
					
					<div class="ms-left">
						<?php 
							if ( $portfolio_query->have_posts() ) : while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
							$i++;
							
							if( $i % 2 == 0 )
								continue;
								
									/**
									 * Get blog posts by blog layout.
									 */
									get_template_part('loop/content', 'portfolio-showcase');
							
							endwhile;	
							else : 
								
								/**
								 * Display no posts message if none are found.
								 */
								get_template_part('loop/content','none');
								
							endif;
							wp_reset_query();
						?> 
					</div>
					
					<div class="ms-right">
						<?php 
							$query_args = array(
								'post_type' => 'portfolio',
								'posts_per_page' => $pppage
							);
							
							if (!( $filter == 'all' )) {
								if( function_exists( 'icl_object_id' ) ){
									$filter = (int)icl_object_id( $filter, 'portfolio-category', true);
								}
								$query_args['tax_query'] = array(
									array(
										'taxonomy' => 'portfolio-category',
										'field' => 'id',
										'terms' => $filter
									)
								);
							}
							
							/**
							 * Build the query.
							 */
							$portfolio_query = new WP_Query( $query_args );
							
							$i = 0;
							
							if ( $portfolio_query->have_posts() ) : while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
							
							$i++;
							
							if(!( $i % 2 == 0 ))
								continue;
								
									/**
									 * Get blog posts by blog layout.
									 */
									get_template_part('loop/content', 'portfolio-showcase');
							
							endwhile;	
							else : 
								
								/**
								 * Display no posts message if none are found.
								 */
								get_template_part('loop/content','none');
								
							endif;
							wp_reset_query();
						?> 
					</div>
				
				</div><!-- myContainer ends -->
			</div><!-- end container -->
	
	<?php
		elseif( 'showcase-alt' == $type ) :
	?>
			
			<div class="container fullwidth-forced">
				<div id="myContainer" class="split-home-panel">
					
					<div class="ms-left">
						<?php 
							if ( $portfolio_query->have_posts() ) : while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
								
									/**
									 * Get blog posts by blog layout.
									 */
									get_template_part('loop/content', 'portfolio-showcase-alt-left');
							
							endwhile;	
							else : 
								
								/**
								 * Display no posts message if none are found.
								 */
								get_template_part('loop/content','none');
								
							endif;
							wp_reset_query();
						?> 
					</div>
					
					<?php
						$query_args = array(
							'post_type' => 'portfolio',
							'posts_per_page' => $pppage
						);
						
						if (!( $filter == 'all' )) {
							if( function_exists( 'icl_object_id' ) ){
								$filter = (int)icl_object_id( $filter, 'portfolio-category', true);
							}
							$query_args['tax_query'] = array(
								array(
									'taxonomy' => 'portfolio-category',
									'field' => 'id',
									'terms' => $filter
								)
							);
						}
						
						/**
						 * Build the query.
						 */
						$portfolio_query = new WP_Query( $query_args );
					?>
					
					<div class="ms-right">
						<?php 
							if ( $portfolio_query->have_posts() ) : while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
								
									/**
									 * Get blog posts by blog layout.
									 */
									get_template_part('loop/content', 'portfolio-showcase-alt-right');
							
							endwhile;	
							else : 
								
								/**
								 * Display no posts message if none are found.
								 */
								get_template_part('loop/content','none');
								
							endif;
							wp_reset_query();
						?> 
					</div>
				
				</div><!-- myContainer ends -->
			</div><!-- end container -->
			
	<?php
		elseif( 'featured' == $type ) :
		
			if ( $portfolio_query->have_posts() ) : while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post();
			global $post;
			
			$url = get_post_meta($post->ID, '_ebor_showcase_left', 1);
			$url_right = get_post_meta($post->ID, '_ebor_showcase_right', 1);
	?>
			
				<section class="container home-06-container text-center">
					<div class="row">
						
						<article class="fullheight inner-pad col-md-6 white-bg bg-cover no-parallax" style="background-image: url(<?php echo $url; ?>);"></article>
						
						<article class="fullheight home-06-right-background inner-pad col-md-6 white-bg text-left bg-cover no-parallax" style="background-image: url(<?php echo $url_right; ?>);">
							<div class="valign">
								<h2><span class="white-bg dark"><?php echo get_post_meta($post->ID, '_ebor_the_subtitle', 1); ?></span></h2>
								<div class="trigger-button add-top-quarter">
									<a class="btn btn-reflex btn-reflex-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
							</div>
						</article>
					
					</div>
				</section>

	<?php
			endwhile;	
			else : 
				
				/**
				 * Display no posts message if none are found.
				 */
				get_template_part('loop/content','none');
				
			endif;
			wp_reset_query();
		
		endif;
	}//end block
	
}//end class