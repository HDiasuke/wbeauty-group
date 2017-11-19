<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
    <div class="input-group">
  		<input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', '_tk' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', '_tk' ); ?>">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="fa fa-search"></span></button>
      </span>
    </div><!-- /input-group -->
	</label>
	<input type="submit" style="display:none" value="<?php echo esc_attr_x( 'Search', 'submit button', '_tk' ); ?>">
</form>
