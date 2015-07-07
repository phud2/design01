$(document).ready(function(){
	var scrollToElement = function(el, ms){
	    var speed = (ms) ? ms : 600;
	    $('html,body').animate({
	        scrollTop: $(el).offset().top
	    }, speed);
	}

	$('ul.faqs-menu li').click( function(){
		var tab_id = $(this).attr('data-tab');

		$('.faqs-content').removeClass('current');

		$("#"+tab_id).addClass('current');

		$('html, body').animate(
	    	{
	    		scrollTop: $("#"+tab_id).offset().top
	    	}, 1000
	    );
	});

	$('.close').click(function(e){
		e.preventDefault();

		$('.faqs-content').removeClass('current');
		scrollToElement( $(this).attr('href'), 1000 );
	});

});