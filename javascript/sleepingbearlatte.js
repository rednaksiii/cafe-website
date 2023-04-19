var typeOfMilk = parseFloat(document.getElementById("typeOfMilk").value);
    var sizeOfDrink = parseFloat(document.getElementById("sizeOfDrink").value);
    var warmOrFrozen = parseFloat(document.getElementById("warmOrFrozen").value);
    var whippedCream = parseFloat(document.getElementById("whippedCream").value);
    var sweetener = parseFloat(document.getElementById("sweeteners").value);
    var marshmallow = parseFloat(document.getElementById("marshmallows").value);
    var grahamCracker = parseFloat(document.getElementById("grahamcrackers").value);
    function typeOfMilkChange(value) {
        typeOfMilk = parseFloat(value);
        totalAmt()
    }

   function sizeOfDrinkChange(value)
    {
        sizeOfDrink = parseFloat(value);
        totalAmt()
    }

    function warmOrFrozenChange(value) {
        warmOrFrozen = parseFloat(value);
        totalAmt()
    }

    function whippedCreamChange(value) {
        whippedCream = parseFloat(value);
        console.log(whippedCream);
        totalAmt()
    }
    
    function sweetenerChange(value) {
        sweetener = parseFloat(value);
        console.log(sweetener);
        totalAmt()
    }

    function grahamCrackerChange(value) {
        grahamCracker = parseFloat(value);
        totalAmt()
    }
    function marshmallowChange(value) {
        marshmallow = parseFloat(value);
        totalAmt()
    }

    function totalAmt()
    {
        if(typeOfMilk >=0 && sizeOfDrink >=0 && whippedCream >=0 &&sweetener >= 0 && warmOrFrozen >=0 && marshmallow >=0 && grahamCracker >= 0) {
            totalSum = typeOfMilk + sizeOfDrink + whippedCream + sweetener + warmOrFrozen + marshmallow + grahamCracker;
            document.getElementById("totalPrice").innerHTML = "$" + totalSum.toFixed(2);
            }
    }
    