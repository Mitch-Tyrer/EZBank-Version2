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
        $stmt->bind_param('ssss', $username,$fname,$lname,$password);
        $stmt->execute();
        
        if(mysqli_affected_rows($conn) > 0){
            $message = "Success! Proceed to Login!";
            unset($fname);
            unset($lname);
            unset($pass);
            header("Location: index.php");
        } else {
            $message = "Failed " . mysqli_connect_error();
        }
    }
?>