<?php
/*
Template Name: Shows Page
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/shows-hero-bg.png');">
    <div class="hero-content">
        <h1>Pioneering Entertainment in the Sky</h1>
        <p>Every project begins with a conversation. We take the time to understand your vision and objectives, then match it with the right creative direction and technical approach.</p>
    </div>
    <div class="photo-credit-container">
        <div class="photo-credit">Photo Credit Line Here</div>
    </div>
</div>

<!-- Shows Gallery Section (side-by-side images, scrollable on mobile) -->
<section class="shows-gallery-scroll">
    <div class="shows-gallery-scroll-inner">
        <a href="/shows/pre-produced" class="shows-gallery-image-link">
            <div class="shows-gallery-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/pre-produced.png');">
                <div class="shows-gallery-overlay">
                    <div class="shows-gallery-title">Pre-Produced Shows</div>
                    <div class="shows-gallery-subtitle">Overview Here</div>
                </div>
            </div>
        </a>
        <a href="/shows/featured" class="shows-gallery-image-link">
            <div class="shows-gallery-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/featured.png');">
                <div class="shows-gallery-overlay">
                    <div class="shows-gallery-title">Featured Shows</div>
                    <div class="shows-gallery-subtitle">Overview Here</div>
                </div>
            </div>
        </a>
        <a href="/shows/first-lights" class="shows-gallery-image-link">
            <div class="shows-gallery-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/featured.png');">
                <div class="shows-gallery-overlay">
                    <div class="shows-gallery-title">First Lights</div>
                    <div class="shows-gallery-subtitle">Overview Here</div>
                </div>
            </div>
        </a>
        <a href="/shows/longform-shows" class="shows-gallery-image-link">
            <div class="shows-gallery-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/featured.png');">
                <div class="shows-gallery-overlay">
                    <div class="shows-gallery-title">Longform Shows</div>
                    <div class="shows-gallery-subtitle">Overview Here</div>
                </div>
            </div>
        </a>
    </div>
</section>

<!-- How We Work Section -->
<section class="shows-how-we-work">
    <div class="shows-how-we-work-inner">
        <h2 class="shows-how-we-work-title">How We Work</h2>
        <div class="shows-how-we-work-desc">
            <p>Every project begins with a conversation. We take the time to understand your vision and objectives, then match it with the right creative direction and technical approach.</p>
            <p>Our creative producers, animators, technicians, and operations specialists work in close collaboration, ensuring every detail is considered—from regulatory approvals and safety plans, to soundtrack selection and animation timing.</p>
            <p>The result? A show that feels effortless for you, and extraordinary for your audience.</p>
        </div>
        <a href="/process" class="shows-how-we-work-btn">See our Process</a>
    </div>
</section>

<section id="cta-section" class="cta-section">
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

<section class="what-we-offer-section">
    <div class="what-we-offer-content">
        <h2>What We Offer</h2>
        <p>Our drone shows span everything from intimate private celebrations to city-scale public spectacles. Whether you're seeking a completely bespoke experience or a premium, ready-to-go display, Stellar Lights offers a creative and flexible solution tailored to your audience, environment, and goals.</p>
    </div>
    <div class="what-we-offer-grid">
        <div class="offer-item">
            <h3>Pre-Produced Shows</h3>
            <p>For those after premium impact with lower lead times, our pre-produced, award-winning drone shows are ready to license. These beautifully crafted shows deliver high-end experiences with seamless setup and excellent value.</p>
            <a href="/shows/pre-produced-shows" class="offer-button">See the Collection</a>
        </div>
        <div class="offer-item">
            <h3>Feature Shows</h3>
            <p>We create every Feature Show in close collaboration with you—taking the time to understand your audience, your event, and the story you want to tell.</p>
            <a href="/shows/feature-shows" class="offer-button">See the Shows</a>
        </div>
        <div class="offer-item">
            <h3>First Lights</h3>
            <p>First Lights is a place-responsive, choreographed drone light and sound experience, celebrating and honouring First Nations storytelling and cultural heritage. Presented by the Fremantle Biennale, First Lights is an epic spectacle of light, movement, and sound that deeply connects audiences to country and ancient knowledge.</p>
            <a href="/shows/first-lights" class="offer-button">See the Shows</a>
        </div>
        <div class="offer-item">
            <h3>Longform Shows</h3>
            <p>These longer-format performances blend drones, original sound, narration, lighting, and special effects into immersive, cinematic experiences. Rooted in place and story, they're designed for major public celebrations—inviting audiences on a journey that connects land, culture, and collective memory.</p>
            <a href="/shows/longform-shows" class="offer-button">See the Shows</a>
        </div>
    </div>
</section>

<section class="shows-video-gallery-section">
    <div class="shows-video-gallery-inner">
        <div class="shows-video-item" data-video-id="SD9YX8B2JDM" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-1.png" alt="Australian Education Union">
            <div class="shows-video-overlay">
                <span class="shows-video-text">Australian Education Union<br>For Every Child Campaign</span>
            </div>
        </div>
        <div class="shows-video-item" data-video-id="SD9YX8B2JDM" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-2.png" alt="Rotorua, New Zealand">
            <div class="shows-video-overlay">
                <span class="shows-video-text">Rotorua, New Zealand<br>Aronui Arts Festival</span>
            </div>
        </div>
        <div class="shows-video-item" data-video-id="SD9YX8B2JDM" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-3.png" alt="Sealife Melbourne">
            <div class="shows-video-overlay">
                <span class="shows-video-text">Sealife Melbourne<br>Exhibit Opening Night</span>
            </div>
        </div>
        <div class="shows-video-item" data-video-id="SD9YX8B2JDM" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-4.png" alt="Ningaloo, Exmouth">
            <div class="shows-video-overlay">
                <span class="shows-video-text">Ningaloo, Exmouth<br>Solar Eclipse/Dark Sky Festival</span>
            </div>
        </div>
        <div class="shows-video-item" data-video-id="SD9YX8B2JDM" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-5.png" alt="Darwin Festival">
            <div class="shows-video-overlay">
                <span class="shows-video-text">Location<br>Darwin Festival</span>
            </div>
        </div>
        <div class="shows-video-item" data-video-id="SD9YX8B2JDM" onclick="openVideoPlayer(this)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery-image-6.png" alt="Viti Levu, Fiji">
            <div class="shows-video-overlay">
                <span class="shows-video-text">Viti Levu, Fiji<br>Private Celebration</span>
            </div>
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

<section id="cta-section" class="cta-section">
    <div class="cta-content">
        <h2>Interested In Planning A Drone Light Show?</h2>
        <a href="/contact" class="enquire-button">Enquire Now</a>
    </div>
    
</section>

<?php get_footer(); ?> 