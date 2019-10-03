<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />

  <!-- 追加CSS -->
  <link href="<?php echo get_template_directory_uri();?>/css/custom.css" type="text/css" rel="stylesheet" />

  <!-- fontawesomeCDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

  <title>
    <?php bloginfo('name'); ?>
  </title>
  <?php wp_head(); ?>
</head>

<body>

  <!-- ヘッダー -->
  <header class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.svg" alt="<?php bloginfo('name'); ?>">
            </a>
          </h1>
          <small>
            <?php bloginfo('description'); ?></small>
        </div>

        <!-- カスタムメニュー（utility） -->
        <div class="col-md-6">
          <div class="row">
            <div id="utility_group" class="col-md-12 text-right d-none d-lg-block">
              <?php
      /*
      wp_nav_menu(array(
        'container' => 'ul',
        'container_id' => 'utility-nav',
        'theme_location' => 'place_utility',
        'menu_class' => 'list-inline',
      ));
      */
      ?>
            </div>
            <!-- /カスタムメニュー（utility） -->
            <div class="col-md-12 d-none d-lg-block" id="custom_menu">
              <?php echo get_search_form(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- /ヘッダー -->

  <!-- ナビゲーションバー -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <!-- サブコンポーネント -->
    <div class="container">
      <!-- ブランド -->
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>">X COFFEE</a>
      <!-- 切り替えボタン -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--  ナビゲーション -->
      <div class="collapse navbar-collapse" id="navbar-content">
        <!-- ナビゲーションメニュー -->
        <!-- 左側メニュー: トップページの各コンテンツへのリンク -->
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url('/'); ?>">トップ<span class="sr-only">(current)</span></a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url('/'); ?>#menu">メニュー</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url('/'); ?>#coupen">クーポン</a>
          </li>
          <!-- ドロップダウン -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              店舗情報
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo home_url('/'); ?>#shop">情報</a>
              <a class="dropdown-item" href="<?php echo home_url('/'); ?>#access">アクセス</a>
              <a class="dropdown-item" href="<?php echo home_url('/'); ?>privacy_policy">個人情報保護規約</a>
              <a class="dropdown-item" href="<?php echo home_url('/'); ?>sitemap">サイトマップ</a>
            </div>
          </li>
        </ul>

        <!-- 右側メニュー: Contactページへのリンク -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo home_url('/'); ?>/question/" class="nav-link btn btn-success text-white">お問い合わせ</a>
          </li>
          <li class="nav-item d-block d-md-none mt-1">
            <?php echo get_search_form(); ?>
          </li>
        </ul>
        <!-- /ナビゲーションメニュー -->
      </div>
    </div>
    <!-- /サブコンポーネント -->
  </nav>
  <!-- /ナビゲーションバー -->

  <!-- パンくずリスト -->
  <section id="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav>
            <?php
    if (!is_front_page() && function_exists('bread_crumb')) :
      bread_crumb('elm_class=breadcrumb bg-white px-0&elm_id=breadcrumb&li_class=breadcrumb-item&current_class=active');
    endif;
    ?>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- /パンくずリスト -->
