<?php
function jits_solutions_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'jits-solutions'),
    ));

    // Customizer settings
    add_theme_mod('about_text', 'JITS Solutions has been serving the community for over 10 years. Our team of certified technicians is dedicated to providing high-quality repair services for all your devices.');
}
add_action('after_setup_theme', 'jits_solutions_setup');

// Enqueue styles and scripts
function jits_solutions_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'jits_solutions_scripts');