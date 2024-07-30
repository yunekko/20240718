  <footer class="p-footer l-footer">

      <?php
        $args = [
            'menu' => 'global-navigation',
            'menu_class' => 'p-footer__nav-list',
            'container' => 'nav',
            'container_class' => 'p-footer__nav ',
        ];
        wp_nav_menu($args); ?>

      <small>&copy;2024 CODO ASSIST</small>
  </footer>

  <?php wp_footer(); ?>
  </body>

  </html>