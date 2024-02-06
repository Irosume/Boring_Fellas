<?php
require 'connection.php';

session_start();

if($_SESSION['level'] == "admin"){
  header("location:alumni_admin.php");
} elseif($_SESSION['level'] == "moderator"){
    header("location:alumni_mod.php");
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
              <a class="nav-link text-white" href="#">Data Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Data Alumni</a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-white" href="#">Data User</a>
            </li>
          </ul>

           <!-- Links end -->

        </div>
    </nav>
  </div>

        <!-- NAVBAR ENDS -->

  <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
    <table class="table table-hover">
        <tr class="align-middle">
            <th>No.</th>
            <th>Nama Alumni</th>
            <th>NISN</th>
            <th>Tanggal Lahir</th>
            <th>Jurusan</th>
            <th>Sosial Media</th>
            <th>Prestasi</th>


        </tr>

<?php

if (!isset($_GET["pesan"]) == "") {
  echo $_GET["pesan"];
}

$sql = "SELECT id_alumni, nama_alumni, nisn, tanggal_lahir, jurusan, sosial_media, prestasi FROM identitas_alumni";
$result = mysqli_query($conn, $sql);
$angka = 0;
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $angka++
?>

      <tr class="align-middle">
          <td><?php echo $angka; ?></td>
          <td class="fw-bold"><?php echo $row['nama_alumni']; ?></td>
          <td class="fw-bold"><?php echo $row['nisn']; ?></td>
          <td class="fw-bold p-4"><?php echo $row['tanggal_lahir']; ?></td>
          <td class="fw-bold p-4"><?php echo $row['jurusan']; ?></td>
          <td class="fw-bold p-4"><?php echo $row['sosial_media']; ?></td>
          <td class="fw-bold p-4"><?php echo $row['prestasi']; ?></td>
      </tr>
  
      <?php

}
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
    </table>
        <!-- <div class="container">
          <div class="alert alert-danger" role="alert">
            Deleting data will result in inevitable result, proceed carefully!
          </div>
         </div>
      </div> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>
</html>