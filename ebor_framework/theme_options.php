<?php 

add_action('customize_register', 'ebor_theme_customize');
function ebor_theme_customize($wp_customize) {

require_once('theme_options_classes.php');

$social_options = ebor_icons_list();


/**
 * Create Slideout Section
 */
$wp_customize->add_section( 'slideout_section', array(
	'title'          => 'Call To Action Section',
	'priority'       => 41,
	'description' => 'These controls effect the Call To Action Section above the footer as seen in the Reflex Demo. The content is added to this section using a page builder shortcode. <a href="' . admin_url('themes.php?page=ebor-template-builder') .'">Choose your shortcode now.</a><br /><br />NOTE: This section is not designed for complex elements, try to keep your page builder layout for use here to simple elements like our demo.'
) );

$wp_customize->add_setting( 'slideout_shortcode', array(
    'default' => '',
    'type' => 'option'
) );

$wp_customize->add_control( 'slideout_shortcode', array(
    'label' => __('Call to Action Content Shortcode', 'reflex'),
    'type' => 'text',
    'section' => 'slideout_section',
    'priority' => 4,
) );

/**
 * End slideout section
 */
 
$wp_customize->add_setting('header_background', array(
    'default'  => '',
    'type' => 'option'

));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_background', array(
    'label'    => __('Header Background Image', 'reflex'),
    'section'  => 'background_image',
    'priority'       => 20
)));

/**
 * Ebor Framework
 * Login Section
 * @since version 1.0
 * @author TommusRhodus
 */
 
$wp_customize->add_section( 'site_settings', array(
	'title'          => 'Site Settings',
	'priority'       => 20
) );

$wp_customize->add_setting( 'use_preloader', array(
    'default' => 1,
    'type' => 'option'
) );

$wp_customize->add_control( 'use_preloader', array(
    'label' => __('Use Site Preloader?', 'reflex'),
    'type' => 'checkbox',
    'section' => 'site_settings',
    'priority'       => 7,
) );

$wp_customize->add_setting('pace_display', array(
    'default' => 'default',
    'type' => 'option'
));
$wp_customize->add_control( 'pace_display', array(
    'label'   => __('Choose Preloader Display Type', 'reflex'),
    'section' => 'site_settings',
    'type'    => 'select',
    'priority' => 1,
    'choices'    => array(
        'default' => 'Default - Square',
        'bar' => 'Loading Bar',
        'simple' => 'Simple Loading Bar',
        'bounce' => 'Bouncing Ball',
        'spinner' => 'Spinning Circle',
        'double' => 'Double Spinning Circle',
    ),
));	

$wp_customize->add_setting( 'footer_button_url', array(
    'default' => '',
    'type' => 'option'
) );
$wp_customize->add_control( 'footer_button_url', array(
    'label' => __('URL for (i) button in bottom right of page.', 'reflex'),
    'type' => 'text',
    'section' => 'site_settings',
    'priority' => 10,
) );

$wp_customize->add_setting('disable_footer', array(
    'default' => 'no',
    'type' => 'option'
));
$wp_customize->add_control( 'disable_footer', array(
    'label'   => __('Disable the footer sitewide?', 'reflex'),
    'section' => 'site_settings',
    'type'    => 'select',
    'priority' => 15,
    'choices'    => array(
        'no' => 'No - Optionally load footer depending on page settings',
        'yes' => 'Yes - Disable footer regardless of page settings',
    ),
));

/**
 * Ebor Framework
 * Login Section
 * @since version 1.0
 * @author TommusRhodus
 */

/**
 * Create Header Section
 */
$wp_customize->add_section( 'custom_login_section', array(
	'title'          => 'wp-login.php Logo',
	'priority'       => 29,
) );

/**
 * Custom Logo Default
 */
$wp_customize->add_setting('custom_login_logo', array(
    'default'  => '',
    'type' => 'option'

));

/**
 * Custom Logo Control
 */
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'custom_login_logo', array(
    'label'    => __('Custom Login Logo Upload', 'ebor_starter'),
    'section'  => 'custom_login_section',
    'priority'       => 1
)));

/**
 * END LOGIN LOGO SECTION
 */
 

