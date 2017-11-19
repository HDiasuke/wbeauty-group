<?php
$options = get_desing_plus_option();

  $category = get_category( get_query_var( 'cat' ) );

  // テンプレートをdefaultに戻すときは下記を削除して
  // さらに下のコメントアウトを外す
  $cat_id = 'null';

  // $cat_id = $category->cat_ID;

  // if( $cat_id ){
  //   $cat_id = $cat_id;
  // } else {
  //   $cat_id = 'null';
  // }

?>

<div id="footer"<?php if(is_mobile()){if(is_front_page()){ echo ' class="front_mobile_footer"'; }else{ echo ' class="mobile_footer"'; }; }; ?>>
  <div class="container"<?php if(!is_mobile()){ echo ' style="padding-bottom:10px; padding-top:10px;"'; }; ?>>

    <div class="row hidden-xs">
      <div class="col-xs-60 col-xs-offset-30 text-center">
        <?php if($options['footer_btn_headline']): ?>
        <div class="button button-green romaji"><a href="<?php echo $options['footer_btn_url']; ?>" style="padding: 10px 30px;"><?php echo $options['footer_btn_headline']; ?></a></div>
      <?php endif; ?>
      </div>
      <div class="col-xs-30 text-right">
        <?php if($options['facebook_url']): ?><a href="<?php echo $options['facebook_url']; ?>"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" class="social-icon" alt="facebook"></a><?php endif; ?>
        <?php if($options['twitter_url']): ?><a href="<?php echo $options['twitter_url']; ?>"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" class="social-icon" alt="twitter"></a><?php endif; ?>
        <?php if($options['show_rss']): ?><a class="target_blank" href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/rss.png" class="social-icon" alt="rss"></a><?php endif; ?>
      </div>
    </div>

    <div class="row visible-xs">
      <div class="col-xs-120 text-center">
        <?php if($options['footer_btn_headline']): ?>
          <div class="button button-green romaji footer_btn">
            <a href="<?php echo $options['footer_btn_url']; ?>"><?php echo $options['footer_btn_headline']; ?></a>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-xs-120 footer_mobile_menu_wrapper">
        <?php for($i=1; $i<=4; $i++){ ?>
          <?php if (has_nav_menu('footer-menu-'.$i)) { ?>
          <div id="footer-menu-<?php echo $i; ?>" class="footer_mobile_menu clearfix">
           <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'footer-menu-'.$i , 'container' => '' ) ); ?>
          </div>
          <?php }; ?>
        <?php }; ?>
      </div>
      <div class="company-container">
      　<div class="campany-box">
          <div class="company-left">
            運営会社
          </div>
          <div class="company-center">
            ｜
          </div>
          <div class="company-right">
            株式会社Holistic＆Natural Beauty
          </div>
        </div>
        <div class="campany-box">
          <div class="company-left">
            代表
          </div>
          <div class="company-center">
            ｜
          </div>
          <div class="company-right">
            嶋田
          </div>
        </div>
        <div class="campany-box">
          <div class="company-left">
            Mail
          </div>
          <div class="company-center">
            ｜
          </div>
          <div class="company-right">
            info@wbeauty-group.com
          </div>
        </div>
        <div class="campany-box">
          <div class="company-left">
            事業内容
          </div>
          <div class="company-center">
            ｜
          </div>
          <div class="company-right">
            <li>エステサロン運営</li>
            <li>スクール運営</li>
            <li>WEB制作</li>
            <li>コンサルティング</li>
            <li>美容商材製造・企画・販売</li>
          </div>
        </div>
      </div>
      <div class="col-xs-120 text-center footer_social_link_wrapper">
        <div class="privacy-smart"><a href="http://konkatu-akikosalon.com/privacy-policy/">プライバシーポリシー</a></div>
    </div>
       <?php if ($options['show_rss'] or $options['twitter_url'] or $options['facebook_url'] or $options['insta_url'] or $options['pinterest_url'] or $options['flickr_url'] or $options['tumblr_url']) { ?>
       <ul class="user_sns clearfix" id="footer_social_link">
          <?php if(($options['twitter_url'])): ?><li class="twitter"><a href="<?php esc_attr_e($options['twitter_url']) ?>" target="_blank"><span>Twitter</span></a></li><?php endif; ?>
          <?php if(($options['facebook_url'])): ?><li class="facebook"><a href="<?php esc_attr_e($options['facebook_url']) ?>" target="_blank"><span>Facebook</span></a></li><?php endif; ?>
          <?php if(($options['insta_url'])): ?><li class="insta"><a href="<?php esc_attr_e($options['insta_url']) ?>" target="_blank"><span>Instagram</span></a></li><?php endif; ?>
          <?php if(($options['pinterest_url'])): ?><li class="pint"><a href="<?php esc_attr_e($options['pinterest_url']) ?>" target="_blank"><span>Pinterest</span></a></li><?php endif; ?>
          <?php if(($options['flickr_url'])): ?><li class="flickr"><a href="<?php esc_attr_e($options['flickr_url']) ?>" target="_blank"><span>Flickr</span></a></li><?php endif; ?>
          <?php if(($options['tumblr_url'])): ?><li class="tumblr"><a href="<?php esc_attr_e($options['tumblr_url']) ?>" target="_blank"><span>Tumblr</span></a></li><?php endif; ?>
          <?php if(($options['show_rss'])): ?><li class="rss"><a class="target_blank" href="<?php bloginfo('rss2_url'); ?>">RSS</a></li><?php endif; ?>
       </ul>
       <?php }; ?>
      </div>
    </div>
  </div>
