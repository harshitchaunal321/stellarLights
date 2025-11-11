<?php
/*
Template Name: Pre-Produced Show
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Seagull&SeaHeader.png');">
    <div class="hero-content">
    <h1>Pre-Produced Shows</h1>
    <p>For those after premium impact with lower lead times, our pre-produced, award-winning drone shows are ready to license. These beautifully crafted shows deliver high-end experiences with seamless setup and excellent value.</p>
    </div>
    <div class="photo-credit-container">
        <div class="photo-credit">Jarrad Russel</div>
    </div>
</div>

<div class="pre-produced-show-content">
    <div class="breadcrumbs">
        <a href="/shows">SHOWS</a> > <span class="current-page">PRE-PRODUCED SHOWS</span>
    </div>

    <section class="show-intro-section">
        <p>Need something less bespoke, more cost-effective and ready to go? We've created a collection of drone shows produced with the same level of creative flair and artistic dedication we pride ourselves on.</p>
        <p>Our exclusive Drone Show Collection features pre-designed, award-winning premium drone performances crafted by Australia's leading creative experts. These carefully curated drone displays are versatile, impactful, and easily accessible, offering optimal value with minimal lead time through convenient licensing options.</p>
    </section>

    <section class="show-details-section">
        <div class="show-title-licensing">
            <h2 id="show-title">The Seagull & The Sea</h2>
            <span class="licensing-info" id="licensing-info">LICENSING AVAILABLE</span>
        </div>
        <div class="show-description" id="show-description">
            <p>Playful, poetic, and richly textured, The Seagull & the Sea captures the energy of coastal life through a spectacular aerial performance. This family-friendly drone show evokes the chaos and beauty of seagulls swirling above the shore—boisterous, unpredictable, and full of character—before diving into a dreamlike sequence that celebrates the connection between ocean, river, and childlike curiosity.</p>
            <p>As feathered flocks crash and lift like waves, audiences are drawn into a vivid narrative of tidal rhythms, beach discoveries, and the deep, unspoken wisdom of the sea. With sweeping choreography, an immersive soundtrack, and moments of joyful nostalgia, The Seagull & the Sea is a tribute to the places where rivers meet oceans—and where generations meet wonder.</p>
        </div>
    </section>

    <section id="show-video-section" class="show-video-section" data-video-id="kbo4Rmew2dU">
        <img id="show-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/seagull-and-sea-video.png" alt="The Seagull & The Sea Video Thumbnail">
        <div id="video-container" class="video-container" style="display: none;"></div>
    </section>

    <div class="show-credits-bottom" id="show-credits">
        <p>Story by Ron Bradfield | Animation by Jarrad Russell</p>
        <p>Music & Sound design by Envelope Audio</p>
        <p>Performed by Ron Bradfield</p>
    </div>

    <nav class="show-pagination-nav">
        <a href="#" class="show-nav-link prev-show-link" onclick="event.preventDefault(); showPrevious();">Previous Show</a>
        <div class="show-nav-arrows">
            <a href="#" class="arrow-circle" onclick="event.preventDefault(); showPrevious();">&lt;</a>
            <a href="#" class="arrow-circle" onclick="event.preventDefault(); showNext();">&gt;</a>
        </div>
        <a href="#" class="show-nav-link next-show-link" onclick="event.preventDefault(); showNext();">Next Show</a>
    </nav>

    <section class="other-shows-section">
        <h3>See Our Other Types Of Shows</h3>
        <div class="other-shows-grid">
            <div class="other-show-item">
                <h4>Feature Shows</h4>
                <p>We create every feature show in close collaboration with you—taking the time to understand the story you want to tell.</p>
                <a href="/shows/feature-shows" class="read-more-btn">Read More</a>
            </div>
            <div class="other-show-item">
                <h4>First Lights</h4>
                <p>A place-responsive, choreographed drone light and sound experience, celebrating and honouring first nations storytelling and cultural heritage.</p>
                <a href="/shows/first-lights" class="read-more-btn">Read More</a>
            </div>
            <div class="other-show-item">
                <h4>Longform Shows</h4>
                <p>Longer-format performances blend drones, original sound, narration, lighting, and special effects into immersive, cinematic experiences.</p>
                <a href="/shows/longFormShows" class="read-more-btn">Read More</a>
            </div>
        </div>
    </section>

    <!-- Video Player Overlay -->
    <div class="video-player-overlay" id="videoPlayerOverlay">
        <button class="close-video-player" onclick="closeVideoPlayer()">×</button>
        <div class="video-player-container">
            <iframe id="videoPlayerIframe" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
    </div>

    <section id="cta-section" class="cta-section">
        <div class="cta-content">
            <h2>Interested In Planning A Drone Light Show?</h2>
            <a href="/contact" class="enquire-button">Enquire Now</a>
        </div>
    </section>
</div>

<script>
const shows = [
    {
        title: 'The Seagull & The Sea',
        licensingText: 'LICENSING AVAILABLE',
        descriptionHTML: `
            <p>Playful, poetic, and richly textured, The Seagull & the Sea captures the energy of coastal life through a spectacular aerial performance. This family-friendly drone show evokes the chaos and beauty of seagulls swirling above the shore—boisterous, unpredictable, and full of character—before diving into a dreamlike sequence that celebrates the connection between ocean, river, and childlike curiosity.</p>
            <p>As feathered flocks crash and lift like waves, audiences are drawn into a vivid narrative of tidal rhythms, beach discoveries, and the deep, unspoken wisdom of the sea. With sweeping choreography, an immersive soundtrack, and moments of joyful nostalgia, The Seagull & the Sea is a tribute to the places where rivers meet oceans—and where generations meet wonder.</p>`,
        videoId: 'kbo4Rmew2dU',
        imageSrc: '<?php echo get_template_directory_uri(); ?>/assets/images/seagull-and-sea-video.png',
        imageAlt: 'The Seagull & The Sea Video Thumbnail',
        creditsHTML: `
            <p>Story by Ron Bradfield | Animation by Jarrad Russell</p>
            <p>Music & Sound design by Envelope Audio</p>
            <p>Performed by Ron Bradfield</p>`
    },
    {
        title: 'Twins',
        licensingText: 'LICENSING AVAILABLE',
        descriptionHTML: `
            <p>A story of light, duality, and cosmic harmony</p>
            <p>Set to a driving, cinematic score, Twins is a bold and immersive drone performance that explores the relationship between two celestial forces—twin spirits dancing in the sky, mirroring and defying one another in perfect synchronicity.</p>
            <p>With sweeping visuals and precise formation work, the drones conjure shifting patterns of tension and unity, balance and divergence—pulling the audience into a rhythm that feels both ancient and futuristic. Circles orbit, divide, and reunite. Spirals uncoil and reform. And through it all, the twins remain: two energies in constant motion, reflecting the dynamics of light and shadow, creation and collapse.</p>
            <p>Twins is a visually rich and emotionally charged experience—ideal for festivals, public gatherings, and large-scale celebrations. Its structure and energy make it an ideal complement to a fireworks display, providing contrast, narrative depth, and a heightened sense of anticipation before or after the pyrotechnics begin.</p>`,
        videoId: 'gauu1QfiRYo',
        imageSrc: '<?php echo get_template_directory_uri(); ?>/assets/images/twins-thumbnail.png', // NOTE: Using placeholder image
        imageAlt: 'Twins Video Thumbnail',
        creditsHTML: `<p>Animation by Jarrad Russell</p>
                      <p>Music & Sound design by Envelope Audio</p>`
    }
];

let currentShowIndex = 0;

const showTitleEl = document.getElementById('show-title');
const licensingInfoEl = document.getElementById('licensing-info');
const showDescriptionEl = document.getElementById('show-description');
const showVideoSectionEl = document.getElementById('show-video-section');
const showImageEl = document.getElementById('show-image');
const showCreditsEl = document.getElementById('show-credits');
const showDetailsSectionEl = document.querySelector('.show-details-section');

function updateShowContent(index) {
    const show = shows[index];
    showTitleEl.textContent = show.title;
    licensingInfoEl.textContent = show.licensingText;
    showDescriptionEl.innerHTML = show.descriptionHTML;
    showVideoSectionEl.dataset.videoId = show.videoId;
    showImageEl.src = show.imageSrc;
    showImageEl.alt = show.imageAlt;
    showCreditsEl.innerHTML = show.creditsHTML;
}

function showNext() {
    currentShowIndex = (currentShowIndex + 1) % shows.length;
    updateShowContent(currentShowIndex);
    showDetailsSectionEl.scrollIntoView({ behavior: 'smooth' });
}

function showPrevious() {
    currentShowIndex = (currentShowIndex - 1 + shows.length) % shows.length;
    updateShowContent(currentShowIndex);
    showDetailsSectionEl.scrollIntoView({ behavior: 'smooth' });
}

// Video player functions
function openVideoPlayer(element) {
    const videoId = element.dataset.videoId || element.closest('[data-video-id]')?.dataset.videoId;
    const overlay = document.getElementById('videoPlayerOverlay');
    const iframe = document.getElementById('videoPlayerIframe');
    if (videoId && overlay && iframe) {
        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&modestbranding=1&playsinline=1`;
        overlay.classList.add('active');
    }
}

function closeVideoPlayer() {
    const overlay = document.getElementById('videoPlayerOverlay');
    const iframe = document.getElementById('videoPlayerIframe');
    if (overlay && iframe) {
        overlay.classList.remove('active');
        iframe.src = '';
    }
}

// Scroll-based autoplay functionality
let videoAutoplayed = false;

function initVideoAutoplay() {
    const videoSection = document.getElementById('show-video-section');
    const showImage = document.getElementById('show-image');
    const videoContainer = document.getElementById('video-container');
    
    if (!videoSection || !showImage || !videoContainer) return;
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !videoAutoplayed) {
                const videoId = videoSection.dataset.videoId;
                if (videoId) {
                    // Hide image and show video
                    showImage.style.display = 'none';
                    videoContainer.style.display = 'block';
                    
                    // Create iframe for embedded autoplay
                    const iframe = document.createElement('iframe');
                    iframe.width = '100%';
                    iframe.height = '100%';
                    iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&mute=1&loop=1&playlist=${videoId}&controls=1&rel=0&modestbranding=1&playsinline=1`;
                    iframe.frameBorder = '0';
                    iframe.allow = 'autoplay; encrypted-media; picture-in-picture';
                    iframe.allowFullscreen = true;
                    iframe.style.width = '100%';
                    iframe.style.height = '100%';
                    
                    videoContainer.innerHTML = '';
                    videoContainer.appendChild(iframe);
                    
                    videoAutoplayed = true;
                }
            }
        });
    }, {
        threshold: 0.3 // Trigger when 30% of the video section is visible
    });
    
    observer.observe(videoSection);
    
    // Make video section clickable to open in overlay
    videoSection.addEventListener('click', function(e) {
        // Don't prevent iframe clicks, but allow clicking on the container or section itself
        if (e.target === videoSection || e.target === videoContainer || e.target === showImage || e.target.closest('.video-container')) {
            // Stop event propagation if clicking on the iframe itself
            if (e.target.tagName === 'IFRAME') {
                e.stopPropagation();
            } else {
                e.preventDefault();
                openVideoPlayer(videoSection);
            }
        }
    });
}

// Reset autoplay when show changes
const originalUpdateShowContent = updateShowContent;
updateShowContent = function(index) {
    originalUpdateShowContent(index);
    videoAutoplayed = false;
    const showImage = document.getElementById('show-image');
    const videoContainer = document.getElementById('video-container');
    if (showImage) showImage.style.display = 'block';
    if (videoContainer) {
        videoContainer.style.display = 'none';
        videoContainer.innerHTML = '';
    }
    // Reinitialize autoplay for new show
    setTimeout(initVideoAutoplay, 100);
};

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    initVideoAutoplay();
});

// Close video player when clicking overlay background
document.addEventListener('DOMContentLoaded', function() {
    const overlay = document.getElementById('videoPlayerOverlay');
    if (overlay) {
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) {
                closeVideoPlayer();
            }
        });
    }
});
</script>

<?php get_footer(); ?> 