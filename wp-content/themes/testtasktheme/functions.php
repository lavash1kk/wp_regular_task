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

function register_comments_post_type() {
    $labels = array(
        'name'                  => _x( 'Custom Comments', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Custom Comment', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Custom Comments', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Custom Comment', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Custom Comment', 'textdomain' ),
        'new_item'              => __( 'New Custom Comment', 'textdomain' ),
        'edit_item'             => __( 'Edit Custom Comment', 'textdomain' ),
        'view_item'             => __( 'View Custom Comment', 'textdomain' ),
        'all_items'             => __( 'All Custom Comments', 'textdomain' ),
        'search_items'          => __( 'Search Custom Comments', 'textdomain' ),
        'not_found'             => __( 'No custom comments found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No custom comments found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Comment Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set comment image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove comment image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as comment image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'custom_comment' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'supports'           => array( 'title' ),
    );

    register_post_type( 'custom_comment', $args );
}

add_action( 'init', 'register_comments_post_type' );
