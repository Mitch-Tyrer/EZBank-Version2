<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./stylesheet.css">
    <title>Accounts</title>
</head>
<body>
    <?php include './php/profile.php' ?>

    <!-- <p>Welcome to the protected profile page…<?php echo $userRow['fname']; ?></p>
    <p><a href="./php/logout.php">Logout Here</a></p> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="./imgs/pngwing.com.png" alt="" style="width: 75px;">EZ Bank</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="justify-content-end" id="navbarNav">
            <ul class="navbar-nav" >
              <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Welcome, <?php echo $userRow['fname']; ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-none" href="register.php">Create an Account?</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <?php
                if($userRow['role'] == "administrator") {
                  echo '"<li class="nav-item">
                    <a class="nav-link" href="/edit.php">Admin Tools</a>
                  </li>"';
                }
              ?>
              <li class="nav-item">
                <a class="nav-link" href="./php/logout.php">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="masthead2">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" >
          <div class="d-flex justify-content-center">
              <div class="text-center">
                  <h1 class="mx-auto my-0 text-uppercase">Ezeikiel Banking</h1>
              </div>
          </div>
        </div>
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center table-responsive fixed-table-body">
          <table class="table table-hover table-dark">
            <thead>
              <tr>
                <th scope="col">Accounts</th>

                <th scope="col" class="text-end">Balances</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Checking  ...8675</th>

                <td class="text-end">$100,000</td>
              </tr>
              <tr>
                <th scope="row">Savings  ...0309</th>

                <td class="text-end">$200</td>
              </tr>
              <tr>
                <th scope="row">Credit Card ...1337</th>

                <td class="text-end">$500,000</td>
              </tr>
            </tbody>
          </table>
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