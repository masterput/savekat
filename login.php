<?php
require('cat/login-process.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="./img/logo/SaveKat-Icon(White).png" type="image/png">
    <title>Login</title>
  </head>
  <body>
    <?php 
    session_start();
    if(isset($_SESSION['email'])) {
      header('location: index.php');
  }
    ?>
    <div class="container">
      <div class="card-login">
      <div class="card login-form">             
            <div class="card-body">
            <?php 
            if(isset($_SESSION['login'])) {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert"><?php echo $_SESSION['login']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <?php 
                unset($_SESSION['login']);
            }
            ?>
              <h2 class="card-title">Login</h2>
              <h6 class="card-subtitle text-muted mb-4 mt-2 fw-bold">Please login to use this site!</h6>

              <form action="" method="POST">
                <div class="mb-4">
                  <label for="email" class="form-label">Email*</label>
                  <input type="email" class="form-control" id="email" name="email" aria-label="Masukkan email anda" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password*</label>
                  <input type="password" class="form-control" id="password" name="password" aria-label="Masukkan password anda" placeholder="Min 8 character" required>
                </div>

                <!--<div class="d-flex justify-content-between">
                    <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>

                    <div>
                        <a href="#" class="link">Forgot Password ?</a>
                    </div>
                </div> -->

                <div class="d-grid mt-3">
                    <button type="submit" name="login" class="btn btn-custom btn-login">Login</button>
                </div>

                <div class="mt-3 text-center">
                    <label>Not registered yet ? <a href="signup.php" class="link">Create an account</a></label>
                </div>
            </form>
            </div>
          </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>
