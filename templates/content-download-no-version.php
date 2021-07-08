<?php
/**
 * Default output for a download via the [download] shortcode
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/** @var DLM_Download $dlm_download */

if ( ! isset( $dlm_download ) || ! $dlm_download ) {
	return esc_html__('No download found', 'download-monitor');
}
?>
<a class="download-link" title="<?php _e( 'Please set a version in your WordPress admin', 'download-monitor' ); ?>" href="#" rel="nofollow">
	"<?php $dlm_download->the_title(); ?>" <strong><?php _e( 'has no version set!', 'download-monitor' ); ?></strong>
</a>