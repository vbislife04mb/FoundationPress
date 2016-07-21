<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		<div class="off-canvas-wrapper">
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
			<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
		<?php endif; ?>
	

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
<!-- action bar mobile menu and phone icon for small devices  -->
		<!-- <div class="action-bar small-12 row align-justify align-top show-for-small-only">
			<div data-responsive-toggle="site-navigation">
				<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>
			</div>
			<div>
				<i class="fa fa-phone fa-2x fa-pull-right show-for-small-only" aria-hidden="true"></i>
			</div>
		</div> -->
<!-- action bar -->
		<!-- <div class="action-bar small-12 row align-right align-top show-for-medium ">
			<h5 class="phone-number show-for-medium">(402)XXX-XXXX</h5>
		</div> -->
<!-- logo with link home -->
		<div class="small-11 row logo align-center" style="margin-top: 20px;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/img/logo.svg"></a></div>
		

<!-- main site navigation for medium and up devices -->
		<!-- <nav id="site-navigation" class="main-navigation" role="navigation">

			<div class=" dropdown menu medium-12 align-center" data-dropdown-menu>
				<?php foundationpress_top_bar_r(); ?>
			

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
				<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav> -->

	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
