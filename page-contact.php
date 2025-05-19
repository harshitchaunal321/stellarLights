<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/contact.png');">
    <div class="hero-content">
        <h1>Let us tell your story</h1>
    </div>
    <div class="photo-credit-container">
        <div class="photo-credit">Photo Credit Line Here</div>
    </div>
</div>

<div class="contact-container">
    <div class="contact-content">
        <h2>Contact Us</h2>
        <p class="contact-intro">Get in touch & tell us your story—our team will be more than happy to talk you through our wider offering and work with you to identify the best outdoor, indoor or residency solution to suit your requirements.</p>
        
        <form id="contact-form" class="contact-form" method="post">
            <div class="form-grid">
                <div class="form-group">
                    <input type="text" id="name" name="name" required>
                    <label for="name">Name</label>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="email" required>
                    <label for="email">Email Address</label>
                </div>
                <div class="form-group">
                    <input type="text" id="company" name="company">
                    <label for="company">Company Name</label>
                </div>
                <div class="form-group">
                    <input type="tel" id="phone" name="phone">
                    <label for="phone">Contact Number</label>
                </div>
                <div class="form-group">
                    <input type="text" id="location" name="location">
                    <label for="location">Show Location</label>
                </div>
                <div class="form-group">
                    <input type="text" id="date" name="date" class="date-input" onfocus="this.type='date'" placeholder=" ">
                    <label for="date">Proposed Show Date</label>
                </div>
            </div>
            
            <div class="form-group event-detail-group">
                <textarea id="message" name="message" rows="5" ></textarea>
                 <label for="date">Event Detail</label>
            </div>
            
             <button class="submit-button">Send</button>
            <div class="instagram-section">
    <div class="instagram-header">
        <span class="follow-text">Follow Our Shows On Instagram</span>
    </div>
    <div class="instagram-reels-container">
        <!-- Instagram Reel 1 -->
        <a href="https://www.instagram.com/stellar___lights/" target="_blank" rel="noopener noreferrer" class="instagram-reel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reel1.png" alt="Instagram Reel 1" class="reel-image">
            <div class="reel-overlay">
            </div>
        </a>
        <!-- Instagram Reel 2 -->
        <a href="https://www.instagram.com/stellar___lights/" target="_blank" rel="noopener noreferrer" class="instagram-reel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reel2.png" alt="Instagram Reel 2" class="reel-image">
            <div class="reel-overlay">
            </div>
        </a>
        <!-- Instagram Reel 3 -->
        <a href="https://www.instagram.com/stellar___lights/" target="_blank" rel="noopener noreferrer" class="instagram-reel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reel3.png" alt="Instagram Reel 3" class="reel-image">
            <div class="reel-overlay">
            </div>
        </a>
        <!-- Instagram Reel 4 -->
        <a href="https://www.instagram.com/stellar___lights/" target="_blank" rel="noopener noreferrer" class="instagram-reel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reel4.png" alt="Instagram Reel 4" class="reel-image">
            <div class="reel-overlay">
            </div>
        </a>
        <!-- Instagram Reel 5 -->
        <a href="https://www.instagram.com/stellar___lights/" target="_blank" rel="noopener noreferrer" class="instagram-reel">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/reel5.png" alt="Instagram Reel 5" class="reel-image">
            <div class="reel-overlay">
            </div>
        </a>
    </div>
</div>
        </form>
    </div>
</div>

<?php get_footer(); ?>