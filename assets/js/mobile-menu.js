jQuery(document).ready(function ($) {
    // Toggle main menu on mobile
    $('.menu-toggle').on('click', function () {
        $(this).toggleClass('active');
        $('.main-nav').toggleClass('active');
        $('body').toggleClass('menu-open');
    });

    // Mobile submenu toggle logic
    function closeOtherSubmenus($li) {
        $li.siblings('.active').removeClass('active').find('.active').removeClass('active');
        $li.siblings().find('.active').removeClass('active');
    }

    $('.nav-menu li.menu-item-has-children > a').on('click', function (e) {
        if ($(window).width() <= 992) {
            e.preventDefault();
            var $parentLi = $(this).parent();
            if ($parentLi.hasClass('active')) {
                $parentLi.removeClass('active');
                $parentLi.find('.active').removeClass('active');
            } else {
                closeOtherSubmenus($parentLi);
                $parentLi.addClass('active');
            }
        }
    });

    // Nested submenu toggle for deeper levels
    $('.nav-menu li.menu-item-has-children ul.sub-menu li.menu-item-has-children > a').on('click', function (e) {
        if ($(window).width() <= 992) {
            e.preventDefault();
            var $parentLi = $(this).parent();
            if ($parentLi.hasClass('active')) {
                $parentLi.removeClass('active');
                $parentLi.find('.active').removeClass('active');
            } else {
                closeOtherSubmenus($parentLi);
                $parentLi.addClass('active');
            }
        }
    });
});