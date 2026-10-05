<?php
/**
 * Whale Interior Theme Functions and Definitions
 *
 * @package Whale_Interior
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function whale_interior_setup() {
    // Add default Title tag support
    add_theme_support('title-tag');

    // Enable Featured Images
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => __('Menu Chính', 'whale-interior'),
        'footer'  => __('Menu Chân Trang', 'whale-interior'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Custom Logo Support
    add_theme_support('custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'whale_interior_setup');

/**
 * Enqueue scripts and styles
 */
function whale_interior_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'whale-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Main Theme Stylesheet
    wp_enqueue_style(
        'whale-theme-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // Main JavaScript
    wp_enqueue_script(
        'whale-theme-script',
        get_template_directory_uri() . '/js/main.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'whale_interior_scripts');

/**
 * Helper function: Return page URL by slug or fallback
 */
function whale_page_url($slug) {
    if (empty($slug) || $slug === 'home' || $slug === 'trang-chu') {
        return home_url('/');
    }
    $page = get_page_by_path($slug);
    if ($page) {
        return get_permalink($page->ID);
    }
    return home_url('/' . ltrim($slug, '/') . '/');
}
