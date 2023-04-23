<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/3/superhero/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style-1.css" type="text/css">
    <link rel="stylesheet" href="/css/pecanpie.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Pecan Pie</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="/javascript/pecanpie.js"></script>
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
      <legend>Have a slice of pecan pie!</legend>
    </div>
</div>
<div class="image-container text-center">
    <img src="/images/Pecan Pie Transparent.png" alt="Pecan Pie" class="animated-image">
</div>
</div>
</div>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
    <p>Have a slice of pecan pie that will make your grandmother proud. With specially hand-roasted pecans, we have made sure that the pecan pie 
      lives up to its reputation as having the sweet, crunchy, mouthwatering texture that everyone loves.
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
      <legend>Make your own Pecan Pie!</legend>
    </div>
    </div>
    <div class="container">
      <div class="form-group">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
        <label for="select" class="lbl">Whipped Cream or no Whipped Cream?</label>
      </div>
    </div>
     <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <select class="form-control" id="whippedCream" onchange="whippedCreamChange(this.value)">
            <option></option>
            <option value="0.15">Whipped Cream ($0.15)</option>
            <option value="0.00">No Whipped Cream ($0.00)</option>
          </select>
          <br>
        </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
        <label for="select" class="lbl">Warm, cold or room temperature?</label>
      </div>
    </div>
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <select class="form-control" id="warmColdOrRoomTemp" onchange="warmOrFrozen(this.value)">
            <option></option>
          <option value="2.00">Warm ($2.00)</option>
            <option value="2.15">Cold ($2.15)</option>
            <option value="1.85">Room Temperature ($1.85)</option>
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