<ul class="riders-grid">
    <?php
      global $more;
      $more = 0;
      query_posts('cat=22');
      if(have_posts()) : while(have_posts()) : the_post();?>
      <a href="<?php echo esc_url( get_permalink()); ?>"><li><?php the_post_thumbnail(); ?></li></a>
    <?php  endwhile; endif;
      wp_reset_query();
    ?>
</ul>
