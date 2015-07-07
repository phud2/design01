$(document).ready(function(){    
    
	//headhesive settings
	
        var options = {
            offset: '#showHere',
            classes: {
                clone:   'banner--clone',
                stick:   'banner--stick',
                unstick: 'banner--unstick'
            }
        };

        // Initialise with options
        var banner = new Headhesive('.banner', options);
        // Headhesive destroy
        // banner.destroy();
 
});