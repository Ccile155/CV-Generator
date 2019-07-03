/*
var text_max = 200;
$('#count_message1').html(text_max + ' remaining');

$('#text').keyup(function() {
  var text_length = $('#text').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message1').html(text_remaining + ' remaining');
});

var text_max = 300;
$('#count_message2').html(text_max + ' remaining');

$('#text').keyup(function() {
  var text_length = $('#text').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message2').html(text_remaining + ' remaining');
});

var text_max = 100;
$('#count_message3').html(text_max + ' remaining');

$('#text').keyup(function() {
  var text_length = $('#text').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message3').html(text_remaining + ' remaining');
});
*/

$(function() {

  $("#submitBtn").click(function() {
    let firstname = $("#firstname").val();    
    let lastname = $("#lastname").val();
    let roletitle = $("#role-title").val();
    let email = $("#email").val();
    let address = $("#address").val();
    let phone = $("#phone-number").val();
    let forwards = $("#forwards").val();
    let role = $("#experience-role").val();
    let company = $("#experience_company").val();
    let startdate = $("#experience_start_date").val();
    let enddate = $("#experience_end_date").val();
    let place = $("#experience_place").val();
    let jobdetails = $("#experience_details").val();
    let experiences = [{ "exp-header": "Professional experiences", 
                          "exp-items": 
                          [{ "exp": { 
                            "exp-role": role,
                            "exp-company": company,
                            "exp-start-date": startdate, 
                            "exp-end-date": enddate, 
                            "exp-place": place,
                            "exp-job-detail": jobdetails
                          }  
                        }]
                        }];
    let subheading_components = $("#subheading_components").val();
    let devlanguages = $("#dev_languages").val();
    let components = [{ "comp-header": "Technical skills", 
                         "comp-items":
                         [{
                          "comp-item-field": subheading_components,
                          "comp-item-value": devlanguages       
                          }]
                     }];        
    let obj = {"first-name": firstname,
              "last-name": lastname,
              "role-title": roletitle,
              "email" : email,
              "address" : address,
              "phone" : phone,
              "forwards" : forwards,
              "experiences": experiences,
              "components": components
          };
  })

})
