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

