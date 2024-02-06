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

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nisn = $_POST['nisn'];


    $sql = "UPDATE siswa SET `nama` = '$nama', `kelas` = '$kelas', `nisn` = $nisn WHERE `id` = '$id'";
    $result = $conn->query($sql);

    if ($result) {
        header("Location: SQLDatabase.php");
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
    $sql = "SELECT * from siswa WHERE id = $id LIMIT 1";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    while ($row = $result->fetch_assoc()) {
    ?>
        <form action="" method="post" id="formulir">
            <input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" maxlength="20">
            <input type="text" name="kelas" id="kelas" value="<?php echo $row['kelas']; ?>" maxlength="20">
            <input type="text" name="nisn" id="nisn" value="<?php echo $row['nisn']; ?>" maxlength="20">
            <br>
            <input type="submit" name="submit" id="submit">
        </form>

    <?php
    }
    ?>
</body>

</html>