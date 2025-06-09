<?php
/**
 * The template for displaying the footer
 *
 * @package deanwiebe
 */
?>

<footer class="site-footer">
  <div class="container">
    <div class="footer-content">
      <p>&copy; <?php echo date('Y'); ?> Dean Wiebe. All rights reserved.</p>
            <?php
        wp_nav_menu([
          'theme_location' => 'footer',
          'menu_class'     => 'menu',     // Matches your existing class for styling
          'container'      => false      // Prevents extra <div>
        ]);
      ?>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
