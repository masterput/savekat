<?php
require('cat/signup-process.php');
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
    <title>Sign-Up</title>
  </head>
  <body>
    <div class="container container-signup">
        <div class="card-signup">             
            <div class="card-body">
              <h2 class="card-title">Sign-Up</h2>
              <h6 class="card-subtitle text-muted mb-4 mt-2 fw-bold">Please sign-up to use this site!</h6>
              <form action="" method="POST">
                <div class="input-signup">
                  <div class="mb-3">
                      <label for="name" class="form-label">Name*</label>
                      <input type="text" class="form-control" id="name" name="name" aria-label="Masukkan nama anda" placeholder="Your Name" Required>
                  </div>
                  <div class="mb-3">
                      <label for="username" class="form-label">Username*</label>
                      <input type="text" class="form-control" id="username" name="username" aria-label="Masukkan username anda" placeholder="Your Username" Required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="email" name="email" aria-label="Masukkan email anda" placeholder="Your Email" Required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password*</label>
                    <input type="password" class="form-control" id="password" name="password" aria-label="Masukkan password anda" placeholder="Min 8 character" Required>
                  </div>
                    <input type="hidden" value="user" name="level">
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" name="register" class="btn btn-custom btn-login">Sign Up</button>
                </div>

                <div class="mt-3 text-center">
                  <label>Already have an account ? <a href="login.php" class="link">Log in your account</a></label>
                </div>
            </form>
            </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
