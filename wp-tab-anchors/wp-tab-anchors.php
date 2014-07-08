<?php
/**
 * Plugin Name: WP Tab Anchors
 * Description: This plugin allows you to permalink (i.e., bookmark) to content on a Bootstrap or jQuery UI tab via hash tag links.
 * Version: 1.0.0
 * Author: Adam Carrier
 * Author URI: http://about.me/adamcarrier
 * License: GPLv2
 */

// safety first
if ( ! defined( 'ABSPATH' ) ) die;

function scripts() {
	wp_enqueue_script( 'wp-tab-anchors', plugin_dir_url( __FILE__ ) . 'wp-tab-anchors.js', false, '1.0.0' );
	wp_enqueue_script( 'jquery-scrollTo', plugin_dir_url( __FILE__ ) . 'jquery.scrollTo.min.js', array( 'jquery' ), '1.4.11' );
}

add_action( 'wp_enqueue_scripts', 'scripts' );

?>