/**
 * Scroll to Top on Page Load/Reload
 * This script ensures that the page always starts from the top when loaded or reloaded
 */

// Method 1: Force scroll to top immediately when page starts loading
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}

// Method 2: Scroll to top as early as possible
window.addEventListener('beforeunload', function () {
    window.scrollTo(0, 0);
});

// Method 3: Ensure scroll to top when DOM is ready
document.addEventListener('DOMContentLoaded', function () {
    // Force scroll to top
    window.scrollTo(0, 0);
    document.documentElement.scrollTop = 0;
    document.body.scrollTop = 0;
});

// Method 4: Additional fallback for when page is fully loaded
window.addEventListener('load', function () {
    // Small delay to ensure all content is loaded
    setTimeout(function () {
        window.scrollTo(0, 0);
        document.documentElement.scrollTop = 0;
        document.body.scrollTop = 0;
    }, 50);
});

// Method 5: Handle page show event (for back/forward navigation)
window.addEventListener('pageshow', function (event) {
    // Force scroll to top even when coming from cache
    window.scrollTo(0, 0);
    document.documentElement.scrollTop = 0;
    document.body.scrollTop = 0;
});

// Method 6: Additional CSS-based solution (add via JavaScript)
document.addEventListener('DOMContentLoaded', function () {
    // Add CSS to prevent scroll restoration
    var style = document.createElement('style');
    style.textContent = `
        html, body {
            scroll-behavior: auto !important;
        }
        
        /* Ensure smooth scrolling is only active after page load */
        .page-loaded {
            scroll-behavior: smooth;
        }
    `;
    document.head.appendChild(style);

    // Add class after a short delay to re-enable smooth scrolling for user interactions
    setTimeout(function () {
        document.documentElement.classList.add('page-loaded');
    }, 100);
});