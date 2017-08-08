<?php
// Import stylesheet
function DRT_resources() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_register_script('main', get_template_directory_uri() . '/build/js/main.js', array('jquery'), true);
  wp_enqueue_script('main');
  wp_register_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array('jquery'), true);
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'DRT_resources');

function theme_features() {
  //theme logo
  add_theme_support( 'custom-logo', array(
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-logo'),
  ) );
  //image sizes
  add_image_size( 'logo', $width = 56, $height = 145, $crop = false );
  //post formats
  add_theme_support( 'post-formats', array( 'aside', 'image' ) );

}

add_action('after_setup_theme', 'theme_features');


function DRT_features() {
  //add menus
  add_theme_support('menus');
  register_nav_menu('main', 'Header Menu');
  register_nav_menu('mobile', 'Mobile Menu');
  register_nav_menu('footer', 'Footer Menu');
  //add featured image
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 300, 300, true);
  //post-formats to post-type page
  add_post_type_support( 'page', 'post-formats' );
  register_taxonomy_for_object_type( 'post_format', 'page' );
}
add_action('init', 'DRT_features');



// title tags
add_theme_support('title-tag');


// Filters
function wpb_autolink_featured_images( $html, $post_id, $post_image_id, $overlay ) {

$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
return $html;
}
add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );



?>
