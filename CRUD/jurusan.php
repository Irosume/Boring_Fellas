<?php
require 'connection.php';

session_start();

$pesan = $_GET['pesan'];

if ($_SESSION['level'] !== "admin") {
  header("location:error.php?pesan=denied");
};

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATA JURUSAN</title>
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

  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check-circle-fill" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
    <symbol id="info-fill" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
    <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
  </svg>

  <!-- NAVBAR -->

  <div class="container">
    <nav class="navbar navbar-expand-sm bg-black fixed-top">
      <div class="container-fluid">

        <!-- Links -->

        <ul class="navbar-nav text-white">
          <li class="navbar-brand text-white">Halo <b><?php echo $_SESSION['username'] ?>.</b></li>
          <li class="nav-item">
            <a class="nav-link text-white" href="read.php">Data Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="alumni.php">Data Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-bold" href="alumni_admin.php">Jurusan</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle bg-secondary text-white" href="#" role="button" data-bs-toggle="dropdown">ADD DATA</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="create-jurusan.php">JURUSAN</a></li>
              <li onclick="return confirm('WARNING! Are you sure you want to Logout?')"><a class="dropdown-item" href="logout.php">LOG OUT</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <form class="d-flex mb-0 mx-2" role="search" method="post">
              <input class="form-control me-1" name="search" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
              <button class="btn btn-outline-success" type="submit" id="cari" name="cari">Search</button>
            </form>
          </li>
        </ul>

        <!-- Links end -->

      </div>
    </nav>
  </div>

  <!-- NAVBAR ENDS -->

  <div class="container d-flex flex-column justify-content-center align-items-center" style="margin-top: 8rem; margin-bottom: 5rem;">

    <?php
    if ($pesan == "success") {
    ?>

      <div class="container d-flex justify-content-center align-items-center">
        <div class="alert alert-success d-flex align-items-center justify-content-center" style="width: 250px; height:50px ;" role="alert">
          <svg class="bi flex-shrink-0 me-2" style="width: 15px; height: auto;" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
          </svg>
          <div>
            Data berhasil diperbarui!
          </div>
        </div>
      </div>

    <?php
    } else if ($pesan == "failed") {
    ?>
      <div class="container d-flex justify-content-center align-items-center">
        <div class="alert alert-danger d-flex align-items-center justify-content-center" style="width: 250px; height:50px ;" role="alert">
          <svg class="bi flex-shrink-0 me-2" style="width: 15px; height: auto;" role="img" aria-label="Danger:">
            <use xlink:href="#exclamation-triangle-fill" />
          </svg>
          <div>
            Data gagal diperbarui!
          </div>
        </div>
      </div>

    <?php
    }
    ?>
    <?php
    if (!isset($_POST['cari'])) {
      $sql = mysqli_query($conn, "SELECT * FROM jurusan");
    ?>
      <table class="table table-hover">
        <tr class="align-middle">
          <th>No.</th>
          <th>Nama Jurusan</th>
          <th>Jenis Jurusan</th>
          <th>Action</th>
        </tr>
        <?php
        $angka = 0;
        foreach ($sql as $row) :
          $angka++;
        ?>
          <tr class="align-middle">
            <td><?php echo $angka; ?></td>
            <td class="fw-bold"><?php echo $row['nama_jurusan']; ?></td>
            <td class="fw-bold"><?php echo $row['jenis_jurusan']; ?></td>
            <td class="d-flex flex-column p-4"><button class="btn btn-danger m-2" onclick="return confirm('WARNING: DELETED DATA CANNOT BE UNDONE!')"><a class="text-decoration-none text-white" id="delete" name="delete" href="delete_jurusan.php?id_jurusan=<?php echo $row['id_jurusan']; ?>">Delete</a></button>
              <button class="btn btn-success m-2"><a class="text-decoration-none text-white" id="update" name="update" href="update-jurusan.php?id_jurusan=<?php echo $row['id_jurusan']; ?>">Update</a></button>
            </td>
          </tr>
        <?php
        endforeach;
        ?>
      </table>
    <?php
    }
    ?>
    <?php

    $sql = "SELECT * FROM jurusan";
    if (isset($_POST['cari'])) {
      $search = $_POST['search'];
      $sql = "SELECT * from jurusan WHERE nama_jurusan LIKE '%$search%'";

      $result = mysqli_query($conn, $sql);

      if ($result) {
        if (mysqli_num_rows($result) > 0) {
    ?>
          <table class="table table-hover">
            <tr class="align-middle">
              <th>No.</th>
              <th>Nama Jurusan</th>
              <th>Jenis Jurusan</th>
              <th>Action</th>
            </tr>
            <?php
            $angka = 0;
            while ($row = mysqli_fetch_assoc($result)) {
              $angka++;
            ?>
              <tr class="align-middle">
                <td class="fw-bold"><?php echo $angka; ?></td>
                <td class="fw-bold"><?php echo $row['nama_jurusan']; ?></td>
                <td class="fw-bold"><?php echo $row['jenis_jurusan']; ?></td>
                <td class="d-flex flex-column h-100">
                  <button class="btn btn-danger m-2" onclick="return confirm('WARNING: DELETED DATA CANNOT BE UNDONE!')"><a class="text-decoration-none text-white" id="delete" name="delete" href="delete_jurusan.php?id_jurusan=<?php echo $row['id_jurusan']; ?>">Delete</a></button>
                  <button class="btn btn-success m-2"><a class="text-decoration-none text-white" id="update" name="update" href="update-jurusan.php?id_alumni=<?php echo $row['id_jurusan']; ?>">Update</a></button>
                </td>
              </tr>
            <?php
            }
            ?>
          </table>
    <?php
        } else {
          echo "Data tidak ditemukan.";
        }
      } else {
        echo "Error: " . mysqli_error($conn);
      }

      mysqli_close($conn);
    }
    ?>
  </div>
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