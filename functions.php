<?php

function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo', [
  'height' => 100,
  'width'  => 300,
  'flex-height' => true,
  'flex-width'  => true,
]);
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'deawiebe' ),
            'footer'  => __( 'Footer Menu', 'deanwiebe' )
        )
    );

}

add_action('after_setup_theme', 'boilerplate_add_support');

add_action('after_setup_theme', function() {
    register_nav_menus([
        'primary' => __('Primary Menu', 'deanwiebe'),
    ]);
});

function register_portfolio_post_type() {
    register_post_type('portfolio', [
        'labels' => [
            'name' => 'Portfolio',
            'singular_name' => 'Project',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' => 'No projects found',
            'menu_name' => 'Portfolio'
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'portfolio'],
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true, // Enables Gutenberg & REST API
    ]);
}
add_action('init', 'register_portfolio_post_type');
