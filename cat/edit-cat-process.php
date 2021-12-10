<?php
if(isset($_POST['edit'])){
 
 require('config.php');
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

 
 $update = mysqli_query("UPDATE data_kucing SET nama='$nama', age='$usia', species='$jenis_kucing', 
 weight='$berat', gender='$jenis_kelamin', description='$deskripsi', location='$lokasi' WHERE id='$id'");
 
 //jika query update sukses
 if($update){
  
  echo '
        <script>
        alert("Data berhasil diperbarui!");
        document.location.href="../cat-detail.php";
        </script>
        ';
  
 } else {
  echo '
        <script>
        alert("Data gagal diperbarui!");
        document.location.href="../edit-cat.php";
        </script>
        ';  
 }

} else{ //jika tidak terdeteksi tombol simpan di klik
 echo '<script>window.history.back()</script>';

}
?>