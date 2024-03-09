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
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/main.js'; ?>"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri() . './js/main.js'; ?>"></script> -->

<!-- <?php
      // テーマフォルダ内の「my-script.js」を読み込む場合
      add_action('wp_enqueue_scripts', function () {
        wp_enqueue_script('my-script', get_template_directory_uri() . 'js/main.js');
      }); ?> -->

<!-- <?php
      // テーマフォルダ内の「my-script.js」を読み込む場合
      add_action('wp_enqueue_scripts', function () {
        wp_enqueue_script('my-script', get_template_directory_uri() . '../js/main.js');
      });

      // 出力結果
      ?> -->

</body>
</body>

<?php wp_footer(); ?>

</html>
