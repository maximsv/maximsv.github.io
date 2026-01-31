$(function () {
   // $('.carousel_slide_top').slick({
   //    slidesToShow: 3,
   //    slidesToScroll: 1,
   //    autoplay: true,
   //    asNavFor: '.carousel_slide'
   // });
   //
   // $('.carousel_slide').slick({
   //    slidesToShow: 1,
   //    slidesToScroll: 1,
   //    asNavFor: '.carousel_slide_top',
   //    fade: true,
   //    centerMode: true,
   //    focusOnSelect: true
   // });
   $('.image-popup-vertical-fit').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      mainClass: 'mfp-img-mobile',
      image: {
         verticalFit: true
      }

   });

   $('.image-popup-fit-width').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      image: {
         verticalFit: false
      }
   });

   $('.image-popup-no-margins').magnificPopup({
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
      mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
      image: {
         verticalFit: true
      },
      zoom: {
         enabled: true,
         duration: 300 // don't foget to change the duration also in CSS
      }
   });



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
$(function(){
   $('.minimized').click(function(event) {
      var i_path = $(this).attr('src');
      $('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div>');
      $('#magnify').css({
         left: ($(document).width() - $('#magnify').outerWidth())/2,
         top: ($(window).height() - $('#magnify').outerHeight())/2
      });
      $('#overlay, #magnify').fadeIn('fast');
   });

   $('body').on('click', '#close-popup, #overlay', function(event) {
      event.preventDefault();

      $('#overlay, #magnify').fadeOut('fast', function() {
         $('#close-popup, #magnify, #overlay').remove();
      });
   });
});


