<?php
 require_once "class_laporan.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>LaporanMahasiswa</title>
   

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }

        .btn-primary {
            background-color: #4CAF50;
            border: none;
        }

        .btn-primary:hover {
            background-color: #45a049;
        }

        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 0 0.2rem rgba(76, 175, 80, 0.25);
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">WEB02</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="reviewDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Review PHP
                </a>
                <div class="dropdown-menu" aria-labelledby="reviewDropdown">
                    <a class="dropdown-item" href="#">Review 1</a>
                    <a class="dropdown-item" href="#">Review 2</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">More Reviews</a>
                </div>
            </li>
            <li class="nav-item dropdown"> <!-- Moved the second dropdown to the same <ul> -->
                <a class="nav-link dropdown-toggle" href="#" id="oopDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PHP5 OOP
                </a>
                <div class="dropdown-menu" aria-labelledby="oopDropdown">
                    <a class="dropdown-item" href="#">Introduction</a>
                    <a class="dropdown-item" href="#">Classes</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Advanced Topics</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="---------------------------------------------" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Submit</button>
        </form>
    </div>
</nav>


    
<div class="container mt-4">
        <legend>Form Nilai Ujian</legend>
        
        <hr>
        <form method="POST" action="class.php">
            <div class="form-group row">
                <label for="quantity" class="col-sm-4 col-form-label">Nim : </label>
                <div class="col-sm-8">
                    <input id="quantity" name="nim" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row" style="margin-top: 20px;">
                <label for="mk" class="col-sm-4 col-form-label">Pilih Mata Kuliah :</label>
                <div class="col-sm-8">
                    <select class="form-control" name="mk" id="mk">
                        <option value="Dasar-dasar Pemrograman">Dasar-dasar Pemrograman</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Sistem Operasi">Sistem Operasi</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-sm-4 col-form-label">Nilai : </label>
                <div class="col-sm-8">
                    <input id="nilai" name="nilai" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>