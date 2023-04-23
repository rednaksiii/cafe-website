var typeOfMilk = parseFloat(document.getElementById("typeOfMilk").value);
    var sizeOfDrink = parseFloat(document.getElementById("sizeOfDrink").value);
    var warmOrFrozen = parseFloat(document.getElementById("warmOrFrozen").value);
    var whippedCream = parseFloat(document.getElementById("whippedCream").value);
    var typeOfChocolate = parseFloat(document.getElementById("typeOfChocolate").value);
    var totalSum;
    var addOnSum;
    var priceVal;

    function typeOfMilkChange(value) {
        typeOfMilk = parseFloat(value);
      totalAmt();
    }

   function sizeOfDrinkChange(value)
    {
        sizeOfDrink = parseFloat(value);
        totalAmt();
    }

    function warmOrFrozenChange(value) {
        warmOrFrozen = parseFloat(value);
      totalAmt();
    }

    function whippedCreamChange(value) {
        whippedCream = parseFloat(value);
        totalAmt();
    }
    
    function typeOfChocolateChange(value) {
        typeOfChocolate = parseFloat(value);
        totalAmt();
    }

  function totalAmt(){
        if(typeOfMilk >=0 && sizeOfDrink >=0 && whippedCream >=0 && typeOfChocolate >=0 && warmOrFrozen >=0) {
           totalSum = typeOfMilk + sizeOfDrink + whippedCream + typeOfChocolate + warmOrFrozen;
            document.getElementById("totalPrice").innerHTML = "$" + totalSum.toFixed(2);
            }
            priceVal = totalSum - whippedCream - typeOfChocolate;
            addOnSum = totalSum - priceVal;
          //  sendDataObject();
    }

    function sendDataObject() {
    //  location.href = "/php/checkout.php";
    let myObj = {
        name: "Hot Chocolate",
        image: "/images/Hot Chocolate Transparent.png",
        price: priceVal,
        AddOnPrice: addOnSum,
        totalPrice: totalSum

      }
      var myObjString = JSON.stringify(myObj);

      $(document).ready(function() {

        $.ajax({
          type: "POST",
          url: '/php/insertinshoppingtable.php',
          data: {myObject: myObjString},
          success: function(data) {
            location.href="/php/checkout.php";
          console.log(data);
         }
        });

      });



    }
    
    function snackMessage() {
      var x = document.getElementById("snackbar1");
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }