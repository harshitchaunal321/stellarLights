function openVideoPlayer(element) {
    const videoId = element.getAttribute('data-video-id');
    const iframe = document.getElementById('videoPlayerIframe');
    iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&mute=0&controls=1&showinfo=0&modestbranding=1`;
    document.getElementById('videoPlayerOverlay').style.display = 'flex';
    document.body.style.overflow = 'hidden'; // Prevent scrolling
}

function closeVideoPlayer() {
    const iframe = document.getElementById('videoPlayerIframe');
    iframe.src = ''; // Stop the video
    document.getElementById('videoPlayerOverlay').style.display = 'none';
    document.body.style.overflow = 'auto'; // Restore scrolling
}