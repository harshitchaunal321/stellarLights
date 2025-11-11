<?php
/*
Template Name: Why We Build in 3D
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/journal6banner.png');">
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
            <h1 class="journal-title">Why We Build in 3D: Designing From the Ground Up</h1>
            
            <div class="journal-text">
                <p>We do not design shows in a vacuum. When the terrain is complex or the show demands a tighter connection to place, we build a digital twin of the site that mirrors real-world features.</p>
                
                <p>Using survey-grade RTK GPS and leading GIS tools we create detailed 3D models, capturing elevation, obstructions, and key audience sightlines. We then animate and simulate from the viewer's perspective to ensure each moment lands with clarity and intent.</p>
                
                <p>Light behaves differently depending on where it is and what surrounds it. It reflects off water, dapples through trees, and climbs the contours of hills. Precision lets us choreograph with confidence, not only in the sky but in relation to the ground it illuminates.</p>
            </div>
            
            <!-- First set of 3 images -->
            <div class="journal-images-grid">
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal6inside1.jpg" alt="3D Design 1">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal6inside2.jpg" alt="3D Design 2">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal6inside3.jpg" alt="3D Design 3">
                </div>
            </div>
            
            <div class="journal-text">
                <p>If your space has a dramatic slope, we will fly with it. If it features a central tree or sculpture, we can wrap light around it. The landscape becomes part of the story, a collaborator rather than a constraint. When drones engage with place they transform from lights in the sky into a dialogue with the land. That is why when it matters most we design from the ground up.</p>
            </div>
            
            <!-- Second set of 3 images -->
            <div class="journal-images-grid">
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal6inside4.jpg" alt="3D Design 4">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal6inside5.jpg" alt="3D Design 5">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal6inside6.jpg" alt="3D Design 6">
                </div>
            </div>
            
            <!-- Next Journal Article Navigation -->
            <div class="next-journal-navigation">
                <a href="/journal/the-creative-conductor" class="next-journal-link">
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

