<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <meta name="description" content="misosuppe's portfolio.">

  <?php
  wp_enqueue_style('fonr-awesome', 'https://use.fontawesome.com/releases/v6.4.2/css/all.css');
  wp_enqueue_style('ress-min-css', 'https://unpkg.com/ress@4.0.0/dist/ress.min.css');
  wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
  wp_enqueue_style('style-css', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style('style-contactform-css', get_template_directory_uri() . '/css/style_contactform.css');
  wp_enqueue_style('style-single-css', get_template_directory_uri() . '/css/style_single.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('misosuppe-portfolio-main', get_template_directory_uri() . '/js/main.js');
  wp_head();
  ?>
</head>

<bodyy<?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="header">
    <div class="header-nav-container">
      <nav id="g-navi">
        <ul>
          <li><a href="/index.php#about">ABOUT</a></li>
          <li><a href="/index.php#work">WORK</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/archive.php">BLOG</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>/contactform.php">CONTACT</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- <div class="openbtn">
    <span></span>
    <span></span>
    <span></span>
  </div> -->
