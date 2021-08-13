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
        $conn = new PDO($dsn, $dbuser, $dbpass);
        echo "Connected to $dbname at $servername successfully.";
    } catch (PDOException $pe) {
        die("Could Not Connect to the database $dbname : " . $pe->getMessage());
    }

    // $conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);

    // if(!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
?>