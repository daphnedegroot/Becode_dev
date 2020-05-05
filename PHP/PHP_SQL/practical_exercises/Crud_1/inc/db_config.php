<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'colyseum';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
mysqli_set_charset($conn,"utf8");

if (!$conn){
    echo "<div class='alert alert-danger'>No connection to database</div>";
    die();
} else {
    //echo "<div class='alert alert-success'>Connected to database</div>";
}