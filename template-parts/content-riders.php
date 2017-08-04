<ul class="riders-grid">
    <?php
      global $more;
      $more = 0;
      query_posts('cat=11');
      if(have_posts()) : while(have_posts()) : the_post();
      if ( has_post_thumbnail() ) {?>
        <li><?php the_post_thumbnail();?><span></span></li>
	      <?php
      }
      endwhile; endif;
      wp_reset_query();
    ?>
</ul>
