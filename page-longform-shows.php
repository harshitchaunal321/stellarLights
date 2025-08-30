<?php
/*
Template Name: Longform Shows
*/
get_header(); ?>

<div class="hero-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Seagull&SeaHeader.png');">
    <div class="hero-content">
    <h1>Longform Shows</h1>
    <p>Immersive, cinematic journeys blending drones, sound, story, and special effects.</p>
    </div>
    <div class="photo-credit-container">
        <div class="photo-credit">Jarrad Russel</div>
    </div>
</div>

<div class="longform-shows-content">
    <div class="breadcrumbs">
        <a href="/shows">SHOWS</a> > <span class="current-page">LONGFORM SHOWS</span>
    </div>

    <section class="show-intro-section">
        <p>Experience the future of entertainment with our extended-format drone performances that push the boundaries of what's possible in the sky.</p>
        <p>Our longform shows combine hundreds of synchronized drones with original soundtracks, narration, and special effects to create immersive, cinematic experiences that can last anywhere from 15 minutes to over an hour. These performances are perfect for festivals, large-scale events, and venues seeking to create unforgettable moments that leave lasting impressions.</p>
    </section>

    <section class="show-details-section">
        <div class="show-title-licensing">
            <h2 id="show-title">Aurora Australis</h2>
            <span class="licensing-info" id="licensing-info">AVAILABLE FOR BOOKING</span>
        </div>
        <div class="show-description" id="show-description">
        <p>Aurora Australis is a long-form drone and pyrotechnic performance that traces the emotional and celestial bond between the Sun and Earth—told through light, movement, sound, and poetic narration. Set beneath southern skies, the show journeys through mythic cosmology, solar rhythms, and the Earth’s magnetic pulse, culminating in the night-time arrival of the aurora herself.</p>
        <p>Structured in four chapters—The Universe, The Sun and Its Earth, Aurora, and The Constellation of the Dancer—Aurora Australis is both a visual symphony and a lyrical meditation on resilience, time, and renewal. The show blends drone formations, pyrotechnic trails, and immersive sound design to create a sensory journey that feels intimate, vast, and grounded in story.</p>
        </div>
    </section>

    <section id="show-video-section" class="show-video-section" data-video-id="SD9YX8B2JDM" onclick="openVideoPlayer(this)">
        <img id="show-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/drone-show-1.png" alt="Aurora Australis Video Thumbnail">
    </section>

    <!-- <div class="show-credits-bottom" id="show-credits">
        <p>Concept & Direction by Ron Bradfield</p>
        <p>Animation & Choreography by Jarrad Russell</p>
        <p>Original Score by Envelope Audio</p>
        <p>Narration by Indigenous Storytellers</p>
    </div> -->

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
                <h4>Pre-Produced Shows</h4>
                <p>For those after premium impact with lower lead times, our pre-produced, award-winning drone shows are ready to license.</p>
                <a href="/shows/pre-produced-shows" class="read-more-btn">Read More</a>
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
            <h2>Interested In Planning A Longform Drone Show?</h2>
            <a href="/contact" class="enquire-button">Enquire Now</a>
        </div>
    </section>
</div>

<script>
const shows = [
    // {
    //     title: 'Karrakin',
    //     licensingText: 'AVAILABLE FOR BOOKING',
    //     descriptionHTML: `
    //         <p>Commissioned for the Kings Park Everlasting Festival, Karrakin is an immersive drone and sound performance exploring fire ecology and plant survival in Western Australia. Developed in close collaboration with scientists, artists, and First Nations knowledge holders, the work draws on both ancient and contemporary wisdom to tell a powerful story of renewal — from seed, to flame, to regrowth.</p>
    //         <p>Deeply site-specific and emotionally evocative, Karrakin transforms botanical wonder and ecological process into a luminous experience in the night sky.</p>
    //          <p>Tickets and event information will be available via the Kings Park Everlasting Festival.</p>`,
    //     // videoId: 'SD9YX8B2JDM', // NOTE: Using placeholder video ID
    //     imageSrc: '<?php echo get_template_directory_uri(); ?>/assets/images/drone-show-2.png',
    //     imageAlt: 'Ocean Symphony Video Thumbnail',
    //     // creditsHTML: `<p>Concept by Ron Bradfield</p>
    //     //               <p>Choreography by Jarrad Russell</p>
    //     //               <p>Sound Design by Envelope Audio</p>`
    // }
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
    const videoId = element.dataset.videoId;
    const iframe = document.getElementById('videoPlayerIframe');
    iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
    document.getElementById('videoPlayerOverlay').classList.add('active');
}

function closeVideoPlayer() {
    const iframe = document.getElementById('videoPlayerIframe');
    iframe.src = '';
    document.getElementById('videoPlayerOverlay').classList.remove('active');
}
</script>

<?php get_footer(); ?>
