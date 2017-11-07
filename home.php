  <?php get_header(); ?>

<section class="above-fold-container banner">
  <!-- Articles page -->
  <h1 class="animated fadeInDown">Bike News</h1>
  <hr class="colored-divider"/>
</section>
<!-- Banner -->
<section>
</section>
<!-- Articles -->
<section class="row-content animated fadeIn delay">
  <div class="category-block center">
    <h3><?php echo get_cat_name(10); ?></h3>
    <hr class="colored-divider"/>
    <?php echo category_description(10); ?>
    <a href="#articleContainer">
      <button class="sub-button" id="firstCategory"><h4>View Articles</h4></button>
    </a>
  </div>
  <div class="category-block center">
    <h3><?php echo get_cat_name(11); ?></h3>
    <hr class="colored-divider"/>
    <?php echo category_description(11); ?>
    <a href="#articleContainer">
      <button class="sub-button" id="secondCategory"><h4>View Articles</h4></button>
    </a>
  </div>
</section>
<section class="article-list-container center" id="articleContainer">
  <?php get_template_part('template-parts/content', 'news-articles-list'); ?>
</section>
<?php get_footer(); ?>
