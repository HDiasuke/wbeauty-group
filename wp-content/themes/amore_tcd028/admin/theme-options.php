<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * オプション初期値
 * @var array
 */
global $dp_default_options;
$dp_default_options = array(
	'pickedcolor1' => '238C00',
	'pickedcolor2' => 'AAAAAA',
  'pickedcolor3' => '175E00',
  'pickedcolor4' => '222222',
  'first_color' => 'FFFFFF',
  'second_color' => '333333',
  'third_color' => 'FFFFFF',
  'fourth_color' => 'FFFFFF',
  'fifth_color' => 'FFFFFF',
  'blog_color' => 'FFFFFF',
	'logotop' => 0,
	'logoleft' => 0,
	'logotop2' => 0,
	'logoleft2' => 0,
	'content_font_size' => '14',
	'show_date' => 1,
	'show_category' => 1,
	'show_tag' => 1,
	'show_comment' => 1,
	'show_author' => 1,
	'show_trackback' => 1,
	'show_related_post' => 1,
	'show_next_post' => 1,
	'show_thumbnail' => 1,
	'show_bookmark' => 1,
	'show_rss' => 1,
  'show_sns' => 1,
	'show_sns_top' => 1,
	'show_sns_btm' => 1,
	'sns_type_top' => 'type1',
	'sns_type_btm' => 'type1',
	'show_twitter_top' => 1,
	'show_fblike_top' => 1,
	'show_fbshare_top' => 1,
	'show_google_top' => 1,
	'show_hatena_top' => 1,
	'show_pocket_top' => 1,
	'show_feedly_top' => 1,
	'show_rss_top' => 1,
	'show_pinterest_top' => 1,
	'show_twitter_btm' => 1,
	'show_fblike_btm' => 1,
	'show_fbshare_btm' => 1,
	'show_google_btm' => 1,
	'show_hatena_btm' => 1,
	'show_pocket_btm' => 1,
	'show_feedly_btm' => 1,
	'show_rss_btm' => 1,
	'show_pinterest_btm' => 1,
	'twitter_info' => '',

	'show_index_blog' => 1,
  'show_bread' => 1,
	'twitter_url' => '',
	'facebook_url' => '',
  'insta_url' => '',
  'pinterest_url' => '',
  'flickr_url' => '',
  'tumblr_url' => '',

	'custom_search_id' => '',
	'maincopy' => '',
	'single_ad_code1' => '',
	'single_ad_url1' => '',
	'single_ad_image1' => false,
	'single_ad_code2' => '',
	'single_ad_url2' => '',
	'single_ad_image2' => false,
	'use_ogp' => 0,
	'fb_admin_id' => '',
	'use_twitter_card' => 0,
	'twitter_account_name' => '',
	'bg_image1' => false,
	'bg_image2' => false,
	'bg_image3' => false,
	'bg_image4' => false,
	'bg_image5' => false,
  'bg_image6' => false,
  'bg_image7' => false,
  'bg_image8' => false,
  'slider_image1' => false,
  'slider_image2' => false,
  'slider_image3' => false,
	'use_break_word' => 1,
	'css_code' => '',
  'h1_text' => '',
  'first_auto_br' => 1,
  'first_dropshadow_h' => '0',
  'first_dropshadow_v' => '0',
  'first_dropshadow_b' => '10',
  'first_dropshadow_c' => '666666',
  'second_leadcopy_image' => false,
  'second_leadcopy' => '',
  'sbc_text' => '',
  'second_auto_br' => 1,
  'third_headline' => '',
  'third_dropshadow_h' => '0',
  'third_dropshadow_v' => '0',
  'third_dropshadow_b' => '10',
  'third_dropshadow_c' => '666666',
  'third_banner_image1' => false,
  'third_banner_image2' => false,
  'third_banner_image3' => false,
  'third_banner_url1' => '',
  'third_banner_url2' => '',
  'third_banner_url3' => '',
  'third_banner_target1' => 1,
  'third_banner_target2' => 1,
  'third_banner_target3' => 1,
  'third_banner_headline1' => '',
  'third_banner_headline2' => '',
  'third_banner_headline3' => '',
  'third_banner_copy1' => '',
  'third_banner_copy2' => '',
  'third_banner_copy3' => '',
  'fourth_headline' => '',
  'fourth_dropshadow_h' => '0',
  'fourth_dropshadow_v' => '0',
  'fourth_dropshadow_b' => '10',
  'fourth_dropshadow_c' => '666666',
  'fourth_headline2' => '',
  'fourth_cate' => '',
  'fifth_headline' => '',
  'fifth_banner_image1' => false,
  'fifth_banner_image2' => false,
  'fifth_banner_image3' => false,
  'fifth_banner_url1' => '',
  'fifth_banner_url2' => '',
  'fifth_banner_url3' => '',
  'fifth_banner_target1' => 1,
  'fifth_banner_target2' => 1,
  'fifth_banner_target3' => 1,
  'fifth_banner_headline1' => '',
  'fifth_banner_headline2' => '',
  'fifth_banner_headline3' => '',
  'fifth_banner_copy1' => '',
  'fifth_banner_copy2' => '',
  'fifth_banner_copy3' => '',
  'fifth_dropshadow_h' => '0',
  'fifth_dropshadow_v' => '0',
  'fifth_dropshadow_b' => '10',
  'fifth_dropshadow_c' => '666666',
  'sixth_text' => '',
  'sixth_auto_br' => 1,
  'blog_headline' => '',
  'blog_dropshadow_h' => '0',
  'blog_dropshadow_v' => '0',
  'blog_dropshadow_b' => '10',
  'blog_dropshadow_c' => '666666',
  'footer_btn_headline' => '',
  'footer_btn_url' => '',
  'map_address' => '',
  'zipcode' => '',
  'phonenumber' => '',
  'fix_header' => 1,
  'tel_header' => 0,
  'show_map' =>1,
  'blog_url' => '',
  'myapikey' => '',
  'map_address_LatLng' => '',

// フッターの固定メニュー
  //'show_footer_bar' => 1,
  'footer_bar_display' => 'type3',
  'footer_bar_tp' => 0.8,
  'footer_bar_bg' => 'FFFFFF',
  'footer_bar_border' => 'DDDDDD',
  'footer_bar_color' => '000000',
  'footer_bar_btns' => array(
    array(
      'type' => 'type1',
      'label' => '',
      'url' => '',
      'number' => '',
      'target' => 0,
      'icon' => 'file-text'
    )
  )
);

/**
 * Design Plusのオプションを返す
 * @global array $dp_default_options
 * @return array
 */
function get_desing_plus_option(){
	global $dp_default_options;
	return shortcode_atts($dp_default_options, get_option('dp_options', array()));
}



// カラーピッカーの準備 その他javascriptの読み込み
add_action('admin_print_scripts', 'my_admin_print_scripts');
function my_admin_print_scripts() {
  wp_enqueue_script('jscolor', get_template_directory_uri().'/admin/jscolor.js');
  wp_enqueue_script('jquery.cookieTab', get_template_directory_uri().'/admin/jquery.cookieTab.js');
}



// 画像アップロードの準備
function wp_gear_manager_admin_scripts() {
wp_enqueue_script('dp-image-manager', get_template_directory_uri().'/admin/image-manager.js', array('jquery', 'jquery-ui-draggable', 'imgareaselect'));
wp_enqueue_script('dp-image-manager2', get_template_directory_uri().'/admin/image-manager2.js', array('jquery', 'jquery-ui-draggable', 'imgareaselect'));
}
function wp_gear_manager_admin_styles() {
wp_enqueue_style('imgareaselect');
}
add_action('admin_print_scripts', 'wp_gear_manager_admin_scripts');
add_action('admin_print_styles', 'wp_gear_manager_admin_styles');



// 登録
function theme_options_init(){
 register_setting( 'design_plus_options', 'dp_options', 'theme_options_validate' );
}


