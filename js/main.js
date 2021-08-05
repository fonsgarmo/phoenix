/*
------------------------
Phoenix - Scripts
Version 2.2
------------------------
*/

jQuery(document).ready(function($){

    $('.toggler-menu').on('click', function(){
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('open');
    });

    //Clic en el botón de menú de hamburguesa
    $('.mobile-menu-button').on('click', () => {
        //$('.mobile-menu-wrapper').toggleClass('hidden');
        $('.mobile-menu-wrapper').animate({left: 0}, 300);
        $('.mobile-menu-overlay').show();
        $('body').css({'overflow-y': 'hidden'});
        $('html').css({'overflow-y': 'hidden'});
    });

    //Clic en el botón de cerrar del mení
    $('.close-menu-wrapper').on('click', () => {
        //$('.mobile-menu-wrapper').toggleClass('hidden');
        $('.mobile-menu-wrapper').animate({left: '-650px'}, 300);
        $('.mobile-menu-overlay').hide();
        $('body').css({'overflow-y': ''});
        $('html').css({'overflow-y': ''});
    });

    //Icono de flecha añadido después de cada item del menú de móvil con hijos
    $('#mobile-menu > .menu-item-has-children > a').after('<div class="mobile-menu-arrow icon-arrow-down"></div>');
    $('#mobile-menu .sub-menu > .menu-item-has-children > a').after('<div class="mobile-menu-arrow icon-arrow-down"></div>');

    /*$('.menu-item-has-children > a').on('click', event => {
        $(event.currentTarget).parent().find('.sub-menu').toggle();
    });*/

    //Abrir y cerrar submenús, cambiar el icono de la flecha
    $('.mobile-menu-arrow').on('click', event => {
        $(event.currentTarget).parent().children('.sub-menu').toggle();
        $(event.currentTarget).toggleClass('icon-arrow-up');
    });

    //Abrir ventana de búsqueda en desktop
    $('.search-icon').on('click', function(){
        $('#header-search-row').addClass('show-search');
    });

    //Cerrar ventana de búsqueda en desktop
    $('.search-close').on('click', function(){
        $('#header-search-row').removeClass('show-search');
    });

});