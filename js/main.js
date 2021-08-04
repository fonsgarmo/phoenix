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

    $('.close-menu-wrapper').on('click', () => {
        $('.mobile-menu-wrapper').toggleClass('hidden');
        $('.mobile-menu-overlay').toggleClass('hidden');
        $('body').css({'overflow-y': ''});
        $('html').css({'overflow-y': ''});
    });

    $('#mobile-menu > .menu-item-has-children > a').after('<div class="mobile-menu-arrow icon-arrow-down"></div>');
    $('.sub-menu > .menu-item-has-children > a').after('<div class="mobile-menu-arrow icon-arrow-down"></div>');

    /*$('.menu-item-has-children > a').on('click', event => {
        $(event.currentTarget).parent().find('.sub-menu').toggle();
    });*/

    $('.mobile-menu-arrow').on('click', event => {
        $(event.currentTarget).parent().find('.sub-menu').toggle();
        $(event.currentTarget).toggleClass('icon-arrow-up');
    });

    /*$('#mobile-menu .sub-menu > .menu-item-has-children').on('click', event => {
        $(event.currentTarget).children('.sub-menu').toggle();
    });*/

    $('.search-icon').on('click', function(){
        $('#header-search-row').addClass('show-search');
    });

    $('.search-close').on('click', function(){
        $('#header-search-row').removeClass('show-search');
    });

});