<?php
require 'connection.php';

error_reporting(0);

$pesan = $_GET['pesan'];

if ($pesan == "gagal") {
    echo "<div class='alert alert-danger mt-5' role='alert'>
    Login gagal! Coba lagi.
  </div>'";
} elseif ($pesam == "passSalah") {
    echo "<div class='alert alert-danger mt-5' role='alert'>
    Password Salah!
  </div>'";
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
            height: 100vh;
            background: linear-gradient(45deg, rgb(29, 32, 24), rgb(180, 180, 180) )
        }

        .form-container {
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            /* text-align: center; */
            flex-direction: column;
            background: white;
            width: 25rem;
            height: 30rem;
            padding: 10px;
        }

        #formulir {
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            /* align-items: center; */
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
            /* width: 15rem; */
            height: 2rem;
        }

        #user, #pass {
            width: 15rem;
        }

        #formulir label {
            display: flex;
            align-items: flex-start;
        }
        #submit {
            width: 100px;
            justify-content: center;
            align-items: center;
            height: 2rem;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center flex-column">
    

    <div class="card h-50 w-25">
        <div class="card-body w-100 ">
                <!-- <h3 class="fw-bold">Login Page</h3>
                <form action="login.php" class="form" id="formulir" method="POST">
                    <label for="nama" class="fw-bold">Nama Admin</label>
                    <input type="text" id="user" name="user"  placeholder="Username" autocomplete="off" required>
                    <label for="kelas" class="fw-bold">Password</label>
                    <input type="text" id="pass" name="pass" placeholder="Password" autocomplete="off" required>
                    <input type="submit" value="Login!" name="submit" id="submit">
                </form> -->
                <form action="login.php" method="post" class="d-flex gap-3 flex-column m-3">
                    <div class="row">
                        <h3 class="fw-bold text-center mb-3">Login Page</h3>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Username</label>
                        <input type="text" class="form-control name w-100" id="name" name="name" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control pass w-100" id="pass" name="pass" autocomplete="off">
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" id="submit" name="submit" class="btn btn-success text-center w-100 mt-2">Login</button>
                    </div>
                  </form>     
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>