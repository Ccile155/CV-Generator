$(function(){

var text= $(".text").text();
console.log(text);


$("#button").on("click",function AppelApi(){
 $.get("https://translate.yandex.net/api/v1.5/tr.json/translate?lang=fr-en&text="+text+"&key=trnsl.1.1.20190627T094614Z.78f5ccb3c2153c6a.8328e723a3c4192d5572b28517b553864927df1a&[format=html]",callbackGetSuccess)
.done(function(){
 })
.fail(function(){
 alert("ca marche pas, fail!!");
 })
.always(function(){
 ;
 })
});

let callbackGetSuccess = function(data) {

 $(".text").empty();
 $(".text").append(data.text);
 
 console.log(data.text);
 
};


});