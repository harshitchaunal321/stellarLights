

// Hero video loading handler
function initHeroVideo() {
    const heroVideo = document.getElementById('heroVideo');
    if (heroVideo) {
        heroVideo.style.opacity = '1';
    }
}

function buildYoutubeEmbedUrl({ videoId, start = null, baseUrl = null }) {
    if (!videoId && !baseUrl) {
        return '';
    }

    const url = new URL(baseUrl || `https://www.youtube.com/embed/${videoId}`);
    const params = new URLSearchParams({
        autoplay: '1',
        rel: '0',
        controls: '0',
        showinfo: '0',
        modestbranding: '1',
        fs: '0',
        iv_load_policy: '3',
        disablekb: '1',
        cc_load_policy: '0',
        color: 'white',
        playsinline: '1',
        enablejsapi: '0',
        origin: window.location.origin,
        wmode: 'transparent',
        vq: 'hd1080'
    });

    if (start !== null && start !== undefined && start !== '') {
        params.set('start', start);
    }

    url.search = params.toString();
    return url.toString();
}

function openVideoPlayer(element) {
    const overlay = document.getElementById('videoPlayerOverlay');
    const iframe = document.getElementById('videoPlayerIframe');

    if (!overlay || !iframe || !element) {
        return;
    }

    const datasetSource = element.dataset || {};
    const videoUrl = datasetSource.videoUrl || element.getAttribute('data-video-url');
    const videoId = datasetSource.videoId || element.getAttribute('data-video-id');
    const videoStart = datasetSource.videoStart || element.getAttribute('data-video-start');

    const embedUrl = videoUrl
        ? buildYoutubeEmbedUrl({ videoId: null, baseUrl: videoUrl, start: videoStart })
        : buildYoutubeEmbedUrl({ videoId, start: videoStart });

    if (!embedUrl) {
        return;
    }

    iframe.src = embedUrl;
    overlay.classList.add('active');
}

function closeVideoPlayer() {
    const overlay = document.getElementById('videoPlayerOverlay');
    const iframe = document.getElementById('videoPlayerIframe');
    if (!overlay || !iframe) {
        return;
    }
    overlay.classList.remove('active');
    iframe.src = '';
}

document.addEventListener('DOMContentLoaded', function () {
    initHeroVideo();

    const overlay = document.getElementById('videoPlayerOverlay');
    if (overlay) {
        overlay.addEventListener('click', function (event) {
            if (event.target === overlay) {
                closeVideoPlayer();
            }
        });
    }
});