</div>

<?php if(is_mobile()){ ?>
  <?php if($options['mobile_ad_code3']||$options['mobile_ad_code3']) { ?>
  <div class="col-xs-120 mobile-fixed-banner">
    <?php
      if ($options['mobile_ad_code3']) {
       echo $options['mobile_ad_code3'];
      }else{
       echo '<a href="'; esc_attr_e( $options['mobile_ad_url3'] ); echo '" class="target_blank"><img src="'; esc_attr_e( $options['mobile_ad_image3'] ); echo '" alt="" title=""></a>';
      }; 
    ?>
  </div>
  <?php }; ?>
<?php }; ?>

<div class="hidden-xs footer_main">
  <div class="container amore-section" style="padding: 60px 0 50px;">
    <div class="row footer-logo-left" style="color:white; width:740px; margin:0 auto;">
      <div class="col-xs-120 text-center romaji"><?php the_dp_footer_logo(); ?></div>
    </div>
    <?php
      $fm_count = 0;
      if(has_nav_menu('footer-menu-1')){$fm_count++;};
      if(has_nav_menu('footer-menu-2')){$fm_count++;};
      if(has_nav_menu('footer-menu-3')){$fm_count++;};
      if(has_nav_menu('footer-menu-4')){$fm_count++;};
    ?>
    <div class="footer-menu-right">
      <div class="row footer-menu-line" style="color:white; width:<?php echo 180*$fm_count; ?>px; margin:0 auto;">

        <?php if(has_nav_menu('footer-menu-1')): ?>
        <div class="col-xs-<?php echo 120/$fm_count; ?> no-padding hidden-xs">
            <?php wp_nav_menu(
              array(
                'theme_location'    => 'footer-menu-1',
                'depth'             => 0,
                'container'         => 'div',
                'container_class'   => 'footer-menu collapse navbar-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
              )
            ); ?>
        </div>
        <?php endif; ?>
        <?php if(has_nav_menu('footer-menu-2')): ?>
        <div class="col-xs-<?php echo 120/$fm_count; ?> no-padding hidden-xs">
            <?php wp_nav_menu(
              array(
                'theme_location'    => 'footer-menu-2',
                'depth'             => 0,
                'container'         => 'div',
                'container_class'   => 'footer-menu collapse navbar-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
              )
            ); ?>
        </div>
        <?php endif; ?>
        <?php if(has_nav_menu('footer-menu-3')): ?>
        <div class="col-xs-<?php echo 120/$fm_count; ?> no-padding hidden-xs">
            <?php wp_nav_menu(
              array(
                'theme_location'    => 'footer-menu-3',
                'depth'             => 0,
                'container'         => 'div',
                'container_class'   => 'footer-menu collapse navbar-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
              )
            ); ?>
        </div>
        <?php endif; ?>
        <?php if(has_nav_menu('footer-menu-4')): ?>
        <div class="col-xs-<?php echo 120/$fm_count; ?> no-padding hidden-xs">
            <?php wp_nav_menu(
              array(
                'theme_location'    => 'footer-menu-4',
                'depth'             => 0,
                'container'         => 'div',
                'container_class'   => 'footer-menu collapse navbar-collapse',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
              )
            ); ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="company-container">
      　<div class="campany-box">
          <div class="company-left">
            運営会社
          </div>
          <div class="company-center">
            ｜
          </div>
          <div class="company-right">
            株式会社Holistic＆Natural Beauty
          </div>
        </div>
        <div class="campany-box">
          <div class="company-left">
            代表
          </div>
          <div class="company-center">
            ｜
          </div>
          <div class="company-right">
            嶋田
          </div>
        </div>
        <div class="campany-box">
          <div class="company-left">
            Mail
          </div>
          <div class="company-center">
            ｜
          </div>
          <div class="company-right">
            info@wbeauty-group.com
          </div>
        </div>
        <div class="campany-box">
          <div class="company-left">
            事業内容
          </div>
          <div class="company-center">
            ｜
          </div>
          <div class="company-right">
            <li>エステサロン運営</li>
            <li>スクール運営</li>
            <li>WEB制作</li>
            <li>コンサルティング</li>
            <li>美容商材製造・企画・販売</li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="scrolltotop">
    <div class="scrolltotop_arrow"><a href="#verytop">&#xe911;</a></div>
  </div>
