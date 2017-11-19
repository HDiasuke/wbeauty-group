<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php
     $options = get_desing_plus_option();
     if($options['use_ogp']) {
?>
<!--[if lt IE 9]><html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#" class="ie"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#"><!--<![endif]-->
<?php } else { ?>
<!--[if lt IE 9]><html xmlns="http://www.w3.org/1999/xhtml" class="ie"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<?php }; ?>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width" />
<title><?php seo_title(); ?></title>
<meta name="description" content="<?php seo_description(); ?>" />
<?php if($options['use_ogp']) { ogp(); }; ?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_enqueue_script( 'jquery' ); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css<?php version_num(); ?>" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/comment-style.css<?php version_num(); ?>" type="text/css" />

<link rel="stylesheet" media="screen and (min-width:801px)" href="<?php bloginfo('template_url'); ?>/style_pc.css<?php version_num(); ?>" type="text/css" />
<link rel="stylesheet" media="screen and (max-width:800px)" href="<?php bloginfo('template_url'); ?>/style_sp.css<?php version_num(); ?>" type="text/css" />

<?php if (strtoupper(get_locale()) == 'JA') ://to fix the font-size for japanese font ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/japanese.css<?php version_num(); ?>" type="text/css" />
<?php endif; ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jscript.js<?php version_num(); ?>"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scroll.js<?php version_num(); ?>"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/comment.js<?php version_num(); ?>"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rollover.js<?php version_num(); ?>"></script>
<!--[if lt IE 9]>
<link id="stylesheet" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style_pc.css<?php version_num(); ?>" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ie.js<?php version_num(); ?>"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie.css" type="text/css" />
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie7.css" type="text/css" />
<![endif]-->

<?php if(is_front_page()) { ?>
<!-- slider -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
<link href="<?php bloginfo('template_url'); ?>/js/flexslider.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" charset="utf-8">
	jQuery(window).load(function() {
		jQuery('#flex-slider').flexslider({
			controlNav: false,
			directionNav: false
		});
	});
</script>
<!-- /slider -->
<?php }; ?>

<!-- carousel -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/slick.css"/>
<?php if(wp_is_mobile()){ ?>
<script type="text/javascript" charset="utf-8">
	jQuery(window).load(function() {
		jQuery('.carousel').slick({
			arrows: false,
			dots: false,
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,

		});
	});
</script>
<?php }else{ ?>
<script type="text/javascript" charset="utf-8">
	jQuery(window).load(function() {
		jQuery('.carousel').slick({
			arrows: true,
			dots: false,
			infinite: true,
			slidesToShow: 6,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,

		});
	});
</script>
<?php }; ?>
<!-- /carousel -->


<style type="text/css">
body { font-size:<?php echo $options['content_font_size']; ?>px; }
a {color: #<?php echo $options['pickedcolor1']; ?>;}
a:hover {color: #<?php echo $options['pickedcolor2']; ?>;}
#global_menu ul ul li a{background:#<?php echo $options['pickedcolor1']; ?>;}
#global_menu ul ul li a:hover{background:#<?php echo $options['pickedcolor2']; ?>;}
#return_top{background-color:#<?php echo $options['pickedcolor1']; ?>;}
#return_top:hover{background-color:#<?php echo $options['pickedcolor2']; ?>;}
.google_search input:hover#search_button, .google_search #searchsubmit:hover { background-color:#<?php echo $options['pickedcolor2']; ?>; }
.widget_search #search-btn input:hover, .widget_search #searchsubmit:hover { background-color:#<?php echo $options['pickedcolor2']; ?>; }

#submit_comment:hover {
	background:#<?php echo $options['pickedcolor1']; ?>;
}

<?php echo $options['css_code']; ?>

<?php if(get_post_meta($post->ID, "custom_css", true)){
	echo get_post_meta($post->ID, "custom_css", true);
}; ?>

<?php if($options['hovereffect_style']=='a'): ?>
a:hover img{
	opacity:0.5;
}
<?php else: ?>
a:hover img{
	filter: grayscale(100%);
	-webkit-filter: grayscale(100%);
	opacity:0.8;
}
<?php endif; ?>

<?php if(!$options['show_date']): ?>
<?php if(!is_mobile()){ ?>
.post_info{
	width: 790px;
}
<?php }; ?>
<?php endif; ?>

<?php if($options['fixed_header']): ?>
<?php if(!is_mobile()){ ?>
#header{
	position: fixed;
	z-index: 9999999;
	background: #fff;
	border-top: solid 5px #000;
}

@media screen and (min-width:801px){
  #contents{
  	padding-top: 222px;
  }
}

@media screen and (max-width:801px){
  #contents{
  	padding-top: 60px;
  }
}

#wrapper{
	border-top: none;
}
<?php }; ?>
<?php endif; ?>

</style>

</head>

<body <?php body_class(); ?>>
<div id="wrapper">
	<!-- header -->
	<div id="header" class="clearfix">
		<div id="logo-area">
			<!-- logo -->
			<?php the_dp_logo(); ?>
		</div>
   <a href="#" class="menu_button"><?php _e('menu', 'tcd-w'); ?></a>
		<!-- global menu -->
		<div id="global_menu" class="clearfix">
<?php if (has_nav_menu('global-menu')) { ?>
	<?php
wp_nav_menu(array( 
  'theme_location' => 'メニューの位置'
)); 
?>
<?php }; ?>
		</div>
		<!-- /global menu -->

	</div>
	<!-- /header -->

<?php if(is_mobile() and !is_front_page()) { ?>
<!-- smartphone banner -->
<?php if($options['mobile_ad_code1']||$options['mobile_ad_image1']) { ?>
<div id="mobile_banner_top">
	<?php if ($options['mobile_ad_code1']) { ?>
		<?php echo $options['mobile_ad_code1']; ?>
	<?php } else { ?>
		<a href="<?php esc_attr_e( $options['mobile_ad_url1'] ); ?>" class="target_blank"><img src="<?php esc_attr_e( $options['mobile_ad_image1'] ); ?>" alt="" title="" /></a>
	<?php }; ?>
</div>
<?php }; ?>
<?php }; ?>
