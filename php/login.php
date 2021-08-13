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

    $sql = "SELECT userid, username, pass FROM people WHERE username=?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    $stmt->bind_result($userid, $username, $pass);
    $stmt->store_result();
    if($stmt->num_rows ==1) {
        if($stmt->fetch()) {
            $_SESSION['user'] = $userid;
            header("Location: profile.php");
        } else {
            echo "Invalid Username or Password" . mysqli_error($conn);
        }
    } else {
        echo "Invalid Username or Password" . mysqli_error($conn);
    }

}
?>
