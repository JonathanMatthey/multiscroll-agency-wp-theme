<div class="news-item-inner text-left">

	<p class="white"><span class="black-bg"><?php the_time( get_option('date_format') ); ?></span></p>
	<?php the_title('<h3 class="black">', '</h3>'); ?>
	
	<p class="dark"><?php echo get_the_excerpt(); ?></p>
	
	<div class="trigger-button add-top-quarter">
		<a class="btn btn-reflex btn-reflex-dark" href="<?php the_permalink(); ?>"><?php echo get_option('post_continue', 'Full Story'); ?></a>
	</div>
	
</div>