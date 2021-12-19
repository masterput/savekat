<?php 
require('cat/config.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM data_kucing WHERE id='$id'");
$data = mysqli_fetch_array($query)
?>
    <div class="container bg-light mt-5 p-5">
        <h3 class="left mb-2">Edit Data Kucing</h3><hr>
        <p class="text-secondary">Silahkan untuk memasukkan data kucing di bawah!</p>
        <form action="cat/edit-cat-process.php" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
                <input type="hidden" value="<?php echo $data['user_id']; ?>" name="user_id" class="form-control" id="user_id">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="hidden" value="<?php echo $data['id'] ?>" name="id">
                <input type="text" value="<?php echo $data['nama'] ?>" name="name" class="form-control" id="name" placeholder="Masukkan nama kucing anda ..">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Usia</label>
                <div class="input-group">
                    <input type="text" value="<?php echo $data['umur'] ?>" name="age" class="form-control" placeholder="Masukkan usia kucing anda ..." aria-label="Masukkan usia kucing anda..." aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">tahun</span>
                </div>
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Jenis Kucing</label>
                    <select class="form-select" name="species">
                        <option <?php if( $data['jenis_kucing']=='Domestik/Kampung'){echo "selected"; } ?> value='Domestik/Kampung'>Domestik/Kampung</option>
                        <option <?php if( $data['jenis_kucing']=='Anggora'){echo "selected"; } ?> value='Anggora'>Anggora</option>
                        <option <?php if( $data['jenis_kucing']=='Persia'){echo "selected"; } ?> value='Persia'>Persia</option>
                        <option <?php if( $data['jenis_kucing']=='Siam'){echo "selected"; } ?> value='Siam'>Siam</option>
                        <option <?php if( $data['jenis_kucing']=='Maine Coon'){echo "selected"; } ?> value='Maine Coon'>Maine Coon</option>
                    </select>
            </div> 
            <div class="mb-3">
                <label for="weight" class="form-label">Berat</label>
                <div class="input-group">
                    <input type="text" value="<?php echo $data['berat'] ?>" name="weight" class="form-control" placeholder="Masukkan berat kucing anda ..." aria-label="Masukkan berat kucing anda..." aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">kg</span>
                </div>
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="gender">
                        <option <?php if( $data['jenis_kelamin']=='Jantan'){echo "selected"; } ?> value='Jantan'>Jantan</option>
                        <option <?php if( $data['jenis_kelamin']=='Betina'){echo "selected"; } ?> value='Betina'>Betina</option>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="description">Deskripsi</label>
                <textarea class="form-control"  id="description" name="description" rows="3" placeholder="Masukkan deskripsi mengenai kucing anda .."><?php echo $data['deskripsi'] ?></textarea>
            </div>
            <div class="mb-3">
                <img class="img-fluid img-detail" src="cat/images/<?php echo $data['gambar'] ?>">
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Gambar</label>
                <input type="file" value="<?php echo $data['gambar'] ?>" name="images" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Lokasi</label>
                    <select class="form-select" name="location">
                        <option <?php if( $data['lokasi']=='Bandung'){echo "selected"; } ?> value='Bandung'>Bandung</option>
                        <option <?php if( $data['lokasi']=='Tangerang'){echo "selected"; } ?> value='Tangerang'>Tangerang</option>
                        <option <?php if( $data['lokasi']=='Malang'){echo "selected"; } ?> value='Malang'>Malang</option>
                        <option <?php if( $data['lokasi']=='Bali'){echo "selected"; } ?> value='Bali'>Bali</option>
                        <option <?php if( $data['lokasi']=='Semarang'){echo "selected"; } ?> value='Semarang'>Semarang</option>
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
    </div>
