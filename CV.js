$(function(){

	$(".dropdown-item").on("click", function(){
		let colorid = $(this).attr("id");
		console.log(colorid);
		$(".navbar.navbar-expand-lg").removeClass().addClass("navbar navbar-expand-lg");
		$(".navbar").css("background-color", "#"+colorid);
		$("footer").css("background-color", "#"+colorid);
	});

});