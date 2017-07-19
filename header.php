<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class="site-header">
      <?php
          if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
          }
      ?>
      <?php wp_nav_menu(array('theme_location' => 'main', 'container_class' => 'site-nav', 'container_id' => 'desktopMenu')); ?>

    <!-- Mobile -->
    <div class='menu-icon' id='hamburger'><h3>Menu</h3></div>
      <div class="mobile-menu hide" id="mobileMenu">
        <h1>DRT</h1>
        <aside class="exit" id="exit"><span>X<span></aside>
        <?php wp_nav_menu(array('theme_location' => 'mobile')); ?>
      </div>
    </header>
