<?php 
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    die("Error. Tidak ada ID yang dipilih");
}
require('cat/config.php');

$query = mysqli_query($koneksi, "SELECT * FROM data_kucing WHERE id='$id'")or die(mysql_error());
//$nomor = 1;
while($data = mysqli_fetch_array($query)){
// $jenis_kucing = array('Domestik/Kampung','Anggora','Persia','Siam','Maine Coon');
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
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
        <h3 class="left mb-2">Edit Data Kucing</h3><hr>
        <p class="text-secondary">Silahkan untuk memasukkan data kucing di bawah!</p>
        <form action="cat/edit-cat-process.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="hidden" value="<?php echo $data['id'] ?>" name="id">
                <input type="text" value="<?php echo $data['nama'] ?>" name="name" class="form-control" id="name" placeholder="Masukkan nama kucing anda ..">
            </div>
            <div>
                <label for="age" class="form-label">Usia</label>
                <div class="input-group mb-3">
                    <input type="text" value="<?php echo $data['umur'] ?>" name="age" class="form-control" placeholder="Masukkan usia kucing anda ..." aria-label="Masukkan usia kucing anda..." aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">tahun</span>
                </div>
            </div>
            <div class="form-group mb-3">
                <label>Jenis Kucing</label>
                    <select class="form-control" name="species">
                        <!-- <option>-Pilih Jenis Kucing-</option> -->
                        <option <?php if( $query=='Domestik/Kampung'){echo "selected"; } ?> value='Domestik/Kampung'>Domestik/Kampung</option>
                        <option <?php if( $query=='Anggora'){echo "selected"; } ?> value='Anggora'>Anggora</option>
                        <option <?php if( $query=='Persia'){echo "selected"; } ?> value='Persia'>Persia</option>
                        <option <?php if( $query=='Siam'){echo "selected"; } ?> value='Siam'>Siam</option>
                        <option <?php if( $query=='Maine Coon'){echo "selected"; } ?> value='Maine Coon'>Maine Coon</option>
                        <!-- <option>Domestik/Kampung</option>
                        <option>Anggora</option>
                        <option>Persia</option>
                        <option>Siam</option>
                        <option>Maine Coon</option> -->
                    </select>
            </div> 
            <div>
                <label for="weight" class="form-label">Berat</label>
                <div class="input-group mb-3">
                    <input type="text" value="<?php echo $data['berat'] ?>" name="weight" class="form-control" placeholder="Masukkan berat kucing anda ..." aria-label="Masukkan berat kucing anda..." aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">kg</span>
                </div>
            </div>
            <div class="form-group mb-6">
                <label>Jenis Kelamin</label>
                    <select class="form-control" name="gender">
                        <option>-Pilih Jenis Kelamin Kucing-</option>
                        <option>Jantan</option>
                        <option>Betina</option>
                    </select>
            </div>
            <div class="input-group mb-3">
                
            </div>
            <div class="mb-3">
                <label for="description">Deskripsi</label>
                <textarea class="form-control" value="<?php echo $data['deskripsi'] ?>" id="description" name="description" rows="3" placeholder="Masukkan deskripsi mengenai kucing anda .."></textarea>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Gambar</label>
                <input type="file" value="<?php echo $data['gambar'] ?>" name="images" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>
            <div class="form-group mb-3">
                <label>Lokasi</label>
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
                <input type="number" value="<?php echo $data['nomor_telp'] ?>" name="phone" class="form-control" placeholder="Masukkan nomor anda ..." aria-label="Masukkan nomor anda..." aria-describedby="basic-addon2" Required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="bank">Rekening <span class="text-secondary"> (BCA) </span> </label>
                <input type="number" value="<?php echo $data['no_rekening'] ?>" name="bank" class="form-control" placeholder="Masukkan nomor rekening anda ..." aria-label="Masukkan nomor rekening anda..." aria-describedby="basic-addon2" Required>
            </div>  
            <div class="mb-3">
                <label class="form-label" for="bank_name">Nama Pemilik Rekening</span> </label>
                <input type="text" value="<?php echo $data['nama_rekening'] ?>" name="bank_name" class="form-control" placeholder="Masukkan nama pemilik rekening ..." aria-label="Masukkan nama pemilik rekening..." aria-describedby="basic-addon2" Required>
            </div> 
            <button type="submit" name="edit" class="btn btn-primary">Update</button>
        </form>
        <?php } ?>
    </div>

    <footer class="text-center text-lg-start text-muted mt-5">
        <section class="">
            <div class="container text-center text-md-start pt-5">
                <div class="row">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
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
                            <a href="contact-us.php">Contact</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="footer-title text-uppercase fw-bold mb-4">
                            Address
                        </h6>
                        <p></i>Indonesia</p>
                        <!-- <p class="me-6">Kecamatan Coblong, Kota Bandung,</p>
                        <p class="me-6">Jawa Barat 40132</p> -->
                    </div>
                </div>
            </div>
        </section>
        
        <div class="footer-copyright p-4">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://github.com/masterput/SaveKat">SaveKat</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>