<?php
$id = $_GET["id"];

if(isset($_POST['submit'])) {
    $nama_buku = $_POST['nama_buku'];
    $pengarang = $_POST['pengarang'];
    $nomor_buku = $_POST['nomor_buku'];


    $sql = "UPDATE buku SET `nama_buku` = '$nama_buku', `pengarang` = '$pengarang', `nomor_buku` = '$nomor_buku' WHERE `id` = '$id'";
    $result = $conn->query($sql);
    
    if($result) {
        header("Location: SQLDatabase2.php");
    } else {
        echo "Error";
    }
}
?>