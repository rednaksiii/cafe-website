
function addToCart() {
    var ProteinSelect = document.querySelector('select[name="size"]');
    var selectedValue = ProteinSelect.value;
    var selectedFloat = parseFloat(selectedValue);
  
    var addOnPrice = 0;
    var totalPrice = selectedFloat;
    alert('Selected Value: '+selectedFloat+' addons: '+addOnPrice+" totalprice: "+totalPrice)
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
$(document).ready(function(){
    var selectedValue = $('select[name="size"]').val();
    
    // Update selectedValue when dropdown changes
    $('select[name="size"]').change(function() {
        selectedValue = $(this).val();
    });
    $('.submit-button').click(function(){
        addToCart();
    });
    //To cancel order/ reset values
    $('.cancel-button').click(function(){
        selectedValue = 0;
    })
});