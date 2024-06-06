<?php
session_start();
// Jika tidak bisa login maka balik ke login.php
// jika masuk ke halaman ini melalui url, maka langsung menuju halaman login
if (!isset($_SESSION['login'])) {
    header('location:login.php');
    exit;
}

// Memanggil atau membutuhkan file function.php
require 'function.php';

// Menampilkan semua data dari table mahasiswa berdasarkan nim secara Descending
$siswa = query("SELECT * FROM mahasiswa ORDER BY nim DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Animasi Login -->
    <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
    <style type="text/css">
    .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #fff;
    }
    .preloader .loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font: 14px arial;
    }
    </style>
    <script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
    </script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Own CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Data Siswa</title>
    <style>
        /* Adjust padding for welcome box */
        .welcome-box {
            padding: 60px 30px; /* Increased padding for better spacing */
        }

        /* Adjust spacing for h1 and p */
        .welcome-box h1 {
            margin-bottom: 20px;
            font-size: 2em;
            padding-bottom: 10px; /* Added padding for better spacing */
        }

        .welcome-box p {
            margin-bottom: 20px;
            font-size: 1.2em;
            padding-bottom: 10px; /* Added padding for better spacing */
        }

        /* Custom button styles */
        .index-button {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background: #4b6cb7;
            color: #fff;
            font-size: 1em;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        .index-button:hover {
            background: #182848;
            transform: scale(1.05);
        }

        .index-button:active {
            background: #1b3a6f;
        }
    </style>
</head>
<body>
    <!-- Tampilkan preloader -->
    <div class="preloader">
    <div class="loading">
    <img src="img/poi.gif" width="80">
    <p>Harap Tunggu...</p>
  </div>
</div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-uppercase">
        <div class="container">
            <a class="navbar-brand" href="index.php">Data Siswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Close Navbar -->

    <div class="welcome-container">
        <div class="welcome-box">
            <h1>Welcome to Our Website</h1>
            <p>We are glad to have you here. Please click the button below to loan a laptop.</p>
            <a href="index.php" class="index-button">Data</a>
        </div>
    </div>
</body>
</html>
