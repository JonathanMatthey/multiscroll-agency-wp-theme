<?php

class AQ_Background_Video_Block extends AQ_Block {
	
	//set and create block
	function __construct() {
		$block_options = array(
			'name' => 'Background Video',
			'size' => 'span12',
			'block_icon' => '<i class="icon-picons-font"></i>',
			'block_description' => 'Use to add Text<br />HTML or shortcodes.'
		);
		
		//create the block
		parent::__construct('aq_background_video_block', $block_options);
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
			'text' => '',
			'slider' => '',
			'type' => 'vimeo',
			'image' => ''
		);
		$instance = wp_parse_args($instance, $defaults);
		extract($instance);
		
		$video_types = array(
			'vimeo' => 'Vimeo',
			'youtube' => 'Youtube'
		);
		
		/**
		 * Check if we found any sliders and display a select box or a message accordingly.
		 */
		if( $sliders ) :
	?>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('slider') ?>">
				Choose Revolution Slider to Display over the top of this video.<br/>
				<?php echo aq_field_select('slider', $block_id, $slider_choices, $slider) ?>
			</label>
		</p>
		
	<?php else : ?>
	
		<p class="description">Please Add Some Revolution Sliders if you wish to overlay content to this video.</p>
		
	<?php endif; ?>
	
		<p class="description">
			<label for="<?php echo $this->get_field_id('type') ?>">
				Video Source
				<?php echo aq_field_select('type', $block_id, $video_types, $type) ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('title') ?>">
				Video ID <code>e.g: 81676731 (Vimeo) or http://youtu.be/BsekcY04xvQ (Youtube)</code>
				<?php echo aq_field_input('title', $block_id, $title, $size = 'full') ?>
			</label>
		</p>
		
		<p class="description">
			<label for="<?php echo $this->get_field_id('image') ?>">
				Fallback Static Image <code>Mobile devices do not allow background video from a device level, choose a static background image instead.</code>
				<?php echo aq_field_upload('image', $block_id, $image, $media_type = 'image') ?>
			</label>
		</p>
		
	<?php	
	}// end form
	
	function block($instance) {
		extract($instance);
		
		if( $type == 'vimeo' ) :
			wp_enqueue_script( 'ebor-vimeo', get_template_directory_uri() . '/js/okvideo.js', array('jquery'), false, true  );
	?>
			
			<div class="intro-bg fullheight">
				<div class="valign">
					
					<?php echo do_shortcode( '[rev_slider '. $slider .']' ); ?>
				
				</div>
			</div>
			
			<script type="text/javascript">
				jQuery(document).ready(function(){
					if( !device.tablet() && !device.mobile() ) {
						jQuery.okvideo({ 
							source: '<?php echo $title; ?>',
							autoplay:true,
							loop: true,
							highdef:true,
							hd:true, 
							adproof: true,
							volume:0
						});		
					} else {
						jQuery('body').addClass('poster-img');
					}	
				});
			</script>
			
			<style type="text/css">
				.poster-img{
				    background-image: url(<?php echo $image; ?>) !important;
				    background-repeat: no-repeat !important;
				    background-position: center center !important;
				    background-size: cover !important;
				}
			</style>
			
	<?php		
		elseif( $type == 'youtube' ) :
			wp_enqueue_script( 'ebor-youtube', get_template_directory_uri() . '/js/youtube.js', array('jquery'), false, true  );
	?>
		
			<div class="intro-bg fullheight">
				<div class="valign">
					
					<?php echo do_shortcode( '[rev_slider '. $slider .']' ); ?>
					
					<a id="bgndVideo" class="player mb_YTVPlayer" data-property="{videoURL:'<?php echo $title; ?>',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}" title="" style="display: none;"></a>
				
				</div>
			</div>
			
			<script type="text/javascript">
				jQuery(document).ready(function(){
					if( !device.tablet() && !device.mobile() ) {        
						jQuery(function(){
						  jQuery(".player").mb_YTPlayer();
						});			
					} else {
						jQuery('body').addClass('poster-img');
					}	
				});
			</script>
			
			<style type="text/css">
				.poster-img{
				    background-image: url(<?php echo $image; ?>) !important;
				    background-repeat: no-repeat !important;
				    background-position: center center !important;
				    background-size: cover !important;
				}
			</style>
		
	<?php
		endif;
	}//end block
	
}//end class