<?php 
	/**
	 * The single post template for the Reflex theme.
	 */
	get_header();
	the_post();
	
	$content = (!( 'on' == get_post_meta($post->ID, '_ebor_disable_footer', 1) )) ? 'content' : false;
	
	$post_details = array(
		'layout' => get_post_meta($post->ID, '_ebor_single_post_layout', 1)
	);
	
	if(empty( $post_details['layout'] )){
    	add_post_meta($post->ID, '_ebor_single_post_layout', 'standard-sidebar');
    	$post_details['layout'] = 'standard-sidebar';
    }
	
	ebor_reflex_page_header( get_the_title(), false, get_post_meta($post->ID, '_ebor_header_background', 1) );
?>

<!-- start content, closing div missing on purpose (called in footer) -->
<div id="content">
    
	<section class="container news-post-container text-center">
		<div class="row">
		
			<?php get_template_part('inc/content-post-single', $post_details['layout']); ?>
			
			<?php if( comments_open() ) : ?>
				<article class="inner-pad col-md-12 silver-bg text-left">
					<?php comments_template();?>
				</article>
			<?php endif; ?>
			
		</div>
	</section>
	
<?php get_footer( $content );