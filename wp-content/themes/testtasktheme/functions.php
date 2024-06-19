<?php
function my_theme_setup()
{
    add_theme_support('custom-logo', array(
        'height' => 40,
        'width' => 180,
        'flex-width' => true,
        'flex-height' => true,
    ));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'theme-text-domain'),
    ));
}

add_action('after_setup_theme', 'my_theme_setup');

function my_theme_enqueue_styles()
{
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/css/styles.css');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_scripts()
{
    wp_enqueue_script('jquery-cdn', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery-cdn'), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function register_comments_post_type()
{
    $labels = array(
        'name' => _x('Custom Comments', 'Post type general name', 'textdomain'),
        'singular_name' => _x('Custom Comment', 'Post type singular name', 'textdomain'),
        'menu_name' => _x('Custom Comments', 'Admin Menu text', 'textdomain'),
        'name_admin_bar' => _x('Custom Comment', 'Add New on Toolbar', 'textdomain'),
        'add_new' => __('Add New', 'textdomain'),
        'add_new_item' => __('Add New Custom Comment', 'textdomain'),
        'new_item' => __('New Custom Comment', 'textdomain'),
        'edit_item' => __('Edit Custom Comment', 'textdomain'),
        'view_item' => __('View Custom Comment', 'textdomain'),
        'all_items' => __('All Custom Comments', 'textdomain'),
        'search_items' => __('Search Custom Comments', 'textdomain'),
        'not_found' => __('No custom comments found.', 'textdomain'),
        'not_found_in_trash' => __('No custom comments found in Trash.', 'textdomain'),
        'featured_image' => _x('Comment Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image' => _x('Set comment image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove comment image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image' => _x('Use as comment image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'custom_comment'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'supports' => array('title'),
    );

    register_post_type('custom_comment', $args);
}

add_action('init', 'register_comments_post_type');

function save_copyright_to_options($post_id)
{
    if (get_page_template_slug($post_id) == 'home' || get_page_by_path('home')->ID == $post_id) {
        $copyright = get_field('copyright', $post_id);
        if ($copyright) {
            $current_year = date('Y');
            $dynamic_copyright = str_replace('[year]', $current_year, $copyright);
            update_option('footer_copyright_text', $dynamic_copyright);
        }
    }
}

add_action('save_post', 'save_copyright_to_options');

// Function to get custom comments
function get_custom_comments_data($args = array())
{
    // Встановлюємо дефолтні параметри
    $default_args = array(
        'post_type' => 'custom_comment',
        'posts_per_page' => -1,
        'post_status' => 'any',
        'meta_key' => 'comment_index', // The name of the meta_key to sort
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
    );
    $query_args = wp_parse_args($args, $default_args);
    $comments_query = new WP_Query($query_args);
    if ($comments_query->have_posts()) {
        $comments_data = array();
        // Collect the data of each post into an array
        while ($comments_query->have_posts()) : $comments_query->the_post();
            $comments_data[] = array(
                'ID' => get_the_ID(),
                'title' => get_the_title(),
                'content' => get_the_content(),
                'image' => get_field('image'),
                'author' => get_field('author'),
                'job_title' => get_field('job_title'),
                'comment' => get_field('comment'),
                'comment_index' => get_field('comment_index')
            );
        endwhile;
        // Restore the global $post object
        wp_reset_postdata();
        return $comments_data;
    } else {
        return false;
    }
}