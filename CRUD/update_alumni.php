<?php
require "connection.php";
session_start();

if($_SESSION['level'] !== "admin"){
    header("location:error.php");
};

$id_alumni = $_GET["id_alumni"];

if(isset($_POST['submit'])) {
    $nama_alumni = $_POST['nama_alumni'];
    $nisn = $_POST['nisn'];
    $date = $_POST['date'];
    $jurusan = $_POST['jurusan'];
    $sosmed = $_POST['sosmed'];
    $prestasi = $_POST['prestasi'];


    $sql = "UPDATE identitas_alumni SET `nama_alumni` = '$nama_alumni', `nisn` = '$nisn', `tanggal_lahir` = '$date', `jurusan` = '$jurusan', `sosial_media` = '$sosmed', `prestasi` = '$prestasi' WHERE `id_alumni` = '$id_alumni'";
    $result = $conn->query($sql);
    
    if($result) {
        header("Location: alumni_admin.php?pesan=Data telah diperbarui");
    } else {
        header("Location: alumni_admin.php?pesan=Data gagal diperbarui");
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
<?php
    $sql = "SELECT * from identitas_alumni WHERE id_alumni = $id_alumni";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    while ($row = $result->fetch_assoc()) {
?>
    <div class="form-container">
        <h1>Perbarui Data</h1>
        <form action="" id="formulir" method="post">
            <label for="nama_alumni">Nama Alumni</label>
            <input type="text" id="nama_alumni" name="nama_alumni"  placeholder="Nama Alumni<" value="<?php echo $row['nama_alumni'];?>" autocomplete="off">
            <label for="nisn">NISN</label>
            <input type="text" id="nisn" name="nisn" placeholder="NISN" value="<?php echo $row['nisn'];?>" autocomplete="off">
            <label for="date">Tanggal Lahir</label>
            <input type="text" id="date" name="date" placeholder="DD/MM/YYYY" value="<?php echo $row['tanggal_lahir'];?>" autocomplete="off">
            <label for="jurusan">Jurusan</label>
            <input type="text" id="jurusan" name="jurusan" placeholder="Jurusan" value="<?php echo $row['jurusan'];?>" autocomplete="off">
            <label for="sosmed">Sosial Media</label>
            <input type="text" id="sosmed" name="sosmed" placeholder="Sosial Media (Instagram)" value="<?php echo $row['sosial_media'];?>" autocomplete="off">
            <label for="prestasi">Prestasi</label>
            <input type="text" id="prestasi" name="prestasi" placeholder="Prestasi" value="<?php echo $row['prestasi'];?>" autocomplete="off">
            <button id="submit" type="submit" name="submit">Update!</button>
        </form>
        <button class="return" onclick="location.href = 'alumni_admin.php';">Return</button>
    </div>
<?php
    }
?>
</body>
</html>