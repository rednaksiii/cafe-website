var whippedCreamSel =parseFloat(document.getElementById("whippedCream").value);
var warmColdOrRoomTemp =parseFloat(document.getElementById("warmColdOrRoomTemp").value);
var totalSum;
var priceVal;
var addOnSum;
function whippedCreamChange(value) {
     whippedCreamSel =  parseFloat(value);
    totalAmt();
}

    function warmOrFrozen(value) {
        warmColdOrRoomTemp = parseFloat(value);
        totalAmt();
    }

    function totalAmt()
    {
        if(whippedCreamSel >= 0 && warmColdOrRoomTemp >= 0) {
            totalSum = whippedCreamSel += warmColdOrRoomTemp;
            document.getElementById("totalPrice").innerHTML = "$" + totalSum.toFixed(2);
        }
        addOnSum = totalSum - warmColdOrRoomTemp;
        priceVal = totalSum - addOnSum;

    }

    function sendDataObject() {
        //  location.href = "/php/checkout.php";
        let myObj = {
            name: "Pecan Pie",
            image: "/images/Pecan Pie Transparent.png",
            price: priceVal,
            AddOnPrice: addOnSum,
            totalPrice: totalSum
    
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
         // location.href = "/php/checkout.php";
         console.log(Response);
        }).fail(function(Response) {
            console.log(Response);
          location.href = "/php/checkout.php";
      
      });
    
        }
    