// ロード
function theme_options_add_page() {
 add_theme_page( __( 'Theme Options', 'tcd-w' ), __( 'TCD Theme Options', 'tcd-w' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

//最新記事のカテゴリーの初期設定
global $fourth_cate_options;
$fourth_cate_options[0] = array(
    'value' => 0,
    'label' => ''
);
$dp_cats = get_categories();
foreach( $dp_cats as $dp_cat ) :
 $fourth_cate_options[$dp_cat->cat_ID] = array(
  'value' => $dp_cat->cat_ID,
  'label' => $dp_cat->cat_name
 );
endforeach;

/**
 * ソーシャルボタンの設定
 * @var array
 */
global $sns_type_top_options;// 記事上ボタンタイプ
$sns_type_top_options = array(
'type1' => array( 'value' => 'type1', 'label' => __( 'style1', 'tcd-w' )),
'type2' => array( 'value' => 'type2', 'label' => __( 'style2', 'tcd-w' )),
'type3' => array( 'value' => 'type3', 'label' => __( 'style3', 'tcd-w' )),
'type4' => array( 'value' => 'type4', 'label' => __( 'style4', 'tcd-w' )),
'type5' => array( 'value' => 'type5', 'label' => __( 'style5', 'tcd-w' ))
);

global $sns_type_btm_options;// 記事下ボタンタイプ
$sns_type_btm_options = array(
'type1' => array( 'value' => 'type1', 'label' => __( 'style1', 'tcd-w' )),
'type2' => array( 'value' => 'type2', 'label' => __( 'style2', 'tcd-w' )),
'type3' => array( 'value' => 'type3', 'label' => __( 'style3', 'tcd-w' )),
'type4' => array( 'value' => 'type4', 'label' => __( 'style4', 'tcd-w' )),
'type5' => array( 'value' => 'type5', 'label' => __( 'style5', 'tcd-w' ))
);

// フッターの固定メニュー 表示タイプ
global $footer_bar_display_options;
$footer_bar_display_options = array(
 'type1' => array('value' => 'type1', 'label' => __( 'Fade In', 'tcd-w' )),
 'type2' => array('value' => 'type2', 'label' => __( 'Slide In', 'tcd-w' )),
 'type3' => array('value' => 'type3', 'label' => __( 'Hide', 'tcd-w' ))
);

// フッターの固定メニュー ボタンのタイプ
global $footer_bar_button_options;
$footer_bar_button_options = array(
 'type1' => array('value' => 'type1', 'label' => __( 'Default', 'tcd-w' )),
 'type2' => array('value' => 'type2', 'label' => __( 'Share', 'tcd-w' )),
 'type3' => array('value' => 'type3', 'label' => __( 'Telephone', 'tcd-w' ))
);

// フッターの固定メニューのアイコン
global $footer_bar_icon_options;
$footer_bar_icon_options = array(
 'file-text' => array('value' => 'file-text', 'label' => __( 'Document', 'tcd-w' )),
 'share-alt' => array('value' => 'share-alt', 'label' => __( 'Share', 'tcd-w' )),
 'phone' => array('value' => 'phone', 'label' => __( 'Telephone', 'tcd-w' )),
 'envelope' => array('value' => 'envelope', 'label' => __( 'Envelope', 'tcd-w' )),
 'tag' => array('value' => 'tag', 'label' => __( 'Tag', 'tcd-w' )),
 'pencil' => array('value' => 'pencil', 'label' => __( 'Pencil', 'tcd-w' ))
);



// テーマオプション画面の作成
function theme_options_do_page() {
 global $dp_upload_error, $fourth_cate_options, $sns_type_top_options, $sns_type_btm_options, $footer_bar_icon_options, $footer_bar_button_options, $footer_bar_display_options;
 $options = get_desing_plus_option();

 if ( ! isset( $_REQUEST['settings-updated'] ) )
  $_REQUEST['settings-updated'] = false;


?>

<div class="wrap">
 <?php screen_icon(); echo "<h2>" . __( 'TCD Theme Options', 'tcd-w' ) . "</h2>"; ?>

 <?php // 更新時のメッセージ
       if ( false !== $_REQUEST['settings-updated'] ) :
 ?>
 <div class="updated fade"><p><strong><?php _e('Updated', 'tcd-w');  ?></strong></p></div>
 <?php endif; ?>

 <?php /* ファイルアップロード時のメッセージ */ if(!empty($dp_upload_error['message'])): ?>
  <?php if($dp_upload_error['error']): ?>
   <div id="error" class="error"><p><?php echo $dp_upload_error['message']; ?></p></div>
  <?php else: ?>
   <div id="message" class="updated fade"><p><?php echo $dp_upload_error['message']; ?></p></div>
  <?php endif; ?>
 <?php endif; ?>

 <script type="text/javascript">
  jQuery(document).ready(function($){
   $('#my_theme_option').cookieTab({
    tabMenuElm: '#theme_tab',
    tabPanelElm: '#tab-panel'
   });
  });
 </script>

 <div id="my_theme_option" class="cf">

<div id="my_theme_left">
  <ul id="theme_tab" class="cf">
   <li><a href="#tab-content1"><?php _e('Basic', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content2"><?php _e('Header Logo', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content3"><?php _e('Footer Logo', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content4"><?php _e('Index page1', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content5"><?php _e('Index page2', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content6"><?php _e('Index page3', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content7"><?php _e('Index page4', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content8"><?php _e('Index page5', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content9"><?php _e('Index page6', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content10"><?php _e('Blog', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content12"><?php _e('Single Page Banner', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content13"><?php _e('Footer for mobile', 'tcd-w');  ?></a></li>
  </ul>
</div>


  <div id="my_theme_right">

<form method="post" action="options.php" enctype="multipart/form-data">
 <?php settings_fields( 'design_plus_options' ); ?>

 <div id="tab-panel">

  <!-- #tab-content1 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content1">

   <?php // サイトカラー ?>
    <div class="theme_option_field cf">
     <h3 class="theme_option_headline"><?php _e('Color setting', 'tcd-w');  ?></h3>
     <h4 class="theme_option_headline2"><?php _e('Primary color setting', 'tcd-w');  ?></h4>
     <input type="text" id="color1" class="color" name="dp_options[pickedcolor1]" value="<?php esc_attr_e( $options['pickedcolor1'] ); ?>" />
     <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('color1').color.fromString('238C00')">

     <h4 class="theme_option_headline2"><?php _e('Secondary color setting', 'tcd-w');  ?></h4>
     <input type="text" id="color2" class="color" name="dp_options[pickedcolor2]" value="<?php esc_attr_e( $options['pickedcolor2'] ); ?>" />
     <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('color2').color.fromString('AAAAAA')">

     <h4 class="theme_option_headline2"><?php _e('Sub color setting', 'tcd-w');  ?></h4>
     <input type="text" id="color3" class="color" name="dp_options[pickedcolor3]" value="<?php esc_attr_e( $options['pickedcolor3'] ); ?>" />
     <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('color3').color.fromString('175E00')">

     <h4 class="theme_option_headline2"><?php _e('Footer background color setting', 'tcd-w');  ?></h4>
     <input type="text" id="color4" class="color" name="dp_options[pickedcolor4]" value="<?php esc_attr_e( $options['pickedcolor4'] ); ?>" />
     <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('color4').color.fromString('222222')">

     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>


   <?php // フォントサイズ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Font size', 'tcd-w');  ?></h3>
    <p><?php _e('Font size of single page and wp-page.', 'tcd-w');  ?></p>
    <div class="theme_option_input">
     <input id="dp_options[content_font_size]" class="font_size" type="text" name="dp_options[content_font_size]" value="<?php esc_attr_e( $options['content_font_size'] ); ?>" /><span>px</span>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

   <?php // 投稿者名・タグ・コメント ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Display Setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <ul>
      <li><label><input id="dp_options[show_date]" name="dp_options[show_date]" type="checkbox" value="1" <?php checked( '1', $options['show_date'] ); ?> /> <?php _e('Display date', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_category]" name="dp_options[show_category]" type="checkbox" value="1" <?php checked( '1', $options['show_category'] ); ?> /> <?php _e('Display category', 'tcd-w');  ?></label></li>
      <!--<li><label><input id="dp_options[show_tag]" name="dp_options[show_tag]" type="checkbox" value="1" <?php checked( '1', $options['show_tag'] ); ?> /> <?php _e('Display tags', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_author]" name="dp_options[show_author]" type="checkbox" value="1" <?php checked( '1', $options['show_author'] ); ?> /> <?php _e('Display author', 'tcd-w');  ?></label></li>-->
      <li><label><input id="dp_options[show_comment]" name="dp_options[show_comment]" type="checkbox" value="1" <?php checked( '1', $options['show_comment'] ); ?> /> <?php _e('Display comment', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_thumbnail]" name="dp_options[show_thumbnail]" type="checkbox" value="1" <?php checked( '1', $options['show_thumbnail'] ); ?> /> <?php _e('Display thumbnail at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_bookmark]" name="dp_options[show_bookmark]" type="checkbox" value="1" <?php checked( '1', $options['show_bookmark'] ); ?> /> <?php _e('Display bookmark at single post page', 'tcd-w');  ?></label></li>
      <!--<li><label><input id="dp_options[show_trackback]" name="dp_options[show_trackback]" type="checkbox" value="1" <?php checked( '1', $options['show_trackback'] ); ?> /> <?php _e('Display trackbacks at single post page', 'tcd-w');  ?></label></li>-->
      <li><label><input id="dp_options[show_related_post]" name="dp_options[show_related_post]" type="checkbox" value="1" <?php checked( '1', $options['show_related_post'] ); ?> /> <?php _e('Display related post at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_next_post]" name="dp_options[show_next_post]" type="checkbox" value="1" <?php checked( '1', $options['show_next_post'] ); ?> /> <?php _e('Display next previous post link at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_rss]" name="dp_options[show_rss]" type="checkbox" value="1" <?php checked( '1', $options['show_rss'] ); ?> /> <?php _e('Display RSS at footer', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_bread]" name="dp_options[show_bread]" type="checkbox" value="1" <?php checked( '1', $options['show_bread'] ); ?> /> <?php _e('Display breadcrumb list at page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[fix_header]" name="dp_options[fix_header]" type="checkbox" value="1" <?php checked( '1', $options['fix_header'] ); ?> /> <?php _e('Fix the header', 'tcd-w');  ?></label></li>
      <!--<li><label><input id="dp_options[show_sns]" name="dp_options[show_sns]" type="checkbox" value="1" <?php checked( '1', $options['show_sns'] ); ?> /> <?php _e('Display SNS in hover effect', 'tcd-w');  ?></label></li>-->
     </ul>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

   <?php // facebook twitter ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('twitter and facebook setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('When it is blank, twitter and facebook icon will not displayed on a site.', 'tcd-w');  ?></p>
     <ul>
      <li>
       <label style="display:inline-block; min-width:140px;"><?php _e('your twitter URL', 'tcd-w');  ?></label>
       <input id="dp_options[twitter_url]" class="regular-text" type="text" name="dp_options[twitter_url]" value="<?php esc_attr_e( $options['twitter_url'] ); ?>" />
      </li>
      <li>
       <label style="display:inline-block; min-width:140px;"><?php _e('your facebook URL', 'tcd-w');  ?></label>
       <input id="dp_options[facebook_url]" class="regular-text" type="text" name="dp_options[facebook_url]" value="<?php esc_attr_e( $options['facebook_url'] ); ?>" />
      </li>
     <li>
      <label style="display:inline-block; min-width:140px;"><?php _e('your instagram URL', 'tcd-w');  ?></label>
      <input id="dp_options[insta_url]" class="regular-text" type="text" name="dp_options[insta_url]" value="<?php esc_attr_e( $options['insta_url'] ); ?>" />
     </li>
     <li>
      <label style="display:inline-block; min-width:140px;"><?php _e('your Pinterest URL', 'tcd-w');  ?></label>
      <input id="dp_options[pinterest_url]" class="regular-text" type="text" name="dp_options[pinterest_url]" value="<?php esc_attr_e( $options['pinterest_url'] ); ?>" />
     </li>
     <li>
      <label style="display:inline-block; min-width:140px;"><?php _e('your flickr URL', 'tcd-w');  ?></label>
      <input id="dp_options[flickr_url]" class="regular-text" type="text" name="dp_options[flickr_url]" value="<?php esc_attr_e( $options['flickr_url'] ); ?>" />
     </li>
     <li>
      <label style="display:inline-block; min-width:140px;"><?php _e('your tumblr URL', 'tcd-w');  ?></label>
      <input id="dp_options[tumblr_url]" class="regular-text" type="text" name="dp_options[tumblr_url]" value="<?php esc_attr_e( $options['tumblr_url'] ); ?>" />
     </li>
     </ul>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

    <?php // Use OGP tag ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Facebook OGP setting', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><label><input id="dp_options[use_ogp]" name="dp_options[use_ogp]" type="checkbox" value="1" <?php checked( '1', $options['use_ogp'] ); ?> /> <?php _e('Use OGP', 'tcd-w');  ?></label></p>
     <p><?php _e('Your fb:admins ID', 'tcd-w');  ?> <input id="dp_options[fb_admin_id]" class="regular-text" type="text" name="dp_options[fb_admin_id]" value="<?php esc_attr_e( $options['fb_admin_id'] ); ?>" /></p>
     <p><?php _e('<a href="http://design-plus1.com/tcd-w/2016/07/facebook-3.html" target="_blank">Information about Facebook OGP and fb:admins ID</a>', 'tcd-w'); ?></p>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

   <?php // Use twitter card ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Twitter Cards setting', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><label><input id="dp_options[use_twitter_card]" name="dp_options[use_twitter_card]" type="checkbox" value="1" <?php checked( '1', $options['use_twitter_card'] ); ?> /> <?php _e('Use Twitter Cards', 'tcd-w');  ?></label></p>
     <p><?php _e('Your Twitter account name (exclude @ mark)', 'tcd-w');  ?> <input id="dp_options[twitter_account_name]" class="regular-text" type="text" name="dp_options[twitter_account_name]" value="<?php esc_attr_e( $options['twitter_account_name'] ); ?>" /></p>
     <p><?php _e('Register Twitter Cards from <a href="https://dev.twitter.com/docs/cards/validation/validator" target="_blank">Twitter Developer page</a>.<br /><a href="https://dev.twitter.com/docs/cards" target="_blank">Information about Twitter Cards</a>.', 'tcd-w'); ?></p>
    </div>
   </div>

   <?php // NEWソーシャルボタン ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Social button Setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
    <h4 class="theme_option_headline2"><?php _e('Set of articles top buttons', 'tcd-w');  ?></h4>

        <label><input id="dp_options[show_sns_top]" name="dp_options[show_sns_top]" type="checkbox" value="1" <?php checked( '1', $options['show_sns_top'] ); ?> /> <?php _e('Buttons to the article top', 'tcd-w');  ?></label>

    <h4 class="theme_option_headline2"><?php _e('Type of button on article top', 'tcd-w');  ?></h4>
    <fieldset class="cf">
    <ul class="cf">
    <?php
         if ( ! isset( $checked ) )
         $checked = '';
         foreach ( $sns_type_top_options as $option ) {
         $sns_type_top_setting = $options['sns_type_top'];
          if ( '' != $sns_type_top_setting ) {
           if ( $options['sns_type_top'] == $option['value'] ) {
            $checked = "checked=\"checked\"";
           } else {
            $checked = '';
           }
          }
    ?>
     <li>
      <label>
      <input type="radio" name="dp_options[sns_type_top]" value="<?php esc_attr_e( $option['value'] ); ?>" <?php echo $checked; ?> />
      <?php _e($option['label'], 'tcd-w'); ?>
      </label>
     </li>
    <?php
         }
    ?>
    </ul>
    </fieldset>
    <h4 class="theme_option_headline2"><?php _e('Select the social button to show on article top', 'tcd-w');  ?></h4>
      <ul>
        <li><label><input id="dp_options[show_twitter_top]" name="dp_options[show_twitter_top]" type="checkbox" value="1" <?php checked( '1', $options['show_twitter_top'] ); ?> /> <?php _e('Display twitter button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_fblike_top]" name="dp_options[show_fblike_top]" type="checkbox" value="1" <?php checked( '1', $options['show_fblike_top'] ); ?> /> <?php _e('Display facebook like button -Button type 5 (Default button) only', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_fbshare_top]" name="dp_options[show_fbshare_top]" type="checkbox" value="1" <?php checked( '1', $options['show_fbshare_top'] ); ?> /> <?php _e('Display facebook share button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_google_top]" name="dp_options[show_google_top]" type="checkbox" value="1" <?php checked( '1', $options['show_google_top'] ); ?> /> <?php _e('Display google+ button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_hatena_top]" name="dp_options[show_hatena_top]" type="checkbox" value="1" <?php checked( '1', $options['show_hatena_top'] ); ?> /> <?php _e('Display hatena button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_pocket_top]" name="dp_options[show_pocket_top]" type="checkbox" value="1" <?php checked( '1', $options['show_pocket_top'] ); ?> /> <?php _e('Display pocket button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_feedly_top]" name="dp_options[show_feedly_top]" type="checkbox" value="1" <?php checked( '1', $options['show_feedly_top'] ); ?> /> <?php _e('Display feedly button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_rss_top]" name="dp_options[show_rss_top]" type="checkbox" value="1" <?php checked( '1', $options['show_rss_top'] ); ?> /> <?php _e('Display rss button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_pinterest_top]" name="dp_options[show_pinterest_top]" type="checkbox" value="1" <?php checked( '1', $options['show_pinterest_top'] ); ?> /> <?php _e('Display pinterest button', 'tcd-w');  ?></label></li>
      </ul>
     </li>
     </ul>

    <hr />

    <h4 class="theme_option_headline2"><?php _e('Set of articles bottom buttons', 'tcd-w');  ?></h4>
        <label><input id="dp_options[show_sns_btm]" name="dp_options[show_sns_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_sns_btm'] ); ?> /> <?php _e('Buttons to the article bottom', 'tcd-w');  ?></label>
    <h4 class="theme_option_headline2"><?php _e('Type of button on article bottom', 'tcd-w');  ?></h4>
    <fieldset class="cf">
    <ul class="cf">
    <?php
         if ( ! isset( $checked ) )
         $checked = '';
         foreach ( $sns_type_btm_options as $option ) {
         $sns_type_btm_setting = $options['sns_type_btm'];
          if ( '' != $sns_type_btm_setting ) {
           if ( $options['sns_type_btm'] == $option['value'] ) {
            $checked = "checked=\"checked\"";
           } else {
            $checked = '';
           }
          }
    ?>
     <li>
      <label>
      <input type="radio" name="dp_options[sns_type_btm]" value="<?php esc_attr_e( $option['value'] ); ?>" <?php echo $checked; ?> />
      <?php _e($option['label'], 'tcd-w'); ?>
      </label>
     </li>
    <?php
         }
    ?>
    </ul>
    </fieldset>

    <h4 class="theme_option_headline2"><?php _e('Select the social button to show on article bottom', 'tcd-w');  ?></h4>
      <ul>
        <li><label><input id="dp_options[show_twitter_btm]" name="dp_options[show_twitter_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_twitter_btm'] ); ?> /> <?php _e('Display twitter button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_fblike_btm]" name="dp_options[show_fblike_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_fblike_btm'] ); ?> /> <?php _e('Display facebook like button-Button type 5 (Default button) only', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_fbshare_btm]" name="dp_options[show_fbshare_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_fbshare_btm'] ); ?> /> <?php _e('Display facebook share button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_google_btm]" name="dp_options[show_google_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_google_btm'] ); ?> /> <?php _e('Display google+ button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_hatena_btm]" name="dp_options[show_hatena_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_hatena_btm'] ); ?> /> <?php _e('Display hatena button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_pocket_btm]" name="dp_options[show_pocket_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_pocket_btm'] ); ?> /> <?php _e('Display pocket button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_feedly_btm]" name="dp_options[show_feedly_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_feedly_btm'] ); ?> /> <?php _e('Display feedly button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_rss_btm]" name="dp_options[show_rss_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_rss_btm'] ); ?> /> <?php _e('Display rss button', 'tcd-w');  ?></label></li>
        <li><label><input id="dp_options[show_pinterest_btm]" name="dp_options[show_pinterest_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_pinterest_btm'] ); ?> /> <?php _e('Display pinterest button', 'tcd-w');  ?></label></li>
      </ul>
     </li>
     </ul>
    <h4 class="theme_option_headline2"><?php _e('Setting for the twitter button', 'tcd-w');  ?></h4>
         <label style="margin-top:20px;"><?php _e('Set of twitter account. (ex.designplus)', 'tcd-w');  ?></label>
         <input style="display:block; margin:.6em 0 1em;" id="dp_options[twitter_info]" class="regular-text" type="text" name="dp_options[twitter_info]" value="<?php esc_attr_e( $options['twitter_info'] ); ?>" />
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

  <?php // 検索の設定 ?>
   <!--<div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Using Google custom search', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('If you wan\'t to use google custom search for your wordpress, enter your google custom search ID.<br /><a href="http://www.google.com/cse/" target="_blank">Read more about Google custom search page.</a>', 'tcd-w');  ?></p>
     <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Google custom search ID', 'tcd-w');  ?></label>
     <input id="dp_options[custom_search_id]" class="regular-text" type="text" name="dp_options[custom_search_id]" value="<?php esc_attr_e( $options['custom_search_id'] ); ?>" />
    </div>
   </div>-->

   <?php // Break-wordを使用する ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Use "word-wrap:break-word;" CSS for title and excerpt', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <ul>
      <li><label><input id="dp_options[use_break_word]" name="dp_options[use_break_word]" type="checkbox" value="1" <?php checked( '1', $options['use_break_word'] ); ?> /> <?php _e('Use break-word', 'tcd-w');  ?></label></li>
     </ul>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

   <?php // ユーザーCSS用の自由記入欄 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Free input area for user definition CSS.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('Code example:<br /><strong>.example { font-size:12px; }</strong>', 'tcd-w');  ?></p>
     <textarea id="dp_options[css_code]" class="large-text" cols="50" rows="10" name="dp_options[css_code]"><?php echo esc_textarea( $options['css_code'] ); ?></textarea>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

   <?php // Basic Informations ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Basic Informations', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
      <h4 class="theme_option_headline2"><?php _e('Footer Button', 'tcd-w');  ?></h4>
     <ul>
      <li>
       <label style="display:inline-block; min-width:140px;"><?php _e('Label of footer button', 'tcd-w');  ?></label>
       <input id="dp_options[footer_btn_headline]" class="regular-text" type="text" name="dp_options[footer_btn_headline]" value="<?php esc_attr_e( $options['footer_btn_headline'] ); ?>" />
      </li>
      <li>
       <label style="display:inline-block; min-width:140px;"><?php _e('URL for footer button', 'tcd-w');  ?></label>
       <input id="dp_options[footer_btn_url]" class="regular-text" type="text" name="dp_options[footer_btn_url]" value="<?php esc_attr_e( $options['footer_btn_url'] ); ?>" />
      </li>
     </ul>
      <h4 class="theme_option_headline2"><?php _e('Setting for the address', 'tcd-w');  ?></h4>
      <p><?php _e('The address is displayed at the bottom of footer and used for the marker on your map.','tcd-w'); ?></p>
     <ul>
      <li>
       <label style="display:inline-block; min-width:140px;"><?php _e('Zip-code', 'tcd-w');  ?></label>
       <input id="dp_options[zipcode]" class="regular-text" type="text" name="dp_options[zipcode]" value="<?php esc_attr_e( $options['zipcode'] ); ?>" />
      </li>
      <li>
       <label style="display:inline-block; min-width:140px;"><?php _e('Address', 'tcd-w');  ?></label>
       <input id="dp_options[map_address]" class="regular-text" type="text" name="dp_options[map_address]" value="<?php esc_attr_e( $options['map_address'] ); ?>" />
      </li>
     </ul>
      <h4 class="theme_option_headline2"><?php _e('Setting for the map', 'tcd-w');  ?></h4>
      <p><?php _e('The map is displayed the sixth block of the front page.','tcd-w'); ?></p>
     <ul>
      <li><label><input id="dp_options[show_map]" name="dp_options[show_map]" type="checkbox" value="1" <?php checked( '1', $options['show_map'] ); ?> /> <?php _e('Display the map of the above address', 'tcd-w');  ?></label></li>
      <li>
       <label style="display:inline-block; min-width:140px;"><?php _e('API Key', 'tcd-w');  ?></label>
       <input id="dp_options[myapikey]" class="regular-text" type="text" name="dp_options[myapikey]" value="<?php esc_attr_e( $options['myapikey'] ); ?>" />
      </li>
      <li>
	<p><?php _e('If the marker on your map is not displayed correctly, you can also use this option. (e.g. 34.693730, 135.502213)', 'tcd-w'); ?></p>
       <label style="display:inline-block; min-width:140px;"><?php _e('Latitude, Longitude', 'tcd-w');  ?></label>
       <input id="dp_options[map_address_LatLng]" class="regular-text" type="text" name="dp_options[map_address_LatLng]" value="<?php esc_attr_e( $options['map_address_LatLng'] ); ?>" />
      </li>
     </ul>
      <h4 class="theme_option_headline2"><?php _e('Setting for the phone number', 'tcd-w');  ?></h4>
     <ul>
      <li>
       <label style="display:block; margin: 1em 0;"><?php _e('Enter the phone number displayed at the bottom of the footer.','tcd-w'); ?></label>
       <input id="dp_options[phonenumber]" class="regular-text" type="text" name="dp_options[phonenumber]" value="<?php esc_attr_e( $options['phonenumber'] ); ?>" />
      </li>
      <li><label><input id="dp_options[tel_header]" name="dp_options[tel_header]" type="checkbox" value="1" <?php checked( '1', $options['tel_header'] ); ?> /> <?php _e('Display the phone number instead of the global menu of header', 'tcd-w');  ?></label></li>
     </ul>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>


  </div><!-- END #tab-content1 -->


  <!-- #tab-content2 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content2">

   <?php // ステップ１ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 1 : Upload image to use for logo.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('Upload image to use for logo from your computer.<br />You can resize your logo image in step 2 and adjust position in step 3.', 'tcd-w');  ?></p>
     <div class="button_area">
      <label for="dp_image"><?php _e('Select image to use for logo from your computer.', 'tcd-w');  ?></label>
      <input type="file" name="dp_image" id="dp_image" value="" />
      <input type="submit" class="button-ml" value="<?php _e('Upload', 'tcd-w');  ?>" />
     </div>
     <?php if(dp_logo_exists()): $info = dp_logo_info(); ?>
     <div class="uploaded_logo">
      <h4><?php _e('Uploaded image.', 'tcd-w');  ?></h4>
      <div class="uploaded_logo_image" id="original_logo_size">
       <?php dp_logo_img_tag(false, '', '', 9999); ?>
      </div>
      <p><?php printf(__('Original image size : width %1$dpx, height %2$dpx', 'tcd-w'), $info['width'], $info['height']); ?></p>
     </div>
     <?php else: ?>
     <div class="uploaded_logo">
      <h4><?php _e('The image has not been uploaded yet.<br />A normal text will be used for a site logo.', 'tcd-w');  ?></h4>
     </div>
     <?php endif; ?>
    </div>
   </div>

   <?php // ステップ２ ?>
   <?php if(dp_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 2 : Resize uploaded image.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
    <?php if(dp_logo_exists()): ?>
     <p><?php _e('You can resize uploaded image.<br />If you don\'t need to resize, go to step 3.', 'tcd-w');  ?></p>
     <div class="uploaded_logo">
      <h4><?php _e('Please drag the range to cut off.', 'tcd-w');  ?></h4>
      <div class="uploaded_logo_image">
       <?php dp_logo_resize_base(9999); ?>
      </div>
      <div class="resize_amount">
       <label><?php _e('Ratio', 'tcd-w');  ?>: <input type="text" name="dp_resize_ratio" id="dp_resize_ratio" value="100" />%</label>
       <label><?php _e('Width', 'tcd-w');  ?>: <input type="text" name="dp_resized_width" id="dp_resized_width" />px</label>
       <label><?php _e('Height', 'tcd-w');  ?>: <input type="text" name="dp_resized_height" id="dp_resized_height" />px</label>
      </div>
      <div id="resize_button_area">
       <input type="submit" class="button-primary" value="<?php _e('Resize', 'tcd-w'); ?>" />
      </div>
     </div>
     <?php if($info = dp_logo_info(true)): ?>
     <div class="uploaded_logo">
      <h4><?php printf(__('Resized image : width %1$dpx, height %2$dpx', 'tcd-w'), $info['width'], $info['height']); ?></h4>
      <div class="uploaded_logo_image">
       <?php dp_logo_img_tag(true, '', '', 9999); ?>
      </div>
     </div>
     <?php endif; ?>
    <?php endif; ?>
    </div>
   </div>
   <?php endif; ?>

   <?php // ステップ３ ?>
   <?php if(dp_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 3 : Adjust position of logo.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
    <?php if(dp_logo_exists()): ?>
     <p><?php _e('Drag the logo image and adjust the position.', 'tcd-w');  ?></p>
     <div id="tcd-w-logo-adjuster" class="ratio-<?php echo '760-760'; ?>">
      <?php if(dp_logo_resize_tag(760, 760, $options['logotop'], $options['logoleft'])): ?>
      <?php else: ?>
      <span><?php _e('Logo size is too big. Please resize your logo image.', 'tcd-w');  ?></span>
      <?php endif; ?>
     </div>
     <div class="hide">
      <label><?php _e('Top', 'tcd-w');  ?>: <input type="text" name="dp_options[logotop]" id="dp-options-logotop" value="<?php esc_attr_e( $options['logotop'] ); ?>" />px </label>
      <label><?php _e('Left', 'tcd-w');  ?>: <input type="text" name="dp_options[logoleft]" id="dp-options-logoleft" value="<?php esc_attr_e( $options['logoleft'] ); ?>" />px </label>
      <input type="button" class="button-ml" id="dp-adjust-realvalue" value="adjust" />
     </div>
     <p><input type="submit" class="button-ml" value="<?php _e('Save the position', 'tcd-w');  ?>" /></p>
    <?php endif; ?>
    </div>
   </div>
   <?php endif; ?>

   <?php // 画像の削除 ?>
   <?php if(dp_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Delete logo image.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('If you delete the logo image, normal text will be used for a site logo.', 'tcd-w');  ?></p>
     <p><a class="button-ml" href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_image_'.  get_current_user_id()); ?>" onclick="if(!confirm('<?php _e('Are you sure to delete logo image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w');  ?></a></p>
    </div>
   </div>
   <?php endif; ?>

  </div><!-- END #tab-content2 -->



  <!-- #tab-content3 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content3">

   <?php // ステップ１ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 1 : Upload image to use for logo.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('Upload image to use for logo from your computer.<br />You can resize your logo image in step 2.', 'tcd-w');  ?></p>
     <div class="button_area">
      <label for="dp_image2"><?php _e('Select image to use for logo from your computer.', 'tcd-w');  ?></label>
      <input type="file" name="dp_image2" id="dp_image2" value="" />
      <input type="submit" class="button-ml" value="<?php _e('Upload', 'tcd-w');  ?>" />
     </div>
     <?php if(dp_footer_logo_exists()): $info = dp_footer_logo_info(); ?>
     <div class="uploaded_logo">
      <h4><?php _e('Uploaded image.', 'tcd-w');  ?></h4>
      <div class="uploaded_logo_image" id="original_logo_size">
       <?php dp_footer_logo_img_tag(false, '', '', 9999); ?>
      </div>
      <p><?php printf(__('Original image size : width %1$dpx, height %2$dpx', 'tcd-w'), $info['width'], $info['height']); ?></p>
     </div>
     <?php else: ?>
     <div class="uploaded_logo">
      <h4><?php _e('The image has not been uploaded yet.<br />A normal text will be used for a site logo.', 'tcd-w');  ?></h4>
     </div>
     <?php endif; ?>
    </div>
   </div>

   <?php // ステップ２ ?>
   <?php if(dp_footer_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 2 : Resize uploaded image.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
    <?php if(dp_footer_logo_exists()): ?>
     <p><?php _e('You can resize uploaded image.', 'tcd-w');  ?></p>
     <div class="uploaded_logo">
      <h4><?php _e('Please drag the range to cut off.', 'tcd-w');  ?></h4>
      <div class="uploaded_logo_image">
       <?php dp_footer_logo_resize_base(9999); ?>
      </div>
      <div class="resize_amount">
       <label><?php _e('Ratio', 'tcd-w');  ?>: <input type="text" name="dp_resize_ratio2" id="dp_resize_ratio2" value="100" />%</label>
       <label><?php _e('Width', 'tcd-w');  ?>: <input type="text" name="dp_resized_width2" id="dp_resized_width2" />px</label>
       <label><?php _e('Height', 'tcd-w');  ?>: <input type="text" name="dp_resized_height2" id="dp_resized_height2" />px</label>
      </div>
      <div id="resize_button_area">
       <input type="submit" class="button-primary" value="<?php _e('Resize', 'tcd-w'); ?>" />
      </div>
     </div>
     <?php if($info = dp_footer_logo_info(true)): ?>
     <div class="uploaded_logo">
      <h4><?php printf(__('Resized image : width %1$dpx, height %2$dpx', 'tcd-w'), $info['width'], $info['height']); ?></h4>
      <div class="uploaded_logo_image">
       <?php dp_footer_logo_img_tag(true, '', '', 9999); ?>
      </div>
     </div>
     <?php endif; ?>
    <?php endif; ?>
    </div>
   </div>
   <?php endif; ?>

   <?php // ステップ３ ?>
   <?php if(dp_footer_logo_exists()): ?>
   <!---<div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 3 : Adjust position of logo.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">-->
    <?php if(dp_footer_logo_exists()): ?>
     <p><?php _e('You can not change the position of footer logo.', 'tcd-w');  ?></p>
     <div id="tcd-w-logo-adjuster2" class="ratio-<?php echo '760-760'; ?>" style="display:none;">
      <?php if(dp_footer_logo_resize_tag(760, 760, $options['logotop2'], $options['logoleft2'])): ?>
      <?php else: ?>
      <span><?php _e('Logo size is too big. Please resize your logo image.', 'tcd-w');  ?></span>
      <?php endif; ?>
     </div>
     <!--<div class="hide">
      <label><?php _e('Top', 'tcd-w');  ?>: <input type="text" name="dp_options[logotop2]" id="dp-options-logotop2" value="<?php esc_attr_e( $options['logotop2'] ); ?>" />px </label>
      <label><?php _e('Left', 'tcd-w');  ?>: <input type="text" name="dp_options[logoleft2]" id="dp-options-logoleft2" value="<?php esc_attr_e( $options['logoleft2'] ); ?>" />px </label>
      <input type="button" class="button-ml" id="dp-adjust-realvalue2" value="adjust" />
     </div>
     <p><input type="submit" class="button-ml" value="<?php _e('Save the position', 'tcd-w');  ?>" /></p>
    <?php endif; ?>
    </div>
   </div>-->
   <?php endif; ?>

   <?php // 画像の削除 ?>
   <?php if(dp_footer_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Delete logo image.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('If you delete the logo image, normal text will be used for a site logo.', 'tcd-w');  ?></p>
     <p><a class="button-ml" href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_footer_image_'.  get_current_user_id()); ?>" onclick="if(!confirm('<?php _e('Are you sure to delete logo image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w');  ?></a></p>
    </div>
   </div>
   <?php endif; ?>

  </div><!-- END #tab-content3 -->



  <!-- #tab-content4 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content4">

  <?php // Slider ?>
  <p class="tab_desc"><?php _e('Setting for the First Block of Index page', 'tcd-w');  ?></p>

  <?php for($i = 1; $i <= 3; $i++): ?>
   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Index Slider setup', 'tcd-w');  ?><?php echo $i; ?></h3>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Slider image.', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[slider_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['slider_image'.$i] ); ?>" /></div>
        <input type="file" name="slider_image_file_<?php echo $i?>" id="slider_image_file_<?php echo $i?>" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['slider_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['slider_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['slider_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_slider_image'.$i) ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
    </div>
   </div>
  <?php endfor; ?>

   <?php // H1 Text ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Free input area for H1 Text.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <textarea id="dp_options[h1_text]" class="large-text" cols="50" rows="10" name="dp_options[h1_text]"><?php echo esc_textarea( $options['h1_text'] ); ?></textarea>
    </div>
     <div class="sub_box">
      <h4><?php _e('Auto break', 'tcd-w');  ?></h4>
      <div>
        <label><input id="dp_options[first_auto_br]" name="dp_options[first_auto_br]" type="checkbox" value="1" <?php checked( '1', $options['first_auto_br'] ); ?> /><?php _e('Insert automatically &lt;br&gt;', 'tcd-w');  ?></label>
      </div>
     </div>
     <h4><?php _e('Style setting', 'tcd-w');  ?></h4>
     <ul>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Text Color', 'tcd-w');  ?></label>
         <input type="text" id="first_color" class="color" name="dp_options[first_color]" value="<?php esc_attr_e( $options['first_color'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('first_color').color.fromString('FFFFFF')">
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the horizontal shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[first_dropshadow_h]" class="font_size" type="text" name="dp_options[first_dropshadow_h]" value="<?php esc_attr_e( $options['first_dropshadow_h'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the vertical shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[first_dropshadow_v]" class="font_size" type="text" name="dp_options[first_dropshadow_v]" value="<?php esc_attr_e( $options['first_dropshadow_v'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The blur radius.', 'tcd-w');  ?></label>
         <input id="dp_options[first_dropshadow_b]" class="font_size" type="text" name="dp_options[first_dropshadow_b]" value="<?php esc_attr_e( $options['first_dropshadow_b'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The Color of the shadow.', 'tcd-w');  ?></label>
         <input type="text" id="first_dropshadow_c" class="color" name="dp_options[first_dropshadow_c]" value="<?php esc_attr_e( $options['first_dropshadow_c'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('first_dropshadow_c').color.fromString('666666')">
       </li>
     </ul>

     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />

   </div>


  </div><!-- END #tab-content4 -->



    <!-- #tab-content5 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content5">

  <p class="tab_desc"><?php _e('Setting for the Second Block of Index page', 'tcd-w');  ?></p>

  <?php // Lead copy Image ?>
  <?php for($i = 1; $i <= 1; $i++): ?>
   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Lead copy setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Image for lead copy', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[bg_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" /></div>
        <input type="file" name="bg_image_file_<?php echo $i?>" id="bg_image_file_<?php echo $i?>" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['bg_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['bg_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_bg_image'.$i) ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Lead copy (If you use the image to lead copy, this text will be used to alt and title attribute of the image.)', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <input id="dp_options[second_leadcopy]" class="regular-text" type="text" name="dp_options[second_leadcopy]" value="<?php esc_attr_e( $options['second_leadcopy'] ); ?>" />
      </div>
     </div>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>
  <?php endfor; ?>

   <?php // Second Block Content ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Free input area for the second block content of Index.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <textarea id="dp_options[sbc_text]" class="large-text" cols="50" rows="10" name="dp_options[sbc_text]"><?php echo esc_textarea( $options['sbc_text'] ); ?></textarea>
    </div>
     <div class="sub_box">
      <h4><?php _e('Auto break', 'tcd-w');  ?></h4>
      <div>
        <label><input id="dp_options[second_auto_br]" name="dp_options[second_auto_br]" type="checkbox" value="1" <?php checked( '1', $options['second_auto_br'] ); ?> /><?php _e('Insert automatically &lt;br&gt;', 'tcd-w');  ?></label>
      </div>
     </div>
     <h4><?php _e('Text Color', 'tcd-w');  ?></h4>
     <input type="text" id="second_color" class="color" name="dp_options[second_color]" value="<?php esc_attr_e( $options['second_color'] ); ?>" />
     <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('second_color').color.fromString('333333')">
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>

  <?php for($i = 8; $i <= 8; $i++): ?>
   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Insert the image', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Insert the image', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[bg_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" /></div>
        <input type="file" name="bg_image_file_<?php echo $i?>" id="bg_image_file_<?php echo $i?>" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['bg_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['bg_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_bg_image'.$i) ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
    </div>
   </div>
  <?php endfor; ?>

  </div><!-- END #tab-content5 -->





    <!-- #tab-content6 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content6">

  <p class="tab_desc"><?php _e('Setting for the Third Block of Index page', 'tcd-w');  ?></p>

  <?php // Background Image ?>
  <?php for($i = 2; $i <= 2; $i++): ?>
   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Background Image setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Background image.', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[bg_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" /></div>
        <input type="file" name="bg_image_file_<?php echo $i?>" id="bg_image_file_<?php echo $i?>" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['bg_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['bg_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_bg_image'.$i) ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
    </div>
   </div>
  <?php endfor; ?>

   <?php // Third Block Content ?>
     <?php // 見出しの設定 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Headline Settings', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <h4 class="theme_option_headline2"><?php _e('Headline for Third Block', 'tcd-w');  ?></h4>
     <ul>
      <li>
       <input id="dp_options[third_headline]" class="regular-text" type="text" name="dp_options[third_headline]" value="<?php esc_attr_e( $options['third_headline'] ); ?>" />
      </li>
     </ul>

     <h5><?php _e('Style setting', 'tcd-w');  ?></h5>
     <ul>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Text Color', 'tcd-w');  ?></label>
         <input type="text" id="third_color" class="color" name="dp_options[third_color]" value="<?php esc_attr_e( $options['third_color'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('third_color').color.fromString('FFFFFF')">
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the horizontal shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[third_dropshadow_h]" class="font_size" type="text" name="dp_options[third_dropshadow_h]" value="<?php esc_attr_e( $options['third_dropshadow_h'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the vertical shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[third_dropshadow_v]" class="font_size" type="text" name="dp_options[third_dropshadow_v]" value="<?php esc_attr_e( $options['third_dropshadow_v'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The blur radius.', 'tcd-w');  ?></label>
         <input id="dp_options[third_dropshadow_b]" class="font_size" type="text" name="dp_options[third_dropshadow_b]" value="<?php esc_attr_e( $options['third_dropshadow_b'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The Color of the shadow.', 'tcd-w');  ?></label>
         <input type="text" id="third_dropshadow_c" class="color" name="dp_options[third_dropshadow_c]" value="<?php esc_attr_e( $options['third_dropshadow_c'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('third_dropshadow_c').color.fromString('666666')">
       </li>
     </ul>

     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

   <?php // バナーの設定 ?>
  <?php for($i = 1; $i <= 3; $i++): ?>
   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Banner of Third Block setup', 'tcd-w');  ?><?php echo $i; ?></h3>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Banner image.', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[third_banner_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['third_banner_image'.$i] ); ?>" /></div>
        <input type="file" name="third_banner_image_file_<?php echo $i?>" id="third_banner_image_file_<?php echo $i?>" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['third_banner_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['third_banner_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['third_banner_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_third_banner_image'.$i) ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Register URL of the banner', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <input id="dp_options[third_banner_url<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[third_banner_url<?php echo $i; ?>]" value="<?php esc_attr_e( $options['third_banner_url'.$i] ); ?>" />
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Link target', 'tcd-w');  ?></h4>
      <div>
        <label><input id="dp_options[third_banner_target<?php echo $i; ?>]" name="dp_options[third_banner_target<?php echo $i; ?>]" type="checkbox" value="1" <?php checked( '1', $options['third_banner_target'.$i] ); ?> /><?php _e('Target blank', 'tcd-w');  ?></label>
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Headline', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <input id="dp_options[third_banner_headline<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[third_banner_headline<?php echo $i; ?>]" value="<?php esc_attr_e( $options['third_banner_headline'.$i] ); ?>" />
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Description', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <textarea id="dp_options[third_banner_copy<?php echo $i; ?>]" class="large-text" cols="10" rows="2" name="dp_options[third_banner_copy<?php echo $i; ?>]"><?php echo esc_textarea( $options['third_banner_copy'.$i] ); ?></textarea>
      </div>
     </div>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>
  <?php endfor; ?>


  </div><!-- END #tab-content6 -->





    <!-- #tab-content7 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content7">

  <p class="tab_desc"><?php _e('Setting for the Fourth Block of Index page', 'tcd-w');  ?></p>

  <?php // Background Image ?>
  <?php for($i = 3; $i <= 3; $i++): ?>
   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Background Image setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Background image.', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[bg_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" /></div>
        <input type="file" name="bg_image_file_<?php echo $i?>" id="bg_image_file_<?php echo $i?>" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['bg_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['bg_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_bg_image'.$i) ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
    </div>
   </div>
  <?php endfor; ?>

   <?php // Fourth Block Content ?>
     <?php // 見出しの設定 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Headline Settings', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <h4 class="theme_option_headline2"><?php _e('Headline for Fourth Block', 'tcd-w');  ?></h4>
     <ul>
      <li>
       <input id="dp_options[fourth_headline]" class="regular-text" type="text" name="dp_options[fourth_headline]" value="<?php esc_attr_e( $options['fourth_headline'] ); ?>" />
      </li>
     </ul>

     <h5><?php _e('Style setting', 'tcd-w');  ?></h5>
     <ul>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Text Color', 'tcd-w');  ?></label>
         <input type="text" id="fourth_color" class="color" name="dp_options[fourth_color]" value="<?php esc_attr_e( $options['fourth_color'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('fourth_color').color.fromString('FFFFFF')">
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the horizontal shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[fourth_dropshadow_h]" class="font_size" type="text" name="dp_options[fourth_dropshadow_h]" value="<?php esc_attr_e( $options['fourth_dropshadow_h'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the vertical shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[fourth_dropshadow_v]" class="font_size" type="text" name="dp_options[fourth_dropshadow_v]" value="<?php esc_attr_e( $options['fourth_dropshadow_v'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The blur radius.', 'tcd-w');  ?></label>
         <input id="dp_options[fourth_dropshadow_b]" class="font_size" type="text" name="dp_options[fourth_dropshadow_b]" value="<?php esc_attr_e( $options['fourth_dropshadow_b'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The Color of the shadow.', 'tcd-w');  ?></label>
         <input type="text" id="fourth_dropshadow_c" class="color" name="dp_options[fourth_dropshadow_c]" value="<?php esc_attr_e( $options['fourth_dropshadow_c'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('fourth_dropshadow_c').color.fromString('666666')">
       </li>
     </ul>

     <h4 class="theme_option_headline2" style="margin-top:40px;"><?php _e('Headline2 for Fourth Block', 'tcd-w');  ?></h4>
     <ul>
      <li>
       <input id="dp_options[fourth_headline2]" class="regular-text" type="text" name="dp_options[fourth_headline2]" value="<?php esc_attr_e( $options['fourth_headline2'] ); ?>" />
      </li>
     </ul>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

   <?php // 最新記事のカテゴリー ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Featured category post setting', 'tcd-w');  ?></h3>
    <p><?php _e('Select category to use for featured category post.<br />Leave this field blank if you want to use all posts for featured category post.', 'tcd-w');  ?></p>
    <div class="theme_option_input">
     <select id="fourth_cate" name="dp_options[fourth_cate]">
      <?php
           foreach ( $fourth_cate_options as $option1 ) :
            $label = $option1['label'];
            $selected = '';
            if ( $options['fourth_cate'] == $option1['value']) {
             $selected = 'selected="selected"';
            } else {
             $selected = '';
            }
            echo '<option style="padding-right: 10px;" value="' . esc_attr( $option1['value'] ) . '" ' . $selected . '>' . $label . '</option>' ."\n";
           endforeach;
      ?>
     </select>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>


  </div><!-- END #tab-content7 -->





    <!-- #tab-content8 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content8">

  <p class="tab_desc"><?php _e('Setting for the Fifth Block of Index page', 'tcd-w');  ?></p>

  <?php // Background Image ?>
  <?php for($i = 4; $i <= 4; $i++): ?>
   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Background Image setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Background image.', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[bg_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" /></div>
        <input type="file" name="bg_image_file_<?php echo $i?>" id="bg_image_file_<?php echo $i?>" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['bg_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['bg_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_bg_image'.$i) ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
    </div>
   </div>
  <?php endfor; ?>

   <?php // Fifth Block Content ?>
     <?php // 見出しの設定 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Headline Settings', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <h4 class="theme_option_headline2"><?php _e('Headline for Fifth Block', 'tcd-w');  ?></h4>
     <ul>
      <li>
       <input id="dp_options[fifth_headline]" class="regular-text" type="text" name="dp_options[fifth_headline]" value="<?php esc_attr_e( $options['fifth_headline'] ); ?>" />
      </li>
     </ul>

     <h5><?php _e('Style setting', 'tcd-w');  ?></h5>
     <ul>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Text Color', 'tcd-w');  ?></label>
         <input type="text" id="fifth_color" class="color" name="dp_options[fifth_color]" value="<?php esc_attr_e( $options['fifth_color'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('fifth_color').color.fromString('FFFFFF')">
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the horizontal shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[fifth_dropshadow_h]" class="font_size" type="text" name="dp_options[fifth_dropshadow_h]" value="<?php esc_attr_e( $options['fifth_dropshadow_h'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the vertical shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[fifth_dropshadow_v]" class="font_size" type="text" name="dp_options[fifth_dropshadow_v]" value="<?php esc_attr_e( $options['fifth_dropshadow_v'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The blur radius.', 'tcd-w');  ?></label>
         <input id="dp_options[fifth_dropshadow_b]" class="font_size" type="text" name="dp_options[fifth_dropshadow_b]" value="<?php esc_attr_e( $options['fifth_dropshadow_b'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The Color of the shadow.', 'tcd-w');  ?></label>
         <input type="text" id="fifth_dropshadow_c" class="color" name="dp_options[fifth_dropshadow_c]" value="<?php esc_attr_e( $options['fifth_dropshadow_c'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('fifth_dropshadow_c').color.fromString('666666')">
       </li>
     </ul>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>

   <?php // バナーの設定 ?>
  <?php for($i = 1; $i <= 3; $i++): ?>
   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Banner of Fifth Block setup', 'tcd-w');  ?><?php echo $i; ?></h3>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Banner image.', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[fifth_banner_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['fifth_banner_image'.$i] ); ?>" /></div>
        <input type="file" name="fifth_banner_image_file_<?php echo $i?>" id="fifth_banner_image_file_<?php echo $i?>" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['fifth_banner_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['fifth_banner_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['fifth_banner_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_fifth_banner_image'.$i) ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Register URL of the banner', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <input id="dp_options[fifth_banner_url<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[fifth_banner_url<?php echo $i; ?>]" value="<?php esc_attr_e( $options['fifth_banner_url'.$i] ); ?>" />
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Link target', 'tcd-w');  ?></h4>
      <div>
        <label><input id="dp_options[fifth_banner_target<?php echo $i; ?>]" name="dp_options[fifth_banner_target<?php echo $i; ?>]" type="checkbox" value="1" <?php checked( '1', $options['fifth_banner_target'.$i] ); ?> /><?php _e('Target blank', 'tcd-w');  ?></label>
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Headline', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <input id="dp_options[fifth_banner_headline<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[fifth_banner_headline<?php echo $i; ?>]" value="<?php esc_attr_e( $options['fifth_banner_headline'.$i] ); ?>" />
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Description', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <textarea id="dp_options[fifth_banner_copy<?php echo $i; ?>]" class="large-text" cols="10" rows="2" name="dp_options[fifth_banner_copy<?php echo $i; ?>]"><?php echo esc_textarea( $options['fifth_banner_copy'.$i] ); ?></textarea>
      </div>
     </div>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>
  <?php endfor; ?>


  </div><!-- END #tab-content8 -->





    <!-- #tab-content9 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content9">

  <p class="tab_desc"><?php _e('Setting for the Sixth Block of Index page', 'tcd-w');  ?></p>

  <?php // Background Image ?>
  <?php for($i = 5; $i <= 5; $i++): ?>
   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Background Image setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Background image.', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[bg_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" /></div>
        <input type="file" name="bg_image_file_<?php echo $i?>" id="bg_image_file_<?php echo $i?>" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['bg_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['bg_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_bg_image'.$i) ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
    </div>
   </div>
  <?php endfor; ?>

   <?php // Sixth Block Content ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Free input area for the sixth block content of Index.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <textarea id="dp_options[sixth_text]" class="large-text" cols="50" rows="10" name="dp_options[sixth_text]"><?php echo esc_textarea( $options['sixth_text'] ); ?></textarea>
    </div>
     <div class="sub_box">
      <h4><?php _e('Auto break', 'tcd-w');  ?></h4>
      <div>
        <label><input id="dp_options[sixth_auto_br]" name="dp_options[sixth_auto_br]" type="checkbox" value="1" <?php checked( '1', $options['sixth_auto_br'] ); ?> /><?php _e('Insert automatically &lt;br&gt;', 'tcd-w');  ?></label>
      </div>
     </div>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
   </div>


  </div><!-- END #tab-content9 -->





    <!-- #tab-content10 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content10">

  <p class="tab_desc"><?php _e('Setting for Blog', 'tcd-w');  ?></p>

  <?php // Background Image ?>
  <?php for($i = 6; $i <= 6; $i++): ?>
   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Background Image setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Background image.', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[bg_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" /></div>
        <input type="file" name="bg_image_file_<?php echo $i?>" id="bg_image_file_<?php echo $i?>" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['bg_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['bg_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['bg_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_bg_image'.$i) ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
    </div>
   </div>
  <?php endfor; ?>

     <?php // 見出しの設定 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Headline Settings', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <h4 class="theme_option_headline2"><?php _e('Headline for Blog', 'tcd-w');  ?></h4>
     <ul>
      <li>
       <input id="dp_options[blog_headline]" class="regular-text" type="text" name="dp_options[blog_headline]" value="<?php esc_attr_e( $options['blog_headline'] ); ?>" />
      </li>
     </ul>

     <h5><?php _e('Style setting (This setting is also used as a headline default settings of the Pages)', 'tcd-w');  ?></h5>
     <ul>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Text Color', 'tcd-w');  ?></label>
         <input type="text" id="blog_color" class="color" name="dp_options[blog_color]" value="<?php esc_attr_e( $options['blog_color'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('blog_color').color.fromString('FFFFFF')">
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the horizontal shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[blog_dropshadow_h]" class="font_size" type="text" name="dp_options[blog_dropshadow_h]" value="<?php esc_attr_e( $options['blog_dropshadow_h'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The position of the vertical shadow.', 'tcd-w');  ?></label>
         <input id="dp_options[blog_dropshadow_v]" class="font_size" type="text" name="dp_options[blog_dropshadow_v]" value="<?php esc_attr_e( $options['blog_dropshadow_v'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The blur radius.', 'tcd-w');  ?></label>
         <input id="dp_options[blog_dropshadow_b]" class="font_size" type="text" name="dp_options[blog_dropshadow_b]" value="<?php esc_attr_e( $options['blog_dropshadow_b'] ); ?>" /><span>px</span>
       </li>
       <li>
         <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('The Color of the shadow.', 'tcd-w');  ?></label>
         <input type="text" id="blog_dropshadow_c" class="color" name="dp_options[blog_dropshadow_c]" value="<?php esc_attr_e( $options['blog_dropshadow_c'] ); ?>" />
         <input type="button" style="margin:2px 0 0 15px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w');  ?>" onClick="document.getElementById('blog_dropshadow_c').color.fromString('666666')">
       </li>
     </ul>

     <h4 class="theme_option_headline2"><?php _e('URL of Blog Index', 'tcd-w');  ?></h4>
     <ul>
      <li>
       <input id="dp_options[blog_url]" class="regular-text" type="text" name="dp_options[blog_url]" value="<?php esc_attr_e( $options['blog_url'] ); ?>" />
      </li>
     </ul>

     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />
    </div>
   </div>


  </div><!-- END #tab-content10 -->





  <!-- #tab-content12 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content12">

  <?php //記事詳細ページの広告 -------------------------------------------------------------------------------------------- ?>
   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Single post page banner setup1.(Show on bottom of the single post page.)', 'tcd-w');  ?></h3>
    <div class="theme_option_input">

     <div class="sub_box">
      <h4><?php _e('Banner code', 'tcd-w');  ?></h4>
      <p><?php _e('If you are using google adsense, enter all code below.', 'tcd-w');  ?></p>
      <div class="theme_option_input">
       <textarea id="dp_options[single_ad_code1]" class="large-text" cols="50" rows="10" name="dp_options[single_ad_code1]"><?php echo esc_textarea( $options['single_ad_code1'] ); ?></textarea>
      </div>
     </div>
     <p><?php _e('If you are not using google adsense, you can register your banner image and affiliate code individually.', 'tcd-w');  ?></p>

     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Register banner image.(Recommend size. Width:300px;)', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[single_ad_image1]" value="<?php esc_attr_e( $options['single_ad_image1'] ); ?>" /></div>
        <input type="file" name="single_ad_image_file1" id="single_ad_image_file1" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['single_ad_image1']) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['single_ad_image1'] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['single_ad_image1'])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_single_ad_image1') ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>

     <div class="sub_box">
      <h4><?php _e('Register Target URL', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <input id="dp_options[single_ad_url1]" class="regular-text" type="text" name="dp_options[single_ad_url1]" value="<?php esc_attr_e( $options['single_ad_url1'] ); ?>" />
      </div>
     </div>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />

    </div>
   </div>

   <div class="theme_option_field cf">
   <h3 class="theme_option_headline"><?php _e('Single post page banner setup2.(Show on bottom of the single post page.)', 'tcd-w');  ?></h3>
    <div class="theme_option_input">

     <div class="sub_box">
      <h4><?php _e('Banner code', 'tcd-w');  ?></h4>
      <p><?php _e('If you are using google adsense, enter all code below.', 'tcd-w');  ?></p>
      <div class="theme_option_input">
       <textarea id="dp_options[single_ad_code2]" class="large-text" cols="50" rows="10" name="dp_options[single_ad_code2]"><?php echo esc_textarea( $options['single_ad_code2'] ); ?></textarea>
      </div>
     </div>
     <p><?php _e('If you are not using google adsense, you can register your banner image and affiliate code individually.', 'tcd-w');  ?></p>

     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Register banner image.(Recommend size. Width:300px;)', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[single_ad_image2]" value="<?php esc_attr_e( $options['single_ad_image2'] ); ?>" /></div>
        <input type="file" name="single_ad_image_file2" id="single_ad_image_file2" />
        <input type="submit" class="button-ml" value="<?php echo __('Save Image', 'tcd-w');  ?>" />
       </div>
       <?php if($options['single_ad_image2']) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['single_ad_image2'] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['single_ad_image2'])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_single_ad_image2') ?>" class="button-ml" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>

     <div class="sub_box">
      <h4><?php _e('Register Target URL', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <input id="dp_options[single_ad_url2]" class="regular-text" type="text" name="dp_options[single_ad_url2]" value="<?php esc_attr_e( $options['single_ad_url2'] ); ?>" />
      </div>
     </div>
     <input type="submit" class="button-ml" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" />

    </div>
   </div>


  </div><!-- END #tab-content12 -->

  <div id="tab-content13">
   <?php // フッターバーの設定 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e( 'Setting of the footer bar for smart phone', 'tcd-w' ); ?></h3>
    <p><?php _e( 'Please set the footer bar which is displayed with smart phone.', 'tcd-w' ); ?>

    <h4 class="theme_option_headline2"><?php _e('Display type of the footer bar', 'tcd-w'); ?></h4>
    <fieldset class="cf select_type2">
     <?php
          if ( ! isset( $checked ) )
          $checked = '';
          foreach ( $footer_bar_display_options as $option ) {
          $footer_bar_display_setting = $options['footer_bar_display'];
            if ( '' != $footer_bar_display_setting ) {
              if ( $options['footer_bar_display'] == $option['value'] ) {
                $checked = "checked=\"checked\"";
              } else {
                $checked = '';
              }
           }
     ?>
     <label class="description">
      <input type="radio" name="dp_options[footer_bar_display]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php echo $checked; ?> />
      <?php echo $option['label']; ?>
     </label>
     <?php } ?>
    </fieldset>

    <h4 class="theme_option_headline2"><?php _e('Settings for the appearance of the footer bar', 'tcd-w'); ?></h4>
    <p>
     <?php _e('Background color', 'tcd-w'); ?>
     <input type="text" id="footer_bar_bg" class="color" name="dp_options[footer_bar_bg]" value="<?php echo esc_attr( $options['footer_bar_bg'] ); ?>" />
     <input type="button" style="margin:0 0 0 5px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w'); ?>" onClick="document.getElementById('footer_bar_bg').color.fromString('FFFFFF')">
  </p>
    <p>
     <?php _e('Border color', 'tcd-w'); ?>
     <input type="text" id="footer_bar_border" class="color" name="dp_options[footer_bar_border]" value="<?php echo esc_attr( $options['footer_bar_border'] ); ?>" />
     <input type="button" style="margin:0 0 0 5px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w'); ?>" onClick="document.getElementById('footer_bar_border').color.fromString('DDDDDD')">
  </p>
    <p>
     <?php _e('Font color', 'tcd-w'); ?>
     <input type="text" id="footer_bar_color" class="color" name="dp_options[footer_bar_color]" value="<?php echo esc_attr( $options['footer_bar_color'] ); ?>" />
     <input type="button" style="margin:0 0 0 5px;" class="button-secondary" value="<?php _e('Default color', 'tcd-w'); ?>" onClick="document.getElementById('footer_bar_color').color.fromString('000000')">
  </p>
  <p>
     <?php _e('Opacity of background', 'tcd-w'); ?>
     <input id="dp_options[footer_bar_tp]" class="font_size hankaku" type="text" name="dp_options[footer_bar_tp]" value="<?php echo esc_attr( $options['footer_bar_tp'] ); ?>" /><br>
     <?php _e('Please enter the number 0 - 1.0. (e.g. 0.8)', 'tcd-w'); ?>
  </p>

    <h4 class="theme_option_headline2"><?php _e('Settings for the contents of the footer bar', 'tcd-w'); ?></h4>
    <p><?php _e( 'You can display the button with icon in footer bar. (We recommend you to set max 4 buttons.)', 'tcd-w' ); ?><br><?php _e( 'You can select button types below.', 'tcd-w' ); ?></p>
    <table class="table-border">
     <tr>
      <th><?php _e( 'Default', 'tcd-w' ); ?></th>
      <td><?php _e( 'You can set link URL.', 'tcd-w' ); ?></td>
     </tr>
     <tr>
      <th><?php _e( 'Share', 'tcd-w' ); ?></th>
      <td><?php _e( 'Share buttons are displayed if you tap this button.', 'tcd-w' ); ?></td>
     </tr>
     <tr>
      <th><?php _e( 'Telephone', 'tcd-w' ); ?></th>
      <td><?php _e( 'You can call this number.', 'tcd-w' ); ?></td>
     </tr>
    </table>
    <p><?php _e( 'Click "Add item", and set the button for footer bar. You can drag the item to change their order.', 'tcd-w' ); ?></p>
    <div class="repeater-wrapper">
     <div class="repeater sortable" data-delete-confirm="<?php _e( 'Delete?', 'tcd-w' ); ?>">
<?php
    if ( $options['footer_bar_btns'] ) :
      foreach ( $options['footer_bar_btns'] as $key => $value ) :  
?>
      <div class="sub_box repeater-item repeater-item-<?php echo esc_attr( $key ); ?>">
       <h4 class="theme_option_subbox_headline"><?php echo esc_attr( $value['label'] ); ?></h4>
       <div class="sub_box_content">
        <p class="footer-bar-target" style="<?php if ( $value['type'] !== 'type1' ) { echo 'display: none;'; } ?>"><label><input name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][target]" type="checkbox" value="1" <?php checked( $value['target'], 1 ); ?>><?php _e( 'Open with new window', 'tcd-w' ); ?></label></p>
        <table class="table-repeater">
         <tr class="footer-bar-type">
          <th><label><?php _e( 'Button type', 'tcd-w' ); ?></label></th>
          <td>

           <select name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][type]">
            <?php foreach( $footer_bar_button_options as $option ) : ?>
            <option value="<?php echo esc_attr( $option['value'] ); ?>" <?php selected( $value['type'], $option['value'] ); ?>><?php esc_html_e( $option['label'], 'tcd-w' ); ?></option>
            <?php endforeach; ?>
           </select>
          </td>
         </tr>
         <tr>
          <th><label for="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_label]"><?php _e( 'Button label', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_label]" class="regular-text repeater-label" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][label]" value="<?php echo esc_attr( $value['label'] ); ?>"></td>
         </tr>
         <tr class="footer-bar-url" style="<?php if ( $value['type'] !== 'type1' ) { echo 'display: none;'; } ?>">
          <th><label for="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_url]"><?php _e( 'Link URL', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_url]" class="regular-text" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][url]" value="<?php echo esc_attr( $value['url'] ); ?>"></td>
         </tr>
         <tr class="footer-bar-number" style="<?php if ( $value['type'] !== 'type3' ) { echo 'display: none;'; } ?>">
          <th><label for="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_number]"><?php _e( 'Phone number', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_number]" class="regular-text" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][number]" value="<?php echo esc_attr( $value['number'] ); ?>"></td>
         </tr>
         <tr>
          <th><?php _e( 'Button icon', 'tcd-w' ); ?></th>
          <td>
           <?php foreach( $footer_bar_icon_options as $option ) : ?>
           <p><label><input type="radio" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][icon]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $value['icon'] ); ?>><span class="icon icon-<?php echo esc_attr( $option['value'] ); ?>"></span><?php esc_html_e( $option['label'], 'tcd-w' ); ?></label></p>
           <?php endforeach; ?>
          </td>
         </tr>
        </table>
        <p class="delete-row right-align"><a href="#" class="button button-secondary button-delete-row"><?php _e( 'Delete item', 'tcd-w' ); ?></a></p>
       </div>
      </div>
<?php
      endforeach;
    endif;

    $key = 'addindex';
    ob_start();
?>
      <div class="sub_box repeater-item repeater-item-<?php echo $key; ?>">
       <h4 class="theme_option_subbox_headline"><?php _e( 'New item', 'tcd-w' ); ?></h4>
       <div class="sub_box_content">
        <p class="footer-bar-target"><label><input name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][target]" type="checkbox" value="1"><?php _e( 'Open with new window', 'tcd-w' ); ?></label></p>
        <table class="table-repeater">
         <tr class="footer-bar-type">
          <th><label><?php _e( 'Button type', 'tcd-w' ); ?></label></th>
          <td>
           <select name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][type]">
            <?php foreach( $footer_bar_button_options as $option ) : ?>
            <option value="<?php echo esc_attr( $option['value'] ); ?>"><?php esc_html_e( $option['label'], 'tcd-w' ); ?></option>
            <?php endforeach; ?>
           </select>
          </td>
         </tr>
         <tr>
          <th><label for="dp_options[repeater_footer_bar_btn<?php echo esc_attr( $key ); ?>_label]"><?php _e( 'Button label', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_label]" class="regular-text repeater-label" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][label]" value=""></td>
         </tr>
         <tr class="footer-bar-url">
          <th><label for="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_url]"><?php _e( 'Link URL', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_url]" class="regular-text" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][url]" value=""></td>
         </tr>
         <tr class="footer-bar-number" style="display: none;">
          <th><label for="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_number]"><?php _e( 'Phone number', 'tcd-w' ); ?></label></th>
          <td><input id="dp_options[footer_bar_btn<?php echo esc_attr( $key ); ?>_number]" class="regular-text" type="text" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][number]" value=""></td>
         </tr>
         <tr>
          <th><?php _e( 'Button icon', 'tcd-w' ); ?></th>
          <td>
           <?php foreach( $footer_bar_icon_options as $option ) : ?>
           <p><label><input type="radio" name="dp_options[repeater_footer_bar_btns][<?php echo esc_attr( $key ); ?>][icon]" value="<?php echo esc_attr( $option['value'] ); ?>"<?php if ( 'file-text' == $option['value'] ) { echo ' checked="checked"'; } ?>><span class="icon icon-<?php echo esc_attr( $option['value'] ); ?>"></span><?php esc_html_e( $option['label'], 'tcd-w' ); ?></label></p>
           <?php endforeach; ?>
          </td>
         </tr>
        </table>
        <p class="delete-row right-align"><a href="#" class="button button-secondary button-delete-row"><?php _e( 'Delete item', 'tcd-w' ); ?></a></p>
       </div>
      </div>
<?php
    $clone = ob_get_clean();
?>
     </div>
     <a href="#" class="button button-secondary button-add-row" data-clone="<?php echo esc_attr( $clone ); ?>"><?php _e( 'Add item', 'tcd-w' ); ?></a>
    </div>
    <input type="submit" class="button-ml" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>"> 
   </div>
  </div><!-- END #tab-content13 -->




  </div><!-- END #tab-panel -->

  </form>

  </div><!-- END #my_theme_right -->

 </div><!-- END #my_theme_option -->

</div><!-- END #wrap -->

<?php

 }


/**
 * チェック
 */
function theme_options_validate( $input ) {
 global $fourth_cate_options, $sns_type_top_options, $sns_type_btm_options, $footer_bar_icon_options, $footer_bar_button_options, $footer_bar_display_options;

 // 色の設定
 $input['pickedcolor1'] = wp_filter_nohtml_kses( $input['pickedcolor1'] );
 $input['pickedcolor2'] = wp_filter_nohtml_kses( $input['pickedcolor2'] );
 $input['pickedcolor3'] = wp_filter_nohtml_kses( $input['pickedcolor3'] );
 $input['pickedcolor4'] = wp_filter_nohtml_kses( $input['pickedcolor4'] );

 // フォントサイズ
 $input['content_font_size'] = wp_filter_nohtml_kses( $input['content_font_size'] );

 // 投稿者・タグ・コメント
 if ( ! isset( $input['show_date'] ) )
  $input['show_date'] = null;
  $input['show_date'] = ( $input['show_date'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_category'] ) )
  $input['show_category'] = null;
  $input['show_category'] = ( $input['show_category'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_tag'] ) )
  $input['show_tag'] = null;
  $input['show_tag'] = ( $input['show_tag'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_comment'] ) )
  $input['show_comment'] = null;
  $input['show_comment'] = ( $input['show_comment'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_trackback'] ) )
  $input['show_trackback'] = null;
  $input['show_trackback'] = ( $input['show_trackback'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_related_post'] ) )
  $input['show_related_post'] = null;
  $input['show_related_post'] = ( $input['show_related_post'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_next_post'] ) )
  $input['show_next_post'] = null;
  $input['show_next_post'] = ( $input['show_next_post'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_thumbnail'] ) )
  $input['show_thumbnail'] = null;
  $input['show_thumbnail'] = ( $input['show_thumbnail'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_rss'] ) )
  $input['show_rss'] = null;
  $input['show_rss'] = ( $input['show_rss'] == 1 ? 1 : 0 );
 if ( ! isset( $input['fix_header'] ) )
  $input['fix_header'] = null;
  $input['fix_header'] = ( $input['fix_header'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_sns'] ) )
  $input['show_sns'] = null;
  $input['show_sns'] = ( $input['show_sns'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_bookmark'] ) )
  $input['show_bookmark'] = null;
  $input['show_bookmark'] = ( $input['show_bookmark'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_author'] ) )
  $input['show_author'] = null;
  $input['show_author'] = ( $input['show_author'] == 1 ? 1 : 0 );

 if ( ! isset( $input['tel_header'] ) )
  $input['tel_header'] = null;
  $input['tel_header'] = ( $input['tel_header'] == 1 ? 1 : 0 );

 if ( ! isset( $input['show_related_post'] ) )
  $input['show_related_post'] = null;
  $input['show_related_post'] = ( $input['show_related_post'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_bread'] ) )
  $input['show_bread'] = null;
  $input['show_bread'] = ( $input['show_bread'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_recommended_post'] ) )
  $input['show_recommended_post'] = null;
  $input['show_recommended_post'] = ( $input['show_recommended_post'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_map'] ) )
  $input['show_map'] = null;
  $input['show_map'] = ( $input['show_map'] == 1 ? 1 : 0 );


 // ソーシャルボタンの表示設定
 if ( ! isset( $input['sns_type_top'] ) )
  $input['sns_type_top'] = null;
 if ( ! array_key_exists( $input['sns_type_top'], $sns_type_top_options ) )
  $input['sns_type_top'] = null;
 if ( ! isset( $input['show_sns_top'] ) )
  $input['show_sns_top'] = null;
  $input['show_sns_top'] = ( $input['show_sns_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_twitter_top'] ) )
  $input['show_twitter_top'] = null;
  $input['show_twitter_top'] = ( $input['show_twitter_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_fblike_top'] ) )
  $input['show_fblike_top'] = null;
  $input['show_fblike_top'] = ( $input['show_fblike_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_fbshare_top'] ) )
  $input['show_fbshare_top'] = null;
  $input['show_fbshare_top'] = ( $input['show_fbshare_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_google_top'] ) )
  $input['show_google_top'] = null;
  $input['show_google_top'] = ( $input['show_google_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_hatena_top'] ) )
  $input['show_hatena_top'] = null;
  $input['show_hatena_top'] = ( $input['show_hatena_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_pocket_top'] ) )
  $input['show_pocket_top'] = null;
  $input['show_pocket_top'] = ( $input['show_pocket_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_feedly_top'] ) )
  $input['show_feedly_top'] = null;
  $input['show_feedly_top'] = ( $input['show_feedly_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_rss_top'] ) )
  $input['show_rss_top'] = null;
  $input['show_rss_top'] = ( $input['show_rss_top'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_pinterest_top'] ) )
  $input['show_pinterest_top'] = null;
  $input['show_pinterest_top'] = ( $input['show_pinterest_top'] == 1 ? 1 : 0 );

 if ( ! isset( $input['sns_type_btm'] ) )
  $input['sns_type_btm'] = null;
 if ( ! array_key_exists( $input['sns_type_btm'], $sns_type_btm_options ) )
  $input['sns_type_btm'] = null;
 if ( ! isset( $input['show_sns_btm'] ) )
  $input['show_sns_btm'] = null;
  $input['show_sns_btm'] = ( $input['show_sns_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_twitter_btm'] ) )
  $input['show_twitter_btm'] = null;
  $input['show_twitter_btm'] = ( $input['show_twitter_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_fblike_btm'] ) )
  $input['show_fblike_btm'] = null;
  $input['show_fblike_btm'] = ( $input['show_fblike_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_fbshare_btm'] ) )
  $input['show_fbshare_btm'] = null;
  $input['show_fbshare_btm'] = ( $input['show_fbshare_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_google_btm'] ) )
  $input['show_google_btm'] = null;
  $input['show_google_btm'] = ( $input['show_google_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_hatena_btm'] ) )
  $input['show_hatena_btm'] = null;
  $input['show_hatena_btm'] = ( $input['show_hatena_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_pocket_btm'] ) )
  $input['show_pocket_btm'] = null;
  $input['show_pocket_btm'] = ( $input['show_pocket_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_feedly_btm'] ) )
  $input['show_feedly_btm'] = null;
  $input['show_feedly_btm'] = ( $input['show_feedly_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_rss_btm'] ) )
  $input['show_rss_btm'] = null;
  $input['show_rss_btm'] = ( $input['show_rss_btm'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_pinterest_btm'] ) )
  $input['show_pinterest_btm'] = null;
  $input['show_pinterest_btm'] = ( $input['show_pinterest_btm'] == 1 ? 1 : 0 );


 // twitter,facebook URL
 $input['twitter_url'] = wp_filter_nohtml_kses( $input['twitter_url'] );
 $input['facebook_url'] = wp_filter_nohtml_kses( $input['facebook_url'] );
 $input['insta_url'] = wp_filter_nohtml_kses( $input['insta_url'] );
 $input['pinterest_url'] = wp_filter_nohtml_kses( $input['pinterest_url'] );
 $input['flickr_url'] = wp_filter_nohtml_kses( $input['flickr_url'] );
 $input['tumblr_url'] = wp_filter_nohtml_kses( $input['tumblr_url'] );

 // 検索の設定
 $input['custom_search_id'] = wp_filter_nohtml_kses( $input['custom_search_id'] );

 // break word CSSの設定
 if ( ! isset( $input['use_break_word'] ) )
  $input['use_break_word'] = null;
  $input['use_break_word'] = ( $input['use_break_word'] == 1 ? 1 : 0 );

 // オリジナルスタイルの設定
 $input['css_code'] = $input['css_code'];

// H1 Text
 $input['h1_text'] = $input['h1_text'];
 if ( ! isset( $input['first_auto_br'] ) )
  $input['first_auto_br'] = null;
  $input['first_auto_br'] = ( $input['first_auto_br'] == 1 ? 1 : 0 );
 $input['first_color'] = wp_filter_nohtml_kses( $input['first_color'] );
 $input['first_dropshadow_h'] = wp_filter_nohtml_kses( $input['first_dropshadow_h'] );
 $input['first_dropshadow_v'] = wp_filter_nohtml_kses( $input['first_dropshadow_v'] );
 $input['first_dropshadow_b'] = wp_filter_nohtml_kses( $input['first_dropshadow_b'] );
 $input['first_dropshadow_c'] = wp_filter_nohtml_kses( $input['first_dropshadow_c'] );

// Second Block Content
 $input['second_leadcopy_image'] = wp_filter_nohtml_kses( $input['second_leadcopy_image'] );
 $input['second_leadcopy'] = $input['second_leadcopy'];
 $input['sbc_text'] = $input['sbc_text'];
 if ( ! isset( $input['second_auto_br'] ) )
  $input['second_auto_br'] = null;
  $input['second_auto_br'] = ( $input['second_auto_br'] == 1 ? 1 : 0 );
 $input['second_color'] = wp_filter_nohtml_kses( $input['second_color'] );

// address for google maps
 $input['map_address'] = wp_filter_nohtml_kses( $input['map_address'] );
 $input['map_address_LatLng'] = wp_filter_nohtml_kses( $input['map_address_LatLng'] );
 $input['myapikey'] = wp_filter_nohtml_kses( $input['myapikey'] );
 $input['zipcode'] = wp_filter_nohtml_kses( $input['zipcode'] );
 $input['phonenumber'] = wp_filter_nohtml_kses( $input['phonenumber'] );

 // トップページのBG
 $input['bg_image1'] = wp_filter_nohtml_kses( $input['bg_image1'] );
 $input['bg_image2'] = wp_filter_nohtml_kses( $input['bg_image2'] );
 $input['bg_image3'] = wp_filter_nohtml_kses( $input['bg_image3'] );
 $input['bg_image4'] = wp_filter_nohtml_kses( $input['bg_image4'] );
 $input['bg_image5'] = wp_filter_nohtml_kses( $input['bg_image5'] );
 $input['bg_image6'] = wp_filter_nohtml_kses( $input['bg_image6'] );
 $input['bg_image7'] = wp_filter_nohtml_kses( $input['bg_image7'] );
 $input['bg_image8'] = wp_filter_nohtml_kses( $input['bg_image8'] );

 // トップページのスライダー
 $input['slider_image1'] = wp_filter_nohtml_kses( $input['slider_image1'] );
 $input['slider_image2'] = wp_filter_nohtml_kses( $input['slider_image2'] );
 $input['slider_image3'] = wp_filter_nohtml_kses( $input['slider_image3'] );

 // Third contents
 $input['third_banner_image1'] = wp_filter_nohtml_kses( $input['third_banner_image1'] );
 $input['third_banner_image2'] = wp_filter_nohtml_kses( $input['third_banner_image2'] );
 $input['third_banner_image3'] = wp_filter_nohtml_kses( $input['third_banner_image3'] );
 $input['third_banner_url1'] = wp_filter_nohtml_kses( $input['third_banner_url1'] );
 $input['third_banner_url2'] = wp_filter_nohtml_kses( $input['third_banner_url2'] );
 $input['third_banner_url3'] = wp_filter_nohtml_kses( $input['third_banner_url3'] );
 if ( ! isset( $input['third_banner_target1'] ) )
  $input['third_banner_target1'] = null;
  $input['third_banner_target1'] = ( $input['third_banner_target1'] == 1 ? 1 : 0 );
 if ( ! isset( $input['third_banner_target2'] ) )
  $input['third_banner_target2'] = null;
  $input['third_banner_target2'] = ( $input['third_banner_target2'] == 1 ? 1 : 0 );
 if ( ! isset( $input['third_banner_target3'] ) )
  $input['third_banner_target3'] = null;
  $input['third_banner_target3'] = ( $input['third_banner_target3'] == 1 ? 1 : 0 );
 $input['third_banner_copy1'] = $input['third_banner_copy1'];
 $input['third_banner_copy2'] = $input['third_banner_copy2'];
 $input['third_banner_copy3'] = $input['third_banner_copy3'];

 $input['third_headline'] = $input['third_headline'];
 $input['third_color'] = wp_filter_nohtml_kses( $input['third_color'] );
 $input['third_dropshadow_h'] = wp_filter_nohtml_kses( $input['third_dropshadow_h'] );
 $input['third_dropshadow_v'] = wp_filter_nohtml_kses( $input['third_dropshadow_v'] );
 $input['third_dropshadow_b'] = wp_filter_nohtml_kses( $input['third_dropshadow_b'] );
 $input['third_dropshadow_c'] = wp_filter_nohtml_kses( $input['third_dropshadow_c'] );


 // Fourth contents
 $input['fourth_headline'] = $input['fourth_headline'];
 $input['fourth_headline2'] = $input['fourth_headline2'];
 $input['fourth_color'] = wp_filter_nohtml_kses( $input['fourth_color'] );
 $input['fourth_dropshadow_h'] = wp_filter_nohtml_kses( $input['fourth_dropshadow_h'] );
 $input['fourth_dropshadow_v'] = wp_filter_nohtml_kses( $input['fourth_dropshadow_v'] );
 $input['fourth_dropshadow_b'] = wp_filter_nohtml_kses( $input['fourth_dropshadow_b'] );
 $input['fourth_dropshadow_c'] = wp_filter_nohtml_kses( $input['fourth_dropshadow_c'] );

 // 最新記事のカテゴリーの設定
 if ( ! isset( $input['fourth_cate'] ) )
  $input['fourth_cate'] = null;
 if ( ! array_key_exists( $input['fourth_cate'], $fourth_cate_options ) )
  $input['fourth_cate'] = null;

 // Fifth contents
 $input['fifth_banner_image1'] = wp_filter_nohtml_kses( $input['fifth_banner_image1'] );
 $input['fifth_banner_image2'] = wp_filter_nohtml_kses( $input['fifth_banner_image2'] );
 $input['fifth_banner_image3'] = wp_filter_nohtml_kses( $input['fifth_banner_image3'] );
 $input['fifth_banner_url1'] = wp_filter_nohtml_kses( $input['fifth_banner_url1'] );
 $input['fifth_banner_url2'] = wp_filter_nohtml_kses( $input['fifth_banner_url2'] );
 $input['fifth_banner_url3'] = wp_filter_nohtml_kses( $input['fifth_banner_url3'] );
 if ( ! isset( $input['fifth_banner_target1'] ) )
  $input['fifth_banner_target1'] = null;
  $input['fifth_banner_target1'] = ( $input['fifth_banner_target1'] == 1 ? 1 : 0 );
 if ( ! isset( $input['fifth_banner_target2'] ) )
  $input['fifth_banner_target2'] = null;
  $input['fifth_banner_target2'] = ( $input['fifth_banner_target2'] == 1 ? 1 : 0 );
 if ( ! isset( $input['fifth_banner_target3'] ) )
  $input['fifth_banner_target3'] = null;
  $input['fifth_banner_target3'] = ( $input['fifth_banner_target3'] == 1 ? 1 : 0 );
 $input['fifth_banner_copy1'] = $input['fifth_banner_copy1'];
 $input['fifth_banner_copy2'] = $input['fifth_banner_copy2'];
 $input['fifth_banner_copy3'] = $input['fifth_banner_copy3'];

 $input['fifth_color'] = wp_filter_nohtml_kses( $input['fifth_color'] );
 $input['fifth_dropshadow_h'] = wp_filter_nohtml_kses( $input['fifth_dropshadow_h'] );
 $input['fifth_dropshadow_v'] = wp_filter_nohtml_kses( $input['fifth_dropshadow_v'] );
 $input['fifth_dropshadow_b'] = wp_filter_nohtml_kses( $input['fifth_dropshadow_b'] );
 $input['fifth_dropshadow_c'] = wp_filter_nohtml_kses( $input['fifth_dropshadow_c'] );


  // Sixth contents
  $input['sixth_text'] = $input['sixth_text'];
  if ( ! isset( $input['sixth_auto_br'] ) )
  $input['sixth_auto_br'] = null;
  $input['sixth_auto_br'] = ( $input['sixth_auto_br'] == 1 ? 1 : 0 );


 // Blog settings
 $input['blog_color'] = wp_filter_nohtml_kses( $input['blog_color'] );
 $input['blog_dropshadow_h'] = wp_filter_nohtml_kses( $input['blog_dropshadow_h'] );
 $input['blog_dropshadow_v'] = wp_filter_nohtml_kses( $input['blog_dropshadow_v'] );
 $input['blog_dropshadow_b'] = wp_filter_nohtml_kses( $input['blog_dropshadow_b'] );
 $input['blog_dropshadow_c'] = wp_filter_nohtml_kses( $input['blog_dropshadow_c'] );


 // 記事詳細ページ下部の広告バナー
 $input['single_ad_code1'] = $input['single_ad_code1'];
 $input['single_ad_image1'] = wp_filter_nohtml_kses( $input['single_ad_image1'] );
 $input['single_ad_url1'] = wp_filter_nohtml_kses( $input['single_ad_url1'] );

 $input['single_ad_code2'] = $input['single_ad_code2'];
 $input['single_ad_image2'] = wp_filter_nohtml_kses( $input['single_ad_image2'] );
 $input['single_ad_url2'] = wp_filter_nohtml_kses( $input['single_ad_url2'] );

 //OGPタグ関連
 if ( ! isset( $input['use_ogp'] ) )
  $input['use_ogp'] = null;
  $input['use_ogp'] = ( $input['use_ogp'] == 1 ? 1 : 0 );
 $input['fb_admin_id'] = wp_filter_nohtml_kses( $input['fb_admin_id'] );
 if ( ! isset( $input['use_twitter_card'] ) )
  $input['use_twitter_card'] = null;
  $input['use_twitter_card'] = ( $input['use_twitter_card'] == 1 ? 1 : 0 );
 $input['twitter_account_name'] = wp_filter_nohtml_kses( $input['twitter_account_name'] );

 // 見出しの設定
 $input['index_headline_news'] = wp_filter_nohtml_kses( $input['index_headline_news'] );
 $input['index_headline_blog'] = wp_filter_nohtml_kses( $input['index_headline_blog'] );
 $input['blog_headline'] = wp_filter_nohtml_kses( $input['blog_headline'] );
 $input['blog_url'] = wp_filter_nohtml_kses( $input['blog_url'] );

 $input['footer_btn_headline'] = wp_filter_nohtml_kses( $input['footer_btn_headline'] );
 $input['footer_btn_url'] = wp_filter_nohtml_kses( $input['footer_btn_url'] );


 //ロゴの位置
 if(isset($input['logotop'])){
   $input['logotop'] = intval($input['logotop']);
 }
 if(isset($input['logoleft'])){
   $input['logoleft'] = intval($input['logoleft']);
 }

 //ロゴの位置2
 if(isset($input['logotop2'])){
   $input['logotop2'] = intval($input['logotop2']);
 }
 if(isset($input['logoleft2'])){
   $input['logoleft2'] = intval($input['logoleft2']);
 }

 //ファイルアップロード
 if(isset($_FILES['dp_image'])){
  $message = _dp_upload_logo();
  add_settings_error('design_plus_options', 'default', $message['message'], ($message['error'] ? 'error' : 'updated'));
 }

 //ファイルアップロード2
 if(isset($_FILES['dp_image2'])){
  $message = _dp_upload_footer_logo();
  add_settings_error('design_plus_options', 'default', $message['message'], ($message['error'] ? 'error' : 'updated'));
 }

 //画像リサイズ
 if(isset($_REQUEST['dp_logo_resize_left'], $_REQUEST['dp_logo_resize_top']) && is_numeric($_REQUEST['dp_logo_resize_left']) && is_numeric($_REQUEST['dp_logo_resize_top'])){
  $message = _dp_resize_logo();
  add_settings_error('design_plus_options', 'default', $message['message'], ($message['error'] ? 'error' : 'updated'));
 }

 //画像リサイズ2
 if(isset($_REQUEST['dp_logo_resize_left2'], $_REQUEST['dp_logo_resize_top2']) && is_numeric($_REQUEST['dp_logo_resize_left2']) && is_numeric($_REQUEST['dp_logo_resize_top2'])){
  $message = _dp_resize_footer_logo();
  add_settings_error('design_plus_options', 'default', $message['message'], ($message['error'] ? 'error' : 'updated'));
 }


 //BG画像の登録
 for($i = 1; $i <= 8; $i++){
	 if(isset($_FILES['bg_image_file_'.$i])){
		 //画像のアップロードに問題はないか
		 if($_FILES['bg_image_file_'.$i]['error'] === 0){
			 $name = sanitize_file_name($_FILES['bg_image_file_'.$i]['name']);
			 //ファイル形式をチェック
			 if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
				 add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
			 }else{
				//ディレクトリの存在をチェック
				if(
					(
						(file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
							||
						@mkdir(dp_logo_basedir())
					)
						&&
					move_uploaded_file($_FILES['bg_image_file_'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
				){
					$input['bg_image'.$i] = dp_logo_baseurl().'/'.$name;
				}else{
					add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
					break;
				}
			 }
		 }elseif($_FILES['bg_image_file_'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
			 add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['bg_image_file_'.$i]['error']), 'error');
			 continue;
		 }
	 }
 }


 //スライダー画像の登録
 for($i = 1; $i <= 3; $i++){
   if(isset($_FILES['slider_image_file_'.$i])){
     //画像のアップロードに問題はないか
     if($_FILES['slider_image_file_'.$i]['error'] === 0){
       $name = sanitize_file_name($_FILES['slider_image_file_'.$i]['name']);
       //ファイル形式をチェック
       if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
         add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
       }else{
        //ディレクトリの存在をチェック
        if(
          (
            (file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
              ||
            @mkdir(dp_logo_basedir())
          )
            &&
          move_uploaded_file($_FILES['slider_image_file_'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
        ){
          $input['slider_image'.$i] = dp_logo_baseurl().'/'.$name;
        }else{
          add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
          break;
        }
       }
     }elseif($_FILES['slider_image_file_'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
       add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['slider_image_file_'.$i]['error']), 'error');
       continue;
     }
   }
 }


   if(isset($_FILES['second_leadcopy_image'])){
     //画像のアップロードに問題はないか
     if($_FILES['second_leadcopy_image_file']['error'] === 0){
       $name = sanitize_file_name($_FILES['second_leadcopy_image_file']['name']);
       //ファイル形式をチェック
       if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
         add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
       }else{
        //ディレクトリの存在をチェック
        if(
          (
            (file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
              ||
            @mkdir(dp_logo_basedir())
          )
            &&
          move_uploaded_file($_FILES['second_leadcopy_image_file']['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
        ){
          $input['second_leadcopy_image'] = dp_logo_baseurl().'/'.$name;
        }else{
          add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
        }
       }
     }elseif($_FILES['second_leadcopy_image_file']['error'] !== UPLOAD_ERR_NO_FILE){
       add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['second_leadcopy_image_file']['error']), 'error');
     }
   }

 //Third Banner 画像の登録
 for($i = 1; $i <= 3; $i++){
   if(isset($_FILES['third_banner_image_file_'.$i])){
     //画像のアップロードに問題はないか
     if($_FILES['third_banner_image_file_'.$i]['error'] === 0){
       $name = sanitize_file_name($_FILES['third_banner_image_file_'.$i]['name']);
       //ファイル形式をチェック
       if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
         add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
       }else{
        //ディレクトリの存在をチェック
        if(
          (
            (file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
              ||
            @mkdir(dp_logo_basedir())
          )
            &&
          move_uploaded_file($_FILES['third_banner_image_file_'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
        ){
          $input['third_banner_image'.$i] = dp_logo_baseurl().'/'.$name;
        }else{
          add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
          break;
        }
       }
     }elseif($_FILES['third_banner_image_file_'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
       add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['third_banner_image_file_'.$i]['error']), 'error');
       continue;
     }
   }
 }

 //Fifth Banner 画像の登録
 for($i = 1; $i <= 3; $i++){
   if(isset($_FILES['fifth_banner_image_file_'.$i])){
     //画像のアップロードに問題はないか
     if($_FILES['fifth_banner_image_file_'.$i]['error'] === 0){
       $name = sanitize_file_name($_FILES['fifth_banner_image_file_'.$i]['name']);
       //ファイル形式をチェック
       if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
         add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
       }else{
        //ディレクトリの存在をチェック
        if(
          (
            (file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
              ||
            @mkdir(dp_logo_basedir())
          )
            &&
          move_uploaded_file($_FILES['fifth_banner_image_file_'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
        ){
          $input['fifth_banner_image'.$i] = dp_logo_baseurl().'/'.$name;
        }else{
          add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
          break;
        }
       }
     }elseif($_FILES['fifth_banner_image_file_'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
       add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['fifth_banner_image_file_'.$i]['error']), 'error');
       continue;
     }
   }
 }

 //サイドバー下部の広告バナー
 for($i = 1; $i <= 2; $i++){
	 if(isset($_FILES['side_ad_image_file'.$i])){
		 //画像のアップロードに問題はないか
		 if($_FILES['side_ad_image_file'.$i]['error'] === 0){
			 $name = sanitize_file_name($_FILES['side_ad_image_file'.$i]['name']);
			 //ファイル形式をチェック
			 if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
				 add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
			 }else{
				//ディレクトリの存在をチェック
				if(
					(
						(file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
							||
						@mkdir(dp_logo_basedir())
					)
						&&
					move_uploaded_file($_FILES['side_ad_image_file'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
				){
					$input['side_ad_image'.$i] = dp_logo_baseurl().'/'.$name;
				}else{
					add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
					//break;
				}
			 }
		 }elseif($_FILES['side_ad_image_file'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
			 add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['side_ad_image_file'.$i]['error']), 'error');
			 //continue;
		 }
	 }
 }


 //記事詳細ページ下部の広告バナー
 for($i = 1; $i <= 2; $i++){
	 if(isset($_FILES['single_ad_image_file'.$i])){
		 //画像のアップロードに問題はないか
		 if($_FILES['single_ad_image_file'.$i]['error'] === 0){
			 $name = sanitize_file_name($_FILES['single_ad_image_file'.$i]['name']);
			 //ファイル形式をチェック
			 if(!preg_match("/\.(png|jpe?g|gif)$/i", $name)){
				 add_settings_error('design_plus_options', 'dp_uploader', sprintf(__('You uploaded %s but allowed file format is PNG, GIF and JPG.', 'tcd-w'), $name), 'error');
			 }else{
				//ディレクトリの存在をチェック
				if(
					(
						(file_exists(dp_logo_basedir()) && is_dir(dp_logo_basedir()) && is_writable(dp_logo_basedir()) )
							||
						@mkdir(dp_logo_basedir())
					)
						&&
					move_uploaded_file($_FILES['single_ad_image_file'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
				){
					$input['single_ad_image'.$i] = dp_logo_baseurl().'/'.$name;
				}else{
					add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
					//break;
				}
			 }
		 }elseif($_FILES['single_ad_image_file'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
			 add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['single_ad_image_file'.$i]['error']), 'error');
			 //continue;
		 }
	 }
 }


 // スマホ用固定フッターバーの設定
 if ( ! array_key_exists( $input['footer_bar_display'], $footer_bar_display_options ) )
  $input['footer_bar_display'] = 'type3';
 $input['footer_bar_bg'] = wp_filter_nohtml_kses( $input['footer_bar_bg'] );
 $input['footer_bar_border'] = wp_filter_nohtml_kses( $input['footer_bar_border'] );
 $input['footer_bar_color'] = wp_filter_nohtml_kses( $input['footer_bar_color'] );
 $input['footer_bar_tp'] = wp_filter_nohtml_kses( $input['footer_bar_tp'] );

 //if ( ! isset( $input['show_footer_bar'] ) ) $input['show_footer_bar'] = null;
 //$input['show_footer_bar'] = ( $input['show_footer_bar'] == 1 ? 1 : 0 );
 $footer_bar_btns = array();
 if ( isset( $input['repeater_footer_bar_btns'] ) ):
   foreach ( (array)$input['repeater_footer_bar_btns'] as $key => $value ) {
    $footer_bar_btns[] = array(
     'type' => ( isset( $input['repeater_footer_bar_btns'][$key]['type'] ) && array_key_exists( $input['repeater_footer_bar_btns'][$key]['type'], $footer_bar_button_options ) ) ? $input['repeater_footer_bar_btns'][$key]['type'] : 'type1',
     'label' => isset( $input['repeater_footer_bar_btns'][$key]['label'] ) ? wp_filter_nohtml_kses( $input['repeater_footer_bar_btns'][$key]['label'] ) : '',
     'url' => isset( $input['repeater_footer_bar_btns'][$key]['url'] ) ? wp_filter_nohtml_kses( $input['repeater_footer_bar_btns'][$key]['url'] ) : '',
     'number' => isset( $input['repeater_footer_bar_btns'][$key]['number'] ) ? wp_filter_nohtml_kses( $input['repeater_footer_bar_btns'][$key]['number'] ) : '',
     'target' => ! empty( $input['repeater_footer_bar_btns'][$key]['target'] ) ? 1 : 0,
     'icon' => ( isset( $input['repeater_footer_bar_btns'][$key]['icon'] ) && array_key_exists( $input['repeater_footer_bar_btns'][$key]['icon'], $footer_bar_icon_options ) ) ? $input['repeater_footer_bar_btns'][$key]['icon'] : 'file-text'
    );
   }
 endif;
 $input['footer_bar_btns'] = $footer_bar_btns;


 return $input;
}

?>
