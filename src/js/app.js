(function ($) {
    $('document').ready(function () {
        // Burger nav
        $('.menu-toggle').on('click', function () {
            $('header').toggleClass('header--menu-is-open');
        });
    });


    $(window).scroll(function () {
        console.log($(window).scrollTop());
        // Vérifie si le scroll dépasse 50vh
        if ($(this).scrollTop() > 0.5 * $(window).height()) {
            $(".go-down").css("bottom", "-100%");
        } else {
            // Rétablit la propriété CSS "bottom" du bloc ".godown"
            $(".go-down").css("bottom", "5%");
        }
    });
    $('document').ready(function () {
        $(".go-down").click(function () {
            var currentScroll = $(window).scrollTop();
            var newScroll = currentScroll + $(window).height();
            $("html, body").animate({ scrollTop: newScroll }, 500);
        });
    });



}(jQuery));