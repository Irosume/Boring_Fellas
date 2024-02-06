<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "data_alumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ( !$conn ) {
  die("Connection to database failed: " . mysqli_connect_error());
}
?>
