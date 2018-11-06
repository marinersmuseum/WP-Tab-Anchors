<?php
/**
 * Plugin Name: WP Tab Anchors
 * Description: This plugin allows you to permalink (i.e., bookmark) to content on Twitter Bootstrap tabs via hash mark links.
 * Version: 1.4.0
 * Author: Adam Carrier
 * Author URI: http://about.me/adamcarrier
 * License: GPLv2
 */

// safety first
if ( ! defined( 'ABSPATH' ) ) die;

function scripts() {
	wp_enqueue_script( 'wp-tab-anchors', plugin_dir_url( __FILE__ ) . 'wp-tab-anchors.js', false, '1.3.0' );
	// only load jQuery.scrollTo if scrolling is enabled
	if ( get_option('wp_tab_anchors_auto_scrolling') == 'true') {
		wp_enqueue_script( 'jquery-scrollTo', plugin_dir_url( __FILE__ ) . 'jquery.scrollTo.min.js', array( 'jquery' ), '2.1.2' );
	}
}

add_action( 'wp_enqueue_scripts', 'scripts' );

function wp_tab_anchors_admin_menu(){
        add_options_page( 'WP Tab Anchors', 'WP Tab Anchors', 'manage_options' /* only Super Admins and Admins*/, 'wp-tab-anchors', 'wp_tab_anchors_init');
}

add_action('admin_menu', 'wp_tab_anchors_admin_menu');

function wp_tab_anchors_init(){
	$options = get_option('wp_tab_anchors_auto_scrolling');
	?>
	<style type="text/css">#wp-tab-anchors .form-table th{min-width:280px} #wp-tab-anchors input[type="text"]{min-width:100%}</style>
	<div id="wp-tab-anchors" class="wrap">
		<h2>WP Tab Anchors Settings</h2>
		<form method="post" action="options.php">
			<?php settings_fields( 'wp_tab_anchors-settings-group' ); ?>
			<?php do_settings_sections( 'wp_tab_anchors-settings-group' ); ?>
			<hr>
			<table class="form-table">
				<tr valign="top">
				<th scope="row">Scrolling Settings</th>
					<td>
						<input type="checkbox" id="wp_tab_anchors_auto_scrolling" name="wp_tab_anchors_auto_scrolling" value="true"<?php checked('true', get_option('wp_tab_anchors_auto_scrolling', 'true')); ?>/>
						<label for="wp_tab_anchors_auto_scrolling">Enable Automatic Scrolling</label>
					</td>
				</tr>
			</table>
			<?php submit_button(); ?>
		</form>
	</div>

	<?php
}

function wp_tab_anchors_plugin_settings() {
	register_setting( 'wp_tab_anchors-settings-group', 'wp_tab_anchors_auto_scrolling' );
}

add_action( 'admin_init', 'wp_tab_anchors_plugin_settings' );

?>