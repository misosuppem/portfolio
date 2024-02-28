// //ハンバーガーメニュー
// var hamburger = $('.hamburger-menu');

// // OPEN/CLOSEボタンをクリックしたら
// $('.hamburger-button').on('click', function () {

//   // .hamburgerの表示・非表示を繰り返す
//   hamburger.toggleClass('hamburger-menu-active');

// });

// // 画面幅のサイズが変わったら
// $(window).on('resize', function () {
//   // console.log('resize');

//   // ハンバーガーメニューを閉じる
//   hamburger.removeClass('hamburger-menu-active');
// });



//スクロールをするとハンバーガーメニューに変化するための設定を関数でまとめる
function FixedAnime() {
  var windowWidth = $(window).width();
  var headerH = $('#header').outerHeight(true);
  var scroll = $(window).scrollTop();

  if (windowWidth <= 767 || scroll >= headerH) {
    $('.openbtn').addClass('fadeDown');
    $('#header').addClass('dnone');
  } else {
    $('.openbtn').removeClass('fadeDown');
    $('#header').removeClass('dnone');
  }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  FixedAnime();//スクロールをするとハンバーガーメニューに変化するための関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  FixedAnime();
});


//ボタンをクリックした際のアニメーションの設定
$(".openbtn").click(function () {//ボタンがクリックされたら
  $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
  $("#header").toggleClass('panelactive');//ヘッダーにpanelactiveクラスを付与
});
$("#g-navi li a").click(function () {//ナビゲーションのリンクがクリックされたら
  $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
  $("#header").removeClass('panelactive');//ヘッダーのpanelactiveクラスも除去
});

// ウィンドウのリサイズ時にも処理を実行
$(window).resize(function () {
  // handleScrollAndResize();
  FixedAnime();
});

//リンク先のidまでスムーススクロール
//※ページ内リンクを行わない場合は不必要なので削除してください
$('#g-navi li a').click(function () {
  var elmHash = $(this).attr('href');
  var pos = $(elmHash).offset().top - 0;
  $('body,html').animate({ scrollTop: pos }, 1000);
  return false;
});
// ウィンドウの幅が767ピクセル以下の場合ハンバーガーメニューを表示
$(window).resize(function () {
  if ($(window).width() <= 767) {
    $("#header").addClass("responsive"); // ハンバーガーメニュー表示用のクラスを追加
  } else {
    $("#header").removeClass("responsive"); // クラスが不要なら削除
  }
});


// var swiper = new Swiper('.swiper', {
//   loop: true,
//   slidesPerView: 1,
//   spaceBetween: 58,
//   breakpoints: {
//     768: {
//       slidesPerView: 3,
//       spaceBetween: 80,
//       centeredSlides: true,
//     },
//   },
//   pagination: {
//     el: '.swiper-pagination',
//     type: 'fraction',
//     formatFractionCurrent: function (n) {
//       return '0' + n;
//     },
//     formatFractionTotal: function (n) {
//       return '0' + n;
//     },
//   },
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },
// });

// const mySwiper = new Swiper('.swiper', {
//   // Optional parameters
//   loop: true,

//   // If we need pagination
//   pagination: {
//     el: '.swiper-pagination',
//   },

//   // Navigation arrows
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev',
//   },

//   //And if we need scrollbar
//   scrollbar: {
//     el: '.swiper-scrollbar',
//   },
// });

var swiper = new Swiper('.swiper', {
  slidesPerView: 1,
  spaceBetween: 29,
  centeredSlides: true,
  loop: true,
  breakpoints: {
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
      centeredSlides: true,
    },
    1600: {
      slidesPerView: 3,
      spaceBetween: 40,
      centeredSlides: true,
    },
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

$(".appeal h3").on("click", function (e) {
  $(this).toggleClass("open");
  $(this).next().slideToggle();
});


$(".hamburger_icon").on("click", function (e) {
  $(".hamburger-nav").slideToggle();
});
