
(function($, window, document) {
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
	});

	$(window).load(function() {
		var picContainer = $('.feature-pic');
		$.each(picContainer, function(k, v) {
			var container = $(this);
			var bgURL = container.find('img').attr('src');
			container.css('background-image', 'url(' + bgURL + ')'); 
		});

		var featureList = $('.feature-list').find('li');
		$.each(featureList,function(v, k) {
			var container = $(this); // li
			var next = container.find('div.feature-pic');
			var target = container.find('.featured-content');
			target.parent('p').remove();
			container.append(target);

		});
	});

	// preloader once done
	Pace.on('done', function() {
		// totally hide the preloader especially for IE
		setTimeout(function() {
			$('.pace-inactive').hide();
		}, 500);
	});

	$('.topic').find('.title').on('click', function(e){
		e.preventDefault();
		var $target = $(this).parent();

		if($target.find('.description').hasClass('show')) return;

		$('.description').removeClass('show');
		$target.find('.description').addClass('show');

	});

	
})(jQuery, window, document);