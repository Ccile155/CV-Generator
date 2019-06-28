$(function(){

// var text= $(".text").text();
// console.log(text);

// n = $(".text").length;
// console.log(n);



var text = [];
$('.text').each(function(){
    text.push($(this).text());
});
console.log(text);
// console.log(Array.from(text));
// function lire2(tab)
// {
//         var chaine = "Le tableau contient :";
//         for(var indice in tab)
//                 chaine += "\n" + indice + " -> " + tab[indice];
//         return chaine;
// }




$("#button1").on("click",function AppelApi(){

 var parameters = location.search.substring(1).split("&");
  var temp = parameters[0].split("=");
  varname = unescape(temp[0]);
  if(varname == "") return;
  value = unescape(temp[1]);
 //  // alert(varname + "=" + value);

// var selected1 = document.getElementById("langue").value;

 $.get("https://translate.yandex.net/api/v1.5/tr.json/translate?lang=fr-"+value+"&text="+text+"&key=trnsl.1.1.20190627T094614Z.78f5ccb3c2153c6a.8328e723a3c4192d5572b28517b553864927df1a&[format=plain]",callbackGetSuccess)
.done(function(){
$("#trad").empty();
 $("#trad").append("le texte est traduit en " + value);
 })
.fail(function(){
 alert("ca marche pas, fail!!");
 })
.always(function(){
 ;
 })
});






// $("#button2").on("click",function AppelApi(){
//  $.get("https://translate.yandex.net/api/v1.5/tr.json/translate?lang=fr-ru&text="+text+"&key=trnsl.1.1.20190627T094614Z.78f5ccb3c2153c6a.8328e723a3c4192d5572b28517b553864927df1a&[format=html]",callbackGetSuccess)
// .done(function(){
//  })
// .fail(function(){
//  alert("ca marche pas, fail!!");
//  })
// .always(function(){
//  ;
//  })
// });

// $("#button2").on("click",function AppelApi(){
//  $.get("https://translate.yandex.net/api/v1.5/tr.json/translate?lang=fr-sp&text="+text+"&key=trnsl.1.1.20190627T094614Z.78f5ccb3c2153c6a.8328e723a3c4192d5572b28517b553864927df1a&[format=html]",callbackGetSuccess)
// .done(function(){
//  })
// .fail(function(){
//  alert("ca marche pas, fail!!");
//  })
// .always(function(){
//  ;
//  })
// });

let callbackGetSuccess = function(data) {

 $(".text").empty();
 $(".text").append(data.text);
 
 console.log(data);
 console.log(data.text[0].split(','));
};
});




// Fonction Receive du selecteur de langue 

// function receive()
// {
//   var parameters = location.search.substring(1).split("&");
//   var temp = parameters[0].split("=");
//   varname = unescape(temp[0]);
//   if(varname == "") return;
//   value = unescape(temp[1]);
//   alert(varname + "=" + value);
// }
