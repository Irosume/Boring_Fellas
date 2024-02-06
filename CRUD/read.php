<?php
require 'connection.php';

session_start();

if($_SESSION['level']!=="admin"){
  header("location:error.php?pesan=denied");
};

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
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
             <li class="navbar-brand text-white">PANEL ADMIN</li>
             <li class="nav-item">
              <a class="nav-link text-white" href="read.php">Data Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="alumni.php">Data Alumni</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle bg-secondary text-white" href="#" role="button" data-bs-toggle="dropdown">ADD USER</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="create.php">ADMIN</a></li>
                  <li><a class="dropdown-item" href="logout.php">LOG OUT</a></li>
              </ul>
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
            <th>Nama Admin</th>
            <th>Keterangan</th>
            <th>ID Admin</th>
            <th>Created By</th>
            <th>Action</th>
        </tr>

<?php

if (!isset($_GET["pesan"]) == "") {
  echo $_GET["pesan"];
}

$sql = "SELECT * FROM data_admin";
$result = mysqli_query($conn, $sql);
$angka = 0;
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $angka++
?>

      <tr class="align-middle">
          <td><?php echo $angka; ?></td>
          <td class="fw-bold"><?php echo $row['nama_admin']; ?></td>
          <td class="fw-bold"><?php echo $row['keterangan']; ?></td>
          <td class="fw-bold p-4"><?php echo $row['id_admin']; ?></td>
          <td class="fw-bold p-4"><?php if ($row['created_by'] == '') { echo "Unknown"; } else { echo "@" . $row['created_by']; } ?></td>
          <td><button class="btn btn-danger" onclick="return confirm('WARNING: DELETED DATA CANNOT BE UNDONE!')"><a class="text-decoration-none text-white" id="delete" name="delete" href="delete.php?id_admin=<?php echo $row['id_admin'];?>">Delete</a></button>
          <button class="btn btn-success"><a class="text-decoration-none text-white" id="update" name="update" href="update.php?id_admin=<?php echo $row['id_admin'];?>">Update</a></button>
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
          <div class="alert alert-secondary" role="alert">
            Anda telah login sebagai <b><?php echo $_SESSION['username'];?>.</b>
          </div>
         </div>
      </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>
</html>