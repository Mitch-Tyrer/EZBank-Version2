<?php
    $servername ='localhost';
    $dbname ='users';
    $dbuser = 'root';
    $dbpass = '';

    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";

    $connect = new mysql_connect($dsn, $dbuser, $dbpass);

    if(!$connect) {
        die("Could not connect: " . mysql_error());
    } else {
        echo 'Successfully Connected!'
        mysql_close($connect)
    }
?>
