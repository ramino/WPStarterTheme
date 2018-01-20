<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<header class="site-header">
		<div class="container">

			<div class="navbar">
				<div class="navbar-info navbar-toggleable-md float-right">
					<p class="hidden-md-down">
						<span class="navbar-info-item"><?php get_template_part('build/img/icon', 'airplane.svg'); ?> <a href="mailto:info@ramino.sk">info@ramino.sk</a></span>
						<span class="navbar-info-item"><?php get_template_part('build/img/icon', 'phone.svg'); ?> +421 908 406 860</span>
					</p>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<a href="<?php echo get_home_url(); ?>" title="Starteršablóna.sk" class="navbar-brand">
					<span><?php echo get_bloginfo('name'); ?></span>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<?php get_template_part('build/img/toggler', 'icon.svg'); ?>
					</span>
				</button>
				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_class'     => 'navbar-nav navbar-primary navbar-expand-lg',
								'menu_id'    	 => 'navbar',
								'container_class'=> 'collapse navbar-collapse',
								'container_id'	 => 'collapsingNavbar',
								'walker' => new CleanMenu(),
							) );
						?>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
		
		<nav class="navbar navbar-light bg-faded">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="navbar-brand">
							<a href="<?php echo get_home_url(); ?>" title="Starteršablóna.sk" class="brand-logo">
								<span><?php echo get_bloginfo('name'); ?></span>
							</a>
						</div>
					</div>
					<div class="col-sm-8">
						
					</div>
				</div>
				<div class="navbar-toggleable-md">
					<div class="collapse justify-content-end navbar-collapse" id="navbarTogglerDemo01">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<div class="nav" role="navigation">
								<?php
									// Primary navigation menu.
									wp_nav_menu( array(
										'menu_class'     => 'nav-item',
										'theme_location' => 'primary',
									) );
								?>
							</div><!--/.navbar-nav -->
						<?php endif; ?>
					</div>
				</div>
			</div><!--/.container-->
		</nav>


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
		
	</header><!--/header-->
	
	<?php if ( is_front_page() ) { ?>
		<div class="banner">
			<div class="banner-gradient">
				<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
			
				<div class="banner-wrapper">
					<div class="container">
						<div class="banner-description">
							<p class="banner-title"><?php echo $description; ?></p>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</div><?php
	} ?>
