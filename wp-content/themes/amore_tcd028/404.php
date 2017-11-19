<?php
  $options = get_desing_plus_option();
  get_header('no-sidebar');
?>

  <div class="container amore-inner-container"<?php if(!is_mobile()){ echo ' style="margin-bottom:170px"'; }; ?>>
    <div class="row">

      <div class="col-sm-80 no-left-padding">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php if($options['show_bread']) : ?>
        <?php get_template_part('breadcrumb'); ?>
      <?php endif; ?>

			<div class="entry-content">
				<h2 class="page-title mt40 mb10">404 Not Found</h2>
				<p><?php _e("Sorry, but you are looking for something that isn't here.", 'tcd-w');  ?></p>
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->


			<footer class="entry-meta">

				<div class="row hidden-xs">
					<!-- single post banner -->
		<?php if($options['single_ad_code1']||$options['single_ad_image1']) { ?>
					<div id="single-page-banner">
			<?php if($options['single_ad_code2']||$options['single_ad_image2']) { ?>
				<?php if ($options['single_ad_code1']) { ?>
						<div class="single-banner col-xs-60"><?php echo $options['single_ad_code1']; ?></div>
				<?php } else { ?>
						<div class="single-banner col-xs-60"><a href="<?php esc_attr_e( $options['single_ad_url1'] ); ?>" class="target_blank"><img src="<?php esc_attr_e( $options['single_ad_image1'] ); ?>" alt="" title=""></a></div>
				<?php }; ?>
				<?php if ($options['single_ad_code2']) { ?>
						<div class="single-banner col-xs-60"><?php echo $options['single_ad_code2']; ?></div>
				<?php } else { ?>
						<div class="single-banner col-xs-60"><a href="<?php esc_attr_e( $options['single_ad_url2'] ); ?>" class="target_blank"><img src="<?php esc_attr_e( $options['single_ad_image2'] ); ?>" alt="" title=""></a></div>
				<?php }; ?>
			<?php }else{ ?>
				<?php if ($options['single_ad_code1']) { ?>
						<div class="single-banner col-xs-120"><?php echo $options['single_ad_code1']; ?></div>
				<?php } else { ?>
						<div class="single-banner col-xs-120"><a href="<?php esc_attr_e( $options['single_ad_url1'] ); ?>" class="target_blank"><img src="<?php esc_attr_e( $options['single_ad_image1'] ); ?>" alt="" title=""></a></div>
				<?php }; ?>
			<?php }; ?>
					</div>
		<?php }; ?>
					<!-- /single post banner -->
				</div>

			</footer><!-- .entry-meta -->
		</article><!-- #post-## -->

      </div>

      <div class="col-sm-35 col-sm-offset-5 no-right-padding" style="margin-top:40px">
        <?php get_sidebar(); ?>
      </div>

    </div>
  </div>



<?php get_footer(); ?>
