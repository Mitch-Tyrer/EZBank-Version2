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
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username]);
    $count = $stmt->rowCount();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($count == 1 && $row['pass'] == $password) {
        $_SESSION['user'] = $row['userid'];
        header("Location: profile.php");
    } else {
        $message = "Invalid Login";
        header("Location: index.php");
    }
    $_SESSION['message'] = $message;
}


if (isset($message)) {
    echo $message;
}
