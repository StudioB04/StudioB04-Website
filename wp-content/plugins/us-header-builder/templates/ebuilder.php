<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Output elements builder
 *
 * @var $titles array Elements titles
 * @var $body string Body inner HTML
 */
$titles = ( isset( $titles ) AND is_array( $titles ) ) ? $titles : array();
$body = isset( $body ) ? $body : '';

?>
<div class="us-hb-window for_editing">
	<div class="us-hb-window-h">
		<div class="us-hb-window-header">
			<div class="us-hb-window-title"<?php echo us_pass_data_to_js($titles) ?>></div>
			<div class="us-hb-window-closer">&times;</div>
		</div>
		<div class="us-hb-window-body"><?php echo $body ?><span class="usof-preloader"></span></div>
		<div class="us-hb-window-footer">
			<div class="us-hb-window-btn for_close"><span><?php _e( 'Close', 'us' ) ?></span></div>
			<div class="us-hb-window-btn for_save"><span><?php _e( 'Save Changes', 'us' ) ?></span></div>
		</div>
	</div>
</div>
