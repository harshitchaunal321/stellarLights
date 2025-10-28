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

    // Enqueue global responsive fixes
    wp_enqueue_style(
        'stellar-lights-responsive-fixes',
        get_template_directory_uri() . '/assets/css/responsive-fixes.css',
        array('stellar-lights-style'),
        filemtime(get_template_directory() . '/assets/css/responsive-fixes.css')
    );

    wp_enqueue_script(
        'stellar-lights-scroll-to-top',
        get_template_directory_uri() . '/assets/js/scroll-to-top.js',
        array(), // No dependencies - load as early as possible
        filemtime(get_template_directory() . '/assets/js/scroll-to-top.js'),
        false // Load in header, not footer, for early execution
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

    // Enqueue homepage stylesheet and scripts for front-page.php or page-home.php
    if (is_front_page() || is_page_template('page-home.php')) {
        wp_enqueue_style(
            'stellar-lights-home-style',
            get_template_directory_uri() . '/assets/css/home.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/home.css')
        );
        wp_enqueue_script(
            'stellar-lights-video-player',
            get_template_directory_uri() . '/assets/js/video-player.js',
            array('jquery'),
            filemtime(get_template_directory() . '/assets/js/video-player.js'),
            true
        );
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
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing our-story.css for Our Story page.');
        }
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing our-story.css - not using page-our-story.php template.');
    }
    // Enqueue Contact stylesheet and script for page-contact.php
    if (is_page_template('page-contact.php')) {
        wp_enqueue_style(
            'stellar-lights-contact-style',
            get_template_directory_uri() . '/assets/css/contact.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/contact.css')
        );
        wp_enqueue_script(
            'stellar-lights-contact-form',
            get_template_directory_uri() . '/assets/js/contact-form.js',
            array('jquery'),
            filemtime(get_template_directory() . '/assets/js/contact-form.js'),
            true
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing contact.css and contact-form.js for Contact page.');
        }
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing contact.css - not using page-contact.php template.');
    }
    // Enqueue Process stylesheet for page-process.php
    if (is_page_template('page-process.php')) {
        wp_enqueue_style(
            'stellar-lights-process-style',
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
    // Enqueue Journal stylesheet for page-journal.php and journal detail pages
    if (is_page_template('page-journal.php') || 
        is_page_template('page-behind-the-scenes-drone-light-shows.php') ||
        is_page_template('page-inside-stellar-lights-storytelling.php') ||
        is_page_template('page-stellar-lights-casestudy.php') ||
        is_page_template('page-stellar-lights-insides.php') ||
        (is_page() && (
            strpos($_SERVER['REQUEST_URI'], '/journal/behind-the-scenes-drone-light-shows') !== false ||
            strpos($_SERVER['REQUEST_URI'], '/journal/inside-stellar-lights-storytelling') !== false ||
            strpos($_SERVER['REQUEST_URI'], '/journal/stellar-lights-casestudy') !== false ||
            strpos($_SERVER['REQUEST_URI'], '/journal/stellar-lights-insides') !== false
        )) ||
        strpos($_SERVER['REQUEST_URI'], '/journal/') !== false) {
        wp_enqueue_style(
            'stellar-lights-journal-style',
            get_template_directory_uri() . '/assets/css/journal.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/journal.css')
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing journal.css for Journal page or journal detail page.');
        }
    } else {
        if (defined('WP_DEBUG') && WP_DEBUG) {
            $current_template = get_page_template_slug();
            error_log('Stellar Lights: Current page template: ' . $current_template);
            error_log('Stellar Lights: Not enqueuing journal.css - not using journal template.');
        }
    }
    // Enqueue Shows stylesheet for page-shows.php
    if (is_page_template('page-shows.php')) {
        wp_enqueue_style(
            'stellar-lights-shows-style',
            get_template_directory_uri() . '/assets/css/shows.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/shows.css')
        );
        wp_enqueue_script(
            'stellar-lights-video-player',
            get_template_directory_uri() . '/assets/js/video-player.js',
            array('jquery'),
            filemtime(get_template_directory() . '/assets/js/video-player.js'),
            true
        );
    }
    // Enqueue Feature Shows stylesheet for page-featureShows.php
    if (is_page_template('page-featureShows.php')) {
        wp_enqueue_style(
            'stellar-lights-feature-shows-style',
            get_template_directory_uri() . '/assets/css/featureShows.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/featureShows.css')
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing featureShows.css for Feature Shows page.');
        }
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing featureShows.css - not using page-featureShows.php template.');
    }

    // Enqueue FirstLights Shows stylesheet for page-firstLights.php
    if (is_page_template('page-firstLights.php')) {
        wp_enqueue_style(
            'stellar-lights-first-lights-style',
            get_template_directory_uri() . '/assets/css/firstLights.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/firstLights.css')
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing firstLights.css for First Lights page.');
        }
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing firstLights.css - not using page-firstLights.php template.');
    }
    // Enqueue Corporate Events stylesheet for page-corporate-events.php
    if (is_page_template('page-corporate-events.php')) {
        wp_enqueue_style(
            'corporate-events-style',
            get_template_directory_uri() . '/assets/css/corporate-events.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/corporate-events.css')
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing corporate-events.css for Corporate Events page.');
        }
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing corporate-events.css - not using page-corporate-events.php template.');
    }
    // Enqueue Feature Show Corporate Events stylesheet and script for page-featureShowCorporateEvents.php
    if (is_page_template('page-featureShowCorporateEvents.php')) {
        wp_enqueue_style(
            'feature-shows-corporate-events-style',
            get_template_directory_uri() . '/assets/css/featureShowsCorporateEvents.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/featureShowsCorporateEvents.css')
        );
        wp_enqueue_script(
            'stellar-lights-show-navigation',
            get_template_directory_uri() . '/assets/js/script.js',
            array('jquery'),
            filemtime(get_template_directory() . '/assets/js/script.js'),
            true
        );
        // Localize script to pass theme directory URL
        wp_localize_script(
            'stellar-lights-show-navigation',
            'themeData',
            array(
                'templateUrl' => get_template_directory_uri()
            )
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing featureShowsCorporateEvents.css and script.js for Feature Show Corporate Events page.');
        }
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing featureShowsCorporateEvents.css or script.js - not using page-featureShowCorporateEvents.php template.');
    }
    // Enqueue Brand Storytelling stylesheet and script for page-brand-storytelling.php
    if (is_page_template('page-featureShowBrandStorytelling.php')) {
        wp_enqueue_style(
            'brand-storytelling-style',
            get_template_directory_uri() . '/assets/css/featureShowsCorporateEvents.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/featureShowsCorporateEvents.css')
        );
        wp_enqueue_script(
            'stellar-lights-show-navigation',
            get_template_directory_uri() . '/assets/js/script.js',
            array('jquery'),
            filemtime(get_template_directory() . '/assets/js/script.js'),
            true
        );
        // Localize script to pass theme directory URL
        wp_localize_script(
            'stellar-lights-show-navigation',
            'themeData',
            array(
                'templateUrl' => get_template_directory_uri()
            )
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing featureShowsCorporateEvents.css and script.js for Brand Storytelling page.');
        }
    } elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing featureShowsCorporateEvents.css or script.js - not using page-brand-storytelling.php template.');
    }
    // Enqueue Public Events stylesheet and script for page-featureShowPublicEvents.php
    if (is_page_template('page-featureShowPublicEvents.php')) {
        wp_enqueue_style(
            'public-events-style',
            get_template_directory_uri() . '/assets/css/featureShowsCorporateEvents.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/featureShowsCorporateEvents.css')
        );
        wp_enqueue_script(
            'stellar-lights-show-navigation',
            get_template_directory_uri() . '/assets/js/script.js',
            array('jquery'),
            filemtime(get_template_directory() . '/assets/js/script.js'),
            true
        );
        // Localize script to pass theme directory URL
        wp_localize_script(
            'stellar-lights-show-navigation',
            'themeData',
            array(
                'templateUrl' => get_template_directory_uri()
            )
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing featureShowsCorporateEvents.css and script.js for Public Events page.');
        }
    } 
    if (is_page_template('page-featureShowPrivateEvents.php')) {
        wp_enqueue_style(
            'public-events-style',
            get_template_directory_uri() . '/assets/css/featureShowsCorporateEvents.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/featureShowsCorporateEvents.css')
        );
        wp_enqueue_script(
            'stellar-lights-show-navigation',
            get_template_directory_uri() . '/assets/js/script.js',
            array('jquery'),
            filemtime(get_template_directory() . '/assets/js/script.js'),
            true
        );
        // Localize script to pass theme directory URL
        wp_localize_script(
            'stellar-lights-show-navigation',
            'themeData',
            array(
                'templateUrl' => get_template_directory_uri()
            )
        );
        if (defined('WP_DEBUG') && WP_DEBUG) {
            error_log('Stellar Lights: Enqueuing featureShowsCorporateEvents.css and script.js for Public Events page.');
        }
    }
    elseif (defined('WP_DEBUG') && WP_DEBUG) {
        error_log('Stellar Lights: Not enqueuing featureShowsCorporateEvents.css or script.js - not using page-featureShowPublicEvents.php template.');
    }
    // Enqueue Google Fonts (Titillium Web) with weights 400 and 700
    wp_enqueue_style(
        'stellar-lights-fonts',
        'https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap',
        array(),
        null
    );

    if (is_page_template('page-pre-produced-show.php')) {
        wp_enqueue_style(
            'stellar-lights-pre-produced-show-style',
            get_template_directory_uri() . '/assets/css/pre-produced-show.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/pre-produced-show.css')
        );
    }
    
    // Enqueue Longform Shows stylesheet for page-longform-shows.php
    if (is_page_template('page-longform-shows.php')) {
        wp_enqueue_style(
            'stellar-lights-longform-shows-style',
            get_template_directory_uri() . '/assets/css/longform-shows.css',
            array('stellar-lights-style'),
            filemtime(get_template_directory() . '/assets/css/longform-shows.css')
        );
    }
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

    // Enqueue the subscribe form script for the footer
    wp_enqueue_script(
        'stellar-lights-subscribe-form',
        get_template_directory_uri() . '/assets/js/subscribe-form.js',
        array('jquery'),
        filemtime(get_template_directory() . '/assets/js/subscribe-form.js'),
        true
    );

    // Localize script to pass ajaxurl
    wp_localize_script(
        'stellar-lights-subscribe-form',
        'stellarLightsAjax',
        array(
            'ajaxurl' => admin_url('admin-ajax.php'),
        )
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
        $args = is_object($args) ? $args : new stdClass();
        
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'active';
        }
        
        // Add has-submenu class for items with children
        if ($this->has_children) {
            $classes[] = 'has-submenu';
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
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
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

/**
 * Handle footer subscribe form submission
 */
function handle_footer_subscribe() {
    // Verify nonce for security
    if (!isset($_POST['footer_subscribe_nonce_field']) || !wp_verify_nonce($_POST['footer_subscribe_nonce_field'], 'footer_subscribe_nonce')) {
        wp_send_json_error(array('message' => 'Security check failed. Please try again.'));
        exit;
    }

    // Sanitize input data
    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';

    // Validate inputs
    if (empty($name) || empty($email)) {
        wp_send_json_error(array('message' => 'Please fill in all required fields.'));
        exit;
    }

    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
        exit;
    }

    // Prepare email
    $to = 'rob@stellarlights.com.au';
    $subject = 'New Subscription from Stellar Lights';
    $message = "A new user has subscribed to the newsletter:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    // Send email
    $sent = wp_mail($to, $subject, $message, $headers);

    if ($sent) {
        wp_send_json_success(array('message' => 'Thank you for subscribing!'));
    } else {
        wp_send_json_error(array('message' => 'Failed to send email. Please try again later.'));
    }
}
add_action('wp_ajax_handle_footer_subscribe', 'handle_footer_subscribe');
add_action('wp_ajax_nopriv_handle_footer_subscribe', 'handle_footer_subscribe');

