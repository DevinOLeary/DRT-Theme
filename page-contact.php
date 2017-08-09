<?php get_header(); ?>
<!-- Title -->
<section class="above-fold-container banner">
  <h1>Contact Us!</h1>
</section>
<section class="content-block center">
  <?php if(have_posts()): while(have_posts()): the_post();?>
    <article class="content-text">
      <?php the_content(); ?>
    </article>
  <?php endwhile; endif;?>
</section>
<?php get_footer(); ?>
