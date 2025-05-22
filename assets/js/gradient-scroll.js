const TARGET_COLOR = 0x89; // #898989
const MAX_SCROLL_START = 0.3; // Start effect after 30% scroll

let ticking = false;

document.addEventListener('scroll', function () {
    if (!ticking) {
        window.requestAnimationFrame(updateGradient);
        ticking = true;
    }
});

function updateGradient() {
    const scrollPosition = window.scrollY;
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;
    const maxScroll = documentHeight - windowHeight;
    const scrollPercent = scrollPosition / maxScroll;

    if (scrollPercent < MAX_SCROLL_START) {
        resetGradient();
        ticking = false;
        return;
    }

    const effectProgress = Math.min(1, (scrollPercent - MAX_SCROLL_START) / (1 - MAX_SCROLL_START));
    const greyValue = Math.floor(TARGET_COLOR * effectProgress);

    // Create gradient with stronger effect on bottom-right
    document.body.style.setProperty('--gradient-center', `rgb(${greyValue}, ${greyValue}, ${greyValue})`);
    document.body.style.setProperty('--gradient-middle', `rgb(${Math.floor(greyValue * 0.8)}, ${Math.floor(greyValue * 0.8)}, ${Math.floor(greyValue * 0.8)})`);
    document.body.style.setProperty('--gradient-outer', `rgb(${Math.floor(greyValue * 0.5)}, ${Math.floor(greyValue * 0.5)}, ${Math.floor(greyValue * 0.5)})`);

    ticking = false;
}

function resetGradient() {
    document.body.style.setProperty('--gradient-center', 'black');
    document.body.style.setProperty('--gradient-middle', 'black');
    document.body.style.setProperty('--gradient-outer', 'black');
}

// Initialize
document.addEventListener('DOMContentLoaded', function () {
    updateGradient();
    window.addEventListener('resize', updateGradient);
});