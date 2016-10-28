<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<div class="row">
					<div class="col-sm-6">
						<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar-3' ); ?>
						<?php endif; ?>
					</div>
					<div class="col-sm-6">
						<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar-4' ); ?>
						<?php endif; ?>					
					</div>
				</div>
			</div><!-- .site-info -->
		</div><!--/.container-->
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
