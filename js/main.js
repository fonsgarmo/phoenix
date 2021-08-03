jQuery(document).ready(function($){

    /*if ($(window).width() < 768) {
        $('#header-mobile').removeClass('hidden');
    }*/

    $('.toggler-menu').on('click', function(){
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('open');
    });

    

    /*Mostrar u ocultar el menú móvil basado en la anchura de la ventana
    $(window).resize( () => {
        let windowWd = $(window).width();
        if (windowWd < 768) {
            $('#header-mobile').toggleClass('hidden', false);
            $('#header').toggleClass('hidden', true);
        } else {
            $('#header-mobile').toggleClass('hidden', true);
            $('#header').toggleClass('hidden', false);
        }
    });*/

    $('.mobile-menu-button').on('click', () => {
        $('.mobile-menu-wrapper').toggleClass('hidden');
        $('.mobile-menu-overlay').toggleClass('hidden');
        $('body').css({'overflow-y': 'hidden'});
        $('html').css({'overflow-y': 'hidden'});
    });

    $('.close-menu-button').on('click', () => {
        $('.mobile-menu-wrapper').toggleClass('hidden');
        $('.mobile-menu-overlay').toggleClass('hidden');
        $('body').css({'overflow-y': ''});
        $('html').css({'overflow-y': ''});
    });

    $('.search-icon').on('click', function(){
        $('#header-search-row').addClass('show-search');
    });

    $('.search-close').on('click', function(){
        $('#header-search-row').removeClass('show-search');
    });

});