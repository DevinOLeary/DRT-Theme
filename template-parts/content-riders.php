<ul class="riders-grid">
    <?php
      global $more;
      $more = 0;
      query_posts(array('category_name' => 'riders'));
      if(have_posts()) : while(have_posts()) : the_post();?>
      <a href="<?php echo esc_url( get_permalink()); ?>">

        <li class="rider-pic"><?php the_post_thumbnail('rider-thumb'); ?>
          <div class="overlay-full hide">
            <h3 class="animated fadeIn rider-name">
              <?php the_title(); ?>
            </h3>
          </div>
        </li>

      </a>

    <?php  endwhile; endif;
      wp_reset_query();
    ?>
</ul>
