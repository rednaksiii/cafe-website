$(document).ready(function(){
  var total = 0;
  $('.add-button').click(function(){
    // Deselect all buttons
    $('.add-button').css('background-color', '');
    $('.add-button').text('Select');
    $('.add-button').removeClass('selected');
    var selectedValue = $('select[name="size"]').val();
    var buttonValue = $(this).val();
    total = (selectedValue * buttonValue).toFixed(2);
//when we compound all totals the value will all be set to int in php else switch
    // Select the clicked button
    $(this).addClass('selected');
    $(this).css('background-color', 'brown');
    $(this).text('Added!');
  });
  $('.submit-button').click(function(){
    alert(total);
  });
  $('.cancel-button').click(function(){
    // Reset all buttons
    $('.add-button').css('background-color', '');
    $('.add-button').text('Select');
    $('.add-button').removeClass('selected');
    total = 0;
  });
});