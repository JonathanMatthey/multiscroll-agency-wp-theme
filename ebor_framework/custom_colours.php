<?php 
	add_action('wp_head','ebor_custom_colours', 20);
	function ebor_custom_colours(){

	$highlight = get_option('highlight_colour','#fff22d');
	$highlightrgb = ebor_hex2rgb( $highlight );
	$white = get_option('colour_white','#ffffff');
	$silver = get_option('colour_silver','#f2f2f2');
	$grey = get_option('colour_grey','#cccccc');
	$dark = get_option('colour_dark','#4c4c4c');
	$black = get_option('colour_black','#1c1c1e');
	$transdark = ebor_hex2rgb( $black );
	$transwhite = ebor_hex2rgb( $white );
?>
	
<style type="text/css">
	
	.white,
	.white a{
		color:<?php echo $white; ?>;
	}
	.aq-block-aq_column_block.aq-first *,
	footer .black-bg * {
		color:<?php echo $white; ?> !important;
	}
	.silver{
		color:<?php echo $silver; ?>;
	}
	.dark,
	a{
		color:<?php echo $dark; ?>;
	}
	.black,
	a:hover{
		color:<?php echo $black; ?>;
	}
	.grey{
		color:<?php echo $grey; ?> ;
	}
	.color,
	.white a:hover{
		color: <?php echo $highlight; ?>;
	}
	
	.white-bg{
		background-color:<?php echo $white; ?>;
	}
	.silver-bg{
		background-color:<?php echo $silver; ?>;
	}
	.dark-bg{
		background-color:<?php echo $dark; ?>;
	}
	.black-bg,
	.aq-block-aq_column_block.aq-first{
		background-color:<?php echo $black; ?>;
	}
	.grey-bg{
		background-color:<?php echo $grey; ?>;
	}
	.color-bg,
	.aq-block-aq_testimonial_carousel_block {
		background-color: <?php echo $highlight; ?>;
	}
	
	.trans-dark{
		background-color: rgba(<?php echo $transdark; ?>,0.5);
	}
	.trans-dark-low{
		background-color: rgba(<?php echo $transdark; ?>,0.3);
	}
	.trans-white{
		background-color: rgba(<?php echo $transwhite; ?>,0.9);
	}
	.trans-white-low{
		background-color: rgba(<?php echo $transwhite; ?>,0.7);
	}
	.trans-color{
		background-color: rgba(<?php echo $highlight; ?>,0.8);
	}
	
	.ajax-loader-html {
		background: <?php echo $highlight; ?>;
	}
	.pace .pace-progress {
	  	background-color:<?php echo $black; ?>;
	}
	
	.ms-overlay{
		background-color: rgba(<?php echo $highlightrgb; ?>,0.8);
	}
	.main-nav-menu > li > a {
		color:<?php echo $white; ?> !important;
	}
	
	.main-nav-menu > li > ul a,
	h3.dark a{
		color:<?php echo $dark; ?> !important;
	}
	.main-nav-menu > li > ul a:hover,
	h3.white a{
		color:<?php echo $white; ?> !important;
	}
	.main-nav-menu > li > ul a:after{
		color:<?php echo $dark; ?> !important;
	}
	
	.active-nav{
		color:<?php echo $dark; ?> !important;
	}
	.works-item a:hover{
		background-color: rgba(<?php echo $highlightrgb; ?>,0.8);
	}
	
	.page-head h1.white > span{
		border-color:<?php echo $white; ?>;
	}
	.works-filter li a > span{
		color:<?php echo $white; ?>;
	}
	.team-info h6 > span{
	border-color:<?php echo $black; ?>;
	}
	.foot-links li > a > span{
		color:<?php echo $dark; ?>;
	}
	.service-carousel-item:hover{
		background-color: <?php echo $highlight; ?>;
	}
	.team-info:hover{
		background-color: <?php echo $highlight; ?>;
	}
	.team-info:hover .triangle-arrow-left{
		border-color: transparent transparent transparent <?php echo $highlight; ?>;
	}
	.team-info:hover .triangle-arrow-right{
		border-color: transparent <?php echo $highlight; ?> transparent transparent;
	}
	.alert > p{
		background-color: <?php echo $highlight; ?>;
	}
	
	<?php if( get_option('use_preloader', '1') == 1 ) : ?>
	.mast-wrap {
		opacity: 0;
	}
	<?php endif; ?>
	
	<?php echo get_option('custom_css'); ?>
	
</style>
	
<?php }

add_action('login_head','ebor_custom_admin');
function ebor_custom_admin(){
	if( get_option('custom_login_logo') )
		echo '<style type="text/css">
				.login h1 a { 
					background-image: url("'.get_option('custom_login_logo').'"); 
					background-size: auto 80px;
					width: 100%; 
				} 
			</style>';
}