/**
 * Create site settings section
 * @author TommusRhodus
 * @package loom
 * @since 1.0.0
 */
$wp_customize->add_section( 'demo_data', array(
	'title'          => 'Import Demo Data',
	'priority'       => 1,
) );

/**
 * Demo Data Defaults
 */
$wp_customize->add_setting( 'import', array(
    'default'        => ''
) );

/**
 * Demo Data Control
 */
$wp_customize->add_control( new Demo_Import_control( $wp_customize, 'import', array(
    'label'   => __('Import Demo Data', 'reflex'),
    'section' => 'demo_data',
    'settings'   => 'import',
    'priority' => 1,
) ) );

/**
 * END DEMO DATA SECTION
 */


///////////////////////////////////////
//     BLOG SECTION                 //
/////////////////////////////////////
	
//CREATE CUSTOM STYLING SUBSECTION
$wp_customize->add_section( 'blog_settings', array(
	'title'          => 'Blog Settings',
	'priority'       => 35,
) );

$wp_customize->add_setting('blog_header_image', array(
    'default'  => '',
    'type' => 'option'
));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'blog_header_image', array(
    'label' => __('Blog Index Header Background Image', 'kubb'),
    'section' => 'blog_settings',
    'priority'  => 2
)));

$wp_customize->add_setting( 'blog_title', array(
    'default' => 'Latest News',
    'type' => 'option'
) );
$wp_customize->add_control( 'blog_title', array(
    'label' => __('Blog Title', 'reflex'),
    'type' => 'text',
    'section' => 'blog_settings',
    'priority' => 1,
) );

$wp_customize->add_setting( 'blog_subtitle', array(
    'default' => 'Collection of our posts & updates',
    'type' => 'option'
) );
$wp_customize->add_control( 'blog_subtitle', array(
    'label' => __('Blog Subtitle', 'reflex'),
    'type' => 'text',
    'section' => 'blog_settings',
    'priority' => 3,
) );

//comments TITLE
$wp_customize->add_setting( 'comments_title', array(
    'default'        => 'Would you like to share your thoughts?',
    'type' => 'option'
) );

//commentstitle
$wp_customize->add_control( 'comments_title', array(
    'label' => __('Comments Title', 'reflex'),
    'type' => 'text',
    'section' => 'blog_settings',
    'priority'       => 5,
) );

//comments subTITLE
$wp_customize->add_setting( 'comments_subtitle', array(
    'default'        => 'Your email address will not be published. Required fields are marked *',
    'type' => 'option'
) );

//comments subtitle
$wp_customize->add_control( 'comments_subtitle', array(
    'label' => __('Comments Sub-title', 'reflex'),
    'type' => 'text',
    'section' => 'blog_settings',
    'priority'       => 5,
) );

$wp_customize->add_setting( 'post_continue', array(
    'default'        => 'Full Story',
    'type' => 'option'
) );
$wp_customize->add_control( 'post_continue', array(
    'label' => __('Blog "Continue Reading" Text', 'reflex'),
    'type' => 'text',
    'section' => 'blog_settings',
    'priority'       => 6,
) );
	
	
///////////////////////////////////////
//     PORTFOLIO SECTION            //
/////////////////////////////////////
	
//CREATE CUSTOM STYLING SUBSECTION
$wp_customize->add_section( 'portfolio_settings', array(
	'title'          => 'Portfolio Settings',
	'priority'       => 36,
) ); 

//blog layout
$wp_customize->add_setting('portfolio_layout', array(
    'default' => 'full-portfolio',
    'type' => 'option'
));

//blog layout
$wp_customize->add_control( 'portfolio_layout', array(
    'label'   => __('Choose layout for Portfolio Archives.', 'reflex'),
    'section' => 'portfolio_settings',
    'type'    => 'select',
    'priority' => 1,
    'choices'    => array(
        'full-portfolio' => 'Fullscreen Portfolio',
        'fix-portfolio' => 'Classic Portfolio',
        'fix-portfolio-alt' => 'Classic Portfolio (3 Columns)',
        'full-portfolio lightbox' => 'Fullscreen Portfolio Lightbox',
        'fix-portfolio lightbox' => 'Classic Portfolio Lightbox',
        'fix-portfolio-alt lightbox' => 'Classic Portfolio Lightbox (3 Columns)',
    ),
));	

