<?php get_header(); ?>

	<?php $finish_tag = 'finished'; ?>
	<?php $comming_tag = 'comming'; ?>
	<?php $newest_query = new WP_Query( array( 'tag' => $finish_tag, 'posts_per_page' => 1)); ?>
	<?php $before_query = new WP_Query( array( 'tag' => $finish_tag, 'posts_per_page' => 6, 'offset' => 0)); ?>
	<?php $comming_query = new WP_Query( array( 'tag' => $comming_tag, 'posts_per_page' => 7, 'order' => 'ASC')); ?>
	
	<div class="hero-unit">
		<div class="container">
			<div class="row ac">
				<h2>任何人，只要创造了一点新的什么，就可以被称为起步者。</h2>
				<h2>Anyone who starts anything new is a starter.</h2>
				<hr>
			</div>
<div class="row">
<div class="span2">
<img src="http://starters12questions.com/wp-content/uploads/2012/03/Icon-300-起步者.png">
</div>
<div class="span10">
<p>你可以是创业者、组织头目、活动发起人、设计师、街头艺术家、作家、知名博主、自由职业者、手工艺人、骑行者、背包客或者任何其它的什么...</p>
<p>你不需要MBA的训练，一张证书，一套笔挺的西装，一个公文包，或者比他人更多的承担风险的能力。<br>
你不需要每周痛苦的工作60/80/100个小时，或者耗尽一生的积蓄或者承担巨大的风险。<br>
你所需要的只是一个创意，一个梦想，一份自信，和一点立马开始的决心。</p>
<p>在这里，所有起步者回答同样的11个问题，加上1个你提的问题。</p>
</div>
</div>

		</div>
	</div>
    <div class="container">
		<div id="indexSlide" class="carousel">
			<div class="carousel-inner">
				<?php $first = true; ?>
				<?php while ($comming_query->have_posts()) : $comming_query->the_post(); ?>
				<div class="row item <?php if ($first) { echo 'active'; $first=false;}; ?>">
					<div class="span2"><?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/default.png">
					<?php endif; ?></div>
					<div class="span8">
						<h2>即将到访嘉宾: <?php the_title(); ?> <small><?php echo get_post_meta(get_the_ID(),'finished_date',true); ?></small></h2>
						<hr>
						<?php $category = get_the_category(); ?>
						<p class="label-<?php echo $category[0]->slug; ?>"><i class="icon-user"></i><?php echo $category[0]->cat_name; ?>: <strong><?php echo get_post_meta(get_the_ID(),'people_title',true); ?></strong></p>
						<p><?php the_excerpt(); ?></p>
					</div>

					<div class="span2">
					<div class="row">
						<div class="span2" style="position: relative;height: 50px;">
						<a class="carousel-control left" href="#indexSlide" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#indexSlide" data-slide="next">&rsaquo;</a>
						</div>
					</div>
					<div class="row">
						<div class="span2 ac">
						<p><a class="btn btn-primary btn-large" href="<?php the_permalink(); ?>">提出你的问题 &raquo;</a></p>			
						<h3><small>你可以向嘉宾提问噢！<br/>我们将邀请其作答</small></h2>
						</div>
					</div>
					</div>

				</div>
				<?php endwhile; ?>
			</div>
		</div>	
		<hr>
		<h2>近期起步者</h2>
		<div class="row">
			<?php while ($before_query->have_posts()) : $before_query->the_post(); ?>
			<div class="span2">
				<div class="thumbnail tran5">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
					<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/default.png">
					<?php endif; ?>
					
					<div class="caption ac">
						<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<p><?php echo get_post_meta(get_the_ID(),'people_title',true); ?></p>
						<?php $category = get_the_category(); ?>
						<p><a href="<?php echo esc_url( get_category_link($category[0]->cat_ID) ); ?>"><span class="label label-<?php echo $category[0]->slug; ?>"><?php echo $category[0]->cat_name; ?></span></a></p>
					</div>
				</div>		  
			</div>
			<?php endwhile; ?>
		</div>
    </div> <!-- /container -->
	
<?php get_footer(); ?>