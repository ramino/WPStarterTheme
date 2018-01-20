<div class="col-sm-4">
	<div class="box box-article">
		<div class="box-image">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail( 'medium', array( 'class' => '' ) ); ?>
			</a>
		</div>
		<h3 class="box-article-title">
			<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
		</h3>
		<p class="article-meta"><?php echo get_the_date(); ?></p>
		<p><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
		
	</div>
</div>
