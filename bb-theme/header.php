<?php

/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,700;0,900;1,300&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar">
			
			<div class="top-header-holder">
				<div class="container">
					<div class="row align-items-end">
						<div class="col-4">
						<div class="social-media-holder">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-instagram"></i>
					</div>
					</div>
					<div class="col-5">
					<div class="logo-holder">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Ballerina Bulldog Logo" width="170">
						</div>
					</div>
					<div class="col-2">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
							<div class="bar"></div>
							<div class="bar"></div>
							<div class="bar"></div>
					</button>
				</div>
			</div>
		</div>
				<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>
						
				<nav id="main-nav" class="navbar navbar-expand-xxl" aria-labelledby="main-nav-label">		
					
					<h2 id="main-nav-label" class="sr-only">
						<?php esc_html_e('Main Navigation', 'understrap'); ?>
					</h2>


					<div class="container">

						<!-- The WordPress Menu goes here -->
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav ml-auto',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						);
						?>

					</div><!-- .container -->


				</nav><!-- .site-navigation -->

			</div><!-- #wrapper-navbar end -->

		<!--	<div class="container">
				<div class="mobile-logo-holder">
					<div><a href="/">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Ballerina Bulldog Logo">
						</a></div>
				</div>
			</div>-->
		</div>