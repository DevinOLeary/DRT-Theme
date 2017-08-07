<?php get_header(); ?>
<h1 class="indented-title"><?php bloginfo('name'); ?></h1>

<section class="a-space-banner-container">
  <div class="a-space-banner home-banner">
    <div class="overlay-left">
      <article class="banner-copy-container">
        <h3>Get the training skills you need to feel and perform your best on the bike</h3>
        <a href="<?php echo get_permalink(48); ?>"><button class="button-cta"><h4>Start Planning</h4></button></a>
      </article>
    </div>
  </div>
</section>
<section class="content-block center">
  <div class="diagonal-overlay"></div>
    <?php
      global $more;
      $more = 0;
      query_posts(array('category_name' => 'home-page-blurb'));
      if(have_posts()) : while(have_posts()) : the_post();?>
      <h2><?php the_title(); ?></h2>
      <hr class="colored-divider"/>
      <br/>
      <article class="center">
        <aside>
          <img src="<?php bloginfo('template_directory');?>/build/images/philosobike-rastor.png" width=290 height=110 />
        </aside>
        <br/>
        <article class="content-text">
          <?php the_content(); ?>
        </article>
      </article>
    <?php endwhile; endif;
      wp_reset_query();?>
</section>
<section class="sub-banner-container">
  <div class="overlay-right">
    <div class="banner-copy-container">
      <h1 class="text-inverse">DRT Racing</h1>
      <hr class="colored-divider"/>
      <h3>Crazy hot sexy speed.</h3>
      <a href=""><button class="sub-button"><h4>Learn More</h4></button></a>
      <p class="text-inverse">Check out our <a href="https://www.instagram.com/drtconsulting/?hl=en" target="_blank"><img class="insta-logo" src="<?php bloginfo('template_directory');?>/build/images/instagram-logo.png" alt="Instagram" width="40" height="40"/></a></p>
    </div>
  </div>
  <div class="drt-team-banner ">
  </div>
</section>
<section class="content-block center">
  <?php
    get_template_part('template-parts/content', 'featured');
  ?>
  <br/>
  <a href="<?php echo get_permalink(41); ?>"><button class="button-cta"><h4>View All Articles</h4></button></a>
</section>
<hr class="section-divider"/>
<section class="content-block center">
  <h3>Let's Speed Things Up</h3>
  <br/>
  <br/>
  <a href="<?php echo get_permalink(48); ?>"><button class="button-cta"><h4>Start Planning</h4></button></a>
</section>

<?php get_footer(); ?>
