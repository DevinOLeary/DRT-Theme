<?php get_header(); ?>
<header class="above-fold-container">
  <h1 class="animated fadeInDown"><?php the_title();?></h1>
  <hr class="colored-divider"/>
</header>
<!-- A-space Banner -->
<section class="a-space-banner-container">
  <figure class="fit-pic child-a-space-banner">
  </figure>
</section>
<!-- Goal Block -->
<section class="content-block center">
  <div class="center hide below-fold-blurb text-colored">
    <?php
    global $more;
    $more = 0;
    query_posts(array('category_name' => 'bike-fit-blurb'));
    if(have_posts()): while(have_posts()): the_post();?>
      <h3><?php the_title(); ?></h3>
      <hr class="colored-divider"/>
      <article class="content-text">
        <?php the_content(); ?>
      </article>
    <?php endwhile; endif; wp_reset_query();?>
    <br/>
    <a href="<?php echo esc_url(get_post_permalink(173));?>"><button class="button-cta"><h4><?php the_field('title_of_fit_article'); ?></h4></button></a>
  </div>
</section>
<!-- Fit Options Block -->
<section class="center">
  <?php get_template_part('template-parts/content', 'fit-section');?>
</section>
<!-- Process Block -->
<section class="content-block center text-colored">
  <?php
    global $more;
    $more = 0;
    query_posts(array('category_name' => 'fit-process'));
    if(have_posts()) : while(have_posts()) : the_post();?>
    <h2><?php the_title(); ?></h2>
    <hr class="colored-divider"/>
    <article class="content-text">
      <?php the_content(); ?>
    </article>
    <?php
    endwhile; endif;
    wp_reset_query();
  ?>
  <br/>
  <a href="<?php echo esc_url(get_permalink(get_page_by_title('Contact')));?>"><button class="button-cta"><h4>Schedule Fitting</h4></button></a>
</section>
<!-- Testimony Block -->
<section class="ad-block center">
  <p>
    <?php
      global $more;
      $more = 0;
      query_posts(array('category_name' => 'fit-testimony'));
      if(have_posts()) : while(have_posts()) : the_post();
      the_content();
      endwhile; endif;
      wp_reset_query();
    ?>
  </p>
</section>
<?php get_footer(); ?>
