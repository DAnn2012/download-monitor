<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/**
 * DLM_Admin_Media_Browser class.
 */
class DLM_Admin_Media_Browser {

	/**
	 * __construct function.
	 *
	 * @access public
	 */
	public function __construct() {
		add_action( 'media_upload_downloadable_file_browser', array( $this, 'media_browser' ) );
	}

	/**
	 * media_browser function.
	 *
	 * @access public
	 * @return void
	 */
	public function media_browser() {
		// File Manager
		$file_manager = new DLM_File_Manager();

		// Define path as default ABSPATH.
		$path = ABSPATH;

		// Check if it's a multisite installation and we are on a secondary site.
		if ( ( defined( 'MULTISITE' ) && MULTISITE ) && ! is_main_site() ) {
			// Getting network-wide DLM settings.
			$settings = get_site_option( 'dlm_network_settings', array() );

			// Check if we allow cross-site browsing of wp_uploads.
			if ( ! isset( $settings['dlm_crossite_file_browse'] ) || '0' == $settings['dlm_crossite_file_browse'] ) {
				// This is a secondary site & cross-browse NOT allowed. Get all files from it's own upload dir.
				$upload_dir = wp_upload_dir();
				$path       = $upload_dir['basedir'];
			}
		}

		// Get files based on path.
		$files                 = $file_manager->list_files( $path, 1 );
		$extra_disallowed_dirs = apply_filters( 'DLM_restricted_admin_folders', array() );
		$base_dissalowed_dirs  = array( 'wp-admin', 'wp-includes' );
		$disallowed_dirs       = array_merge( $base_dissalowed_dirs, $extra_disallowed_dirs );
		echo '<!DOCTYPE html><html lang="en"><head><title>' . esc_html__( 'Browse for a file', 'download-monitor' ) . '</title>';

		wp_enqueue_style( 'download_monitor_admin_css', download_monitor()->get_plugin_url() . '/assets/css/admin.min.css', array( 'dashicons' ), DLM_VERSION );
		// print_emoji_styles is deprecated and triggers a PHP warning
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		do_action( 'admin_print_styles' );
		do_action( 'admin_print_scripts' );
		do_action( 'admin_head' );
		// re-add print_emoji_styles
		add_action( 'admin_print_styles', 'print_emoji_styles' );

		echo '<meta charset="utf-8" /></head><body>';

		echo '<ul class="download_monitor_file_browser">';

		foreach ( $files as $found_file ) {
			$file  = pathinfo( $found_file['path'] );
			$allow = true;
			if ( $found_file['type'] == 'folder' ) {
				foreach ( $disallowed_dirs as $disallowed_dir ) {
					if ( strpos( trailingslashit( $file['dirname'] . "\\" . $file['basename'] ), $disallowed_dir ) ) {
						$allow = false;
						break;
					}
				}
				if ( ! $allow ) {
					continue;
				}
				echo '<li><a href="#" class="folder" data-path="' . esc_attr( trailingslashit( $file['dirname'] ) ) . esc_attr( $file['basename'] ) . '">' . esc_html( $file['basename'] ) . '</a></li>';
			} else {
				$filename  = $file['basename'];
				$extension = ( empty( $file['extension'] ) ) ? '' : $file['extension'];

				if ( substr( $filename, 0, 1 ) == '.' ) {
					continue;
				} // Ignore files starting with . like htaccess
				if ( in_array( $extension, array( '', 'php', 'html', 'htm', 'tmp' ) ) ) {
					continue;
				} // Ignored file types

				echo '<li><a href="#" class="file filetype-' . esc_attr( sanitize_title( $extension ) ) . '" data-path="' . esc_attr( trailingslashit( $file['dirname'] ) ) . esc_attr( $file['basename'] ) . '">' . esc_html( $file['basename'] ) . '</a></li>';
			}
		}

		echo '</ul>';
		?>
		<script type="text/javascript">
			jQuery(function () {
				jQuery('.download_monitor_file_browser').on('click', 'a', function () {

					var $link   = jQuery(this);
					var $parent = $link.closest('li');

					if ($link.is('.file')) {

						var win = window.dialogArguments || opener || parent || top;

						win.send_to_editor($link.attr('data-path'));

					} else if ($link.is('.folder_open')) {

						$parent.find('ul').remove();
						$link.removeClass('folder_open');

					} else {

						$link.after('<ul class="load_tree loading"></ul>');

						var data = {
							action  : 'download_monitor_list_files',
							path    : jQuery(this).attr('data-path'),
							security: '<?php echo esc_js( wp_create_nonce( "list-files" ) ); ?>'
						};

						jQuery.post('<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>', data, function (response) {

							$link.addClass('folder_open');

							if (response) {
								$parent.find('.load_tree').html(response);
							} else {
								$parent.find('.load_tree').html('<li class="nofiles"><?php echo esc_html__( 'No files found', 'download-monitor' ); ?></li>');
							}
							$parent.find('.load_tree').removeClass('load_tree loading');

						});
					}
					return false;
				});
			});
		</script>
		<?php
		echo '</body></html>';
	}

}