document.addEventListener('DOMContentLoaded', function () {
    // Navigation menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    const burgerIcon = document.querySelector('.hamburger-icon');
    const closeIcon = document.querySelector('.close-icon');

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function () {
            navMenu.classList.toggle('active');
            if (burgerIcon && closeIcon) {
                burgerIcon.style.display = navMenu.classList.contains('active') ? 'none' : 'block';
                closeIcon.style.display = navMenu.classList.contains('active') ? 'block' : 'none';
            }
        });
    } else {
        console.log('Menu toggle elements not found');
    }

    // Carousel functionality
    const carouselItems = document.querySelectorAll('.carousel-item');
    const leftArrow = document.querySelector('.carousel-arrow-left');
    const rightArrow = document.querySelector('.carousel-arrow-right');
    let currentIndex = 0;

    function showItem(index) {
        carouselItems.forEach((item, i) => {
            item.classList.remove('active');
            if (i === index) {
                item.classList.add('active');
            }
        });
    }

    if (carouselItems.length > 0 && leftArrow && rightArrow) {
        // Show the first item initially
        showItem(currentIndex);

        leftArrow.addEventListener('click', function () {
            currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
            showItem(currentIndex);
            console.log('Left arrow clicked, currentIndex:', currentIndex);
        });

        rightArrow.addEventListener('click', function () {
            currentIndex = (currentIndex + 1) % carouselItems.length;
            showItem(currentIndex);
            console.log('Right arrow clicked, currentIndex:', currentIndex);
        });
    } else {
        console.log('Carousel elements not found:', {
            carouselItems: carouselItems.length,
            leftArrow: !!leftArrow,
            rightArrow: !!rightArrow
        });
    }
});