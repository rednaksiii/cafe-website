//Amber Awadi
//JavaScript page for coconut macaroons

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

var topopt = parseFloat(document.getElementById("topopt").value);


function topChoice(value) {
	
	topopt = parseFloat(value);
	totalPrice()
}

function totalPrice() {
	
	if (topopt >= 0){
		
		subTotal = topopt;
		document.getElementById("totalPrice").innerHTML = "$" + subTotal.toFixed(2);
	}
}

function sendDataObject() {
    //  location.href = "/php/checkout.php";
    let myObj = {
        name: "Chocolate Croissant",
        image: "/images/chococross.png",
        price: subTotal
        AddOnPrice: topopt
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
