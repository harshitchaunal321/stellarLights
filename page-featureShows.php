<?php
/*
Template Name: FeateureShows Page
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/corporateEventFeatureShows.png');">
    <div class="hero-content">
        <h1>Feature Shows</h1>
        <p>We create every Feature Show in close collaboration with you—taking the time to understand your audience, your event, and the story you want to tell.</p>
    </div>
    <div class="photo-credit-container">
        <div class="photo-credit">Stellar Lights</div>
    </div>
</div>

<div class="feature-shows-content">
    <div class="breadcrumbs">
        <a href="/shows">SHOWS</a> > FEATURE SHOWS
    </div>

    <section class="show-intro-section">
        <p>We have a range of Feature Shows from Corporate Events, Brand Storytelling to Public and Private events. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat voluptat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper slore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis.</p>
    </section>
</div>

<div class="feature-shows-carousel">
    <a href="/corporate-events" class="carousel-item corporate-event" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/corporateEventFeatureShows.png');">
        <h3>Corporate Events</h3>
        <p>High-Impact Corporate Drone Light Shows Tailored To Your Brand And Event—Impressive, Meaningful, And Results-Driven.</p>
    </a>
    <a href="/brand-storytelling" class="carousel-item brand-storytelling" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brandStorytellingFeatureShows.png');">
        <h3>Brand Storytelling</h3>
        <p>Branded Drone Light Shows Built For Emotional Resonance, Viral Potential, And Creative Impact.</p>
    </a>
    <a href="/public-events" class="carousel-item public-event" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/publicEventFeatureShows.jpg');">
        <h3>Public Events</h3>
        <p>Spectacular Drone Light Shows Designed To Bring Communities Together Through Light, Sound And Story.</p>
    </a>
    <a href="/private-events" class="carousel-item private-event" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/privateEventFeatureShows.png');">
        <h3>Private Events</h3>
        <p>Intimate, Emotional, And Unforgettable—Private Drone Shows Designed Just For You.</p>
    </a>
</div>

<section class="cta-section">
    <div class="cta-content">
        <h2>Interested In Planning A Drone Light Show?</h2>
        <a href="/contact" class="enquire-button">Enquire Now</a>
    </div>
</section>

<?php get_footer(); ?>