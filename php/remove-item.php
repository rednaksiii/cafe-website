<?php
// Connect to the database
require_once('config.php');

// Check for errors
if(mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   exit();
}

// Get the ID of the item to be removed
$itemId = $_POST['id'];

// Remove the item from the cart in the database
$query = "DELETE FROM cart WHERE id = $itemId";
mysqli_query($conn, $query);

// Close the database connection
mysqli_close($conn);
?>
