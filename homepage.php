<?php
/**
 * The template for homepage
 *
 * Template name: Homepage
 *
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
			
			<!--ToDo:<div class="site-content--testimonials">
				<div class="container">
					<div class="site-box">
						<h2 class="site-box-title">Povedali o nás</h2>
						<div class="box">
							<div class="row">
								<div class="col-sm-2">logo</div>
								<div class="col-sm-10">text</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			
			<?php
			$term = term_exists('novinky', 'category');
				
			if ($term !== 0 && $term !== null) { ?>
			<div>
				<div class="container">
					<div class="site-box">
						<h2 class="site-box-title">Novinky</h2>
						<div class="row">
							<?php
							// WP_Query arguments
							$args = array (
								'order' 			=> 'ASC',
								'category_name'		=> 'novinky',
								'posts_per_page'	=> 3
							);
							
							// The Query
							$query = new WP_Query( $args );
							
							// The Loop
							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									echo get_post_format();
									get_template_part( 'templates/type', 'post');
								}
							} else {
								echo "No posts";
							}
								
							// Restore original Post Data
							wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div><?php
			} ?>
			
			<?php
			$term = term_exists('referencie', 'category');
			if ($term !== 0 && $term !== null) { ?>
			
			<div class="site-box site-box-light">
				<div class="container">
					<h2 class="site-box-title">Referencie</h2>
					<div class="row">
						<?php
						// WP_Query arguments
						$args = array (
							'order' 			=> 'ASC',
							'category_name'		=> 'referencie',
							'posts_per_page'	=> 3
						);
						
						// The Query
						$query = new WP_Query( $args );
						
						// The Loop
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								get_template_part( 'content', get_post_format() );
							}
						} else {
							echo "No posts";
						}
							
						// Restore original Post Data
						wp_reset_postdata(); ?>
					</div>
				</div><!--/.container-->
			</div><?php
			} ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
	


<?php get_footer(); ?>
