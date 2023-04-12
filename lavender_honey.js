//Amber Awadi
//JavaScript page for individual web pages

//active tab event listener
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
function getPrice(myForm) {
	
	var price = 4.45;
	
	var milkOpt = parseInt(document.getElementByName("milkopt").value);
	var foamOpt = parseInt(document.getElementByName("foamopt").value);
	var topOpt =  parseInt(document.getElementByName("topopt").value);
	var size =  parseInt(document.getElementByName("size").value);
	var total = price + milkOpt + foamOpt + topOpt + size;

	
	document.getElementById("tester").innerHTML = total;

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
