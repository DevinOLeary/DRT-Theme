<!-- Single Post Page -->
<?php get_header();?>

<?php if(have_posts()): while(have_posts()): the_post();?>
  <!-- Content -->
<section class="above-fold-container">
    <h1 class="animated fadeInDown"><?php the_title(); ?></h1>
  <hr class="colored-divider"/>
</section>
<section class="content-block center">
  <article class="content-article animated fadeIn delay">
    <p><?php the_content(); ?></p>
  </article>
  <?php if( get_field('instagram_link') ):?>
    <p class="center">Check me out on Instagram <a href="<?php the_field('instagram_link')?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/build/images/instagram-logo-dark.png" alt="Instagram" class="instagram-icon"/></a></p>
  <?php endif; ?>
</section>
  <!-- End Content -->
  <?php endwhile; endif;?>

<?php get_footer(); ?>
