<?php
/*
Template Name:No side Short
*/
?>

<?php get_header(); $options = get_desing_plus_option(); ?>

	<div id="contents" class="no-side-short clearfix">
		<?php get_template_part('breadcrumb'); ?>
		<!-- main contents -->
		<div id="mainColumn">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="post clearfix">
				<div class="post_info">
					<div class="post_content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>

		</div>
		<!-- /main contents -->

	</div>

<?php get_footer(); ?>
