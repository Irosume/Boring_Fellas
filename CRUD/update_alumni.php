<?php
require "connection.php";
session_start();

if ($_SESSION['level'] !== "admin") {
    header("location:error.php");
};

$id_alumni = $_GET["id_alumni"];

if (isset($_POST["submit"])) {
    $nama_alumni =  $_POST['nama_alumni'];
    $nisn = $_POST['nisn'];
    $date = $_POST['date'];
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
                $sql = "UPDATE `identitas_alumni` SET `nama_alumni`='$nama_alumni',`nisn`='$nisn',`tanggal_lahir`='$date',`id_jurusan`='$jurusan',`sosial_media`='$sosmed',`prestasi`='$prestasi', `nama_gambar`=' $nama_gambar',`ukuran_gambar`='$ukuran_gambar',`tipe_gambar`='$tipe_gambar' WHERE `id_alumni` = '$id_alumni'";
                var_dump($sql);
                $sqli = mysqli_query($conn, $sql);
                var_dump($sqli);
                if ($sql) {
                    if ($_SESSION['level'] == "admin") {
                        header("Location: alumni_admin.php");
                    } else {
                        header("Location: alumni_mod.php");
                    }
                } else {

                    if ($_SESSION['level'] == "admin") {
                        header("Location: alumni_admin.php?pesan=Data gagal diperbarui!")
                            . mysqli_error($conn);
                    } else {
                        header("Location: alumni_mod.php?pesan=Data gagal diperbarui!")
                            . mysqli_error($conn);
                    }
                }
            } else {
                if ($_SESSION['level'] == "admin") {
                    header("Location: alumni_admin.php?pesan=Gambar gagal diperbaru!")
                        . mysqli_error($conn);
                } else {
                    header("Location: alumni_mod.php?pesan=Gambar gagal diperbarui!")
                        . mysqli_error($conn);
                }
            }
        } else {
            if ($_SESSION['level'] == "admin") {
                header("Location: alumni_admin.php?pesan=Ukuran gambar terlalu besar!")
                    . mysqli_error($conn);
            } else {
                header("Location: alumni_mod.php?pesan=Ukuran gambar terlalu besar!")
                    . mysqli_error($conn);
            }
        }
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
    $sql = "SELECT * from identitas_alumni WHERE id_alumni = '$id_alumni' ";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    while ($row = $result->fetch_assoc()) {
    ?>
        <div class="form-container">
            <h1>Perbarui Data</h1>
            <form action="" id="formulir" method="post" enctype="multipart/form-data">
                <label for="nama">Nama Alumni</label>
                <input type="text" id="nama_alumni" name="nama_alumni" placeholder="Nama Alumni" value="<?php echo $row['nama_alumni'] ?>" autocomplete="off">
                <label for="nisn">NISN</label>
                <input type="text" id="nisn" name="nisn" placeholder="NISN" value="<?php echo $row['nisn'] ?>" autocomplete="off">
                <label for="date">Tanggal Lahir</label>
                <input type="text" id="date" name="date" placeholder="DD-MM-YYYY" value="<?php echo $row['tanggal_lahir'] ?>" autocomplete="off">
                <label for="date">Jurusan</label>
                <select name="jurusan" id="jurusan" value="<?php echo $row['id_jurusan'] ?>">
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
                <input type="text" id="sosmed" name="sosmed" placeholder="Sosial Media (Instagram)" value="<?php echo $row['sosial_media'] ?>" autocomplete="off">
                <label for="date">Prestasi</label>
                <input type="text" id="prestasi" name="prestasi" placeholder="Prestasi" value="<?php echo $row['prestasi'] ?>" autocomplete="off">
                <!-- <label for="date">Aktivitas</label>
            <select name="aktivitas" id="aktivitas">
                <option value="1">Bekerja</option>
                <option value="2">Kuliah</option>
            </select> -->
                <input type="file" id="gambar" name="gambar">
                <button id="submit" type="submit" name="submit">Update!</button>
            </form>
            <button class="return" onclick="location.href = 'alumni_admin.php';">Return</button>
        </div>
    <?php
    }
    ?>
</body>

</html>