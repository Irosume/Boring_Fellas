<?php
require "connection.php";

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* * {
            outline: green 1px solid !important;
        } */

        body {
            background-image: url("../asset/background.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            backdrop-filter: blur(5px);

            color: rgb(78, 78, 78);
        }
    </style>
</head>

<body>
    <!-- <div class="container">
        <nav class="navbar navbar-expand-sm fixed-top" style="height: 95px; background: rgb(66, 66, 66);">
            <div class="container-fluid mx-5">

                <ul class="navbar-nav nav text-white d-flex justify-content-end align-items-center row w-100">
                    <li class="navbar-brand text-white col">
                        <img src="https://static.schoolmedia.id/assets/socmed/NI/photo/smkn1bws.png" alt="" class="img" style="width: auto; height: 50px;" draggable="false">
                        <img src="../asset/logo-smk.png" alt="" class="img" style="width: auto; height: 70px;" draggable="false">
                    </li>

                    <li class="nav-item justify-content-end col">
                        <div class="d-flex justify-content-end gap-4">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                            <a class="nav-link text-white" href="#">About Us</a>
                            <a class="nav-link text-white" href="#">Alumni</a>
                            <a class="nav-link text-white" href="#">Admin</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div> -->

    <!-- <div class="container h-75 mw-75">
        <div class="container vh-100 mw-100 bg-danger">
            <div class="row align-items-center h-auto">
                <h1>tes</h1>
            </div>
            <div class="row align-items-center h-auto">
                <h1 class="text-black">Data Alumni SMKN 1 Bondowoso</h1>
            </div>
        </div>
    </div> -->
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid vh-100 mw-100 d-flex justify-content-center align-items-center">
        <div class="row h-75 w-50">
            <div class="col d-flex justify-content-center align-items-center flex-column" style="background: red;">
                <img class="image-fluid mb-5" src="../asset/Logo_1.png" alt="" style="width: 350px; height:auto ;">
                <h2 class="text-white">Data Alumni</h2>
                <h1 class="text-white">SMKN 1 Bondowoso</h1>
                <button class="btn mt-5" style="width:10rem ; height: 3rem; border-radius:50px; background: rgb(197, 197, 197, 75%); color: white; font-weight: bold;">Search Now</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>