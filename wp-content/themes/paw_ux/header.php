<?php
/**
 * The header for our theme.
 *
 * @package paw_ux_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>


		<div id="page" class="hfeed site">
			<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a> -->

			<header id="masthead" class="site-header" role="banner">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					
					<div class="navigation-inner">
						<div class="logo">
							<div>
								<h1>paw_ux</h1>
							</div>
						</div>

						<div class="nav-selection">
							<!-- <h3>menu</h3> -->
						</div>
					</div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">