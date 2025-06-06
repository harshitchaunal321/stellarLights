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
        filemtime(get_template_directory() . '/style.css')
    );

    // Enqueue header stylesheet
    wp_enqueue_style(
        'stellar-lights-header-style',
        get_template_directory_uri() . '/assets/css/header.css',
        array('stellar-lights-style'),
        filemtime(get_template_directory() . '/assets/css/header.css')
    );

    // Enqueue footer stylesheet
    wp_enqueue_style(
        'stellar-lights-footer-style',
        get_template_directory_uri() . '/assets/css/footer.css',
        array('stellar-lights-style'),
        filemtime(get_template_directory() . '/assets/css/footer.css')
    );

    // Enqueue homepage stylesheet for front-page.php or page-home.php
    if (is_front_page() || is_page_template('page-home.php')) {
        wp_enqueue_style(
            'stellar-lights-home-style',
            get_template_directory_uri() . '/assets/css/home.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/home.css')
        );
        // Enqueue carousel script for home page
    }

    // Enqueue FAQ stylesheet for page-faq.php
    if (is_page_template('page-faq.php')) {
        wp_enqueue_style(
            'stellar-lights-faq-style',
            get_template_directory_uri() . '/assets/css/faq.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/faq.css')
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing faq.css for FAQ page.');
        }
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing faq.css - not using page-faq.php template.');
    }

    // Enqueue Our Story stylesheet for page-our-story.php
    if (is_page_template('page-our-story.php')) {
        wp_enqueue_style(
            'stellar-lights-our-story-style',
            get_template_directory_uri() . '/assets/css/our-story.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/our-story.css')
        );if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing our-story.css for Our Story page.');
        }
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing our-story.css - not using page-our-story.php template.');
    }

    // Enqueue Contact stylesheet for page-contact.php
    if (is_page_template('page-contact.php')) {
        wp_enqueue_style(
            'stellar-lights-contact-style',
            get_template_directory_uri() . '/assets/css/contact.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/contact.css')
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing contact.css for Contact page.');
        }
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing contact.css - not using page-contact.php template.');
    }

    // Enqueue Process stylesheet for page-process.php
    if (is_page_template('page-process.php')) {
        wp_enqueue_style(
            'stellar-lights-faq-style',
            get_template_directory_uri() . '/assets/css/process.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/process.css')
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing process.css for Process page.');
        }
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing process.css - not using page-process.php template.');
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
        filemtime(get_template_directory() . '/assets/js/custom.js'),
        true
    );

    // Enqueue gradient scroll script
    wp_enqueue_script(
        'stellar-lights-gradient-scroll',
        get_template_directory_uri() . '/assets/js/gradient-scroll.js',
        array(),
        filemtime(get_template_directory() . '/assets/js/gradient-scroll.js'),
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
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // Ensure $args is an object
        $args = is_object($args) ? $args : new stdClass();
        
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
        
        $item_output = !empty($args->before) ? $args->before : '';
        $item_output .= '<a' . $attributes . '>';
        $item_output .= !empty($args->link_before) ? $args->link_before : '';
        $item_output .= apply_filters('the_title', $item->title, $item->ID);
        $item_output .= !empty($args->link_after) ? $args->link_after : '';
        $item_output .= '</a>';
        $item_output .= !empty($args->after) ? $args->after : '';
        
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
?>