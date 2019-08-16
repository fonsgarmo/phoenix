$(document).ready(function(){
    $('.toggler-menu').on('click', function(){
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('open');
    });

    $('.toggler-menu-desktop').on('click', function(){
        $(this).toggleClass('active');
        $('.hamburger-menu-desktop').toggleClass('hamburger-move-left');
        $('#desktop-menu-slide').toggleClass('desktop-menu-open');
    });

    $('.search-icon').on('click', function(){
        $('#header-search-row').addClass('show-search');
    });

    $('.search-close').on('click', function(){
        $('#header-search-row').removeClass('show-search');
    });

});