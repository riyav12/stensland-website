<?php
// Enqueue styles and scripts
function figma_theme_enqueue_assets() {
    // CSS
    wp_enqueue_style('figma-style', get_stylesheet_uri());
    wp_enqueue_style('figma-custom', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

    // JS
    wp_enqueue_script('figma-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'figma_theme_enqueue_assets');

// Theme supports
function figma_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'figma_theme_setup');
?>
