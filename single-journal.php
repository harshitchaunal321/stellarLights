<?php
/*
Template Name: Journal Detail Page
*/
get_header(); 

// Get the current post data
$current_post = get_post();
$post_id = $current_post->ID;

// Get the featured image
$featured_image = get_the_post_thumbnail_url($post_id, 'full');
if (!$featured_image) {
    $featured_image = get_template_directory_uri() . '/assets/images/journal-default.png';
}

// Get the post title
$post_title = get_the_title();

// Get the post content
$post_content = get_the_content();

// Get the next post for navigation
$next_post = get_next_post();
$next_post_url = $next_post ? get_permalink($next_post->ID) : '';
$next_post_title = $next_post ? $next_post->post_title : '';
?>

<div class="hero-section" style="background-image: url('<?php echo esc_url($featured_image); ?>');">
    <div class="hero-content">
        <!-- Hero content can be empty for detail pages -->
    </div>
    <div class="photo-credit-container">
        <div class="photo-credit">Photo Credit Line Here</div>
    </div>
</div>

<section class="journal-detail-section">
    <div class="container">
        <div class="journal-content">
            <h1 class="journal-title"><?php echo esc_html($post_title); ?></h1>
            
            <div class="journal-text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            </div>
            
            <!-- First set of 3 images -->
            <div class="journal-images-grid">
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal-detail-1.png" alt="Journal Detail Image 1">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal-detail-2.png" alt="Journal Detail Image 2">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal-detail-3.png" alt="Journal Detail Image 3">
                </div>
            </div>
            
            <div class="journal-text">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
            </div>
            
            <!-- Second set of 3 images -->
            <div class="journal-images-grid">
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal-detail-4.png" alt="Journal Detail Image 4">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal-detail-5.png" alt="Journal Detail Image 5">
                </div>
                <div class="journal-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/journal-detail-6.png" alt="Journal Detail Image 6">
                </div>
            </div>
            
            <!-- Next Journal Article Navigation -->
            <?php if ($next_post_url): ?>
            <div class="next-journal-navigation">
                <a href="<?php echo esc_url($next_post_url); ?>" class="next-journal-link">
                    <em>Next Journal Article</em>
                </a>
            </div>
            <?php endif; ?>
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