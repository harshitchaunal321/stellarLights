document.addEventListener('scroll', function () {
    const scrollPosition = window.scrollY;
    const windowHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrollFraction = scrollPosition / windowHeight;

    // Adjust the grey intensity based on scroll position (0 = black, 1 = greyish #333)
    const greyValue = Math.round(51 * scrollFraction); // #333 is rgb(51, 51, 51)
    const newColor = `rgb(${greyValue}, ${greyValue}, ${greyValue})`;
    document.body.style.setProperty('--gradient-end-color', newColor);
});