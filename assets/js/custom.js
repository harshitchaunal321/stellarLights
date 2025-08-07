jQuery(document).ready(function ($) {
    // Toggle main menu on mobile
    $('.menu-toggle').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).toggleClass('active');
        $('.main-nav').toggleClass('active');
        $('.nav-menu').toggleClass('active');
        $('body').toggleClass('menu-open');
        const isExpanded = $(this).attr('aria-expanded') === 'true';
        $(this).attr('aria-expanded', !isExpanded);
        // Reset all submenu states when opening/closing mobile menu
        $('.nav-menu li.has-submenu').removeClass('active');
    });

    // Handle dropdowns
    function handleDropdowns() {
        // Remove any existing dropdown toggles
        $('.dropdown-toggle').remove();

        // Handle all menu items with submenus
        $('.nav-menu li.has-submenu').each(function () {
            const $parentItem = $(this);
            const $parentLink = $parentItem.find('> a');
            const $subMenu = $parentItem.find('> .sub-menu');

            // On desktop - hover opens submenu
            if ($(window).width() > 992) {
                $parentItem.hover(function () {
                    $(this).addClass('active');
                }, function () {
                    $(this).removeClass('active');
                });

                // Allow normal navigation on desktop
                $parentLink.off('click');
            }
            // On mobile - special click behavior
            else {
                $parentLink.on('click', function (e) {
                    // If submenu is already open, navigate
                    if ($parentItem.hasClass('active')) {
                        return true; // Allow navigation
                    }
                    // If submenu is closed, open it
                    else {
                        e.preventDefault();
                        // Close other submenus at same level
                        $parentItem.siblings('.has-submenu').removeClass('active');
                        // Open this submenu
                        $parentItem.addClass('active');
                    }
                });
            }
        });

        // Handle regular menu items (without submenus)
        $('.nav-menu li:not(.has-submenu) > a').on('click', function () {
            if ($(window).width() <= 992) {
                // Close mobile menu when clicking regular links
                $('.menu-toggle').removeClass('active');
                $('.main-nav').removeClass('active');
                $('.nav-menu').removeClass('active');
                $('body').removeClass('menu-open');
            }
        });
    }

    // Handle window resize
    function handleResize() {
        if ($(window).width() > 992) {
            // Reset mobile menu state
            $('.menu-toggle').removeClass('active');
            $('.main-nav').removeClass('active');
            $('.nav-menu').removeClass('active');
            $('body').removeClass('menu-open');
            $('.menu-toggle').attr('aria-expanded', 'false');

            // Close all submenus on desktop (they'll open on hover)
            $('.nav-menu li.has-submenu').removeClass('active');
        }
        handleDropdowns();
    }

    // Initialize dropdowns
    handleDropdowns();

    // Handle window resize with debounce
    let resizeTimer;
    $(window).on('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(handleResize, 250);
    });

    // Close mobile menu when clicking outside
    $(document).on('click', function (e) {
        if ($(window).width() <= 992) {
            if (!$(e.target).closest('.main-nav').length && !$(e.target).closest('.menu-toggle').length) {
                $('.menu-toggle').removeClass('active');
                $('.main-nav').removeClass('active');
                $('.nav-menu').removeClass('active');
                $('body').removeClass('menu-open');
                $('.menu-toggle').attr('aria-expanded', 'false');
                $('.nav-menu li.has-submenu').removeClass('active');
            }
        }
    });

    // Handle escape key to close mobile menu
    $(document).on('keydown', function (e) {
        if (e.key === 'Escape' && $('.main-nav').hasClass('active')) {
            $('.menu-toggle').removeClass('active');
            $('.main-nav').removeClass('active');
            $('.nav-menu').removeClass('active');
            $('body').removeClass('menu-open');
            $('.menu-toggle').attr('aria-expanded', 'false');
            $('.nav-menu li.has-submenu').removeClass('active');
        }
    });

    // Smooth scrolling header behavior
    let lastScrollTop = 0;
    const $header = $('.stellar-header');
    $(window).on('scroll', function () {
        const scrollTop = $(window).scrollTop();
        if ($header.length) {
            if (scrollTop > 100) {
                $header.addClass('scrolled');
            } else {
                $header.removeClass('scrolled');
            }
        }
        lastScrollTop = scrollTop;
    });

    // Add active class to current page menu item
    const currentUrl = window.location.href;
    $('.nav-menu a').each(function () {
        if (this.href === currentUrl) {
            $(this).parent().addClass('active');
        }
    });
});