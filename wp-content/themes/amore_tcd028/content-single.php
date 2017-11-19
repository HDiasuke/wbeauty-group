<?php
	$options = get_desing_plus_option();
	$categories = get_the_category_list('、');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="breadcrumb">
	<?php if($options['show_bread']) : ?>
    <?php get_template_part('breadcrumb'); ?>
	<?php endif; ?>

		<h2 class="page-title mt40 mb10"><?php the_title(); ?></h2>

		<div class="entry-meta mb45">
			<?php if( $options['show_date'] == 1 ) : ?>
			<?php echo "<span class='fa fa-clock-o'></span><span class='timestamp'>&nbsp;" . get_the_date('Y') . '.' . get_the_date('m') . '.' . get_post_time('j') . "</span>"; ?>
			<?php endif; ?>
			<span class="categories-wrap"><?php echo $categories; ?></span>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ($options['show_sns_top']) { ?>
		<?php get_template_part('sns_btn_top'); ?>
		<?php }; ?>
		<?php if ($options['show_thumbnail']): ?>
		<div class="entry-content-thumbnail">
			<?php
				$featured = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'single_size');
				if($featured)
				 echo "<img src='$featured[0]' style='width:100%; margin-bottom:40px' />";
			 ?>
		</div>
		<?php endif; ?>
		<?php the_content(); ?>
		<?php custom_wp_link_pages(); ?>

		<?php if ($options['show_sns_btm']) { ?>
                <div style="margin-top:30px;">
		<?php get_template_part('sns_btn_btm'); ?>
                </div>
		<?php }; ?>



		<!-- comments -->
		<?php if ($options['show_comment']) :
			if (function_exists('wp_list_comments')) { comments_template('', true); } else { comments_template(); };
			if(!is_mobile()){ echo '<hr>'; };
		endif; ?>
		<!-- /comments -->

	</div><!-- .entry-content -->



		<?php $next = get_next_post_link('&laquo;&nbsp;%link','%title'); ?>
		<?php $prev = get_previous_post_link('%link&nbsp;&raquo;','%title'); ?>

	<footer class="entry-meta">

		<?php if ($options['show_next_post']) : ?>
		<div class="row">
			<div class="col-xs-60 text-right">
				<?php if($next) : ?>
					<?php $nextPost = get_next_post(); $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'size3' ); ?>
					<a style="text-decoration:none" href="<?php echo get_permalink($nextPost); ?>">
						<span style="font-size:24px; padding-right:10px;" class="text-muted fa fa-chevron-left"></span>
						<div class="thumb hidden-xs" style="width:120px; height:120px;"><?php if($nextthumbnail){echo $nextthumbnail;}else{echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image1.gif" alt="" title="">';}; ?></div>
					</a>
				<?php endif; ?>
			</div>
			<div class="col-xs-60 text-left">
				<?php if($prev) : ?>
					<?php $prevPost = get_previous_post(); $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'size3' ); ?>
					<a style="text-decoration:none" href="<?php echo get_permalink($prevPost); ?>">
						<div class="thumb hidden-xs" style="width:120px; height:120px;"><?php if($prevthumbnail){echo $prevthumbnail;}else{echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image1.gif" alt="" title="">';}; ?></div>
						<span style="font-size:24px; padding-left:10px;" class="text-muted fa fa-chevron-right"></span>
					</a>
				<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>

		<div class="row hidden-xs">
			<!-- single post banner -->
<?php if($options['single_ad_code1']||$options['single_ad_image1']) { ?>
			<div id="single-page-banner">
	<?php if($options['single_ad_code2']||$options['single_ad_image2']) { ?>
		<?php if ($options['single_ad_code1']) { ?>
				<div class="single-banner col-xs-60"><?php echo $options['single_ad_code1']; ?></div>
		<?php } else { ?>
				<div class="single-banner col-xs-60"><a href="<?php esc_attr_e( $options['single_ad_url1'] ); ?>" class="target_blank"><img src="<?php esc_attr_e( $options['single_ad_image1'] ); ?>" alt="" title=""></a></div>
		<?php }; ?>
		<?php if ($options['single_ad_code2']) { ?>
				<div class="single-banner col-xs-60"><?php echo $options['single_ad_code2']; ?></div>
		<?php } else { ?>
				<div class="single-banner col-xs-60"><a href="<?php esc_attr_e( $options['single_ad_url2'] ); ?>" class="target_blank"><img src="<?php esc_attr_e( $options['single_ad_image2'] ); ?>" alt="" title=""></a></div>
		<?php }; ?>
	<?php }else{ ?>
		<?php if ($options['single_ad_code1']) { ?>
				<div class="single-banner col-xs-120"><?php echo $options['single_ad_code1']; ?></div>
		<?php } else { ?>
				<div class="single-banner col-xs-120"><a href="<?php esc_attr_e( $options['single_ad_url1'] ); ?>" class="target_blank"><img src="<?php esc_attr_e( $options['single_ad_image1'] ); ?>" alt="" title=""></a></div>
		<?php }; ?>
	<?php }; ?>
			</div>
<?php }; ?>
			<!-- /single post banner -->
		</div>

	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
