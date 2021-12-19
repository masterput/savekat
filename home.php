    <div class="jumbotron jumbotron fluid px-4 py-4 bg-light">
        <div class="container container-jumbotron">
            <?php 
            if(isset($_SESSION['logout'])) {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo $_SESSION['logout']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <?php 
                unset($_SESSION['logout']);
            }
            ?>
            <h1 class="display-4 fw-bold lh-1 mb-3">Cari. Cintai. Rawat.</h1>
            <p class="lead">Cari kucing yang cocok denganmu disini.</p>
            <a href="#main-content" class="btn btn-primary button-start">Mulai Sekarang! :3</a>
        </div>
    </div>

    <div class="container container-card" id="main-content">
        <div class="text-center mb-5 mt-5 text-header">
            <h3>Kucing Yang Siap Untuk Diadopsi</h3>
        </div>
        <div class="row">
        <?php
        require('cat/config.php');
        $data = mysqli_query($koneksi, "SELECT * FROM data_kucing ORDER BY id DESC");
        while($cat = mysqli_fetch_array($data)){
            ?>
            <div class="col-sm-4 mb-3">
                <div class="card card-cat">
                    <img src="<?php echo $cat['gambar'] ?>" class="card-image" alt="...">
                    <div class="card-body">
                        <div class="icon">
                            <h5 class="card-title"><?php echo $cat['nama'] ?></h5>
                            <div class="location-card text-secondary" aria-label=""><i class="location-icon fas fa-map-marker-alt fa-fw"></i><?php echo $cat['lokasi'] ?></div>
                        </div>
                        <p class="card-text mt-2"><?php echo $cat['deskripsi'] ?></p>
                        <?php 
                        if(isset($_SESSION['email'])) {
                            ?>
                                <a href="index.php?page=cat-detail&id=<?=$cat['id'] ?>" class="btn btn-primary">Detail</a>
                            <?php 
                        } else {
                            $_SESSION['login'] = "Anda harus login terlebih dahulu!";
                            ?>
                            <a href="login.php" class="btn btn-primary">Detail</a>
                            <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        </div>
    </div>
