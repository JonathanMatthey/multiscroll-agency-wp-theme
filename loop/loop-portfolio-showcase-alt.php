<div class="container fullwidth-forced">
	<div id="myContainer" class="split-home-panel">
		
		<div class="ms-left">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					
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
				rewind_posts();
			?> 
		</div>
		
		<div class="ms-right">
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					
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
			?> 
		</div>
	
	</div><!-- myContainer ends -->
</div><!-- end container -->