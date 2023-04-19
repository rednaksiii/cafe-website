<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/3/superhero/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="style-1.css" type="text/css">
    <link rel="stylesheet" href="coffeecake.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <title>The Greatest Coffee Cake</title>
</head>
<body>
<script src="coffeecake.js"></script>
 
  <div class="container-fluid">
    <div class="row">
      <header>
      <img src="images/logo2.png" alt="logo">
      <h2>Team One Cafe</h2>
   
    </header>
    </div>
    <div class="container">
      <nav id="navbar"class="navbar navbar default" role="navigation">
          <ul id="navi" class="nav navbar nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="catalogue.html">Menu</a></li>
              <li><a href="references.html">References</a></li>
              <li><a href="about.html">About</a></li>
              <li class="nav-item"><a href="checkout.html"><i class="fa fa-shopping-cart"></i></a></li>
          </ul>
  </nav>
 <div class="row">
 <div class="col-md-3 text-center">
  <div class="panel panel-default">
     <div class="panel-heading">
        <h3 class="panel-title">Recommendations</h3>
     </div>
     <div class="panel-body">
        <ul class="list-group">
           <li class="list-group-item"><a class="recommendations" href="coffeecake.php">Coffee cake</a></li>
           <li class="list-group-item"><a class="recommendations" href="hotchocolate.php">Hot chocolate</a></li>
           <li class="list-group-item"><a class="recommendations" href="pecanpie.php">Pecan Pie</a></li>
           <li class="list-group-item"><a class="recommendations" href="sleepingbearlatte.php">Sleeping Bear Latte</a></li>
        </ul>
     </div>
  </div>
</div>
<div class="col-md-8">
<div class="jumbotron">
<div class="container">
<div class="row">

  <div class="image-text">
    <div class="col-md-4 col-md-offset-2">
      <legend>Make your own Coffee Cake!</legend>
    </div>
</div>
<div class="image-container text-center">
    <img src="images/CoffeeCakeTransparent.png" alt="Coffee Cake" class="animated-image">
</div>
</div>
</div>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
    <p>Make your own coffee cake, with streusel, whipped cream, cinnamon sugar, and more!
      Our coffee cake is made with the freshest ingredients. It is bigger than any coffee cake you will find
    anywhere else. It is our unique specialty in the Midwest, and you will not be disappointed.
    </p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
  <form name="coffeecakeform" method="post" action="insertindatabase.php">
    <fieldset>
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3 lbl">
      <legend>Make your own Coffee Cake!</legend>
    </div>
    </div>
    <div class="container">
      <div class="form-group">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 lbl">
        <label for="select" class="lbl">Toppings</label>
      </div>
    </div>
     <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <select class="form-control" id="addOn" onchange="addOnTotal(this.value)">
            <option></option>
            <option value="0.20">Streusel ($0.20)</option>
            <option value="0.20">Raspberries($0.20)</option>
            <option value="0.20">Cinnamon Sugar($0.20)</option>
            <option value="0.20">Maple Syrup ($0.20)</option>
            <option value="0.20">Whipped Cream ($0.20)</option>
          </select>
          <br>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-xs-12 lbl">
        <label for="select" class="lbl">Choose if you want your coffee cake to be warm or frozen</label>
      </div>
    </div>
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <select class="form-control" id="warmFrozen" onchange="totalAmt(this.value)">
            <option></option>
            <option value="4.75">Warm ($4.75)</option>
            <option value= "4.50" >Frozen ($4.50)</option>
          </select>
          <br>
          <div id="totalPrice"> 
          </div>
        </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="container">
   <div class="pull-left">
        <button type="reset" class="btn btn-danger cancelBtn" data-inline="true">Cancel</button>
        </div>
        <div class="pull-right">
        <button type="submit" class="btn btn-success submitBtn" data-inline="true">Order</button>
      </div>
    </div>
    </div>
    </fieldset>
  </form>
    </div>
    </div>
</body>
</html>