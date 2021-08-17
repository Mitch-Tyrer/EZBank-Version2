<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesheet.css">
    <title>EZ Bank</title>
  </head>
  <body>
    <?php 
      include './php/index.php';
      include './php/login.php'
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="./imgs/pngwing.com.png" alt="" style="width: 75px;">EZ Bank</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="justify-content-end" id="navbarNav">
            <ul class="navbar-nav" >
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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

      <section class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" >
          <div class="d-flex justify-content-center">
              <div <?php echo ($msg =='') ? 'class="text-center"' : 'class="text-center d-none"';?>>
                  <h1 class="mx-auto my-0 text-uppercase">Ezeikiel Banking</h1>
                  <h2 class="mx-auto mt-2 mb-5" style="color: whitesmoke;">The path of the righteous man</h2>
                  <button id="login" type="button" class="btn btn-primary">Login</button>
              </div>
          </div>
          <div <?php echo ($msg =='') ? 'class="d-none container align-items-center justify-content-center"' : 'class="NaN"' ?>>
            <form action="login.php" method="POST" id="login-form" class="bg-light p-lg-4">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <?php echo ($msg !== '') ? '<span class="error"><p>Invalid Login</p></span>' : null; ?>
                <input name="username" type="text" class="form-control" id="inputEmail" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="pass" type="password" class="form-control" id="inputPassword">
              </div>

              <div class="text-center">
                <div class="mb-3">
                  <a href="register.php">Create an Account</a>
                </div>
                <div class="mb-3">
                  <a href="forgot.php">Forgot Password?</a>
                </div>
              </div class="justify-content-center">
              <button name="sca" type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
      </div>

      </section>

    <!-- Optional JavaScript; choose one of the two! -->
      <script src="app.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>