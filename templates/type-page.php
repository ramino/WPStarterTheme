<article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
	<h1 class="article-title"><?php the_title(); ?></h1>
	
	<div class="article-content">
		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer site-edit"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
</article><!-- #post-## -->
