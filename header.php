<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>浅野春菜ポートフォリオサイト</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__inner inner">
      <h1 class="header__logo">
        <a href="/port/">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
        </a>
      </h1>
      <div class="sp__hamburger sp">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="nav__circle"></div>
      <nav class="nav__menu">
        <!-- <div class="nav__menu--scroll"> -->
          <ul>
            <li><a href="/port/#worksitem">製作物</a></li>
            <li><a href="/port/#mind">コーディングをする上での考え方</a></li>
          </ul>
        <!-- </div> -->
      </nav>
    </div>
  </header>