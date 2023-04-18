function totalAmt(val) {
var addOn = Number(document.getElementById("addOn").value);

if(addOn) {
    var totalSum = addOn += Number(val);
    document.getElementById("totalPrice").innerHTML = "$" + totalSum.toFixed(2);
}
else {
    var totalSum = Number(val);
    document.getElementById("totalPrice").innerHTML = "$" + totalSum.toFixed(2);
}
}

function addOnTotal(val) {
    var warmFrozen = Number(document.getElementById("warmFrozen").value);

    if(warmFrozen) {
        var totalSum = warmFrozen += Number(val);
        document.getElementById("totalPrice").innerHTML = "$" + totalSum.toFixed(2);
    }

}