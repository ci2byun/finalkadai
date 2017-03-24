(function($){
	var $jsPagetop = $('#js-pageTop');
	var DURATION = 600;

	$jsPagetop.on('click', function (e) {
		e.preventDefault();
		$('html, body').stop().animate({
			scrollTop: 0
		}, DURATION, 'easeOutQuad');
	});
})(jQuery);
