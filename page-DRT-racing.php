<?php get_header(); ?>
<!-- A-space Container -->
<header class="above-fold-container">
  <h1 class="animated fadeInDown"><?php the_title(); ?></h1>
  <hr class="colored-divider"/>
</header>
<!-- Banner -->
<section class="a-space-banner-container">
  <figure class="team-ride-pic child-a-space-banner">
    <div class="overlay-left">
      <article class="banner-copy-container">
        <h3 class="animated fadeInDown delay"><?php echo get_post_field('post_content', $post->ID); ?></h3>
      </article>
    </div>
  </figure>
</section>
<!-- Team Blurb -->
<section class="content-block center">
  <div class="below-fold-blurb center text-colored">
    <?php
      global $more;
      $more = 0;
      query_posts(array('category_name' => 'team-blurb'));
      if(have_posts()) : while(have_posts()) : the_post();?>
        <h3><?php the_title(); ?></h3>
        <hr class="colored-divider"/>
        <article class="content-text">
          <?php the_content(); ?>
        </article>
    <?php endwhile; endif;
      wp_reset_query();
    ?>
  </div>
  <br/>
  <hr class="section-divider"/>
</section>
<section class="content-block row-content">
<!-- Team info -->
  <br/>
  <aside class="center">
    <?php get_template_part('template-parts/content', 'team-info'); ?>
  </aside>
  <aside class="center ">
    <?php get_template_part('template-parts/content', 'featured');?>
  </aside>
</section>

<!-- Rider Shots -->
<section class="content-block center text-colored" id="riders">
  <h2>Riders</h2>
  <hr class="colored-divider"/>
  <?php get_template_part('template-parts/content', 'riders'); ?>
</section>
<!-- CTA -->
<section class="small-block">
  <a href="<?php echo esc_url(get_permalink(get_page_by_title('Contact')));?>"><button class="button-cta"><h4><?php the_field('join_team_button'); ?></h4></button></a>
  <br/>
</section>
<?php get_footer(); ?>
