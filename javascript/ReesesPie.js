
var chocolate = 0;
var whipped = 0;
var total = 0;

function addToCart() {
  
  var sizeSelect = document.querySelector('select[name="size"]');
  var selectedValue = sizeSelect.value;
  var selectedFloat = parseFloat(selectedValue);

  var addOnsum = whipped + chocolate;
  var totalPrice = selectedFloat + addOnsum;
  
  //alert('Selected Value: '+selectedFloat+' addons: '+addOnsum+" totalprice: "+totalPrice);
  let myObj = {
    name: "Reese's Pie",
    image: "/images/reesespieimage.png",
    price: selectedFloat,
    AddonPrice: addOnsum,
    totalPrice: totalPrice
  }
  var myObjString = JSON.stringify(myObj);
  $.ajax({
    type: "POST",
      url: '/php/insertinshoppingtable.php',
      data: {myObject: myObjString},
      dataType: "json",
      async: false,
      cache: false
    }).done(function(Response) {
      location.href = "/php/checkout.php";
    }).fail(function(Response) {
      //alert("Error thrown!");
      location.href = "/php/checkout.php";
  });
}

/*
  const mysql = require('mysql');
  const connection = mysql.createConnection({
    host: 'localhost',
    database: 'yourdatabase'
  });

  const name = "Reese's Pie";
  const image = "/images/reesespieimage.png";
  const price = selectedFloat;

  const sql = `INSERT INTO shoppingCart (name, image, price, AddOnPrice, totalPrice) VALUES (?, ?, ?, ?, ?)`;
  const values = [name, image, price, addOnPrice, totalPrice];

  connection.query(sql, values, (error, results, fields) => {
    if (error) {
      console.error(error);
    } else {
      console.log('Values inserted successfully!');
    }
  });

  connection.end();
}
*/
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

  $('#addToCartButton').click(function() {
    addToCart();
  });
});
