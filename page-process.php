<?php
/*
Template Name: Process Page
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/process.png');">
    <div class="hero-content">
        <h1>The Stellar Process</h1>
        <p>Overview of the show process lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="photo-credit-container">
        <div class="photo-credit">Photo Credit Line Here</div>
    </div>
</div>


<section class="process-content-section">
    <div class="process-container">
        <div class="process-intro">
            <p>Bringing a drone light show to life is not unlike producing a short film. It requires a blend of artistic vision, technical precision, and creative collaboration—pulling together sound designers, animators, writers, lighting specialists, and storytellers to shape an immersive experience that connects with audiences. Each show is unique, and our process ensures it's brought to life with clarity, care, and creativity.</p>
        </div>

        <div class="interactive-process-section">
            <div class="process-card">
                <div class="process-header">
                    <div>
                        <h2>Where Creativity Takes Flight</h2>
                        <p class="short-description">We offer a diverse range of drone show formats—bespoke spectacles, curated touring works, cultural collaborations, and corporate experiences.</p>
                    </div>
                    <div class="expand-icon"></div>
                </div>
                <div class="process-content">
                    <p>We offer a diverse range of drone show formats—bespoke spectacles, curated touring works, cultural collaborations, and corporate experiences—all grounded in a deep respect for story and place. Whether launching over city skylines, oceanfronts, or festival arenas, our shows combine light, sound, and movement to deliver unforgettable moments in the sky.</p>
                </div>
            </div>
        </div>

        <div class="interactive-process-section">
            <div class="process-card">
                <div class="process-header">
                    <div>
                        <h2>Artistic & Technical Direction</h2>
                        <p class="short-description">The strongest shows are built on visionary leadership. Once we understand your event, audience, and intended emotional impact.</p>
                    </div>
                    <div class="expand-icon"></div>
                </div>
                <div class="process-content">
                    <p>The strongest shows are built on visionary leadership. Once we understand your event, audience, and intended emotional impact, we appoint a creative lead to shape the story and a technical lead to chart its real-world delivery.</p>
                </div>
            </div>
        </div>

        <div class="interactive-process-section">
            <div class="process-card">
                <div class="process-header">
                    <div>
                        <h2>Storyboarding & Scriptwriting</h2>
                        <p class="short-description">Stories connect us. They give shape to feeling, place to memory, and context to spectacle.</p>
                    </div>
                    <div class="expand-icon"></div>
                </div>
                <div class="process-content">
                    <p>Stories connect us. They give shape to feeling, place to memory, and context to spectacle. Our creative team works closely with clients to develop compelling narratives that resonate with audiences and create meaningful connections through the power of synchronized light and movement in the sky.</p>
                </div>
            </div>
        </div>

        <div class="interactive-process-section">
            <div class="process-card">
                <div class="process-header">
                    <div>
                        <h2>Technical Planning & Execution</h2>
                        <p class="short-description">Every show requires meticulous technical planning to ensure flawless execution and safety.</p>
                    </div>
                    <div class="expand-icon"></div>
                </div>
                <div class="process-content">
                    <p>Every show requires meticulous technical planning to ensure flawless execution and safety. Our technical team conducts site surveys, weather assessments, flight path planning, and coordinates with local authorities to deliver spectacular shows that exceed expectations while maintaining the highest safety standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="cta-section" class="cta-section">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const processCards = document.querySelectorAll('.process-card');
    
    processCards.forEach(card => {
        card.addEventListener('click', function() {
            // Close all other cards first
            processCards.forEach(otherCard => {
                if (otherCard !== card && otherCard.classList.contains('expanded')) {
                    otherCard.classList.remove('expanded');
                    otherCard.querySelector('.process-content').style.maxHeight = '0';
                    otherCard.querySelector('.process-content').style.opacity = '0';
                    otherCard.querySelector('.process-content').style.marginTop = '0';
                    otherCard.querySelector('.process-content').style.paddingTop = '0';
                    otherCard.querySelector('.process-content').style.borderTop = 'none';
                    otherCard.querySelector('.short-description').style.display = 'block';
                }
            });
            
            // Toggle current card
            this.classList.toggle('expanded');
            const content = this.querySelector('.process-content');
            const shortDesc = this.querySelector('.short-description');
            
            if (this.classList.contains('expanded')) {
                content.style.maxHeight = content.scrollHeight + 'px';
                content.style.opacity = '1';
                content.style.marginTop = '2rem';
                content.style.paddingTop = '2rem';
                content.style.borderTop = '1px solid #eee';
                shortDesc.style.display = 'none';
            } else {
                content.style.maxHeight = '0';
                content.style.opacity = '0';
                content.style.marginTop = '0';
                content.style.paddingTop = '0';
                content.style.borderTop = 'none';
                shortDesc.style.display = 'block';
            }
        });
    });
});
</script>

<?php get_footer(); ?>