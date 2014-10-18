<?php

class AQ_Call_To_Action_Block extends AQ_Block {
	
	//set and create block
	function __construct() {
		$block_options = array(
			'name' => 'Call to Action',
			'size' => 'span12',
			'block_icon' => '<i class="icon-picons-font"></i>',
			'block_description' => 'Use to add Text<br />HTML or shortcodes.'
		);
		
		//create the block
		parent::__construct('aq_call_to_action_block', $block_options);
	}//end construct
	
	function form($instance) {
		$defaults = array(
			'text' => '',
			'url' => ''
		);
		$instance = wp_parse_args($instance, $defaults);
		extract($instance);
	?>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('title') ?>">
				Title <code>Optional</code>
				<?php echo aq_field_input('title', $block_id, $title, $size = 'full') ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('text') ?>">
				Link Text
				<?php echo aq_field_input('text', $block_id, $text, $size = 'full') ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('url') ?>">
				Link URL
				<?php echo aq_field_input('url', $block_id, $url, $size = 'full') ?>
			</label>
		</p>
		
	<?php
	}// end form
	
	function block($instance) {
		extract($instance);
	?>
		
		<section class="container color-bg text-center">
			<div class="row">
				<article class="col-md-12 team-job text-center pad-top pad-bottom">
					
					<?php if( $title ) : ?>
						<h3 class="main-heading black"><?php echo htmlspecialchars_decode($title); ?></h3>
					<?php endif; ?>
					
					<?php if( $text ) : ?>
						<div class="trigger-button add-top-quarter">
							<a class="btn btn-reflex btn-reflex-dark" href="<?php echo esc_url($url); ?>"><?php echo htmlspecialchars_decode($text); ?></a>
						</div>
					<?php endif; ?>
					
				</article>
			</div>
		</section>
		
	<?php
	}//end block
	
}//end class