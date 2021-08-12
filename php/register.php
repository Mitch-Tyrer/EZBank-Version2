<?php
    if(isset($_SESSION['user'])!="") {
        header("Location: profile.php")
    }

    include_once 'connect.php';

    if(isset($_POST['sca']) ) {
        $username = trim($_POST['username']);
        $fname = trim($_POST['fname']);
        $lname = trim($_POST['lname']);
        $pass = trim($_POST['pass']);
        $password = hash('sha256', $pass);

        $query = "INSERT INTO people(usernam,fname,lname,pass) values(?,?,?,?)";

        $stmt = $connect->prepare($query);
        $stmt->execute([$username,$fname,$lname,$password]);
        $rowsAdded = $stmt->rowCount();
            
            if ($rowsAdded == 1) {
                $message = "Success! Proceed to Login";
                unset($fname)
                unset($lname)
                unset($pass)
                header("Location: login.php");
            }
            else {
                $message = "Failed" . mysql_error()
            }
    }
?>