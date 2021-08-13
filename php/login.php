<?php
session_start();
if (isset($_SESSION['user']) != "") {
    header("Location: index.php");
}
include_once './php/connect.php';

if (isset($_POST['sca'])) {
    $username = trim($_POST['username']);
    $pass = trim($_POST['pass']);
    $password = hash('sha256', $pass);
    $query = "SELECT userid, username, pass FROM people WHERE username=?";

    $stmt = $conn->prepare($query);
    $stmt->execute([$username]);
    $count = mysqli_query($conn,$query);
    $row = mysqli_num_rows($count);
    if ($count == 1 && $row['pass'] == $password) {
        $_SESSION['user'] = $row['userid'];
        header("Location: profile.php");
    } else {
        $message = "Invalid Login";
    }
    $_SESSION['message'] = $message;
}
?>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <p>
    <h1>
        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>