/**
 * Create colors section
 * @author TommusRhodus
 * @package loom
 * @since 1.0.0
 */

$wp_customize->add_setting('highlight_colour', array(
    'default'           => '#fff22d',
    'sanitize_callback' => 'sanitize_hex_color',
    'type' => 'option'
));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'highlight_colour', array(
    'label'    => __('Key Colour (Highlight)', 'reflex'),
    'section'  => 'colors',
    'priority' => 100,
)));

$wp_customize->add_setting('colour_white', array(
    'default'           => '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
    'type' => 'option'
));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'colour_white', array(
    'label'    => __('White Colour', 'reflex'),
    'section'  => 'colors',
    'priority' => 105,
)));

$wp_customize->add_setting('colour_silver', array(
    'default'           => '#f2f2f2',
    'sanitize_callback' => 'sanitize_hex_color',
    'type' => 'option'
));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'colour_silver', array(
    'label'    => __('Silver Colour', 'reflex'),
    'section'  => 'colors',
    'priority' => 110,
)));

$wp_customize->add_setting('colour_grey', array(
    'default'           => '#cccccc',
    'sanitize_callback' => 'sanitize_hex_color',
    'type' => 'option'
));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'colour_grey', array(
    'label'    => __('Grey Colour', 'reflex'),
    'section'  => 'colors',
    'priority' => 115,
)));

$wp_customize->add_setting('colour_dark', array(
    'default'           => '#4c4c4c',
    'sanitize_callback' => 'sanitize_hex_color',
    'type' => 'option'
));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'colour_dark', array(
    'label'    => __('Dark Colour', 'reflex'),
    'section'  => 'colors',
    'priority' => 120,
)));

$wp_customize->add_setting('colour_black', array(
    'default'           => '#1c1c1e',
    'sanitize_callback' => 'sanitize_hex_color',
    'type' => 'option'
));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'colour_black', array(
    'label'    => __('Black Colour', 'reflex'),
    'section'  => 'colors',
    'priority' => 125,
)));

/**
 *  END COLOURS SECTION
 */


///////////////////////////////////////
//     CUSTOM LOGO SECTION          //
/////////////////////////////////////
	
//CREATE CUSTOM LOGO SUBSECTION
$wp_customize->add_section( 'custom_logo_section', array(
	'title'          => 'Header Settings & Logo',
	'priority'       => 30,
) );

$wp_customize->add_setting('header_animation', array(
    'default' => 'left',
    'type' => 'option'
));
$wp_customize->add_control( 'header_animation', array(
    'label'   => __('Choose Main Header Reveal Animation', 'reflex'),
    'section' => 'custom_logo_section',
    'type'    => 'select',
    'priority' => 1,
    'choices'    => array(
        'left' => 'Slide From Left',
        'right' => 'Slide From Right',
        'fade' => 'Fade In',
    ),
));	

//CUSTOM LOGO SETTINGS
$wp_customize->add_setting('custom_logo', array(
    'default'  => get_template_directory_uri() . '/images/logo-dark.png',
    'type' => 'option'

));

//CUSTOM LOGO
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'custom_logo', array(
    'label'    => __('Custom Logo Upload', 'reflex'),
    'section'  => 'custom_logo_section',
    'priority'       => 3
)));

//logo alt text
$wp_customize->add_setting( 'custom_logo_alt_text', array(
    'default'        => 'Alt Text',
    'type' => 'option'
) );

//logo alt text
$wp_customize->add_control( 'custom_logo_alt_text', array(
    'label' => __('Custom Logo Alt Text', 'reflex'),
    'type' => 'text',
    'section' => 'custom_logo_section',
    'priority' => 4
) );

//copyright text
$wp_customize->add_setting( 'copyright', array(
    'default' => 'Configure this message in "Appearance" => "Customize" => "Header Settings & Logo"',
    'type' => 'option'
) );

//copyright text
$wp_customize->add_control( new Ebor_Customize_Textarea_Control( $wp_customize, 'copyright', array(
    'label'   => __('Copyright Text', 'reflex'),
    'section' => 'custom_logo_section',
    'settings'   => 'copyright',
    'priority' => 5,
) ) );

