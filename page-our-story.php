<?php
/**
 * Template Name: Our Story
 * Description: A custom page template for the Our Story page.
 */
get_header(); ?>

<main id="main-content">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-story-home.png" alt="Our Story Hero Image">
        </div>
        <div class="photo-credit-container">
        <div class="photo-credit">Photo Credit Line Here</div>
    </div>
    </section>

    <!-- Hero Text Section -->
    <section class="hero-text-section">
        <div class="container">
            <p>
                Stellar Lights began as a unique collaboration between Fremantle Biennale, a contemporary arts festival, and Global Unmanned Systems, specialists in complex drone operations.</br> </br>During the global pandemic, Fremantle Biennale envisioned a spectacular drone show for its Crossing 21 festival. With no local expertise available, they partnered with Global Unmanned Systems to create Moombaki, Australia's first large-scale drone spectacle. Featuring over 160 drones, Moombaki illuminated Fremantle's waterways, bringing ancient Nyoongar creation stories vividly to life.</br></br> This groundbreaking project established Stellar Lights as Australia's leading drone entertainment provider, combining cultural storytelling with innovative drone technology to deliver unforgettable experiences nationwide.
            </p>
        </div>
    </section>

    <!-- Image Gallery Section -->
    <section class="image-gallery">
        <div class="container">
            <div class="gallery-container">
                <div class="gallery-item">
                    <div class="gallery-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ourStoryStoryTelling.png" alt="Story Telling">
                        <p class="gallery-text">Story Telling</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ourStoryFilmMaking.png" alt="Film Making">
                        <p class="gallery-text">Film Making</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <div class="gallery-image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ourStoryAnimation.png" alt="Animation">
                        <p class="gallery-text">Animation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technical Strengths Section -->
    <section class="strengths-section">
        <div class="container">
            <h2>Our Technical Strengths</h2>
            <p>
                Our technical foundations stem from Global Unmanned Systems' extensive international experience in complex drone operations. We have achieved groundbreaking, country-first permissions for drone operations on significant global construction and infrastructure projects, across Australia, Kazakhstan, Timor-Leste, and Papua New Guinea. Our clients include global energy corporations, natural resource companies, NGOs, and organisations, all entrusting us with challenging drone missions.
            </p>
            <p>
                We develop, build, and operate drones globally under stringent regulatory frameworks, mastering aviation laws, rigorous safety protocols, and operational compliance. Our meticulous approach guarantees the highest standards of safety and reliability, ensuring peace of mind in your event.
            </p>
        </div>
    </section>

    <!-- Creative Strengths Section -->
    <section class="strengths-section">
        <div class="container">
            <h2>Our Creative Strengths</h2>
            <p>
                Creatively, we leverage Fremantle Biennale's exceptional artistic vision and extensive network of leading creatives across Australia and international partners. Renowned for innovative cultural storytelling, Fremantle Biennale specialises in immersive, site-specific contemporary art experiences. Through this collaboration, Stellar Lights delivers artistic excellence and visionary storytelling in every drone performance, setting new standards in drone entertainment.
            </p>
        </div>
    </section>

    <!-- Shows Section -->
    <section class="shows-section">
        <div class="container">
            <div class="shows-grid">
                <div class="show-item">
                    <h3>Pre-Produced Shows</h3>
                    <p>
                        For those after premium impact with lower lead times, our pre-produced, award-winning drone shows are ready to license.
                    </p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="show-item">
                    <h3>Feature Shows</h3>
                    <p>
                        We create every feature show in close collaboration with you—taking the time to understand the story you want to tell.
                    </p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="show-item">
                    <h3>First Lights</h3>
                    <p>
                        A place-responsive, choreographed drone, light, and sound experience, celebrating and honouring first nations storytelling and cultural heritage.
                    </p>
                    <a href="#" class="read-more">Read More</a>
                </div>
                <div class="show-item">
                    <h3>Longform Shows</h3>
                    <p>
                        Longer-format performances blend drones, original sound, narration, lighting, and special effects into immersive, cinematic experiences.
                    </p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>