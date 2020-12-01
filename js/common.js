$(function () {
	$('.carousel_slide_top').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		asNavFor: '.carousel_slide'
	});

	$('.carousel_slide').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: '.carousel_slide_top',
		fade: true,
		centerMode: true,
		focusOnSelect: true
	});


	// $('.carousel_slide_top').slick({
	// 	slidesToShow: 1,
	// 	slidesToScroll: 3,
	// 	arrows: false,
	// 	fade: true,
	// 	asNavFor: '.slider-nav'
	// });
	// $('.carousel_slide').slick({
	// 	slidesToShow: 1,
	// 	slidesToScroll: 3,
	// 	asNavFor: '.carousel_slide_top',
	// });
	//SVG Fallback
	if (!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function () {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function () { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change 
			data: th.serialize()
		}).done(function () {
			alert("Thank you!");
			setTimeout(function () {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if ($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch (err) {

	};

});


