<?php
get_header();
?>

<section class="portfolio-landing">
<div class="title-tag">
    <h1><?php echo get_bloginfo('name'); ?></h1>
  <p><?php echo get_bloginfo('description'); ?></p>
</div>

  <div class="site-cards-grid">
    <?php
    $args = [
      'post_type' => 'portfolio',
      'posts_per_page' => -1
    ];
    $portfolio_query = new WP_Query($args);
    ?>

    <?php if ($portfolio_query->have_posts()) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); 
      $project_url = get_field('project_url');
      ?>
      <div class="site-card">
        <h2>
          <a href="<?php echo esc_url($project_url); ?>" target="_blank" rel="noopener noreferrer">
            <?php the_title(); ?>
          </a>
        </h2>

        <?php if ($project_url) : ?>
          <div class="iframe-wrapper">
            <iframe
              src="<?php echo esc_url($project_url); ?>"
              loading="lazy"
              sandbox="allow-same-origin allow-scripts"
              title="<?php the_title_attribute(); ?> Preview"
            ></iframe>
          </div>
        <?php endif; ?>

        <div class="project-meta">
          <p><strong>Tech stack: </strong><?php the_field('tech_stack'); ?></p>
          <p><strong>Built: </strong><?php the_field('built_date'); ?></p>
        </div>

        <p><a href="<?php the_permalink(); ?>">Read about this project</a></p>
      </div>
    <?php endwhile; wp_reset_postdata(); else : ?>
      <p>No portfolio items found.</p>
    <?php endif; ?>
  </div>
  
</section>

<?php
get_footer();
