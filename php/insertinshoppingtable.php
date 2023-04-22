<?php
require_once('config.php');
try {
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $obj = json_decode($_POST["myObject"]);
    if(isset ($obj)) {
    echo $obj->name;
    $name = $obj->name;
    $image = $obj->image;
    $price = $obj->price;
    $addOnSum = $obj->AddOnPrice;
    $totalSum = $addOnSum + $price;

    $sql = "INSERT INTO `shoppingcart`(`name`, `image`, `price`, `AddOnPrice`, `totalPrice`) VALUES ('$name','$image','$price','$addOnSum','$totalSum')";
     $result = $pdo->query($sql);
  if($result) {
      echo 'Data Inserted';
  }
  else {
      echo 'Data not inserted';
  }
  #  echo "Connected successfully";
    }
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


?>