  <footer class="footer-block flex-center">
    <div class="footer-menu">
        <?php wp_nav_menu(array('theme_location' => 'footer', 'container_class' => 'footer-nav', 'container_id' => 'footerMenu')); ?>
    </div>
    <div class="contribution-links">
      <ul>
        <li>
          <a href="http://revolutionbikeandbean.com/" target="_blank"><img src="<?php bloginfo('template_directory');?>/build/images/Rev-logo.png" alt="Revolution Bike and Bean" width="217" height="71"/></a>
        </li>
        <li>
          <a href="https://www.instagram.com/drtconsulting/" target="_blank"><img src="<?php bloginfo('template_directory');?>/build/images/instagram-logo.png" alt="Instagram" width="40" height="40"/></a>
        </li>
        <li>
          <a href="" target="_blank" class="author-link">Designed and Built by Devin O'Leary</a>
        </li>
        <li>
          <a href="http://drtconsulting.net/wp-admin/" target="_blank" class="admin-link">Wordpress Admin</a>
        </li>
      </ul>

    </div>
  </footer>
  <!-- Jquery -->
  <?php wp_footer(); ?>
  </body>
</html>
