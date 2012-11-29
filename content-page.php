<div class="page-header"><h1><?php the_title(); ?></h1></div>
<div class="row">
	<div class="span12">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		<div class="entry-meta">
			<?php edit_post_link( __( '修改该页面', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</div>
</div>
