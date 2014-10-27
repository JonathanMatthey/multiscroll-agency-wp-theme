<?php
	$header = false;
	if(isset( $_GET['header-open'] ))
		$header = 'header-open';
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php echo ( is_home() || is_front_page() ) ? bloginfo('name') : wp_title('| ', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class('post ' . $header); ?>>

<section class="mast-wrap">

<!-- Mobile menu -->
<div class="mobile-nav hidden-lg">
	<?php
		if ( has_nav_menu( 'primary' ) ){
		    wp_nav_menu(
		    	array(
			        'theme_location'    => 'primary',
			        'depth'             => 2,
			        'container'         => false,
			        'container_class'   => false,
			        'menu_class'        => 'slimmenu'
		        )
		    );
		} else {
			echo '<ul class="slimmenu"><li><a href="'. admin_url('nav-menus.php') .'">Set up a navigation menu now</a></li></ul>';
		}
	?>
</div>
<!-- end mobile menu -->

<div id="wrap">
    <!-- Desktop menu -->
	<header class="main-nav visible-lg ebor-header-<?php echo get_option('header_animation','right'); ?>">
	  <div class="row">

	    <article class="col-md-6 fullheight black-bg text-center">
	      <div class="valign">

	      	<?php
	      		if ( has_nav_menu( 'primary' ) ){
	      		    wp_nav_menu(
	      		    	array(
	      			        'theme_location'    => 'primary',
	      			        'depth'             => 2,
	      			        'container'         => false,
	      			        'container_class'   => false,
	      			        'menu_class'        => 'main-nav-menu main-nav-menu-effect'
	      		        )
	      		    );
	      		} else {
	      			echo '<ul class="main-nav-menu main-nav-menu-effect"><li class="trigger-sub-nav"><a href="'. admin_url('nav-menus.php') .'" class="main-nav-link">Set up a navigation menu now</a></li></ul>';
	      		}

	      		get_template_part('inc/content','header-social');
	      	?>

	        <div class="credits">
	        	<?php echo wpautop(htmlspecialchars_decode(get_option('copyright', 'Configure this message in "appearance" => "customize"'))); ?>
	        </div>

	      </div>
	    </article>

		<article class="col-md-6 fullheight white-bg bg-cover no-parallax text-center" style="background-image: url(<?php echo get_option('header_background'); ?>);">
			<div class="valign">
				<a href="<?php echo home_url(); ?>">
					<?php if( get_option('custom_logo') ) : ?>
						<img src="<?php echo get_option('custom_logo'); ?>" alt="<?php echo get_option('custom_logo_alt_text'); ?>" class="retina" />
					<?php endif; ?>
				</a>
			</div>
		</article>

	  </div>
	</header><!-- end header -->
	<!-- end desktop menu -->

	<!-- Desktop header -->
	<section class="top-header visible-lg">

		<a class="top-taylor-logo" href="http://localhost:8080/dev/taylorstrategy/wp/">
		</a>

		<!-- <div class="row"> -->
			<article class="top-header-left col-md-6 white-bg text-center ">
				<h3 class="dark"><a href="<?php echo home_url(); ?>">WHO WE ARE</a></h3>
				<div class="vmenu">
					<div class="vmenu-item">
						<a href="http://localhost:8080/dev/taylorstrategy/wp/capabilities">Capabilities</a>
					</div>
					<div class="vmenu-item">
						<a href="http://localhost:8080/dev/taylorstrategy/wp/people">People</a>
					</div>
					<div class="vmenu-item">
						<a href="http://localhost:8080/dev/taylorstrategy/wp/opportunities">Opportunities</a>
					</div>
					<div class="vmenu-item">
						<a href="http://localhost:8080/dev/taylorstrategy/wp/contact">Contact</a>
					</div>
				</div>
			</article>
			<article class="top-header-right col-md-6 white-bg text-center">
				<h3 class="dark"><a href="<?php echo home_url(); ?>">WHAT WE DO</a></h3>
				<div class="vmenu">
					<div class="vmenu-item">
						<a href="http://localhost:8080/dev/taylorstrategy/wp/clients">Clients</a>
					</div>
					<div class="vmenu-item">
						<a href="http://localhost:8080/dev/taylorstrategy/wp/work">Work</a>
					</div>
					<div class="vmenu-item">
						<a href="http://localhost:8080/dev/taylorstrategy/wp/news">News</a>
					</div>
					<div class="vmenu-item">
						<a href="http://localhost:8080/dev/taylorstrategy/wp/awards">Awards</a>
					</div>
				</div>
			</article>
		<!-- </div> -->

		<div class="toggle-menu-wrap">
<!-- 			<a id="toggle-menu" class="toggle-menu-hidden">
				<div>
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
			</a> -->
			<a href="/" class="taylor-logo">Taylor</a>
		</div>

	</section>
	<!-- end desktop header -->