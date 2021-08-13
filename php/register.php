<?php
    session_start();
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
        if($stmt->execute([$username, $fname, $lname, $pass])){
                echo "Records inserted successfully!";
                unset($fname);
                unset($lname);
                unset($pass);
                header("Location: login.php");

        } else {
                echo "ERROR: Could not Insert the Data: $sql. ";
            }

        // if($stmt = mysqli_prepare($conn, $sql)) {
        //     mysqli_stmt_bind_param($stmt, "ssss", $username, $fname, $lname, $password);
        //     if(mysqli_stmt_execute($stmt)) {
        //         echo "Records inserted successfully!";
        //         unset($fname);
        //         unset($lname);
        //         unset($pass);
        //         header("Location: login.php");
        //     } else {
        //         echo "ERROR: Could not execute query: $sql. " . mysqli_error($conn);
        //     }
        // } else {
        //     echo "ERROR: Could not prepare query: $sql. " . mysqli_error($conn);
        // }
        

    }
