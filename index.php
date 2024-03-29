<!DOCTYPE html>
<html lang="en">
<head>
  <title>Team One Cafe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://bootswatch.com/3/superhero/bootstrap.css"/>
  <link rel="stylesheet" href="/css/index_mobile.css" media="screen and (max-width:480px)" />
  <link rel="stylesheet" href="/css/index_desktop.css" media="screen and (min-width:481px)" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/x-icon" href="images/logo2.png"></link>
</head>

<main>
<header>
	<img src= "/images/logo2.png" alt = "logo"/>
		<h1>Team One Cafe</h1>
</header>
</main>
<body>

<div class="container">
  <nav id="navbar"class="navbar navbar default" role="navigation">
				<ul id="navi" class="nav navbar nav">
					<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="/html/catalogue.html">Menu</a></li>
					<li class="nav-item"><a class="nav-link" href="/html/references.html">References</a></li>
					<li class="nav-item"><a class="nav-link" href="/html/about.html">About</a></li>
          <li class="nav-item"><a href="php/checkout.php"><i class="fa fa-shopping-cart"></i></a></li>
				</ul>
		</nav>
		<h2>Welcome to Team One Cafe!</h2> 
		<div class="topnav">
				<a href="index.html" class="active">Home</a>
		<div id="myLinks">
		<a href="index.html" class="active">Home</a>
		<a href="catalogue.html">Menu</a>
		<a href="references.html">References</a>
		<a href="about.html">About</a>
		</div>
		<a href="javascript:void(0);" class="icon" onclick="mobileMenu()">
		<i class="fa fa-bars"></i>
	</a>
	</div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
	  <a href="/html/lavender_honey_latte.html">
      <div class="carousel-item">
        <img id="featitem" src="/images/lavenderlatte.png" alt="Lavender Latte">
      </div>
		</a>
		<h3>Lavender Latte</h3>
      </div>

      <div class="item">
   
	  <a href="/html/hotchocolate.html">
      <div class="carousel-item">
		<img id= "featitem" src="/images/Hot Chocolate Transparent.png" alt="Hot Chocolate">
    </div>
	  </a>
	  <h3>Hot Chocolate</h3>
      </div>
    
      <div class="item">
        <div class="d-flex justify-content-center">
	  <a href="/html/Mega recess.html">
      <div class="carousel-item">
        <img id="featitem" src="/images/reesespieimage.png" class="center-block" alt="Reese's pie">
	 </div>
      </a>
	  <h3>Reese's Pie</h3>
  </div>
      </div>
	  
	  <div class="item">
	  <a href= "/html/kunafeh.html">
      <div class="carousel-item">
        <img id="featitem" src="/images/kunafeh.png" alt="Kunafeh">
        </div>
	  </a>
	  <h3>Kunafeh</h3>
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

 <!-- <div class="carousel slide" id="slider" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active" >
        <img id= "featitem" src="images/turkish-tea.webp" alt="Turkish Tea">
        <div class="carousel-caption">
          <h2>Turkish Tea</h2>
        </div>
      </div>
      <div class="item">
        <img id= "featitem" src="images/Sleeping Bear Latte Transparent.png" alt="Sleeping Bear Latte">
        <div class="carousel-caption">
          <h2>Sleeping Bear Latte</h2>
        </div>
      </div>
      <div class="item">
        <img id= "featitem" src="images/Hot Chocolate Transparent.png" alt="Hot Chocolate">
        <div class="carousel-caption">
          <h2>Hot Chocolate</h2>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#slider" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
<a class="right carousel-control" href="#slider" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
  </div> -->

  <h3><?php echo "Today is " . date("l, M/d/Y h:ia"); ?></h3>
  <div class="container2">
  <a href="catalogue.html">
  <input id= "order" type="submit" value="Order Now"/>
  </a>
  </div>
  
</div>
 <h1 style="text-align: center;">Our Location</h1>
  <div id="map" style="text-align: center; "><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.7559043919196!2d-85.61282552411319!3d42.28373367120018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x881777dbae0f27ad%3A0xc17c1786b9ea635b!2sWestern%20Michigan%20University!5e0!3m2!1sen!2sus!4v1681925967903!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
<footer>
  <p>&copy;Team One Cafe 2023</p>
</footer>
</body>
</html>
