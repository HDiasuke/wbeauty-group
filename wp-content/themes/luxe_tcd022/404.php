<?php get_header(); $options = get_desing_plus_option(); ?>

	<div id="contents" class="clearfix">
		<?php get_template_part('breadcrumb'); ?>
		<!-- main contents -->
		<div id="mainColumn">
			<div class="post clearfix">
				<div class="post_date">
				</div>
				<div class="post_info">
					<h2 class="post_title">404 File Not Found</h2>
					<div class="post_content">
						<?php _e("Sorry, but you are looking for something that isn't here.","tcd-w"); ?>
					</div>
				</div>
			</div>

		</div>
		<!-- /main contents -->

		<!-- sideColumn -->
<?php get_template_part('sidebar'); ?>
		<!-- /sideColumn -->
	</div>

<?php get_footer(); ?>
