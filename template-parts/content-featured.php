<?php /* Template Name: Featured-story */

$sticky = get_option( 'sticky_posts' );
  if ( !empty( $sticky ) ) {  // don't show anything if there are no sticky posts
  $args = array(
      'posts_per_page' => -1,  // show all sticky posts
      'post__in'  => $sticky,
      'ignore_sticky_posts' => 1
  );
  $query = new WP_Query( $args );
  if ( $query->have_posts() ) {
      $query->the_post();
      ?>
        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <hr class="colored-divider"/>
        <br/>
        <?php the_post_thumbnail($size = 'featured-thumb'); ?>
        <?php the_content(); ?>
      <?php
  }
}
wp_reset_postdata();

?>
