<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php  if(is_front_page()): ?>
      <header class="site-header clear-background">
      <?php else: ?>
      <header class="site-header">
    <?php endif; ?>
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
        <a href="<?php echo get_permalink(27); ?>"><h1 id="title">DRT</h1></a>
        <aside class="exit" id="exit"><span>X<span></aside>
        <?php wp_nav_menu(array('theme_location' => 'mobile')); ?>
      </div>
    </header>
