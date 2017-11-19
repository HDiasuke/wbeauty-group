<?php get_header(); $options = get_desing_plus_option(); ?>
	<div id="contents" class="post_list clearfix">
		<?php get_template_part('breadcrumb'); ?>
		<!-- main contents -->
		<div id="mainColumn">
			<h2 id="news_headline"><?php _e("News Information","tcd-w"); ?></h2>
			<?php if ( have_posts() ) : ?>
			<ol>
				<?php while ( have_posts() ) : the_post(); ?>
				<li class="clearfix">
					<div class="post_date">
						<div class="post_date_year"><?php the_time('Y'); ?></div>
						<div class="post_date_month"><span><?php the_time('d'); ?></span><?php echo get_post_time('M'); ?></div>
					</div>
					<div class="news_info">
						<h3 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><a href="<?php the_permalink(); ?>"><?php if (has_excerpt()) { the_excerpt(); } else { new_excerpt(150);}; ?></a></p>
					</div>
				</li>
				<?php endwhile; ?>
			</ol>
			<?php else: ?>
			<p class="no_post"><?php _e("There is no registered post.","tcd-w"); ?></p>
			<?php endif; ?>
		</div>
		<!-- /main contents -->
		<!-- sidebar -->
 <?php get_template_part('sidebar'); ?>
		<!-- /sidebar -->
	</div>

<?php get_footer(); ?>
