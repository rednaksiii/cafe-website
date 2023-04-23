<?php
// Connect to the database
require_once('config.php');

try {
   $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Get the ID of the item to be removed
$itemId = $_POST['id'];

// Remove the item from the cart in the database
$sql= "DELETE FROM shoppingcart WHERE id = $itemId";
//mysqli_query($conn, $query);
$result = $pdo->query($sql);
if($result) {
   echo 'Data Deleted';
}
else {
   echo 'Data not Deleted';
}
}
catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
 }

?>
