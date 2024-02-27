<?php 
require "connection.php";

session_start();

$sql = "DELETE FROM jurusan WHERE jurusan . id_jurusan = '".$_GET['id_jurusan']."' ";

if ($conn->query($sql) === TRUE) {
  header("location:jurusan.php?pesan=success)");
} else {
  header("location:jurusan.php?pesan=failed)")
  . $conn->error;
}

$conn->close();
?>