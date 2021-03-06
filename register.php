<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./stylesheet.css" />
    <script src="./php/userAgent.js"></script>
    <title>EZBank</title>
  </head>
  <body>
    <?php include './php/register.php';?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"
          ><img src="./imgs/pngwing.com.png" alt="" style="width: 75px" />EZ
          Bank</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="register.php"
                >Create an Account?</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="about.php"
                tabindex="-1"
                aria-disabled="true"
                >About US</a
              >
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
          <h1>Thanks M*thaF*cker!</h1>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <img
              class="rounded float-lg-start"
              src="./imgs/imageonline-co-invertedimage_Mia.png"
              alt=""
            />
          </div>
          <div id="form-col" class="col bg-light p-lg-4">
            <form
              action="register.php"
              method="POST"
              id="registration-form"
              class="row g-3"
            >
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">First</label>
                <input
                  name="fname"
                  type="text"
                  class="form-control"
                  id="firstName"
                />
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Last</label>
                <input
                  name="lname"
                  type="text"
                  class="form-control"
                  id="lastName"
                />
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Email</label>
                <input
                  name="username"
                  type="text"
                  class="form-control"
                  id="inputEmail"
                  placeholder="username@domain.com"
                />
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label">Password</label>
                <input
                  name="pass"
                  type="password"
                  class="form-control"
                  id="inputPassword"
                  placeholder="Must be 8-12 Characters"
                />
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label"
                  >Confirm Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="confirmPassword"
                />
              </div>

              <div class="col-12">
                <button name="sca" id="register-btn" type="submit" class="btn btn-primary">
                  Register
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="app.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
