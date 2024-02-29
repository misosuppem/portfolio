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

var swiper = new Swiper('.swiper', {
  // direction: "vertical",
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
