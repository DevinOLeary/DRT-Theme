<?php get_header(); ?>
<header class="above-fold-container">
  <h1>Bike Fitting</h1>
  <hr class="colored-divider"/>
</header>
<!-- A-space Banner -->
<section class="a-space-banner-container">
  <figure class="fit-pic child-a-space-banner">
  </figure>
</section>
<!-- Goal Block -->
<section class="content-block center">
  <h2>The Goal</h2>
  <hr class="colored-divider"/>
  <p>We want to improve your cycling experience by allowing you to ride faster and longer with greater comfort while at the same time preventing injury.
  </p>
  <br/>
  <a href=""><button class="button-cta"><h4>Read "The Right Fit"</h4></button></a>
</section>
<!-- Fit Options Block -->
<section class="row-content">
  <?php get_template_part('template-parts/content', 'fit-section');?>
</section>
<!-- Process Block -->
<section class="content-block center">
  <?php
    global $more;
    $more = 0;
    query_posts('cat=14');
    if(have_posts()) : while(have_posts()) : the_post();?>
    <h2><?php the_title(); ?></h2>
    <hr class="colored-divider"/>
    <p><?php the_content();?></p>
    <?php
    endwhile; endif;
    wp_reset_query();
  ?>
  <br/>
  <a href=""><button class="button-cta"><h4>Schedule Fitting</h4></button></a>
</section>
<!-- Testimony Block -->
<section class="ad-block center">
  <p>
    <?php
      global $more;
      $more = 0;
      query_posts('cat=13');
      if(have_posts()) : while(have_posts()) : the_post();
      the_content();
      endwhile; endif;
      wp_reset_query();
    ?>
  </p>
</section>
<?php get_footer(); ?>
