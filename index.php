<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/003f54bd9b.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./img/logo/SaveKat_ico.png">
    <title>SaveKat</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./img/logo/SaveKat.png" alt="Logo SaveKat"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if(isset($_GET['page']) == "home") {echo '';}  else { echo 'active';} ?>" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if(isset($_GET['page']) == "about-us") {echo 'active';} ?>" href="index.php?page=about-us">About Us</a>
                    </li>
                    <?php 
                    if(isset($_SESSION['email'])) {
                        ?>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="index.php?page=add-cat">Tambah Kucing Baru</a></li>
                            <li><a class="dropdown-item" href="logout-process.php">Logout</a></li>
                        </ul>
                        </li>
                        <?php 
                    } else if (isset($_SESSION['email']) == ""){
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Sign Up</a>
                        </li>
                        <?php 
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <?php 
    include "menu.php";
    ?>

    <footer class="text-center text-lg-start text-muted mt-5">
        <section class="">
            <div class="container text-center text-md-start pt-5">
                <div class="row">
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <div class="footer-logo">
                            <img src="./img/logo/SaveKat(White Ver.).png" alt="">
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="footer-title text-uppercase fw-bold mb-4">
                            Company
                        </h6>
                        <p>
                            <a href="index.php?page=about-us">About SaveKat</a>
                        </p>
                        <p>
                            <a href="index.php?page=contact-us">Contact Us</a>
                        </p>
                    </div>
    
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="footer-title text-uppercase fw-bold mb-4">
                            Address
                        </h6>
                        <p></i> Jl. Ganesa No.10, Lb. Siliwangi,</p>
                        <p class="me-6">Kecamatan Coblong, Kota Bandung,</p>
                        <p class="me-6">Jawa Barat 40132</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer-copyright p-4 mt-4">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://github.com/masterput/SaveKat">SaveKat</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
