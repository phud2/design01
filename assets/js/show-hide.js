$(document).ready(function(){    
    
	$(function(){
		$(".show-second").hide();
		$(".button-fiber").addClass("comparison-button-inactive");
		$(".button-fiber").removeClass("comparison-button-active");
		$(".button-cable").addClass("comparison-button-active");
		$(".button-cable").removeClass("comparison-button-inactive");

		$(".second-button").on('click', function () {
			$(".show-first").hide();
			$(".show-second").show();
			$(".button-fiber").addClass("comparison-button-active");
			$(".button-fiber").removeClass("comparison-button-inactive");
			$(".button-cable").addClass("comparison-button-inactive");
			$(".button-cable").removeClass("comparison-button-active");
		});
		$(".first-button").on('click', function () {
			$(".show-second").hide();
			$(".show-first").show();    
			$(".button-fiber").addClass("comparison-button-inactive");
			$(".button-fiber").removeClass("comparison-button-active");
			$(".button-cable").addClass("comparison-button-active");
			$(".button-cable").removeClass("comparison-button-inactive");		
		});
	});
});