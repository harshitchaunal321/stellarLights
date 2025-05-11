<?php
/**
 * Theme Name: Stellar Lights Theme
 * Description: A custom WordPress theme for Stellar Lights.
 * Author: Your Name
 * Text Domain: stellarlights
 */

/**
 * Enqueue styles and scripts
 */
function stellar_lights_enqueue_scripts() {
    // Enqueue the main stylesheet (style.css in root directory)
    wp_enqueue_style(
        'stellar-lights-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );

    // Enqueue homepage stylesheet for front-page.php or page-home.php
    if (is_front_page() || is_page_template('page-home.php')) {
        wp_enqueue_style(
            'stellar-lights-home-style',
            get_template_directory_uri() . '/assets/css/home.css',
            array('stellar-lights-style'),
            '1.0.3'
        );
    }

    // Enqueue FAQ stylesheet for page-faq.php
    if (is_page_template('page-faq.php')) {
        wp_enqueue_style(
            'stellar-lights-faq-style',
            get_template_directory_uri() . '/assets/css/faq.css',
            array('stellar-lights-style'),
            '1.0.1'
        );
        error_log('Enqueuing faq.css for FAQ page.');
    } else {
        error_log('Not enqueuing faq.css - not using page-faq.php template.');
    }

    // Enqueue Google Fonts (Titillium Web) with weights 400 and 700
    wp_enqueue_style(
        'stellar-lights-fonts',
        'https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap',
        array(),
        null
    );

    // Enqueue custom JavaScript for menu toggle and carousel
    wp_enqueue_script(
        'stellar-lights-custom-js',
        get_template_directory_uri() . '/assets/js/custom.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'stellar_lights_enqueue_scripts');

/**
 * Register navigation menus
 */
function stellar_lights_register_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'stellarlights'),
        )
    );
}
add_action('init', 'stellar_lights_register_menus');

/**
 * Theme setup
 */
function stellar_lights_theme_setup() {
    // Add support for title tag
    add_theme_support('title-tag');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Add support for HTML5 markup
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'stellar_lights_theme_setup');

/**
 * Register widget areas
 */
function stellar_lights_widgets_init() {
    register_sidebar(
        array(
            'name'          => __('Sidebar', 'stellarlights'),
            'id'            => 'sidebar-1',
            'description'   => __('Add widgets here to appear in your sidebar.', 'stellarlights'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'stellar_lights_widgets_init');
?>