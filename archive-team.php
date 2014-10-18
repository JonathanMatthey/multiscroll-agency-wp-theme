<?php 
	get_header();
	$i = 0;
?>

<div id="content">

	<section class="team-container">
	
		<div class="row">
			
			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					$i++;
					
					$direction = 'right';
					if( in_array($i, array(1,2,5,6,9,10,13,14,17,18,21,22)) )
						$direction = 'left';
					
					/**
					 * Get blog posts by blog layout.
					 */
					get_template_part('loop/content', 'team-' . $direction);
				
				endwhile;	
				else : 
					
					/**
					 * Display no posts message if none are found.
					 */
					get_template_part('loop/content','none');
					
				endif;
			?> 
		
		</div>
	
	</section>

<?php get_footer('content');