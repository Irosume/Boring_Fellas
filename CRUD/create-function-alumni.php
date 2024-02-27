<?php
require "connection.php";

session_start();


if (isset($_POST["submit"])) {
    $nama_alumni =  $_POST['nama_alumni'];
    $nisn = $_POST['nisn'];
    $date = $_POST['date'];
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $sosmed = $_POST['sosmed'];
    $prestasi = $_POST['prestasi'];
    $aktivitas = $_POST['aktivitas'];
    $nama_gambar = $_FILES['gambar']['name'];
    $ukuran_gambar = $_FILES['gambar']['size'];
    $tipe_gambar = $_FILES['gambar']['type'];
    $tmp_gambar = $_FILES['gambar']['tmp_name'];

    $path = "../asset/" . $nama_gambar;

    if ($tipe_gambar == "image/jpeg" || $tipe_gambar == "image/png") {
        if ($ukuran_gambar <= 1000000) {
            if (move_uploaded_file($tmp_gambar, $path)) {
                // Performing insert query execution
                // here our table name is data_admin
                $sql = "INSERT INTO identitas_alumni (id_alumni, nama_alumni, nisn, tempat_tanggal_lahir, alamat_alumni, id_jurusan, sosial_media, prestasi, id_aktivitas, nama_gambar, ukuran_gambar, tipe_gambar) 
                VALUES (NULL, '$nama_alumni', '$nisn', '$date', '$alamat', '$jurusan', '$sosmed', '$prestasi', '$aktivitas', '$nama_gambar', '$ukuran_gambar', '$tipe_gambar')";
                var_dump($sql);
                $sqli = mysqli_query($conn, $sql);
                var_dump($sqli);
                if ($sql) {
                    header("location: alumni.php?pesan=Data berhasil ditambahkan");
                } else {
                    header("location: alumni.php?pesan=Data gagal diperbarui!")
                        . mysqli_error($conn);
                }
            } else {
                    header("Location: alumni.php?pesan=Gambar gagal diperbarui!")
                        . mysqli_error($conn);
            }
        } else {
                header("Location: alumni_.php?pesan=Ukuran gambar terlalu besar!")
                    . mysqli_error($conn);
        }
    }
    // else {
    //     if ($_SESSION['level'] == "admin") {
    //         header("Location: alumni_admin.php?pesan=Tipe gambar salah!")
    //         . mysqli_error($conn);
    //     } else {
    //         header("Location: alumni_mod.php?pesan=Tipe gambar salah!")
    //         . mysqli_error($conn);
    //     }
    // }
    // mysql_real_escape_string($pengarang)


    // Close connection
    mysqli_close($conn);
}
