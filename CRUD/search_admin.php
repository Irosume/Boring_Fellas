<?php
require "connection.php";

if(isset($_GET['submit'])) {
    $search = $_GET['search'];
}

$sql = "SELECT * from data_admin WHERE nama_admin LIKE '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc() ){
        echo $row["nama_admin"]."  ".$row["keterangan"]."  ".$row["level"]."<br>";
    }
    } else {
        echo "0 records";
    }
    
    $conn->close();
    
?>