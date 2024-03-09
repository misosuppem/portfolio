<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome To Myportfolio</title>
  <meta name="description" content="misosuppe's portfolio.">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
  <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" media="screen">
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_archive.css" type="text/css" media="screen"> -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_contactform.css" type="text/css" media="screen">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_single.css" type="text/css" media="screen">
  <?php wp_head(); ?>
</head>

<body>
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
  <div class="openbtn">
    <span></span>
    <span></span>
    <span></span>
  </div>
