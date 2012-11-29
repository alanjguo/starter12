	<footer>
        <div class="container">
          <div class="row">
          <div class="span11">
            <div class="row">
              <div class="span3">
                <h4>起步者分类</h4>
                <ul class="unstyled">
                  <li><a href="<?php echo esc_url( home_url( '/category/entrepreneur/' ) ); ?>">创业</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo esc_url( home_url( '/category/writer/' ) ); ?>">作家</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/category/traveler/' ) ); ?>">旅行</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo esc_url( home_url( '/category/shopowner/' ) ); ?>">店主</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/category/artist/' ) ); ?>">艺术</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo esc_url( home_url( '/category/freelancer/' ) ); ?>">自由职业</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/category/uncategorized/' ) ); ?>">其他</a></li>
                  <li></li>
                </ul>
              </div>
              <div class="span5">
                <h4>近期十二问嘉宾</h4>
				<ul class="unstyled">
				<?php
					$recent_posts = wp_get_recent_posts(array( 'numberposts' => '6' ));
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.$recent["post_title"].'" >' .   $recent["post_title"].' - '.get_post_meta($recent["ID"],'people_title',true).'</a></li> ';
					}
				?>
				</ul>
              </div>
              <div class="span2 offset1">
                <h4>联系我们</h4>
		<ul class="unstyled">
			<li><a>给我们发邮件：</a></li>
			<li><a href="mailto:contact@starter12.com">contact@starter12.com</a></li>
		</ul>
              </div>
            </div>
          </div>
        </div>

		</div>
		<div id="footer-floor">
			<div class="container">
			<div class="row">
			<div class="span6">
				<p>© 2012 <a href="<?php echo esc_url( home_url( '/' ) ); ?>">起步者十二问</a>. All Rights Reserved. </p>
			</div>
			<div class="span2 offset2">
				<h3>stay in touch:</h3>
			</div>
			<div class="span2">
				<p>
				<a href="http://weibo.com/starter12"><span class="follow weibo"></span></a>
				<a href="<?php echo esc_url( __( 'http://zhan.renren.com/starters12questions', 'twentyeleven' ) ); ?>"><span class="follow renren"></span></a>
				<a href="http://site.douban.com/143222/"><span class="follow douban"></span></a>
				</p>
			</div>
			</div>
		  </div>
      </footer>

    <script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-carousel.js"></script>
<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js?uid=1579942" charset="utf-8"></script>
<script type="text/javascript" src="http://china-addthis.googlecode.com/svn/trunk/addfeed.js" charset="UTF-8"></script>
    <script type="text/javascript">
		$$addfeed.init();
		$('#indexSlide').carousel({interval: 100000});
		var jiathis_config={
			data_track_clickback:true,
			summary:"起步者是那些在你身边，不屈从现实洪流，为梦想迈出步子的人。在起步者十二问，一起听梦想的声音。",
			hideMore:false,
			appkey:{"tsina":"1521769570"},
			ralateuid:{"tsina":"2640954661"}
		};
		$('.language-switcher .btn').click(function() {
			if (!$(this).hasClass('active')) {
				$('#zh-on').toggleClass('active');
				$('#en-on').toggleClass('active');
				$('#zh-version').toggle();
				$('#en-version').toggle();
			}
		});		
	</script>

<?php wp_footer(); ?>

</body>
</html>