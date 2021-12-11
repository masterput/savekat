<?php
require('config.php');
if(isset($_POST['edit'])){
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

 
 $update = mysqli_query($koneksi, "UPDATE data_kucing SET nama='$nama', umur='$usia', jenis_kucing='$jenis_kucing', 
 berat='$berat', jenis_kelamin='$jenis_kelamin', deskripsi='$deskripsi', lokasi='$lokasi', nomor_telp='$telp', nama_rekening='$nama_rekening', no_rekening='$no_rekening' WHERE id='$id'") or die(mysqli_error($koneksi));

 //jika query update sukses
 if($update){
  
  echo '
        <script>
        alert("Data berhasil diperbarui!");
        document.location.href="../";
        </script>
        ';
  
 } else {
  echo '
        <script>
        alert("Data gagal diperbarui!");
        document.location.href="../";
        </script>
        ';  
 }
}
?>
