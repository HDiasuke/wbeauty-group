<?php
$options = get_desing_plus_option();
?>

		<?php // add the class "panel" below here to wrap the sidebar in Bootstrap style ;) ?>
		<div class="sidebar-padder">

			<?php do_action( 'before_sidebar' ); ?>
				<?php if(is_single()||is_page()): ?>
					<?php if(is_mobile()): ?>
						<?php if(is_active_sidebar('mobile_widget_single')) { dynamic_sidebar('mobile_widget_single'); }; ?>
					<?php else: ?>
						<?php if(is_active_sidebar('single_side_widget')): ?>
							<?php dynamic_sidebar('single_side_widget'); ?>
						<?php else: ?>
							<h3 class="romaji">NEW POST</h3>
							<?php
								$the_query = new WP_Query("post_type=post&posts_per_page=6&orderby=date&order=DESC");
							?>
							<div class="row" style='margin-bottom:40px'>
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<div class="col-xs-120"><div class="row"><a style="color:inherit; text-decoration:none" href="<?php echo esc_url(get_permalink()); ?>"><?php get_template_part( 'content', get_post_format() ); ?></a></div></div>
								<?php endwhile; ?>
							</div>

							<h3 class="romaji">CATEGORY</h3>
					        <ul class="categories">
			    		    	<?php wp_list_cats(); ?>
			        		</ul>

							<select class="form-control" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
								<option value=""><?php echo esc_attr( __( 'Archive' ) ); ?></option> 
								<?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
							</select>

							<aside id="search" class="widget widget_search">
								<?php get_search_form(); ?>
							</aside>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>

		</div><!-- close .sidebar-padder -->