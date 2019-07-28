$(document).ready(function(){
			
	$("body").removeClass("loading");

	$("a[href^='http']").not("[href*='thegalwaymusicresidency']").attr("target","_blank");
	
	if(jQuery().matchHeight) {
    	$('.equalise').matchHeight({
		    byRow: true,
		    property: 'height',
		    target: null,
		    remove: false
		});
	}


});