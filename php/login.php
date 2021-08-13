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

    if($stmt = $conn->prepare($sql)) {
        if($stmt->execute([$username])) {
            $stmt->store_result();
            if($stmt->mysqli_num_rows == 1){
                $stmt->bind_result($userid, $username, $pass);
                if($stmt->fetch()){
                    if(password_verify($password, $hashed_password)){
                        $_SESSION['user'] = $row['userid'];
                        header("Location: profile.php");
                    } else {
                        echo "Invalid Username or Password" . mysqli_error($conn);
                    }
                } else {
                    echo "Invalid Username or Password" . mysqli_error($conn);
                }
            } else {
                echo "Invalid Username or Password" . mysqli_error($conn);
            }
        } else {
            echo "Something Went Wrong!" . mysqli_error($conn);
        }
    }

}
?>
