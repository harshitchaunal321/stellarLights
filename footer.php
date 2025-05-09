<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */
?>

<footer class="site-footer">
    <div class="footer-collaborators">
        <h3>Our Collaborators</h3>
        <div class="collaborator-icons">
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-1.png" alt="Collaborator 1"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-2.png" alt="Collaborator 2"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-3.png" alt="Collaborator 3"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-4.png" alt="Collaborator 4"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/collaborator-5.png" alt="Collaborator 5"></a>
        </div>
    </div>

    <div class="footer-nav">
        <ul class="footer-menu">
            <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
            <li><a href="<?php echo home_url('/services'); ?>">Services</a></li>
            <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
        </ul>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 Stellar Lights. All rights reserved.</p>
        <div class="social-icons">
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-icon.png" alt="Facebook"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-icon.png" alt="Twitter"></a>
            <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram-icon.png" alt="Instagram"></a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>