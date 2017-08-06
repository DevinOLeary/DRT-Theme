<!-- Single Post Page -->
<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post();?>
  <!-- Content -->
<section class="above-fold-container">
    <h1><?php the_title(); ?></h1>
  <hr class="colored-divider"/>
</section>
<section class="content-block">
  <article class="row-content">
    <aside>
      <?php if ( has_post_thumbnail() ) {
       the_post_thumbnail('medium', true);}?>
    </aside>
    <aside class="center">
      <p><?php the_content(); ?></p>
    </aside>
  </article>
</section>
  <!-- End Content -->
  <?php endwhile; endif;?>

<?php get_footer(); ?>
