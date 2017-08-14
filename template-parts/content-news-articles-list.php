<!-- Team News Loop -->
<div id="firstArticles" class="article-list">
  <h2><?php echo get_cat_name(16); ?></h2>
  <hr class="section-divider"/>
  <div class="row-content">
    <?php
      global $more;
      $more = 0;
      query_posts(array('category_name' => 'team-news'));
      if(have_posts()) : while(have_posts()) : the_post();?>

        <div class="article">
          <a href="<?php echo get_the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
          <h5><?php echo get_the_date(); ?></h5>
          <hr class="colored-divider"/>
          <article class="content-text">
            <a href="<?php echo esc_url( get_permalink()); ?>"><?php the_post_thumbnail(); ?></a>
            <?php the_content(); ?>
          </article>
        </div>

        <?php endwhile; endif;
      wp_reset_query();
    ?>
  </div>
</div>
<!-- Blog Loop -->
<div id="secondArticles" class="article-list center">
  <h2><?php echo get_cat_name(17); ?></h2>
  <hr class="colored-divider"/>
  <div class="row-content">
    <?php
      global $more;
      $more = 0;
      query_posts(array('category_name' => 'training-wisdom'));
      if(have_posts()) : while(have_posts()) : the_post();?>
      <div class="article">
        <a href="<?php echo get_the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        <h5><?php echo get_the_date(); ?></h5>
        <hr class="colored-divider"/>
        <article class="content-text">
          <a href="<?php echo esc_url( get_permalink()); ?>"><?php the_post_thumbnail(); ?></a>
          <?php the_content(); ?>
        </article>
      </div>
        <?php endwhile; endif;
      wp_reset_query();
    ?>
  </div>
</div>
