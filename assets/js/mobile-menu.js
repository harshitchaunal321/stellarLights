jQuery(document).ready(function ($) {
    // Toggle main menu on mobile
    $('.menu-toggle').on('click', function () {
        $(this).toggleClass('active');
        $('.main-nav').toggleClass('active');
        $('body').toggleClass('menu-open');
    });

    // Toggle submenu on mobile
    $('.nav-menu li.menu-item-has-children > a').on('click', function (e) {
        if ($(window).width() <= 992) {
            e.preventDefault();
            $(this).parent().toggleClass('active');
        }
    });
});