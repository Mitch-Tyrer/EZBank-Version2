<?php
session_start();
require_once './php/connect.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$sql = "SELECT * FROM people WHERE userid=?";

$stmt = $conn->prepare($sql);
$stmt->execute([$_SESSION['user']]);

$userRow = $stmt->fetch(PDO::FETCH_ASSOC);

?>