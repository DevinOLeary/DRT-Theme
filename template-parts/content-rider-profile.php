<?php if(have_posts()): while(have_posts()): the_post();?>
  <!-- Content -->
<section class="above-fold-container">
    <h1 class="animated fadeInDown"><?php the_title(); ?></h1>
  <hr class="colored-divider"/>
</section>
<section class="content-block center animated fadeIn delay">
  <article>
    <aside class="article-image right center">
      <?php if(has_post_thumbnail()) {
        the_post_thumbnail('rider-profile');
      }?>
    </aside>
    <aside class="wrap-text">
      <p><?php the_content(); ?></p>
    </aside>
  </article>
  <a href="<?php echo esc_url(get_permalink(get_page_by_title('DRT racing')));?>">
    <button class="button-cta"><h4 class="left">Back to Team</h4></button>
  </a>

</section>


  <!-- End Content -->
  <?php endwhile; endif;?>
