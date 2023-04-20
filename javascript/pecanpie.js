function totalAmt() {
    var whippedCreamSel = document.getElementById("whippedCream");
    var text = whippedCreamSel.options[whippedCreamSel.selectedIndex].text;
    console.log(text);
    var whippedCream = Number(document.getElementById("whippedCream").value);
   /* console.log(document.getElementById("whippedCream").innerText);
    var something = document.getElementById("whippedCream").innerText;
    console.log(something); */
    var warmColdOrRoomTemp = Number(document.getElementById("warmColdOrRoomTemp").value);
    if(whippedCream >= 0 && warmColdOrRoomTemp >= 0) {
        var totalSum = whippedCream += warmColdOrRoomTemp;
        document.getElementById("totalPrice").innerHTML = "$" + totalSum.toFixed(2);
    }

    }

    function sendDataObject() {



    }