//Amber Awadi
//JavaScript file for Cinnamon Latte

var navItems = document.querySelectorAll(".nav-item");
for (var i = 0; i < navItems.length; i++) {
   navItems[i].addEventListener("click", function() {
      this.classList.add("active");
   });
}

//mobile navbar function

function mobileMenu() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

//function for making the item image larger/normal on hover
function bigImg(x) {
  x.style.height = "400px";
  x.style.width = "400px";
}

function normalImg(x) {
  x.style.height = "300px";
  x.style.width = "300px";
}
//function for pricing

var milkopt = parseFloat(document.getElementById("milkopt").value);
var foamopt = parseFloat(document.getElementById("foamopt").value);
var topopt = parseFloat(document.getElementById("topopt").value);
var size = parseFloat(document.getElementById("size").value);

function milkChoice(value) {
	
	milkopt = parseFloat(value);
	totalPrice()
}

function foamChoice(value) {
	
	foamopt = parseFloat(value);
	totalPrice()
}

function topChoice(value) {
	
	topopt = parseFloat(value);
	totalPrice()
}

function sizeChoice(value) {
	
	size = parseFloat(value);
	totalPrice()
}

function totalPrice() {
	
	if (milkopt >= 0 && foamopt >= 0 && topopt >= 0 && size >= 0){
		
		subTotal = milkopt + foamopt + topopt + size;
		document.getElementById("totalPrice").innerHTML = "$" + subTotal.toFixed(2);
	}
}

function sendDataObject() {
    //  location.href = "/php/checkout.php";
    let myObj = {
        name: "Cinnamon Tea Latte",
        image: "/images/cinnamon_latte.png",
        price: size
        AddOnPrice: milkopt + foamopt + topopt
        totalPrice: totalPrice

    }
    var myObjString = JSON.stringify(myObj);



    $.ajax({
        type: "POST",
        url: '/php/insertinshoppingtable.php',
        data: { myObject: myObjString },
        dataType: "json",
        async: false,
        cache: false
    }).done(function (Response) {
        // location.href = "/php/checkout.php";
        console.log(Response);
    }).fail(function (Response) {
        location.href = "/php/checkout.php";

    });

}

//snackbar messages	
function snackMessage() {
  var x = document.getElementById("snackbar1");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function snackMessage2() {
  var y = document.getElementById("snackbar2");
  y.className = "show";
  setTimeout(function(){ y.className = y.className.replace("show", ""); }, 3000);
}
