<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://kit.fontawesome.com/003f54bd9b.js" crossorigin="anonymous"></script>
    <title>SaveKat</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="./img/logo/SaveKat.png" alt="Logo SaveKat"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="add-cat.php">Tambah Kucing Baru</a></li>
                            <li><a class="dropdown-item" href="edit-user.php">Edit Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- hero -->
    <div class="jumbotron jumbotron fluid px-4 py-4 bg-light">
        <div class="container">
            <h1 class="display-4 fw-bold lh-1 mb-3">Find. Love. Care.</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most
                        popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                        extensive prebuilt components, and powerful JavaScript plugins.</p>
            <a href="#main-content" class="btn btn-primary button-start">Get Started Now! :3</a>
        </div>
    </div>


    <!-- card -->
    <div class="container">
        <div class="text-center mb-5 mt-5 text-header">
            <h3>Cats Available for Adoption</h3>
        </div>
        <div class="row">
        <?php
        require('cat/config.php');
        $data = mysqli_query($koneksi, "SELECT * FROM data_kucing ORDER BY id DESC");
        while($cat = mysqli_fetch_array($data)){
            ?>
            <div class="col-sm-3 mb-3">
                <div class="card">
                    <img src="<?php echo $cat['gambar'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="icon">
                            <h5 class="card-title"><?php echo $cat['nama'] ?></h5>
                            <div class="location-card text-secondary" aria-label=""><i class="location-icon fas fa-map-marker-alt fa-fw"></i><?php echo $cat['lokasi'] ?></div>
                        </div>
                        <p class="card-text"><?php echo $cat['deskripsi'] ?></p>
                        <a href="cat-detail.php?id=<?=$cat['id'] ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <div class="d-flex justify-content-around mt-5">
        </div>
    </div>
    </div>
    <footer class="text-center text-lg-start text-muted mt-5">
    
        <section class="">
            <div class="container text-center text-md-start pt-5">
                <div class="row">
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <!-- Content -->
                        <div class="footer-logo">
                            <img src="./img/logo/SaveKat(White Ver.).png" alt="">
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="footer-title text-uppercase fw-bold mb-4">
                            Company
                        </h6>
                        <p>
                            <a href="about-us.php">About SaveKat</a>
                        </p>
                        <p>
                            <a href="contact-us.php">Contact Us</a>
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