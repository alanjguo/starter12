<div class="row people-intro">
	<div class="span2">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php else: ?>
			<img src="<?php echo get_template_directory_uri(); ?>/img/default.png">
		<?php endif; ?>
	</div>
	<div class="span6">
	<h1><?php the_title(); ?><br><small><?php echo get_post_meta(get_the_ID(),'people_title',true); ?></small></h1>
	<?php $category = get_the_category(); ?>
	<p><i class="icon-user"></i> : <a href="<?php echo esc_url( get_category_link($category[0]->cat_ID) ); ?>"><span class="label label-<?php echo $category[0]->slug; ?>"><?php echo $category[0]->cat_name; ?></span></a></p>
	<?php $quote = get_post_meta(get_the_ID(),'people_quote',true);
	if ($quote) : ?>
		<blockquote><p style="font-size: 15px;font-weight: bold;"><?php echo $quote; ?></p></blockquote>
	<?php endif ?>
	
	</div>
</div>

<div class="page-header"><h2>嘉宾简介</h2></div>
<div class="row text-indent"><div class="span8"><?php the_excerpt(); ?></div></div>

<? if (has_tag("finished")) : ?>
<div class="page-header"><h2>十二问<div class="btn-group pull-right language-switcher"><a id="zh-on" class="btn active">中文</a><a id="en-on" class="btn">English</a></div></h2></div>
<div class="row text-indent"><div class="span8"><?php the_content(); ?></div></div>
<hr>
<div id="ckepop">
	<span class="jiathis_txt">分享到：</span>
	<a class="jiathis_button_tsina">新浪微博</a>
	<a class="jiathis_button_renren">人人网</a>
	<a class="jiathis_button_tqq">腾讯微博</a>
	<a class="jiathis_button_douban">豆瓣</a>
	<a href="http://www.jiathis.com/share?uid=1579942" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
</div><br>
<hr>
<p class="alert alert-error">本文版权为 <a href="<?php echo esc_url( home_url( '/' ) ); ?>">起步者十二问</a> 所有。转载本站文章请注明出处，附上原文链接。</p>
<div class="row">
	<div class="span8">
	<i class="icon-user"></i> : <a href="<?php echo esc_url( get_category_link($category[0]->cat_ID) ); ?>"><span class="label label-<?php echo $category[0]->slug; ?>"><?php echo $category[0]->cat_name; ?></span></a>&nbsp;&nbsp;&nbsp;
	<?php
	$tags = get_the_tags();
	if ($tags) :?>
		<i class="icon-tags"></i> : 
	<?php foreach($tags as $tag) { ?>
			<a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><span class="label"><?php echo $tag->name ?></span></a>
	<?php }
	endif;?>
	</div>
</div>
<? else: ?>
<p class="alert">嘉宾将在 <?php echo get_post_meta(get_the_ID(),'finished_date',true); ?> 到访，如果有你有什么问题想问嘉宾，赶紧在下面提出吧！</p>
<? endif;?>
<hr>