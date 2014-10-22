<?php
	$job = get_post_meta( $post->ID, '_ebor_the_job_title', true );
?>

<article class="col-md-2 no-gutter team-info white-bg text-center">
	<div class="triangle-arrow triangle-arrow-left"></div>

	<div class="valign">
		<?php
			the_title('<h3 class="sub-heading dark"><a href="'. get_permalink() .'">', '</a></h3>');

			if( $job )
				echo '<h6><span>'. $job .'</span></h6>';

			the_excerpt();
			get_template_part('inc/content','team-social');
		?>
	</div>

</article>

<article class="col-md-2 no-gutter team-thumb silver-bg text-center">
	<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
</article>