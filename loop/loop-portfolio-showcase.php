<?php 
	$before = '<div class="ms-left">';
	$before_right = '<div class="ms-right">';
	$after = '</div>';
	$i = 0;
?>

<div class="container fullwidth-forced">
	<div id="myContainer">
		
		<div class="ms-left">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
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
				rewind_posts();
			?> 
		</div>
		
		<div class="ms-right">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				
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
			?> 
		</div>
	
	</div><!-- myContainer ends -->
</div><!-- end container -->