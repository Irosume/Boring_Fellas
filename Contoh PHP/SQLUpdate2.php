<?php
    include "SQLDBConnection.php";

    // $sql = "SELECT * from siswa";
    // $result = $conn->query($sql);
    // $nomer = 0;
    // if ($result->num_rows > 0) {
    //     // OUTPUT DATA SETIAP ROW
    //     while($row = $result->fetch_assoc()) {
    //         $nomer++;

    $id = $_GET["id"];

    if(isset($_POST['submit'])) {
        $nama_buku = $_POST['nama_buku'];
        $pengarang = $_POST['pengarang'];
        $nomor_buku = $_POST['nomor_buku'];


        $sql = "UPDATE buku SET `nama_buku` = '$nama_buku', `pengarang` = '$pengarang', `nomor_buku` = '$nomor_buku' WHERE `id` = '$id'";
        $result = $conn->query($sql);
        
        if($result) {
            header("Location: SQLDatabase2.php");
        } else {
            echo "Error";
        }
    }
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        #formulir {
            justify-content: center;
            align-items: center;
            display: flex;
            flex-direction: row;
            border: solid 1px black;
            margin: 5px;
            padding: 15px;
            width: 50rem;
            height: 2rem;
        }

        #formulir input {
            width: 10rem;
            height: 1.5rem;
            margin: 5px;
        }

        #submit {
            margin: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    $sql = "SELECT * from buku WHERE id = $id LIMIT 1";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    while($row = $result->fetch_assoc()) {
    ?>
    <form action="" method="post" id="formulir">
        <input type="text" name="nama_buku" id="nama" value="<?php echo $row['nama_buku']; ?>" maxlength="20">
        <input type="text" name="pengarang" id="kelas" value="<?php echo $row['pengarang']; ?>" maxlength="20">
        <input type="text" name="nomor_buku" id="buku" value="<?php echo $row['nomor_buku']; ?>" maxlength="20">
        <br>
        <input type="submit" name="submit" id="submit">
    </form>

    <?php
    }
    ?>
</body>
</html>