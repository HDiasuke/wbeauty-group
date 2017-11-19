<?php $options = get_desing_plus_option(); ?>

<!-- smartphone banner -->
<?php if(is_mobile() and !is_front_page()) { ?>
<?php if($options['mobile_ad_code2']||$options['mobile_ad_image2']) { ?>
<div id="mobile_banner_bottom">
	<?php if ($options['mobile_ad_code2']) { ?>
		<?php echo $options['mobile_ad_code2']; ?>
	<?php } else { ?>
		<a href="<?php esc_attr_e( $options['mobile_ad_url2'] ); ?>" class="target_blank"><img src="<?php esc_attr_e( $options['mobile_ad_image2'] ); ?>" alt="" title="" /></a>
	<?php }; ?>
</div>
<?php }; ?>
<?php }; ?>

	<!-- footer -->
	<div id="footer-slider-wrapper" class="clearfix">
		<div id="footer-slider-wrapper-inner">
<?php
	$args = array('post_type' => 'post', 'numberposts' => 9, 'meta_key' => 'pickup_post', 'meta_value' => 'on', 'orderby' => 'rand');
	$recommend_post=get_posts($args);
	if ($recommend_post) {
?>
			<div id="carousel" class="carousel">
<?php foreach ($recommend_post as $post) : setup_postdata ($post); ?>
				<div><a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail()) { echo the_post_thumbnail('carousel_size'); } else { echo '<img src="'; bloginfo('template_url'); echo '/images/no_image2.jpg" alt="" title="" />'; }; ?><span class="title"><?php trim_title(20); ?></span></a></div>
<?php endforeach; wp_reset_query(); ?>
			</div>
<?php }; ?>
		</div>
	</div>
	<div id="footer">
		<a href="#wrapper" id="return_top"><?php _e('Return Top', 'tcd-w'); ?></a>
		<div id="footer-inner" class="clearfix">
			<!-- logo -->
			<?php the_dp_footer_logo(); ?>
			<?php if (!empty($options['footer_banner_image1'])) { ?>
			<div id="footer-banner"><a href="<?php echo $options['footer_banner_url1']; ?>"<?php if ($options['footer_banner_target1']){ echo ' target="_blank"'; }; ?>><img src="<?php esc_attr_e( $options['footer_banner_image1'] ); ?>" alt="" /></a></div>
			<?php }; ?>
			
			<div id="footer_widget_wrapper">
			<?php if(!is_mobile()) { ?>
				<?php if(is_active_sidebar('footer_widget')){ ?>
					<?php dynamic_sidebar('footer_widget'); ?>
				<?php }; ?>
			<?php }else{ ?>
				<?php if(is_active_sidebar('mobile_widget_footer')){ ?>
					<?php dynamic_sidebar('mobile_widget_footer'); ?>
				<?php }; ?>
			<?php }; ?>
			</div>
		</div>
	</div>
	<div id="footer_copr_area" class="clearfix">
		<div id="footer_copr">
			<div id="copyright"><?php _e('Copyright &copy;&nbsp; ', 'tcd-w'); ?><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> All Rights Reserved.</div>
			<div id="footer_social_link">
			<?php if ($options['show_rss'] or $options['twitter_url'] or $options['facebook_url']) { ?>
				<ul class="social_link clearfix">
				<?php if ($options['show_rss']) : ?>
					<li class="rss"><a class="target_blank" href="<?php bloginfo('rss2_url'); ?>">rss</a></li>
				<?php endif; ?>
				<?php if ($options['twitter_url']) : ?>
					<li class="twitter"><a class="target_blank" href="<?php echo $options['twitter_url']; ?>">twitter</a></li>
				<?php endif; ?>
				<?php if ($options['facebook_url']) : ?>
					<li class="facebook"><a class="target_blank" href="<?php echo $options['facebook_url']; ?>">facebook</a></li>
				<?php endif; ?>
				</ul>
			<?php }; ?>
			</div>
		</div>
	</div>
	<!-- /footer -->
</div>
 <?php if(is_single()) { ?>
 <!-- facebook share button code -->
 <div id="fb-root"></div>
 <script>
 (function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
 </script>
 <?php }; ?>
<?php wp_footer(); ?>
</body>
</html>