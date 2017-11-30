<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vmc_gotland
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">

		<div class="navigation-spacer"></div>

		<div id="site-navigation-mobile" class="main-navigation-mobile">
			<div class="main-navigation-mobile__group main-navigation-mobile__nav">
				<a href="#" id="mobile-menu-toggle">Meny</a>
			</div><!-- .main-navigation-mobile -->

			<div class="main-navigation-mobile__group main-navigation-mobile__logo">
				<?php the_custom_logo(); ?>
			</div><!-- .main-navigation-mobile -->
		</div><!-- #site-navigation-mobile -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<?php // esc_html_e( 'Primary Menu', 'vmc_gotland' ); ?>
			</button> -->

			<div class="main-navigation__group main-navigation__nav">
				<?php wp_nav_menu( array( 'theme_location' => 'main_navigation', 'menu_id' => 'menu-main' ) ); ?>
			</div><!-- .main-navigation__nav -->

			<div class="main-navigation__group main-navigation__logo">
				<?php the_custom_logo(); ?>
			</div><!-- .main-navigation__logo -->

			<div class="main-navigation__group main-navigation__cars">
				<?php wp_nav_menu( array( 'theme_location' => 'car_manufacturers', 'menu_id' => 'menu-cars' ) ); ?>
			</div><!-- .main-navigation__cars -->

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
