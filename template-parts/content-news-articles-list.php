<!-- Team News Loop -->

<div id="firstArticles" class="article-list">
  <h2><?php echo get_cat_name(16); ?></h2>
  <hr class="section-divider"/>
  <div class="row-content">
    <?php
    // set the "paged" parameter
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    // the query
    $the_query = new WP_Query( 'cat=16&paged=' . $paged );
    ?>
    <?php if ( $the_query->have_posts() ) : ?>
      <?php
      // the loop
      while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
        <div class="article">
          <a href="<?php echo get_the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
          <h5><?php echo get_the_date(); ?></h5>
          <hr class="colored-divider"/>
          <article class="content-text">
            <a href="<?php echo esc_url( get_permalink()); ?>"><?php the_post_thumbnail(); ?></a>
            <?php the_content(); ?>
          </article>
        </div>

      <?php endwhile;?>
    <?php else:  ?>
      <p><?php _e( 'Sorry, there are no posts in this group.' ); ?></p>
    <?php endif;?>
  </div>
</div>
<!-- Blog Loop -->
<div id="secondArticles" class="article-list center">
  <h2><?php echo get_cat_name(17); ?></h2>
  <hr class="section-divider"/>
  <div class="row-content">
    <?php
    // set the "paged" parameter
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    // the query
    $the_query = new WP_Query( 'cat=17&paged=' . $paged );
    ?>
    <?php if ( $the_query->have_posts() ) : ?>
      <?php
      // the loop
      while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>
        <div class="article">
          <a href="<?php echo get_the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
          <h5><?php echo get_the_date(); ?></h5>
          <hr class="colored-divider"/>
          <article class="content-text">
            <a href="<?php echo esc_url( get_permalink()); ?>"><?php the_post_thumbnail(); ?></a>
            <?php the_content(); ?>
          </article>
        </div>

      <?php endwhile;?>
    <?php else:  ?>
      <p><?php _e( 'Sorry, there are no posts in this group.' ); ?></p>
    <?php endif;?>
  </div>
</div>
