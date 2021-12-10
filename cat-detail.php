<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("Error. Tidak ada ID yang dipilih");
}
require('cat/config.php');
$query = mysqli_query($koneksi, "SELECT * FROM data_kucing WHERE id='$id'");
$cat = mysqli_fetch_assoc($query);
?>
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
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-us.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="container">
        <div class="row">
            <div class="mt-5 col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row no-gutters">
                                <img src="<?php echo $cat['gambar'] ?>" class="img-fluid" alt="...">
                                <div class="card-body mt-4">
                                    <h3 class="card-title"><?php echo $cat['nama'] ?> <span class="text-secondary">(<?php echo $cat['umur'] ?> Bulan, <?php echo $cat['jenis_kelamin'] ?>)</span> </h3>
                                    <hr>
                                    <div class="location text-secondary" aria-label="">
                                        <i class="location-icon fas fa-map-marker-alt fa-fw"></i><?php echo $cat['lokasi'] ?>
                                    </div>
                                    <div class="card-detail">
                                        <p><?php echo $cat['jenis_kucing'] ?> <span class="bullet">•</span> <?php echo $cat['berat'] ?> kg</p>
                                    </div>
                                    <div class="card-description">
                                        <p><?php echo $cat['deskripsi'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <a href="edit-cat.php?id=<?=$cat['id'] ?>">Edit Data</a>
                        </div>
                    </div>
                </div>
        
            <div class="card-detail__user mt-5 col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row no-gutters">
                                <div class="card-image__user">
                                    <i class="user-icon fas fa-user"></i>
                                </div>
                                <div class="card-title__user">
                                    <p><?php echo $cat['nama_rekening'] ?></p>
                                </div><hr>
                                <div class="mb-3">
                                    <i class="fab fa-whatsapp me-2"></i><?php echo $cat['nomor_telp'] ?>
                                </div>
                                <div class="mb-2">
                                    <i class="fas fa-money-check-alt me-2"></i><?php echo $cat['no_rekening'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <footer class="text-center text-lg-start text-muted mt-5">
    
        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start pt-5">
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <!-- Content -->
                        <div class="footer-logo">
                            <img src="./img/logo/SaveKat(White Ver.).png" alt="">
                        </div>
                    </div>
                    <!-- Grid column -->
    
                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="footer-title text-uppercase fw-bold mb-4">
                            Company
                        </h6>
                        <p>
                            <a href="about-cat.php">About SaveKat</a>
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