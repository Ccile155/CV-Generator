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