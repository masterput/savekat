<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Form Login</title>
  </head>
  <body>
    <div class="container">
        <div class="card login-form">             
            <div class="card-body">
              <h2 class="card-title">Login</h2>
              <h6 class="card-subtitle text-muted mb-4 mt-2 fw-bold">Please login to use this site!</h6>

              <form>
                <div class="mb-4">
                  <label for="exampleInputEmail1" class="form-label">Email*</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password*</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Min 8 character">
                </div>

                <div class="d-flex justify-content-between">
                    <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>

                    <div>
                        <a href="#" class="link">Forgot Password ?</a>
                    </div>
                </div>

                <div class="d-grid mt-3">
                    <button type="submit" class="btn btn-custom btn-login">Login</button>
                </div>

                <div class="mt-3 text-center">
                    <label>Not registered yet ? <a href="#" class="link">Create an account</a></label>
                </div>
            </form>
            </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>