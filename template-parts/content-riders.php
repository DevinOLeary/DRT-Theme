<ul class="riders-grid">
    <?php
      global $more;
      $more = 0;
      query_posts('cat=22');
      if(have_posts()) : while(have_posts()) : the_post();?>
        
      <?php endwhile; endif;
      wp_reset_query();
    ?>
</ul>
