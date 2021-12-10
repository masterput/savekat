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

    // uplaod gamabr
    $namaFolder="cat/images/"; 
    if(!empty($_FILES["images"]["tmp_name"])) {
        $jenis_gambar = $_FILES['images']['type'];
        if($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || 
        $jenis_gambar == "image/gif" || $jenis_gambar == "image/png") {
            $gambar = $namaFolder.basename($_FILES['images']['name']);

            if(move_uploaded_file($_FILES['images']['tmp_name'], $gambar)) {

            $insert = mysqli_query($koneksi, "INSERT INTO data_kucing (nama, umur, jenis_kucing, berat, jenis_kelamin, deskripsi, gambar, lokasi, nomor_telp, nama_rekening, no_rekening) 
                VALUES ('$nama','$usia','$jenis_kucing','$berat','$jenis_kelamin','$deskripsi','$gambar','$lokasi', '$telp', '$nama_rekening', '$no_rekening')");

                if($insert) {
                    echo '
                    <script>
                    alert("Input Data Berhasil");
                    document.location.href="../capstone/home.php";
                    </script>
                    ';
                } else {
                    echo '
                    <script>
                    alert("Input Data Gagal");
                    document.location.href="../add-cat.php";
                    </script>';
                }
            }
        }
    }
}

?>