function resize() {
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();

	// STICKY FOOTER
	var footerHeight = $('footer').outerHeight();
	var footerTop = (footerHeight) * -1
	$('footer').css({marginTop: footerTop});
	$('#main-wrapper').css({paddingBottom: footerHeight});


	// FAQ
	var headerHeight = $('header').height() + 10;
	var faqHeight = $(window).innerHeight();
	var faqTotalHeight = faqHeight - headerHeight;
	$('.container-left').css('min-height',faqTotalHeight);
	// Wedding Post
	var weddingHeight = $('.wedding-right').height();
	$('.wedding-left').css('min-height',weddingHeight);

	gameIsotope();
}

// for games block isotope
function gameIsotope() {
	// var $container = $('#homegames-isotope');
	// var isoWidth = ($container.outerWidth() / 9);
	// $container.isotope({
		// itemSelector : '#homegames-isotope .item',
		// percentPosition: true,
		// masonry: {
			// columnWidth: isoWidth
		// }
	// });
}


$(window).resize(function() {
	resize();
});

$(document).ready(function() {
	resize();

	$(".inview").appear(function(){
		var elem = $(this);
		var animation = elem.data('animation')
		var animationDelay = elem.data('delay')
		setTimeout(function(){
			elem.addClass("visible animated " + animation);
		},animationDelay)
	});

	// fancybox
	$('.fancybox-video').fancybox({
		openEffect : 'fade',
		closeEffect: 'fade',
		width: 853,
		height: 480,
		padding: 6,
		autoScale : true,
		autoSize:true,
		type: 'iframe'
	});

	// Video Popup
	$(".video-popup").animatedModal({
		afterOpen: function() {
			var videoURL = $('#videoPlay').prop('src');
			videoURL += "&autoplay=1";
			$('#videoPlay').prop('src',videoURL);
		},
		beforeClose: function() {
			var videoURL = $('#videoPlay').prop('src');
			videoURL = videoURL.replace("&autoplay=1", "");
			$('#videoPlay').prop('src','');
			$('#videoPlay').prop('src',videoURL);
		},
	});

});

$(window).load(function() {
	resize();
});

// preloader once done
Pace.on('done', function() {
	// totally hide the preloader especially for IE
	setTimeout(function() {
		$('.pace-inactive').hide();
	}, 500);
});
