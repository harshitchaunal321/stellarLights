<?php
/*
Template Name: Corporate Events Page
*/
get_header(); ?>

<div class="corporate-event-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/corporateEventHomepage.png');">
    <div class="hero-text">
        <h1>Corporate Events</h1>
        <p>Elevate product launches, brand activations, or milestone celebrations with custom-branded drone formations and stunning choreography designed to leave a lasting impression.</p>
    </div>
    <p class="photo-credit">Photo: Asher King</p>
</div>

<div class="corporate-event-content">
    <div class="breadcrumb">
        <h2><span class="normal-weight">SHOWS > FEATURE SHOWS ></span> <span class="bold-weight">CORPORATE EVENTS</span></h2>
    </div>
</div>

<section class="show-section" data-page="corporate-events">
    <div class="show-details">
    </div>
    <div class="show-navigation">
    </div>
</section>

<section class="other-features">
    <h2>See Our Other Feature Shows</h2>
    <div class="other-features-grid">
        <div class="other-feature-item">
            <h3>Brand Storytelling</h3>
            <p>Branded drone light shows built for emotional resonance, viral potential, and creative impact.</p>
            <a href="/brand-storytelling" class="feature-link">Read More</a>
        </div>
        <div class="other-feature-item">
            <h3>Public Events</h3>
            <p>Spectacular drone light shows designed to bring communities together through light, sound and story.</p>
            <a href="/public-events" class="feature-link">Read More</a>
        </div>
        <div class="other-feature-item">
            <h3>Private Events</h3>
            <p>Intimate, emotional, and unforgettable—private drone shows designed just for you.</p>
            <a href="/private-events" class="feature-link">Read More</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>