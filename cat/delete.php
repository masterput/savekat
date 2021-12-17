<?php 
if (isset($_GET['id'])) {
    include 'config.php';
$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM data_kucing WHERE id='$id'");

if ($query) {
    echo '
        <script>
        alert("Data Berhasil Dihapus");
        window.location.href="../index.php";
        </script>
        ';

} else {
    echo '
        <script>
        alert("Data Gagal Dihapus");
        window.location.href="../index.php";
        </script>
        ';
}
} else {
    header("Location:../index.php");
}
?>
