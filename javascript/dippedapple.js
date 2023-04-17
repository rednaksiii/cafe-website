$(document).ready(function(){
  var total = 0;
  $('.add-button').click(function(){
    // Deselect all buttons
    $('.add-button').css('background-color', '');
    $('.add-button').text('Select');
    $('.add-button').removeClass('selected');
    var selectedValue = parseFloat($('select[name="size"]').val());
    var buttonValue = parseInt($(this).val());
    total = selectedValue + buttonValue;

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