<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM data_kucing WHERE id='$id'");
    $cat = mysqli_fetch_assoc($query);
    $user_id = $cat['user_id'];
$jumlah = mysqli_num_rows($query);
if($jumlah == 1) {
?>

    <div class="container">
        <div class="row">
            <div class="mt-5 col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row no-gutters">
                                <img src="cat/images/<?php echo $cat['gambar'] ?>" class="img-fluid" alt="...">
                                <div class="card-body mt-4">
                                    <h3 class="card-title"><?php if(isset($cat['nama'])) echo $cat['nama'] ?> <span class="text-secondary">(<?php echo $cat['umur'] ?> Bulan, <?php echo $cat['jenis_kelamin'] ?>)</span> </h3>
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
                            <?php 
                            $id_user = $_SESSION['id'];
                            if($user_id == $id_user || $id_user == 18) {
                                ?> 
                                    <a href="index.php?page=edit-cat&id=<?=$cat['id'] ?>" class="btn btn-primary">Edit Data</a>
                                    <a href="cat/delete.php?id=<?= $cat['id']; ?>" class="btn btn-danger">Delete Data</a>
                                <?php 
                            } 
                            ?>
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
<?php 
} else {
    header("Location:index.php");
}
} else {
    header("Location:index.php");
} ?>
