<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * オプション初期値
 * @var array
 */
global $dp_default_options;
$dp_default_options = array(
  'pickedcolor1' => '333333',
  'pickedcolor2' => '57BDCC',
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
  'show_rss' => 1,
  'twitter_url' => '',
  'facebook_url' => '',

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

  'custom_search_id' => '',
  'use_ogp' => 0,
  'fb_admin_id' => '',
  'use_twitter_card' => 0,
  'twitter_account_name' => '',
  'headline_maincopy' => '',
  'maincopy' => '',
  'index_headline_news' => 'News Information',
  'show_index_news' => 1,
  'index_headline_blog' => 'Recommended',
  'show_index_blog' => 1,
  'show_index_recommended' => 1,
  'index_main_image1' => false,
  'index_main_image2' => false,
  'index_main_image3' => false,
  'index_main_image4' => false,
  'index_main_image5' => false,
  'slider_url1' => '',
  'slider_url2' => '',
  'slider_url3' => '',
  'slider_url4' => '',
  'slider_url5' => '',
  'slider_target1' => 1,
  'slider_target2' => 1,
  'slider_target3' => 1,
  'slider_target4' => 1,
  'slider_target5' => 1,
  'index_banner_url1' => '',
  'index_banner_headline1' => '',
  'index_banner_text1' => '',
  'index_banner_image1' => false,
  'index_banner_url2' => '',
  'index_banner_headline2' => '',
  'index_banner_text2' => '',
  'index_banner_image2' => false,
  'index_banner_url3' => '',
  'index_banner_headline3' => '',
  'index_banner_text3' => '',
  'index_banner_image3' => false,
  'index_banner_target1' => 1,
  'index_banner_target2' => 1,
  'index_banner_target3' => 1,
  'index_center_banner_url' => '',
  'index_center_banner_image' => false,
  'index_center_banner_target' => 1,
  'footer_banner_url1' => '',
  'footer_banner_image1' => false,
//  'footer_banner_url2' => '',
//  'footer_banner_image2' => false,
//  'footer_banner_url3' => '',
//  'footer_banner_image3' => false,
  'footer_banner_target1' => '',
//  'footer_banner_target2' => '',
//  'footer_banner_target3' => '',
  'side_ad_code1' => '',
  'side_ad_url1' => '',
  'side_ad_image1' => false,
  'mobile_ad_code1' => '',
  'mobile_ad_url1' => '',
  'mobile_ad_image1' => false,
  'mobile_ad_code2' => '',
  'mobile_ad_url2' => '',
  'mobile_ad_image2' => false,
  'show_index_news_link' => 1,
  'css_code' => '',
  'index_recommend_link' => '',
  'hovereffect_style' => 'a',
  'fixed_header' => 1
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


// 登録
function theme_options_init(){
 register_setting( 'design_plus_options', 'dp_options', 'theme_options_validate' );
}


// ロード
function theme_options_add_page() {
 add_theme_page( __( 'Theme Options', 'tcd-w' ), __( 'TCD Theme Options', 'tcd-w' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

global $hovereffect_options;
$hovereffect_options = array(
 'a' => array(
  'value' => 'a',
  'label' => __( 'Opacity', 'tcd-w' )
 ),
 'b' => array(
  'value' => 'b',
  'label' => __( 'Monochrome', 'tcd-w' )
 )
);


// テーマオプション画面の作成
function theme_options_do_page() {
 global $hovereffect_options, $dp_upload_error, $sns_type_top_options, $sns_type_btm_options;
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

 <div id="my_theme_option">

 <div id="theme_tab_wrap">
  <ul id="theme_tab" class="cf">
   <li><a href="#tab-content1"><?php _e('Basic Setup', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content2"><?php _e('Logo', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content3"><?php _e('Footer Logo', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content4"><?php _e('Index Setup', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content5"><?php _e('Footer Banner Setup', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content6"><?php _e('Side Column Banner Setup', 'tcd-w');  ?></a></li>
   <li><a href="#tab-content7"><?php _e('Smartphone Setup', 'tcd-w');  ?></a></li>
  </ul>
 </div>

<form method="post" action="options.php" enctype="multipart/form-data">
 <?php settings_fields( 'design_plus_options' ); ?>

 <div id="tab-panel">

  <!-- #tab-content1 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content1">

   <?php // サイトカラー ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Site main color', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <input type="text" class="color" name="dp_options[pickedcolor1]" value="<?php esc_attr_e( $options['pickedcolor1'] ); ?>" />
     <input type="submit" class="button-primary" value="<?php echo __( 'Save Color', 'tcd-w' ); ?>" />
    </div>
    <p color="color_scheme" id="default_color1"><?php _e('Default color', 'tcd-w');  ?> ：333333</p>
   </div>

   <?php // サイトカラー２ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Site secondary color', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <input type="text" class="color" name="dp_options[pickedcolor2]" value="<?php esc_attr_e( $options['pickedcolor2'] ); ?>" />
     <input type="submit" class="button-primary" value="<?php echo __( 'Save Color', 'tcd-w' ); ?>" />
    </div>
    <p color="color_scheme" id="default_color2"><?php _e('Default color', 'tcd-w');  ?> ：57BDCC</p>
   </div>

   <?php // フォントサイズ ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Font size', 'tcd-w');  ?></h3>
    <p><?php _e('Font size of single page and wp-page.', 'tcd-w');  ?></p>
    <div class="theme_option_input">
     <input id="dp_options[content_font_size]" class="font_size" type="text" name="dp_options[content_font_size]" value="<?php esc_attr_e( $options['content_font_size'] ); ?>" /><span>px</span>
    </div>
   </div>

   <?php // 投稿者名・タグ・コメント ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Display Setup', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <ul>
      <li><label><input id="dp_options[show_date]" name="dp_options[show_date]" type="checkbox" value="1" <?php checked( '1', $options['show_date'] ); ?> /> <?php _e('Display date', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_category]" name="dp_options[show_category]" type="checkbox" value="1" <?php checked( '1', $options['show_category'] ); ?> /> <?php _e('Display category', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_tag]" name="dp_options[show_tag]" type="checkbox" value="1" <?php checked( '1', $options['show_tag'] ); ?> /> <?php _e('Display tags', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_author]" name="dp_options[show_author]" type="checkbox" value="1" <?php checked( '1', $options['show_author'] ); ?> /> <?php _e('Display author', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_comment]" name="dp_options[show_comment]" type="checkbox" value="1" <?php checked( '1', $options['show_comment'] ); ?> /> <?php _e('Display comment', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_thumbnail]" name="dp_options[show_thumbnail]" type="checkbox" value="1" <?php checked( '1', $options['show_thumbnail'] ); ?> /> <?php _e('Display thumbnail at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_trackback]" name="dp_options[show_trackback]" type="checkbox" value="1" <?php checked( '1', $options['show_trackback'] ); ?> /> <?php _e('Display trackbacks at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_related_post]" name="dp_options[show_related_post]" type="checkbox" value="1" <?php checked( '1', $options['show_related_post'] ); ?> /> <?php _e('Display related post at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_next_post]" name="dp_options[show_next_post]" type="checkbox" value="1" <?php checked( '1', $options['show_next_post'] ); ?> /> <?php _e('Display next previous post link at single post page', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[show_rss]" name="dp_options[show_rss]" type="checkbox" value="1" <?php checked( '1', $options['show_rss'] ); ?> /> <?php _e('Display RSS at footer', 'tcd-w');  ?></label></li>
      <li><label><input id="dp_options[fixed_header]" name="dp_options[fixed_header]" type="checkbox" value="1" <?php checked( '1', $options['fixed_header'] ); ?> /> <?php _e('Fix the header to the top', 'tcd-w');  ?></label></li>
     </ul>
    </div>
   </div>

   <?php // Hover Effect ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Hover Effect', 'tcd-w');  ?></h3>
    <div class="theme_option_input layout_option">
     <fieldset class="cf"><legend class="screen-reader-text"><span><?php _e('Select the type of hover effect.', 'tcd-w');  ?></span></legend>
     <?php
          if ( ! isset( $checked ) )
          $checked = '';
          foreach ( $hovereffect_options as $option ) {
          $hovereffect_setting = $options['hovereffect_style'];
           if ( '' != $hovereffect_setting ) {
            if ( $options['hovereffect_style'] == $option['value'] ) {
             $checked = "checked=\"checked\"";
            } else {
             $checked = '';
            }
           }
     ?>
      <label class="description">
       <input type="radio" name="dp_options[hovereffect_style]" value="<?php esc_attr_e( $option['value'] ); ?>" <?php echo $checked; ?> />
       <?php echo $option['label']; ?>
      </label>
     <?php
          }
     ?>
     </fieldset>
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
     </ul>
    </div>
   </div>


   <?php // Use OGP tag ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Facebook OGP setting', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><label><input id="dp_options[use_ogp]" name="dp_options[use_ogp]" type="checkbox" value="1" <?php checked( '1', $options['use_ogp'] ); ?> /> <?php _e('Use OGP', 'tcd-w');  ?></label></p>
     <p><?php _e('Your fb:admins ID', 'tcd-w');  ?> <input id="dp_options[fb_admin_id]" class="regular-text" type="text" name="dp_options[fb_admin_id]" value="<?php esc_attr_e( $options['fb_admin_id'] ); ?>" /></p>
     <p><?php _e('<a href="http://design-plus1.com/tcd-w/2016/07/facebook-3.html" target="_blank">Information about Facebook OGP and fb:admins ID</a>', 'tcd-w'); ?></p>
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
    <div class="theme_option_input" style="margin:20px 0 20px !important;">
     <div class="sub_box">
        <h4><?php _e('Set of articles top buttons', 'tcd-w');  ?></h4>
        <label><input id="dp_options[show_sns_top]" name="dp_options[show_sns_top]" type="checkbox" value="1" <?php checked( '1', $options['show_sns_top'] ); ?> /> <?php _e('Buttons to the article top', 'tcd-w');  ?></label>

    <h4 style="margin:30px 0 -5px;"><?php _e('Type of button on article top', 'tcd-w');  ?></h4>
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
    <h4 style="margin:10px 0 10px;"><?php _e('Select the social button to show on article top', 'tcd-w');  ?></h4>
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
      <hr style="margin:30px 0;" />
        <h4><?php _e('Set of articles bottom buttons', 'tcd-w');  ?></h4>
        <label><input id="dp_options[show_sns_btm]" name="dp_options[show_sns_btm]" type="checkbox" value="1" <?php checked( '1', $options['show_sns_btm'] ); ?> /> <?php _e('Buttons to the article bottom', 'tcd-w');  ?></label>
    <h4 style="margin:30px 0 10px;"><?php _e('Type of button on article bottom', 'tcd-w');  ?></h4>
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

    <h4 style="margin:10px 0 10px;"><?php _e('Select the social button to show on article bottom', 'tcd-w');  ?></h4>
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

      <hr style="margin:30px 0;" />
    <h4 style="margin:10px 0 10px;"><?php _e('Setting for the twitter button', 'tcd-w');  ?></h4>
         <label style="margin-top:20px;"><?php _e('Set of twitter account. (ex.designplus)', 'tcd-w');  ?></label>
         <input style="display:block; margin:.6em 0 1em;" id="dp_options[twitter_info]" class="regular-text" type="text" name="dp_options[twitter_info]" value="<?php esc_attr_e( $options['twitter_info'] ); ?>" />

     </div>
   </div>
  </div>

   <?php // ユーザーCSS用の自由記入欄 ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Free input area for user definition CSS.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('Code example:<br /><strong>.example { font-size:12px; }</strong>', 'tcd-w');  ?></p>
     <textarea id="dp_options[css_code]" class="large-text" cols="50" rows="10" name="dp_options[css_code]"><?php echo esc_textarea( $options['css_code'] ); ?></textarea>
    </div>
   </div>

   <p class="submit"><input type="submit" class="button-primary" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" /></p>

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
      <input type="submit" class="button" value="<?php _e('Upload', 'tcd-w');  ?>" />
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
     <div id="tcd-w-logo-adjuster-wrapper">
     <div id="tcd-w-logo-adjuster" class="ratio-<?php echo '760-760'; ?>">
      <?php if(dp_logo_resize_tag(760, 760, $options['logotop'], $options['logoleft'])): ?>
      <?php else: ?>
      <span><?php _e('Logo size is too big. Please resize your logo image.', 'tcd-w');  ?></span>
      <?php endif; ?>
     </div>
     </div>
     <div class="hide">
      <label><?php _e('Top', 'tcd-w');  ?>: <input type="text" name="dp_options[logotop]" id="dp-options-logotop" value="<?php esc_attr_e( $options['logotop'] ); ?>" />px </label>
      <label><?php _e('Left', 'tcd-w');  ?>: <input type="text" name="dp_options[logoleft]" id="dp-options-logoleft" value="<?php esc_attr_e( $options['logoleft'] ); ?>" />px </label>
      <input type="button" class="button" id="dp-adjust-realvalue" value="adjust" />
     </div>
     <p><input type="submit" class="button" value="<?php _e('Save the position', 'tcd-w');  ?>" /></p>
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
     <p><a class="button" href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_image_'.  get_current_user_id()); ?>" onclick="if(!confirm('<?php _e('Are you sure to delete logo image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w');  ?></a></p>
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
     <p><?php _e('Upload image to use for logo from your computer.<br />You can resize your logo image in step 2 and adjust position in step 3.', 'tcd-w');  ?></p>
     <div class="button_area">
      <label for="dp_image2"><?php _e('Select image to use for logo from your computer.', 'tcd-w');  ?></label>
      <input type="file" name="dp_image2" id="dp_image2" value="" />
      <input type="submit" class="button" value="<?php _e('Upload', 'tcd-w');  ?>" />
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
     <p><?php _e('You can resize uploaded image.<br />If you don\'t need to resize, go to step 3.', 'tcd-w');  ?></p>
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
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Step 3 : Adjust position of logo.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
    <?php if(dp_footer_logo_exists()): ?>
     <p><?php _e('Drag the logo image and adjust the position.', 'tcd-w');  ?></p>
     <div id="tcd-w-logo-adjuster2-wrapper">
     <div id="tcd-w-logo-adjuster2" class="ratio-<?php echo '1200-1200'; ?>">
      <?php if(dp_footer_logo_resize_tag(1200, 1200, $options['logotop2'], $options['logoleft2'])): ?>
      <?php else: ?>
      <span><?php _e('Logo size is too big. Please resize your logo image.', 'tcd-w');  ?></span>
      <?php endif; ?>
     </div>
     </div>
     <div class="hide">
      <label><?php _e('Top', 'tcd-w');  ?>: <input type="text" name="dp_options[logotop2]" id="dp-options-logotop2" value="<?php esc_attr_e( $options['logotop2'] ); ?>" />px </label>
      <label><?php _e('Left', 'tcd-w');  ?>: <input type="text" name="dp_options[logoleft2]" id="dp-options-logoleft2" value="<?php esc_attr_e( $options['logoleft2'] ); ?>" />px </label>
      <input type="button" class="button" id="dp-adjust-realvalue2" value="adjust" />
     </div>
     <p><input type="submit" class="button" value="<?php _e('Save the position', 'tcd-w');  ?>" /></p>
    <?php endif; ?>
    </div>
   </div>
   <?php endif; ?>

   <?php // 画像の削除 ?>
   <?php if(dp_footer_logo_exists()): ?>
   <div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e('Delete logo image.', 'tcd-w');  ?></h3>
    <div class="theme_option_input">
     <p><?php _e('If you delete the logo image, normal text will be used for a site logo.', 'tcd-w');  ?></p>
     <p><a class="button" href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_footer_image_'.  get_current_user_id()); ?>" onclick="if(!confirm('<?php _e('Are you sure to delete logo image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w');  ?></a></p>
    </div>
   </div>
   <?php endif; ?>

  </div><!-- END #tab-content3 -->




  <!-- #tab-content4 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content4">

  <?php // トップページ メイン画像の登録 -------------------------------------------------------------------------------------------- ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Index main image setup', 'tcd-w');  ?></h3>
   <?php for($i = 1; $i <= 5; $i++): ?>
   <div class="theme_option_field cf">
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Register image','tcd-w'); ?><?php echo $i?> : <?php _e('(Recommend size. Width:1180px Height:380px;)', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[index_main_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_main_image'.$i] ); ?>" /></div>
        <?php //if(!dp_is_uploaded_img($options['index_main_image'.$i])): ?>
        <input type="file" name="index_main_image_file<?php echo $i?>" id="index_main_image_file<?php echo $i?>" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
        <?php //endif; ?>
       </div>
       <?php if($options['index_main_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['index_main_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['index_main_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_index_main_image'.$i) ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>

     <div class="sub_box">
      <h4><?php _e('Link URL', 'tcd-w'); ?><?php echo $i; ?></h4>
      <div class="theme_option_input">
       <input id="dp_options[slider_url<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[slider_url<?php echo $i; ?>]" value="<?php esc_attr_e( $options['slider_url'.$i] ); ?>" />
      </div>
     </div>

     <div class="sub_box">
      <h4><?php _e('Banner link target', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <label><input id="dp_options[slider_target<?php echo $i; ?>]" name="dp_options[slider_target<?php echo $i; ?>]" type="checkbox" value="1" <?php checked( '1', $options['slider_target'.$i] ); ?> /> <?php _e('Target blank', 'tcd-w');  ?></label>
      </div>
     </div>

     </div>
    </div>
   </div>
   <?php endfor; ?>
  </div>


  <?php // トップページ バナーの登録 -------------------------------------------------------------------------------------------- ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Index banner setup', 'tcd-w');  ?></h3>
   <?php for($i = 1; $i <= 3; $i++): ?>
   <div class="theme_option_field cf theme_option_field3">
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Banner image','tcd-w'); ?><?php echo $i?> : <?php _e('(Recommend size. Width:380px Height:180px;)', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[index_banner_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_banner_image'.$i] ); ?>" /></div>
        <?php //if(!dp_is_uploaded_img($options['index_banner_image'.$i])): ?>
        <input type="file" name="index_banner_image_file<?php echo $i?>" id="index_banner_image_file<?php echo $i?>" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
        <?php //endif; ?>
       </div>
       <?php if($options['index_banner_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['index_banner_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['index_banner_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_index_banner_image'.$i) ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Banner link URL', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <input id="dp_options[index_banner_url<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[index_banner_url<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_banner_url'.$i] ); ?>" />
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Headline', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <input id="dp_options[index_banner_headline<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[index_banner_headline<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_banner_headline'.$i] ); ?>" />
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Body text', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <input id="dp_options[index_banner_text<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[index_banner_text<?php echo $i; ?>]" value="<?php esc_attr_e( $options['index_banner_text'.$i] ); ?>" />
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Banner link target', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <label><input id="dp_options[index_banner_target<?php echo $i; ?>]" name="dp_options[index_banner_target<?php echo $i; ?>]" type="checkbox" value="1" <?php checked( '1', $options['index_banner_target'.$i] ); ?> /> <?php _e('Target blank', 'tcd-w');  ?></label>
      </div>
     </div>
    </div>
   </div>
   <?php endfor; ?>
  </div>


  <?php // トップページ センターバナーの登録 -------------------------------------------------------------------------------------------- ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Index center banner setup', 'tcd-w');  ?></h3>
   <div class="theme_option_field cf theme_option_field3">
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Banner image','tcd-w'); ?> : <?php _e('(Recommend size. Width:790px Height:120px;)', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[index_center_banner_image]" value="<?php esc_attr_e( $options['index_center_banner_image'] ); ?>" /></div>
        <?php //if(!dp_is_uploaded_img($options['index_banner_image'.$i])): ?>
        <input type="file" name="index_center_banner_image_file" id="index_center_banner_image_file" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
        <?php //endif; ?>
       </div>
       <?php if($options['index_center_banner_image']) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['index_center_banner_image'] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['index_center_banner_image'])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_index_center_banner_image') ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Banner link URL', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <input id="dp_options[index_center_banner_url]" class="regular-text" type="text" name="dp_options[index_center_banner_url]" value="<?php esc_attr_e( $options['index_center_banner_url'] ); ?>" />
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Banner link target', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <label><input id="dp_options[index_center_banner_target]" name="dp_options[index_center_banner_target]" type="checkbox" value="1" <?php checked( '1', $options['index_center_banner_target'] ); ?> /> <?php _e('Target blank', 'tcd-w');  ?></label>
      </div>
     </div>
    </div>
   </div>
  </div>

  <?php // 見出しの設定 ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Other setting', 'tcd-w');  ?></h3>
   <div class="theme_option_field cf">
    <div class="theme_option_input">
     <ul>
      <li>
       <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Headline for News', 'tcd-w');  ?></label>
       <input id="dp_options[index_headline_news]" class="regular-text" type="text" name="dp_options[index_headline_news]" value="<?php esc_attr_e( $options['index_headline_news'] ); ?>" />
      </li>
      <li><label><input id="dp_options[show_index_news]" name="dp_options[show_index_news]" type="checkbox" value="1" <?php checked( '1', $options['show_index_news'] ); ?> /> <?php _e('Display News List', 'tcd-w');  ?></label></li>
      <li style="margin-bottom:30px;"><label><input id="dp_options[show_index_news_link]" name="dp_options[show_index_news_link]" type="checkbox" value="1" <?php checked( '1', $options['show_index_news_link'] ); ?> /> <?php _e('Display News Archive Link', 'tcd-w');  ?></label></li>
      <li>
       <label style="display:inline-block; margin:0 20px 0 0;"><?php _e('Headline for the post list', 'tcd-w');  ?></label>
       <input id="dp_options[index_headline_blog]" class="regular-text" type="text" name="dp_options[index_headline_blog]" value="<?php esc_attr_e( $options['index_headline_blog'] ); ?>" />
      </li>
      <li><label><input id="dp_options[show_index_blog]" name="dp_options[show_index_blog]" type="checkbox" value="1" <?php checked( '1', $options['show_index_blog'] ); ?> /> <?php _e('Display the post list', 'tcd-w');  ?></label></li>
      <li style="margin-bottom:30px;"><label><input id="dp_options[show_index_recommended]" name="dp_options[show_index_recommended]" type="checkbox" value="1" <?php checked( '1', $options['show_index_recommended'] ); ?> /> <?php _e('Display only the recommended posts to the list at random', 'tcd-w');  ?></label></li>

      <li style="margin-bottom:30px;">
       <label style="display:inline-block; min-width:140px; margin-right:15px;"><?php _e('URL of posts page', 'tcd-w');  ?> (<?php _e('If you input URL, the link is displayed.', 'tcd-w');  ?>)</label>
       <input id="dp_options[index_recommend_link]" class="regular-text" type="text" name="dp_options[index_recommend_link]" value="<?php esc_attr_e( $options['index_recommend_link'] ); ?>" />
      </li>

      <li>
       <label style="display:inline-block; min-width:140px;"><?php _e('main copy headline', 'tcd-w');  ?></label>
       <input id="dp_options[headline_maincopy]" class="regular-text" type="text" name="dp_options[headline_maincopy]" value="<?php esc_attr_e( $options['headline_maincopy'] ); ?>" />
      </li>
      <li>
       <label style="display:inline-block; min-width:140px;"><?php _e('maincopy', 'tcd-w');  ?></label>
       <input id="dp_options[maincopy]" class="regular-text" type="text" name="dp_options[maincopy]" value="<?php esc_attr_e( $options['maincopy'] ); ?>" />
      </li>
     </ul>
    </div>
   </div>
  </div>

  <p class="submit"><input type="submit" class="button-primary" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" /></p>

  </div><!-- END #tab-content4 -->



  <!-- #tab-content5 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content5">


  <?php // フッター バナーの登録 -------------------------------------------------------------------------------------------- ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Footer banner setup', 'tcd-w');  ?></h3>
   <?php for($i = 1; $i <= 1; $i++): ?>
   <div class="theme_option_field cf theme_option_field3">
    <div class="theme_option_input">
     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Banner image','tcd-w'); ?><?php echo $i?> : <?php _e('(Recommend size. Width:300px Height:250px;)', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[footer_banner_image<?php echo $i; ?>]" value="<?php esc_attr_e( $options['footer_banner_image'.$i] ); ?>" /></div>
        <input type="file" name="footer_banner_image_file<?php echo $i?>" id="footer_banner_image_file<?php echo $i?>" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
       </div>
       <?php if($options['footer_banner_image'.$i]) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['footer_banner_image'.$i] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['footer_banner_image'.$i])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_footer_banner_image'.$i) ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Banner link URL', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <input id="dp_options[footer_banner_url<?php echo $i; ?>]" class="regular-text" type="text" name="dp_options[footer_banner_url<?php echo $i; ?>]" value="<?php esc_attr_e( $options['footer_banner_url'.$i] ); ?>" />
      </div>
     </div>
     <div class="sub_box">
      <h4><?php _e('Banner link target', 'tcd-w');  ?><?php echo $i?></h4>
      <div class="theme_option_input">
       <label><input id="dp_options[footer_banner_target<?php echo $i; ?>]" name="dp_options[footer_banner_target<?php echo $i; ?>]" type="checkbox" value="1" <?php checked( '1', $options['footer_banner_target'.$i] ); ?> /> <?php _e('Target blank', 'tcd-w');  ?></label>
      </div>
     </div>
    </div>
   </div>
   <?php endfor; ?>
  </div>

  <p class="submit"><input type="submit" class="button-primary" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" /></p>

  </div><!-- END #tab-content5 -->



  <!-- #tab-content6 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content6">

  <?php // サイドカラム広告の登録 -------------------------------------------------------------------------------------------- ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Side Column banner setup.', 'tcd-w');  ?></h3>
   <div class="theme_option_field cf">
    <div class="theme_option_input">

     <div class="sub_box">
      <h4><?php _e('Banner code', 'tcd-w');  ?></h4>
      <p><?php _e('If you are using google adsense, enter all code below.', 'tcd-w');  ?></p>
      <div class="theme_option_input">
       <textarea id="dp_options[side_ad_code1]" class="large-text" cols="50" rows="10" name="dp_options[side_ad_code1]"><?php echo esc_textarea( $options['side_ad_code1'] ); ?></textarea>
      </div>
     </div>
     <p><?php _e('If you are not using google adsense, you can register your banner image and affiliate code individually.', 'tcd-w');  ?></p>

     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Register banner image.(Recommend size. Width:380px Height:100px;)', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[side_ad_image1]" value="<?php esc_attr_e( $options['side_ad_image1'] ); ?>" /></div>
        <input type="file" name="side_ad_image_file1" id="side_ad_image_file1" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
       </div>
       <?php if($options['side_ad_image1']) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['side_ad_image1'] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['side_ad_image1'])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_side_ad_image1') ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>

     <div class="sub_box">
      <h4><?php _e('Register affiliate code', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <input id="dp_options[side_ad_url1]" class="regular-text" type="text" name="dp_options[side_ad_url1]" value="<?php esc_attr_e( $options['side_ad_url1'] ); ?>" />
      </div>
     </div>

    </div>
   </div>
  </div>

  <p class="submit"><input type="submit" class="button-primary" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" /></p>

  </div><!-- END #tab-content6 -->

  <!-- #tab-content7 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->
  <div id="tab-content7">

  <p class="tab_desc"><?php _e('This Adsense is displayed only on the user who accessed the site with the smartphone.', 'tcd-w');  ?></p>

  <?php // モバイル広告の登録（ページ上部） -------------------------------------------------------------------------------------------- ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Smartphone banner setup1. (Display on the top of a page)', 'tcd-w');  ?></h3>
   <div class="theme_option_field cf">
    <div class="theme_option_input">

     <div class="sub_box">
      <h4><?php _e('Banner code', 'tcd-w');  ?></h4>
      <p><?php _e('If you are using google adsense, enter all code below.', 'tcd-w');  ?></p>
      <div class="theme_option_input">
       <textarea id="dp_options[mobile_ad_code1]" class="large-text" cols="50" rows="10" name="dp_options[mobile_ad_code1]"><?php echo esc_textarea( $options['mobile_ad_code1'] ); ?></textarea>
      </div>
     </div>
     <p><?php _e('If you are not using google adsense, you can register your banner image and affiliate code individually.', 'tcd-w');  ?></p>

     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Register banner image.', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[mobile_ad_image1]" value="<?php esc_attr_e( $options['mobile_ad_image1'] ); ?>" /></div>
        <input type="file" name="mobile_ad_image_file1" id="mobile_ad_image_file1" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
       </div>
       <?php if($options['mobile_ad_image1']) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['mobile_ad_image1'] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['mobile_ad_image1'])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_mobile_ad_image1') ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>

     <div class="sub_box">
      <h4><?php _e('Register affiliate code', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <input id="dp_options[mobile_ad_url1]" class="regular-text" type="text" name="dp_options[mobile_ad_url1]" value="<?php esc_attr_e( $options['mobile_ad_url1'] ); ?>" />
      </div>
     </div>

    </div>
   </div>
  </div>


  <?php // モバイル広告の登録（ページ下部） -------------------------------------------------------------------------------------------- ?>
  <div class="banner_wrapper">
   <h3 class="banner_headline"><?php _e('Smartphone banner setup2. (Display on the bottom of a page)', 'tcd-w');  ?></h3>
   <div class="theme_option_field cf">
    <div class="theme_option_input">

     <div class="sub_box">
      <h4><?php _e('Banner code', 'tcd-w');  ?></h4>
      <p><?php _e('If you are using google adsense, enter all code below.', 'tcd-w');  ?></p>
      <div class="theme_option_input">
       <textarea id="dp_options[mobile_ad_code2]" class="large-text" cols="50" rows="10" name="dp_options[mobile_ad_code2]"><?php echo esc_textarea( $options['mobile_ad_code2'] ); ?></textarea>
      </div>
     </div>
     <p><?php _e('If you are not using google adsense, you can register your banner image and affiliate code individually.', 'tcd-w');  ?></p>

     <div class="sub_box cf" style="margin:0 0 10px 0;">
      <h4><?php _e('Register banner image.', 'tcd-w');  ?></h4>
      <div class="image_box cf">
       <div class="upload_banner_button_area">
        <div class="hide"><input type="text" size="36" name="dp_options[mobile_ad_image2]" value="<?php esc_attr_e( $options['mobile_ad_image2'] ); ?>" /></div>
        <input type="file" name="mobile_ad_image_file2" id="mobile_ad_image_file2" />
        <input type="submit" class="button-primary" value="<?php echo __( 'Save Image', 'tcd-w' ); ?>" />
       </div>
       <?php if($options['mobile_ad_image2']) { ?>
        <div class="uploaded_banner_image">
         <img src="<?php esc_attr_e( $options['mobile_ad_image2'] ); ?>" alt="" title="" />
        </div>
        <?php if(dp_is_uploaded_img($options['mobile_ad_image2'])): ?>
        <div class="delete_uploaded_banner_image">
         <a href="<?php echo wp_nonce_url(admin_url('themes.php?page=theme_options'), 'dp_delete_mobile_ad_image2') ?>" class="button" onclick="if(!confirm('<?php _e('Are you sure to delete this image?', 'tcd-w'); ?>')) return false;"><?php _e('Delete Image', 'tcd-w'); ?></a>
        </div>
       <?php endif; ?>
       <?php }; ?>
      </div>
     </div>

     <div class="sub_box">
      <h4><?php _e('Register affiliate code', 'tcd-w');  ?></h4>
      <div class="theme_option_input">
       <input id="dp_options[mobile_ad_url2]" class="regular-text" type="text" name="dp_options[mobile_ad_url2]" value="<?php esc_attr_e( $options['mobile_ad_url2'] ); ?>" />
      </div>
     </div>

    </div>
   </div>
  </div>

  <p class="submit"><input type="submit" class="button-primary" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>" /></p>

  </div><!-- END #tab-content7 -->



  </div><!-- END #tab-panel -->

 </form>

</div>

</div>

<?php

 }


/**
 * チェック
 */
function theme_options_validate( $input ) {
 global $sns_type_top_options, $sns_type_btm_options;

 // 色の設定
 $input['pickedcolor1'] = wp_filter_nohtml_kses( $input['pickedcolor1'] );

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
 if ( ! isset( $input['show_author'] ) )
  $input['show_author'] = null;
  $input['show_author'] = ( $input['show_author'] == 1 ? 1 : 0 );
 if ( ! isset( $input['fixed_header'] ) )
  $input['fixed_header'] = null;
  $input['fixed_header'] = ( $input['fixed_header'] == 1 ? 1 : 0 );

 // twitter,facebook URL
 $input['twitter_url'] = wp_filter_nohtml_kses( $input['twitter_url'] );
 $input['facebook_url'] = wp_filter_nohtml_kses( $input['facebook_url'] );

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

 // オリジナルスタイルの設定
 $input['css_code'] = $input['css_code'];

 // 検索の設定
 $input['custom_search_id'] = wp_filter_nohtml_kses( $input['custom_search_id'] );

 // トップページ　メイン画像
 $input['index_main_image1'] = wp_filter_nohtml_kses( $input['index_main_image1'] );
 $input['index_main_image2'] = wp_filter_nohtml_kses( $input['index_main_image2'] );
 $input['index_main_image3'] = wp_filter_nohtml_kses( $input['index_main_image3'] );
 $input['index_main_image4'] = wp_filter_nohtml_kses( $input['index_main_image4'] );
 $input['index_main_image5'] = wp_filter_nohtml_kses( $input['index_main_image5'] );

 $input['slider_url1'] = wp_filter_nohtml_kses( $input['slider_url1'] );
 $input['slider_url2'] = wp_filter_nohtml_kses( $input['slider_url2'] );
 $input['slider_url3'] = wp_filter_nohtml_kses( $input['slider_url3'] );
 $input['slider_url4'] = wp_filter_nohtml_kses( $input['slider_url4'] );
 $input['slider_url5'] = wp_filter_nohtml_kses( $input['slider_url5'] );

 if ( ! isset( $input['slider_target1'] ) )
  $input['slider_target1'] = null;
  $input['slider_target1'] = ( $input['slider_target1'] == 1 ? 1 : 0 );
 if ( ! isset( $input['slider_target2'] ) )
  $input['slider_target2'] = null;
  $input['slider_target2'] = ( $input['slider_target2'] == 1 ? 1 : 0 );
 if ( ! isset( $input['slider_target3'] ) )
  $input['slider_target3'] = null;
  $input['slider_target3'] = ( $input['slider_target3'] == 1 ? 1 : 0 );
 if ( ! isset( $input['slider_target4'] ) )
  $input['slider_target4'] = null;
  $input['slider_target4'] = ( $input['slider_target4'] == 1 ? 1 : 0 );
 if ( ! isset( $input['slider_target5'] ) )
  $input['slider_target5'] = null;
  $input['slider_target5'] = ( $input['slider_target5'] == 1 ? 1 : 0 );



 //OGPタグ関連
 if ( ! isset( $input['use_ogp'] ) )
  $input['use_ogp'] = null;
  $input['use_ogp'] = ( $input['use_ogp'] == 1 ? 1 : 0 );
 $input['fb_admin_id'] = wp_filter_nohtml_kses( $input['fb_admin_id'] );
 if ( ! isset( $input['use_twitter_card'] ) )
  $input['use_twitter_card'] = null;
  $input['use_twitter_card'] = ( $input['use_twitter_card'] == 1 ? 1 : 0 );
 $input['twitter_account_name'] = wp_filter_nohtml_kses( $input['twitter_account_name'] );

// メインコピー
 $input['headline_maincopy'] = wp_filter_nohtml_kses( $input['headline_maincopy'] );
 $input['maincopy'] = wp_filter_nohtml_kses( $input['maincopy'] );

//記事ページURL
 $input['index_recommend_link'] = wp_filter_nohtml_kses( $input['index_recommend_link'] );

 // 見出しの設定
 $input['index_headline_news'] = wp_filter_nohtml_kses( $input['index_headline_news'] );
 $input['index_headline_blog'] = wp_filter_nohtml_kses( $input['index_headline_blog'] );
 if ( ! isset( $input['show_index_news'] ) )
  $input['show_index_news'] = null;
  $input['show_index_news'] = ( $input['show_index_news'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_index_blog'] ) )
  $input['show_index_blog'] = null;
  $input['show_index_blog'] = ( $input['show_index_blog'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_index_recommended'] ) )
  $input['show_index_recommended'] = null;
  $input['show_index_recommended'] = ( $input['show_index_recommended'] == 1 ? 1 : 0 );

 if ( ! isset( $input['show_index_news_link'] ) )
  $input['show_index_news_link'] = null;
  $input['show_index_news_link'] = ( $input['show_index_news_link'] == 1 ? 1 : 0 );
 if ( ! isset( $input['show_index_blog_link'] ) )
  $input['show_index_blog_link'] = null;
  $input['show_index_blog_link'] = ( $input['show_index_blog_link'] == 1 ? 1 : 0 );

 // トップページ　バナー画像
 $input['index_banner_image1'] = wp_filter_nohtml_kses( $input['index_banner_image1'] );
 $input['index_banner_url1'] = wp_filter_nohtml_kses( $input['index_banner_url1'] );
 $input['index_banner_image2'] = wp_filter_nohtml_kses( $input['index_banner_image2'] );
 $input['index_banner_url2'] = wp_filter_nohtml_kses( $input['index_banner_url2'] );
 $input['index_banner_image3'] = wp_filter_nohtml_kses( $input['index_banner_image3'] );
 $input['index_banner_url3'] = wp_filter_nohtml_kses( $input['index_banner_url3'] );
 $input['index_center_banner_image'] = wp_filter_nohtml_kses( $input['index_center_banner_image'] );
 $input['index_center_banner_url'] = wp_filter_nohtml_kses( $input['index_center_banner_url'] );

 if ( ! isset( $input['index_banner_target1'] ) )
  $input['index_banner_target1'] = null;
  $input['index_banner_target1'] = ( $input['index_banner_target1'] == 1 ? 1 : 0 );
 if ( ! isset( $input['index_banner_target2'] ) )
  $input['index_banner_target2'] = null;
  $input['index_banner_target2'] = ( $input['index_banner_target2'] == 1 ? 1 : 0 );
 if ( ! isset( $input['index_banner_target3'] ) )
  $input['index_banner_target3'] = null;
  $input['index_banner_target3'] = ( $input['index_banner_target3'] == 1 ? 1 : 0 );

 if ( ! isset( $input['index_center_banner_target'] ) )
  $input['index_center_banner_target'] = null;
  $input['index_center_banner_target'] = ( $input['index_center_banner_target'] == 1 ? 1 : 0 );

 // フッター　バナー画像
 $input['footer_banner_image1'] = wp_filter_nohtml_kses( $input['footer_banner_image1'] );
 $input['footer_banner_url1'] = wp_filter_nohtml_kses( $input['footer_banner_url1'] );
// $input['footer_banner_image2'] = wp_filter_nohtml_kses( $input['footer_banner_image2'] );
// $input['footer_banner_url2'] = wp_filter_nohtml_kses( $input['footer_banner_url2'] );
// $input['footer_banner_image3'] = wp_filter_nohtml_kses( $input['footer_banner_image3'] );
// $input['footer_banner_url3'] = wp_filter_nohtml_kses( $input['footer_banner_url3'] );
 if ( ! isset( $input['footer_banner_target1'] ) )
  $input['footer_banner_target1'] = null;
  $input['footer_banner_target1'] = ( $input['footer_banner_target1'] == 1 ? 1 : 0 );
// if ( ! isset( $input['footer_banner_target2'] ) )
//  $input['footer_banner_target2'] = null;
//  $input['footer_banner_target2'] = ( $input['footer_banner_target2'] == 1 ? 1 : 0 );
// if ( ! isset( $input['footer_banner_target3'] ) )
//  $input['footer_banner_target3'] = null;
//  $input['footer_banner_target3'] = ( $input['footer_banner_target3'] == 1 ? 1 : 0 );

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



 //トップページ　メイン画像の登録
 for($i = 1; $i <= 5; $i++){
   if(isset($_FILES['index_main_image_file'.$i])){
     //画像のアップロードに問題はないか
     if($_FILES['index_main_image_file'.$i]['error'] === 0){
       $name = sanitize_file_name($_FILES['index_main_image_file'.$i]['name']);
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
          move_uploaded_file($_FILES['index_main_image_file'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
        ){
          $input['index_main_image'.$i] = dp_logo_baseurl().'/'.$name;
        }else{
          add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
          break;
        }
       }
     }elseif($_FILES['index_main_image_file'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
       add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['index_main_image_file'.$i]['error']), 'error');
       continue;
     }
   }
 }



 //トップページ　バナー画像の登録
 for($i = 1; $i <= 3; $i++){
   if(isset($_FILES['index_banner_image_file'.$i])){
     //画像のアップロードに問題はないか
     if($_FILES['index_banner_image_file'.$i]['error'] === 0){
       $name = sanitize_file_name($_FILES['index_banner_image_file'.$i]['name']);
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
          move_uploaded_file($_FILES['index_banner_image_file'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
        ){
          $input['index_banner_image'.$i] = dp_logo_baseurl().'/'.$name;
        }else{
          add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
          break;
        }
       }
     }elseif($_FILES['index_banner_image_file'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
       add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['index_banner_image_file'.$i]['error']), 'error');
       continue;
     }
   }
 }



 //トップページ　センターバナー画像の登録
   if(isset($_FILES['index_center_banner_image_file'])){
     //画像のアップロードに問題はないか
     if($_FILES['index_center_banner_image_file']['error'] === 0){
       $name = sanitize_file_name($_FILES['index_center_banner_image_file']['name']);
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
          move_uploaded_file($_FILES['index_center_banner_image_file']['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
        ){
          $input['index_center_banner_image'] = dp_logo_baseurl().'/'.$name;
        }else{
          add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
        }
       }
     }elseif($_FILES['index_center_banner_image_file']['error'] !== UPLOAD_ERR_NO_FILE){
       add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['index_center_banner_image_file']['error']), 'error');
     }
   }



 //フッター　バナー画像の登録
 for($i = 1; $i <= 3; $i++){
   if(isset($_FILES['footer_banner_image_file'.$i])){
     //画像のアップロードに問題はないか
     if($_FILES['footer_banner_image_file'.$i]['error'] === 0){
       $name = sanitize_file_name($_FILES['footer_banner_image_file'.$i]['name']);
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
          move_uploaded_file($_FILES['footer_banner_image_file'.$i]['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
        ){
          $input['footer_banner_image'.$i] = dp_logo_baseurl().'/'.$name;
        }else{
          add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
          break;
        }
       }
     }elseif($_FILES['footer_banner_image_file'.$i]['error'] !== UPLOAD_ERR_NO_FILE){
       add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['footer_banner_image_file'.$i]['error']), 'error');
       continue;
     }
   }
 }

 //サイドカラム用の広告バナー
   if(isset($_FILES['side_ad_image_file1'])){
     //画像のアップロードに問題はないか
     if($_FILES['side_ad_image_file1']['error'] === 0){
       $name = sanitize_file_name($_FILES['side_ad_image_file1']['name']);
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
          move_uploaded_file($_FILES['side_ad_image_file1']['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
        ){
          $input['side_ad_image1'] = dp_logo_baseurl().'/'.$name;
        }else{
          add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
          //break;
        }
       }
     }elseif($_FILES['side_ad_image_file1']['error'] !== UPLOAD_ERR_NO_FILE){
       add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['side_ad_image_file1']['error']), 'error');
       //continue;
     }
   }


 //スマホ用の広告バナー
   if(isset($_FILES['mobile_ad_image_file1'])){
     //画像のアップロードに問題はないか
     if($_FILES['mobile_ad_image_file1']['error'] === 0){
       $name = sanitize_file_name($_FILES['mobile_ad_image_file1']['name']);
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
          move_uploaded_file($_FILES['mobile_ad_image_file1']['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
        ){
          $input['mobile_ad_image1'] = dp_logo_baseurl().'/'.$name;
        }else{
          add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
          //break;
        }
       }
     }elseif($_FILES['mobile_ad_image_file1']['error'] !== UPLOAD_ERR_NO_FILE){
       add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['mobile_ad_image_file1']['error']), 'error');
       //continue;
     }
   }


 //スマホ用の広告バナー
   if(isset($_FILES['mobile_ad_image_file2'])){
     //画像のアップロードに問題はないか
     if($_FILES['mobile_ad_image_file2']['error'] === 0){
       $name = sanitize_file_name($_FILES['mobile_ad_image_file2']['name']);
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
          move_uploaded_file($_FILES['mobile_ad_image_file2']['tmp_name'], dp_logo_basedir().DIRECTORY_SEPARATOR.$name)
        ){
          $input['mobile_ad_image2'] = dp_logo_baseurl().'/'.$name;
        }else{
          add_settings_error('default', 'dp_uploader', sprintf(__('Directory %s is not writable. Please check permission.', 'tcd-w'), dp_logo_basedir()), 'error');
          //break;
        }
       }
     }elseif($_FILES['mobile_ad_image_file2']['error'] !== UPLOAD_ERR_NO_FILE){
       add_settings_error('default', 'dp_uploader', _dp_get_upload_err_msg($_FILES['mobile_ad_image_file2']['error']), 'error');
       //continue;
     }
   }


 return $input;
}

?>
