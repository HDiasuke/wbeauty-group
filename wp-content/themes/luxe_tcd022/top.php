<?php
/*
Template Name:TOP PAGE
*/
?>
<?php get_header(); $options = get_desing_plus_option(); ?>

	<div id="contents" class="clearfix">
		<!-- index contents -->
		<?php if($options['index_main_image1']): ?>
		<div id="slider-wrapper">
			<div id="flex-slider" class="flexslider">
				<ul class="slides">
				<?php for($i = 1; $i <= 5; $i++): ?>
					<?php if($options['index_main_image'.$i]) { ?>
						<?php if($options['slider_url'.$i]) { ?>
					<li><a href="<?php esc_attr_e( $options['slider_url'.$i] ); ?>"<?php if($options['slider_target'.$i]){echo ' target="_blank"';}; ?>><img src="<?php esc_attr_e( $options['index_main_image'.$i] ); ?>" alt="" title="" /></a></li>
						<?php } else { ?>
					<li><img src="<?php esc_attr_e( $options['index_main_image'.$i] ); ?>" alt="" title="" /></li>
						<?php }; ?>
					<?php }; ?> 
				<?php endfor; ?>
				</ul>
			</div>
		</div>
		<?php endif; ?>
		<div id="maincopy">
			<h2><?php echo ($options['headline_maincopy']); ?></h2>
			<p><?php echo ($options['maincopy']); ?></p>
		</div>
		
		<?php if ($options['index_banner_image1']) { ?>
		<div id="index-menu" class="clearfix mb20">
			<ul id="index-menu-ul" class="clearfix">
				<?php for($i = 1; $i <= 3; $i++): ?>
				<?php if($options['index_banner_image'.$i]) { ?>
					<?php if($i==3){ ?>
				<li class="index-meun-li-last">
					<p class="index-menu-thumb"><a href="<?php esc_attr_e( $options['index_banner_url'.$i] ); ?>"<?php if($options['index_banner_target'.$i]){echo ' target="_blank"';}; ?>><img src="<?php esc_attr_e( $options['index_banner_image'.$i] ); ?>" alt="" /></a></p>
					<h2 class="index-menu-title"><a href="<?php esc_attr_e( $options['index_banner_url'.$i] ); ?>"<?php if($options['index_banner_target'.$i]){echo ' target="_blank"';}; ?>><?php echo $options['index_banner_headline'.$i]; ?></a></h2>
					<p class="index-menu-desc"><a href="<?php esc_attr_e( $options['index_banner_url'.$i] ); ?>"<?php if($options['index_banner_target'.$i]){echo ' target="_blank"';}; ?>><?php echo $options['index_banner_text'.$i]; ?></a></p>
				</li>
					<?php }else{ ?>
				<li class="index-meun-li">
					<p class="index-menu-thumb"><a href="<?php esc_attr_e( $options['index_banner_url'.$i] ); ?>"<?php if($options['index_banner_target'.$i]){echo ' target="_blank"';}; ?>><img src="<?php esc_attr_e( $options['index_banner_image'.$i] ); ?>" alt="" /></a></p>
					<h2 class="index-menu-title"><a href="<?php esc_attr_e( $options['index_banner_url'.$i] ); ?>"<?php if($options['index_banner_target'.$i]){echo ' target="_blank"';}; ?>><?php echo $options['index_banner_headline'.$i]; ?></a></h2>
					<p class="index-menu-desc"><a href="<?php esc_attr_e( $options['index_banner_url'.$i] ); ?>"<?php if($options['index_banner_target'.$i]){echo ' target="_blank"';}; ?>><?php echo $options['index_banner_text'.$i]; ?></a></p>
				</li>
					<?php }; ?>
				<?php }; ?>
				<?php endfor; ?>
			</ul>
		</div>
		<?php }; ?>

		<!-- /index contents -->
		
		<!-- main contents -->
		<div id="mainColumn">
			<?php if ($options['show_index_news']) { ?>
			<div id="index-news" class="clearfix">
				<h2 id="index-news-headline"><?php echo ($options['index_headline_news']); ?></h2>
				<?php if ($options['show_index_news_link']) { ?><p id="index-news-archivelink"><a href="<?php echo get_post_type_archive_link('news'); ?>"><?php _e("Older News","tcd-w"); ?></a></p><?php };?>
			</div>
			<ul id="index-news-ul">
<?php
	$args = array('post_type' => 'news', 'numberposts' => 5);
	$news_post=get_posts($args);
	if ($news_post) :
	foreach ($news_post as $post) : setup_postdata ($post);
?>
				<li><a href="<?php the_permalink() ?>"><span class="index-news-date"><?php the_time('Y.m.d'); ?></span><?php the_title(); ?></a></li>
<?php endforeach; else: ?>
				<li><?php _e("There is no registered news.","tcd-w"); ?></li>
<?php endif; ?>
			</ul>
			<?php }; ?>

<!-- center banner -->
<?php if (!empty($options['index_center_banner_image'])) { ?>
			<div id="index-banner">
				<a id="index_center_banner" href="<?php echo $options['index_center_banner_url']; ?>"<?php if ($options['index_center_banner_target']){ echo ' target="_blank"'; }; ?>><img src="<?php esc_attr_e( $options['index_center_banner_image'] ); ?>" alt="" /></a>
			</div>
<?php }; ?>


<?php
	if ($options['show_index_blog']) {
		if ($options['show_index_recommended']) {
			$args = array('post_type' => 'post', 'numberposts' => 6, 'meta_key' => 'recommend_post', 'meta_value' => 'on', 'orderby' => 'rand');
		}else{
			$args = array('post_type' => 'post', 'numberposts' => 6);
		}
	$recommend_post=get_posts($args);
	if ($recommend_post) {
?>
			<div id="index-redommend-headline-wrapper" class="clearfix">
				<h2 id="index-recommend-headline-left"><?php echo ($options['index_headline_blog']); ?></h2>
				<?php if ($options['index_recommend_link']) { ?><p id="index-recommend-archivelink"><a href="<?php echo $options['index_recommend_link']; ?>"><?php _e("Posts Page","tcd-w"); ?></a></p><?php };?>
			</div>
			<div id="index-recommend" class="clearfix">
<?php foreach ($recommend_post as $post) : setup_postdata ($post); ?>
				<!-- one block -->
				<div class="index-recommend-box">
					<p class="index-recommend-box-thumb"><a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail()) { echo the_post_thumbnail('size2'); } else { echo '<img src="'; bloginfo('template_url'); echo '/images/no_image1.jpg" alt="" title="" />'; }; ?></a></p>
					<h3 class="index-recommend-box-title"><a href="<?php the_permalink() ?>"><?php if(is_mobile()){trim_title(25);}else{the_title();}; ?></a></h3>
					<ul class="meta clearfix">
						<?php if ($options['show_category']) : ?><li class="post_category"><i class="fa fa-folder-open-o"></i><?php the_category(', '); ?></li><?php endif; ?>
					</ul>
					<p class="index-recommend-box-desc"><a href="<?php the_permalink() ?>"><?php new_excerpt(65); ?></a></p>
				</div>
				<!-- /one block -->
<?php endforeach; wp_reset_query(); ?>
			</div>
<?php }; ?>
<?php }; ?>
		</div>
		<!-- /main contents -->

		<!-- sideColumn -->
<?php get_template_part('sidebar'); ?>
		<!-- /sideColumn -->
	</div>
	
<?php get_footer(); ?>