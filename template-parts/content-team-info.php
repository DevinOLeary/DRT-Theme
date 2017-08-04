<?php if(have_posts()): while(have_posts()): the_post();?>
  <aside class="ride-info-container center">
    <div class="diagonal-overlay"></div>
      <?php
        global $more;
        $more = 0;
        query_posts('cat=8');
        if(have_posts()) : while(have_posts()) : the_post();?>
        <h3><?php the_title(); ?></h3>
        <hr class="colored-divider"/>
        <ul>
          <li class="text-centered"><?php the_content(); ?></li>
        </ul>
        <?php endwhile; endif;
        wp_reset_query();?>
  </aside>
  <aside class="ride-info-container center">
    <div class="diagonal-overlay"></div>
    <?php
      global $more;
      $more = 0;
      query_posts('cat=10');
      if(have_posts()) : while(have_posts()) : the_post();?>
      <h3><?php the_title(); ?></h3>
      <hr class="colored-divider"/>
      <ul>
        <li class="text-centered"><?php the_content(); ?></li>
      </ul>
      <?php endwhile; endif;
      wp_reset_query();?>
  </aside>
<?php endwhile; endif;?>
