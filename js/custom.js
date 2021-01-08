/* wow */

new WOW().init();

/*        mobile-nav        */
jQuery(document).ready(function () {
  jQuery(".responsive-menu nav").meanmenu();
});

$(".banner-slider").slick({
  autoplay: true,
  dots: true,
  infinite: true,
  speed: 1500,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: $(".banner-arrow .prev"),
  nextArrow: $(".banner-arrow .next"),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      },
    },
  ],
});

$(".product-detail-banner").slick({
  autoplay: true,
  dots: true,
  infinite: true,
  speed: 1500,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: $(".banner-arrow .prev"),
  nextArrow: $(".banner-arrow .next"),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      },
    },
  ],
});

$(".test-slider").slick({
  autoplay: true,
  dots: false,
  infinite: true,
  speed: 1500,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: $(".test-arrow .prev"),
  nextArrow: $(".test-arrow .next"),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        dots: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
      },
    },
  ],
});

$(".news-slider").slick({
  autoplay: true,
  dots: false,
  infinite: true,
  speed: 1500,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        arrows: false,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});
$(document).ready(function () {
  var stickyOffset = $(".product-details-tab").offset().top;
  $(window).scroll(function () {
    var sticky = $(".product-details-tab"),
      scroll = $(window).scrollTop();
    if (scroll > stickyOffset) sticky.addClass("stick");
    else sticky.removeClass("stick");
  });

  $(".product-details-tab .nav-pills .nav-link").click(function (e) {
    e.preventDefault();
    var target = $($(this).attr("href"));
    if (target.length) {
      var scrollTo = target.offset().top - 70;
      $("body, html").animate({ scrollTop: scrollTo + "px" }, 800);
    }
  });
});
$(document).ready(function () {
  $("#lightgallery").lightGallery({
    flipHorizontal: false,
    flipVertical: false,
    rotateRight: false,
    rotateLeft: false,
    rotate: false,
    share: false,
    download: false,
  });
});
$(document).ready(function () {
  $("#mediagallery").lightGallery({
    flipHorizontal: false,
    flipVertical: false,
    rotateRight: false,
    rotateLeft: false,
    rotate: false,
    share: false,
    download: false,
  });
});
$(document).ready(function () {
  $("#awards").lightGallery({
    flipHorizontal: false,
    flipVertical: false,
    rotateRight: false,
    rotateLeft: false,
    rotate: false,
    share: false,
    download: false,
  });
});
$(document).ready(function () {
  $("#events").lightGallery({
    flipHorizontal: false,
    flipVertical: false,
    rotateRight: false,
    rotateLeft: false,
    rotate: false,
    share: false,
    download: false,
  });
});
