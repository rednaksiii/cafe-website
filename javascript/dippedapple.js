
function addToCart(selectedValue,totalPrice,buttonValue) {
  //alert('Selected Value: ' + buttonValue + ' addons: ' + selectedValue + " totalprice: " + totalPrice);
  var addOnPrice = selectedValue;
  //const mysql = require('mysql');

  //const connection = mysql.createConnection({
    //host: 'localhost',
    //database: 'yourdatabase'
  //});

  //const name = "Dipped Apple";
  //const image = "/images/reesespieimage.png";
  //const price = buttonValue;
  let myObj = {
    name: "Dipped Apple",
    image: "/images/Carmelapple.png",
    price: buttonValue,
    AddonPrice: selectedValue,
    totalPrice: totalPrice
  }
  var myObjString = JSON.stringify(myObj);
  $.ajax({
    type: "POST",
      url: '/php/insertinshoppingtable.php',
      data: {myObject: myObjString},
      contentType: "application/json; charset=utf-8",
      async: false,
      cache: false
    }).done(function(Response) {
      location.href = "/php/checkout.php";
    }).fail(function(Response) {
      alert("Error thrown!");
  });
}
/*
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

    // Select the clicked button
    $(this).addClass('selected');
    $(this).css('background-color', 'brown');
    $(this).text('Added!');
  });
  
  $('.submit-button').click(function(){
    var selectedValue = parseFloat($('select[name="size"]').val());
    var buttonValue = parseFloat($('.add-button.selected').val());
    var totalPrice = (selectedValue + buttonValue).toFixed(2);

    addToCart(selectedValue,totalPrice,buttonValue);
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
