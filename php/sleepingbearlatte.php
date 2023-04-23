<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/3/superhero/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style-1.css" type="text/css">
    <link rel="stylesheet" href="/css/sleepingbear.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sleeping Bear Latte</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="/javascript/sleepingbearlatte.js"></script>
  <div class="container-fluid">
    <div class="row">
      <header>
      <img src="/images/logo2.png" alt="logo">
      <h2>Team One Cafe</h2>
    </header>
    </div>
    <div class="container">
      <nav id="navbar"class="navbar navbar default" role="navigation">
          <ul id="navi" class="nav navbar nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="/html/catalogue.html">Menu</a></li>
              <li><a href="/html/references.html">References</a></li>
              <li><a href="/html/about.html">About</a></li>
              <li class="nav-item"><a href="/php/checkout.php"><i class="fa fa-shopping-cart"></i></a></li>
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
      <legend>Have a steaming Sleeping Bear Latte!</legend>
    </div>
</div>
<div class="image-container text-center">
    <img src="/images/Sleeping Bear Latte Transparent.png" alt="Sleeping Bear Latte" class="animated-image">
</div>
</div>
</div>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
    <p>Wanting to relax after a long day at work? Our sleeping bear latte will do just that. With your choice of marshmallows, 
      whipped cream, graham cracker crumble, and cookie crumble, you can be sure that our sleeping bear latte will put you at ease.
    </p>
</div>
</div>
</div>
</div>
</div>
<div class="row">
  <form>
    <fieldset>
      <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3 lbl">
      <legend>Make your own Sleeping Bear Latte!</legend>
    </div>
    </div>
    <div class="container">
      <div class="form-group">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-xs-6 col-xs-offset-3">
        <label for="select" class="lbl">Type of Milk</label>
      </div>
    </div>
     <div class="row">
      <div class="col-md-6 col-md-offset-3">
      <select class="form-control" id="typeOfMilk" onchange="typeOfMilkChange(this.value)">
            <option></option>
            <option value="3.75">2% Milk ($3.75)</option>
            <option value= "3.85">Oat Milk($3.85)</option>
            <option value="4.00">Soy Milk ($4.00)</option>
            <option value="4.10">Coconut Milk ($4.10)</option>
            <option value="4.20">Whole Milk ($4.20)</option>
            <option value="4.25">Almond Milk ($4.25)</option>
          </select>
          <br>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
        <label for="select" class="lbl">What Size?</label>
      </div>
    </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
          <select class="form-control" id="sizeOfDrink" onchange="sizeOfDrinkChange(this.value)">
            <option></option>
            <option value="0.15">Tall (16 oz) ($.0.15)</option>
            <option value="0.25">Grande (24 oz) ($.0.25)</option>
            <option value="1.00">Large (32 oz) ($1.00)</option>
          </select>
              <br>
            </div>
            </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
        <label for="select" class="lbl">How hot or cold will your Sleeping Bear Latte be?</label>
      </div>
    </div>
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
      <select class="form-control" id="warmOrFrozen" onchange="warmOrFrozenChange(this.value)">
            <option></option>
            <option value="0.10">Hot ($0.10)</option>
            <option value="0.15">Extra Hot ($0.15)</option>
            <option value="0.10">Frozen ($0.10)</option>
            <option value="0.15">Extra Frozen ($0.15)</option>
          </select>
          <br>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
        <label for="select" class="lbl">Whipped Cream or No Whipped Cream?</label>
      </div>
    </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
          <select class="form-control" id="whippedCream" onchange="whippedCreamChange(this.value)">
                <option></option>
                <option value= "0.10">Whipped Cream ($0.10)</option>
                <option value="0.00">No Whipped Cream ($0.00)</option>
              </select>
              <br>
            </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
            <label for="select" class="lbl">Sweeteners</label>
          </div>
        </div>
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                  <select class="form-control" id="sweeteners" onchange="sweetenerChange(this.value)">
                    <option></option>
                    <option value="0.10">Sugar($0.10)</option>
                    <option value= "0.10">Classic Syrup ($0.10)</option>
                    <option value="0.15">Splenda($0.10)</option>
                    <option value="0.20">Honey ($0.10)</option>
                  </select>
                  <br>
                </div>

                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
                <label for="select" class="lbl">Marshmallows or no marshmallows?</label>
              </div>
            </div>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                      <select class="form-control" id="marshmallows" onchange="marshmallowChange(this.value)">
                        <option></option>
                        <option value="0.10">Marshmallows($0.10)</option>
                        <option value="0.00">No Marshmallows ($0.00)</option>
                      </select>
                      <br>
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
                <label for="select" class="lbl">Toppings: Graham Cracker Crumble, Cookie Crumble or Both?</label>
              </div>
            </div>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                      <select class="form-control" id="grahamcrackers" onchange="grahamCrackerChange(this.value)">
                        <option></option>
                        <option value="0.15">Graham Cracker Crumble ($0.15)</option>
                        <option value="0.10"> Cookie Crumble ($0.10)</option>
                        <option value="0.25">Both ($0.25)</option>
                      </select>
                      <br>
                      <div id="totalPrice">

                      </div>
                    </div>
                </div>
      </div>
    </div>
    <div class="form-group">
      
    </div>
    </fieldset>
  </form>
  <div class="container">
   <div class="pull-left">
        <button type="reset" onclick="location.reload();" class="btn btn-danger cancelBtn" data-inline="true">Cancel</button>
        </div>
        <div class="pull-right">
        <button onclick="sendDataObject();" class="btn btn-success submitBtn" data-inline="true">Order</button>
      </div>
    </div>
</div>
</div>
</body>
</html>