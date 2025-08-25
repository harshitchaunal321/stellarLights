<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<div class="hero-section">
    <div class="hero-video">
        <video 
            id="heroVideo"
            autoplay 
            muted 
            loop 
            playsinline
            style="opacity: 1;"
        >
            <source src="<?php echo get_template_directory_uri(); ?>/assets/images/homepagevideo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="hero-content">
        <h1>We are Australia's Premier Drone Show Storytellers</h1>
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
                <a href="/pre-producedshows" class="carousel-button">See Our Pre-Produced Shows</a>
            </div>
            <div class="carousel-item">
                <h2>First Lights</h2>
                <p>A place-responsive, choreographed drone light and sound experience, celebrating and honouring First Nations storytelling and cultural heritage.</p>
                <a href="/first-lights" class="carousel-button">See Our First Lights Shows</a>
            </div>
            <div class="carousel-item">
                <h2>Longform Shows</h2>
                <p>Longer-format performances blend drones, original sound, narration, lighting, and special effects into immersive, cinematic experiences.</p>
                <a href="/shows/longFormShows" class="carousel-button">See Our Longform Shows</a>
            </div>
        </div>
        <button class="carousel-arrow carousel-arrow-right" aria-label="Next slide">></button>
    </div>
</section>

<section class="gallery-section">
    <div class="gallery-grid">
        <div class="image-wrapper" data-video-id="ZDqIOKjJn8U" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-1.png" alt="Australian Education Union">
            <span class="image-overlay">
                Australian Education Union<br>For Every Child Campaign<br>Sydney, Australia
            </span>
        </div>
        <div class="image-wrapper" data-video-id="_ZdkLLRWfSE" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-2.png" alt="Aronui Arts Festival">
            <span class="image-overlay">
                Aronui Arts Festival<br>Rotorua, New Zealand
            </span>
        </div>
        <div class="image-wrapper" data-video-id="CrWockNS_YU" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-3.png" alt="Sealife Melbourne">
            <span class="image-overlay">
                Sealife Melbourne<br>Exhibit Opening Night<br>Melbourne, Australia
            </span>
        </div>
        <div class="image-wrapper" data-video-id="kOAwmiLm7v0" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-4.png" alt="Solar Eclipse Dark Sky Festival">
            <span class="image-overlay">
                Solar Eclipse Dark Sky Festival<br>Exmouth, Australia
            </span>
        </div>
        <div class="image-wrapper" data-video-id="BZiGpN4f8fg" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-5.png" alt="Bula Fiji">
            <span class="image-overlay">
                Bula Fiji<br>Private Celebration<br>Viti Levu, Fiji
            </span>
        </div>
        <div class="image-wrapper" data-video-id="QSqzBKDUyZQ" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-6.png" alt="Wanneroo 25">
            <span class="image-overlay">
                Wanneroo 25<br>Community Event<br>Perth, Australia
            </span>
        </div>
    </div>
</section>

<!-- Video Player Overlay -->
<div class="video-player-overlay" id="videoPlayerOverlay">
    <button class="close-video-player" onclick="closeVideoPlayer()">×</button>
    <div class="video-player-container">
        <iframe id="videoPlayerIframe" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    </div>
</div>

<section class="cta-section">
    <div class="cta-content">
        <h2>Interested In Planning A Drone Light Show?</h2>
        <a href="/contact" class="enquire-button">Enquire Now</a>
    </div>
    <div class="additional-images">
        <a href="/corporate-events" class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/corporateEvent.png" alt="Corporate Shows">
            <span class="image-overlay">Corporate Events</span>
        </a>
        <a href="/brand-storytelling" class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brandStorytelling.png" alt="Brand Storytelling">
            <span class="image-overlay">Brand Storytelling</span>
        </a>
        <a href="/public-events" class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/publicEvent.png" alt="Public Events">
            <span class="image-overlay">Public Events</span>
        </a>
        <a href="/private-events" class="image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/privateEvent.png" alt="Private Events">
            <span class="image-overlay">Private Events</span>
        </a>
    </div>
</section>
<?php get_footer(); ?>