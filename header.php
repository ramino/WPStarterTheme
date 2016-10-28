<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class('site-body'); ?>>
<div id="page" class="hfeed site">
	<div class="site-header">
		<div class="container">
		<!--<div class="site-header--top text-sm-right">
			<p>
				<span class="genericon genericon-mail"></span> <a href="mailto:info@ramino.sk">info@firma.sk</a>
			</p>
			<p>
				<span class="genericon genericon-handset"></span> +421 789 456 123
			</p>
			<p>
				<a href="" class="social-icon"><span class="genericon genericon-twitter"></span></a>
			</p>
			<p>
				<a href="" class="social-icon"><span class="genericon genericon-facebook"></span></a>
			</p>
			<p>
				<a href="" class="social-icon"><span class="genericon genericon-pinterest-alt"></span></a>
			</p>
			<p>
				<a href="" class="social-icon"><span class="genericon genericon-youtube"></span></a>
			</p>
			<p>
				<a href="" class="social-icon"><span class="genericon genericon-instagram"></span></a>
			</p>

		</div>-->

		<div class="row">
			<div class="col-sm-4">
			<?php
				twentyfifteen_the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-brand-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif;
			?>
			</div>
			<div class="col-sm-8 text-sm-right">
							<div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="site-navigation main-navigation" role="navigation">
					<?php
						// Primary navigation menu.
						wp_nav_menu( array(
							'menu_class'     => 'nav nav-inline',
							'theme_location' => 'primary',
						) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

				</div>
			</div>
		</div>
		
		<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">&#9776;</button>
		</div>
	</div>
	
	<?php if ( is_front_page() ) { ?>
		<div class="site-image">
			<div class="container">
				<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<div class="site-description">
						<p class="site-description-title"><?php echo $description; ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div><?php
	} ?>

	<?php if ( function_exists('yoast_breadcrumb') && ! is_home() && ! is_front_page() ) { ?>
		<div class="container site-breadcrumb">
			<?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
		</div>
	<?php } ?>
