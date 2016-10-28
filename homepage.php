<?php
/**
 * The template for displaying pages
 *
 * Template name: Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	
			<div>
				
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					the_content();

				// End the loop.
				endwhile;
				?>
			</div><!-- .container -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
