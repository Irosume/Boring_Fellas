<?php 
require "connection.php";

session_start();

$sql = "DELETE FROM identitas_alumni WHERE identitas_alumni . id_alumni = '".$_GET['id_alumni']."' ";

if ($conn->query($sql) === TRUE) {
  header("location:alumni.php?pesan=Data berhasil dihapus!)");
} else {
  header("location:alumni.php?pesan=Data gagal dihapus!)")
  . $conn->error;
}

$conn->close();
?>