<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta property="wb:webmaster" content="e052acb6e00a6904" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	?></title>
<link rel="shortcut icon" href="http://starters12questions.com/wp-content/uploads/2012/02/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<style type="text/css">
body {padding-top: 40px;padding-bottom: 40px;}
</style>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31350275-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<? wp_head() ?>
</head>

<body <?php body_class(); ?>>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">起步者十二问</a>
			<div class="nav-collapse">
				<ul class="nav">
				  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">主页</a></li>
				  <li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">起步者<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo esc_url( home_url( '/category/entrepreneur/' ) ); ?>">创业 - Entrepreneur</a></li>
						<li><a href="<?php echo esc_url( home_url( '/category/writer/' ) ); ?>">作家 - Writer</a></li>
						<li><a href="<?php echo esc_url( home_url( '/category/traveler/' ) ); ?>">旅行 - Traveller</a></li>
						<li><a href="<?php echo esc_url( home_url( '/category/shopowner/' ) ); ?>">店主 - Shop Owner</a></li>
						<li><a href="<?php echo esc_url( home_url( '/category/artist/' ) ); ?>">艺术 - Artist</a></li>
						<li><a href="<?php echo esc_url( home_url( '/category/freelancer/' ) ); ?>">自由 - Freelancer</a></li>
						<li><a href="<?php echo esc_url( home_url( '/category/uncategorized/' ) ); ?>">其他 - Others</a></li>
					</ul>
				  </li>
				  <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">关于我们</a></li>
				<li><span class="addfeed_cn">
    <a href="<?php bloginfo('rss2_url'); ?>" title="订阅起步者十二问">订阅</a>
</span></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">小站<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="http://zhan.renren.com/starters12questions">人人小站</a></li>
						<li><a href="http://site.douban.com/143222/">豆瓣小站</a></li>
						<li><a href="http://weibo.com/starter12">新浪微博</a></li>
					</ul>
				  </li>
				</ul>
				
				<form class="navbar-search pull-right" method="get" action="<?php echo get_option('home'); ?>/">
					<input type="text" class="search-query" placeholder="Search" name="s">
				</form>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>
<?php 
if ( !is_home() ) {
	echo '<br>';
};
?>