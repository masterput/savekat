<?php
require('config.php');

// proses registrasi
if(isset($_POST['register'])){
    // jika tombol register diklik

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    // fungsi enkripsi
    $encryptPassword = password_hash($password, PASSWORD_DEFAULT);
    // insert to database
    $insert = mysqli_query($koneksi, "INSERT INTO user (nama, username, email, password, level) VALUES ('$name','$username','$email','$encryptPassword','$level')");

    if($insert) {
        echo '
        <script>
        alert("Registrasi Berhasil");
        window.location.href="login.php";
        </script>';
    } else {
        echo '
        <script>
        alert("Registrasi Gagal");
        window.location.href="signup.php";
        </script>
        ';
    }
}
?>
