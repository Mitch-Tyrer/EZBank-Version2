<?php
session_start();
require_once './php/connect.php';

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

$sql = "SELECT * FROM people WHERE userid=?";

$stmt = $conn->prepare($sql);
$stmt->execute([$_SESSION['username']]);
$userRow = $stmt->fetch();
?>