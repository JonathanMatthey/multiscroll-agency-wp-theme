<?php
/** A simple text block **/
class AQ_Ebor_Text_Block extends AQ_Block {
	
	//set and create block
	function __construct() {
		$block_options = array(
			'name' => 'Text',
			'size' => 'span6',
			'block_icon' => '<i class="fa fa-font"></i>',
			'block_description' => 'Use to add Text,<br />HTML or shortcodes.'
		);
		
		//create the block
		parent::__construct('aq_ebor_text_block', $block_options);
	}
	
	function form($instance) {
		
		$defaults = array(
			'text' => '',
			'wpautop' => 0,
			'code_display' => 0,
			'textcenter' => 0
		);
		
		$instance = wp_parse_args($instance, $defaults);
		extract($instance);
	?>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('title') ?>">
				Title (optional)
				<?php echo aq_field_input('title', $block_id, $title, $size = 'full') ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('text') ?>">
				Content
				<?php echo aq_field_textarea('text', $block_id, $text, $size = 'full', true) ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('wpautop') ?>">
				Disable Auto Paragraphs? <code>wpautop</code><br/>
				<?php echo aq_field_checkbox('wpautop', $block_id, $wpautop) ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('textcenter') ?>">
				Center Text?
				<?php echo aq_field_checkbox('textcenter', $block_id, $textcenter) ?>
			</label>
		</p>
		
	<?php
	}// end form
	
	function block($instance) {
		extract($instance);
		
			if( !(isset( $textcenter )) )
				$textcenter = 0;
				
			if( $textcenter == 1 )
				echo '<div class="text-center">';

			if($title)
				echo '<h3 class="sub-heading">' . $title . '</h3>';

			if($wpautop){
				echo do_shortcode(htmlspecialchars_decode($text));
			} else {
				echo wpautop(do_shortcode(htmlspecialchars_decode($text)));
			}
			
			if( $textcenter == 1 )
				echo '</div>';

	}//end block
	
}//end class