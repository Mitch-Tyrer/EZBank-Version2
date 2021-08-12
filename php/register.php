<?php
    if(isset($_SESSION['user'])!="") {
        header("Location: profile.php");
    }

    include_once './php/connect.php';

    if(isset($_POST['sca']) ) {
        $username = trim($_POST['username']);
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $pass = trim($_POST['pass']);
        $password = hash('sha256', $pass);

        $sql = "INSERT INTO people (username,fname,lname,pass) VALUES (?,?,?,?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssss', $username, $fname, $lname, $password);
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