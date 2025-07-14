function openVideoPlayer(element) {
    console.log('openVideoPlayer called with element:', element);
    const videoId = element.getAttribute('data-video-id');
    const overlay = document.getElementById('videoPlayerOverlay');
    const iframe = document.getElementById('videoPlayerIframe');
    if (videoId && overlay && iframe) {
        console.log('Setting iframe src to:', `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`);
        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
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