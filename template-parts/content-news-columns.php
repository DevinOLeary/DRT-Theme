<!-- Team News Loop -->
<div>
  <h3><?php the_category(15); ?></h3>
    <hr class="colored-divider"/>
  <?php
    global $more;
    $more = 0;
    query_posts(array('category_name' => 'team-news'));
    if(have_posts()) : while(have_posts()) : the_post();?>
    <ul class="news-columns">
      <li class="center">
        <h4><?php the_title(); ?></h4>
        <h5><?php the_date(); ?></h5>
        <hr class="colored-divider"/>
        <article class="content-text">
          <?php the_content(); ?>
        </article>
      </li>
    </ul>
      <?php endwhile; endif;
    wp_reset_query();
  ?>
</div>
<!-- Blog Loop -->
<div>
  <h3><?php the_category(16); ?></h3>
  <hr class="colored-divider"/>
  <?php
    global $more;
    $more = 0;
    query_posts(array('category_name' => 'training-wisdom'));
    if(have_posts()) : while(have_posts()) : the_post();?>
    <ul class="news-columns">
      <li class="center">
        <h4><?php the_title(); ?></h4>
        <h5><?php the_date(); ?></h5>
        <hr class="colored-divider"/>
        <article class="content-text">
          <?php the_content(); ?>
        </article>
      </li>
    </ul>
      <?php endwhile; endif;
    wp_reset_query();
  ?>
</div>
