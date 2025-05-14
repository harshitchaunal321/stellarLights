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

    // Enqueue custom JavaScript for menu toggle, carousel, and header effects
    wp_enqueue_script(
        'stellar-lights-custom-js',
        get_template_directory_uri() . '/assets/js/custom.js',
        array('jquery'),
        '1.0.1',
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
 * Custom Menu Walker to add active class and other enhancements
 */
class Stellar_Lights_Menu_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        // Add 'active' class if current item is active
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        
        $output .= '<li' . $class_names . '>';
        
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

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
    
    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 200,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
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

/**
 * Add body class for admin bar offset when logged in
 */
function stellar_lights_body_class($classes) {
    if (is_admin_bar_showing()) {
        $classes[] = 'admin-bar';
    }
    return $classes;
}
add_filter('body_class', 'stellar_lights_body_class');