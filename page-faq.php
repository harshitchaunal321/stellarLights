<?php
/*
Template Name: FAQ Page
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/faq.png');">
    <div class="hero-content">
        <h1>FAQS</h1>
        <p>Let us answer some common questions about drone light shows</p>
    </div>
    <div class="photo-credit-container">
        <div class="photo-credit">Photo Credit Line Here</div>
        <div class="photo-credit-line"></div>
    </div>
</div>

<div class="faq-container">
    <div id="faq-dropdown-1" class="faq-dropdown">
        <div class="dropdown-header" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block'; this.querySelector('.dropdown-icon').style.transform = this.nextElementSibling.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)';">
            <h2>How Do I Plan A Drone Light Show With Stellar Lights?</h2>
            <span class="dropdown-icon">⌄</span>
        </div>
        <div class="dropdown-content">
            <p>Planning begins with understanding your vision and goals. Our collaborative process involves clear, regular communication, simplifying complexity by managing logistics, technical planning, and regulatory approvals, ensuring you feel informed and confident from start to finish. <a href="/process">See our Process page here.</a></p>
        </div>
    </div>

    <div id="faq-dropdown-2" class="faq-dropdown">
        <div class="dropdown-header" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block'; this.querySelector('.dropdown-icon').style.transform = this.nextElementSibling.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)';">
            <h2>What Safety Measures Are In Place For Drone Light Shows?</h2>
            <span class="dropdown-icon">⌄</span>
        </div>
        <div class="dropdown-content">
            <p>Safety is paramount. Our drone shows meet global best-practice standards, with CASA approval for complex operations including launching fireworks from drones. Our highly trained team uses rigorous risk management, advanced containment technology, and meticulous real-time monitoring. Our commitment to safety is reflected in our exceptional safety record.</p>
        </div>
    </div>

    <div id="faq-dropdown-3" class="faq-dropdown">
        <div class="dropdown-header" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block'; this.querySelector('.dropdown-icon').style.transform = this.nextElementSibling.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)';">
            <h2>Can Stellar Lights Customize Drone Shows For My Specific Event?</h2>
            <span class="dropdown-icon">⌄</span>
        </div>
        <div class="dropdown-content">
            <p>Yes, apart from our ready-to-go Drone Show Collection, we specialise in bespoke drone experiences. Our creative consultancy process ensures each show is uniquely tailored, incorporating custom narratives, drone animations, and tailored soundtracks.</p>
        </div>
    </div>

    <div id="faq-dropdown-4" class="faq-dropdown">
        <div class="dropdown-header" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block'; this.querySelector('.dropdown-icon').style.transform = this.nextElementSibling.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)';">
            <h2>What Makes Drone Entertainment An Environmentally Friendly Event Option?</h2>
            <span class="dropdown-icon">⌄</span>
        </div>
        <div class="dropdown-content">
            <p>Yes, drone shows provide environmentally responsible entertainment, generating zero smoke, minimal noise, and no debris. Additionally, Stellar Lights often combines drones with sustainably sourced, low-emission fireworks from our partner, Howard and Sons, enhancing spectacle without environmental compromise.</p>
        </div>
    </div>

    <div id="faq-dropdown-5" class="faq-dropdown">
        <div class="dropdown-header" onclick="this.nextElementSibling.style.display = this.nextElementSibling.style.display === 'block' ? 'none' : 'block'; this.querySelector('.dropdown-icon').style.transform = this.nextElementSibling.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)';">
            <h2>Were Stellar Lights involved in past drone incidents on the Yarra in Melbourne and Swan River in Perth?</h2>
            <span class="dropdown-icon">⌄</span>
        </div>
        <div class="dropdown-content">
            <p>We get asked this all the time. No, Stellar Lights wasn’t involved in these incidents. Accidents can and will happen, but through our rigorous safety procedures, strict regulatory compliance, and extensive operational expertise, we ensure every performance we deliver is as safe, secure, and reliable as can be.</p>
        </div>
    </div>
</div>

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

<?php get_footer(); ?>