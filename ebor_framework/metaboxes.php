<?php
  
function ebor_custom_metaboxes( $meta_boxes ) {
	$prefix = '_ebor_'; // Prefix for all fields
	
	$social_options = ebor_icons_list();
	
	$meta_boxes[] = array(
		'id' => 'post_metabox',
		'title' => __('Additional Post Item Details', 'reflex'),
		'pages' => array('post'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Archives Post Width',
				'desc' => 'Post width, when shown in blog index and archives, no change on single posts',
				'id' => $prefix . 'post_width',
				'type' => 'radio',
				'options' => array(
					array('name' => 'One Third', 'value' => 'news-item-one-third'),
					array('name' => 'One Half', 'value' => 'news-item-one-half'),
					array('name' => 'Two Thirds', 'value' => 'news-item-two-third'),
				),
				'std' => 'news-item-one-third'
			),
			array(
				'name' => 'Archives Background Colour',
				'desc' => 'Post Background Colour, when shown in blog index and archives, no change on single posts',
				'id' => $prefix . 'post_colour',
				'type' => 'radio',
				'options' => array(
					array('name' => 'White', 'value' => 'white-bg'),
					array('name' => 'Silver', 'value' => 'silver-bg'),
					array('name' => 'Highlight Colour', 'value' => 'color-bg'),
				),
				'std' => 'white-bg'
			),
			array(
				'name' => 'Archives Post Layout',
				'desc' => 'Post Layout, when shown in blog index and archives, no change on single posts',
				'id' => $prefix . 'post_layout',
				'type' => 'radio',
				'options' => array(
					array('name' => 'Large Title', 'value' => 'big-title'),
					array('name' => 'Small Title & Post Excerpt', 'value' => 'small-title'),
					array('name' => 'Small Title & Featured Image', 'value' => 'small-title-image-alt'),
					array('name' => 'Large Title & Featured Image', 'value' => 'big-title-image'),
					array('name' => 'Small Title, Post Excerpt & Featured Image', 'value' => 'small-title-image'),
				),
				'std' => 'big-title'
			),
			array(
				'name' => 'Single Post Layout',
				'desc' => 'Post Layout, when shown as a single post. Does not affect Archives.',
				'id' => $prefix . 'single_post_layout',
				'type' => 'radio',
				'options' => array(
					array('name' => 'Subtitle on Left, Post on Right', 'value' => 'subtitle'),
					array('name' => 'Full-Width "Standard" Post', 'value' => 'standard'),
					array('name' => 'Full-Width "Standard" Post & Sidebar', 'value' => 'standard-sidebar'),
				),
				'std' => 'standard-sidebar'
			),
		)
	);
	
	
	//////////////////////////////////////////////////////////////////////////
	////// CREATE METABOXES FOR SERVICE POST TYPE /////////////////////////
	////////////////////////////////////////////////////////////////////////
	
	$meta_boxes[] = array(
		'id' => 'service_metabox',
		'title' => __('Additional Service Item Details', 'reflex'),
		'pages' => array('service'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => __('Button URL', 'reflex'),
				'desc' => __("(Optional) Add a URL for this Service?", 'reflex'),
				'id'   => $prefix . 'button_url',
				'type' => 'text',
			),
			array(
				'name' => __('Button Text', 'reflex'),
				'desc' => __("(Optional) Add text for the button?", 'reflex'),
				'id'   => $prefix . 'button_text',
				'type' => 'text',
				'std' => 'More Details'
			),
		)
	);
	
	//////////////////////////////////////////////////////////////////////////
	////// CREATE METABOXES FOR PORTFOLIO POST TYPE /////////////////////////
	////////////////////////////////////////////////////////////////////////
	
	$meta_boxes[] = array(
		'id' => 'portfolio_metabox',
		'title' => __('Additional Portfolio Item Details', 'reflex'),
		'pages' => array('portfolio'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => 'Archives Post Destination',
				'desc' => 'When in Archives (Portfolio View) what should clicking the item trigger?',
				'id' => $prefix . 'post_destination',
				'type' => 'radio',
				'options' => array(
					array('name' => 'Featured Image Lightbox', 'value' => 'lightbox'),
					array('name' => 'Image Galleries Lightbox (Uses Images Only, not Slider Images)', 'value' => 'lightbox-gallery'),
					array('name' => 'Video Lightbox', 'value' => 'video'),
					array('name' => 'Link to Single Post', 'value' => 'permalink'),
				),
				'std' => 'lightbox'
			),
			array(
				'name' => __('Client URL', 'reflex'),
				'desc' => __("(Optional) Add a URL for this Project?", 'reflex'),
				'id'   => $prefix . 'the_client_url',
				'type' => 'text',
			),
			array(
				'name' => 'Upload Images for Slider',
				'desc' => 'Upload Here, Drag & Drop to Reorder',
				'id' => $prefix . 'portfolio_slider',
				'type' => 'pw_gallery',
				'sanitization_cb' => 'pw_gallery_field_sanitise',
			),
			array(
				'name' => 'Upload Images for Lightbox Gallery',
				'desc' => 'Upload Here, Drag & Drop to Reorder',
				'id' => $prefix . 'portfolio_images',
				'type' => 'pw_gallery',
				'sanitization_cb' => 'pw_gallery_field_sanitise',
			),
			array(
				'name' => 'Portfolio Item Video',
				'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
				'id'   => $prefix . 'the_video_1',
				'type' => 'oembed',
			),
			array(
				'name' => __('Showcase Alt, Background Image Left', 'reflex'),
				'desc' => __('Upload an image or enter an URL.', 'reflex'),
				'id' => $prefix . 'showcase_left',
				'type' => 'file',
				'save_id' => false, // save ID using true
				'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),
			array(
				'name' => __('Showcase Alt, Background Image Right', 'reflex'),
				'desc' => __('Upload an image or enter an URL.', 'reflex'),
				'id' => $prefix . 'showcase_right',
				'type' => 'file',
				'save_id' => false, // save ID using true
				'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),
		)
	);
	
	
	//////////////////////////////////////////////////////////////////////////
	////// CREATE METABOXES FOR TEAM MEMBERS      ///////////////////////////
	////////////////////////////////////////////////////////////////////////
	
	$meta_boxes[] = array(
		'id' => 'team_metabox',
		'title' => __('The Job Title', 'reflex'),
		'pages' => array('team'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => __('Job Title', 'reflex'),
				'desc' => '(Optional) Enter a Job Title for this Team Member',
				'id'   => $prefix . 'the_job_title',
				'type' => 'text',
			),
			array(
				'name' => 'Social Icon 1',
				'desc' => 'What icon would you like for this team members first social profile?',
				'id' => $prefix . 'team_social_icon_1',
				'type' => 'select',
				'options' => $social_options
			),
			array(
				'name' => __('URL for Social Icon 1', 'reflex'),
				'desc' => __("Enter the URL for Social Icon 1 e.g www.google.com", 'reflex'),
				'id'   => $prefix . 'team_social_icon_1_url',
				'type' => 'text',
			),
			array(
				'name' => 'Social Icon 2',
				'desc' => 'What icon would you like for this team members second social profile?',
				'id' => $prefix . 'team_social_icon_2',
				'type' => 'select',
				'options' => $social_options
			),
			array(
				'name' => __('URL for Social Icon 2', 'reflex'),
				'desc' => __("Enter the URL for Social Icon 1 e.g www.google.com", 'reflex'),
				'id'   => $prefix . 'team_social_icon_2_url',
				'type' => 'text',
			),
			array(
				'name' => 'Social Icon 3',
				'desc' => 'What icon would you like for this team members third social profile?',
				'id' => $prefix . 'team_social_icon_3',
				'type' => 'select',
				'options' => $social_options
			),
			array(
				'name' => __('URL for Social Icon 3', 'reflex'),
				'desc' => __("Enter the URL for Social Icon 3 e.g www.google.com", 'reflex'),
				'id'   => $prefix . 'team_social_icon_3_url',
				'type' => 'text',
			),
			array(
				'name' => 'Social Icon 4',
				'desc' => 'What icon would you like for this team members fourth social profile?',
				'id' => $prefix . 'team_social_icon_4',
				'type' => 'select',
				'options' => $social_options
			),
			array(
				'name' => __('URL for Social Icon 4', 'reflex'),
				'desc' => __("Enter the URL for Social Icon 4 e.g www.google.com", 'reflex'),
				'id'   => $prefix . 'team_social_icon_4_url',
				'type' => 'text',
			),
		)
	);
	
	//////////////////////////////////////////////////////////////////////////
	////// CREATE METABOXES FOR PAGES           ///////////////////////////
	////////////////////////////////////////////////////////////////////////
	
	$meta_boxes[] = array(
		'id' => 'page_metabox',
		'title' => __('Page Additional Details', 'reflex'),
		'pages' => array('post', 'page', 'portfolio'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => __('Header Background Image', 'reflex'),
				'desc' => __('Upload an image or enter an URL.', 'reflex'),
				'id' => $prefix . 'header_background',
				'type' => 'file',
				'save_id' => false, // save ID using true
				'allow' => array( 'url', 'attachment' ) // limit to just attachments with array( 'attachment' )
			),
			array(
				'name' => __('Subtitle', 'reflex'),
				'desc' => '(Optional) Enter a Subtitle for this Page/Post (HTML Allowed)',
				'id'   => $prefix . 'the_subtitle',
				'type' => 'textarea_code',
			),
			array(
				'name' => __('Use Portfolio Filters Instead of Subtitle?','reflex'),
				'desc' => __("Only use this option if you have either the Portfolio Grid, or Portfolio Masonry in the page, otherwise will not work.", 'reflex'),
				'id'   => $prefix . 'use_filters',
				'type' => 'checkbox',
			),
			array(
				'name' => __('Disable the footer on this page/post?','reflex'),
				'desc' => __("Some content (showcase) stops the window from scrolling normally, in these instaces you'll want to disable the footer", 'reflex'),
				'id'   => $prefix . 'disable_footer',
				'type' => 'checkbox',
			),
		)
	);

	//////////////////////////////////////////////////////////////////////////
	////// CREATE METABOXES FOR CLIENTS /////////////////////////////////////
	////////////////////////////////////////////////////////////////////////
	
	$meta_boxes[] = array(
		'id' => 'clients_metabox',
		'title' => __('Client URL', 'reflex'),
		'pages' => array('client'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(
				'name' => __('URL for this client (optional)', 'reflex'),
				'desc' => __("Enter a URL for this client, if left blank, client logo will open into a lightbox.", 'reflex'),
				'id'   => $prefix . 'client_url',
				'type' => 'text',
			),
			array(
				'name' => __('Subtitle', 'reflex'),
				'desc' => '(Optional) Enter a subtitle for this client? (Awards Display Only)',
				'id'   => $prefix . 'the_subtitle',
				'type' => 'text',
			),
		),
	);
	
	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'ebor_custom_metaboxes' );

// Initialize the metabox class
add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( 'metabox/init.php' );
	}
}
?>