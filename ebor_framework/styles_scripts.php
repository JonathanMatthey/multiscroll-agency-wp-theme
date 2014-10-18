<?php

/**
 * Ebor Framework
 * Styles & Scripts Enqueuement
 * @since version 1.0
 * @author TommusRhodus
 */

/**
 * Ebor Load Scripts
 * Properly Enqueues Scripts & Styles for the theme
 * @since version 1.0
 * @author TommusRhodus
 */ 
if(!( function_exists('ebor_load_scripts') )){
	function ebor_load_scripts() {
		$protocol = is_ssl() ? 'https' : 'http';
		    
		//Enqueue Styles
		wp_enqueue_style( 'ebor-raleway-font', "$protocol://fonts.googleapis.com/css?family=Raleway:400,300,700,900" );
		wp_enqueue_style( 'ebor-open-sans-font', "$protocol://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" );
		wp_enqueue_style( 'ebor-montserrat-font', "$protocol://fonts.googleapis.com/css?family=Montserrat:400,700" );
		
		wp_enqueue_style( 'ebor-pace-style', get_template_directory_uri() . '/css/pace-'. get_option('pace_display','default') .'.css' );
		
		wp_enqueue_style( 'ebor-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'ebor-owl', get_template_directory_uri() . '/css/owl.carousel.css' );
		wp_enqueue_style( 'ebor-owl-theme', get_template_directory_uri() . '/css/owl.theme.css' );
		wp_enqueue_style( 'ebor-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
		
		wp_enqueue_style( 'ebor-style', get_stylesheet_uri() );
		wp_enqueue_style( 'ebor-custom', get_template_directory_uri() . '/custom.css' );
		
		//Dequeue Styles
		wp_dequeue_style('aqpb-view-css');
		wp_deregister_style('aqpb-view-css');
		
		//Enqueue Scripts
		if( get_option('use_preloader', '1') == 1 )
			wp_enqueue_script( 'ebor-pace', get_template_directory_uri() . '/js/pace.js', array('jquery'), false, false );
			
		wp_enqueue_script( 'ebor-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true  );
		wp_enqueue_script( 'ebor-owl', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), false, true  );
		wp_enqueue_script( 'ebor-plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), false, true  );
		wp_enqueue_script( 'ebor-scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true  );
		
		//Enqueue Comments
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		
		/**
		 * Dequeue Scripts
		 */
		wp_dequeue_script('aqpb-view-js');
		wp_deregister_script('aqpb-view-js');
		
		/**
		 * localize script
		 */
		$script_data = array( 
			'image_path' => trailingslashit( get_template_directory_uri() ) . 'images/',
			'header_animation' => get_option('header_animation', 'left')
		);
		wp_localize_script( 'ebor-scripts', 'script_data', $script_data );
	}
	add_action('wp_enqueue_scripts', 'ebor_load_scripts');
}

/**
 * Ebor Load Non Standard Scripts
 * Quickly insert HTML into wp_head()
 * @since version 1.0
 * @author TommusRhodus
 */
function ebor_load_non_standard_scripts() {
	echo '<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		  <!--[if lt IE 9]>
			  <script src="'. get_template_directory_uri() . '/style/js/html5shiv.js"></script>
			  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		  <![endif]-->';
}
add_action('wp_head', 'ebor_load_non_standard_scripts', 95);

/**
 * Ebor Load Admin Scripts
 * Properly Enqueues Scripts & Styles for the theme
 * @since version 1.0
 * @author TommusRhodus
 */
function ebor_admin_load_scripts(){
	$protocol = is_ssl() ? 'https' : 'http';
	
	wp_enqueue_script('custom_script', get_template_directory_uri().'/ebor_framework/admin.js', array('jquery'), false, true);
	wp_enqueue_style( 'ebor-admin', get_template_directory_uri() . '/ebor_framework/css/admin.css' );
	wp_enqueue_style( 'ebor-raleway-font', "$protocol://fonts.googleapis.com/css?family=Raleway:400,300,700,900" );
	wp_enqueue_style( 'ebor-open-sans-font', "$protocol://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" );
	wp_enqueue_style( 'ebor-montserrat-font', "$protocol://fonts.googleapis.com/css?family=Montserrat:400,700" );
}
add_action('admin_enqueue_scripts', 'ebor_admin_load_scripts', 200);