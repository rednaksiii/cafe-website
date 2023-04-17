
//get prices if addons clicked
  var chocolate = 0;
  var whipped = 0;
  var total = 0;
  function getPrice() {
    var sizeSelect = document.querySelector('select[name="size"]');
    var selectedValue = sizeSelect.value;
    var selectedInt = parseInt(selectedValue);
    total = selectedInt + whipped + chocolate;
    alert(total);
  }
  $(document).ready(function(){
    $('#ChocolateSauce').click(function(){
        chocolate = parseInt($(this).val());
        if($(this).text() == 'Added!') {
            $(this).css('background-color', '');
            $(this).text('Add');
            chocolate = 0;
        } else {
            $(this).css('background-color', 'brown');
            $(this).text('Added!');
            chocolate = parseInt($(this).val());
        }
    });
    $('#WhippedCream').click(function(){
        whipped = parseInt($(this).val());
        if($(this).text() == 'Added!') {
            $(this).css('background-color', '');
            $(this).text('Add');
            whipped = 0;
        } else {
            $(this).css('background-color', 'brown');
            $(this).text('Added!');
            whipped = parseInt($(this).val());
        }
    });
    $('.cancel-button').click(function(){
      // Reset all buttons
      $('.add-button').css('background-color', '');
      $('.add-button').text('Add');
      chocolate = 0;
      whipped = 0;
    });
});
