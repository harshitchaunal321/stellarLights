<?php
/*
Template Name: Private Events Page
*/
get_header(); ?>

<div class="corporate-event-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/privateEventBanner.jpg');">
    <div class="hero-text">
        <h1>Private Events</h1>
        <p>Intimate, emotional, and unforgettable—private drone shows designed just for you, creating personalized experiences that leave a lasting impression.</p>
    </div>
    <p class="photo-credit">Asher King</p>
</div>

<div class="corporate-event-content">
    <div class="breadcrumb">
        <h2><span class="normal-weight">SHOWS > FEATURE SHOWS ></span> <span class="bold-weight">PRIVATE EVENTS</span></h2>
    </div>
</div>

<section class="show-section" data-page="private-events">
    <div class="show-details">
    </div>
    <div class="show-navigation">
    </div>
</section>

<section class="other-features">
    <h2>See Our Other Feature Shows</h2>
    <div class="other-features-grid">
        <div class="other-feature-item">
            <h3>Corporate Events</h3>
            <p>Elevate product launches, brand activations, or milestone celebrations with custom-branded drone formations and stunning choreography designed to leave a lasting impression.</p>
            <a href="/corporate-events" class="feature-link">Read More</a>
        </div>
        <div class="other-feature-item">
            <h3>Public Events</h3>
            <p>Spectacular drone light shows designed to bring communities together through light, sound, and story.</p>
            <a href="/public-events" class="feature-link">Read More</a>
        </div>
        <div class="other-feature-item">
            <h3>Brand Storytelling</h3>
            <p>Branded drone light shows built for emotional resonance, viral potential, and creative impact.</p>
            <a href="/brand-storytelling" class="feature-link">Read More</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>