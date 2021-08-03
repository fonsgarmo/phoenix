jQuery(document).ready(function($){
    $('.toggler-menu').on('click', function(){
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('open');
    });

    /*if ($(window).width() >= 768) {
        $('#header-mobile').hide();
        $('#header').show();
    }*/

    /*Mostrar u ocultar el menú móvil basado en la anchura de la ventana*/
    $(window).resize( () => {
        let windowWd = $(window).width();
        if (windowWd < 768) {
            $('#header-mobile').removeClass('hidden');
            $('#header').addClass('hidden');
        } else {
            $('#header-mobile').addClass('hidden');
            $('#header').removeClass('hidden');
        }
    });

    $('.mobile-menu-button').on('click', () => {
        $('.mobile-menu-wrapper').show();
        $('.mobile-menu-overlay').show();
    });

    $('.close-menu-button').on('click', () => {
        $('.mobile-menu-wrapper').hide();
        $('.mobile-menu-overlay').hide();
    });

    $('.search-icon').on('click', function(){
        $('#header-search-row').addClass('show-search');
    });

    $('.search-close').on('click', function(){
        $('#header-search-row').removeClass('show-search');
    });
});