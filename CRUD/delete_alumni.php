<?php 
require "connection.php";

session_start();

$sql = "DELETE FROM identitas_alumni WHERE identitas_alumni . id_alumni = '".$_GET['id_alumni']."' ";

if ($conn->query($sql) === TRUE) {
  if ($_SESSION['level'] == "moderator") {
    header("location:alumni_mod.php?pesan=success");
  } else header("location:alumni_admin.php?pesan=success)");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>