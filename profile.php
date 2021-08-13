<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You're Logged In</title>
</head>
<body>
    <?php include './php/profile.php' ?>
<p>Welcome to the protected profile page…<?php echo $userRow['fname']; ?></p>
    <p><a href="./php/logout.php">Logout Here</a></p>
</body>
</html>