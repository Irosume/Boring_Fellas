<?php
require 'connection.php';


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            height: 1000px;
            background: linear-gradient(45deg, rgb(29, 32, 24), rgb(180, 180, 180))
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center flex-column">


    <div class="card w-50">
        <div class="card-body">
            <!-- <h3 class="fw-bold">Login Page</h3>
                <form action="login.php" class="form" id="formulir" method="POST">
                    <label for="nama" class="fw-bold">Nama Admin</label>
                    <input type="text" id="user" name="user"  placeholder="Username" autocomplete="off" required>
                    <label for="kelas" class="fw-bold">Password</label>
                    <input type="text" id="pass" name="pass" placeholder="Password" autocomplete="off" required>
                    <input type="submit" value="Login!" name="submit" id="submit">
                </form> -->
            <form action="create-function-alumni.php" id="formulir" method="post" class="d-flex gap-3 flex-column m-3" enctype="multipart/form-data">
                <div class="row">
                    <h3 class="fw-bold text-center mb-3">Add Data</h3>
                </div>
                <div class="mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control name w-100" id="nama_alumni" name="nama_alumni" autocomplete="off">
                </div>
                <div class="mb-2">
                    <label for="pass" class="form-label">NISN</label>
                    <input type="text" class="form-control pass w-100" id="nisn" name="nisn" autocomplete="off">
                </div>
                <div class="mb-2">
                    <label for="pass" class="form-label">Tanggal Lahir</label>
                    <input type="text" class="form-control pass w-100" id="date" name="date" autocomplete="off">
                </div>
                <div class="form-group mb-2">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option>--</option>
                        <option value="1">Akuntansi</option>
                        <option value="2">2</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="pass" class="form-label">Sosial Media</label>
                    <input type="text" class="form-control pass w-100" id="sosmed" name="sosmed" autocomplete="off">
                </div>
                <div class="mb-2">
                    <label for="pass" class="form-label">Prestasi</label>
                    <input type="text" class="form-control pass w-100" id="prestasi" name="prestasi" autocomplete="off">
                </div>
                <div class="mb-2">
                    <label for="formFile" class="form-label">Foto Diri</label>
                    <input class="form-control" type="file" id="gambar" name="gambar">
                </div>
                <div class="mb-2 text-center">
                    <button type="submit" id="submit" name="submit" class="btn btn-success text-center w-25 h-25 mt-2">Add Data</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>