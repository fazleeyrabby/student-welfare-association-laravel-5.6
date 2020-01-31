(function($){

	"use strict";
	  
	$(document).ready(function () {
		styler.init();
	});
	
	var styler = {
	
		init: function () {
			
			$("#template-styles h2 a").click(function(e){
				e.preventDefault();
				var div = $("#template-styles");
				console.log(div.css("left"));
				if (div.css("left") === "-135px") {
					$("#template-styles").animate({
						left: "0px"
					}); 
				} else {
					$("#template-styles").animate({
						left: "-135px"
					});
				}
			})

			$(".colors li a").click(function(e){
				e.preventDefault();
				var color = $(this).attr('class');
				color = color.replace('active', '').trim();
				$("#template-color" ).attr("href", "css/theme-" + color + ".css" );
				
				$(this).parent().parent().find("a").removeClass("active");
				$(this).addClass("active");
			})
		
		}
		
	}
	
})(jQuery);