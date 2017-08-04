
  <?php
  global $more;
  $more = 0;
  query_posts('cat=21');
  if(have_posts()): while(have_posts()): the_post();?>
    <h3><?php the_title(); ?></h3>
    <hr class="colored-divider"/>
    <?php the_content(); ?>
  <?php endwhile; endif; wp_reset_query();?>
