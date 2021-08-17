<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="./stylesheet.css">
	<title>Admin Tools</title>
</head>

<body>
	<?php include './php/edit.php' ?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="./imgs/pngwing.com.png" alt="" style="width: 75px;">EZ Bank</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="justify-content-end" id="navbarNav">
            <ul class="navbar-nav" >
              <li class="nav-item">
              <a class="nav-link" href="profile.php" tabindex="-1" aria-disabled="true">Welcome, <?php echo $userRow['fname']; ?></a>
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

		<div class="container">
			<div class="row">
				<div class="col">
					<img class="rounded float-lg-start" src="./imgs/badmfer.png" alt="" style="width: 500px;" />
				</div>
				<div id="admin-table" class="col bg-light p-lg-4">
					<?php if (count($userArray) > 0) : ?>
						<table class="table table-hover">
							<thead>
								<tr>
									<th><?php echo implode('</th><th>', array_keys(current($userArray))); ?></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($userArray as $row) : array_map('htmlentities', $row); ?>
									<tr>
										<td><?php echo implode('</td><td style="word-wrap: break-word">', $row); ?></td>
										<td>
											<form name="mkadmin" action="edit.php" method="post">
												<input type="hidden" name="userid" value="<?php echo $row["userid"] ?>" />
												<input type="submit" name="adminsubmit" value="Make Admin" />
											</form>
										</td>
										<td>
											<form name="mkuser" action="edit.php" method="post">
												<input type="hidden" name="userid" value="<?php echo $row["userid"] ?>" />
												<input type="submit" name="usersubmit" value="Make User" />
											</form>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					<?php endif; ?>

				</div>
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