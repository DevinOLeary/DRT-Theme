<?php get_header(); ?>
<!-- A-space Container -->
<header class="above-fold-container">
  <?php if(have_posts()): while(have_posts()): the_post();?>
    <h1><?php the_title(); ?></h1>
  <?php endwhile; endif;?>
  <hr class="colored-divider"/>
</header>
<!-- Banner -->
<section class="a-space-banner-container">
  <figure class="team-ride-pic child-a-space-banner">
    <div class="overlay-left">
      <article class="banner-copy-container">
        <h3>“We’re more of a rough and tumble band of sophisticated dirtbags that ride real fast”</h3>
      </article>
    </div>
  </figure>
</section>
<!-- Team Blurb -->
<section class="content-block center">
  <h2>Sharing the Stoke</h2>
  <p>Suspendisse velit lectus, tempus ut bibendum ut, luctus ut libero. Aliquam vel mi eget ante molestie tincidunt. Etiam ipsum leo, venenatis vel tempus vel, egestas eget enim. Duis maximus, nisi tincidunt feugiat fermentum, orci mauris vestibulum purus, eget vehicula metus metus et turpis </p>
  <br/>
<hr class="section-divider"/>
<!-- Team info -->
  <br/>
  <div class="row-content">
    <aside class="center">
      <?php get_template_part('template-parts/content', 'team-info'); ?>
    </aside>
    <aside class="center ">
      <?php get_template_part('template-parts/content', 'featured');?>
    </aside>
  </div>
</section>
<!-- Rider Shots -->
<section class="content-block center">
  <h2>Riders</h2>
  <hr class="colored-divider"/>
  <?php get_template_part('template-parts/content', 'riders'); ?>
</section>
<!-- CTA -->
<section class="small-block">
  <a href="<?php echo get_permalink(44);?>"><button class="button-cta"><h4>Join The Fam</h4></button></a>
  <br/>
</section>
<?php get_footer(); ?>
