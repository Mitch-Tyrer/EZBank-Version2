<?php
session_start();
require_once './php/connect.php';

if(!isset($_SESSION['user'])){
 header("Location: index.php");
 exit;
}
$query = "SELECT * FROM people WHERE userid=?";
$stmt = $pdo->prepare($query);
$stmt->execute([$_SESSION['user']]);
$userRow = $stmt->fetch(PDO::FETCH_ASSOC);
