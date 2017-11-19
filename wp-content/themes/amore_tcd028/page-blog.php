<?php
$options = get_desing_plus_option();
get_header(); ?>

  <div class="amore-divider romaji" data-parallax="scroll" data-image-src="<?php echo $options['bg_image6']; ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-120">
          <h2><?php echo $options['blog_headline']; ?></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-xs-120 no-padding">
        <br/><br/><br/>
        <span class="fa fa-home text-muted">&nbsp;</span>
        <span class="fa fa-chevron-right text-muted" style="font-size:10px">&nbsp;</span>
        <span class="romaji"><?php echo $options['blog_headline']; ?></span>
        <div class="row">
          <?php if ( have_posts() ) : ?>
            <?php $imageFullWidth = true; ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php $i++;
                if($i == 1) : ?>
                  <div class="col-xs-37" style="padding-bottom:40px;"><div class="row"><a style="color:inherit; text-decoration:none" href="<?php echo esc_url(get_permalink()); ?>"><?php include(locate_template('content.php')); ?></a></div></div>
                <?php else : ?>
                  <div class="col-xs-37 col-xs-offset-4" style="padding-bottom:40px;"><div class="row"><a style="color:inherit; text-decoration:none" href="<?php echo esc_url(get_permalink()); ?>"><?php include(locate_template('content.php')); ?></a></div></div>
                <?php endif ?>

            <?php 
              $counter++;
              if ($counter % 3 == 0) {
                echo '</div><br/><div class="row">';
              }
            ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-xs-120 text-center" style="margin-bottom:40px;margin-top:40px">
        <?php _tk_content_nav( 'nav-below' ); ?>
      </div>
    </div>
  </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>