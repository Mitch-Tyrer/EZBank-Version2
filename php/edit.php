<?php
session_start();
require_once 'connect.php';

if(!isset($_SESSION['user'])){
 header("Location: index.php");
 exit;
}
$query = "SELECT * FROM people WHERE userid=?";
$stmt = $pdo->prepare($query);
$stmt->execute([$_SESSION['user']]);
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);

// Check to see if this user has admin role, send to index if not
if($userRow['role'] != 'administrator') {
	header("Location: index.php");
	exit;
}

// Process submission to make administrator
if ( isset($_POST['adminsubmit']) ) {
	$userID= trim($_POST['userid']);
	
	$query = "UPDATE people SET ROLE='administrator' WHERE userid=?";
	$stmt = $pdo->prepare($query);
	$stmt->execute([$userID]);
}

// Process submission to make User
if ( isset($_POST['usersubmit']) ) {
	$userID= trim($_POST['userid']);
	
	$query = "UPDATE people SET ROLE='user' where userid=?";
	$stmt = $pdo->prepare($query);
	$stmt->execute([$userID]);
}

// Get list of all users into array to allow editing
$query = "SELECT userid, username, fname, lname, ROLE FROM people";
$stmt = $pdo->prepare($query);
$stmt->execute();
$userArray = $stmt->fetchAll();
