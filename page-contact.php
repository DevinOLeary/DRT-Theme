<?php get_header(); ?>
<!-- Title -->
<section class="above-fold-container banner">
  <h1 class="animated fadeInDown">Contact Us!</h1>
  <hr class="colored-divider"/>
</section>
<section class="content-block center">
  <div class="animated fadeInLeft delay center">
    <?php if(have_posts()): while(have_posts()): the_post();?>
      <article class="content-text">
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif;?>
  </div>
</section>
<?php get_footer(); ?>
