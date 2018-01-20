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
<footer class="site-footer site-footer--flex site-footer--flex--fixed--bottom">
	<div class="container">
		<div class="footer-info">
			<div class="row">
				<div class="col-sm-4">
					<div class="box box--footer">
						<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
							<?php dynamic_sidebar( 'footer-widget-1' ); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box box--footer">
						<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
							<?php dynamic_sidebar( 'footer-widget-2' ); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="box box--footer">
						<?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
							<?php dynamic_sidebar( 'footer-widget-3' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<p><small>&copy; 2016 - <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></small></p>
				</div>
				<div class="col-md-6 text-right">
					<p>Na webdesign tu je <a href="http://www.ramino.sk/" title="ramino.sk">ramino.sk</a></p>
				</div>
			</div>
		</div><!--/.footer-info -->
	</div><!--/.container-->
</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
