<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="content" class="site-content">

		<div id="primary" class="content-area">

			<main id="main" class="site-main" role="main">
				
				<div class="site-box">
					<?php get_template_part('templates/part-1'); ?>
				</div>
				
				<div class="site-box site-box-light">
					<?php get_template_part('templates/part-2'); ?>
				</div>
				
				<div class="site-box">
					<?php get_template_part('templates/part-3'); ?>
				</div>
				
				<div class="site-box site-box-secondary">			
					<?php get_template_part('templates/part-4'); ?>
				</div>
				
				<div class="site-box site-box-primary">
					<?php get_template_part('templates/part-5'); ?>
				</div>
					
				<div class="site-box">
					<?php get_template_part('templates/part-6'); ?>
				</div>

				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
					<div id="widget-area" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div><!-- .widget-area -->
				<?php endif; ?>

			</main><!-- .site-main -->
		</div><!-- .content-area -->

	</div>


	<?php //get_sidebar(); ?>

<?php get_footer(); ?>
