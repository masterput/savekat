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
            <a class="navbar-brand" href="#"><img src="./images/logo/SaveKat.png" alt="Logo SaveKat"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about-us.html">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="add-cat.html">Tambah Kucing Baru</a></li>
                            <li><a class="dropdown-item" href="edit-user.html">Edit Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="mt-5">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row no-gutters">
                                <div class="card-body">
                                    <h3 class="card-title">Contact Us</h3>
                                    <hr>
                                    <div class="card-description mt-3">
                                        <p>Ada pertanyaan terkait website kita? Tanyakan saja!</p>
                                    </div>
                                    <div class="mb-3">
                                        <i class="fas fa-phone-alt me-2"></i> 021 554 4432
                                    </div>
                                    <div class="mb-3">
                                        <i class="fas fa-envelope me-2"></i> savekat@gmail.com
                                    </div>
                                    <div class="mb-3">
                                        <i class="fab fa-whatsapp me-2"></i> +62 8746 7288
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
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
                            <img src="./images/logo/SaveKat(White Ver.).png" alt="">
                        </div>
                    </div>
                    <!-- Grid column -->
    
                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="footer-title text-uppercase fw-bold mb-4">
                            Company
                        </h6>
                        <p>
                            <a href="about-us.html">About SaveKat</a>
                        </p>
                        <p>
                            <a href="contact-us.html">Contact Us</a>
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