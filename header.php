<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
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
        the_custom_logo(array('class' => 'animated fadeInDown'));
          }
      ?>
      <?php wp_nav_menu(array('theme_location' => 'main', 'container_class' => 'site-nav', 'container_id' => 'desktopMenu')); ?>

    <!-- Mobile -->
      <div class='menu-icon animated fadeIn' id='hamburger'>
        <h4>Menu</h4>
      </div>
      <div class="mobile-menu center" id="mobileMenu">
        <aside class="exit" id="exit"><span>X<span></aside>
        <div class="animated fadeInDown">
          <a href="<?php echo get_permalink(27); ?>"><h1 id="title">DRT</h1></a>
          <?php wp_nav_menu(array('theme_location' => 'mobile')); ?>
        </div>
      </div>
    </header>
