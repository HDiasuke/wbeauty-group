<?php get_header(); $options = get_desing_plus_option(); ?>

	<div id="contents" class="clearfix">
		<?php get_template_part('breadcrumb'); ?>
		<!-- main contents -->
		<div id="mainColumn">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post clearfix">
				<div class="post_date">
					<div class="post_date_year"><?php the_time('Y'); ?></div>
					<div class="post_date_month"><span><?php the_time('d'); ?></span><?php echo get_post_time('M'); ?></div>
				</div>
				<div class="news_info">
					<h2 class="post_title"><?php the_title(); ?></h2>
					<?php if(has_post_thumbnail()){ ?>
					<div class="post_thumb"><?php echo the_post_thumbnail('single_size'); ?></div>
					<?php }; ?>
					<div class="post_content">
						<?php the_content(); ?>
					</div>

					<?php if ($options['show_next_post']) : ?>
					<div id="previous_next_post">
						<div id="previous_post"><?php previous_post_link('%link') ?></div>
						<div id="next_post"><?php next_post_link('%link') ?></div>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; endif; ?>

		</div>
		<!-- /main contents -->

		<!-- sideColumn -->
<?php get_template_part('sidebar'); ?>
		<!-- /sideColumn -->
	</div>

<?php get_footer(); ?>
