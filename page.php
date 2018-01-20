<?php get_header(); ?>

<div class="site-content site-content--flex content-area">
	<main class="site-main" role="main">
		<div class="container">
			<?php if ( function_exists('yoast_breadcrumb') && ! is_home() && ! is_front_page() ) { ?>
				<div class="breadcrumb">
					<?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
				</div>
			<?php } ?>
			
			<div class="row">
				<div class="col-sm-9">
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();
	
						// Include the page content template.
						get_template_part( 'templates/type', 'page' );
	
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
	
					// End the loop.
					endwhile;
					?>
				</div>
				<div class="col-sm-3">
					<div class="box">
						<h2 class="widget-title">Naše služby</h2>
						<?php
							// Get the Page ID
							$pageID = get_the_ID();
							
							$args = array(
								'child_of'	=> 88,
								'posts_per_page'	=> '5',
								'exclude'			=> $pageID,
								'post_title'		=> ''
							); 
							
							wp_list_pages($args);
						?>
					</div>
				</div>
			</div><!--/.row-->
		</div><!--/.container-->
	</main><!--/.site-main-->
	
</div><!--/.site-content-->

<?php get_footer(); ?>
