<!-- Team News Loop -->
<div id="firstArticles" class="article-list">
  <h3><?php echo get_cat_name(16); ?></h3>
  <hr class="colored-divider"/>
  <div class="row-content">
    <?php
      global $more;
      $more = 0;
      query_posts(array('category_name' => 'team-news'));
      if(have_posts()) : while(have_posts()) : the_post();?>
      <div class="article">
        <h4><?php the_title(); ?></h4>
        <h5><?php echo get_the_date(); ?></h5>
        <hr class="colored-divider"/>
        <article class="content-text">
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
  <h3><?php echo get_cat_name(17); ?></h3>
  <hr class="colored-divider"/>
  <div class="row-content">
    <?php
      global $more;
      $more = 0;
      query_posts(array('category_name' => 'training-wisdom'));
      if(have_posts()) : while(have_posts()) : the_post();?>
      <div class="article">
        <h4><?php the_title(); ?></h4>
        <h5><?php echo get_the_date(); ?></h5>
        <hr class="colored-divider"/>
        <?php if(has_post_thumbnail()){
          the_post_thumbnail('small');
        }?>
        <article class="content-text">
          <?php the_content(); ?>
        </article>
      </div>
        <?php endwhile; endif;
      wp_reset_query();
    ?>
  </div>
</div>
