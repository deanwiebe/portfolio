<?php
get_header();
?>

<main class="portfolio-single">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="portfolio-entry container">
  <header class="portfolio-header">
    <div class="portfolio-header-content">
      <div class="portfolio-text">
        <h1><?php the_title(); ?></h1>
        <p><strong>Tech stack:</strong> <?php the_field('tech_stack'); ?></p>
        <p><strong>Built:</strong> <?php the_field('built_date'); ?></p>
        <?php if ($project_url = get_field('project_url')) : ?>
          <p>
            <a href="<?php echo esc_url($project_url); ?>" target="_blank" rel="noopener noreferrer">
              Visit project &rarr;
            </a>
          </p>
        <?php endif; ?>
      </div>

      <?php if (has_post_thumbnail()) : ?>
        <div class="project-thumbnail">
          <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>" />
        </div>
      <?php endif; ?>
    </div>
  </header>


      <div class="portfolio-content">
        <?php the_content(); ?>
      </div>

      <footer class="portfolio-footer">
        <p>Back to <a href="<?php echo esc_url(home_url('/')); ?>">Front Page</a></p>
      </footer>
    </article>
  <?php endwhile; endif; ?>
</main>

<?php
get_footer();
