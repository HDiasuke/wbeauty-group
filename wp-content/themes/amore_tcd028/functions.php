<?php

add_filter('show_admin_bar', '__return_false');

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( '_tk_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _tk_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	//add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	/*add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );*/
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _tk, use a find and replace
	 * to change '_tk' to the name of your theme in all the template files
	*/
	load_theme_textdomain( '_tk', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Grobal menu', '_tk' ),
	) );

}
endif; // _tk_setup
add_action( 'after_setup_theme', '_tk_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
/*function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', '_tk_widgets_init' );*/

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {

	// Import the necessary TK Bootstrap WP CSS additions
	wp_enqueue_style( '_tk-bootstrap-wp', get_template_directory_uri() . '/includes/css/bootstrap-wp.css' );

	// load bootstrap css
	wp_enqueue_style( '_tk-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.min.css' );

	// load Font Awesome css
	wp_enqueue_style( '_tk-font-awesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css', false, '4.1.0' );

	// load _tk styles
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('_tk-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( '_tk-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( '_tk-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	//if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	//	wp_enqueue_script( 'comment-reply' );
	//}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_tk-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';

add_action( 'wp_ajax_nopriv_load-filter', 'prefix_load_cat_posts' );
add_action( 'wp_ajax_load-filter', 'prefix_load_cat_posts' );
function prefix_load_cat_posts () {
    $cat_id = $_POST['cat'];
    $paged = $_POST['paged'];

    $options = get_desing_plus_option();

    $search = array(
      'paged' => $paged,
      'posts_per_page' => get_option('posts_per_page'),
      'order' => 'DESC',
      'post_status' => array('publish')
    );

    if($cat_id) $search['cat'] = $cat_id;

    $posts = new WP_Query($search);

    ob_start();

//     echo "<div class='ajax-page-separator mb40'><span>PAGE $paged</span></div>";
    echo "<div class='row mb40' style='padding-right:15px'>";

    $imageFullWidth = true;
    $x = 2;
    $counter = -1;
    if ( $posts->have_posts() ) : ?>

    <?php while ( $posts->have_posts() ) : $posts->the_post();
                if($posts->current_post == 0 && 2 == 4){ continue; };
		$counter++;
		if($counter==0 || $counter%3 !=0){}else{ echo '</div><div class="row mb40" style="padding-right:15px">'; };
                $x++;
                if($x % 3) : ?>
                  <div style="display:none" class="fade-me-in col-sm-38 col-sm-offset-3">
                    <div class="row">
                      <article data-paged="<?php echo $paged + 1; ?>" id="post-<?php the_ID(); ?>" <?php post_class('paged'); ?>>
                        <div class='col-sm-120 col-xs-60' style='padding-right:0px'>
                          <a href="<?php the_permalink() ?>"><div class="thumb"><?php if ( has_post_thumbnail()) { the_post_thumbnail('sidebar-leftpht'); } else { echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image2.gif" alt="" title="">'; }; ?></div></a>
                        </div>
                        <div class='col-sm-120 col-xs-60 mt10'>
                          <?php if ($options['show_date']) { echo "<span class='fa fa-clock-o'></span><span class='blog-list-timestamp romaji'>&nbsp;" . get_the_date('Y') . '.' . get_the_date('m') . '.' . get_post_time('j') . "</span>　";}; ?>
                          <?php if ($options['show_category']) { ?><span class="cate"><?php the_category(', '); ?></span><?php }; ?>
                          <h4 class='blog-list-title'><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                          <p class="blog-list-body"><a href="<?php the_permalink() ?>"><?php if(has_excerpt()){ the_excerpt(); }else{ new_excerpt(40); }; ?></a></p>
                        </div>
                      </article><!-- #post-## -->
                    </div>
                  </div>
                <?php else : ?>
                  <div style="display:none" class="fade-me-in col-sm-38">
                    <div class="row">
                      <article data-paged="<?php echo $paged + 1; ?>" id="post-<?php the_ID(); ?>" <?php post_class('paged'); ?>>
                        <div class='col-sm-120 col-xs-60' style='padding-right:0px'>
                          <a href="<?php the_permalink() ?>"><div class="thumb"><?php if ( has_post_thumbnail()) { the_post_thumbnail('sidebar-leftpht'); } else { echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image2.gif" alt="" title="">'; }; ?></div></a>
                        </div>
                        <div class='col-sm-120 col-xs-60 mt10'>
                          <?php if ($options['show_date']) { echo "<span class='fa fa-clock-o'></span><span class='blog-list-timestamp romaji'>&nbsp;" . get_the_date('Y') . '.' . get_the_date('m') . '.' . get_post_time('j') . "</span>　";}; ?>
                          <?php if ($options['show_category']) { ?><span class="cate"><?php the_category(', '); ?></span><?php }; ?>
                          <h4 class='blog-list-title'><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                          <p class="blog-list-body"><a href="<?php the_permalink() ?>"><?php if(has_excerpt()){ the_excerpt(); }else{ new_excerpt(40); }; ?></a></p>
                        </div>
                      </article><!-- #post-## -->
                    </div>
                  </div>
                <?php endif ?>
    <?php endwhile; wp_reset_query();
    endif;
    echo "</div>";

   $response = ob_get_contents();
   ob_end_clean();

   echo $response;
   die(1);
}


/* 最新記事リスト */
function getNewItems($atts) {
    extract(shortcode_atts(array(
        "num" => '10',  //最新記事リストの取得数
        "cat" => '2,3,5' //表示する記事のカテゴリー指定
    ), $atts));
    global $post;
    $oldpost = $post;
    $myposts = get_posts('numberposts='.$num.'&order=DESC&orderby=post_date&category='.$cat);
    $retHtml='<ul class="news_list">';
    foreach($myposts as $post) :
    $cat = get_the_category();
    $catname = $cat[0]->cat_name;
    $catslug = $cat[0]->slug;
        setup_postdata($post);
        $retHtml.='<li>';
        $retHtml.='<span class="news_date">'.get_post_time( get_option( 'date_format' )).'</span>';
        $retHtml.='<span class="cat '.$catslug.'">'.$catname.'</span>';
        $retHtml.='<span class="news_title"><a href="'.get_permalink().'">'.the_title("","",false).'</a></span>';
        $retHtml.='</li>';
    endforeach;
    $retHtml.='</ul>';
    $post = $oldpost;
    wp_reset_postdata();
    return $retHtml;
}
add_shortcode("news", "getNewItems");


/*
    SHORTCODES
*/

function col($atts, $content = null){ return '<div class="col-sm-' . $atts['size'] . '">' . $content . '</div>'; }
add_shortcode('col', 'col');

function telFunc( $atts, $content = null ) {
  return '<span class="syncer-tel" data-number="'.$content.'">'.$content.'</span>';
}
add_shortcode('tel', 'telFunc');

// 言語ファイルの読み込み --------------------------------------------------------------------------------
load_textdomain('tcd-w', dirname(__FILE__).'/languages/' . get_locale() . '.mo');


// テーマオプション --------------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/admin/theme-options.php' );


// 更新通知 --------------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/functions/update_notifier.php' );


// ウィジェットの読み込み ------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/widget/ad.php' );
require_once ( dirname(__FILE__) . '/widget/categories.php' );
require_once ( dirname(__FILE__) . '/widget/google_search.php' );
//require_once ( dirname(__FILE__) . '/widget/recent.php' );
require_once ( dirname(__FILE__) . '/widget/styled_post_list1.php' );
require_once ( dirname(__FILE__) . '/widget/styled_post_list2.php' );


// カテゴリーにmetaboxを追加 ------------------------------------------------------------------------
add_action ( 'edit_category_form_fields', 'extra_category_fields');
function extra_category_fields( $tag ) {
    $t_id = $tag->term_id;
    $cat_meta = get_option( "cat_$t_id");
?>
<tr class="form-field">
    <th><label for="upload_image"><?php _e('The URL of the image', 'tcd-w'); ?></label></th>
    <td>
        <input id="upload_image" type="text" size="36" name="Cat_meta[img]" value="<?php if(isset ( $cat_meta['img'])) echo esc_html($cat_meta['img']) ?>" /><br />
        <button id="upload_image_button" value="Upload Image" style="cursor:pointer;"><?php _e('Add the image (width:120px, height:120px)', 'tcd-w'); ?></button>
    </td>
</tr>
<?php
}
add_action ( 'edited_term', 'save_extra_category_fileds');
function save_extra_category_fileds( $term_id ) {
    if ( isset( $_POST['Cat_meta'] ) ) {
       $t_id = $term_id;
       $cat_meta = get_option( "cat_$t_id");
       $cat_keys = array_keys($_POST['Cat_meta']);
          foreach ($cat_keys as $key){
          if (isset($_POST['Cat_meta'][$key])){
             $cat_meta[$key] = $_POST['Cat_meta'][$key];
          }
       }
       update_option( "cat_$t_id", $cat_meta );
    }
}
add_action('admin_print_scripts', 'my_admin_scripts');
add_action('admin_print_styles', 'my_admin_styles2');
function my_admin_scripts() {
    global $taxonomy;
    if( 'category' == $taxonomy ) {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_register_script('my-upload', get_bloginfo('template_directory') .'/js/upload.js');
        wp_enqueue_script('my-upload');
    }
}
function my_admin_styles2(){
    global $taxonomy;
    if( 'category' == $taxonomy ) {
        wp_enqueue_style('thickbox');
    }
}


// enqueue -----------------------------------------------------------------------
function widget_admin_scripts() {
  wp_enqueue_script('thickbox');
  wp_enqueue_style('thickbox');
  wp_enqueue_script('media-upload');
  wp_enqueue_script('ml-widget-js', get_template_directory_uri().'/widget/js/script.js', '', '1', true);
  wp_enqueue_script('my_script', get_template_directory_uri().'/admin/js/my_script.js');
  wp_enqueue_script('ml-fancybox-js', get_template_directory_uri().'/admin/js/fancybox/jquery.fancybox.pack.js', '', '1', true);
  wp_enqueue_media();//画像アップロード用
?>
<script type="text/javascript">
  var cfmf_text = { title:'<?php _e('Please Select Image', 'tcd-w'); ?>', button:'<?php _e('Use this Image', 'tcd-w'); ?>' };
</script>
<?php
  wp_enqueue_script('cf-media-field', get_template_directory_uri().'/admin/js/cf-media-field.js'); //画像アップロード用
}
add_action('admin_print_scripts', 'widget_admin_scripts');


// スタイルシートの読み込み -----------------------------------------------------------------------
function my_admin_styles() {
  wp_enqueue_style('my_widget_css', get_template_directory_uri() . '/widget/css/style.css','','1.0');
  wp_enqueue_style('my_admin_css', get_template_directory_uri() .'/admin/my_admin.css','','1.0');
}
add_action('admin_print_styles', 'my_admin_styles');


// おすすめ記事 PICKUP記事 --------------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/functions/recommend.php' );
require_once ( dirname(__FILE__) . '/functions/recommend2.php' );
require_once ( dirname(__FILE__) . '/functions/recommend3.php' );
require_once ( dirname(__FILE__) . '/functions/pickup.php' );
require_once ( dirname(__FILE__) . '/functions/custom_css.php' );



// meta title meta description  --------------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/functions/seo.php' );


// カスタムページリンク  --------------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/functions/custom_page_link.php' );


// OGP tag  --------------------------------------------------------------------------------
require get_template_directory() . '/functions/ogp.php';


//ロゴ画像用関数 --------------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/functions/header-logo.php' );
require_once ( dirname(__FILE__) . '/functions/footer-logo.php' );



// ビジュアルエディタ用スタイルシートの読み込み --------------------------------------------------------------------------------
add_editor_style();


// ユーザーエージェントを判定するための関数---------------------------------------------------------------------
function is_mobile() {

 $match = 0;

 $ua = array(
   'iPhone', // iPhone
   'iPod', // iPod touch
   'Android.*Mobile', // 1.5+ Android *** Only mobile
   'Windows.*Phone', // *** Windows Phone
   'dream', // Pre 1.5 Android
   'CUPCAKE', // 1.5+ Android
   'BlackBerry', // BlackBerry
   'webOS', // Palm Pre Experimental
   'incognito', // Other iPhone browser
   'webmate' // Other iPhone browser
 );

 $pattern = '/' . implode( '|', $ua ) . '/i';
 $match   = preg_match( $pattern, $_SERVER['HTTP_USER_AGENT'] );

 if ( $match === 1 ) {
   return TRUE;
 } else {
   return FALSE;
 }

}


// スクリプトのバージョン管理 ----------------------------------------------------------------------------------------------
function version_num() {

 if (function_exists('wp_get_theme')) {
   $theme_data = wp_get_theme();
 } else {
   $theme_data = get_theme_data(TEMPLATEPATH . '/style.css');
 };

 $current_version = $theme_data['Version'];

 return $current_version;

};

function my_wp_default_styles( $styles ) {
 if (function_exists('wp_get_theme')) {
   $theme_data = wp_get_theme();
 } else {
   $theme_data = get_theme_data(TEMPLATEPATH . '/style.css');
 };

 $current_version = $theme_data['Version'];

 $styles->default_version = $current_version;
}
add_action( 'wp_default_styles', 'my_wp_default_styles' );



// オリジナルの抜粋記事 --------------------------------------------------------------------------------
function new_excerpt($a) {

 if(has_excerpt()) {

   $base_content = get_the_excerpt();
   $base_content = str_replace(array("\r\n", "\r", "\n"), "", $base_content);
   $trim_content = mb_substr($base_content, 0, $a ,"utf-8");

 } else {

   $base_content = get_the_content();
   $base_content = preg_replace('!<style.*?>.*?</style.*?>!is', '', $base_content);
   $base_content = preg_replace('!<script.*?>.*?</script.*?>!is', '', $base_content);
   $base_content = strip_tags($base_content);
   $trim_content = mb_substr($base_content, 0, $a ,"utf-8");
   $trim_content = mb_ereg_replace('&nbsp;', '', $trim_content);

 };

if(mb_strlen($trim_content)>($a-1)){
 echo $trim_content . '…';
}else{
 echo $trim_content;
}

};

//抜粋からPタグを取り除く
remove_filter( 'the_excerpt', 'wpautop' );



// 記事タイトルの文字数制限 --------------------------------------------------------------------------------
function trim_title($num) {
 $base_title = get_the_title();
 $trim_title = mb_substr($base_title, 0, $num ,"utf-8");
 $count_title = mb_strlen($trim_title,"utf-8");
 if($count_title > $num-1) {
  echo $trim_title . '…';
 } else {
  echo $trim_title;
 };
};



// ページナビ用 --------------------------------------------------------------------------------
function show_posts_nav() {
global $wp_query;
return ($wp_query->max_num_pages > 1);
};


// アイキャッチに文言を追加 --------------------------------------------------------------------------------
add_filter( 'admin_post_thumbnail_html', 'add_featured_image_instruction');
function add_featured_image_instruction( $content ) {
 return $content .= '<p>' . __('Upload post thumbnail from here.', 'tcd-w') . '</p>';
};



//　サムネイルの設定 --------------------------------------------------------------------------------
if (function_exists('add_theme_support')) {
//add_theme_support('post-thumbnails');
add_image_size( 'size1', 120, 80, true );
add_image_size( 'size2', 120, 80, true );
add_image_size( 'sidebar-leftpht', 120, 80, true );
// 設定した'sidebar-leftpht'のサムネイルを出力
add_image_size( 'widget_size', 76, 76, true );
add_image_size( 'widget_size2', 300, 200, true );
add_image_size( 'widget_size3', 600, 400, true );
add_image_size( 'single_size', 705, 400, true );
}



//　ヘッダーから余分なMETA情報を削除 --------------------------------------------------------------------
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');


// ウィジェットの設定 ------------------------------------------------------------------------------
if ( function_exists('register_sidebar') ) {
    /*register_sidebar(array(
        'before_widget' => '<div class="side_widget clearfix %2$s" id="%1$s">'."\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h3 class="side_headline">',
        'after_title' => "</h3>\n",
        'name' => __('Archive side widget', 'tcd-w'),
        'id' => 'archive_side_widget'
    ));*/
    register_sidebar(array(
        'before_widget' => '<div class="side_widget clearfix %2$s" id="%1$s">'."\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h3 class="side_headline">',
        'after_title' => "</h3>\n",
        'name' => __('Single side widget', 'tcd-w'),
        'id' => 'single_side_widget'
    ));
    /*register_sidebar(array(
        'before_widget' => '<div class="side_widget clearfix %2$s" id="%1$s">'."\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h3 class="side_headline">',
        'after_title' => "</h3>\n",
        'name' => __('Archive widget (for mobile)', 'tcd-w'),
        'description' => __('This widget will be replaced with normal widget when a user accesses the site by smartphone.', 'tcd-w'),
        'id' => 'mobile_widget_archive'
    ));*/
    register_sidebar(array(
        'before_widget' => '<div class="side_widget clearfix %2$s" id="%1$s">'."\n",
        'after_widget' => "</div>\n",
        'before_title' => '<h3 class="side_headline">',
        'after_title' => "</h3>\n",
        'name' => __('Single page widget (for mobile)', 'tcd-w'),
        'description' => __('This widget will be replaced with normal widget when a user accesses the site by smartphone.', 'tcd-w'),
        'id' => 'mobile_widget_single'
    ));
}

// カスタムメニューの設定 --------------------------------------------------------------------------------
/*if(function_exists('register_nav_menu')) {
 register_nav_menu( 'global-menu', __( 'Global menu', 'tcd-w' ) );
}*/
if(function_exists('register_nav_menu')) {
 register_nav_menu( 'footer-menu-1', __( 'Footer menu 1', 'tcd-w' ) );
 register_nav_menu( 'footer-menu-2', __( 'Footer menu 2', 'tcd-w' ) );
 register_nav_menu( 'footer-menu-3', __( 'Footer menu 3', 'tcd-w' ) );
 register_nav_menu( 'footer-menu-4', __( 'Footer menu 4', 'tcd-w' ) );
}


// RGBをHEXに変換 ------------------------------------------------------------------
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return $rgb;
}


// カードリンクパーツ --------------------------------------------------------------------------------------
add_image_size( 'size-card', 120, 80, true );

function get_the_custom_excerpt($content, $length) {
  $length = ($length ? $length : 70);//デフォルトの長さを指定する
  $content =  preg_replace('/<!--more-->.+/is',"",$content); //moreタグ以降削除
  $content =  strip_shortcodes($content);//ショートコード削除
  $content =  strip_tags($content);//タグの除去
  $content =  str_replace("&nbsp;","",$content);//特殊文字の削除（今回はスペースのみ）
  $content =  mb_substr($content,0,$length);//文字列を指定した長さで切り取る
  return $content.'...';
}
 
//カードリンクショートコード
function clink_scode($atts) {
  extract(shortcode_atts(array(
    'url'=>"",
    'title'=>"",
    'excerpt'=>""
    ),$atts));
 
  $id = url_to_postid($url);//URLから投稿IDを取得
  $post = get_post($id);//IDから投稿情報の取得
  $date = mysql2date('Y.m.d', $post->post_date);//投稿日の取得
 
  $img_width ="120";//画像サイズの幅指定
  $img_height = "120";//画像サイズの高さ指定
  $no_image = get_template_directory_uri().'/img/common/no_image_card.gif';

  //抜粋を取得
  if(empty($excerpt)){
  if($post->post_excerpt){
      $excerpt = get_the_custom_excerpt($post->post_excerpt , 120);
 
  }else{
      $excerpt = get_the_custom_excerpt($post->post_content , 120);
  }
  }
  
  //タイトルを取得
  if(empty($title)){
        $title = esc_html(get_the_title($id));
    }

  function new_excerpt_mblength($length) {
     return 50; //抜粋する文字数を50文字に設定
  }
  add_filter('excerpt_mblength', 'new_excerpt_mblength');
  
  // page-welcomの記事抜粋文に[続きを読む]を追加
  function my_excerpt_more($post) {
  return '<a href="'. get_permalink($post->ID) . '">' . '…続きを読む' . '</a>';
  }
  add_filter('excerpt_more', 'my_excerpt_more');
 
  //アイキャッチ画像を取得 
  if(has_post_thumbnail($id)) {
        $img = wp_get_attachment_image_src(get_post_thumbnail_id($id),'size-card');
        $img_tag = "<img src='" . $img[0] . "' alt='{$title}' width=" . $img[1] . " height=" . $img[2] . " />";
        } else { $img_tag ='<img src="'.$no_image.'" alt="" width="'.$img_width.'" height="'.$img_height.'" />';
    }
 
        $clink ='<div class="cardlink"><a href="'. $url .'"><div class="cardlink_thumbnail">'. $img_tag .'</a></div><div class="cardlink_content"><span class="fa fa-clock-o"></span><span class="timestamp">'.$date.'</span><div class="cardlink_title"><a href="'. $url .'">'. $title .' </a></div><div class="cardlink_excerpt">' . $excerpt . '</div></div><div class="cardlink_footer"></div></div>';
 
        return $clink;
      }  
 
add_shortcode("clink", "clink_scode");


// カスタムコメント --------------------------------------------------------------------------------------

if (function_exists('wp_list_comments')) {
	// comment count
	add_filter('get_comments_number', 'comment_count', 0);
	function comment_count( $commentcount ) {
		global $id;
		$_commnets = get_comments('post_id=' . $id);
		$comments_by_type = &separate_comments($_commnets);
		return count($comments_by_type['comment']);
	}
}


function custom_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	global $commentcount;
	if(!$commentcount) {
		$commentcount = 0;
	}
?>

 <li class="comment <?php if($comment->comment_author_email == get_the_author_meta('email')) {echo 'admin-comment';} else {echo 'guest-comment';} ?>" id="comment-<?php comment_ID() ?>">
  <div class="comment-meta clearfix">
   <div class="comment-meta-left">
  <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 35); } ?>
  
    <ul class="comment-name-date">
     <li class="comment-name">
<?php if (get_comment_author_url()) : ?>
<a id="commentauthor-<?php comment_ID() ?>" class="url <?php if($comment->comment_author_email == get_the_author_meta('email')) {echo 'admin-url';} else {echo 'guest-url';} ?>" href="<?php comment_author_url() ?>" rel="nofollow">
<?php else : ?>
<span id="commentauthor-<?php comment_ID() ?>">
<?php endif; ?>

<?php comment_author(); ?>

<?php if(get_comment_author_url()) : ?>
</a>
<?php else : ?>
</span>
<?php endif;  $options = get_option('tcd-w_options'); ?>
     </li>
     <li class="comment-date"><?php echo get_comment_time(__('F jS, Y', 'tcd-w')); if ($options['time_stamp']) : echo get_comment_time(__(' g:ia', 'tcd-w')); endif; ?></li>
    </ul>
   </div>

   <ul class="comment-act">
<?php if (function_exists('comment_reply_link')) { 
        if ( get_option('thread_comments') == '1' ) { ?>
    <li class="comment-reply"><?php comment_reply_link(array_merge( $args, array('add_below' => 'comment-content', 'depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => '<span><span>'.__('REPLY','tcd-w').'</span></span>'))) ?></li>
<?php   } else { ?>
    <li class="comment-reply"><a href="javascript:void(0);" onclick="MGJS_CMT.reply('commentauthor-<?php comment_ID() ?>', 'comment-<?php comment_ID() ?>', 'comment');"><?php _e('REPLY', 'tcd-w'); ?></a></li>
<?php   }
      } else { ?>
    <li class="comment-reply"><a href="javascript:void(0);" onclick="MGJS_CMT.reply('commentauthor-<?php comment_ID() ?>', 'comment-<?php comment_ID() ?>', 'comment');"><?php _e('REPLY', 'tcd-w'); ?></a></li>
<?php } ?>
    <li class="comment-quote"><a href="javascript:void(0);" onclick="MGJS_CMT.quote('commentauthor-<?php comment_ID() ?>', 'comment-<?php comment_ID() ?>', 'comment-content-<?php comment_ID() ?>', 'comment');"><?php _e('QUOTE', 'tcd-w'); ?></a></li>
    <?php edit_comment_link(__('EDIT', 'tcd-w'), '<li class="comment-edit">', '</li>'); ?>
   </ul>

  </div>
  <div class="comment-content post" id="comment-content-<?php comment_ID() ?>">
  <?php if ($comment->comment_approved == '0') : ?>
   <span class="comment-note"><?php _e('Your comment is awaiting moderation.', 'tcd-w'); ?></span>
  <?php endif; ?>
  <?php comment_text(); ?>
  </div>


<?php } ?>