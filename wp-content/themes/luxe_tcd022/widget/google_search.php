<?php

 // Start class widget //
 class google_search extends WP_Widget {

 // Constructor //
 function google_search() {
  $widget_ops = array( 'classname' => 'google_search', 'description' => __('Displays Google Custom Search form.', 'tcd-w') ); // Widget Settings
  $control_ops = array( 'id_base' => 'google_search' ); // Widget Control Settings
  parent::__construct( 'google_search', __('Google Custom Search (tcd-w ver)', 'tcd-w'), $widget_ops, $control_ops ); // Create the widget
 }

 // Extract Args //
 function widget($args, $instance) {
  extract( $args );
   $google_search_id = $instance['google_search_id'];

   // Before widget //
   echo $before_widget;

   // Widget output //

?>
<form action="http://www.google.com/cse" method="get" id="searchform">
<div>
 <input id="search_button" type="submit" name="sa" value="<?php _e('Search','tcd-w'); ?>" />
 <input type="hidden" name="cx" value="<?php echo $google_search_id; ?>" />
 <input type="hidden" name="ie" value="UTF-8" />
</div>
<div><input id="search_input" type="text" value="<?php _e('SEARCH','tcd-w'); ?>" name="q" onfocus="if (this.value == '<?php _e('SEARCH','tcd-w'); ?>') this.value = '';" onblur="if (this.value == '') this.value = '<?php _e('SEARCH','tcd-w'); ?>';" /></div>
</form>
<?php

   // After widget //
   echo $after_widget;

} // end function widget


 // Update Settings //
 function update($new_instance, $old_instance) {
  $instance['google_search_id'] = $new_instance['google_search_id'];
  return $instance;
 }

 // Widget Control Panel //
 function form($instance) {
  $defaults = array( 'google_search_id' => '');
  $instance = wp_parse_args( (array) $instance, $defaults );
?>
<p style="margin-bottom:5px;"><?php _e('If you wan\'t to use google custom search for your wordpress, enter your google custom search ID.<br /><a href="http://www.google.com/cse/" target="_blank">Read more about Google custom search page.</a>', 'tcd-w');  ?></p>
<p>
  <label for="<?php echo $this->get_field_id('google_search'); ?>"><?php _e('Google custom search ID', 'tcd-w');  ?></label>
  <input class="widefat" id="<?php echo $this->get_field_id('google_search_id'); ?>" name="<?php echo $this->get_field_name('google_search_id'); ?>'" type="text" value="<?php echo $instance['google_search_id']; ?>" />
</p>
<?php
 } // end function form
}

// End class widget
add_action('widgets_init', create_function('', 'return register_widget("google_search");'));
?>