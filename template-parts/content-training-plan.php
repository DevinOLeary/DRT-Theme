
  <article class="training-plan-block center text-colored" id="small-plan">
    <?php
    global $more;
    $more = 0;
    query_posts(array('category_name' => 'small-ring'));
    if(have_posts()): while(have_posts()): the_post();?>
      <h3><?php the_title(); ?></h3>
      <hr class="colored-divider"/>
      <article class="content-text">
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif; wp_reset_query();?>
  </article>
  <article class="training-plan-block center text-colored" id="medium-plan">
    <?php
    global $more;
    $more = 0;
    query_posts(array('category_name' => 'middle-ring'));
    if(have_posts()): while(have_posts()): the_post();?>
      <h3><?php the_title(); ?></h3>
      <hr class="colored-divider"/>
      <article class="content-text">
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif; wp_reset_query();?>
  </article>
  <article class="training-plan-block center text-colored" id="large-plan">
    <?php
    global $more;
    $more = 0;
    query_posts(array('category_name' => 'large-ring'));
    if(have_posts()): while(have_posts()): the_post();?>
      <h3><?php the_title(); ?></h3>
      <hr class="colored-divider"/>
      <article class="content-text">
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif; wp_reset_query();?>
  </article>
