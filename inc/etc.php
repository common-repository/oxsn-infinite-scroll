<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_infinite_scroll_inc_css' ) ) {

	add_action( 'wp_enqueue_scripts', 'oxsn_infinite_scroll_inc_css' );
	function oxsn_infinite_scroll_inc_css() {

		wp_enqueue_style( 'oxsn_infinite_scroll_etc_css', oxsn_infinite_scroll_plugin_dir_url . 'inc/css/etc.css', array(), '1.0.0', 'all' ); 

	}

}

if ( ! function_exists ( 'oxsn_infinite_scroll_inc_js' ) ) {

	add_action( 'wp_enqueue_scripts', 'oxsn_infinite_scroll_inc_js' );
	function oxsn_infinite_scroll_inc_js() {

		wp_enqueue_script( 'oxsn_infinite_scroll_min_js', oxsn_infinite_scroll_plugin_dir_url . 'inc/js/jquery.infinitescroll.min.js', array('jquery'), '2.1.0', true );
		wp_enqueue_script( 'oxsn_infinite_scroll_isotope_js', oxsn_infinite_scroll_plugin_dir_url . 'inc/js/masonry-isotope.js', array('jquery'), '2.1.0', true );
		wp_enqueue_script( 'oxsn_infinite_scroll_manual_js', oxsn_infinite_scroll_plugin_dir_url . 'inc/js/manual-trigger.js', array('jquery'), '2.1.0', true );
		wp_enqueue_script( 'oxsn_infinite_scroll_etc_js', oxsn_infinite_scroll_plugin_dir_url . 'inc/js/etc.js', array(), '0.0.1', 'all' ); 

	}

}

if ( ! function_exists ( 'oxsn_infinite_scroll_footer_inc' ) ) {

	add_action( 'wp_footer', 'oxsn_infinite_scroll_footer_inc');
	function oxsn_infinite_scroll_footer_inc() { 

		require_once( oxsn_infinite_scroll_plugin_dir_path . 'inc/php/etc.php' );

	}	

}


?>