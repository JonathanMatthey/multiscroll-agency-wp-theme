<?php

class AQ_Wide_White_Content_Block extends AQ_Block {

	//set and create block
	function __construct() {
		$block_options = array(
			'name' => 'Wide White Blocks',
			'size' => 'span12',
			'block_icon' => '<i class="icon-picons-font"></i>',
			'block_description' => '1 column white blocks <br/> with bg img'
		);

		//create the block
		parent::__construct('aq_wide_white_content_block', $block_options);
	}//end construct

	function form($instance) {

		/**
		 * Get all revsliders and load into an array.
		 */
		global $wpdb;
		$table_name = $wpdb->prefix . 'revslider_sliders';
		$sliders = $wpdb->get_results( "SELECT id, title, alias FROM $table_name" );
		$amount = count($sliders);
		$slider_choices = array();
		if( is_array($sliders) ){
			for( $i = 0; $i < $amount; $i++ ){
				$slider_choices[$sliders[$i]->alias] = $sliders[$i]->title;
			}
		}

		/**
		 * Build defaults and instance for this block.
		 */
		$defaults = array(
			'page_title' => '',
			'block1_index' => '',
			'block1_title' => '',
			'block1_content' => '',
			'block1_index' => '',
			'video_type' => 'vimeo',
			'block2_video_id' => '',
			'block2_index' => '',
			'block2_title' => '',
			'block2_content' => '',
			'block2_index' => '',
			'block2_video_id' => '',
			'block3_video_id' => '',
			'block3_index' => '',
			'block3_title' => '',
			'block3_content' => '',
			'block3_index' => '',
			'block3_video_id' => ''
		);
		$instance = wp_parse_args($instance, $defaults);
		extract($instance);

		$video_types = array(
			'vimeo' => 'Vimeo'
			// ,			'youtube' => 'Youtube'
		);

	?>

		<p class="description">
			<label for="<?php echo $this->get_field_id('page_title') ?>">
				Page Title
				<?php echo aq_field_input('page_title', $block_id, $page_title, $size = 'full') ?>
			</label>
		</p>
		<p class="description">
			<label for="<?php echo $this->get_field_id('bg_image') ?>">
				Upload Background Image
				<?php echo aq_field_upload('bg_image', $block_id, $bg_image, $media_type = 'image') ?>
			</label>
		</p>

		<br/>
		<br/>

		<h4>Block 1</h4>
		<p class="description">
			<label for="<?php echo $this->get_field_id('block1_index') ?>">
				Index / Date
				<?php echo aq_field_input('block1_index', $block_id, $block1_index, $size = 'full') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('block1_title') ?>">
				Title
				<?php echo aq_field_input('block1_title', $block_id, $block1_title, $size = 'full') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('block1_content') ?>">
				Content
				<?php echo aq_field_textarea('block1_content', $block_id, $block1_content, $size = 'full', true) ?>
			</label>
		</p>

		<p class="description" style="display:none;">
			<label for="<?php echo $this->get_field_id('video_type') ?>">
				Video Source Type
				<?php echo aq_field_select('video_type', $block_id, $video_types, $video_type) ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('block1_video_id') ?>">
				Video ID <code>e.g: 81676731 (Vimeo) or http://youtu.be/BsekcY04xvQ (Youtube)</code>
				<?php echo aq_field_input('block1_video_id', $block_id, $block1_video_id, $size = 'full') ?>
			</label>
		</p>

		<br/>
		<br/>

		<h4>Block 2</h4>
		<p class="description">
			<label for="<?php echo $this->get_field_id('block2_index') ?>">
				Index / Date
				<?php echo aq_field_input('block2_index', $block_id, $block2_index, $size = 'full') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('block2_title') ?>">
				Title
				<?php echo aq_field_input('block2_title', $block_id, $block2_title, $size = 'full') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('block2_content') ?>">
				Content
				<?php echo aq_field_textarea('block2_content', $block_id, $block2_content, $size = 'full', true) ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('block2_video_id') ?>">
				Video ID <code>e.g: 81676731 (Vimeo) or http://youtu.be/BsekcY04xvQ (Youtube)</code>
				<?php echo aq_field_input('block2_video_id', $block_id, $block2_video_id, $size = 'full') ?>
			</label>
		</p>

		<br/>
		<br/>
		<h4>Block 3</h4>
		<p class="description">
			<label for="<?php echo $this->get_field_id('block3_index') ?>">
				Index / Date
				<?php echo aq_field_input('block3_index', $block_id, $block3_index, $size = 'full') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('block3_title') ?>">
				Title
				<?php echo aq_field_input('block3_title', $block_id, $block3_title, $size = 'full') ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('block3_content') ?>">
				Content
				<?php echo aq_field_textarea('block3_content', $block_id, $block3_content, $size = 'full', true) ?>
			</label>
		</p>

		<p class="description">
			<label for="<?php echo $this->get_field_id('block3_video_id') ?>">
				Video ID <code>e.g: 81676731 (Vimeo) or http://youtu.be/BsekcY04xvQ (Youtube)</code>
				<?php echo aq_field_input('block3_video_id', $block_id, $block3_video_id, $size = 'full') ?>
			</label>
		</p>

		<br/>
		<br/>

	<?php
	}// end form

