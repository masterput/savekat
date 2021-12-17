<?php
require('config.php');

// proses login
if(isset($_POST['login'])){
    session_start();
    // jika tombol login diklik

    $email = $_POST['email'];
    $password = $_POST['password'];

    // insert to database
    $cekDb = mysqli_query($koneksi, "SELECT * FROM user where email='$email'");
    $hitung = mysqli_num_rows($cekDb);
    $pw = mysqli_fetch_array($cekDb);
    $passwordSekarang = $pw['password'];

    if($hitung>0) {
        // verifikasi password
        if(password_verify($password,$passwordSekarang)) {
            $_SESSION['email'] = $pw['email'];
            $_SESSION['id'] = $pw['id'];
            header('location:index.php'); // redirect ke halaman index
        } else {
            echo '
        <script>
        alert("Password Salah");
        window.location.href="login.php";
        </script>
        ';
        }
    } else {
        echo '
        <script>
        alert("Login Gagal");
        window.location.href="login.php";
        </script>
        ';
    }
}

?>
