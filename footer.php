<footer class=" footer">
  <ul class="footer_snslinks container">
    <li class="footer_snslink"><a href=""><i class="fa-brands fa-square-x-twitter"></i></a></li>
    <li class="footer_snslink"><a href=""><i class="fa-brands fa-square-pinterest"></i></a></li>
    <li class="footer_snslink"><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
    <li class="footer_snslink"><a href=""><i class="fa-brands fa-square-facebook"></i></a></li>
  </ul>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v6.4.2/js/all.js"></script>
<!-- <script src="/js/main.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() . '../js/main.js'; ?>"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() . '../js/main.js'; ?>"></script> -->
<script type="text/javascript">
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
  $(window).scroll(function() {
    FixedAnime(); //スクロールをするとハンバーガーメニューに変化するための関数を呼ぶ
  });

  // ページが読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function() {
    FixedAnime();
  });


  //ボタンをクリックした際のアニメーションの設定
  $(".openbtn").click(function() { //ボタンがクリックされたら
    $(this).toggleClass('active'); //ボタン自身に activeクラスを付与し
    $("#header").toggleClass('panelactive'); //ヘッダーにpanelactiveクラスを付与
  });
  $("#g-navi li a").click(function() { //ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active'); //ボタンの activeクラスを除去し
    $("#header").removeClass('panelactive'); //ヘッダーのpanelactiveクラスも除去
  });

  // ウィンドウのリサイズ時にも処理を実行
  $(window).resize(function() {
    // handleScrollAndResize();
    FixedAnime();
  });

  //リンク先のidまでスムーススクロール
  $('#g-navi li a').click(function() {
    var elmHash = $(this).attr('href');
    var pos = $(elmHash).offset().top - 0;
    $('body,html').animate({
      scrollTop: pos
    }, 1000);
    return false;
  });
  // ウィンドウの幅が767ピクセル以下の場合ハンバーガーメニューを表示
  $(window).resize(function() {
    if ($(window).width() <= 767) {
      $("#header").addClass("responsive"); // ハンバーガーメニュー表示用のクラスを追加
    } else {
      $("#header").removeClass("responsive"); // クラスが不要なら削除
    }
  });

  var swiper = new Swiper('.swiper', {
    direction: "vertical",
    slideToClickedSlide: true,
    mousewheel: true,
    slidesPerView: 1.5,
    spaceBetween: 15,
    centeredSlides: true,
    loop: true,
    breakpoints: {
      768: {
        direction: "horizontal",
        slidesPerView: 3,
        spaceBetween: 20,
        centeredSlides: true,
      },
      1600: {
        direction: "horizontal",
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
</script>
<!-- <?php
      // テーマフォルダ内の「my-script.js」を読み込む場合
      add_action('wp_enqueue_scripts', function () {
        wp_enqueue_script('my-script', get_template_directory_uri() . 'js/main.js');
      }); ?> -->

<?php
// テーマフォルダ内の「my-script.js」を読み込む場合
add_action('wp_enqueue_scripts', function () {
  wp_enqueue_script('my-script', get_template_directory_uri() . 'js/main.js');
});

// 出力結果
?>

</body>
</body>

<?php wp_footer(); ?>

</html>
