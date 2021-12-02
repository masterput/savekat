<?php
require ('config.php');

// proses login
if(isset($_POST['login'])){
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
            header('location:home.php'); // redirect ke halaman home
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