<?php if(have_posts()): while(have_posts()): the_post();?>
  <aside class="ride-info-container center">
    <!-- <div class="diagonal-overlay"></div> -->
      <?php
        global $more;
        $more = 0;
        query_posts(array('category_name' => 'group-rides'));
        if(have_posts()) : while(have_posts()) : the_post();?>
        <h3><?php the_title(); ?></h3>
        <hr class="colored-divider"/>
        <?php the_content(); ?>
        <?php endwhile; endif;
        wp_reset_query();?>
  </aside>
  <aside class="ride-info-container center">
    <!-- <div class="diagonal-overlay"></div> -->
    <?php
      global $more;
      $more = 0;
      query_posts(array('category_name' => 'race-schedule'));
      if(have_posts()) : while(have_posts()) : the_post();?>
      <h3><?php the_title(); ?></h3>
      <hr class="colored-divider"/>
      <?php the_content(); ?>
      <?php endwhile; endif;
      wp_reset_query();?>
  </aside>
<?php endwhile; endif;?>
