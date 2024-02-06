<?php
    include "SQLDBConnection.php";

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $nisn = $_POST['nisn'];

        if ($nama == "" || $kelas == "") {
            header("Location: SQLDatabase.php?pesan=Data belum terisi!");

        } else {
            $sql = "INSERT INTO siswa (id, nama, kelas, nisn) values(NULL, '".$nama."', '".$kelas. "', '" . $nisn . "')";
            if ($conn->query($sql) === TRUE) {
                header("Location: SQLDatabase.php?pesan=Data telah terkirim!");       
                $conn->close();
            } else {
                header("Location: SQLDatabase.php?pesan=Data gagal terkirim");
                $conn->close();
            }
        }
    }
