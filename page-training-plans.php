<?php get_header(); ?>
<!-- A-space Container -->
<header class="above-fold-container">
  <div class="diagonal-overlay"></div>
  <h1>Training Plans</h1>
  <hr class="colored-divider"/>
  <p>Suspendisse velit lectus, tempus ut bibendum ut, luctus ut libero. Aliquam vel mi eget ante molestie tincidunt. Etiam ipsum leo, venenatis vel tempus vel, egestas eget enim.</p>
  <ul>
    <li class="step-list-container">
      <figure><a href="#trainingPackages"><div class="hexagon"><h4 class="show-font">Step <br/>1</h4></div></a></figure>
      <p>Read through the packages and find one that sounds right for you.</p>
    </li>
    <li class="step-list-container">
      <figure><div class="hexagon"><h4 class="show-font">Step <br/>2</h4></div></figure>
      <p>Kickstarter pork belly tumeric, retro kitsch crucifix chia vexillologist.</p>
    </li>
    <li class="step-list-container">
      <figure><div class="hexagon"><h4 class="show-font">Step <br/>3</h4></div></figure>
      <p>Kickstarter pork belly tumeric, retro kitsch crucifix chia vexillologist.</p>
    </li>
  </ul>
</header>
<!-- Training Packages Container -->
<section class="content-block center">
  <h2 id="trainingPackages">Training Packages</h2>
  <hr class="colored-divider"/>
  <ul class="row-content">
    <a href="#planContent" class="anchor-link"><li class="small-ring"><h3>Small Ring</h3></li></a>
    <a href="#planContent" class="anchor-link"><li class="middle-ring"><h3>Middle Ring</h3></li></a>
    <a href="#planContent" class="anchor-link"><li class="large-ring"><h3>Large Ring</h3></li></a>
  </ul>
  <!-- Package content box -->
  <div id="planContent" class="training-plan-block-container">
    <?php get_template_part('template-parts/content', 'training-plan'); ?>
  </div>
  <br/>
  <!-- No Chain Block -->
  <article class="content-block ad-block center">
    <?php get_template_part('template-parts/content', 'no-chain'); ?>
  </article>
</section>
<!-- Secondary Services -->
<section class="content-block center">
  <h2>Some Other Ideas</h2>
  <hr class="colored-divider"/>
  <br/>
  <div class="row-content">
    <!-- Training Camps -->
    <a href="#otherPlanContainer"><figure id="trainingCamp" class="training-camp-pic content-block">
      <div class="overlay-full center">
        <h2>Training Camps</h2>
      </div>
    </figure></a>
    <!-- Performance Evaluation -->
    <a href="#otherPlanContainer"><figure id="performanceEval" class="performance-eval-pic content-block">
      <div class="overlay-full center">
        <h2>Performance Evaluation</h2>
      </div>
    </figure></a>
  </div>
  <!-- Content Box -->
  <article id="otherPlanContainer" class="content-block">
    <?php get_template_part('template-parts/content', 'other-plans');?>
  </article>
</section>
<hr class="section-divider"/>
<!-- Plan Contact -->
<section class="content-block center">
  <?php
    global $more;
    $more = 0;
    query_posts(array('category_name' => 'training-plan-cta'));
    if(have_posts()) : while(have_posts()) : the_post();?>
      <h3><?php the_title(); ?></h3>
      <article class="content-text">
        <?php the_content(); ?>
      </article>
  <?php endwhile; endif;
    wp_reset_query();
  ?>
  <a href="<?php echo esc_url(get_permalink(get_page_by_title('Contact')));?>"><button class="button-cta"><h4>Let's Talk</h4></button></a>
</section>
<?php get_footer(); ?>
