<?php $options = get_desing_plus_option(); ?>

		<div id="sideColumn">
<?php if(is_mobile()): ?>
<?php
	if(is_front_page() and is_active_sidebar('mobile_widget_index')){
		dynamic_sidebar('mobile_widget_index');
	}elseif(is_archive() and is_active_sidebar('mobile_widget_archive') or is_search() and is_active_sidebar('mobile_widget_archive')) {
		dynamic_sidebar('mobile_widget_archive');
	}elseif(is_single() and is_active_sidebar('mobile_widget_single') or is_page() and is_active_sidebar('mobile_widget_single')) {
		dynamic_sidebar('mobile_widget_single');
	}elseif(is_home()) {
		dynamic_sidebar('mobile_widget_archive');
	}else {
		//dynamic_sidebar('mobile_widget_archive');
	}; ?>

<?php else: ?>
<?php if($options['side_ad_code1']||$options['side_ad_image1']) { ?>
			<div id="side-banner">
	<?php if ($options['side_ad_code1']) { ?>
		<?php echo $options['side_ad_code1']; ?>
	<?php } else { ?>
		<a href="<?php esc_attr_e( $options['side_ad_url1'] ); ?>" class="target_blank"><img src="<?php esc_attr_e( $options['side_ad_image1'] ); ?>" alt="" title="" /></a>
	<?php }; ?></div>
<?php }; ?>
			
<?php
	if(is_front_page() and is_active_sidebar('index_side_widget')){
		dynamic_sidebar('index_side_widget');
	}elseif(is_archive() and is_active_sidebar('archive_side_widget') or is_search() and is_active_sidebar('archive_side_widget')) {
		dynamic_sidebar('archive_side_widget');
	}elseif(is_single() and is_active_sidebar('single_side_widget') or is_page() and is_active_sidebar('single_side_widget')) {
		dynamic_sidebar('single_side_widget');
	}elseif(is_home()) {
		dynamic_sidebar('archive_side_widget');
	}else{
		//dynamic_sidebar('archive_side_widget');
	}; ?>
<?php endif; ?>
		</div>
