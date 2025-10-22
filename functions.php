<?php
/**
 * Horror Film History Child Theme Functions
 */

// Enqueue parent and child theme styles
function horror_child_enqueue_styles() {
    $parent_style = 'twentytwentyone-style';
    
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    
    wp_enqueue_style('horror-child-style', 
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
    
    // Enqueue homepage-specific styles when on homepage template
    if (is_page_template('clean_homepage_redesign.php')) {
        wp_enqueue_style('horror-homepage-style',
            get_stylesheet_directory_uri() . '/homepage-style.css',
            array('horror-child-style'),
            wp_get_theme()->get('Version')
        );
    }
}
add_action('wp_enqueue_scripts', 'horror_child_enqueue_styles', 15);

// Random film redirect functionality
function horror_random_post_redirect() {
    if (isset($_GET['random']) && $_GET['random'] == '1') {
        $posts = get_posts(array(
            'numberposts' => 1,
            'orderby' => 'rand',
            'post_type' => 'post'
        ));
        
        if ($posts) {
            wp_redirect(get_permalink($posts[0]->ID));
            exit;
        }
    }
}
add_action('template_redirect', 'horror_random_post_redirect');

// Add theme support
function horror_theme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'horror-child'),
    ));
}
add_action('after_setup_theme', 'horror_theme_setup');

// Custom excerpt length
function horror_custom_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'horror_custom_excerpt_length');

// Custom excerpt more text
function horror_custom_excerpt_more($more) {
    return '... <a href="' . get_permalink() . '" class="read-more">Continue Reading</a>';
}
add_filter('excerpt_more', 'horror_custom_excerpt_more');

// Add custom body classes
function horror_custom_body_classes($classes) {
    $classes[] = 'horror-theme';
    
    if (is_front_page()) {
        $classes[] = 'horror-home';
    }
    
    return $classes;
}
add_filter('body_class', 'horror_custom_body_classes');

?>
