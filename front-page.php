<?php
get_header();
?>

<section class="portfolio-landing">
  <div class="title-tag">
    <h1><?php echo get_bloginfo('name'); ?></h1>
    <p><?php echo get_bloginfo('description'); ?></p>
  </div>

  <!-- Carousel wrapper for clickable merry-go-round cards -->
  <div class="carousel-wrapper">
    <div class="carousel-background" id="carousel-background">
      <?php
      $args = [
        'post_type' => 'portfolio',
        'posts_per_page' => -1
      ];
      $portfolio_query = new WP_Query($args);
      if ($portfolio_query->have_posts()) :
        while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
      ?>
<div class="carousel-card">
  <h2>
    <a href="<?php the_field('project_url'); ?>" target="_blank" rel="noopener noreferrer">Visit: 
      <?php the_title(); ?>
    </a>
  </h2>
  <div class="carousel-thumbnail">
    <?php 
      if (has_post_thumbnail()) {
        the_post_thumbnail('medium'); 
      } else {
        echo '<img src="' . get_template_directory_uri() . '/images/placeholder.png" alt="No image available">';
      }
    ?>
  </div>
  <div class="project-meta">
    <p><?php the_field('tech_stack'); ?></p>
    <p><strong>Built:</strong> <?php the_field('built_date'); ?></p>
  </div>
  <p class="project-link">
    <a href="<?php the_permalink(); ?>">Learn about this project</a>
  </p>
</div>



      <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <div class="carousel-card">No projects found</div>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>
