<?php
    $servername ='localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname ='users';

    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass, $options);
   } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
   }

    // $conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);

    // if(!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
