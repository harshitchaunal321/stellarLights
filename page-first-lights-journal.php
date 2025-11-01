<?php
/*
Template Name: First Lights Journal
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/journal9banner.png');">
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
            <h1 class="journal-title">First Lights: Amplifying First Nations Stories Through the Sky</h1>
            
            <div class="journal-text">
                <p>First Lights began with a challenge during a global pandemic, asking how drone technology could amplify the voices of First Nations people, the custodians of the oldest living cultures on Earth. Since 2021 we have partnered with Fremantle Biennale to create large-scale, site-responsive works that do just that.</p>
                
                <p>Each show is developed in consultation with First Nations communities, cultural leaders, and artists. Drone choreography reflects Country, story, and cultural protocols. Soundtracks are composed with care and often feature language.</p>
                
                <p>From Darwin to Albany, Aotearoa to Papua New Guinea, First Lights has grown into a national and international platform for Indigenous-led storytelling in the sky. It is also the reason Stellar Lights exists.</p>
            </div>
            
            <!-- First set of 3 images -->
            <div class="journal-images-grid">
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal9inside1.jpg" alt="First Lights 1">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal9inside2.jpg" alt="First Lights 2">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal9inside3.jpg" alt="First Lights 3">
                </div>
            </div>
            
            <div class="journal-text">
                <p>The technical and creative foundations built with Fremantle Biennale became the launchpad for Stellar Lights. Our approach, blending artistic sensitivity with technical excellence, was forged in this crucible of cultural storytelling. Today that ethos underpins every project we deliver.</p>
                
                <p>As First Lights evolves and tours, it reminds us what drone shows can do. These are works that do not only entertain, they honour, connect, and endure.</p>
            </div>
            
            <!-- Second set of 3 images -->
            <div class="journal-images-grid">
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal9inside4.jpg" alt="First Lights 4">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal9inside5.jpg" alt="First Lights 5">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal9inside6.jpg" alt="First Lights 6">
                </div>
            </div>
            
            <!-- Next Journal Article Navigation -->
            <div class="next-journal-navigation">
                <a href="/journal/investing-in-impact" class="next-journal-link">
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

