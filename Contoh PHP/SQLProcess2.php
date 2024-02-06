<?php
    include "SQLDBConnection.php";

    if(isset($_POST['submit'])){
        $nama_buku = $_POST['nama_buku'];
        $pengarang = $_POST['pengarang'];
        $nomor_buku = $_POST['nomor_buku'];

        if ($nama_buku == "" || $pengarang == "" || $nomor_buku == "") {
            header("location: SQLDatabase2.php");
            echo "<script> alert('') ";
        } else {
            $sql = "INSERT INTO buku (id, nama_buku, pengarang, nomor_buku) values(NULL, '".$nama_buku."', '".$pengarang."', '".$nomor_buku."')";
            if ($conn->query($sql) === TRUE) {
                echo "Data berhasil terkirim!";
                $conn->close();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                $conn->close();
            }
        }
    }

?>