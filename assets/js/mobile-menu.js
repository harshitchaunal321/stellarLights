jQuery(document).ready(function ($) {
    // Toggle main menu on mobile
    $('.menu-toggle').on('click', function () {
        $(this).toggleClass('active');
        $('.main-nav').toggleClass('active');
        $('body').toggleClass('menu-open');
    });

    // Close other submenus when opening a new one
    function closeOtherSubmenus($currentLi) {
        $('.nav-menu > li').not($currentLi).removeClass('active').find('li').removeClass('active');
    }

    // Handle clicks on parent menu items
    $('.nav-menu > li.menu-item-has-children > a').on('click', function (e) {
        if ($(window).width() <= 992) {
            e.preventDefault();
            var $parentLi = $(this).parent();

            if ($parentLi.hasClass('active')) {
                $parentLi.removeClass('active');
            } else {
                closeOtherSubmenus($parentLi);
                $parentLi.addClass('active');
            }
        }
    });

    // Handle clicks on nested submenu items
    $('.nav-menu li.menu-item-has-children ul.sub-menu li.menu-item-has-children > a').on('click', function (e) {
        if ($(window).width() <= 992) {
            e.preventDefault();
            var $parentLi = $(this).parent();

            if ($parentLi.hasClass('active')) {
                $parentLi.removeClass('active');
            } else {
                $parentLi.siblings('.active').removeClass('active');
                $parentLi.addClass('active');
            }
        }
    });

    // Close menu when clicking outside
    $(document).on('click', function (e) {
        if ($(window).width() <= 992) {
            if (!$(e.target).closest('.main-nav').length && !$(e.target).closest('.menu-toggle').length) {
                $('.menu-toggle').removeClass('active');
                $('.main-nav').removeClass('active');
                $('body').removeClass('menu-open');
            }
        }
    });

    // Close menu when clicking on a link (that's not a parent item)
    $('.nav-menu a').not('.menu-item-has-children > a').on('click', function () {
        if ($(window).width() <= 992) {
            $('.menu-toggle').removeClass('active');
            $('.main-nav').removeClass('active');
            $('body').removeClass('menu-open');
        }
    });
});