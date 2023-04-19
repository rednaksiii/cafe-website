<?php
$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "shopping";
try {
    $conn = new PDO("mysql:host=$servername;dbname=shopping", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  $obj = json_decode($_POST["myObject"]);
  echo $obj->name;
  $name = $obj->name;
  $image = $obj->image;
  $price = $obj->price;
  $addOnSum = $obj->addOnSum;
  $totalSum = $addOnSum + $price;

  $connect = mysqli_connect($serverName, $username, $password, $databaseName);
  $query = "INSERT INTO shoppingcart ('name', 'image', 'price', 'addOnPrice', 'totalPrice' ) VALUES
  ('$name', '$image', '$price', '$addOnSum', '$totalSum')";
$result = mysqli_query($connect, $query);

if($result) {
    echo 'Data Inserted';
}
else {
    echo 'Data not inserted';
}

?>