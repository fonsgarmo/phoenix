$(document).ready(function(){
    $('.toggler-menu').on('click', function(){
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('open');
    });

    $('.search-icon').on('click', function(){
        $('#header-search-row').addClass('show-search');
    });

    $('.search-close').on('click', function(){
        $('#header-search-row').removeClass('show-search');
    });

});