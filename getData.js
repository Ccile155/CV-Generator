$(function() { 
       $('#clickme').click(function() {

              $.ajax({
                     url: 'cv.json',
                     dataType: 'json',
                     success: function(data) {

                            console.log(data);
                            
                            //RETRAVING HEADER INFORMATION
                            $(".first-name-data").append(data["first-name"]);
                            $(".last-name-data").append(data["last-name"]);
                            $(".role-title-data").append(data["role-title"]);
                            $(".email-data").append(data["email"]);
                            $(".address-data").append(data["address"]);
                            $(".phone-data").append(data["phone"]);
                            $(".forwords-data").append(data["forwords"]);

                            //RETRAVING PROFESSIONAL EXPERIENCE INFORMATION

                            //RETRAVING TECHNICAL SKILLS INFORMATION
                            for(var i = 0; i < (data.components).length; i++){

                                   var arr = data.components[i];

                                   if(arr["comp-header"] === "Technical skills"){
                                          //alert("HERE");
                                   }
                                   else if(arr["comp-header"] === "Languages"){
                                          alert("HERE");
                                   }
                                   else if(arr["comp-header"] === "Hobbies"){
                                          alert("HERE");
                                   }
                                   
                            }

/*                             $(".last").append(data["last"]);
                            $(".last").append(data["last"]);
                            $(".last").append(data["last"]);
                            $(".last").append(data["last"]);
                            $(".last").append(data["last"]);
                            $(".last").append(data["last"]); */
/*                             
                            var items = [];
                            $.each(data, function(key, val) {

                                   items.push('<li id="' + key + '">' + val + '</li>');    

                            });

                            $('<ul/>', {
                                   'class': 'interest-list',
                                   html: items.join('')
                            }).appendTo('body'); */
                     },
                     statusCode: {
                            404: function() {
                                   alert('There was a problem with the server. Try again soon!');
                            }
                     }
              });
       });
});

/* function run(){

       var z = document.querySelectorAll('tr:nth-child(odd)');
  
       var w = document.querySelectorAll('tr td:first-child');
       
       var w = document.querySelectorAll("div[name*=eme]");
       
       var w = document.querySelector("p:first-child");
       w.style.innerHTML = "Cambio";
       
       
   } */