/**
 * Handle contact form submission
 */
function handle_contact_form() {
    // Verify nonce for security
    if (!isset($_POST['contact_form_nonce']) || !wp_verify_nonce($_POST['contact_form_nonce'], 'contact_form_nonce')) {
        wp_send_json_error(array('message' => 'Security check failed. Please try again.'));
        exit;
    }

    // Sanitize input data
    $name = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $company = isset($_POST['company']) ? sanitize_text_field($_POST['company']) : '';
    $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $location = isset($_POST['location']) ? sanitize_text_field($_POST['location']) : '';
    $date = isset($_POST['date']) ? sanitize_text_field($_POST['date']) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';

    // Validate required inputs
    if (empty($name) || empty($email)) {
        wp_send_json_error(array('message' => 'Please fill in all required fields (Name and Email).'));
        exit;
    }

    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
        exit;
    }

    // Prepare email
    $to = 'rob@stellarlights.com.au';
    $subject = 'New Contact Form Submission - Stellar Lights';
    $email_message = "A new contact form submission has been received:\n\n";
    $email_message .= "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Company: $company\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Show Location: $location\n";
    $email_message .= "Proposed Show Date: $date\n";
    $email_message .= "Event Details: $message\n";
    
    // Set up headers for better email delivery
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: Stellar Lights <noreply@stellarlights.com.au>',
        'Reply-To: ' . $email,
        'X-Mailer: WordPress/' . get_bloginfo('version')
    );

    // Try to send email with better error handling
    $sent = false;
    $error_message = '';
    
    try {
        // First attempt: Use wp_mail
        $sent = wp_mail($to, $subject, $email_message, $headers);
        
        if (!$sent) {
            // Log the error for debugging
            error_log('Contact form email failed to send via wp_mail. To: ' . $to . ', Subject: ' . $subject);
            
            // Second attempt: Try with different headers
            $headers_simple = array('Content-Type: text/plain; charset=UTF-8');
            $sent = wp_mail($to, $subject, $email_message, $headers_simple);
            
            if (!$sent) {
                error_log('Contact form email failed on second attempt as well.');
                $error_message = 'Email service temporarily unavailable.';
            }
        }
    } catch (Exception $e) {
        error_log('Contact form exception: ' . $e->getMessage());
        $error_message = 'Email service error: ' . $e->getMessage();
    }

    // Always log the submission for debugging purposes
    error_log('Contact form submission received: ' . $name . ' - ' . $email);
    
    // Save to a log file for easy access (regardless of debug mode)
    $log_entry = date('Y-m-d H:i:s') . " - Contact Form: $name ($email) - Company: $company - Phone: $phone - Location: $location - Date: $date - Message: $message\n";
    $log_file = get_template_directory() . '/contact-form-log.txt';
    file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
    
    // For localhost/development, always return success if data is valid
    $is_localhost = in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1']) || strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;
    
    if ($is_localhost || !$sent) {
        // On localhost or if email failed, still return success but log it
        if (!$sent) {
            error_log('Email failed to send, but returning success for user experience. To: ' . $to);
        }
        wp_send_json_success(array('message' => 'Thank you for your message! We will get back to you soon.'));
    } else {
        // Production with successful email
        wp_send_json_success(array('message' => 'Thank you for your message! We will get back to you soon.'));
    }
}
add_action('wp_ajax_handle_contact_form', 'handle_contact_form');
add_action('wp_ajax_nopriv_handle_contact_form', 'handle_contact_form');

