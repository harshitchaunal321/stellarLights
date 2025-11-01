<?php
/*
Template Name: The Creative Conductor
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/journal7banner.png');">
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
            <h1 class="journal-title">The Creative Conductor: Why Every Show Needs a Lead</h1>
            
            <div class="journal-text">
                <p>It takes a diverse team to make a drone show. Writers, animators, sound designers, editors, lighting specialists, technicians, and operators. What makes all those parts work together is creative leadership.</p>
                
                <p>Every Stellar Lights show is guided by a dedicated Creative Director, someone with the vision and experience to shape the emotional arc, unify the visual language, and ensure the work speaks with one voice.</p>
                
                <p>That Creative Director is supported by a Creative Producer, a detail-focused partner who manages timelines, creative flow, feedback loops, and delivery milestones. Together they bring cohesion and clarity to what could otherwise be a scattered process.</p>
            </div>
            
            <!-- First set of 3 images -->
            <div class="journal-images-grid">
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal7inside1.jpg" alt="Creative Conductor 1">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal7inside2.jpg" alt="Creative Conductor 2">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal7inside3.jpg" alt="Creative Conductor 3">
                </div>
            </div>
            
            <div class="journal-text">
                <p>Think of it like an orchestra. The musicians are world-class, but without someone to guide the tempo, shape the dynamics, and bring it together, you do not get music, you get noise. The same is true in drone storytelling. Creative leadership ensures that the animation moves in harmony with the soundtrack, that the script resonates with the visuals, and that every decision supports the central idea. It turns individual moments into a unified experience.</p>
                
                <p>At Stellar we do not just assemble talented people, we assemble teams. That is a subtle but important difference and it is why our shows consistently deliver creative depth and operational excellence. When the right people are working well together, the result is more than the sum of its parts.</p>
            </div>
            
            <!-- Second set of 3 images -->
            <div class="journal-images-grid">
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal7inside4.jpg" alt="Creative Conductor 4">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal7inside5.jpg" alt="Creative Conductor 5">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal7inside6.jpg" alt="Creative Conductor 6">
                </div>
            </div>
            
            <!-- Next Journal Article Navigation -->
            <div class="next-journal-navigation">
                <a href="/journal/not-just-pixels-in-the-sky" class="next-journal-link">
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

