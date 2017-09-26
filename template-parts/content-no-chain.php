<div class="diagonal-overlay"></div>
<div class="deep-page-section">
  <?php
  global $more;
  $more = 0;
  query_posts(array('category_name' => 'ad-block-training-plan'));
  if(have_posts()): while(have_posts()): the_post();?>
    <h3><?php the_title(); ?></h3>
    <hr class="colored-divider"/>
    <article class="content-text center">
      <?php the_content(); ?>
    </article>
  <?php endwhile; endif; wp_reset_query();?>
</div>
