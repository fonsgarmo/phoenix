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

    $( "li.menu-item" ).hover(function() {  // mouse enter
    $( this ).find( " > .sub-menu" ).show(); // display immediate child

	}, function(){ // mouse leave
	    if ( !$(this).hasClass("current_page_item") ) {  // check if current page
	        $( this ).find( ".sub-menu" ).hide(); // hide if not current page
	    }
	});
});