</div>

<div class="copr">
  <div class="container">
    <div class="row">
      <div class="col-sm-60 text-left hidden-xs">
        <div class="privacy-pc"><a href="http://konkatu-akikosalon.com/privacy-policy/">プライバシーポリシー</a></div>
        <?php if ($options['zipcode']) { ?><span class="footer-zipcode"><?php echo $options['zipcode']; ?></span><?php }; ?>
        <?php if ($options['map_address']) { ?><span class="footer-address"><?php echo $options['map_address']; ?></span><?php }; ?>
        <?php if ($options['phonenumber']) { ?><span class="footer-phone"><?php echo $options['phonenumber']; ?></span><?php }; ?>
      </div>
      <div class="col-sm-60 text-right hidden-xs romaji">
        <span class="copyright"><?php _e('Copyright &copy;&nbsp; ', 'tcd-w'); ?><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> All Rights Reserved.</span>
      </div>
      <div class="col-sm-120 text-center visible-xs romaji">
        <span class="copyright"><?php _e('&copy;&nbsp; ', 'tcd-w'); ?><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> All Rights Reserved.</span>
      </div>
    </div>
  </div>
</div>

<?php if ( is_mobile()) { get_template_part('footer-bar/footer-bar'); }; ?>
  <div id="return_top">
    <a href="#header_top"><span><?php _e('PAGE TOP', 'tcd-w'); ?></span></a>
  </div>

