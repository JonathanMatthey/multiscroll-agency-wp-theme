<?php
class AQ_White_Squares_Block extends AQ_Block {

	//set and create block
	function __construct() {
		$block_options = array(
			'name' => 'White Squares',
			'size' => 'span12',
			'resizable' => false,
			'block_icon' => '<i class="fa fa-font"></i>',
			'block_description' => 'White Squares with<br />Background Image'
		);
		parent::__construct('aq_white_squares_block', $block_options);
	}

	function form($instance) {

		$defaults = array(
			'square1' => '',
			'square2' => '',
			'square3' => '',
			'square4' => '',
		);

		$instance = wp_parse_args($instance, $defaults);
		extract($instance);
	?>

		<p class="description">
			<label for="<?php echo $this->get_field_id('square1') ?>">
				Square 1
				<?php echo aq_field_textarea('square1', $block_id, $square1, $size = 'full', true) ?>
			</label>
		</p>
		<p class="description">
			<label for="<?php echo $this->get_field_id('square2') ?>">
				Square 2
				<?php echo aq_field_textarea('square2', $block_id, $square2, $size = 'full', true) ?>
			</label>
		</p>
		<p class="description">
			<label for="<?php echo $this->get_field_id('square3') ?>">
				Square 3 <code>Optional</code>
				<?php echo aq_field_textarea('square3', $block_id, $square3, $size = 'full', true) ?>
			</label>
		</p>
		<p class="description">
			<label for="<?php echo $this->get_field_id('square4') ?>">
				Square 4 <code>Optional</code>
				<?php echo aq_field_textarea('square4', $block_id, $square4, $size = 'full', true) ?>
			</label>
		</p>

	<?php
	}// end form

	function block($instance) {
		extract($instance);
	?>

		<section class="container page-head white-squares white-bg">
		  <div class="row">
		          <article class="col-md-8 col-md-offset-2 text-center">
		                <div class="inner-pad">
		                    <?php
		                    	if( $square1 )
		                    		echo '<h1 class=""><span>'. htmlspecialchars_decode($square1) .'</span></h1>';

		                    	echo wpautop(do_shortcode(htmlspecialchars_decode($text)));
		                    ?>
		                </div>
		          </article>
		  </div>
		</section>

	<?php
	}//end block

}//end class