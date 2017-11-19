<?php get_header(); $options = get_desing_plus_option(); ?>

	<div id="contents" class="clearfix">
		<?php get_template_part('breadcrumb'); ?>
		<!-- main contents -->
		<div id="mainColumn">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post clearfix">
				<?php if($options['show_date']): ?>
				<div class="post_date">
					<div class="post_date_year"><?php the_time('Y'); ?></div>
					<div class="post_date_month"><span><?php the_time('d'); ?></span><?php echo get_post_time('M'); ?></div>
				</div>
				<?php endif; ?>
				<div class="post_info">
					<h2 class="post_title"><?php the_title(); ?></h2>
					<ul class="meta clearfix">
						<?php if ($options['show_category']) : ?><li class="post_category"><i class="fa fa-folder-open-o"></i><?php the_category(', '); ?></li><?php endif; ?>
						<?php if ($options['show_tag']) : the_tags('<li class="post_tag"><i class="fa fa-tags"></i>',', ','</li>'); endif; ?>
					    <?php if ($options['show_comment']) : ?><li class="post_comment"><i class="fa fa-comment-o"></i><?php comments_popup_link(__('Write comment', 'tcd-w'), __('1 comment', 'tcd-w'), __('% comments', 'tcd-w')); ?></li><?php endif; ?>
					    <?php if ($options['show_author']) : ?><li class="post_author"><i class="fa fa-pencil-square-o"></i><?php the_author_posts_link(); ?></li><?php endif; ?>
					</ul>
					<!-- sns button top -->
					<?php if ($options['show_sns_top']) { ?>
					<div class="clearfix"><?php get_template_part('sns_btn_top'); ?></div>
					<?php }; ?>
					<!-- /sns button top -->
					<?php if ( has_post_thumbnail() and $page=='1') { if ($options['show_thumbnail']) : ?>
					<div class="post_thumb"><?php if($options['show_date']){ echo the_post_thumbnail('single_size'); }else{ echo the_post_thumbnail('single_size2'); }; ?></div>
					<?php endif; }; ?>
					<div class="post_content">

						<?php the_content(__('Read more', 'tcd-w')); ?>
						<?php custom_wp_link_pages(); ?>
					</div>
					<!-- sns button bottom -->
					<?php if ($options['show_sns_btm']) { ?>
					<div class="clearfix mb10"><?php get_template_part('sns_btn_btm'); ?></div>
					<?php }; ?>
					<!-- /sns button bottom -->
					<?php if ($options['show_next_post']) : ?>
					<div id="previous_next_post">
						<div id="previous_post"><?php previous_post_link('%link') ?></div>
						<div id="next_post"><?php next_post_link('%link') ?></div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; endif; ?>

			<!-- recommend -->
<?php if ($options['show_related_post']) : ?>
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
			<h2 id="index-recommend-headline"><?php echo ($options['index_headline_blog']); ?></h2>
			<div id="index-recommend" class="clearfix">
<?php foreach ($recommend_post as $post) : setup_postdata ($post); ?>
				<!-- one block -->
				<div class="index-recommend-box">
					<p class="index-recommend-box-thumb"><a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail()) { echo the_post_thumbnail('size2'); } else { echo '<img src="'; bloginfo('template_url'); echo '/images/no_image1.jpg" alt="" title="" />'; }; ?></a></p>
					<h3 class="index-recommend-box-title"><a href="<?php the_permalink() ?>"><?php if(is_mobile()){trim_title(25);}else{the_title();}; ?></a></h3>
					<p class="index-recommend-box-desc"><a href="<?php the_permalink() ?>"><?php new_excerpt(65); ?></a></p>
				</div>
				<!-- /one block -->
<?php endforeach; wp_reset_query(); ?>
			</div>
<?php }; ?>
<?php }; ?>
<?php endif; ?>
			<!-- /recommend -->
<?php if ($options['show_comment']||$options['show_trackback']) : if (function_exists('wp_list_comments')) { comments_template('', true); } else { comments_template(); }; endif; ?>

		</div>
		<!-- /main contents -->

		<!-- sideColumn -->
<?php get_template_part('sidebar'); ?>
		<!-- /sideColumn -->
	</div>

<?php get_footer(); ?>
