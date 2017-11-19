<?php

class ml_cat_widget extends WP_Widget {

  function __construct() {
    $widget_ops = array( 'classname' => 'ml_cat_widget', 'description' => __('Show the list of categories with thumbnails.','tcd-w') );
    $control_ops = array( 'id_base' => 'ml_cat_widget' );
    parent::__construct( 'ml_cat_widget', __('Categories (tcd ver)','tcd-w'), $widget_ops, $control_ops );
  }

  function widget($args, $instance) {

  extract($args);
  $title = apply_filters('widget_title', $instance['title']);

   // Before widget //
  echo $before_widget;

  if ( $title ) { echo $before_title . $title . $after_title; };
      $categories = get_categories();

      echo '<ul class="mycategory clearfix">';
      $tag_all = get_terms("category", "fields=all");
      foreach($tag_all as $value):
        $cat_data = get_option('cat_'.intval($value->term_id));
        echo '<li><a href="'.get_category_link(intval($value->term_id)).'">';
        if($cat_data['img']){
          echo '<img src="'.esc_html($cat_data['img']).'" />';
        }else{
          echo '<img src="';
          bloginfo('template_url');
          echo '/img/common/no_image1.gif" />';
        }
        echo '<span>'.esc_html($value->name).'</span>';
        echo '</a></li>';
      endforeach;
      echo '</ul>';


   // After widget //
  echo $after_widget;

  }// end function widget
 // Update Settings //
 function update($new_instance, $old_instance) {
  $instance['title'] = strip_tags($new_instance['title']);
  return $instance;
 }

 // Widget Control Panel //
 function form($instance) {
  $defaults = array( 'title' => __('Categories', 'tcd-w'));
  $instance = wp_parse_args( (array) $instance, $defaults );
?>
<p>
 <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'tcd-w'); ?></label>
 <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>'" type="text" value="<?php echo $instance['title']; ?>" />
</p>
<?php
 } // end function form

}// End class widget



// init the widget
add_action('widgets_init', create_function('', 'return register_widget("ml_cat_widget");'));

?>