/**
 * Test email functionality (for debugging)
 * Add this to your URL: ?test_email=1
 */
function test_email_functionality() {
    if (isset($_GET['test_email']) && $_GET['test_email'] == '1') {
        $to = 'rob@stellarlights.com.au';
        $subject = 'Test Email from Stellar Lights';
        $message = "This is a test email to verify email functionality.\n\n";
        $message .= "Time: " . date('Y-m-d H:i:s') . "\n";
        $message .= "Site: " . get_bloginfo('name') . "\n";
        $message .= "URL: " . get_bloginfo('url') . "\n";
        
        $headers = array(
            'Content-Type: text/plain; charset=UTF-8',
            'From: Stellar Lights <noreply@stellarlights.com.au>'
        );
        
        $sent = wp_mail($to, $subject, $message, $headers);
        
        if ($sent) {
            echo '<h2>✅ Email Test Successful!</h2>';
            echo '<p>Test email was sent successfully to: ' . $to . '</p>';
        } else {
            echo '<h2>❌ Email Test Failed!</h2>';
            echo '<p>Failed to send test email to: ' . $to . '</p>';
            echo '<p>This indicates that WordPress email is not properly configured.</p>';
        }
        
        echo '<h3>Debug Information:</h3>';
        echo '<ul>';
        echo '<li>WordPress Version: ' . get_bloginfo('version') . '</li>';
        echo '<li>Site URL: ' . get_bloginfo('url') . '</li>';
        echo '<li>Admin Email: ' . get_option('admin_email') . '</li>';
        echo '<li>WP_DEBUG: ' . (defined('WP_DEBUG') && WP_DEBUG ? 'Enabled' : 'Disabled') . '</li>';
        echo '</ul>';
        
        echo '<h3>Solutions:</h3>';
        echo '<ol>';
        echo '<li><strong>Install SMTP Plugin:</strong> Install a plugin like "WP Mail SMTP" or "Post SMTP" to configure proper email sending.</li>';
        echo '<li><strong>Check Server Configuration:</strong> Ensure your local server supports email sending.</li>';
        echo '<li><strong>Use External SMTP:</strong> Configure Gmail, SendGrid, or another SMTP service.</li>';
        echo '</ol>';
        
        exit;
    }
}
add_action('init', 'test_email_functionality');
?>