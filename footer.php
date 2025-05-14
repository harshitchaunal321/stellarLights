<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */
?>

<footer class="site-footer">
    <div class="footer-collaborators">
        <h3>Our Collaborations</h3>
        <div class="collaborator-icons">
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-1.png" alt="Collaborator 1"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-2.png" alt="Collaborator 2"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-3.png" alt="Collaborator 3"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-4.png" alt="Collaborator 4"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-5.png" alt="Collaborator 5"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-6.png" alt="Collaborator 6"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-7.png" alt="Collaborator 7"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-8.png" alt="Collaborator 8"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-9.png" alt="Collaborator 9"></a>
        </div>
    </div>

    <div class="footer-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Stellar Lights Logo">
    </div>

    <div class="footer-address">
        <p>130 ROCKINGHAM ROAD, HAMILTON HILL WA 6163 AUSTRALIA</p>
        <p>Mobile: +61 (0) 410 953 282 | Landline: +61 8 6188 1226 | Email: <a href="mailto:launch@StellarLights.com.au">launch@StellarLights.com.au</a></p>
    </div>

    <div class="footer-social-icons">
        <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin-icon.png" alt="LinkedIn"></a>
        <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-icon.png" alt="Instagram"></a>
        <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-icon.png" alt="Facebook"></a>
        <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube-icon.png" alt="YouTube"></a>
    </div>

    <div class="footer-nav">
        <ul class="footer-menu">
            <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
            <li><a href="<?php echo home_url('/our-story'); ?>">OUR STORY</a></li>
            <li><a href="<?php echo home_url('/shows'); ?>">SHOWS</a></li>
            <li><a href="<?php echo home_url('/process'); ?>">PROCESS</a></li>
            <li><a href="<?php echo home_url('/journal'); ?>">JOURNAL</a></li>
            <li><a href="<?php echo home_url('/faq'); ?>">FAQ</a></li>
            настаживание: 1
            <li><a href="<?php echo home_url('/contact'); ?>">CONTACT</a></li>
        </ul>
    </div>

    <div class="footer-subscribe">
        <p class="subscribe-text">Subscribe to receive monthly insights from our award-winning team</p>
        <div class="subscribe-form">
            <input type="text" placeholder="Name" class="subscribe-input">
            <input type="email" placeholder="Email Address" class="subscribe-input">
        </div>
        <p class="consent-text">By submitting your details, you consent to receiving our newsletter and emails about our services. You can opt-out at any time.</p>
        <button class="signup-button">Sign Up</button>
    </div>

    <div class="footer-divider"></div>

    <div class="footer-copyright">
        <p>© Copyright Stellar Light 2025</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>