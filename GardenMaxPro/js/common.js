

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
$(".toggle-mnu").click(function() {
		$(this).toggleClass("on");
		$(this).parent().next().next().find(".main-mnu").slideToggle();
		return false;
	});


	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

$(window).load(function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

});


