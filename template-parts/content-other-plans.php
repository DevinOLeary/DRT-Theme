<article id="trainingCampContent" class="other-plan-content center">
  <?php
  global $more;
  $more = 0;
  query_posts(array('category_name' => 'training-trips'));
  if(have_posts()): while(have_posts()): the_post();?>
    <h3><?php the_title(); ?></h3>
    <hr class="colored-divider"/>
    <article class="content-text">
      <?php the_content(); ?>
    </article>
  <?php endwhile; endif; wp_reset_query();?>
</article>

<article id="performanceEvalContent" class="other-plan-content center">
  <?php
  global $more;
  $more = 0;
  query_posts(array('category_name' => 'performance-evaluation'));
  if(have_posts()): while(have_posts()): the_post();?>
    <h3><?php the_title(); ?></h3>
    <hr class="colored-divider"/>
    <article class="content-text">
      <?php the_content(); ?>
    </article>
  <?php endwhile; endif; wp_reset_query();?>
</article>
