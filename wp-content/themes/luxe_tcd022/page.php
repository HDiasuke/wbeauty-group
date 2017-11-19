<?php get_header(); $options = get_desing_plus_option(); ?>

	<div id="contents" class="clearfix">
		<?php get_template_part('breadcrumb'); ?>
		<!-- main contents -->
		<div id="mainColumn">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post clearfix">
				<?php if(has_post_thumbnail()){ ?>
				<div class="post_thumb"><?php echo the_post_thumbnail('single_size'); ?></div>
				<?php }; ?>
				<div class="post_content">
					<?php the_content(); ?>
					<?php custom_wp_link_pages(); ?>
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
