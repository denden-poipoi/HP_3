"use strict";
window.onunload = function() {};

function sizecheck() {
  w = window.innerWidth ? window.innerWidth : $(window).width();
  h = window.innerHeight ? window.innerHeight : $(window).height();
}

sizecheck();

$(function () {

  if (w > 769) {
} else { 
  $("header .drawer").click(function(){
  $('body').toggleClass('nav-open');
  $('header .navbar').fadeToggle(200);
    });

  $("header li a").click(function(){
  $('body').toggleClass('nav-open');
  $('header .navbar').fadeToggle(200);
    });
  }
}); 



// フェードイン

// フェードイン
function fadeIn(){
  // フェードアップ
  $('.fadeUpTrigger').each(function(){// fadeUpTriggerクラスの各要素に対して
    let scroll = $(window).scrollTop();// スクロール位置を取得する
    let triTop = $(this).offset().top + 200;// 要素の上部より100px下の位置を取得
    let winHeight = $(window).height();// ウィンドウの高さを取得
    if (scroll >= triTop - winHeight){ // 画面内に要素が入ったかを判断
      $(this).addClass('fadeUp');// fadeUpクラスを付与
    }else{
      $(this).removeClass('fadeUp');// fadeUpクラスを削除
    }
  });
}

$(window).scroll(function () {// スクロールしたら
  fadeIn();// 関数を実行
});

