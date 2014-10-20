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
			'bg_image' => '',
			'block1_title' => '',
			'block1_content' => '',
			'square2_title' => '',
			'square2_content' => '',
			'square3_title' => '',
			'square3_content' => '',
			'square4_title' => '',
			'square4_content' => ''
			);

		$instance = wp_parse_args($instance, $defaults);
		extract($instance);
		?>

		<p class="description">
			<label for="<?php echo $this->get_field_id('bg_image') ?>">
				Upload Background Image
				<?php echo aq_field_upload('bg_image', $block_id, $bg_image, $media_type = 'image') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('block1_title') ?>">
				Square 1 - Title
				<?php echo aq_field_input('block1_title', $block_id, $block1_title, $size = 'full') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('block1_content') ?>">
				Square 1 - Content
				<?php echo aq_field_textarea('block1_content', $block_id, $block1_content, $size = 'full', true) ?>
			</label>
		</p>
		<p class="description">
			<label for="<?php echo $this->get_field_id('square2_title') ?>">
				Square 2 - Title
				<?php echo aq_field_input('square2_title', $block_id, $square2_title, $size = 'full') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('square2_content') ?>">
				Square 2 - Content  <code>Optional</code>
				<?php echo aq_field_textarea('square2_content', $block_id, $square2_content, $size = 'full', true) ?>
			</label>
		</p>
		<p class="description">
			<label for="<?php echo $this->get_field_id('square3_title') ?>">
				Square 3 - Title  <code>Optional</code>
				<?php echo aq_field_input('square3_title', $block_id, $square3_title, $size = 'full') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('square3_content') ?>">
				Square 3 - Content  <code>Optional</code>
				<?php echo aq_field_textarea('square3_content', $block_id, $square3_content, $size = 'full', true) ?>
			</label>
		</p>
		<p class="description">
			<label for="<?php echo $this->get_field_id('square4_title') ?>">
				Square 4 - Title  <code>Optional</code>
				<?php echo aq_field_input('square4_title', $block_id, $square4_title, $size = 'full') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('square4_content') ?>">
				Square 4 - Content  <code>Optional</code>
				<?php echo aq_field_textarea('square4_content', $block_id, $square4_content, $size = 'full', true) ?>
			</label>
		</p>

		<?php
	}// end form

	function block($instance) {
		extract($instance);
		?>

	<section class="main-section-with-bg" <?php if($bg_image) { echo 'style="background-image:url('.$bg_image.')"';}?> >
		<div class="row">
			<section class="container full-img-bg white-squares-container">
				<div class="trans-bg-dark col-md-10 col-md-offset-1">
					<?php
						if( $block1_title ){
							echo '<div class="row no-margin">';
							echo '	<article class="col-md-6 col-md-offset-6">';
							echo '		<div class="white-square"><h2>'. htmlspecialchars_decode($block1_title) . '</h2>';

							if( $block1_content ){
								echo '<div class="content">';
								echo wpautop(do_shortcode(htmlspecialchars_decode($block1_content)));
								echo '		</div>';
							}

							echo '		</div>';
							echo '	</article>';
							echo '</div>';
						}

						if( $square2_title ){
							echo '<div class="row no-margin">';
							echo '	<article class="col-md-6">';
							echo '		<div class="white-square"><h2>'. htmlspecialchars_decode($square2_title) . '</h2>';

							if( $square2_content ){
								echo '<div class="content">';
								echo wpautop(do_shortcode(htmlspecialchars_decode($square2_content)));
								echo '		</div>';
							}

							echo '		</div>';
							echo '	</article>';
							echo '</div>';
						}

						if( $square3_title ){
							echo '<div class="row no-margin">';
							echo '	<article class="col-md-6 col-md-offset-6">';
							echo '		<div class="white-square"><h2>'. htmlspecialchars_decode($square3_title) . '</h2>';

							if( $square3_content ){
								echo '<div class="content">';
								echo wpautop(do_shortcode(htmlspecialchars_decode($square3_content)));
								echo '		</div>';
							}

							echo '		</div>';
							echo '	</article>';
							echo '</div>';
						}

						if( $square4_title ){
							echo '<div class="row no-margin">';
							echo '	<article class="col-md-6">';
							echo '		<div class="white-square"><h2>'. htmlspecialchars_decode($square4_title) . '</h2>';

							if( $square4_content ){
								echo '<div class="content">';
								echo wpautop(do_shortcode(htmlspecialchars_decode($square4_content)));
								echo '		</div>';
							}

							echo '		</div>';
							echo '	</article>';
							echo '</div>';
						}
					?>
				</div>
			</section>
		</div>
	</section>

	<?php
	}//end block

}//end class