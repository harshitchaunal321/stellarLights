

// Hero video loading handler
function initHeroVideo() {
    const heroVideo = document.getElementById('heroVideo');
    const videoPlaceholder = document.getElementById('videoPlaceholder');
    const heroVideoContainer = document.querySelector('.hero-video');

    if (heroVideo && videoPlaceholder && heroVideoContainer) {
        // Wait for video to load
        heroVideo.addEventListener('load', function () {
            // Add a small delay to ensure video is fully loaded
            setTimeout(() => {
                videoPlaceholder.style.opacity = '0';
                heroVideo.style.opacity = '1';
                heroVideoContainer.classList.add('video-loaded');

                // Remove placeholder after fade out
                setTimeout(() => {
                    videoPlaceholder.style.display = 'none';
                }, 500);

                // Start monitoring for YouTube elements
                startYouTubeElementRemoval();
            }, 1000);
        });

        // Fallback: hide placeholder after 3 seconds if video doesn't load
        setTimeout(() => {
            if (videoPlaceholder.style.opacity !== '0') {
                videoPlaceholder.style.opacity = '0';
                heroVideo.style.opacity = '1';
                heroVideoContainer.classList.add('video-loaded');
                setTimeout(() => {
                    videoPlaceholder.style.display = 'none';
                }, 500);
                startYouTubeElementRemoval();
            }
        }, 3000);
    }
}

// Function to actively remove YouTube elements
function startYouTubeElementRemoval() {
    // Monitor for YouTube elements every 100ms
    setInterval(() => {
        removeYouTubeElements();
    }, 100);

    // Also remove immediately
    removeYouTubeElements();
}

// Function to remove YouTube elements
function removeYouTubeElements() {
    const iframes = document.querySelectorAll('iframe[src*="youtube"]');

    iframes.forEach(iframe => {
        try {
            // Force hide any YouTube elements
            iframe.style.filter = 'brightness(1.1) contrast(1.1) saturate(1.1)';
            iframe.style.transform = 'scale(1.02)';
            iframe.style.pointerEvents = 'none';
            iframe.style.overflow = 'hidden';

            // Try to access iframe content and hide elements (if same origin)
            try {
                const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
                if (iframeDoc) {
                    // Hide YouTube controls
                    const youtubeElements = iframeDoc.querySelectorAll('[class*="ytp"], [class*="yt"], [class*="ytp-"], [class*="yt-"]');
                    youtubeElements.forEach(el => {
                        el.style.display = 'none';
                        el.style.visibility = 'hidden';
                        el.style.opacity = '0';
                    });
                }
            } catch (e) {
                // Cross-origin restriction, use CSS approach
                console.log('Using CSS approach for YouTube element removal');
            }
        } catch (e) {
            console.log('Error removing YouTube elements:', e);
        }
    });
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function () {
    // Initialize scroll to top functionality
    initScrollToTop();

    // Initialize hero video
    initHeroVideo();

    // Also start monitoring for any YouTube elements that might appear
    setTimeout(() => {
        startYouTubeElementRemoval();
    }, 2000);
});

function openVideoPlayer(element) {
    console.log('openVideoPlayer called with element:', element);
    const videoId = element.getAttribute('data-video-id');
    const overlay = document.getElementById('videoPlayerOverlay');
    const iframe = document.getElementById('videoPlayerIframe');
    if (videoId && overlay && iframe) {
        const enhancedParams = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0&controls=0&showinfo=0&modestbranding=1&fs=0&iv_load_policy=3&disablekb=1&cc_load_policy=0&color=white&playsinline=1&enablejsapi=0&origin=${window.location.origin}&wmode=transparent&vq=hd1080&modestbranding=1&showinfo=0&controls=0&rel=0&fs=0&iv_load_policy=3&disablekb=1&cc_load_policy=0&color=white&playsinline=1&enablejsapi=0&origin=${window.location.origin}&wmode=transparent&vq=hd1080&modestbranding=1&showinfo=0&controls=0&rel=0&fs=0&iv_load_policy=3&disablekb=1&cc_load_policy=0&color=white&playsinline=1&enablejsapi=0&origin=${window.location.origin}&wmode=transparent&vq=hd1080`;
        console.log('Setting iframe src to:', enhancedParams);
        iframe.src = enhancedParams;
        overlay.classList.add('active');
    } else {
        console.log('Missing elements:', { videoId, overlay, iframe });
    }
}

function closeVideoPlayer() {
    const overlay = document.getElementById('videoPlayerOverlay');
    const iframe = document.getElementById('videoPlayerIframe');
    if (overlay && iframe) {
        overlay.classList.remove('active');
        iframe.src = ''; // Stop the video
    }
}

// Close the video player when clicking on the overlay background
document.getElementById('videoPlayerOverlay').addEventListener('click', function (event) {
    if (event.target === this) {
        closeVideoPlayer();
    }
});