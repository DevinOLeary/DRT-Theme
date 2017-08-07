<?php
  global $more;
  $more = 0;
  query_posts('category_name' = '15');
  if(have_posts()) : while(have_posts()) : the_post();?>
    <div>
      <header class="category-block fit-header">
        <h3 class="text-inverse"><?php the_title(); ?></h3>
      </header>
      <article class="center fit-content">
        <figure class="close">X</figure>
        <article class="content-text">
          <?php the_content(); ?>
        </article>
      </article>
    </div>
<?php endwhile; endif;
  wp_reset_query();
?>
