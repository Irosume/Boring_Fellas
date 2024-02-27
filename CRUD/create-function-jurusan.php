<?php
require "connection.php";

session_start();

if (isset($_POST["submit"])) {
    $nama_jurusan =  $_POST['nama_jurusan'];
    $jenis_jurusan = $_POST['jenis_jurusan'];

    // Performing insert query execution
    // here our table name is data_admin
    $sql = "INSERT INTO jurusan (`id_jurusan`, `nama_jurusan`, `jenis_jurusan`) VALUES (NULL, '$nama_jurusan', '$jenis_jurusan')";
    // mysql_real_escape_string($pengarang)

    if (mysqli_query($conn, $sql)) {
        header("Location: jurusan.php?pesan=success");
    } else {
        header("Location: jurusan.php?pesan=failed")
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
