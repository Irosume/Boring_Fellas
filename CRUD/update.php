<?php
require "connection.php";
$id_admin = $_GET["id_admin"];

if(isset($_POST['submit'])) {
    $nama_admin = $_POST['nama_admin'];
    $keterangan = $_POST['keterangan'];
    $pass = $_POST['pass'];

    $sql = "UPDATE data_admin SET `nama_admin` = '$nama_admin', `keterangan` = '$keterangan', `pass` = '$pass' WHERE `id_admin` = '$id_admin'";
    $result = $conn->query($sql);
    
    if($result) {
        header("Location: read.php?pesan=Data telah diperbarui");
    } else {
        echo "Location: read.php?pesan=Data gagal diperbarui";
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA</title>
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

        .return {
            width: 5rem;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<?php
    $sql = "SELECT * from data_admin WHERE id_admin = $id_admin";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    while ($row = $result->fetch_assoc()) {
?>
    <div class="form-container">
        <h1>Perbarui Data</h1>
        <form action="" id="formulir" method="post">
            <label for="nama">Nama Admin</label>
            <input type="text" id="nama_admin" name="nama_admin"  placeholder="Nama Admin<" value="<?php echo $row['nama_admin'];?>" autocomplete="off">
            <label for="kelas">Keterangan</label>
            <input type="text" id="keterangan" name="keterangan" placeholder="Keterangan" value="<?php echo $row['keterangan'];?>" autocomplete="off">
            <label for="kelas">Password</label>
            <input type="password" id="pass" name="pass" placeholder="Password" value="<?php echo $row['pass'];?>" autocomplete="off">
            <button id="submit" type="submit" name="submit">Update!</button>
        </form>
        <button class="return" onclick="location.href = 'read.php';">Return</button>
    </div>
<?php
    }
?>
</body>
</html>