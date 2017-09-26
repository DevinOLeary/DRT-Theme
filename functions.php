<?php
// Import stylesheet
function DRT_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_register_style('animations', get_template_directory_uri() . '/bower_components/animate.css/animate.min.css');
  wp_enqueue_style('animations');
  wp_register_script('main', get_template_directory_uri() . '/build/js/main.js', array('jquery'), true);
  wp_enqueue_script('main');
  wp_register_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array('jquery'), true);
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'DRT_resources');

function theme_features() {
  if (function_exists('add_theme_support')) {
  //add featured image
  add_theme_support('post-thumbnails');
  //image size
  add_image_size('rider-thumb', 250, 250, array('center', 'center'));
  add_image_size('rider-profile', 200, 200, array('center', 'center'));
  //theme logo
  add_theme_support( 'custom-logo', array(
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-logo'),
  ) );
  }
}

add_action('after_setup_theme', 'theme_features');


function DRT_features() {
  if (function_exists('add_theme_support')) {
  //add menus
  add_theme_support('menus');
  register_nav_menu('main', 'Header Menu');
  register_nav_menu('mobile', 'Mobile Menu');
  register_nav_menu('footer', 'Footer Menu');
  //post-formats to post-type page
  add_post_type_support( 'page', 'post-formats' );
  register_taxonomy_for_object_type( 'post_format', 'page' );
  }
}
add_action('init', 'DRT_features');



// title tags
add_theme_support('title-tag');


// Post Excerpt more link
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
