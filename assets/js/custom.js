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
// Update your custom.js with this responsive handling
jQuery(document).ready(function ($) {
    // Handle menu toggle for all mobile/tablet sizes
    $('.menu-toggle').click(function (e) {
        e.stopPropagation();
        $(this).toggleClass('active');
        $('.main-nav').toggleClass('active');
        $('body').toggleClass('menu-open');
    });

    // Close menu when clicking on a link
    $('.nav-menu a').click(function () {
        if ($(window).width() <= 1024) {
            $('.menu-toggle').removeClass('active');
            $('.main-nav').removeClass('active');
            $('body').removeClass('menu-open');
        }
    });

    // Responsive logo sizing
    function adjustHeader() {
        const width = $(window).width();

        if (width <= 480) {
            // Small mobile
            $('.logo img').css('height', '80px');
        } else if (width <= 768) {
            // Larger mobile
            $('.logo img').css('height', '100px');
        } else if (width <= 992) {
            // iPad portrait
            $('.logo img').css('height', '120px');
        } else if (width <= 1024) {
            // iPad landscape
            $('.logo img').css('height', '140px');
        } else {
            // Desktop
            $('.logo img').css('height', '158px');
        }
    }

    // Run on load and resize
    adjustHeader();
    $(window).resize(adjustHeader);
});

document.addEventListener('DOMContentLoaded', function () {
    const logos = document.querySelectorAll('.collaborator-logo');

    logos.forEach(logo => {
        const height = logo.getAttribute('data-height');
        const width = logo.getAttribute('data-width');

        logo.style.height = `${height}px`;
        logo.style.width = `${width}px`;
        logo.style.maxWidth = '100%';
    });
});