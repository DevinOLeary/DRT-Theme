  <?php
    global $more;
    $more = 0;
    query_posts(array('category_name' => 'fit-option'));
    if(have_posts()) : while(have_posts()) : the_post();?>
        <header class="fit-header">
          <h3 class="text-inverse"><?php the_title(); ?></h3>
        </header>
        <article class="fit-content center">
          <h4 class="close"><u>close</u></h4>
          <div class="content-text">
            <?php the_content(); ?>
          </div>
        </article>
  <?php endwhile; endif;
    wp_reset_query();
  ?>
