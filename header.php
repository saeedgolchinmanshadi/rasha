<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="wrapper">
    <header class="header">
      <div class="access-wrapper hidden-xs">
        <div class="logo">
          <a href="<?php echo esc_url(home_url()) ?>" class="flex-row-center">
            <img height="48" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="logo" />
            <span class="name-site"><?php echo bloginfo('name')  ?></span>
          </a>
        </div>
        <nav role="navigation">
          <?php wp_nav_menu(array('theme_location' => 'primary', 'container_class' => 'nav-menu', 'menu_class' => 'nav-menu-list'));  ?>
        </nav>
        <div class="header-left">
          <a class="icon" target="_blank" href="mailto:info@rashaceram.com">
            <span><i class="icon-mail-line"></i></span>
          </a>
          <a class="icon" href="https://www.instagram.com/rashaceramyazd.co" target="_blank">
            <span><i class="icon-instagram-line"></i></span>
          </a>
          <a href="<?php
                    $current_lang = get_locale();
                    if ($current_lang === 'ru_RU') {
                      echo "/ru/?s";
                    } else {
                      echo  "/?s";
                    }
                    ?>">
            <span><i class="icon-search-line"></i></span>
          </a>

          <?php show_lang_switcher_ru_en(); ?>

        </div>
      </div>
    </header> <!-- end .header -->
    <!-- Mobile -->
    <div class="mobile hide bg1 mobile-header">
      <div>
        <div class="header-right-mob  relative">
          <i class="icon-menu-fill"></i>
        </div>
        <div class="mobile-header-name pad-10">
          <a href="<?php echo esc_url(home_url()); ?>">
            <img height="25" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="logo" />
            <strong><?php echo bloginfo('name')  ?></strong>
          </a>
        </div>
        <div class="icon-box pull-right pad-10">
          <div class="header-left">
            <a class="icon" target="_blank" href="mailto:info@rashaceram.com">
              <span><i class="icon-mail-line"></i></span>
            </a>
            <a class="icon" href="<?php echo esc_url(home_url()) ?>">
              <span><i class="icon-instagram-line"></i></span>
            </a>
            <a href="<?php
                      $current_lang = get_locale();
                      if ($current_lang === 'ru_RU') {
                        echo "/ru/?s";
                      } else {
                        echo  "/?s";
                      }
                      ?>">
              <span><i class="icon-search-line"></i></span>
            </a>

            <?php show_lang_switcher_ru_en(); ?>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="mobile-menu-right">
        <div class="mobile-menu-logo align-center pad-t20 pad-b20">
          <a href="<?php echo esc_url(home_url()); ?>">
            <img height="50" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="logo" />
          </a>
          <h2 class="color1 font-s16 pad-t10"><?php echo bloginfo('name')  ?></h2>
        </div>
        <div class="mobile-menu font-s13">
          <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false)); ?>
        </div>
      </div>
      <div class="mob-swipe-bg"></div>
      <div class="mobile-search hide">
        <form method="get" class="mobile-search-form" action="<?php echo esc_url(home_url()); ?>">
          <div class="mobile-site-search">
            <i class="icon-android-close search-close"></i>
            <div class="mobile-search-input-box">
              <input class="mobile-search-input" name="s" type="search" placeholder="جستجو کنید ...">
            </div>
          </div>
        </form>
      </div>
    </div>