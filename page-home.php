<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<div class="hero-section">
    <div class="hero-video">
        <iframe 
            src="https://www.youtube.com/embed/eEjNUWMfuD4?autoplay=1&mute=1&loop=1&controls=0&showinfo=0&modestbranding=1&playlist=eEjNUWMfuD4" 
            frameborder="0" 
            allow="autoplay; muted" 
            allowfullscreen
        ></iframe>
    </div>
    <div class="hero-content">
        <h1>We are Australia’s Premier Drone Show Storytellers</h1>
        <p>Stellar Lights crafts exceptional drone light shows across Australia, blending captivating creative storytelling with advanced drone technology. From large-scale public celebrations to corporate events, our bespoke drone shows offer unique, immersive experiences designed to captivate and inspire.</p>
        <a href="/contact" class="enquire-button">Enquire Now</a>
    </div>
</div>

<section class="carousel-section">
    <div class="carousel-intro">
        <p>At Stellar Lights, our passion for creative storytelling, advanced drone technology, and integrating diverse creative mediums like fireworks and lasers enables us to curate unique, mesmerising experiences. Like alchemy, the sum becomes greater than its parts. We tailor each show specifically to your event, capturing the essence of your story and ensuring unforgettable moments.</p>
    </div>
    <div class="carousel-wrapper">
        <button class="carousel-arrow carousel-arrow-left" aria-label="Previous slide"><</button>
        <div class="carousel-content">
            <div class="carousel-item active">
                <h2>Feature Shows</h2>
                <p>We create every Feature Show in close collaboration with you – taking the time to understand the story you want to tell.</p>
                <a href="/feature-shows" class="carousel-button">See Our Feature Shows</a>
            </div>
            <div class="carousel-item">
                <h2>Pre-Produced Shows</h2>
                <p>For those after premium impact with lower lead times, our pre-produced, award-winning drone shows are ready to license.</p>
                <a href="/pre-produced-shows" class="carousel-button">See Our Pre-Produced Shows</a>
            </div>
            <div class="carousel-item">
                <h2>First Lights</h2>
                <p>A place-responsive, choreographed drone light and sound experience, celebrating and honouring First Nations storytelling and cultural heritage.</p>
                <a href="/first-lights" class="carousel-button">See Our First Lights Shows</a>
            </div>
            <div class="carousel-item">
                <h2>Longform Shows</h2>
                <p>Longer-format performances blend drones, original sound, narration, lighting, and special effects into immersive, cinematic experiences.</p>
                <a href="/longform-shows" class="carousel-button">See Our Longform Shows</a>
            </div>
        </div>
        <button class="carousel-arrow carousel-arrow-right" aria-label="Next slide">></button>
    </div>
</section>

<section class="gallery-section">
    <div class="gallery-grid">
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-1.png" alt="Public Events">
            <span class="image-overlay">
                Australian Education Union<br>For Every Child Campaign
            </span>
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-2.png" alt="Corporate Shows">
            <span class="image-overlay">
                Rotorua, New Zealand<br>Aronui Arts Festival
            </span>
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-3.png" alt="Festivals">
            <span class="image-overlay">
                Sealife Melbourne<br>Exhibit Opening Night
            </span>
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-4.png" alt="Cultural Celebrations">
            <span class="image-overlay">
                Ningaloo, Exmouth<br>Solar Eclipse/Dark Sky Festival
            </span>
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-5.png" alt="Private Events">
            <span class="image-overlay">
                Location<br>Darwin Festival
            </span>
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-6.png" alt="Special Occasions">
            <span class="image-overlay">
                Viti Levu, Fiji<br>Private Celebration
            </span>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="cta-content">
        <h2>Interested In Planning A Drone Light Show?</h2>
        <a href="/contact" class="enquire-button">Enquire Now</a>
    </div>
    <div class="additional-images">
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/corporateEvent.png" alt="Corporate Shows">
            <span class="image-overlay">Corporate Events</span>
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brandStorytelling.png" alt="Public Events">
            <span class="image-overlay">Brand Storytelling</span>
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publicEvent.png" alt="Festivals">
            <span class="image-overlay">Public Events</span>
        </div>
        <div class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/privateEvent.png" alt="Cultural Celebrations">
            <span class="image-overlay">Private Events</span>
        </div>
    </div>
</section>

<?php get_footer(); ?>