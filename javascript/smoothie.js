
var addOnPrice = 0;

function addToCart(selectedValue,totalPrice) {
  //alert('Selected Value: ' + selectedValue + ' addons: ' + addOnPrice + " totalprice: " + totalPrice);
  let myObj = {
    name: "Fruit Smoothie",
    image: "/images/strawsmooth.png",
    price: selectedValue,
    AddonPrice: addOnPrice,
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
  /*const mysql = require('mysql');

  const connection = mysql.createConnection({
    host: 'localhost',
    database: 'yourdatabase'
  });

  const name = "Reese's Pie";
  const image = "/images/reesespieimage.png";
  const price = selectedValue;

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
  $('.add-button').click(function(){
    // Deselect all buttons
    $('.add-button').css('background-color', '');
    $('.add-button').text('Select');
    $('.add-button').removeClass('selected');
    
    var selectedValue = $('select[name="size"]').val();
    var buttonValue = parseFloat($(this).val());
    totalPrice = (selectedValue * buttonValue).toFixed(2);
    
    // Select the clicked button
    $(this).addClass('selected');
    $(this).css('background-color', 'brown');
    $(this).text('Added!');
  });
  
  $('.submit-button').click(function(){
    var selectedValue = $('select[name="size"]').val();
    var buttonValue = parseFloat($('.add-button.selected').val());
    var totalPrice = (selectedValue * buttonValue).toFixed(2);
    addToCart(selectedValue,totalPrice);
  });
  
  $('.cancel-button').click(function(){
    // Reset all buttons
    $('.add-button').css('background-color', '');
    $('.add-button').text('Select');
    $('.add-button').removeClass('selected');
    totalPrice = 0;
    addOnPrice = 0;
  });
});
