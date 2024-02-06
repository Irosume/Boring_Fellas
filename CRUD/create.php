<?php
require "connection.php";

session_start();

if ($_SESSION['level'] !== 'admin') {
    header("location:error.php?pesan=error");
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
            width: 25rem;
            height: 30rem;
            padding: 10px;
        }

        #formulir {
            display: flex;
            flex-direction: column;
            height: 25rem;
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
        <h1>Daftarkan Admin</h1>
        <form action="create-function.php" id="formulir" method="$_GET">
            <label for="nama">Nama Admin</label>
            <input type="text" id="nama_admin" name="nama_admin"  placeholder="Nama Admin" autocomplete="off">
            <label for="kelas">Keterangan</label>
            <input type="text" id="keterangan" name="keterangan" placeholder="Keterangan" autocomplete="off">
            <label for="kelas">Password</label>
            <input type="text" id="pass" name="pass" placeholder="Password" autocomplete="off">
            <button id="submit" type="submit" name="submit">Daftar!</button>
        </form>
        <button class="return" onclick="location.href = 'read.php';">Return</button>
    </div>
</body>
</html>