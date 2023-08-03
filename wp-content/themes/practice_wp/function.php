<?php

function my_enqueue_styles() {
    wp_enqueue_style('ress', '///unpkg.com/ress/dist/ress.min.css/', array(), false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');

    if (is_home() || is_front_page()) {
        wp_enqueue_style('top', get_theme_file_uri('css/top.css'), array('ress', 'style'), false, 'all');

    } elseif (is_single()) {
        wp_enqueue_style('single', get_theme_file_uri('css/single.css'), array('css', 'style'), false, 'all');
    }
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

add_theme_support('post-thumbnails');