	function block($instance) {
		extract($instance);
	?>

	<section class="main-section-with-bg" <?php if($bg_image) { echo 'style="background-image:url('.$bg_image.')"';}?> >
		<div class="row">
			<section class="container full-img-bg wide-white-content-container">
				<div class="trans-bg-dark col-md-10 col-md-offset-1">
					<?php
						echo '<h1>' . htmlspecialchars_decode($page_title) . '</h1>';
						if( $block1_title ){
							echo '<div class="row  no-margin">';
							echo '	<article class="col-md-12">';
							echo '		<div class="row">';
							echo '			<div class="col-xs-2 col-md-1 item-index no-gutter"><h4 class="index">' . htmlspecialchars_decode($block1_index) . '</h4></div>';
							echo '			<div class="col-xs-10 col-md-11"><h4>' . htmlspecialchars_decode($block1_title) . '</h4></div>';
							echo '		</div>';
							echo '		<div class="row">';
							echo '			<div class="wide-content col-md-11 col-md-offset-1">';
							if( $block1_video_id ){
								echo '				<a class="fancybox-media" href="http://vimeo.com/36031564"><div class="video"></div></a>';
							} else if( $block1_content ){
								echo 					wpautop(do_shortcode(htmlspecialchars_decode($block1_content)));
							}
							echo '			</div>';
							echo '		</div>';
							echo '	</article>';
							echo '</div>';
						}
						if( $block2_title ){
							echo '<div class="row  no-margin">';
							echo '	<article class="col-md-12">';
							echo '		<div class="row">';
							echo '			<div class="col-xs-2 col-md-1 item-index no-gutter"><h4 class="index">' . htmlspecialchars_decode($block2_index) . '</h4></div>';
							echo '			<div class="col-xs-10 col-md-11"><h4>' . htmlspecialchars_decode($block2_title) . '</h4></div>';
							echo '		</div>';
							echo '		<div class="row">';
							echo '			<div class="wide-content col-md-11 col-md-offset-1">';
							if( $block2_video_id ){
								echo '				<a class="fancybox-media" href="http://vimeo.com/36031564"><div class="video"></div></a>';
							} else if( $block2_content ){
								echo 					wpautop(do_shortcode(htmlspecialchars_decode($block2_content)));
							}
							echo '			</div>';
							echo '		</div>';
							echo '	</article>';
							echo '</div>';
						}
						if( $block3_title ){
							echo '<div class="row  no-margin">';
							echo '	<article class="col-md-12">';
							echo '		<div class="row">';
							echo '			<div class="col-xs-2 col-md-1 item-index no-gutter"><h4 class="index">' . htmlspecialchars_decode($block3_index) . '</h4></div>';
							echo '			<div class="col-xs-10 col-md-11"><h4>' . htmlspecialchars_decode($block3_title) . '</h4></div>';
							echo '		</div>';
							echo '		<div class="row">';
							echo '			<div class="wide-content col-md-11 col-md-offset-1">';
							if( $block3_video_id ){
								echo '				<a class="fancybox-media" href="http://vimeo.com/36031564"><div class="video"></div></a>';
							} else if( $block3_content ){
								echo 					wpautop(do_shortcode(htmlspecialchars_decode($block3_content)));
							}
							echo '			</div>';
							echo '		</div>';
							echo '	</article>';
							echo '</div>';
						}
						if( $block1_title ){
							echo '<div class="row  no-margin">';
							echo '	<article class="col-md-12">';
							echo '		<div class="row">';
							echo '			<div class="col-xs-2 col-md-1 item-index no-gutter"><h4 class="index">' . htmlspecialchars_decode($block1_index) . '</h4></div>';
							echo '			<div class="col-xs-10 col-md-11"><h4>' . htmlspecialchars_decode($block1_title) . '</h4></div>';
							echo '		</div>';
							echo '		<div class="row">';
							echo '			<div class="wide-content col-md-11 col-md-offset-1">';
							if( $block1_video_id ){
								echo '				<a class="fancybox-media" href="http://vimeo.com/36031564"><div class="video"></div></a>';
							} else if( $block1_content ){
								echo 					wpautop(do_shortcode(htmlspecialchars_decode($block1_content)));
							}
							echo '			</div>';
							echo '		</div>';
							echo '	</article>';
							echo '</div>';
						}
						if( $block2_title ){
							echo '<div class="row  no-margin">';
							echo '	<article class="col-md-12">';
							echo '		<div class="row">';
							echo '			<div class="col-xs-2 col-md-1 item-index no-gutter"><h4 class="index">' . htmlspecialchars_decode($block2_index) . '</h4></div>';
							echo '			<div class="col-xs-10 col-md-11"><h4>' . htmlspecialchars_decode($block2_title) . '</h4></div>';
							echo '		</div>';
							echo '		<div class="row">';
							echo '			<div class="wide-content col-md-11 col-md-offset-1">';
							if( $block2_video_id ){
								echo '				<a class="fancybox-media" href="http://vimeo.com/36031564"><div class="video"></div></a>';
							} else if( $block2_content ){
								echo 					wpautop(do_shortcode(htmlspecialchars_decode($block1_content)));
							}
							echo '			</div>';
							echo '		</div>';
							echo '	</article>';
							echo '</div>';
						}
						if( $block1_title ){
							echo '<div class="row  no-margin">';
							echo '	<article class="col-md-12">';
							echo '		<div class="row">';
							echo '			<div class="col-xs-2 col-md-1 item-index no-gutter"><h4 class="index">' . htmlspecialchars_decode($block1_index) . '</h4></div>';
							echo '			<div class="col-xs-10 col-md-11"><h4>' . htmlspecialchars_decode($block1_title) . '</h4></div>';
							echo '		</div>';
							echo '		<div class="row">';
							echo '			<div class="wide-content col-md-11 col-md-offset-1 last-work-item">';
							if( $block1_video_id ){
								echo '				<a class="fancybox-media" href="http://vimeo.com/36031564"><div class="video"></div></a>';
							} else if( $block1_content ){
								echo 					wpautop(do_shortcode(htmlspecialchars_decode($block1_content)));
							}
							echo '			</div>';
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