<?php

$dsn = "mysql:host=localhost;dbname=weatherapp";
$db_user = 'root';
$db_pass = '';

try {
    $conn = new PDO($dsn, $db_user, $db_pass);

    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected Successfully!";
} catch(PDOException $e) {
    echo $e->getMessage();
}