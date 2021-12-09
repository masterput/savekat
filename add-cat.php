<?php
require('cat/add-process.php')
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
            <a class="navbar-brand" href="#"><img src="./images/logo/SaveKat.png" alt="Logo SaveKat"></a>
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

    <div class="container bg-light mt-5 p-5">
        <h3 class="left mb-2">Tambahkan Kucing Baru</h3><hr>
        <p class="text-secondary">Silahkan untuk memasukkan data kucing di bawah!</p>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama kucing anda .." Required>
            </div>
            <div>
                <label for="age" class="form-label">Usia</label>
                <div class="input-group mb-3">
                    <input type="text" name="age" class="form-control" placeholder="Masukkan usia kucing anda ..." aria-label="Masukkan usia kucing anda..." aria-describedby="basic-addon2" Required>
                    <span class="input-group-text" id="basic-addon2">bulan</span>
                </div>
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Jenis Kucing</label>
                    <select class="form-control" name="species">
                        <option>-Pilih Jenis Kucing-</option>
                        <option>Domestik/Kampung</option>
                        <option>Anggora</option>
                        <option>Persia</option>
                        <option>Siam</option>
                        <option>Maine Coon</option>
                    </select>
            </div> 
            <div>
                <label for="weight" class="form-label">Berat</label>
                <div class="input-group mb-3">
                    <input type="text" name="weight" class="form-control" placeholder="Masukkan berat kucing anda ..." aria-label="Masukkan berat kucing anda..." aria-describedby="basic-addon2" Required>
                    <span class="input-group-text" id="basic-addon2">kg</span>
                </div>
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Jenis Kelamin</label>
                    <select class="form-control" name="gender">
                        <option>-Pilih Jenis Kelamin Kucing-</option>
                        <option>Jantan</option>
                        <option>Betina</option>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="description">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukkan deskripsi mengenai kucing anda .." Required></textarea>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Gambar</label>
                <input type="file" name="images" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Lokasi</label>
                    <select class="form-control" name="location">
                        <option>-Pilih Lokasi-</option>
                        <option>Bandung</option>
                        <option>Tangerang</option>
                        <option>Malang</option>
                        <option>Bali</option>
                        <option>Semarang</option>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="phone">No. Whatsapp <span class="text-secondary"> (+62) </span> </label>
                <input type="number" name="phone" class="form-control" placeholder="Masukkan nomor anda ..." aria-label="Masukkan nomor anda..." aria-describedby="basic-addon2" Required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="bank">Rekening <span class="text-secondary"> (BCA) </span> </label>
                <input type="number" name="bank" class="form-control" placeholder="Masukkan nomor rekening anda ..." aria-label="Masukkan nomor rekening anda..." aria-describedby="basic-addon2">
            </div>  
            <div class="mb-3">
                <label class="form-label" for="bank">Nama Pemilik Rekening</span> </label>
                <input type="text" name="bank" class="form-control" placeholder="Masukkan nama pemilik rekening ..." aria-label="Masukkan nama pemilik rekening..." aria-describedby="basic-addon2">
            </div> 
            <button type="submit" name="add" class="btn btn-primary">Upload</button>
        </form>
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
                            <a href="#!">About SaveKat</a>
                        </p>
                        <p>
                            <a href="#!">Contact Us</a>
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