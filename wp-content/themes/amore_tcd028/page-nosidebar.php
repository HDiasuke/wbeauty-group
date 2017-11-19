<?php /* Template Name: Page no sidebar */ ?>

<?php

get_header('no-sidebar'); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php
    $thumbnail_id = get_post_thumbnail_id();
    $eye_img = wp_get_attachment_image_src($thumbnail_id, 'full');
  ?>
  <div class="amore-divider romaji" data-parallax="scroll" data-image-src="<?php echo $eye_img[0]; ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-120 no-padding">
          <h2 class="top-headline" style="<?php if(!is_mobile()){ echo 'margin-top: 50px; margin-bottom: -20px;'; }else{ echo 'height:195px; line-height:195px;'; }; ?>"><?php the_title(); ?></h2>
        </div>
      </div>
    </div>
  </div>

<!--   <div class="container amore-inner-container">
    <div class="row">
      <div class="col-xs-120 no-padding single-page">
          <?php if($options['show_bread']) : ?>
            <?php get_template_part('breadcrumb'); ?>
          <?php endif; ?>
          <div class="row article"><?php the_content(); ?></div>
      </div>
    </div>
  </div> -->
   <div class="container amore-inner-container"<?php if(!is_mobile()){ echo ' style="margin-bottom:120px"'; }; ?>>
    <div class="row">
      
      <div class="col-sm-80 col-xs-120 no-padding single-page">
          <?php if($options['show_bread']) : ?>
            <header class="breadcrumb mb20">
              <a href="<?php echo home_url('/'); ?>"><span><img src="<?php bloginfo('template_url'); ?>/images/home.png" class="breadcrumb-home"></span></a>
              <span class="fa fa-chevron-right text-muted" style="font-size:10px">&nbsp;</span>
              <span><?php the_title(); ?></span>
            </header><!-- .entry-header -->
          <?php endif; ?>
          <div class="row article" style="margin:auto 0;"><?php the_content(); ?></div>
      </div>
      
    </div>
  </div>
<?php endwhile; ?>

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>
