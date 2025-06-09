<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header" role="banner" aria-label="Primary header">
  <div class="container">
    <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
  <div class="site-logo"><?php the_custom_logo(); ?></div>
<?php else : ?>
  <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo"><?php bloginfo('name'); ?></a>
<?php endif; ?>

    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation menu">
      <!-- Hamburger SVG icon -->
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" >
        <line x1="3" y1="6" x2="21" y2="6"></line>
        <line x1="3" y1="12" x2="21" y2="12"></line>
        <line x1="3" y1="18" x2="21" y2="18"></line>
      </svg>
    </button>

    <nav class="main-navigation" id="primary-menu" role="navigation" aria-label="Primary navigation">
      <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'menu_class'     => 'menu',     // Matches your existing class for styling
          'container'      => false      // Prevents extra <div>
        ]);
      ?>
    </nav>
  </div>
</header>


