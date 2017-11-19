<?php
$options = get_desing_plus_option();

  // center the menu in the header
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
     if($options['use_ogp']) {
?>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
<?php } else { ?>
<head>
<?php }; ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">

  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="description" content="<?php seo_description(); ?>">

  <?php if($options['use_ogp']) { ogp(); }; ?>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js');
  ?>
  <?php wp_head(); ?>
  <?php if(is_front_page()) : ?>
    <script src="https://maps.googleapis.com/maps/api/js<?php if($options['myapikey']){echo '?key='.$options['myapikey'];}; ?>"></script>
  <?php endif; ?>

  <link rel="stylesheet" media="screen and (max-width:771px)" href="<?php echo get_template_directory_uri(); ?>/footer-bar/footer-bar.css?ver=<?php echo version_num(); ?>">

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.elevatezoom.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/parallax.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jscript.js"></script>
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 

  <script type="text/javascript">
    jQuery(function() {
      jQuery(".zoom").elevateZoom({
        zoomType : "inner",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 500,
        easing : true
      });
    });
  </script>

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/syncertel.js"></script>

  <link rel="stylesheet" media="screen and (max-width:991px)" href="<?php echo get_template_directory_uri(); ?>/responsive.css?ver=<?php echo version_num(); ?>">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/amore.css?ver=<?php echo version_num(); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/comment-style.css?ver=<?php echo version_num(); ?>" type="text/css" />
  <style type="text/css">
    <?php if($options['fix_header']): ?>
      .site-navigation{position:fixed;}
    <?php else: ?>
      .site-navigation{position:absolute;}
    <?php endif; ?>

  .fa, .wp-icon a:before {display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;transform:translate(0, 0)}
  .fa-phone:before, .wp-icon.wp-fa-phone a:before {content:"\f095"; margin-right:5px;}

  body { font-size:<?php echo $options['content_font_size']; ?>px; }
  a {color: #<?php echo $options['pickedcolor1']; ?>;}
  a:hover {color: #<?php echo $options['pickedcolor2']; ?>;}
  #global_menu ul ul li a{background:#<?php echo $options['pickedcolor1']; ?>;}
  #global_menu ul ul li a:hover{background:#<?php echo $options['pickedcolor2']; ?>;}
  #previous_next_post a:hover{
    background: #<?php echo $options['pickedcolor2']; ?>;
  }
  .social-icon:hover{
    background-color: #<?php echo $options['pickedcolor1']; ?> !important;
  }
  .up-arrow:hover{
    background-color: #<?php echo $options['pickedcolor1']; ?> !important;
  }

  .menu-item:hover *:not(.dropdown-menu *){
    color: #<?php echo $options['pickedcolor1']; ?> !important;
  }
  .menu-item a:hover {
    color: #<?php echo $options['pickedcolor1']; ?> !important;
  }
  .button a, .pager li > a, .pager li > span{
    background-color: #<?php echo $options['pickedcolor2']; ?>;
  }
  .dropdown-menu .menu-item > a:hover, .button a:hover, .pager li > a:hover{
    background-color: #<?php echo $options['pickedcolor1']; ?> !important;
  }
  .button-green a{
    background-color: #<?php echo $options['pickedcolor1']; ?>;
  }
  .button-green a:hover{
    background-color: #<?php echo $options['pickedcolor3']; ?>;
  }
  .timestamp{
    color: #<?php echo $options['pickedcolor1']; ?>;
  }
  .blog-list-timestamp{
    color: #<?php echo $options['pickedcolor1']; ?>;
  }
  .footer_main, .scrolltotop{
    background-color: #<?php echo $options['pickedcolor4']; ?>;
  }
  .scrolltotop_arrow a:hover{
    color: #<?php echo $options['pickedcolor1']; ?>;
  }

  .first-h1{
    color: #<?php echo $options['first_color']; ?>;
    text-shadow: <?php echo $options['first_dropshadow_h']; ?>px <?php echo $options['first_dropshadow_v']; ?>px <?php echo $options['first_dropshadow_b']; ?>px #<?php echo $options['first_dropshadow_c']; ?> !important;
  }
  .second-body, .second-body{
    color: #<?php echo $options['second_color']; ?>;
  }
  .top-headline.third_headline{
      color: #<?php echo $options['third_color']; ?>;
      text-shadow: <?php echo $options['third_dropshadow_h']; ?>px <?php echo $options['third_dropshadow_v']; ?>px <?php echo $options['third_dropshadow_b']; ?>px #<?php echo $options['third_dropshadow_c']; ?>;
  }
  .top-headline.fourth_headline{
      color: #<?php echo $options['fourth_color']; ?>;
      text-shadow: <?php echo $options['fourth_dropshadow_h']; ?>px <?php echo $options['fourth_dropshadow_v']; ?>px <?php echo $options['fourth_dropshadow_b']; ?>px #<?php echo $options['fourth_dropshadow_c']; ?>;
  }
  .top-headline.fifth_headline{
      color: #<?php echo $options['fifth_color']; ?>;
      text-shadow: <?php echo $options['fifth_dropshadow_h']; ?>px <?php echo $options['fifth_dropshadow_v']; ?>px <?php echo $options['fifth_dropshadow_b']; ?>px #<?php echo $options['fifth_dropshadow_c']; ?>;
  }

  .top-headline{
      color: #<?php echo $options['blog_color']; ?>;
      text-shadow: <?php echo $options['blog_dropshadow_h']; ?>px <?php echo $options['blog_dropshadow_v']; ?>px <?php echo $options['blog_dropshadow_b']; ?>px #<?php echo $options['blog_dropshadow_c']; ?>;
  }

  .thumb:hover:after{
      box-shadow: inset 0 0 0 7px #<?php echo $options['pickedcolor1']; ?>;
  }


  <?php if ($options['use_break_word']){ ?>
  p { word-wrap:break-word; }
  <?php }; ?>

  <?php echo $options['css_code']; ?>

  <?php if(get_post_meta($post->ID, "custom_css", true)){
    echo get_post_meta($post->ID, "custom_css", true);
  }; ?>

<?php if(is_mobile()):
  if($options['footer_bar_display'] == 'type1' || $options['footer_bar_display'] == 'type2'):
?>
.dp-footer-bar{
  background: <?php echo 'rgba('.implode(',', hex2rgb($options['footer_bar_bg'])).', '.esc_html($options['footer_bar_tp']).');'; ?>
  border-top: solid 1px #<?php echo esc_html($options['footer_bar_border']); ?>;
  color: #<?php echo esc_html($options['footer_bar_color']); ?>;
  display: flex;
  flex-wrap: wrap;
}
.dp-footer-bar a{
  color: #<?php echo esc_html($options['footer_bar_color']); ?>;
}
.dp-footer-bar-item + .dp-footer-bar-item{
  border-left: solid 1px #<?php echo esc_html($options['footer_bar_border']); ?>;
}

<?php endif; endif; ?>

</style>

</head>

<body <?php body_class(); ?>>
  <?php do_action( 'before' ); ?>

  <div id="verytop"></div>
  <nav id="header" class="site-navigation">
  <?php // substitute the class "container-fluid" below if you want a wider content area ?>
    <div class="container">
      <div class="row">
        <div class="site-navigation-inner col-xs-120 no-padding" style="padding:0px">
          <div class="navbar navbar-default">
            <div class="navbar-header">
              <div id="logo-area">
                <?php the_dp_logo(); ?>
                <?php if ($options['phonenumber'] && 2 == 3) : ?>
                  <a href="tel:<?php echo $options['phonenumber']; ?>">
                    <button id="telephone" type="button" class="navbar-toggle visible-xs text-left" style='padding-left:0; padding-right:0px; z-index:3000; color:white; position:absolute; top:0px; width:160px'>
                      <span><?php echo $options['phonenumber']; ?></span>
                    </button>
                  </a>
                <?php endif; ?>
              </div>

            </div>

            <!-- The WordPress Menu goes here -->
            <div class="pull-right right-menu">
              <?php if(!wp_is_mobile()): ?>
                <?php if(!$options['tel_header']): ?>
                <?php wp_nav_menu(
                  array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'menu_id'           => 'main-menu',
                    'walker'            => new wp_bootstrap_navwalker()
                  )
                ); ?>
                <?php else: ?>
                <div id="header-phonenumber"><?php echo $options['phonenumber']; ?></div>
                <?php endif; ?>
              <?php else: ?>
                 <?php if (has_nav_menu('primary')) { ?>
                 <a href="#" class="menu_button"></a>
                 <div id="global_menu" class="clearfix">
                  <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'primary' , 'container' => '' ) ); ?>
                 </div>
                 <?php }; ?>
              <?php endif; ?>
            </div>

          </div><!-- .navbar -->
        </div>
      </div>
    </div><!-- .container -->
  </nav><!-- .site-navigation -->

<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
  <?php if(is_single()): ?>
  <div class="amore-divider romaji" data-parallax="scroll" data-image-src="<?php echo $options['bg_image6']; ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-120">
          <div class="top-headline" style="<?php if(!is_mobile()){ echo 'margin-top: 50px; margin-bottom: -20px;'; }else{ echo 'height:195px; line-height:195px;'; }; ?>"><?php echo $options['blog_headline']; ?></div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>