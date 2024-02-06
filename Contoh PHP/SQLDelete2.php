<?php

include "SQLDBConnection.php";

// sql to delete a record
$sql = "DELETE FROM buku WHERE id = '".$_GET['id']. "' ";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>