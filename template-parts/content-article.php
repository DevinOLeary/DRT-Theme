


<?php if(have_posts()): while(have_posts()): the_post();?>
  <!-- Content -->
<section class="above-fold-container">
    <h1 class="animated fadeInDown"><?php the_title(); ?></h1>
  <hr class="colored-divider"/>
</section>
<section class="content-block center animated fadeIn delay text-colored">
    <hgroup class="center">
      <h4><?php echo get_the_date(); ?></h4>
      <br/>
      <h4>Words by <?php the_author(); ?></h4>
    </hgroup>
    <br/>
    <br/>
    <hr class="section-divider"/>
    <br/>
  <article>
    <aside class="article-image right">
      <?php if(has_post_thumbnail()) {
        the_post_thumbnail();
      }?>
    </aside>
    <aside class="wrap-text">
      <p><?php the_content(); ?></p>
    </aside>
  </article>
</section>


  <!-- End Content -->
  <?php endwhile; endif;?>
