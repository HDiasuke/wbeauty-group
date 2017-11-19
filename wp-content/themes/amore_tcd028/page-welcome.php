<?php /* Template Name: Welcome Screen */ ?>

<?php
$options = get_desing_plus_option();
get_header(); ?>


<div id="site-cover"></div>
<section>
  <div class="scroll-page">
    <div class="page-area page-bg-pht">
        <div class="page-text">
          私たちW.Beauty Groupは<br>
          内面の美と外面の美の<br>
          トータルのケアをサポートする<br>
          美容商材卸・スクールを展開しています<br>
          <br>
          ハイセンスな<br>
          ホリスティックナチュルビューティを目指す<br>
          女性サロン様をサポートいたします<br>
        </div>

  　</div>
  </div>
</section>

<section>
  <div id="second">
    <div class="wrapper">
      <?php echo do_shortcode('[su_row class=""]
        [su_column size="1/2" center="no" class="second-left"]

        [su_box title="NEWS & TOPIX" style="default" box_color="none" title_color="#7a715e" border-color="none" radius="3" class="second-right" include_excerpt="true"]

            <div class="tsuta-bg">
            <img src="http://localhost:8888/wbeauty-group/wp-content/uploads/2017/11/tsuta_flame.png">
            </div>
            [news cat="" num="10"]
            <div class="tsuta-bg">
            <img src="http://localhost:8888/wbeauty-group/wp-content/uploads/2017/11/tsuta_flame.png">
            </div>
            <div class="news-btn">
              <a href="http://localhost:8888/wbeauty-group/information/" class="square_btn">NEWS & TOPIX一覧はこちら</a>
            </div>

          [/su_box]

        [/su_column]

        [su_column size="1/2" center="no" class=""]

        [smartslider3 slider=2]
        <div class="banner-flame-container">
          <div class="banner-flame">
            <a href="http://dtox.jp/daytoxwrap/" target="_blank"><img src="http://localhost:8888/wbeauty-group/wp-content/uploads/2017/11/banner_herbwrap_300.png"></a>
          </div>
          <div class="banner-flame">
            <a href="http://dtox.jp/epsomsalt/" target="_blank"><img src="http://localhost:8888/wbeauty-group/wp-content/uploads/2017/11/banner_epsomsalt_300.png"></a>
          </div>
        </div>
        [/su_column]
      [/su_row]'); ?>
    </div>
  </div>
</section>
<!-- thirdコンテンツ削除 -->

<!-- ブログ一覧(section)は削除（#fourth） -->


<section>
  <div class="amore-divider romaji" data-parallax="scroll" data-speed="0.6" data-image-src="<?php echo $options['bg_image4']; ?>">
    <div class="container">
      <div class="row">
        <div class="col-xs-120 no-padding">
          <h2 class="invisibletexteffect animate offsetted top-headline fifth_headline"><?php echo $options['fifth_headline'];?></h2>
        </div>
      </div>
    </div>
  </div>

  <div id="fifth" class="container">
    <div class="row">
      <div class="fifth-content"><!-- ここからfifth-contentの上段 -->
        <?php echo do_shortcode('[su_row class="fifth-container"]
          [su_column size="1/3" center="no" class="fifth-box"]
            <a href="http://localhost:8888/wbeauty-group/daytox/">
            <figure>
              <img src="http://localhost:8888/wbeauty-group/wp-content/uploads/2017/11/fifth_box_left.jpg" alt="Daytox｜詳細はこちら" />
              <figcaption>
                <h3>Daytox</h3>
                <p>インナー･デトックス･ビューティブランド「Daytox」を通じて、皆様の快適で適切なデトックスを実現し、皆様の「美」をお手伝いしていきます。</p>
              </figcaption>
            </figure></a>
              <div class="fifth-flame">
                <a href="http://localhost:8888/wbeauty-group/daytox/" class="fifth-box-item">Daytox</a>
              </div>
          [/su_column]
          [su_column size="1/3" center="no" id="fifth-box-center" class="fifth-box"]
            <a href="http://localhost:8888/wbeauty-group/herbtent/">
            <figure>
              <img src="http://localhost:8888/wbeauty-group/wp-content/uploads/2017/11/fifth_box_herbtent.jpg" alt="ハーブテント｜詳細はこちら" />
              <figcaption>
                <h3>ハーブテント</h3>
                <p>ハーブテントは、もともとタイに古くから伝わる民間療法です。人ひとり入れるサイズの布製のテントの中をハーブの蒸気で充満させて全身で浴びるテント式のスチームサウナです。</p>
              </figcaption>
            </figure></a>
              <div class="fifth-flame">
                <a href="http://localhost:8888/wbeauty-group/herbtent/" class="fifth-box-item">ハーブテント</a>
              </div>
          [/su_column]
          [su_column size="1/3" center="no" class="fifth-box"]
            <a href="http://localhost:8888/wbeauty-group/bust-care/">
            <figure>
              <img src="http://localhost:8888/wbeauty-group/wp-content/uploads/2017/11/fifth_box_bustcare.jpg" alt="育乳バストケア｜詳細はこちら" />
              <figcaption>
                <h3>育乳バストケア</h3>
                <p>クリスタルオリジナルのバストケアは、バストの形が整うだけでなく背面のラインがとてもきれいに仕上がります。うなじから肩甲骨にかけては女性らしいフォルムになり、ウエストが出現します。</p>
              </figcaption>
            </figure></a>
              <div class="fifth-flame">
                <a href="http://localhost:8888/wbeauty-group/bust-care/" class="fifth-box-item">育乳バストケア</a>
              </div>
          [/su_column]
        [/su_row]'); ?>
      </div><!-- ここまでfifth-contentの上段 -->
      <div class="fifth-content"><!-- ここからfifth-contentの下段 -->
        <?php echo do_shortcode('[su_row class="fifth-container"]
          [su_column size="1/3" center="no" class="fifth-box"]
            <a href="http://localhost:8888/wbeauty-group/academy/">
            <figure>
              <img src="http://localhost:8888/wbeauty-group/wp-content/uploads/2017/11/fifth_box_adeemy.jpg" alt="アカデミー｜詳細はこちら" />
              <figcaption>
                <h3>アカデミー</h3>
                <p>全身インナーデトックスメニュー「Daytoxハーブラップサロン向け導入講習」や、一般社団法人日本ハーブテント協会認定「ハーブテントセラピスト講座」の受講案内です。</p>
              </figcaption>
            </figure></a>
              <div class="fifth-flame">
                <a href="http://localhost:8888/wbeauty-group/academy/" class="fifth-box-item">アカデミー</a>
              </div>
          [/su_column]
          [su_column size="1/3" center="no" id="fifth-box-center" class="fifth-box"]
            <a href="http://localhost:8888/wbeauty-group/promotion/">
            <figure>
              <img src="http://localhost:8888/wbeauty-group/wp-content/uploads/2017/11/fifth_box_promotion-1.jpg" alt="サロン様向け販促物｜詳細はこちら" />
              <figcaption>
                <h3>サロン様向け販促物</h3>
                <p>美容サロン様を中心にWEBサイト制作を行っています。弊社オリジナルテンプレートからお選びいただいた場合、納期短縮もご相談いただけます。</p>
              </figcaption>
            </figure></a>
              <div class="fifth-flame">
                <a href="http://localhost:8888/wbeauty-group/promotion/" class="fifth-box-item">サロン様向け販促物</a>
              </div>
          [/su_column]
          [su_column size="1/3" center="no" class="fifth-box"]
            <a href="http://localhost:8888/wbeauty-group/registration/">
            <figure>
              <img src="http://localhost:8888/wbeauty-group/wp-content/uploads/2017/11/fifth_box_registration-1.jpg" alt="資料請求｜詳細はこちら" />
              <figcaption>
                <h3>資料請求</h3>
                <p>ご入力フォームを送信後、各事業の詳しい情報をお送りします。</p>
              </figcaption>
            </figure></a>
              <div class="fifth-flame">
                <a href="http://localhost:8888/wbeauty-group/registration/" class="fifth-box-item">資料請求はこちら</a>
              </div>
          [/su_column]
        [/su_row]'); ?>
      </div><!-- ここまでfifth-contentの下段 -->
    </div>
  </div>
</section>





<script>
 jQuery('.heightasviewport').css('height', jQuery(window).height())
</script>

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>