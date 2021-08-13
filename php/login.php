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

    $sql = "SELECT userid, username, pass FROM people WHERE username = ?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    $count = $stmt->rowCount();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($stmt->num_rows == 1 && $row['pass' == $password]) {
        $_SESSION['user'] = $row['userid'];
        header("Location: profile.php");
    } else {
        $msg = 'Invalid Login';
    }

    $_SESSION['message'] = $message;

}
?>
