<?php
class AQ_Agency_Head_Block extends AQ_Block {
	
	//set and create block
	function __construct() {
		$block_options = array(
			'name' => 'Agency Head',
			'size' => 'span12',
			'resizable' => false,
			'block_icon' => '<i class="fa fa-font"></i>',
			'block_description' => 'Use to add Text,<br />HTML or shortcodes.'
		);
		parent::__construct('aq_agency_head_block', $block_options);
	}
	
	function form($instance) {
		
		$defaults = array(
			'text' => '',
			'subtitle' => '',
			'image' => ''
		);
		
		$instance = wp_parse_args($instance, $defaults);
		extract($instance);
	?>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('image') ?>">
				Upload Image <code>Optional</code>
				<?php echo aq_field_upload('image', $block_id, $image, $media_type = 'image') ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('title') ?>">
				Title (optional)
				<?php echo aq_field_input('title', $block_id, $title, $size = 'full') ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('subtitle') ?>">
				Subtitle (optional)
				<?php echo aq_field_input('subtitle', $block_id, $subtitle, $size = 'full') ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('text') ?>">
				Content
				<?php echo aq_field_textarea('text', $block_id, $text, $size = 'full', true) ?>
			</label>
		</p>

	<?php
	}// end form
	
	function block($instance) {
		extract($instance);
	?>
		
		<section class="container page-head agency-head white-bg">
		  <div class="row">
		          <article class="col-md-8 col-md-offset-2 text-center">
		                <div class="inner-pad">
		                    <?php	
		                    	if( $image )
		                    		echo '<img alt="'. $title .'" src="'. $image .'"/>';
		                    		
		                    	if( $title )
		                    		echo '<h1 class="black main-heading remove-bottom"><span>'. htmlspecialchars_decode($title) .'</span></h1>';
		                    		
		                    	if( $subtitle )
		                    		echo '<h3 class="black sub-heading"><span class="color-bg">'. htmlspecialchars_decode($subtitle) .'</span></h3>';
		                    		
		                    	echo wpautop(do_shortcode(htmlspecialchars_decode($text)));
		                    ?>
		                </div>
		          </article>
		  </div>
		</section>
		
	<?php
	}//end block
	
}//end class