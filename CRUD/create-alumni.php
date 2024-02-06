<?php
require "connection.php";

session_start();

if ($_SESSION['level'] == ""){
    header("location:error.php");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD DATA</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(45deg, purple, white);
        }

        .form-container {
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            background: white;
            width: 30rem;
            height: 40rem;
            padding: 10px;
        }

        #formulir {
            display: flex;
            flex-direction: column;
            height: 30rem;
            width: 15rem;
            padding: 5px;
            margin: 0;
            gap: 10px;
        }

        #formulir input {
            border: 1px solid gray;
            display: flex;
            justify-content: center;
            align-self: center;
            border-radius: 5px;
            margin: 5px;
            width: 15rem;
            height: 2rem;
        }

        #formulir label {
            display: flex;
            align-items: flex-start;
        }
        #submit {
            width: 5rem;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Daftarkan Alumni</h1>
        <form action="create-function-alumni.php" id="formulir" method="post" enctype="multipart/form-data">
            <label for="nama">Nama Alumni</label>
            <input type="text" id="nama_alumni" name="nama_alumni"  placeholder="Nama Alumni" autocomplete="off">
            <label for="nisn">NISN</label>
            <input type="text" id="nisn" name="nisn" placeholder="NISN" autocomplete="off">
            <label for="date">Tanggal Lahir</label>
            <input type="text" id="date" name="date" placeholder="DD-MM-YYYY" autocomplete="off">
            <label for="date">Jurusan</label>
            <select name="jurusan" id="jurusan">
                <option value="1">Akuntansi</option>
                <option value="2">Bisnis Digital</option>
                <option value="3">Layanan Perbankan</option>
                <option value="4">Manajemen Perkantoran</option>
                <option value="5">Produksi Film</option>
                <option value="6">Desain Komunikasi Visual</option>
                <option value="7">Teknik Komunikasi dan Jaringan</option>
                <option value="8">Rekayasa Perangkat Lunak</option>
                <option value="9">Produksi Siaran Program Televisi</option>
            </select>
            <label for="date">Sosial Media</label>
            <input type="text" id="sosmed" name="sosmed" placeholder="Sosial Media (Instagram)" autocomplete="off">
            <label for="date">Prestasi</label>
            <input type="text" id="prestasi" name="prestasi" placeholder="Prestasi" autocomplete="off">
            <!-- <label for="date">Aktivitas</label>
            <select name="aktivitas" id="aktivitas">
                <option value="1">Bekerja</option>
                <option value="2">Kuliah</option>
            </select> -->
            <input type="file" id="gambar" name="gambar">
            <button id="submit" type="submit" name="submit">Daftar!</button>
        </form>
        <button class="return" onclick="location.href = 'alumni.php';">Return</button>
    </div>
</body>
</html>