  <?php get_header(); ?>

<section class="above-fold-container banner">
  <!-- Articles page -->
  <h1>Bike News</h1>
  <hr class="colored-divider"/>
</section>
<!-- Banner -->
<section>
</section>
<!-- Articles -->
<section class="row-content">
  <div class="category-block  center">
    <h3><?php the_category(15); ?></h3>
    <hr class="colored-divider"/>
    <?php echo category_description(16); ?>
    <button class="sub-button"><h4>View Articles</h4></button>
  </div>
  <div class="category-block  center">
    <h3><?php the_category(17); ?></h3>
    <hr class="colored-divider"/>
    <?php echo category_description(17); ?>
    <button class="sub-button"><h4>View Articles</h4></button>
  </div>
</section>
<article>
  <?php get_template_part('template-parts/content', 'news-columns'); ?>
</article>
<?php get_footer(); ?>
