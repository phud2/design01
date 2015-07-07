$(document).ready(function(){
    	//Remove the rotated class from all
		$(".accordion-control:gt(0)").removeClass('rotated');
		
		$(".accordion-description:gt(0)").hide();		
		
		
	   $(".accordion-header").click(function () {
 
                //Hide any shown and save list (should be array of 1)
                var wereShown = $(".accordion .accordion-description[style*='display: block;']").slideToggle("slow");
               
                //Remove the rotated class from all
                $(".accordion-control").removeClass('rotated');
 
 
                //Check and see if what was clicked was just hidden
                //$(this).next() gets the array and .get(0) gets the next number in the array
                if($.inArray($(this).next().get(0), wereShown) == -1 )
                {
                                //Since they didn't ask to hide it show it
                                $(this).next().slideToggle("slow");
	                                $(this).find(".accordion-control").addClass("rotated");
               
                }
 
 
	});
	
    //hide the descriptons

	    


})