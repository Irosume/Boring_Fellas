<?php
require 'connection.php';

session_start();

if ($_SESSION['level'] !== "moderator") {
  header("location:error.php?pesan=denied");
};

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA ALUMNI</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- <style>
      * {
        font-family: Arial, Helvetica, sans-serif;
      }

      body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        align-content: center;
      }

      .title-page {
        justify-content: center;
        text-align: center;
        align-items: center;
      }

      .table-data {
        height: auto;
      }

      .delete {
        padding: 3px;
        background: red;
        border: none;
        text-transform: capitalize;
        text-decoration: none;
      }

      .update {
        padding: 3px;
        background: green;
        border: none;
        text-transform: capitalize;
        text-decoration: none;
      }

      #delete, #update {
        text-decoration: none;
        text-transform: uppercase;
        color: white;
      }

      .add-book {
        margin: 15px;
      } -->
  </style>
</head>

<body class="bg-secondary">

  <!-- NAVBAR -->

  <div class="container">
    <nav class="navbar navbar-expand-sm bg-black fixed-top">
      <div class="container-fluid">

        <!-- Links -->

        <ul class="navbar-nav text-white">
          <li class="navbar-brand text-white">DATA ALUMNI</li>
          <li class="nav-item">
            <a class="nav-link text-white" href="read_mod.php">Data Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Data Alumni</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle bg-secondary text-white" href="#" role="button" data-bs-toggle="dropdown">ADD USER</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="create-alumni.php">ALUMNI</a></li>
              <li><a class="dropdown-item" href="logout.php">LOG OUT</a></li>
            </ul>
          </li>
        </ul>

        <!-- Links end -->

      </div>
    </nav>
  </div>

  <!-- NAVBAR ENDS -->

  <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
    <table class="table table-hover">
      <tr class="align-middle">
        <th>No.</th>
        <th>Foto</th>
        <th>Nama Alumni</th>
        <th>NISN</th>
        <th>Tanggal Lahir</th>
        <th>Jurusan</th>
        <th>Sosial Media</th>
        <th>Prestasi</th>
        <th>Aktivitas</th>
        <th>Action</th>


      </tr>

      <?php

      if (!isset($_GET["pesan"]) == "") {
        echo $_GET["pesan"];
      }

      $sql = "SELECT * FROM identitas_alumni LEFT JOIN jurusan ON identitas_alumni.id_jurusan = jurusan.id_jurusan LEFT JOIN aktivitas ON identitas_Alumni.id_aktivitas = aktivitas.id_aktivitas";
      $result = mysqli_query($conn, $sql);
      $angka = 0;
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
          $angka++
      ?>

          <tr class="align-middle">
            <td><?php echo $angka; ?></td>
            <?php echo "<td><img src='../asset/" . $row['nama_gambar'] . "' width='100' height='100'></td>"; ?>
            <td class="fw-bold"><?php echo $row['nama_alumni']; ?></td>
            <td class="fw-bold"><?php echo $row['nisn']; ?></td>
            <td class="fw-bold m-4"><?php echo $row['tanggal_lahir']; ?></td>
            <td class="fw-bold p-4"><?php echo $row['nama_jurusan']; ?></td>
            <td class="fw-bold p-4"><?php echo $row['sosial_media']; ?></td>
            <td class="fw-bold p-4"><?php echo $row['prestasi']; ?></td>
            <td class="fw-bold p-4"><?php echo $row['jenis_aktivitas']; ?></td>
            <td class="d-flex flex-column"><button class="btn btn-danger m-2" onclick="return confirm('WARNING: DELETED DATA CANNOT BE UNDONE!')"><a class="text-decoration-none text-white" id="delete" name="delete" href="delete_alumni.php?id_alumni=<?php echo $row['id_alumni']; ?>">Delete</a></button>
              <button class="btn btn-success m-2"><a class="text-decoration-none text-white" id="update" name="update" href="update.php?id_alumni=<?php echo $row['id_alumni']; ?>">Update</a></button>
            </td>
          </tr>

      <?php

        }
      } else {
        echo "0 results";
      }
      mysqli_close($conn);
      ?>
    </table>
    <div class="container">
      <div class="alert alert-primary" role="primary">
        Anda telah login sebagai <b><?php echo $_SESSION['level']; ?>.</b>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

</html>