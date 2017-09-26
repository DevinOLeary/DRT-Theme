
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
        <div class="row-content">
          <a href="<?php echo esc_url( get_permalink()); ?>" class="article-image">
            <?php if(has_post_thumbnail()) {
              the_post_thumbnail('medium');
            }?>
          </a>
          <aside class="center text-colored">
            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
            <h5><?php echo get_the_date(); ?></h5>
            <br/>
            <h5>by <?php the_author(); ?></h5>
            <hr class="colored-divider"/>
            <article class="content-text">
              <?php the_content(); ?>
            </article>
          </aside>
        </div>
        <?php
    }
  }
  wp_reset_postdata();

  ?>
