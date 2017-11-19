<?php

$categories = get_the_category(get_the_ID());

if(!$categories) {
  $categories = @array_values(get_the_terms(get_the_ID()));
}

?>

<?php if($imageFullWidth) : ?>
  <article id="post-<?php the_ID(); ?>">
    <?php 
      echo "<div class='col-xs-120' style='padding-right:0px'>";
      $featured = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
      if($featured) {
        echo get_the_post_thumbnail($page->ID, 'thumbnail-small', array('style'=>'width:100%; margin-bottom:10px'));
      }

      echo "</div><div class='col-xs-120'>";

      echo "<span class='fa fa-clock-o'></span><span class='timestamp romaji'>&nbsp;" . get_the_date('Y') . '.' . get_the_date('m') . '.' . get_post_time('j') . "</span>　";
      $numItems = count($categories);
      $i = 0;

      //foreach($categories as $cat) {
        //echo $cat->name;
        //if(++$i != $numItems) echo "、 ";
      //}
      echo "<h4 class='underline-hover' style='display:block; margin-bottom:10px; margin-top:10px'><a class='content_links' href='" .get_the_permalink(). "'>" . get_the_title() . "</a></h4>";

      echo "</div>";
    ?>
  </article><!-- #post-## -->
<?php else : ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
      echo "<div class='col-xs-45' style='padding-right:0px'>";
      $featured = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
      if($featured) {
        echo '<a href="'.get_the_permalink().'"><div class="thumb">';
        echo get_the_post_thumbnail($page->ID, 'size3');
        echo '</div></a>';
      }else{
        echo '<a href="'.get_the_permalink().'"><div class="thumb">';
        echo '<img src="'; bloginfo('template_url'); echo '/img/common/no_image1.gif" alt="" title="" />';
        echo '</div></a>';
      }

      echo "</div><div class='col-xs-75'>";

      echo "<span class='fa fa-clock-o'></span><span class='timestamp romaji'>&nbsp;" . get_the_date('Y') . '.' . get_the_date('m') . '.' . get_post_time('j') . "</span>　";
      $numItems = count($categories);
      $i = 0;

      //foreach($categories as $cat) {
        //echo $cat->name;
        //if(++$i != $numItems) echo "、 ";
      //}
      echo "<h4 class='underline-hover' style='display:block; margin-bottom:10px; margin-top:10px'><a class='content_links' href='" .get_the_permalink(). "'>" . get_the_title() . "</a></h4>";

      echo "</div>";
    ?>
  </article><!-- #post-## -->
<?php endif ?>