<?php
require('config.php');

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $usia = $_POST['age'];
    $jenis_kucing = $_POST['species'];
    $berat = $_POST['weight'];
    $jenis_kelamin = $_POST['gender'];
    $deskripsi = $_POST['description'];
    $lokasi = $_POST['location'];
    $telp = $_POST['phone'];
    $nama_rekening = $_POST['bank_name'];
    $no_rekening = $_POST['bank'];
    $user_id = $_POST['user_id'];

    //upload gambar
    $ekstensi_diperbolehkan = ['png', 'jpg'];
    $gambar = $_FILES['images']['name'];
    $eks = explode('.', $gambar);
    $ekstensi = strtolower(end($eks));

    $ukuran = $_FILES['images']['size'];
    $tmp = $_FILES['images']['tmp_name'];

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if($ukuran < 10044070) {
            move_uploaded_file($tmp, 'images/'.$gambar);

            $insert = mysqli_query($koneksi, "UPDATE data_kucing SET nama='$nama', umur='$usia', 
            jenis_kucing='$jenis_kucing', berat='$berat', jenis_kelamin='$jenis_kelamin', 
            deskripsi='$deskripsi', lokasi='$lokasi', gambar='$gambar', nomor_telp='$telp', nama_rekening='$nama_rekening', 
            no_rekening='$no_rekening', user_id='$user_id' WHERE id='$id'");

                if($insert) {
                    echo '
                    <script>
                    alert("Data Berhasil Diedit");
                    document.location.href="../index.php";
                    </script>
                    ';
                } else {
                    echo '
                    <script>
                    alert("Data Gagal Berhasil Diedit");
                    document.location.href="../edit-cat.php";
                    </script>';
                }
        } else {
            echo '
                <script>
                alert("Ukuran Terlalu Besar");
                document.location.href="../add-cat.php";
                </script>';
        }
    } else {
        $insert = mysqli_query($koneksi, "UPDATE data_kucing SET nama='$nama', umur='$usia', 
            jenis_kucing='$jenis_kucing', berat='$berat', jenis_kelamin='$jenis_kelamin', 
            deskripsi='$deskripsi', lokasi='$lokasi', nomor_telp='$telp', nama_rekening='$nama_rekening', 
            no_rekening='$no_rekening', user_id='$user_id' WHERE id='$id'");

                if($insert) {
                    echo '
                    <script>
                    alert("Data Berhasil Diedit");
                    document.location.href="../index.php";
                    </script>
                    ';
                } else {
                    echo '
                    <script>
                    alert("Data Gagal Berhasil Diedit");
                    document.location.href="../edit-cat.php";
                    </script>';
                }
    }

}

?>
