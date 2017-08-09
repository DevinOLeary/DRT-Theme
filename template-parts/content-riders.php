<ul class="riders-grid">
    <?php
      global $more;
      $more = 0;
      query_posts(array('category_name' => 'riders'));
      if(have_posts()) : while(have_posts()) : the_post();?>
        <li><?php echo get_the_post_thumbnail(); ?></li>
      <?php endwhile; endif;
      wp_reset_query();
    ?>
</ul>
