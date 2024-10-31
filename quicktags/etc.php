<?php


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if ( ! function_exists ( 'oxsn_infinite_scroll_quicktags' ) ) {

	add_action( 'admin_print_footer_scripts', 'oxsn_infinite_scroll_quicktags' );
	function oxsn_infinite_scroll_quicktags() {

		if ( wp_script_is( 'quicktags' ) ) {

		?>

			<script type="text/javascript">
				QTags.addButton( 'oxsn_infinite_scroll_wrap_quicktag', '[oxsn_infinite_scroll_wrap]', '[oxsn_infinite_scroll_wrap class=""]', '[/oxsn_infinite_scroll_wrap]', 'oxsn_infinite_scroll_wrap', 'Infinite Scroll Wrap', 201 );
				QTags.addButton( 'oxsn_infinite_scroll_item_quicktag', '[oxsn_infinite_scroll_item]', '[oxsn_infinite_scroll_item class=""]', '[/oxsn_infinite_scroll_item]', 'oxsn_infinite_scroll_item', 'Infinite Scroll Item', 202 );
			</script>

		<?php

		}

	}

}


?>