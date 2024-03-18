<?php get_header(); ?>
<main>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <!-- 繰り返したい内容　ここから -->
      <li class="entry">
        <div class="entry__inner">
          <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail(); ?>" alt="">
          </a>
          <div class="entry__text">
            <p class="entry__time">
              <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            </p>
            <h2 class="entry__ttl">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>
          </div>
        </div>
      </li>
      <!-- 繰り返したい内容　ここまで -->
    <?php endwhile; ?>
  <?php else : ?>
    <p>まだ投稿はありません。</p>
  <?php endif; ?>
  <!-- <?php if (have_posts()) : ?>
    <section class="section">
  <section id="archive_blog wrapper" class="archive_blog">
    <h2 class="section_title">
      <img class="title_img" src="<?php echo get_template_directory_uri(); ?>/images/title_blog.png" alt="blog">
    </h2>
    <div class="section_inner">
      <header class="section_header">
        <h2 class="heading heading-primary"><span>最新情報</span>NEWS</h2>
        <div class="section_headerBtn"><a href="" class="btn btn-more">もっと見る</a></div>
      </header>
      <div class="section_body">
        <div class="cardList cardList-1row">
          <?php while (have_posts()) : the_post(); ?>
            <section id="post-<?php the_ID(); ?>" <?php post_class('cardList_item'); ?>>
              <a href="<?php the_permalink(); ?>" class="card">
                <?php
                $categories = get_the_category();
                if ($categories) :
                ?>
                  <div class="card_label">
                    <?php foreach ($categories as $category) : ?>
                      <span class="label label-black"><?php echo $category->name; ?></span>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
                <div class="card_pic">
                  <?php if (have_posts_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="">
                  <?php endif; ?>
                </div>
                <div class="card_body">
                  <h2 class="card_title"><?php the_title(); ?></h2>
                  <time datetime="2022-01-25"><?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?>更新</time>
                </div>
              </a>
            </section>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?> -->
  <!-- <section id="archive_blog wrapper" class="archive_blog">
    <h2 class="section_title">
      <img class="title_img" src="<?php echo get_template_directory_uri(); ?>/images/title_blog.png" alt="blog">
    </h2>
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="/single.html"><img class="blog_img" src="<?php echo get_template_directory_uri(); ?>/images/blog記事１.png" alt=""></a>
        </div>
        <div class="swiper-slide"><a href="/single.html"><img class="blog_img" src="<?php echo get_template_directory_uri(); ?>/images/blog記事２.png" alt=""></a>
        </div>
        <div class="swiper-slide"><a href="/single.html"><img class="blog_img" src="<?php echo get_template_directory_uri(); ?>/images/blog記事３.png" alt=""></a>
        </div>
        <div class="swiper-slide"><a href="/single.html"><img class="blog_img" src="<?php echo get_template_directory_uri(); ?>/images/blog記事１.png" alt=""></a>
        </div>
        <div class="swiper-slide"><a href="/single.html"><img class="blog_img" src="<?php echo get_template_directory_uri(); ?>/images/blog記事２.png" alt=""></a>
        </div>
        <div class="swiper-slide"><a href="/single.html"><img class="blog_img" src="<?php echo get_template_directory_uri(); ?>/images/blog記事３.png" alt=""></a>
        </div>
        <div class="swiper-slide"><a href="/single.html"><img class="blog_img" src="<?php echo get_template_directory_uri(); ?>/images/blog記事１.png" alt=""></a>
        </div>
        <div class="swiper-slide"><a href="/single.html"><img class="blog_img" src="<?php echo get_template_directory_uri(); ?>/images/blog記事２.png" alt=""></a>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </section> -->

  <section id="contact" class="contact">
    <div class="contact_container wrapper">
      <h2 class="section_title">CONTACT</h2>
      <div>LP制作、WEBページデザイン、コーディング等お気軽にご相談ください。</div>
      <a href="contactform.html"><button>お問い合わせ</button></a>
    </div>
  </section>

</main>
<?php get_footer(); ?>
