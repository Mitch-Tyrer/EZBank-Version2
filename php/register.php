<?php
    if(isset($_SESSION['user'])!="") {
        header("Location: profile.php");
    }

    include_once 'connect.php';

    if(isset($_POST['sca']) ) {
        $username = trim($_POST['']);
        $fname = trim($_POST['']);
        $lname = trim($_POST['']);
        $pass = trim($_POST['']);
        $password = hash('sha256', $pass);

        $sql = "INSERT INTO people (username,fname,lname,pass) VALUES (?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$username,$fname,$lname,$password]);
        
        if(mysqli_affected_rows($conn) > 0){
            $message = "Success! Proceed to Login!";
            unset($fname);
            unset($lname);
            unset($pass);
            header("LocationL index.php");
        } else {
            $message = "Failed " . mysqli_connect_error();
        }
    }
?>