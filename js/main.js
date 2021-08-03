jQuery(document).ready(function($){
    $('.toggler-menu').on('click', function(){
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('open');
    });

    /*Mostrar u ocultar el menú móvil basado en la anchura de la ventana*/
    $(window).resize( () => {
        let windowWd = $(window).width();
        if (windowWd < 768) {
            $('#header-mobile').show();
            $('#header').hide();
        } else {
            $('#header-mobile').hide();
            $('#header').show();
        }
    });

    $('.search-icon').on('click', function(){
        $('#header-search-row').addClass('show-search');
    });

    $('.search-close').on('click', function(){
        $('#header-search-row').removeClass('show-search');
    });
});