for( $i = 1; $i < 7; $i++ ){
	$wp_customize->add_setting("header_social_$i", array(
	    'default' => 'none',
	    'type' => 'option'
	));
	
	$wp_customize->add_control( "header_social_$i", array(
	    'label'   => __("header Social Icon $i", 'reflex'),
	    'section' => 'custom_logo_section',
	    'type'    => 'select',
	    'priority' => 20 + $i + $i,
	    'choices'    => $social_options
	));
	
	$wp_customize->add_setting( "header_social_link_$i", array(
	    'default'        => '',
	    'type' => 'option'
	) );
	
	$wp_customize->add_control( "header_social_link_$i", array(
	    'label' => __("header Social Link $i", 'reflex'),
	    'type' => 'text',
	    'section' => 'custom_logo_section',
	    'priority' => 21 + $i + $i,
	) );
}

/**
 * Ebor Framework
 * Custom Favicons
 * @since version 1.0
 * @author TommusRhodus
 */
 
 /**
  * Create the Favicon Section
  */
 $wp_customize->add_section( 'favicon_settings', array(
 	'title'          => 'Favicons',
 	'priority'       => 30,
 ) );

/**
 * Custom Favicon Defaults
 */
$wp_customize->add_setting('custom_favicon', array(
	'default' => '',
	'type' => 'option'
));

/**
 * Custom Favicon Upload Control
 */
$wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'custom_favicon', array(
	'label'    => __('Custom Favicon Upload', 'ebor_starter'),
	'section'  => 'favicon_settings',
	'settings' => 'custom_favicon',
	'priority'       => 21,
)));

/**
 * Custom Favicon Defaults
 */
$wp_customize->add_setting('mobile_favicon', array(
    'default' => '',
    'type' => 'option'
));

/**
 * Custom Favicon Upload Control
 */
$wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'mobile_favicon', array(
    'label'    => __('Non-Retina Mobile Favicon Upload', 'ebor_starter'),
    'section'  => 'favicon_settings',
    'settings' => 'mobile_favicon',
    'priority'       => 22,
)));

/**
 * Custom Favicon Defaults
 */
$wp_customize->add_setting('72_favicon', array(
    'default' => '',
    'type' => 'option'
));

/**
 * Custom Favicon Upload Control
 */
$wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, '72_favicon', array(
    'label'    => __('iPad Favicon (72x72px)', 'ebor_starter'),
    'section'  => 'favicon_settings',
    'settings' => '72_favicon',
    'priority'       => 23,
)));

/**
 * Custom Favicon Defaults
 */
$wp_customize->add_setting('114_favicon', array(
   'default' => '',
   'type' => 'option'
));

/**
 * Custom Favicon Upload Control
 */
$wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, '114_favicon', array(
   'label'    => __('Retina iPhone Favicon (114x114px)', 'ebor_starter'),
   'section'  => 'favicon_settings',
   'settings' => '114_favicon',
   'priority'       => 24,
)));

/**
 * Custom Favicon Defaults
 */
$wp_customize->add_setting('144_favicon', array(
	'default' => '',
	'type' => 'option'
));

/**
 * Custom Favicon Upload Control
 */
$wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, '144_favicon', array(
	'label'    => __('Retina iPad Favicon (144x144px)', 'ebor_starter'),
	'section'  => 'favicon_settings',
	'settings' => '144_favicon',
	'priority'       => 25,
)));

///////////////////////////////////////
//     CUSTOM CSS SECTION           //
/////////////////////////////////////

//CREATE CUSTOM CSS SUBSECTION
$wp_customize->add_section( 'custom_css_section', array(
	'title'          => 'Custom CSS',
	'priority'       => 200,
) ); 
      
$wp_customize->add_setting( 'custom_css', array(
  'default'        => '',
  'type'           => 'option',
) );

$wp_customize->add_control( new Ebor_Customize_Textarea_Control( $wp_customize, 'custom_css', array(
  'label'   => __('Custom CSS', 'reflex'),
  'section' => 'custom_css_section',
  'settings'   => 'custom_css',
) ) );
      	
}