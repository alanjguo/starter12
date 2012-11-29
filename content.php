<div class="row">
	<div class="span2">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/default.png">
		<?php endif; ?>
	</div>
	<div class="span6">
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3><?php _e( 'Featured', 'twentyeleven' ); ?></h3>
				</hgroup>
			<?php else : ?>
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <small><?php echo get_post_meta(get_the_ID(),'people_title',true); ?></small></h1>
			<?php endif; ?>
		</header><!-- .entry-header -->

		
		<?php the_excerpt(); ?>
		
		<div class="entry-meta">
			<?php $category = get_the_category(); ?>
			<i class="icon-user"></i> : <a href="<?php echo esc_url( get_category_link($category[0]->cat_ID) ); ?>"><span class="label label-<?php echo $category[0]->slug; ?>"><?php echo $category[0]->cat_name; ?></span></a>&nbsp;&nbsp;&nbsp;
			<?php
			$tags = get_the_tags();
			if ($tags) :?>
				<i class="icon-tags"></i> : 
			<?php foreach($tags as $tag) { ?>
					<a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><span class="label"><?php echo $tag->name ?></span></a>
			<?php }
			endif;?>&nbsp;
			
			<?php if ( comments_open() ) : ?>
			<i class="icon-comment"></i> : <?php comments_popup_link( '<span>' . __( '我要提问', 'twentyeleven' ) . '</span>', __( '<b>1</b>个提问', 'twentyeleven' ), __( '<b>%</b>个提问', 'twentyeleven' ) ); ?>
			<?php endif; // End if comments_open() ?>&nbsp;&nbsp;&nbsp;

			<?php edit_post_link( __( '编辑', 'twentyeleven' ), '<i class="icon-pencil"></i> : <span class="edit-link">', '</span>' ); ?>
			
		</div><!-- #entry-meta -->
	</div>
</div>
<hr>