<?php wp_footer(); ?>
</div>
<script type="text/javascript">

    var canLoad = true

    function page_ajax_get(){
      var page = jQuery('.paged').last().attr('data-paged') || 2;
      var cat = <?php echo $cat_id; ?>;
      var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';

      canLoad = false

      jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        data: {"action": "load-filter", cat: cat, paged:page },
        success: function(response) {
          if(response.length > 100){
            var id = page - 1;
            id.toString();
            jQuery("#infiniscroll").html(jQuery("#infiniscroll").html() + response);
          } else {
            jQuery("#pagerlink").html("最終ページ")
            jQuery("#pagerbutton").attr("disabled", "disabled")
          }

          setTimeout(function(){ canLoad = true }, 2000)
        }
      })
    }
    
  jQuery(window).load(function(){

    jQuery("#site-cover").fadeOut('slow');

    var cat = null
    var currentSlide = -1

    var fixStuff = function(){
      jQuery(".heightaswidth").each(function(){
        jQuery(this).css('height', jQuery(this).outerWidth())
      })

/* ここ削除 */
    
      jQuery(".verticalcenter").each(function(){
        var center = (jQuery(this).parent().width() / 2) - parseInt(jQuery(this).parent().css('padding-top'))
        //var size = jQuery(this).outerHeight() / 2
        var size = 13;
        jQuery(this).css('padding-top', center - size + 20)
      })

      jQuery(".verticalcentersplash").each(function(){
        var center = jQuery(window).height() / 2
        var size = jQuery(this).outerHeight() / 2
        jQuery(this).css('padding-top', center - size)
      })
    }

    // var nextSlide = function(){
    //   currentSlide++
  
    //   if(jQuery("[data-order='" + currentSlide + "']").length == 0) currentSlide = 0

    //   jQuery('.parallax-mirror[data-order]').fadeOut("slow");
    //   jQuery("[data-order='" + currentSlide + "']").fadeIn("slow");
    // }

    //   jQuery('.parallax-mirror[data-order]').hide();


    var nextSlide = function(){      
      currentSlide++
  
      if(jQuery("[data-order='" + currentSlide + "']").length == 0) currentSlide = 0

      <?php if( !wp_is_mobile() ) : ?>
      // if( $( window ).width() > 767 ){
        jQuery('.parallax-mirror[data-order]').fadeOut("slow");
      // } else {
      <?php else : ?>
        jQuery('.slider').fadeOut("slow");
        // jQuery('.parallax-mirror[data-order]').fadeOut("slow");
      <?php endif; ?>
      // }
      
      jQuery("[data-order='" + currentSlide + "']").fadeIn("slow");
    }

      <?php if( !wp_is_mobile() ) : ?>
      // if( $( window ).width() > 767 ){
        jQuery('.parallax-mirror[data-order]').hide();
      // } else {
      <?php else : ?>
        jQuery('.slider').hide()
        // jQuery('.parallax-mirror[data-order]').hide();
      <?php endif; ?>
      // }


      fixStuff();
      nextSlide();

     setInterval(nextSlide, 3000);


     setInterval(function(){
      jQuery(".fade-me-in").first().fadeIn().removeClass('fade-me-in');
     }, 200)



     jQuery(window).resize(function() {
      fixStuff();
     });




    if (jQuery("#telephone").length && jQuery("#logo").length) {
      jQuery("#telephone").css('left', jQuery("#logo").width() + 30)
    }

    jQuery('#topcover').addClass('topcover-visible')

    jQuery("a[href*=#]:not([href=#])").click(function(){
      if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){
        var e=jQuery(this.hash);
        if(e=e.length?e:jQuery("[name="+this.hash.slice(1)+"]"),e.length)return jQuery("html,body").animate({scrollTop:e.offset().top},1e3),!1
      }
    })

    $(".menu-item, .menu-item a").click(function(){ })

    jQuery(window).scroll(function(){
      var center = jQuery(window).height() - 300

/*

      if(jQuery(window).scrollTop() > jQuery("#footer").offset().top - jQuery(window).height() && canLoad){
        page_ajax_get();
      }
*/

      jQuery('.invisibletexteffect').each(function(){
        var percentFromCenter = Math.abs(( (jQuery(this).offset().top + jQuery(this).outerHeight() / 2 ) - jQuery(document).scrollTop()) - center) / center

        if(percentFromCenter < 1)
          jQuery(this).removeClass('offsetted')
      })


    })
  })

  <?php if(is_front_page()) : ?>
    google.maps.event.addDomListener(window, 'load', function(){
      var geocoder = new google.maps.Geocoder();

      <?php if($options['map_address_LatLng']): ?>
      var markerPos = new google.maps.LatLng(<?php echo $options['map_address_LatLng']; ?>);
      geocoder.geocode({'address':<?php if($options['map_address_LatLng']) { echo "'" . $options['map_address_LatLng'] . "'"; } else { echo "'大阪'"; } ?>}, function(results, status) {
      <?php else: ?>
      geocoder.geocode({'address':<?php if($options['map_address']) { echo "'" . $options['map_address'] . "'"; } else { echo "'大阪'"; } ?>}, function(results, status) {
      <?php endif; ?>
        if (status == google.maps.GeocoderStatus.OK){
          var mapOptions = {
            center: results[0].geometry.location,
            zoom: 18,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            <?php if(is_mobile()){ echo "draggable: false"; } ?>
          }

　        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions)
          var marker = new google.maps.Marker({
              map: map,
              <?php if($options['map_address_LatLng']): ?>
              position: markerPos
              <?php else: ?>
              position: results[0].geometry.location
              <?php endif; ?>
          })
        }

      })
    })
  <?php endif; ?>
</script>

<?php if( is_mobile() ) { ?>
<?php if($options['footer_bar_display'] == 'type1') { ?>
<script src="<?php echo get_template_directory_uri(); ?>/footer-bar/footer-bar.js?ver=<?php echo version_num(); ?>"></script>
<?php }elseif($options['footer_bar_display'] == 'type2'){ ?>
<script src="<?php echo get_template_directory_uri(); ?>/footer-bar/footer-bar2.js?ver=<?php echo version_num(); ?>"></script>
<?php }; ?>
<?php } ?>

 <?php if(is_single()) { ?>
 <!-- facebook share button code -->
 <div id="fb-root"></div>
 <script>
 (function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
 </script>
 <?php }; ?>

</body>

</html>