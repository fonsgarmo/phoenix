/*
------------------------
Phoenix - Scripts
Version 2.3
------------------------
*/

const cookieExists = cookieName => {
    const name = cookieName + '=';
    const decodedCookies = decodeURIComponent(document.cookie);
    const cookieArray = decodedCookies.split('; ');
    let cookieFound = false;
    cookieArray.forEach(cookie => {
        if (cookie.indexOf(name) === 0) {
            cookieFound = true;
        }
    });
    return cookieFound;
}

jQuery(document).ready(function($){

    //Detectar modo oscuro y activarlo
    let themeCookieExists = cookieExists('theme');
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches && themeCookieExists === false){
        $('body').addClass('dark-mode');
    }

    //Detectar cambio en preferencias del sistema en cuanto a modo oscuro
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        if (themeCookieExists === false){
            $('body').toggleClass('dark-mode');
        }
    })

    //Selector manual de modo oscuro y cookie para almacenar ajuste de usuario 
    $('.mode-icon').on('click', () => {
        $('body').toggleClass('dark-mode');
        let theme;
        if ($('body').hasClass('dark-mode')){
            theme = 'dark-mode';
        } else {
            theme = 'light-mode';
        }
        document.cookie = `theme=${theme};path=/;max-age = 31536000`;
    })

    $('.toggler-menu').on('click', function(){
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('open');
    });

    //Clic en el botón de menú de hamburguesa
    $('.mobile-menu-button').on('click', () => {
        $('.mobile-menu-wrapper').animate({left: 0}, 300);
        $('.mobile-menu-overlay').show();
        $('body').css({'overflow-y': 'hidden'});
        $('html').css({'overflow-y': 'hidden'});
    });

    //Clic en el botón de cerrar del mení
    $('.close-menu-wrapper').on('click', () => {
        $('.mobile-menu-wrapper').animate({left: '-650px'}, 300);
        $('.mobile-menu-overlay').hide();
        $('body').css({'overflow-y': ''});
        $('html').css({'overflow-y': ''});
    });

    //Icono de flecha añadido después de cada item del menú de móvil con hijos
    $('#mobile-menu > .menu-item-has-children > a').after('<div class="mobile-menu-arrow icon-arrow-down"></div>');
    $('#mobile-menu .sub-menu > .menu-item-has-children > a').after('<div class="mobile-menu-arrow icon-arrow-down"></div>');

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

    $('.navigation-next-post').hover( () =>{
        $(event.currentTarget).find('a').find('img').addClass('navigation-shadow');
    }, () =>{
        $(event.currentTarget).find('a').find('img').removeClass('navigation-shadow');
    });

    $('.navigation-prev-post').hover( () =>{
        $(event.currentTarget).find('a').find('img').addClass('navigation-shadow');
    }, () =>{
        $(event.currentTarget).find('a').find('img').removeClass('navigation-shadow');
    });
});