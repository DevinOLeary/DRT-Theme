<?php get_header(); ?>
<h1 class="indented-title"><?php bloginfo('name'); ?></h1>

<section class="a-space-banner-container">
  <div class="a-space-banner home-banner">
    <div class="overlay-left">
      <article class="banner-copy-container">
        <h3 class="animated fadeInDown"><?php the_field('home_top_cta'); ?></h3>
        <a href="<?php echo esc_url(get_permalink(get_page_by_title('Training Plans')));?>"><button class="button-cta delay animated fadeInDown"><h4>Start Planning</h4></button></a>
      </article>
    </div>
  </div>
</section>
<section class="content-block center">
  <div class="diagonal-overlay"></div>
    <div  class="hide below-fold-blurb">
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
            <?php if(has_post_thumbnail()) {
              the_post_thumbnail('medium');
            }?>
          </aside>
          <article class="content-text">
            <?php the_content(); ?>
          </article>
        </article>
      <?php endwhile; endif;
        wp_reset_query();?>
      </div>
</section>
<section class="sub-banner-container">
  <div class="overlay-right">
    <div class="banner-copy-container">
      <h1 class="text-inverse">DRT Racing</h1>
      <hr class="colored-divider"/>
      <h3><?php the_field('drt_racing_cta'); ?></h3>
      <a href="<?php echo esc_url(get_permalink(get_page_by_title('DRT Racing')));?>"><button class="button-secondary"><h4>Learn More</h4></button></a>
      <p class="text-inverse">Check out our <a href="https://www.instagram.com/drtconsulting/?hl=en" target="_blank"><img class="insta-logo" src="<?php bloginfo('template_directory');?>/build/images/instagram-logo.png" alt="Instagram" width="40" height="40"/></a></p>
    </div>
  </div>
  <div class="drt-team-banner ">
  </div>
</section>
<section class="content-block">
  <div class="deep-page-section center hide">
    <?php
      get_template_part('template-parts/content', 'featured');
    ?>
    <div class="center">
      <a href="<?php echo esc_url(get_permalink(get_page_by_title('Bike News')));?>"><button class="button-cta"><h4>View All Articles</h4></button></a>
    </div>
  </div>
</section>
<hr class="section-divider"/>
<section class="content-block center text-colored">
  <h3><?php the_field('home_footer_cta'); ?></h3>
  <br/>
  <br/>
  <a href="<?php echo esc_url(get_permalink(get_page_by_title('Training Plans')));?>"><button class="button-cta"><h4>Start Planning</h4></button></a>
</section>

<?php get_footer(); ?>
