<?php get_header(); ?>
<h1 class="indented-title"><?php bloginfo('name'); ?></h1>

<section class="home-banner-container">
  <div class="home-banner">
    <div class="overlay-left">
      <div class="banner-copy-container">
        <h3>Get the training skills you need to feel and perform your best on the bike</h3>
        <a href=""><button class="cta-button"><h4>Start Planning</h4></button></a>
      </div>
    </div>
  </div>
</section>
<section class="content-block flex-center-column">
  <div class="diagonal-overlay"></div>
  <h2>The DRT Philosophy</h2>
  <hr class="colored-divider"/>
  <article class="one-column-content">
    <aside>
      <img src="<?php bloginfo('template_directory');?>/build/images/philosobike-rastor.png" width=290 height=110 />
    </aside>
    <p class="blurb">
      Suspendisse velit lectus, tempus ut bibendum ut, luctus ut libero. Aliquam vel mi eget ante molestie tincidunt. Etiam ipsum leo, venenatis vel tempus vel, egestas eget enim. Duis maximus, nisi tincidunt feugiat fermentum, orci mauris vestibulum purus, eget vehicula metus metus et turpis
    </p>
  </article>
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
<section class="content-block flex-center-column">
  <?php
    get_template_part('template-parts/content', 'featured');
  ?>
  <a href="get_permalink('bike-news')"><button class="cta-button"><h4>View All Articles</h4></button></a>
</section>
<hr class="section-divider"/>
<section class="content-block flex-center-column">
  <h3>Let's Speed Things Up</h3>
  <br/><br/>
  <button class="cta-button"><h4>Start Planning</h4></button>
</section>


<?php get_footer(); ?>
