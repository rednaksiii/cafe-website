     var addOn = parseFloat(document.getElementById("addOn").value);
    var warmOrFrozen = parseFloat(document.getElementById("warmFrozen").value);
    var totalSum;
    var addOnSum;
    var priceVal;

    function warmOrFrozenChange(value) {
        warmOrFrozen = parseFloat(value);
      totalAmt();
    }

   function addOnTotal(value)
    {
        addOn = parseFloat(value);
        totalAmt();
    }


  function totalAmt(){
        if(addOn >= 0 && warmOrFrozen >= 0) {
           totalSum = addOn + warmOrFrozen;
            document.getElementById("totalPrice").innerHTML = "$" + totalSum.toFixed(2);
            }
            priceVal = warmOrFrozen;
            addOnSum = addOn;
        //  sendDataObject();
    }

    function sendDataObject() {
    //  location.href = "/php/checkout.php";
    let myObj = {
        name: "Coffee Cake",
        image: "/images/CoffeeCakeTransparent.png",
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
            // Reload the page to update the shopping cart table
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