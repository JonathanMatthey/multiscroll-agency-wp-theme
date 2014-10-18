<?php

class AQ_Clients_Carousel_Block extends AQ_Block {
	
	//set and create block
	function __construct() {
		$block_options = array(
			'name' => 'Clients Carousel',
			'size' => 'span12',
			'resizable' => 0,
			'block_description' => 'Add a carousel of<br />testimonials to the page.'
		);
		parent::__construct('aq_clients_carousel_block', $block_options);
	}//end construct
	
	function form($instance) {
		$defaults = array(
			'filter' => 'all',
			'type' => 'grid',
			'pppage' => 8
		);
		
		$instance = wp_parse_args($instance, $defaults);
		extract($instance);
		
		$args = array(
			'orderby'                  => 'name',
			'hide_empty'               => 0,
			'hierarchical'             => 1,
			'taxonomy'                 => 'client-category'
		); 
			
		$filter_options = get_categories( $args );
		
		$portfolio_types = array(
			'grid' => 'Clients Grid',
			'carousel' => 'Clients Carousel'
		);
	?>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('type') ?>">
				Display Style
				<?php echo aq_field_select('type', $block_id, $portfolio_types, $type) ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('pppage') ?>">
				Posts Per Page
				<?php echo aq_field_input('pppage', $block_id, $pppage, $size = 'full', $type = 'number') ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('filter') ?>">
				Show Clients from a specific category?<br />
				<?php echo ebor_portfolio_field_select('filter', $block_id, $filter_options, $filter) ?>
			</label>
		</p>
	
	<?php
	}//end form
	
	function block($instance) {
		extract($instance);
		
		$query_args = array(
			'post_type' => 'client',
			'posts_per_page' => $pppage
		);
		
		if (!( $filter == 'all' )) {
			if( function_exists( 'icl_object_id' ) ){
				$filter = (int)icl_object_id( $filter, 'client-category', true);
			}
			$query_args['tax_query'] = array(
				array(
					'taxonomy' => 'client-category',
					'field' => 'id',
					'terms' => $filter
				)
			);
		}
	
		$clients_query = new WP_Query( $query_args );
		
		if( 'carousel' == $type ) :
	?>
		
		<div class="awards-container">
			<div id="awards-carousel" class="awards-carousel owl-carousel">
				<?php
					if ( $clients_query->have_posts() ) : while ( $clients_query->have_posts() ) : $clients_query->the_post(); 
					
						/**
						 * Display no posts message if none are found.
						 */
						get_template_part('loop/content','award');
					
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
		</div>
		
	<?php else : ?>
	
		<div class="clients-container">
			<div class="row client-logo-row"><?php
					$i = 0;
					if ( $clients_query->have_posts() ) : while ( $clients_query->have_posts() ) : $clients_query->the_post(); 
					
						$i++;
					
						/**
						 * Display no posts message if none are found.
						 */
						get_template_part('loop/content','client');
					
						if( $i % 4 == 0 )
							echo '</div><div class="row client-logo-row">';
						
					endwhile;
					else : 
						
						/**
						 * Display no posts message if none are found.
						 */
						get_template_part('loop/content','none');
						
					endif;
					wp_reset_query();
				?></div>
		</div>
			
	<?php
	endif;
		
	}//end block
	
}//end class