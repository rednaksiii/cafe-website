//Grab price of dropdown
function getPrice(form) {
    var price = 0;
    var size = form.elements["size"].value;
    if (size === "1 lb") {
      price += 25;
    } else if (size === "2 lb") {
      price += 35;
    } else if (size === "4 lb") {
      price += 45;
    } else if (size === "Family Killer") {
      price += 70;
    }
    return price;
  }
  //get prices if addons clicked
  var chocolate = 0
  var whipped = 0
  $(document).ready(function(){
    $('#ChocolateSauce').click(function(){
        var chocolate = $(this).val();
        if($(this).text() == 'Added!') {
            $(this).css('background-color', '');
            $(this).text('Add');
            var chocolate = 0
        } else {
            $(this).css('background-color', 'brown');
            $(this).text('Added!');
        }
    });

    $('#WhippedCream').click(function(){
        var whipped = $(this).val();
        if($(this).text() == 'Added!') {
            $(this).css('background-color', '');
            $(this).text('Add');
            var whipped = 0
        } else {
            $(this).css('background-color', 'brown');
            $(this).text('Added!');
        }
    });
});

//Still working on getting function to return a simple int value
var selectedop = document.getElementById("selection");
var total = getPrice(selectedop) + chocolate + whipped;