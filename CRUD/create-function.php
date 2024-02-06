<?php
require "connection.php";

session_start();

if (isset($_GET["submit"])) {
    $nama_admin =  $_GET['nama_admin'];
    $keterangan = $_GET['keterangan'];
    $pass = $_GET['pass'];

    $created_by = $_SESSION['username'];
    // Performing insert query execution
    // here our table name is data_admin
    $sql = "INSERT INTO data_admin (id_admin, nama_admin, keterangan, pass, `level`, created_by) VALUES (NULL, '$nama_admin', '$keterangan', '$pass', 'moderator', '$created_by')";
    // mysql_real_escape_string($pengarang)

    if (mysqli_query($conn, $sql)) {
        header("Location: read.php?pesan=Data telah diperbarui");
    } else {
        header("Location: read.php?pesan=Data gagal diperbarui")
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
