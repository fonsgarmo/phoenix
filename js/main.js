$(document).ready(function(){
    $('.toggler-menu').on('click', function(){
        $(this).toggleClass('active');
        $('.mobile-menu').toggleClass('open');
    });

    $("#individual-article iframe").wrap("<div class='post-video-container'/>");

    $( "li.menu-item" ).hover(function() {  // mouse enter
    $( this ).find( " > .sub-menu" ).show(); // display immediate child

	}, function(){ // mouse leave
	    if ( !$(this).hasClass("current_page_item") ) {  // check if current page
	        $( this ).find( ".sub-menu" ).hide(); // hide if not current page
	    }
	});
});