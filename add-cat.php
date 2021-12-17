<?php
require('cat/add-process.php')
?>

    <div class="container bg-light mt-5 p-5">
        <h3 class="left mb-2">Tambahkan Kucing Baru</h3><hr>
        <p class="text-secondary">Silahkan untuk memasukkan data kucing di bawah!</p>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="hidden" value="<?php echo $_SESSION['id']; ?>" name="user_id" class="form-control" id="user_id">
            </div>
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
                <label>Jenis Kucing</label>
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
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Masukkan deskripsi mengenai kucing anda .." Required></textarea>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Gambar</label>
                <input type="file" name="images" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
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
                <input type="number" name="phone" class="form-control" placeholder="Masukkan nomor anda ..." aria-label="Masukkan nomor anda..." aria-describedby="basic-addon2" Required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="bank">Rekening <span class="text-secondary"> (BCA) </span> </label>
                <input type="number" name="bank" class="form-control" placeholder="Masukkan nomor rekening anda ..." aria-label="Masukkan nomor rekening anda..." aria-describedby="basic-addon2">
            </div>  
            <div class="mb-3">
                <label class="form-label" for="bank_name">Nama Pemilik Rekening</span> </label>
                <input type="text" name="bank_name" class="form-control" placeholder="Masukkan nama pemilik rekening ..." aria-label="Masukkan nama pemilik rekening..." aria-describedby="basic-addon2">
            </div> 
            <button type="submit" name="add" class="btn btn-primary">Upload</button>
        </form>
    </div>
