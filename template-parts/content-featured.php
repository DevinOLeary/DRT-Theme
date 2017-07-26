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
        <h3><?php the_title(); ?></h3>
        <p>written <?php the_date();?></p>
        <hr class="colored-divider"/>
        <p><?php the_content(); ?></p>
      <?php
  }
}
wp_reset_postdata();

?>
