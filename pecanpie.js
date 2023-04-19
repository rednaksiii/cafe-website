function totalAmt() {
    var whippedCream = Number(document.getElementById("whippedCream").value);
    var warmColdOrRoomTemp = Number(document.getElementById("warmColdOrRoomTemp").value);
    if(whippedCream >= 0 && warmColdOrRoomTemp >= 0) {
        var totalSum = whippedCream += warmColdOrRoomTemp;
        document.getElementById("totalPrice").innerHTML = "$" + totalSum.toFixed(2);
    }

    }