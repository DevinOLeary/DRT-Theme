  <footer class="footer-block flex-center">
    <div class="footer-menu">
        <?php wp_nav_menu(array('theme_location' => 'footer', 'container_class' => 'footer-nav', 'container_id' => 'footerMenu')); ?>
    </div>
    <div class="contribution-links">
      <ul>
        <li>
          <ul class="social-media-block">
            <li>
              <a href="https://www.instagram.com/coworkbtown/?hl=en" target="_blank"><img src="<?php bloginfo('template_directory');?>/build/images/instagram-logo.png" alt="Instagram" width="40" height="40"/></a>
            </li>
            <li>
              <a href="https://www.facebook.com/coworkbtown/" target="_blank"><img src="<?php bloginfo('template_directory');?>/build/images/fb-logo.png" alt="Facebook" width="40" height="40"/></a>
            </li>
            <li>
              <a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/build/images/twitter-logo.png" alt="Twitter" width="45" height="40"/></a>
            </li>
          </ul>
        </li>
        <li>
          <a href="" target="_blank"><img src="<?php bloginfo('template_directory');?>/build/images/Rev-logo.png" alt="Revolution Bike and Bean" width="217" height="71"/></a>
        </li>
        <li>
          <a href="" target="_blank" class="author-link">Designed and Built by Devin O'Leary</a>
        </li>
        <li>
          <a href="http://localhost:8888/wordpress/wp-admin/" target="_blank" class="admin-link">Wordpress Admin</a>
        </li>
      </ul>

    </div>
  </footer>
  <!-- Jquery -->
  <script src="<?php bloginfo('template_directory');?>/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/build/js/index.js"></script>
  <?php wp_footer(); ?>
  <!-- Need to figure out how to enqueue this -->
  </body>
</html>
