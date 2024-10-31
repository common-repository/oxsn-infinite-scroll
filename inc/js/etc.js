(function($) {

	var l = window.location;
	var templateDir = document.domain;
	var $infiniteContainer = $('.oxsn_infinite_scroll_wrap');

	$infiniteContainer.infinitescroll({

		navSelector  : ".pagination",

		nextSelector : ".pagination a.next",

		itemSelector : ".oxsn_infinite_scroll_item",

		loading: {

			finishedMsg: 'All Content Loaded..',

			img: oxsn_site_url + '/wp-content/plugins/oxsn-infinite-scroll/inc/img/ajax-loader.gif',

			msgText: '',

		},

	});

})(jQuery);
