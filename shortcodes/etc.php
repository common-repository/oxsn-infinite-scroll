<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


//[oxsn_infinite_scroll_wrap class=""]
if ( ! function_exists ( 'oxsn_infinite_scroll_wrap_shortcode' ) ) {

	add_shortcode('oxsn_infinite_scroll_wrap', 'oxsn_infinite_scroll_wrap_shortcode');
	function oxsn_infinite_scroll_wrap_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_infinite_scroll_wrap_class = esc_attr($a['class']);

		return '<div class="oxsn_infinite_scroll_wrap ' . $oxsn_infinite_scroll_wrap_class . '">' . do_shortcode($content) . '</div>';
	}

}

//[oxsn_infinite_scroll_item class=""]
if ( ! function_exists ( 'oxsn_infinite_scroll_item_shortcode' ) ) {

	add_shortcode('oxsn_infinite_scroll_item', 'oxsn_infinite_scroll_item_shortcode');
	function oxsn_infinite_scroll_item_shortcode( $atts, $content = null ) {
		$content = shortcode_unautop(trim($content));
		$a = shortcode_atts( array(
			'class' => '',
		), $atts );

		$oxsn_infinite_scroll_item_class = esc_attr($a['class']);

		return '<div class="oxsn_infinite_scroll_item ' . $oxsn_infinite_scroll_item_class . '">' . do_shortcode($content) . '</div>';
	}

}


?>