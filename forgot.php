<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="/stylesheet.css">
  <title>Hello, world!</title>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="./imgs/pngwing.com.png" alt="" style="width: 75px;">EZ
        Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Create an Account?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="masthead2">
    <div class="container text-center d-none" id="emailSent">
      <div class="text-white mb-4 text-center">
        <h1>An email to reset your password has been sent!</h1>
      </div>
    </div>
    <div class="container justify-content-center">

      <div id="form-row" class="row">
        <div class="col-lg-8">
          <p class="text-white-50">
          <div class="form-gap"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="text-white mb-4">
                      <h3><i class="fa fa-lock fa-4x"></i></h3>
                      <h2 class="text-white mb-4">Forgot Password?</h2>
                      <p>You can reset your password here.</p>
                      <form action="" id="reset-form">
                        <input type="text" name="email" id="inputEmail" placeholder="Email Address">
                        <input class="btn btn-primary" style="margin-top: 10px;" value="Reset Password" type="button" id="reset-pass-btn">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </p>
        </div>
      </div>
      <div class="row">
        <img class="rounded float-lg-start" src="./imgs/lost_travolta.png" alt="" style="width:auto">
      </div>

    </div>

    </div>

  </section>

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="app.js"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>