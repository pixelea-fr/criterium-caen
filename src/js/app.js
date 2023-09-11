( function( $ ) {

    $('document').ready(function(){
        // Burger nav
        $('.menu-toggle').on('click', function(){
            $('header').toggleClass('header--menu-is-open');
        });
        // Do things...
    });

    $(window).scroll(function(){
        // Do things...
    });

}( jQuery ) );