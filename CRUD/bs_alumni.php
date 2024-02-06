<?php
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container" style="padding-top: 4vh;">
        <div class="row">
            <div class="offset-4 col-3 mt-4 text-center">
                <h1>Add Data</h1>
            </div>
        </div>
        <div class="row">
            <form action="create-function-alumni.php" id="formulir" method="get">
                <label for="" class="form-label">Nama Alumni</label>
                <input type="text" id="nama_alumni" class="form-control my-2" name="nama_alumni" placeholder="Nama Lengkap">
                <label for="" class="form-label">NISN</label>
                <input type="text" id="nisn" class="form-control my-2" name="nisn" placeholder="10xxxxxxxx">
                <label for="" class="form-label">Tanggal Lahir</label>
                <input type="text" id="date" class="form-control my-2" name="date" placeholder="DD-MM-YYYY">
                <label for="" class="form-label">Jurusan</label>
                <input type="text" id="jurusan" class="form-control my-2" name="jurusan">
                <label for="" class="form-label">Sosial Media</label>
                <input type="text" id="sosmed" class="form-control my-2" name="sosmed" placeholder="Social Media (Instagram)">
                <label for="" class="form-label">Prestasi</label>
                <input type="text" id="prestasi" class="form-control my-2" name="prestasi">
                <input type="button" class="btn btn-success my-2" id="submit" name="submit" value="Submit">
                <div class="offset-4 col-3 mt-4">
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>