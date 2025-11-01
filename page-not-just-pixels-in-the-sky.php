<?php
/*
Template Name: Not Just Pixels in the Sky
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/journal8banner.png');">
    <div class="hero-content">
        <!-- Hero content can be empty for detail pages -->
    </div>
    <div class="photo-credit-container">
        <div class="photo-credit">Unknown</div>
    </div>
</div>

<section class="journal-detail-section">
    <div class="container">
        <div class="journal-content">
            <h1 class="journal-title">Not Just Pixels in the Sky: The Future of Multi-Medium Shows</h1>
            
            <div class="journal-text">
                <p>A decade ago drone shows were a novelty. Today they are an emerging creative practice. The future is not only brighter, it is layered.</p>
                
                <p>We work at the forefront of multi-effect storytelling, combining drones with time-coded pyrotechnics, lasers, custom beam lights, and atmospheric effects such as haze to shape collectively spectacular moments.</p>
                
                <p>Drones offer softness, subtlety, and grace. They move like a soft breath through the sky. They give story its rhythm and shape. Sometimes a story needs punctuation and drama, a flash, a roar, or a burst of brilliance. That is where pyro and lasers come in.</p>
                
                <p>These elements are powerful. If they are not carefully choreographed they can overpower the drones entirely. Integrated with intention they elevate the story rather than hijack it.</p>
            </div>
            
            <!-- First set of 3 images -->
            <div class="journal-images-grid">
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal8inside1.jpg" alt="Multi-Medium Show 1">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal8inside2.jpg" alt="Multi-Medium Show 2">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal8inside3.jpg" alt="Multi-Medium Show 3">
                </div>
            </div>
            
            <div class="journal-text">
                <p>We have developed our own lighting systems such as PULSE and partner with leading pyrotechnicians including Howard and Sons to create shows where every element is balanced and meaningful. Audiences rarely remember a piece of hardware. They remember the hush before lift, the first colour, and the music swelling in time with light. It is not about more effects. It is about deeper connection.</p>
            </div>
            
            <!-- Second set of 3 images -->
            <div class="journal-images-grid">
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal8inside4.jpg" alt="Multi-Medium Show 4">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal8inside5.jpg" alt="Multi-Medium Show 5">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal8inside6.jpg" alt="Multi-Medium Show 6">
                </div>
            </div>
            
            <!-- Next Journal Article Navigation -->
            <div class="next-journal-navigation">
                <a href="/journal/first-lights" class="next-journal-link">
                    <em>Next Journal Article</em>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="cta-section" class="cta-section">
    <div class="cta-content">
        <h2>Interested In Planning A Drone Light Show?</h2>
        <a href="/contact" class="enquire-button">Enquire Now</a>
    </div>
</section>

<?php get_footer(); ?>

