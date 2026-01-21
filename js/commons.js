$(document).ready(function () {
  $(".toggle-mnu").click(function () {
    $(this).toggleClass("on");
    $(".main-mnu").slideToggle();
    return false;
  });

  $(".slider").slick({
    arrows: false,
    dots: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    speed: 800,
    // centerMode: true,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $(function () {
    $(".popup-modal").magnificPopup({
      type: "inline",
      preloader: false,
      focus: "#username",
      modal: true,
    });
    $(document).on("click", ".popup-modal-dismiss", function (e) {
      e.preventDefault();
      $.magnificPopup.close();
    });
  });
  $(".slider-card").slick({
    arrows: false,
    dots: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    // autoplay: true,
    speed: 1000,
    // centerMode: true,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        },
      },
      {
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".image-popup-vertical-fit").magnificPopup({
    type: "image",
    closeOnContentClick: true,
    mainClass: "mfp-img-mobile",
    image: {
      verticalFit: true,
    },
  });

  $(".image-popup-fit-width").magnificPopup({
    type: "image",
    closeOnContentClick: true,
    image: {
      verticalFit: false,
    },
  });

  $(".image-popup-no-margins").magnificPopup({
    type: "image",
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: "mfp-no-margins mfp-with-zoom", // class to remove default margin from left and right side
    image: {
      verticalFit: true,
    },
    zoom: {
      enabled: true,
      duration: 300, // don't foget to change the duration also in CSS
    },
  });
});

$(function () {
  $(".popup-modals").magnificPopup({
    mainClass: "mfp-forms",
    focus: "#username",
  });
  $(document).on("click", ".popup-modal-dismiss", function (e) {
    e.preventDefault();
    $.magnificPopup.close();
  });
});

// $(".top").click(function () {
//   $("html, body").animate({ scrollTop: 0 }, "slow");
//   return false;
// });

//Аякс отправка форм
//Документация: http://api.jquery.com/jquery.ajax/
$(".forms").submit(function () {
  $.ajax({
    type: "POST",
    url: "mail.php",
    data: $(this).serialize(),
  }).done(function () {
    alert("Спасибо за заявку!");
    setTimeout(function () {
      $.magnificPopup.close();
      $(".forms").trigger("reset");
    }, 1000);
  });
  return false;
});

//Chrome Smooth Scroll
//   try {
//     $.browserSelector();
//     if ($("html").hasClass("chrome")) {
//       $.smoothScroll();
//     }
//   } catch (err) {}

//   $("img, a").on("dragstart", function (event) {
//     event.preventDefault();
//   });
// });
