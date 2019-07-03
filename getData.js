
$( document ).ready(function() {
       $.ajax({
              url: 'cv.json',
              dataType: 'json',
              success: function(data) {

                     //CLEANING ELEMENTS
                     $("#colx-column-left").empty();
                     $("#colx-column-right").empty();
                     
                     //RETRAVING HEADER INFORMATION
                     $(".first-name-data").append(data["first-name"]);
                     $(".last-name-data").append(data["last-name"]);
                     $(".role-title-data").append(data["role-title"]);
                     $(".email-data").append(data["email"]);
                     $(".address-data").append(data["address"]);
                     $(".phone-data").append(data["phone"]);
                     $(".forwords-data").append(data["forwords"]);

                     //RETRAVING PROFESSIONAL EXPERIENCE INFORMATION

                     var newElement = 0;
                     var newInnerElement = 0;

                     if((data.experiences).length > 0){

                            for(var i = 0; i < (data.experiences).length; i++, newElement++){

                                   var typeExperience = data.experiences[i];

                                   $(".colx.column-left").append('<div class="containerx experiences" id="experiences-'+newElement+'"></div>');

                                   $("#experiences-"+newElement).append('<div class="containerx exp-header" id="exp-header-'+newElement+'"></div>');

                                   $("#exp-header-"+newElement).append('<span class="exp-header-data">'+ typeExperience["exp-header"] +'</span>');

                                   var tmp = typeExperience["exp-items"];
                                   
                                   for(var j = 0; j < tmp.length; j++, newInnerElement++){

                                          tmp = tmp[j];
                                          var detailExperience = tmp["exp"];

                                          $("#experiences-"+newElement).append('<div class="containerx exp" id="exp-'+newInnerElement+'"></div>');

                                          $("#exp-"+newInnerElement).append('<div class="rowx exp-title" id="row-exp-title-'+newInnerElement+'"></div>');
                                          
                                          $("#row-exp-title-"+newInnerElement).append('<span class="exp-role-data">'+ detailExperience["exp-role"] +'</span>');
                                          $("#row-exp-title-"+newInnerElement).append('<span class="exp-company-data">'+ detailExperience["exp-company"] +'</span>');
                                          
                                          $("#exp-"+newInnerElement).append('<div class="rowx exp-time-place" id="row-exp-time-place-'+newInnerElement+'"></div>');
                                          
                                          $("#row-exp-time-place-"+newInnerElement).append('<span class="exp-from-data">'+ detailExperience["exp-start-date"] +'</span>');
                                          $("#row-exp-time-place-"+newInnerElement).append('<span class="exp-to-data">'+ detailExperience["exp-end-date"] +'</span>');
                                          $("#row-exp-time-place-"+newInnerElement).append('<span class="exp-place-data">'+ detailExperience["exp-place"] +'</span>');
                                          
                                          $("#exp-"+newInnerElement).append('<div class="rowx exp-description" id="row-exp-description-'+newInnerElement+'"></div>');
                                          
                                          $("#row-exp-description-"+newInnerElement).append('<span class="exp-description-data">'+ detailExperience["exp-job-detail"] +'</span>');
                                   }
                            }
                     }

                     //RETRAVING SKILLS INFORMATION
                     
                     newElement = 0;
                     newInnerElement = 0;

                     if((data.components).length > 0){

                            for(var i = 0; i < (data.components).length; i++, newElement++){

                                   var generalSkill = data.components[i];

                                   $(".colx.column-right").append('<div class="containerx component" id="component-'+newElement+'"></div>');

                                   $("#component-"+newElement).append('<div class="containerx comp-header" id="comp-header-'+newElement+'"></div>');

                                   $("#comp-header-"+newElement).append('<span class="comp-header-data">'+ generalSkill["comp-header"] +'</span>');
                                   
                                   var tmp = generalSkill["comp-items"];

                                   for(var j = 0; j < tmp.length; j++, newInnerElement++){

                                          var detailSkill = tmp[j];

                                          $("#component-"+newElement).append('<div class="containerx comp-items" id="comp-items-'+newInnerElement+'"></div>');
                                          $("#comp-items-"+newInnerElement).append('<div class="rowx comp-item" id="row-comp-items-'+newInnerElement+'"></div>');
                                          
                                          $("#row-comp-items-"+newInnerElement).append('<span class="comp-item-field-data">'+ detailSkill["comp-item-field"] +'</span>');
                                          $("#row-comp-items-"+newInnerElement).append('<span class="comp-item-value-data">'+ detailSkill["comp-item-value"] +'</span>');
                                   }
                            }
                     }
              },
              statusCode: {
                     404: function() {
                            alert('There was a problem with the server. Try again soon!');
                     }
              }
       });
});

                            //RETRAVING LEFT COLUMN INFORMATION
/*                             if((data.components).length > 0){

                                   for(var i = 0; i < (data.components).length; i++){

                                          var generalSkill = data.components[i];

                                          $(".col.column-right").append('<div class="container component"></div>');
                                          $(".container.component").append('<div class="container comp-header"></div>');

                                          $(".container.comp-header").append('<span class="comp-header-data">'+ generalSkill["comp-header"] +'</span>');
                                          
                                          var tmp = generalSkill["comp-items"];

                                          for(var i = 0; i < tmp.length; i++){

                                                 var detailSkill = tmp[i];
       
                                                 $(".container.component").append('<div class="container comp-items"></div>');
                                                 $(".container.comp-items").append('<div class="row comp-item"></div>');
                                                 
                                                 $(".row.comp-item").append('<span class="comp-item-field-data">'+ detailSkill["comp-item-field"] +'</span>');
                                                 $(".row.comp-item").append('<span class="comp-item-value-data">'+ detailSkill["comp-item-value"] +'</span>');
                                          }
                                   }
                            } */