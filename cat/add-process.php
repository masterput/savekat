<?php
require('config.php');

if(isset($_POST['add'])) {

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
            move_uploaded_file($tmp, 'cat/images/'.$gambar);

            $insert = mysqli_query($koneksi, "INSERT INTO data_kucing (nama, umur, jenis_kucing, berat, jenis_kelamin, deskripsi, gambar, lokasi, nomor_telp, nama_rekening, no_rekening, user_id) 
                VALUES ('$nama','$usia','$jenis_kucing','$berat','$jenis_kelamin','$deskripsi','$gambar','$lokasi', '$telp', '$nama_rekening', '$no_rekening', '$user_id')");

            if($insert) {
                echo '
                <script>
                alert("Data Berhasil Ditambahkan");
                document.location.href="index.php";
                </script>
                ';
            } else {
                echo '
                <script>
                alert("Data Gagal Ditambahkan");
                document.location.href="../add-cat.php";
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
        echo '
                <script>
                alert("Ekstensi tidak diperbolehkan");
                document.location.href="../add-cat.php";
                </script>';
    }

}

?>
