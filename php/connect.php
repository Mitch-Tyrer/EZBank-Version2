<?php
    $servername ='localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname ='users';

    $conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>