<?php
/*
Template Name: Journal Page
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/journal.png');">
    <div class="hero-content">
        <h1>The Stellar Blog</h1>
        <p>Stellar Blog updated here</p>
    </div>
    <div class="photo-credit-container">
        <div class="photo-credit">Photo Credit Line Here</div>
    </div>
</div>

<section id="blog-posts-section" class="blog-posts-section">
    <div class="blog-post">
        <a href="/journal/behind-the-scenes-drone-light-shows">
            <div class="blog-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/drone-light-show.png" alt="Drone Light Show">
                <div class="blog-content">
                    <h3>Behind-The-Scenes: Creating Australia’s Best Drone Light Shows</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                </div>
            </div>
        </a>
    </div>
    <div class="blog-post">
        <a href="/journal/inside-stellar-lights-storytelling">
            <div class="blog-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stellar-lights-storytelling.jpeg" alt="Stellar Lights Storytelling">
                <div class="blog-content">
                    <h3>Transforming Events: The Rise Of Drone Entertainment In Australia</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                </div>
            </div>
        </a>
    </div>
     <div class="blog-post">
        <a href="/journal/stellar-lights-case-study">
            <div class="blog-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stellar-lights-casestudy.png" alt="Stellar Lights Case Study">
                <div class="blog-content">
                    <h3>Case Study: Revolutionizing Corporate Events With Custom Drone Displays</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                </div>
            </div>
        </a>
    </div>
    <div class="blog-post">
        <a href="/journal/stellar-lights-insides">
            <div class="blog-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stellar-lights-insides.png" alt="Stellar Lights Insides">
                <div class="blog-content">
                    <h3>Inside Stellar Lights: Mastering Creative Storytelling With Drones</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                </div>
            </div>
        </a>
    </div>
</section>



<section id="cta-section" class="cta-section">
    <div class="cta-content">
        <h2>Interested In Planning A Drone Light Show?</h2>
        <a href="/contact" class="enquire-button">Enquire Now</a>
    </div>
</section>

<?php get_footer(); ?>