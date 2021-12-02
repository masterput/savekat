<?php
require ('config.php');

// proses registrasi
if(isset($_POST['register'])){
    // jika tombol register diklik

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // fungsi enkripsi
    $encryptPassword = password_hash($password, PASSWORD_DEFAULT);
    // insert to database
    $insert = mysqli_query($koneksi, "INSERT INTO user (nama, username, email, password) VALUES ('$name','$username','$email','$encryptPassword')");

    if($insert) {
        header('location:login.php'); // redirect ke halaman login
    } else {
        echo '
        <script>
        alert("Registrasi Gagal");
        window.location.href="register.php";
        </script>
        ';
    }
}
?>