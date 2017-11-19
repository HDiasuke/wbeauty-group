<?php get_header(); $options = get_desing_plus_option(); ?>
	<div id="contents" class="post_list clearfix">
		<?php get_template_part('breadcrumb'); ?>
		<!-- main contents -->
		<div id="mainColumn">
			<?php if ( have_posts() ) : ?>
			<ol class="archive">
				<?php while ( have_posts() ) : the_post(); ?>
				<li class="clearfix">
					<?php if($options['show_date']): ?>
					<div class="post_date">
						<div class="post_date_year"><?php the_time('Y'); ?></div>
						<div class="post_date_month"><span><?php the_time('d'); ?></span><?php echo get_post_time('M'); ?></div>
					</div>
					<?php endif; ?>
					<div class="post_info">
						<h2 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<ul class="meta clearfix">
							<?php if ($options['show_category']) : ?><li class="post_category"><i class="fa fa-folder-open-o"></i><?php the_category(', '); ?></li><?php endif; ?>
							<?php if ($options['show_tag']) : the_tags('<li class="post_tag"><i class="fa fa-tags"></i>',', ','</li>'); endif; ?>
						    <?php if ($options['show_comment']) : ?><li class="post_comment"><i class="fa fa-comment-o"></i><?php comments_popup_link(__('Write comment', 'tcd-w'), __('1 comment', 'tcd-w'), __('% comments', 'tcd-w')); ?></li><?php endif; ?>
						    <?php if ($options['show_author']) : ?><li class="post_author"><i class="fa fa-pencil-square-o"></i><?php the_author_posts_link(); ?></li><?php endif; ?>
						</ul>
						<?php if(has_post_thumbnail()): ?>
						<div class="post_thumb"><a href="<?php the_permalink(); ?>"><?php if($options['show_date']){ echo the_post_thumbnail('size1'); }else{ echo the_post_thumbnail('size3'); }; ?></a></div>
						<?php endif; ?>
						<p><a href="<?php the_permalink(); ?>"><?php if (has_excerpt()) { the_excerpt(); } else { new_excerpt(150);}; ?></a></p>
					</div>
				</li>
				<?php endwhile; ?>
			</ol>
			<?php else: ?>
			<p class="no_post"><?php _e("There is no registered post.","tcd-w"); ?></p>
			<?php endif; ?>

			<?php include('navigation.php'); ?>
		</div>
		<!-- /main contents -->
		<!-- sidebar -->
 <?php get_template_part('sidebar'); ?>
		<!-- /sidebar -->
	</div>

<?php get_footer(); ?>
