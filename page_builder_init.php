<?php

/**
 * Page Builder Functions
 * Queue Up Framework
 * @since version 1.0
 * @author TommusRhodus
 */
if(class_exists('AQ_Page_Builder')) {

	/**
	 * Dre-register defaults
	 */
	aq_unregister_block('AQ_Text_Block');
	aq_unregister_block('AQ_Tabs_Block');
	aq_unregister_block('AQ_Alert_Block');
	aq_unregister_block('AQ_Richtext_Block');
	aq_unregister_block('AQ_Clear_Block');
	aq_unregister_block('AQ_Widgets_Block');

	/**
	 * Register custom blocks
	 * Override by copying block file of your choice to your child theme, and then require & register from your child theme functions.php
	 * Ensure that you use aq_regiser_block() in your child theme to register the block with the page builder.
	 */
	if(!( class_exists('AQ_Revslider_Block') )){
		require_once ( "page_builder_blocks/revslider_block.php" );
		aq_register_block('AQ_Revslider_Block');
	}
	if(!( class_exists('AQ_Testimonial_Carousel_Block') )){
		require_once ( "page_builder_blocks/testimonial_carousel_block.php" );
		aq_register_block('AQ_Testimonial_Carousel_Block');
	}
	if(!( class_exists('AQ_Clients_Carousel_Block') )){
		require_once ( "page_builder_blocks/clients_carousel_block.php" );
		aq_register_block('AQ_Clients_Carousel_Block');
	}
	if(!( class_exists('AQ_Services_Carousel_Block') )){
		require_once ( "page_builder_blocks/services_carousel_block.php" );
		aq_register_block('AQ_Services_Carousel_Block');
	}
	if(!( class_exists('AQ_Background_Video_Block') )){
		require_once ( "page_builder_blocks/background_video_block.php" );
		aq_register_block('AQ_Background_Video_Block');
	}
	if(!( class_exists('AQ_Portfolio_Block') )){
		require_once ( "page_builder_blocks/portfolio_block.php" );
		aq_register_block('AQ_Portfolio_Block');
	}
	if(!( class_exists('AQ_Ebor_Text_Block') )){
		require_once ( "page_builder_blocks/text_block.php" );
		aq_register_block('AQ_Ebor_Text_Block');
	}
	if(!( class_exists('AQ_Ebor_Text_FullWidth_Block') )){
		require_once ( "page_builder_blocks/text_fullwidth_block.php" );
		aq_register_block('AQ_Ebor_Text_FullWidth_Block');
	}
	if(!( class_exists('AQ_Image_Block') )){
		require_once ( "page_builder_blocks/image_block.php" );
		aq_register_block('AQ_Image_Block');
	}
	if(!( class_exists('AQ_Team_Block') )){
		require_once ( "page_builder_blocks/team_block.php" );
		aq_register_block('AQ_Team_Block');
	}
	if(!( class_exists('AQ_Call_To_Action_Block') )){
		require_once ( "page_builder_blocks/call_to_action_block.php" );
		aq_register_block('AQ_Call_To_Action_Block');
	}
	if(!( class_exists('AQ_Client_Wall_Block') )){
		require_once ( "page_builder_blocks/client_wall_block.php" );
		aq_register_block('AQ_Client_Wall_Block');
	}
	if(!( class_exists('AQ_Agency_Head_Block') )){
		require_once ( "page_builder_blocks/agency_head_block.php" );
		aq_register_block('AQ_Agency_Head_Block');
	}
	if(!( class_exists('AQ_White_Squares_block') )){
		require_once ( "page_builder_blocks/white_squares_block.php" );
		aq_register_block('AQ_White_Squares_block');
	}

	/**
	 * Wrapper function overrides
	 * @doNotModify Unless you know exactly what you're doing, modification of these will break the theme layout. You have been warned.
	 */
	function aq_css_classes($block){
		$block = str_replace('span', '', $block);
		$output = 'col-md-' . $block;
		return $output;
	}
	function aq_css_clearfix(){
		return false;
	}
	function aq_template_wrapper_start($template_id){
		return '<div class="row">';
	}
	function aq_template_wrapper_end(){
		return '</div>';
	}

}