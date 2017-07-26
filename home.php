
<?php get_header(); ?>

<section class="above-fold-container banner">
  <!-- Articles page -->
  <h1>Bike News</h1>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
