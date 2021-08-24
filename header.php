<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0, viewport-fit=cover" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <link rel="icon" type="image/x-icon" href="">
  <link rel="apple-touch-icon" sizes="180×180" href="">
  <!--slick-->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/slick/slick-theme.css" />

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/reset.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style_photos.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style_contact.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style_archive.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style_single.css" />



  <!--フォント-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="header_all">
      <nav class="navbar">
<!--
          <ul>
          <li><a href="<?php echo get_template_directory_uri();?>/index.html">home</a></li>
          <li><a href="<?php echo get_template_directory_uri();?>/html/photos.html">photos</a></li>
          <li><a href="<?php echo get_template_directory_uri();?>/html/contact.html">contact</a></li>
          <li><a href="<?php echo get_template_directory_uri();?>/html/blog.html">blog</a></li>
        </ul>
-->
 <?php
    $args = array(
      'menu' => 'menu', // 管理画面で作成したメニュー名
      'menu_class' => '', // メニューを構成するulタグのクラス名
      'container' => false, // <ul>タグを囲んでいる<div>タグを削除
     );

       // カスタムメニューを表示
       wp_nav_menu($args);
     ?>
      </nav>
    </div>
    <p class="drawer"></p>
  </header>