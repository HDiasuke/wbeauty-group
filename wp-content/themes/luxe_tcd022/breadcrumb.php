<?php $options = get_desing_plus_option(); ?>

<ul id="bread_crumb" class="clearfix">
 <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb" class="home"><a itemprop="url" href="<?php echo esc_url(home_url('/')); ?>"><span itemprop="title"><?php _e('Home', 'tcd-w'); ?></span></a></li>

<?php if(is_paged()) { ?>
 <li class="last"><?php _e('Blog Archives', 'tcd-w'); ?></li>

<?php } elseif(is_post_type_archive('news')) { ?>
 <li class="last"><?php _e('News','tcd-w') ?></li>

<?php } elseif(is_post_type_archive('menu')) { ?>
 <li class="last"><?php _e('Product','tcd-w') ?></li>

<?php } elseif(is_tax('menu_category')) { ?>
 <li class="last"><?php $term=$wp_query->queried_object; echo esc_attr($term->name) ?></li>

<?php } elseif(is_post_type_archive('gallery')) { ?>
 <li class="last"><?php _e('Gallery','tcd-w') ?></li>

<?php } elseif (is_category()) { ?>

  <?php $cat = get_queried_object(); ?>
  <?php if($cat -> parent != 0): ?>
  <?php $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' )); ?>
  <?php foreach($ancestors as $ancestor): ?>
  <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo get_category_link($ancestor); ?>"><span itemprop="title" ><?php echo get_cat_name($ancestor); ?></span></a></li>
  <?php endforeach; ?>
  <?php endif; ?>
  <li><?php echo $cat -> cat_name; ?></li>

<?php } elseif(is_tag()) { ?>
 <li class="last"><?php echo single_tag_title('', false); ?></li>

<?php } elseif(is_day()) { ?>
 <li class="last"><?php echo get_the_time(__('F jS, Y', 'tcd-w')); ?></li>

<?php } elseif(is_month()) { ?>
 <li class="last"><?php echo get_the_time(__('F, Y', 'tcd-w')); ?></li>

<?php } elseif(is_year()) { ?>
 <li class="last"><?php echo get_the_time(__('Y', 'tcd-w')); ?></li>

<?php } elseif(is_author()) { global $wp_query; $curauth = $wp_query->get_queried_object(); //get the author info ?>
 <li class="last"><?php echo $curauth->display_name; ?></li>

<?php } elseif(is_search()) { ?>
 <li class="last"><?php _e("SEARCH","tcd-w"); ?></li>

<?php } elseif(is_404()) { ?>
 <li class="last"><?php _e("Sorry, but you are looking for something that isn't here.","tcd-w"); ?></li>

<?php } elseif(is_singular('news')) { ?>
 <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo get_post_type_archive_link('news') ?>"><span itemprop="title"><?php _e('News','tcd-w') ?></span></a></li>
 <li class="last"><?php the_title(); ?></li>

<?php } elseif(is_singular('menu')) { ?>
 <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo get_post_type_archive_link('menu') ?>"><span itemprop="title"><?php _e('Product','tcd-w') ?></span></a></li>
 <li class="last"><?php the_title(); ?></li>

<?php } elseif(is_singular('gallery')) { ?>
 <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo get_post_type_archive_link('gallery') ?>"><span itemprop="title"><?php _e('Gallery','tcd-w') ?></span></a></li>
 <li class="last"><?php the_title(); ?></li>

<?php } elseif(is_single()) { ?>
 <li><?php the_category(', '); ?></li>
 <li class="last"><?php the_title(); ?></li>

<?php } elseif(is_page()) { ?>
 <li class="last"><?php the_title(); ?></li>

 <?php } elseif(is_home() && !is_front_page()) { ?>
 <li class="last"><?php single_post_title(); ?></li>

<?php }; ?>
</ul>
