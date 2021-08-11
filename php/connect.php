<?php
$servername ='127.0.0.1';
$dbname ='users';
$dbuser = 'root';
$dbpass = '';

$dsn = "mysql:host=$servername;dbname=$db;charset=utf8";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass, $options);
} catch (\PDOException $e) {
    thrownew \PDOException($e->getMessage(), (int)$e->getCode());
}
?>