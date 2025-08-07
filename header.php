<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;700&display=swap">
    
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php if (is_singular()) {
        global $post;
        $description = strip_tags($post->post_excerpt ? $post->post_excerpt : $post->post_content);
        $description = mb_substr(trim($description), 0, 155);
    } else {
        $description = get_bloginfo('description');
    } ?>
    <meta name="description" content="<?php echo esc_attr($description); ?>">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="background-color: black;">
    <header class="stellar-header fixed-header">
        <div class="header-container">
            <!-- Logo -->
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Stellar Lights Logo" style="height: 158px;">
                </a>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle" aria-label="Mobile Menu" aria-expanded="false">
                <span class="hamburger"></span>
                <span class="hamburger"></span>
                <span class="hamburger"></span>
            </button>
            
            <!-- Navigation Menu -->
            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav-menu',
                    'container' => false,
                    'fallback_cb' => false,
                    'walker' => new Stellar_Lights_Menu_Walker()
                ));
                ?>
            </nav>
        </div>
    </header>