<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
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
      <div class='menu-icon' id='hamburger'>
        <h4>Menu</h4>
      </div>
      <div class="mobile-menu" id="mobileMenu">
        <h1 id="title">DRT</h1>
        <aside class="exit" id="exit"><span>X<span></aside>
        <?php wp_nav_menu(array('theme_location' => 'mobile')); ?>
      </div>
    </header>
