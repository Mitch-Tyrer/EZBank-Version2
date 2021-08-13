<?php
    if(isset($_SESSION['user'])!="") {
        header("Location: ./php/profile.php");
    }

    include_once './php/connect.php';

    if(isset($_POST['sca']) ) {
        $username = trim($_POST['username']);
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $pass = trim($_POST['pass']);
        $password = hash('sha256', $pass);

        $sql = "INSERT INTO people (username,fname,lname,pass) VALUES (?,?,?,?)";

        if($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssss", $username, $fname, $lname, $password);
            if(mysqli_stmt_execute($stmt)) {
                echo "Records inserted successfully!";
                header("Location: ./php/login.php");
            } else {
                echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
            }
        } else {
            echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
        }
        
        mysqli_stmt_close($stmt);

        mysqli_close($conn);

    }
?>