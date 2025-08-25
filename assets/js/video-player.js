

// Hero video loading handler
function initHeroVideo() {
    const heroVideo = document.getElementById('heroVideo');
    
    if (heroVideo) {
        // Video is already visible, no loading states needed
        heroVideo.style.opacity = '1';
    }
}



// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', function () {
    // Initialize hero video
    initHeroVideo();
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