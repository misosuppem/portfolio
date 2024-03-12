<?php get_header(); ?>
<main>

  <div class="cover">
    <img class="cover_img" src="<?php echo get_template_directory_uri(); ?>/images/MV.png" alt="">
    <h1 class="cover_text">Welcome To Myportfolio</h1>
  </div>

  <section id="about" class="about">
    <h2 class="section_title">
      <img class="title_img" src="<?php echo get_template_directory_uri(); ?>/images/title_about.png" alt="">
      <!-- <img class="title_img" src="/images/title_about.png" alt="about"> -->
    </h2>
    <div class="about_container wrapper">
      <div class="introducion_container">
        <div class="introducion">
          <div class="ribbon">
            introduction
          </div>
          <p class="introduction_text">
            こんにちは！サイトを見てくださりありがとうございます。自転車好きなWebデザイナー、みぞずっぺです。<br><br>自転車の旅の中で見つけた色々なデザインを反映させて、wordpressを使った使いやすいウェブサイトを作ります。<br><br>一緒に素敵なwebサイトを作るのを楽しみにしています。お気軽にお問い合わせください！
          </p>
        </div>
      </div>
      <div class="myskills_container">
        <ul>
          <li class="skills_title_box">
            <p class="skills_title">My Skills</p>
          </li>
          <li class="skill_box">
            <p class="skill">Photoshop</p>
          </li>
          <li class="skill_box">
            <p class="skill">Illustrator</p>
          </li>
          <li class="skill_box">
            <p class="skill">HTML</p>
          </li>
          <li class="skill_box">
            <p class="skill">CSS</p>
          </li>
          <li class="skill_box">
            <p class="skill">jQuery</p>
          </li>
          <li class="skill_box">
            <p class="skill">WordPressDesign</p>
          </li>
          <li class="skill_box">
            <p class="skill">Graphic Design</p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section id="work" class="work">
    <h2 class="section_title">
      <img class="title_img" src="<?php echo get_template_directory_uri(); ?>/images/title_work.png" alt="work">
    </h2>
    <div class="swiper-area">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide1">
            <p>commingsoon</p>
          </div>
          <div class="swiper-slide">
            <p>commingsoon</p>
          </div>
          <div class="swiper-slide">
            <p>commingsoon</p>
          </div>
          <div class="swiper-slide">
            <p>commingsoon</p>
          </div>
          <div class="swiper-slide">
            <p>commingsoon</p>
          </div>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section>

  <section id="blog" class="blog">
    <h2 class="section_title">
      <img class="title_img" src="<?php echo get_template_directory_uri(); ?>/images/title_blog.png" alt="blog">
    </h2>
    <div class="blog_container container">
      <div class="golden-ratio no-sp">
        <div class="blog_content one">
          <?php
          $data = get_posts('post_type=post&posts_per_page=1');
          if (isset($data[0])) :
          ?>

            <!-- リンク -->
            <a href="<?php echo esc_url(get_permalink($data[0]->ID)); ?>" class="post-link">
              <!-- タイトル表示 -->
              <h2 class="post-title"><?php echo esc_html($data[0]->post_title); ?></h2>

              <!-- 本文から最初の画像を取得して表示 -->
              <?php
              $content = apply_filters('the_content', $data[0]->post_content);
              $doc = new DOMDocument();
              libxml_use_internal_errors(true);
              $doc->loadHTML($content);
              libxml_clear_errors();

              $xpath = new DOMXPath($doc);
              $src = $xpath->evaluate("string(//img/@src)");

              if ($src) {
                echo '<img src="' . esc_url($src) . '" alt="Post Image" class="post-image">';
              } else {
                echo '<p class="no-image-message">No image found in the content.</p>';
              }
              ?>
            </a>

          <?php endif; ?>
        </div>
        <div class="blog_content two">
          <?php
          $data = get_posts('post_type=post&posts_per_page=2'); // 2番目の記事まで取得

          if (isset($data[1])) : // インデックス1の記事が存在する場合
          ?>
            <!-- リンクとタイトル取得 -->
            <a href="<?php echo esc_url(get_permalink($data[1]->ID)); ?>" class="post-link">
              <!-- タイトル表示 -->
              <h2 class="post-title"><?php echo esc_html($data[1]->post_title); ?></h2>
            </a>

            <!-- 本文から最初の画像を取得して表示 -->
            <?php
            $content = apply_filters('the_content', $data[1]->post_content);
            $doc = new DOMDocument();
            libxml_use_internal_errors(true);
            $doc->loadHTML($content);
            libxml_clear_errors();

            $xpath = new DOMXPath($doc);
            $src = $xpath->evaluate("string(//img/@src)");

            if ($src) {
              echo '<img src="' . esc_url($src) . '" alt="Post Image" class="post-image">';
            } else {
              echo '<p class="no-image-message">No image found in the content.</p>';
            }
            ?>
          <?php endif; ?>
        </div>

        <div class="blog_content three">
          <?php
          $data = get_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'offset' => 2, // 最新から3番目の投稿（0から数えるので2）
          ));

          if (!empty($data)) : // 取得したデータがある場合
          ?>
            <!-- リンクとタイトル取得 -->
            <a href="<?php echo esc_url(get_permalink($data[0]->ID)); ?>" class="post-link">
              <!-- タイトル表示 -->
              <h2 class="post-title"><?php echo esc_html($data[0]->post_title); ?></h2>
            </a>

            <!-- 本文から最初の画像を取得して表示 -->
            <?php
            $content = apply_filters('the_content', $data[0]->post_content);
            $doc = new DOMDocument();
            libxml_use_internal_errors(true);
            $doc->loadHTML($content);
            libxml_clear_errors();

            $xpath = new DOMXPath($doc);
            $src = $xpath->evaluate("string(//img/@src)");

            if ($src) {
              echo '<img src="' . esc_url($src) . '" alt="Post Image" class="post-image">';
            } else {
              echo '<p class="no-image-message">No image found in the content.</p>';
            }
            ?>
          <?php endif; ?>
        </div>

        <a class= "post-links" href="/archive.php">
          <div class="blog_content four">
            <p>read_more</p>
          </div>
        </a>
      </div>
      <div class="blog_content no-pc">
        <!-- <a class="no-pc" href="<?php echo get_template_directory_uri(); ?>./archive.html"> -->
        <!-- <a class="no-pc" href="<?php echo get_template_directory_uri(); ?>../archive.html#archive_blog"> -->
        <!-- <a class="no-pc" href="<?php echo get_template_directory_uri(); ?>../archive.html#archive_blog"> -->
        <a class="no-pc" href="<?php echo get_template_directory_uri(); ?>./archive.php">
          <p>read_more</p>
        </a>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <div class="contact_container wrapper">
      <h2 class="section_title">CONTACT</h2>
      <div>LP制作、WEBページデザイン、コーディング等お気軽にご相談ください。</div>
      <a href="/contactform.html"><button>お問い合わせ</button></a>
    </div>
  </section>

</main>
<?php get_footer(); ?>
