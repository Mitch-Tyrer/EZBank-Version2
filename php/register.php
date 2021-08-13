<?php
session_start();
if( isset($_SESSION['user'])!="" ){
 header("Location: profile.php");
}
include_once './php/connect.php';

if ( isset($_POST['sca']) ) {
 $username = trim($_POST['username']);
 $fname = trim($_POST['fname']);
 $lname = trim($_POST['lname']);
 $pass = trim($_POST['pass']);
 $password = hash('sha256', $pass);

 $query = "INSERT INTO people(username,fname,lname,pass) VALUES(?, ?, ?, ?)";
 $stmt = $pdo->prepare($query);
 $stmt->execute([$username,$fname,$lname,$password]);
 $rowsAdded = $stmt->rowCount();

  if ($rowsAdded == 1) {
   $message = "Success! Proceed to login";
   unset($fname);
   unset($lname);
   unset($pass);
   header("Location: index.php");
  }
  else
  {
   $message = "Failed! " . $pdo->errorInfo();
  }
}

