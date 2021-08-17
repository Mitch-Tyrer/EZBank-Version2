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
    <?php 
    include './php/index.php';
    include './php/login.php'
  ?>
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
              <a class="nav-link" href="register.php"
                >Create an Account?</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                href="#"
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
      <div class="container">
        <div class="row">
          <div class="col">
            <img
              class="rounded float-lg-start"
              src="./imgs/About_Us_Left.png"
              alt=""
            />
          </div>
          <div class="col text-xxl-center text-white">
            <h1>Ezekiel 25:17</h1>
            <div class="container">
              <p class="fs-4">
                The path of the righteous man is beset on all sides <br />
                By the inequities of the selfish and the tyranny of evil men
                <br />
                Blessed is he who, in the name of charity and good will <br />
                Shepherds the weak through the valley of darkness <br />
                For he is truly his brother's keeper and the finder of lost
                children <br />
                And I will strike down upon thee <br />
                With great vengeance and furious anger Those who attempt to
                poison and destroy my brothers <br />
                And you will know my name is the Lord <br />
                When I lay my vengeance upon thee <br />
              </p>
            </div>
          </div>
          <div class="col">
            <img
              class="rounded float-lg-start"
              src="./imgs/About_Us_Right.png"
              alt=""
            />
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
