<?php
function my_theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 40,
        'width'       => 180,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'theme-text-domain'),
    ));
}

add_action('after_setup_theme', 'my_theme_setup');

function my_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/css/styles.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_scripts() {
    wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery-cdn'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');