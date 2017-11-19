<?php 
  $options = get_desing_plus_option();
  get_header();
?>

  <div class="container amore-inner-container"<?php if(!is_mobile()){ echo ' style="margin-bottom:170px"'; }; ?>>
    <div class="row">
      
      <div class="col-sm-80 no-left-padding">
    	<?php while ( have_posts() ) : the_post(); ?>

    		<?php get_template_part( 'content', 'single' ); ?>

    		<?php /* _tk_content_nav( 'nav-below' ); */ ?>

    	<?php endwhile; // end of the loop. ?>

        <hr/>

        
          <!-- related posts -->
          <?php
            if($options['show_related_post']):
            $categories = get_the_category($post->ID);
            if ($categories) {
              $category_ids = array();
              foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                $args=array(
                  'category__in' => $category_ids,
                  'post__not_in' => array($post->ID),
                  'showposts'=>6,
                  'orderby' => 'rand'
                );
              $my_query = new wp_query($args);
              $i = 1;
              if($my_query->have_posts()) {
          ?>
          <div id="related_posts">
            <div class="row mb25">
              <?php while ($my_query->have_posts()) { $my_query->the_post(); ?>
                <div class="col-xs-60 p0"><?php get_template_part( 'content', get_post_format() ); ?></div>
                <?php 
                  $counter++;
                  if ($counter % 2 == 0) {
                    echo '</div><div class="row mb25">';
                  };
                ?>
              <?php }; ?>
            </div>
          </div>
          <?php }; }; wp_reset_query(); ?>
          <?php endif; ?>
          <!-- /related posts -->
      </div>

      <div class="col-sm-37 col-sm-offset-3 no-right-padding" style="margin-top:40px">
        <?php get_sidebar(); ?>
      </div>

    </div>
  </div>
</div>


<?php get_footer(); ?>