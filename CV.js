$(function(){

    $('.page p').attr('contenteditable', 'true');

// $(".navbar").on("load", function(){
//     $.ajax({
//         method: "POST",
//         url:"Nav.html",
//     })
//     .done(function(data){
//         $("#display").html(data);
//     })
//     .fail(function(jqXHR, textstatus){
//         console.log("Request failed: "+ "ça n'a pas marché");
//     });
// });


$(".dropdown-item").on("click", function(){
	let colorid = $(this).attr("id");
	$(".navbar.navbar-expand-lg").removeClass().addClass("navbar navbar-expand-lg");
	$(".navbar").css("background-color", "#"+colorid);
	// $("footer").css("background-color", "#"+colorid);
	$("footer").css("backgroundColor", $("nav").css("backgroundColor"));
});

    let couleur = $("nav").css("backgroundColor");
    $("footer").css("backgroundColor", couleur);


});