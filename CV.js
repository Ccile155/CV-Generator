$(function(){


	var changeColor = function(value){
		
		$(".navbar.navbar-expand-lg").removeClass().addClass("navbar navbar-expand-lg");

		switch(value) {
			case "info":
				$(".navbar.navbar-expand-lg").addClass("navbar-info bg-info");
				$("a").css("color", "black");	
				// $(".navbar").css("background-color", "#30A2B8 !important");
				$("footer").css("background-color", "#30A2B8");
				break;
			case "warning":
				$(".navbar.navbar-expand-lg").addClass("navbar-warning bg-warning");
				$("a").css("color", "black");	
				// $(".navbar").css("background-color", "#FBC10A");
				$("footer").css("background-color", "#FBC10A");
				break;
			case "light":
				$(".navbar.navbar-expand-lg").addClass("navbar-light bg-light");
				$("a").css("color", "black");			
				// $(".navbar").css("background-color", "#E5E5E5");
				$("footer").css("background-color", "#E5E5E5");
				break;
		}


	}

	$("#info").on("click", function(){
		changeColor("info");
	});
	$("#warning").on("click", function(){
		changeColor("warning");
	});
	$("#light").on("click", function(){
		changeColor("light");
	});


});