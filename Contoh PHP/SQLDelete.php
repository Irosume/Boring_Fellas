<?php

include "SQLDBConnection.php";

// sql to delete a record
$sql = "DELETE FROM siswa WHERE id = '".$_GET['id']. "' ";

if ($conn->query($sql) === TRUE) {
  header("Location: SQLDatabase.php?pesan=Data telah dihapus!");
} else {
  header("Location: SQLDatabase.php?pesan=Data gagal dihapus!");
}

$conn->close();
?>