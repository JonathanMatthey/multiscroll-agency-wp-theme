<?php
	get_header();
	the_post();

	$content = (!( 'on' == get_post_meta($post->ID, '_ebor_disable_footer', 1) )) ? 'content' : false;

	// echo ebor_reflex_page_header( get_the_title(), get_post_meta($post->ID, '_ebor_the_subtitle', 1), get_post_meta($post->ID, '_ebor_header_background', 1) );
?>

<div id="content">
<!-- 			<article class="col-md-8 col-md-offset-2 single-project-content silver-bg text-left">
				<div class="row"> -->
					<!-- <article id="page-<?php the_ID(); ?>" <?php post_class('single-project-content-inner col-md-12 white-bg text-left'); ?>> -->
						<?php
							the_content();
							wp_link_pages();
						?>
					<!-- </article> -->
<!-- 				</div>
			</article> -->

<?php get_footer( $content );