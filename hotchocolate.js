var typeOfMilk = parseFloat(document.getElementById("typeOfMilk").value);
    var sizeOfDrink = parseFloat(document.getElementById("sizeOfDrink").value);
    var warmOrFrozen = parseFloat(document.getElementById("warmOrFrozen").value);
    var whippedCream = parseFloat(document.getElementById("whippedCream").value);
    var typeOfChocolate = parseFloat(document.getElementById("typeOfChocolate").value);

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
           var totalSum = typeOfMilk + sizeOfDrink + whippedCream + typeOfChocolate + warmOrFrozen;
            document.getElementById("totalPrice").innerHTML = "$" + totalSum.toFixed(2);
            }
    }
    