<?php 
require "connection.php";

$sql = "DELETE FROM data_admin WHERE data_admin . id_admin = '".$_GET['id_admin']."' ";

if ($conn->query($sql) === TRUE) {
  header("location:read.php?pesan=success");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>