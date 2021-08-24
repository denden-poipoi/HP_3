"use strict";

$(window).scroll(function () {
  // スクロールしたら
  fadeIn(); // 関数を実行
});
//スライドショー
$(".slider-3").slick({
  cssEase: "ease", // 画像下のドット（ページ送り）を表示
  dotsClass: "slide-dots",
  autoplay: true,
  autoplaySpeed: 4000,
  infinite: true,
  arrows: true,
  slidesToShow: 4,
  slidesToScroll: 4, // スライドのスクロール数
  responsive: [
    {
      breakpoint: 1025, // 768~1023px以下のサイズに適用
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      },
    },
    {
      breakpoint: 769, // 480〜767px以下のサイズに適用
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 376, // 〜479px以下のサイズに適用
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});


var $slide = $(".slide")
  .slick({
    infinite: true, // 永続化
    slidesToShow: 1, // スライド数
    slidesToScroll: 1, // スライドのスクロール数
    arrows: false,
    fade: true,
    speed: 1000,
    autoplaySpeed: 3000,
    autoplay: true,
  })
  .on({
    beforeChange: function (event, slick, currentSlide, nextSlide) {
      $(".slick-slide", this).eq(currentSlide).addClass("preve-slide");
      $(".slick-slide", this).eq(nextSlide).addClass("slide-animation");
    },
    afterChange: function () {
      $(".preve-slide", this).removeClass("preve-slide slide-animation");
    },
  });
$slide.find(".slick-slide").eq(0).addClass("slide-animation");
