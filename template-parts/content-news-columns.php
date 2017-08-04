<!-- Article Loop -->
<div>
  <?php
    global $more;
    $more = 0;
    query_posts('cat=12');
    if(have_posts()) : while(have_posts()) : the_post();?>
    <h3><?php the_category(); ?></h3>
    <hr class="colored-divider"/>
    <br/>
    <ul class="news-columns">
      <li class="center">
        <h4><?php the_title(); ?></h4>
        <h5><?php the_date(); ?></h5>
        <hr class="colored-divider"/>
        <?php the_content(); ?>
      </li>
    </ul>
      <?php endwhile; endif;
    wp_reset_query();
  ?>
</div>
