<?php include("config.php") ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="nav">
            <nav></nav>
        </div>
    </header>

    <table>
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Umur</th>
            <th>NISN</th>
            <th>Alamat</th>
        </tr>
    
    <?php
    $sql = "SELECT * FROM siswa";
    $query = mysqli_query($db, $sql);

    while($siswa = mysqli_fetch_assoc($query)){

    ?>
        <tr>
            <td><?php echo $siswa['nama']; ?></td>
            <td><?php echo $siswa['kelas']; ?></td>
            <td><?php echo $siswa['umur']; ?></td>
            <td><?php echo $siswa['nisn']; ?></td>
            <td><?php echo $siswa['alamat']; ?></td>
            <td><?php echo "<a href='form-edit.php?' id=".$siswa['id']"?></td>
        </tr>

    <?php
    }
    ?>
</body>
</html>