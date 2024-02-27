<?php
require 'connection.php';


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD ALUMNI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            height: 100vh;
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
            <form action="create-function-jurusan.php" id="formulir" method="post" class="d-flex gap-3 flex-column m-3" enctype="multipart/form-data">
                <div class="row">
                    <h3 class="fw-bold text-center mb-3">Add Data</h3>
                </div>
                <div class="mb-2">
                    <label for="name" class="form-label">Nama Jurusan</label>
                    <input type="text" class="form-control name w-100" id="nama_jurusan" name="nama_jurusan" autocomplete="off">
                </div>
                <div class="form-group mb-2">
                    <label for="jurusan">Jenis Jurusan</label>
                    <select class="form-control" id="jenis_jurusan" name="jenis_jurusan">
                        <option>--</option>
                        <option value="Bisnis Manajemen">Bisnis Manajemen</option>
                        <option value="Teknologi Informatika">Teknologi Informatika</option>
                    </select>
                </div>
                <div class="mb-2 text-center">
                    <button type="submit" id="submit" name="submit" class="btn btn-success text-center w-25 h-25 mt-2">Add Jurusan</button>
                </div>
            </form>
        </div>
    </div>
    <button onclick="location.href = 'jurusan.php';" class="btn btn-danger text-center mt-3">Return</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>