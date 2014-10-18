<?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>

<div class="news-item-inner text-left">

	<p class="white"><span class="black-bg"><?php the_time( get_option('date_format') ); ?></span></p>
	
	<?php the_title('<h1 class="black">', '</h1>'); ?>
	
	<div class="trigger-button add-top-quarter">
		<a class="btn btn-reflex btn-reflex-dark" href="<?php the_permalink(); ?>"><?php echo get_option('post_continue', 'Full Story'); ?></a>
	</div>
	
</div>