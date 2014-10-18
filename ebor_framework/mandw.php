<?php

//REGISTER CUSTOM MENUS
function register_ebor_menus() {
	register_nav_menus( 
		array(
			'primary' => __( 'Standard Navigation', 'reflex' )
		) 
	);
}
add_action( 'init', 'register_ebor_menus' );

//REGISTER SIDEBARS
function ebor_register_sidebars() {
	
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Blog Sidebar', 'reflex' ),
			'description' => __( 'Sidebar for the Blog Posts', 'reflex' ),
			'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title sub-heading">',
			'after_title' => '</h3>'
		)
	);
	
	register_sidebar(
		array(
			'id' => 'footer1',
			'name' => __( 'Footer Column 1', 'reflex' ),
			'description' => __( 'If this is set, your footer will be 1 column', 'reflex' ),
			'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title upper">',
			'after_title' => '</h3>'
		)
	);
	
	register_sidebar(
		array(
			'id' => 'footer2',
			'name' => __( 'Footer Column 2', 'reflex' ),
			'description' => __( 'If this & column 1 are set, your footer will be 2 columns.', 'reflex' ),
			'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title upper">',
			'after_title' => '</h3>'
		)
	);
	
	
	register_sidebar(
		array(
			'id' => 'footer3',
			'name' => __( 'Footer Column 3', 'reflex' ),
			'description' => __( 'If this & column 1 & column 2 are set, your footer will be 3 columns.', 'reflex' ),
			'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title upper">',
			'after_title' => '</h3>'
		)
	);
	
	register_sidebar(
		array(
			'id' => 'footer4',
			'name' => __( 'Footer Column 4', 'reflex' ),
			'description' => __( 'If this & column 1 & column 2 & column 3 are set, your footer will be 4 columns.', 'reflex' ),
			'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title upper">',
			'after_title' => '</h3>'
		)
	);

}
add_action( 'widgets_init', 'ebor_register_sidebars' );